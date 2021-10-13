<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/loader.js') }}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<!--<link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">-->
<!--<link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" class="dashboard-analytics" />-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/elements/alert.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/flatpickr/flatpickr.css') }}">

 <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <style>
  @import url('https://fonts.googleapis.com/css?family=Oswald');
    aside{
        display: none!important;
    }
    .page-item.active .page-link{
        z-index: 3;
        color: #fff;
        background-color: #3b3f5c;
        border-color: #3b3f5c;
    }
    @media (max-width: 480px)
    {
        .mtmobile{
            margin-bottom: 0px!important;
        }
        .mbmobile{
            margin-bottom: 10px!important;
        }
        .hideonsm{
            display: none!important;
        }
        .inblock{
            display: block;
        }
    }
.sidebar-wrapper #compactSidebar .theme-logo {
    margin: 0 0 11px 0;
    display: flex;
    justify-content: center;
    align-self: center;
    padding: 12px;
    background:  #464548!important;
    border-radius: 0 10px 0 0;
}


/*
.fl-left {
    float: left
}

.fl-right {
    float: right
}

h1 {
    text-transform: uppercase;
    font-weight: 900;
    border-left: 10px solid #fec500;
    padding-left: 10px;
    margin-bottom: 30px
}

.row {
    overflow: hidden
}

.card {
    display: table-row;
    width: 45%;
    background-color: #fff;
    color: #fff;
    margin-bottom: 0px;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    border-radius: 4px;
    position: relative;
    margin-left: 2%
}

.date {
    display: table-cell;
    width: 25%;
    position: relative;
    text-align: center;
    border-right: 2px dashed #dadde6
}

.date:before,
.date:after {
    content: "";
    display: block;
    width: 25px;
    height: 25px;
    background-color: #fff;
    position: absolute;
    top: -15px;
    right: -15px;
    z-index: 1;
    border-radius: 50%
}

.date:after {
    top: auto;
    bottom: -15px
}

.date time {
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.date time span {
    display: block
}

.date time span:first-child {
    color: #2b2b2b;
    font-weight: 600;
    font-size: 250%
}

.date time span:last-child {
    text-transform: uppercase;
    font-weight: 600;
    margin-top: -10px
}

.card-cont {
    display: table-cell;
    width: 75%;
    font-size: 85%;
    padding: 10px 10px 30px 50px
}

.card-cont h4 {
    font-size: 130%
}

.row:last-child .card:last-of-type .card-cont h3 {
    text-decoration: line-through
}

.card-cont>div {
    display: table-row
}

.card-cont .even-date i,
.card-cont .even-info i,
.card-cont .even-date time,
.card-cont .even-info p {
    display: table-cell
}

.card-cont .even-date i,
.card-cont .even-info i {
    padding: 5% 5% 0 0
}

.card-cont .even-info p {
    padding: 30px 50px 0 0
}

.card-cont .even-date time span {
    display: block
}

.card-cont a {
    display: block;
    text-decoration: none;
    width: 80px;
    height: 30px;
    background-color: #00D7FF;
    color: #fff;
    text-align: center;
    line-height: 30px;
    border-radius: 2px;
    position: absolute;
    right: 10px;
    bottom: 10px
}

.row:last-child .card:first-child .card-cont a {
    background-color: #037FDD
}

.row:last-child .card:last-child .card-cont a {
    background-color: #F8504C
}

@media screen and (max-width: 860px) {
    .card {
        display: block;
        float: none;
        width: 100%;
        margin-bottom: 10px
    }
    .card+.card {
        margin-left: 0
    }
    .card-cont .even-date,
    .card-cont .even-info {
        font-size: 75%
    }
}
*/
/*****************
    - Header -
*****************/

@charset "utf-8";

h1,
h2,
h3,
h4,
h5,
h6,
div,
input,
p,

a,
a:hover,
a:focus {
    color: inherit;
}

body {
    background-color: #f1f2f3;
}

.container-fluid,
.container {
    max-width: 1200px;
}

.card-container {
    padding: 100px 0px;
    -webkit-perspective: 1000;
    perspective: 1000;
}

.profile-card-1 {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-image: url(../img/profile-bg-1.jpg);
    background-position: center;
    padding-top: 100px;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    max-width: 300px;
}

.profile-card-1 .profile-content {
    position: relative;
    background-color: #fff;
    padding: 70px 20px 20px 20px;
    text-align: center;
}

.profile-card-1 .profile-img {
    position: absolute;
    height: 100px;
    left: 0px;
    right: 0px;
    z-index: 10;
    top: -50px;
    transition: all 0.25s linear;
    transform-style: preserve-3d;
}

.profile-card-1 .profile-img img {
    height: 100px;
    margin: auto;
    border-radius: 50%;
    border: 5px solid #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.profile-card-1 .profile-name {
    font-size: 18px;
    font-weight: bold;
    color: #021830;
}

