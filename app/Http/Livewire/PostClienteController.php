<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\company;
use App\Models\Sale;
use App\Models\DetailSale;
use App\Models\TicketWallet;
use Illuminate\Support\Facades\Storage; //facade para manipular imagenes en laravel
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationPost;
use Livewire\withFileUploads; // trait para subir imagenes
use Livewire\withPagination; //trait paginacion
use Darryldecode\Cart\Facades\CartFacade as Cart; 
use DB;


class PostClienteController extends Component
{
    use withFileUploads; 
    use WithPagination; 

    public $total, $cantidadCupones;



     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function mount(){
        $this->total = Cart::getTotal();
        $this->cantidadCupones = Cart::getTotalQuantity();
    }

    private $pagination = 8;
    public function render()
    {
        $tickets = Ticket::join('companies as c', 'c.id','tickets.company_id')
                    ->where([
                        ['statusTicket', '=', 'Oferta Aprobada'],
                        ['beging', '<=', date('Y-m-d')],
                        ['limit', '>=', date('Y-m-d')],
                        ['quantity', '>', 0],
                    ])
                    ->orWhere([
                        ['statusTicket', '=', 'Oferta Aprobada'],
                        ['beging', '<=', date('Y-m-d')],
                        ['limit', '>=', date('Y-m-d')],
                        ['quantity', '=', null],
                    ])
                    ->select('c.nameCompanies','tickets.*')->orderBy('name','asc')->paginate($this->pagination);

        return view('livewire.post-cliente.post-cliente',[
            'tickets' => $tickets,
            'cart'=>Cart::getContent()->sortBy('name')
        ])->extends('layouts.theme.app')
        ->section('content');
    }


    protected $listeners = [ 
        'agregar' => 'agregarTicket',
        'removeItem' => 'removeItem',
        'clearCart' => 'clearCart',
        'saveSale' => 'saveSale'
    ]; 


    public function agregarTicket($id, $cant = 1){

        $cupon = Ticket::where('id', $id)->first();


        if($cupon == null){
            $this->emit('ticket-no-encontrado','El ticket no fue encontrado');
        } else {
            if ($this->InCart($cupon->id)) {
                $this->increaseQty($cupon->id);
                return;
            }

            if($cupon->quantity != null){
                if ($cupon->quantity <1 ) {
                       $this->emit('no-stock', 'insuficiente');
                        return;
                }
            
            }
            if ($cupon->quantity == null || $cupon->quantity >=1) {
                Cart::add($cupon->id,$cupon->name,$cupon->promotion,$cant,$cupon->image);
                $this->total = Cart::getTotal();
                $this->emit('cupon-agregado-carrito','El cupon ha sido agregado');
            }
        }
    }

    public function InCart($cuponId){
        $exist = Cart::get($cuponId);
        if ($exist) 
            return true;
        else 
            return false;
    }


    public function increaseQty($cuponId, $cant = 1){
        $title ='';
        $cupon = Ticket::find($cuponId);
        $exist = Cart::get($cuponId);
        if ($exist)
           $title = 'Cantidad Actualizada';
       else
            $title = 'Cupon Agregado';


        if($exist){
            if ($cupon->quantity != null) {
                if ($cupon->quantity < ($cant + $exist->quantity)) {
               $this->emit('no-stock', 'Cupones insuficientes');
               return;
               }
           }
        }

        Cart::add($cupon->id, $cupon->name, $cupon->promotion, $cant, $cupon->image);

        $this->total = Cart::getTotal();
        $this->cantidadCupones = Cart::getTotalQuantity();

        $this->emit('cupon-ok', $title);

    }


     public function updateQty($cuponId, $cant = 1){
        $title ='';
        $cupon = Ticket::find($cuponId);
        $exist = Cart::get($cuponId);
        if ($exist)
           $title = 'Cantidad Actualizada';
       else
            $title = 'Cupon Agregado';


        if($exist){
            if ($cupon->quantity != null) {
                if ($cupon->quantity < $cant ) {
               $this->emit('no-stock', 'Cupones insuficientes');
               return;
               }
           }
        }

       $this->removeItem($cuponId);

       if($cant > 0) {
           Cart::add($cupon->id, $cupon->name, $cupon->promotion, $cant, $cupon->image);
            $this->total = Cart::getTotal();
            $this->cantidadCupones = Cart::getTotalQuantity();
            $this->emit('cupon-ok', $title);
       }

    }


    public function removeItem($cuponId){
        Cart::remove($cuponId);

        $this->total = Cart::getTotal();
        $this->cantidadCupones = Cart::getTotalQuantity();
        $this->emit('cupon-ok','Cupon eliminado');
    }

    public function decreaseQty($cuponId){
        $item = Cart::get($cuponId);
        Cart::remove($cuponId);

        $newQty = ($item->quantity)-1;

        if($newQty > 0)
            Cart::add($item->id, $item->name, $item->price, $newQty, $item->attributes[0]);

        $this->total = Cart::getTotal();
        $this->cantidadCupones = Cart::getTotalQuantity();
        $this->emit('cupon-ok','Cantidad Actualiada');
    }



    public function clearCart(){
        Cart::clear();

        $this->total = Cart::getTotal();
        $this->cantidadCupones = Cart::getTotalQuantity();
        $this->emit('cupon-ok','Carrito Vacio');

    }


    public function saveSale(){
     
        if($this->total <=0){
            $this->emit('sale-error','Agrega productos al carrito');
            return;
        }

        DB::beginTransaction();

        try {
            $sale = Sale::create([
                'total' => $this->total,
                'user_id' => auth()->user()->id
            ]);
            if ($sale) {

                ///se crea el registro en la tabla ventas se busca en el carrito el detalle 
                $items = Cart::getContent();
                
                ///se recorre el detalle para guardar en la tabla detalle de ventas 
                foreach($items as $item){
                    DetailSale::create([
                        'price' => $item->price,
                        'quantity' => $item->quantity,
                        'ticket_id' => $item->id,
                        'sale_id' => $sale->id
                    ]);

                    //inicio actualizar la cantidad de cupones

                    $cupon = Ticket::find($item->id);

                    ////si la columna de cantida del cupon en inventario es nula se pasa por alto este paso de lo contrario actualiza el stock
                    if ($cupon->quantity != null) {
                       $cupon->quantity =  $cupon->quantity - $item->quantity;
                       $cupon->save();
                    }

                     //Fin  actualizar la cantidad de cupones


                    ///se busca la empresa a la que pertenece el ticket para generar el token que esta compuesto de el codigo de la empresa mas 7 numeros al azar

                     $empresa = company::find($cupon->company_id);

                     TicketWallet::create([
                        'user_id' => auth()->user()->id,
                        'ticket_id' => $item->id,
                        'quantity' => $item->quantity,
                        'price' => $item->price,
                        'codeCupon' => $empresa->codeCompany.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                        'sale_id' => $sale->id
                    ]);
                }

                    Mail::to(auth()->user()->email)->send(new ConfirmationPost(
                    $Venta = [
                    'total' =>  $this->total,
                    'nombreUsuario' => auth()->user()->name,
                    'sale_id' => $sale->id
                ]
      ));


            }


  

            DB::commit();
            Cart::clear();

        $this->total = Cart::getTotal();
        $this->cantidadCupones = Cart::getTotalQuantity();
        $this->emit('sale-ok','Venta Registrada');

 

        } catch (Exception $e) {
            DB::rollback();
             $this->emit('sale-error',$e->getMessage());
        }

    }



}