.profile-card-1 .profile-address {
    color: #777;
    font-size: 12px;
    margin: 0px 0px 15px 0px;
}

.profile-card-1 .profile-description {
    font-size: 13px;
    padding: 5px 10px;
    color: #777;
}

.profile-card-1 .profile-icons .fa {
    margin: 5px;
    color: #777;
}

.profile-card-1:hover {
    box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
}

.profile-card-1:hover .profile-img {
    transform: rotateY(180deg);
}

.profile-card-2 {
    max-width: 300px;
    background-color: #fff;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-position: center;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    border-radius: 10px;
}

.profile-card-2 img {
    transition: all linear 0.25s;
}

.profile-card-2 .profile-name {
    position: absolute;
    left: 30px;
    bottom: 70px;
    font-size: 30px;
    color: #fff;
    text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    font-weight: bold;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons {
    position: absolute;
    bottom: 30px;
    right: 30px;
    color: #fff;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-username {
    position: absolute;
    bottom: 50px;
    left: 30px;
    color: #fff;
    font-size: 13px;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons .fa {
    margin: 5px;
}

.profile-card-2:hover img {
    filter: grayscale(100%);
}

.profile-card-2:hover .profile-name {
    bottom: 80px;
}

.profile-card-2:hover .profile-username {
    bottom: 60px;
}

.profile-card-2:hover .profile-icons {
    right: 40px;
}

.profile-card-3 {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 25px 15px;
}

.profile-card-3 .profile-name {
    font-weight: bold;
    color: #21304e;
}

.profile-card-3 .profile-location {
    color: #999;
    font-size: 13px;
    font-weight: 600;
}

.profile-card-3 img {
    height: 100px;
    width: 100px;
    object-fit: cover;
    margin: 10px auto;
    border-radius: 50%;
    transition: all linear 0.25s;
}

.profile-card-3 .profile-description {
    font-size: 13px;
    color: #777;
    padding: 10px;
}

.profile-card-3 .profile-icons {
    margin: 15px 0px;
}

.profile-card-3 .profile-icons .fa {
    color: #fe455a;
    margin: 0px 5px;
}

.profile-card-3:hover img {
    height: 110px;
    width: 110px;
    margin: 5px auto;
}

.profile-card-4 {
    max-width: 400px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-4 img {
    transition: all 0.25s linear;
}

.profile-card-4 .profile-content {
    position: relative;
    padding: 15px;
    background-color: #fff;
}

.profile-card-4 .profile-name {
    font-weight: bold;
    position: absolute;
    left: 0px;
    right: 0px;
    top: -70px;
    color: #fff;
    font-size: 17px;
}

.profile-card-4 .profile-name p {
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 1.5px;
}

.profile-card-4 .profile-description {
    color: #777;
    font-size: 12px;
    padding: 10px;
}

.profile-card-4 .profile-overview {
    padding: 15px 0px;
}

.profile-card-4 .profile-overview p {
    font-size: 10px;
    font-weight: 600;
    color: #777;
}

.profile-card-4 .profile-overview h4 {
    color: #273751;
    font-weight: bold;
}

.profile-card-4 .profile-content::before {
    content: "";
    position: absolute;
    height: 20px;
    top: -10px;
    left: 0px;
    right: 0px;
    background-color: #fff;
    z-index: 0;
    transform: skewY(3deg);
}

.profile-card-4:hover img {
    transform: rotate(5deg) scale(1.1, 1.1);
    filter: brightness(110%);
}

.profile-card-5 {
    max-width: 300px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 50px 15px 25px 15px;
}

.profile-card-5 img {
    height: 100px;
    width: 100px;
    object-fit: cover;
    margin: 10px auto;
    border-radius: 50%;
    transition: all linear 0.25s;
    position: relative;
}

.profile-card-5::before {
    content: "";
    position: absolute;
    top: -60px;
    right: 0px;
    left: 0px;
    height: 170px;
    background-color: #4fb96e;
    transform: skewY(-20deg);
}

.profile-card-5 .profile-name {
    padding-top: 15px;
    font-weight: bold;
    color: #333;
}

.profile-card-5 .profile-designation {
    font-size: 13px;
    color: #777;
}

.profile-card-3 .profile-location {
    color: #999;
    font-size: 13px;
    font-weight: 600;
}

.profile-card-5 .profile-description {
    font-size: 13px;
    color: #777;
    padding: 10px;
}

.profile-card-5 .profile-overview {
    padding: 15px 0px;
}

.profile-card-5 .profile-overview p {
    color: #777;
    font-size: 13px;
}

.profile-card-5 .profile-overview h2 {
    font-weight: bold;
    color: #1e2832;
}

.profile-card-5 .profile-icons .fa {
    margin: 7px;
    color: #4fb96e;
}

.profile-card-5:hover img {
    transform: rotate(-5deg);
}

.profile-card-6 {
    max-width: 300px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-6 img {
    transition: all 0.15s linear;
}

.profile-card-6 .profile-name {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 25px;
    font-weight: bold;
    color: #fff;
    padding: 15px 20px;
    background: linear-gradient(
        140deg,
        rgba(0, 0, 0, 0.4) 50%,
        rgba(255, 255, 0, 0) 50%
    );
    transition: all 0.15s linear;
}

.profile-card-6 .profile-position {
    position: absolute;
    color: rgba(255, 255, 255, 0.4);
    left: 30px;
    top: 100px;
    transition: all 0.15s linear;
}

.profile-card-6 .profile-overview {
    position: absolute;
    bottom: 0px;
    left: 0px;
    right: 0px;
    background: linear-gradient(
        0deg,
        rgba(0, 0, 0, 0.4) 50%,
        rgba(255, 255, 0, 0)
    );
    color: #fff;
    padding: 50px 0px 20px 0px;
    transition: all 0.15s linear;
}

.profile-card-6 .profile-overview h3 {
    font-weight: bold;
}

.profile-card-6 .profile-overview p {
    color: rgba(255, 255, 255, 0.7);
}

.profile-card-6:hover img {
    filter: brightness(80%);
}

.profile-card-6:hover .profile-name {
    padding-left: 25px;
    padding-top: 20px;
}

.profile-card-6:hover .profile-position {
    left: 40px;
}

.profile-card-6:hover .profile-overview {
    padding-bottom: 25px;
}

.profile-card-7 {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-7 .profile-content {
    padding: 60px 30px 30px 30px;
    background-color: #fff;
    position: relative;
}

.profile-card-7 .profile-content img {
    position: absolute;
    height: 80px;
    width: 80px;
    border-radius: 50%;
    top: -40px;
    border: 5px solid #fff;
}

.profile-card-7 .profile-content .profile-name {
    position: absolute;
    font-size: 17px;
    font-weight: bold;
    top: -35px;
    left: 125px;
    color: #fff;
}

.profile-card-7 .profile-overview {
    padding: 5px 0px;
}

.profile-card-7 .profile-overview p {
    color: #777;
    font-size: 11px;
    font-weight: 600;
}

.profile-card-7 .profile-overview h5 {
    color: #142437;
    font-weight: bold;
}

.profile-card-8 {
    background: linear-gradient(#09121c, #36445a);
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    transition: all 0.25s linear;
}

.profile-card-8 .profile-name {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 25px;
    color: #58d683;
    font-size: 17px;
    font-weight: bold;
}

.profile-card-8 .profile-designation {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 50px;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
}

.profile-card-8 .profile-icons {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 80px;
    color: rgba(255, 255, 255, 0.7);
}

.profile-card-8 .profile-icons .fa {
    margin: 5px;
}

.profile-card-8:hover {
    transform: scale(1.05, 1.05);
}

.profile-card-9 {
    border-radius: 10px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 30px 15px;
    background-color: #fff;
    transition: all 0.25s linear;
}

.profile-card-9 img {
    height: 120px;
    width: 120px;
    border-radius: 50%;
    margin: 10px auto;
}

.profile-card-9 .profile-name {
    font-size: 15px;
    color: #3249b9;
    font-weight: 600;
}

.profile-card-9 .profile-designation {
    font-size: 13px;
    color: #777;
}

.profile-card-9 .profile-description {
    padding: 10px;
    font-size: 13px;
    color: #777;
    margin: 15px 0px;
    background-color: #f1f2f3;
    border-radius: 5px;
}

.profile-card-9 a {
    padding: 10px 15px;
    background-color: #3249b9;
    color: #fff;
    font-size: 11px;
    border-radius: 25px;
}

.profile-card-9:hover {
    transform: scale(1.05, 1.05);
}

.profile-card-10 {
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 30px 15px;
    background-color: #1f2124;
    color: #eee;
}

.profile-card-10 img {
    margin: 10px auto;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 10px solid transparent;
    box-shadow: 0px 0px 0px 2px #64c17b;
    transition: all 0.25s linear;
}

.profile-card-10 .profile-name {
    color: #fff;
    font-weight: bold;
    font-size: 17px;
}

.profile-card-10 .profile-location {
    font-size: 13px;
    opacity: 0.7;
}

.profile-card-10 .profile-description {
    padding: 10px;
    font-size: 13px;
}

.profile-card-10 .profile-icons .fa {
    color: #ffc75e;
    margin: 10px;
}

.profile-card-10:hover img {
    transform: scale(1.1);
}
c



</style>
@livewireStyles