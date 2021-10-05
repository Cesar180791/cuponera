 <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="compactSidebar">

                <div class="theme-logo">
                    <a href="#">
                        <img src="assets/img/C2.png" class="navbar-logo" alt="logo">
                    </a>
                </div>

                <ul class="menu-categories">
                    <li class="menu menu-single active">
                        <a href="index.html" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Dashboard</span></div>
                    </li>

                    <li class="menu menu-single">
                        <a href="{{ url('/rubros')}}" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Rubros</span></div>
                    </li>
                     <li class="menu menu-single">
                        <a href="{{ url('/roles')}}" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Roles</span></div>
                    </li>
                     <li class="menu menu-single">
                        <a href="{{ url('/permisos')}}" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-unlock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Permisos</span></div>
                    </li>
                     <li class="menu menu-single">
                        <a href="#" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Usuarios</span></div>
                    </li>
                     <li class="menu menu-single">
                        <a href="{{ url('/asignar')}}" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Asignar</span></div>
                    </li>
                </ul>

                <div class="sidebar-bottom-actions">

                    <div class="external-links">
                        <a target="_blank" href="../../documentation/index.html" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <div class="tooltip"><span>Help</span></div>
                        </a>
                    </div>
    
                    <div class="dropdown user-profile-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/boy-2.png" class="img-fluid mr-2" alt="avatar">
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="dropdown-inner">
                                <div class="user-profile-section">
                                    <div class="media mx-auto">
                                        <img src="assets/img/boy-2.png" class="img-fluid mr-2" alt="avatar">
                                        <div class="media-body">
                                            <h5>Alan Green</h5>
                                            <p>Project Leader</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <a href="auth_login.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Salir</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">

                <div class="submenu" id="dashboard">
                    <ul class="submenu-list" data-parent-element="#dashboard"> 
                        <li class="active">
                            <a href="index.html"> Analytics </a>
                        </li>
                        <li>
                            <a href="index2.html"> Sales </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="app">
                    <div class="menu-title">
                        <h3>Apps</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#app"> 
                        <li>
                            <a href="apps_chat.html"> Chat </a>
                        </li>
                        <li>
                            <a href="apps_mailbox.html"> Mailbox </a>
                        </li>
                        <li>
                            <a href="apps_todoList.html"> Todo List </a>
                        </li>
                        <li>
                            <a href="apps_notes.html"> Notes</a>
                        </li>
                        <li>
                            <a href="apps_scrumboard.html"> Scrumboard</a>
                        </li>
                        <li>
                            <a href="apps_contacts.html"> Contacts</a>
                        </li>
                        <li>
                            <a href="apps_calendar.html"> Calendar</a>
                        </li>
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#appInvoice" aria-expanded="true"><div>Invoice</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul id="appInvoice" class="collapse show" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="apps_invoice-list.html"> List </a>
                                </li>
                                <li>
                                    <a href="apps_invoice-preview.html"> Preview </a>
                                </li>
                                <li>
                                    <a href="apps_invoice-add.html"> Add </a>
                                </li>
                                <li>
                                    <a href="apps_invoice-edit.html"> Edit </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="uiKit">
                    <div class="menu-title">
                        <h3>UI Kit</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#uiKit"> 
                        <li>
                            <a href="ui_alerts.html"> Alerts </a>
                        </li>
                        <li>
                            <a href="ui_avatar.html"> Avatar </a>
                        </li>
                        <li>
                            <a href="ui_badges.html"> Badges </a>
                        </li>
                        <li>
                            <a href="ui_breadcrumbs.html"> Breadcrumbs </a>
                        </li>                            
                        <li>
                            <a href="ui_buttons.html"> Buttons </a>
                        </li>
                        <li>
                            <a href="ui_buttons_group.html"> Button Groups </a>
                        </li>
                        <li>
                            <a href="ui_color_library.html"> Color Library </a>
                        </li>
                        <li>
                            <a href="ui_dropdown.html"> Dropdown </a>
                        </li>
                        <li>
                            <a href="ui_infobox.html"> Infobox </a>
                        </li>
                        <li>
                            <a href="ui_jumbotron.html"> Jumbotron </a>
                        </li>
                        <li>
                            <a href="ui_loader.html"> Loader </a>
                        </li>
                        <li>
                            <a href="ui_pagination.html"> Pagination </a>
                        </li>
                        <li>
                            <a href="ui_popovers.html"> Popovers </a>
                        </li>
                        <li>
                            <a href="ui_progress_bar.html"> Progress Bar </a>
                        </li>
                        <li>
                            <a href="ui_search.html"> Search </a>
                        </li>
                        <li>
                            <a href="ui_tooltips.html"> Tooltips </a>
                        </li>
                        <li>
                            <a href="ui_treeview.html"> Treeview </a>
                        </li>
                        <li>
                            <a href="ui_typography.html"> Typography </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="components">
                    <div class="menu-title">
                        <h3>Components</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#components"> 
                        <li>
                            <a href="component_tabs.html">Tabs </a>
                        </li>
                        <li>
                            <a href="component_accordion.html">Accordions  </a>
                        </li>
                        <li>
                            <a href="component_modal.html">Modals </a>
                        </li>                            
                        <li>
                            <a href="component_cards.html">Cards </a>
                        </li>
                        <li>
                            <a href="component_bootstrap_carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="component_blockui.html">Block UI </a>
                        </li>
                        <li>
                            <a href="component_countdown.html">Countdown </a>
                        </li>
                        <li>
                            <a href="component_counter.html">Counter </a>
                        </li>
                        <li>
                            <a href="component_sweetalert.html">Sweet Alerts </a>
                        </li>
                        <li>
                            <a href="component_timeline.html">Timeline </a>
                        </li>
                        <li>
                            <a href="component_snackbar.html">Notifications </a>
                        </li>
                        <li>
                            <a href="component_session_timeout.html">Session Timeout </a>
                        </li>
                        <li>
                            <a href="component_media_object.html">Media Object </a>
                        </li>
                        <li>
                            <a href="component_list_group.html">List Group </a>
                        </li>
                        <li>
                            <a href="component_pricing_table.html">Pricing Tables </a>
                        </li>
                        <li>
                            <a href="component_lightbox.html">Lightbox </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="forms">
                    <div class="menu-title">
                        <h3>Forms</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#forms">
                        <li>
                            <a href="form_bootstrap_basic.html">Basic </a>
                        </li>
                        <li>
                            <a href="form_input_group_basic.html">Input Group </a>
                        </li>
                        <li>
                            <a href="form_layouts.html">Layouts </a>
                        </li>
                        <li>
                            <a href="form_validation.html">Validation </a>
                        </li>
                        <li>
                            <a href="form_input_mask.html">Input Mask </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_select.html">Bootstrap Select </a>
                        </li>
                        <li>
                            <a href="form_select2.html">Select2 </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_touchspin.html">TouchSpin </a>
                        </li>
                        <li>
                            <a href="form_maxlength.html">Maxlength </a>
                        </li>
                        <li>
                            <a href="form_checkbox_radio.html">Checkbox &amp; Radio </a>
                        </li>
                        <li>
                            <a href="form_switches.html">Switches </a>
                        </li>
                        <li>
                            <a href="form_wizard.html">Wizards </a>
                        </li>
                        <li>
                            <a href="form_fileupload.html">File Upload </a>
                        </li>
                        <li>
                            <a href="form_quill.html">Quill Editor </a>
                        </li>
                        <li>
                            <a href="form_markdown.html">Markdown Editor </a>
                        </li>
                        <li>
                            <a href="form_date_range_picker.html">Date &amp; Range Picker </a>
                        </li>
                        <li>
                            <a href="form_clipboard.html">Clipboard </a>
                        </li>
                        <li>
                            <a href="form_typeahead.html">Typeahead </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="tables">
                    <div class="menu-title">
                        <h3>Tables</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#tables">
                        <li>
                            <a href="table_basic.html">Basic </a>
                        </li>
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#datatables" aria-expanded="true"><div>Datatables</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul id="datatables" class="collapse show" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="table_dt_basic.html"> Basic </a>
                                </li>
                                <li>
                                    <a href="table_dt_striped_table.html"> Striped Table </a>
                                </li>
                                <li>
                                    <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                </li>
                                <li>
                                    <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                </li>
                                <li>
                                    <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                </li>
                                <li>
                                    <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                </li>
                                <li>
                                    <a href="table_dt_custom.html"> Custom </a>
                                </li>
                                <li>
                                    <a href="table_dt_range_search.html"> Range Search </a>
                                </li>
                                <li>
                                    <a href="table_dt_html5.html"> HTML5 Export </a>
                                </li>
                                <li>
                                    <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                </li>
                                <li>
                                    <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="more">
                    <div class="menu-title">
                        <h3>Extra Elements</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#more">
                        <li>
                            <a href="fonticons.html">Font Icons </a>
                        </li>

                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#users" aria-expanded="false"><div> Users</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="users" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="user_profile.html">Profile </a>
                                </li>
                                <li>
                                    <a href="user_account_setting.html">Account Settings </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="dragndrop_dragula.html">Drag and Drop </a>
                        </li>
                        <li>
                            <a href="charts_apex.html">Charts </a>
                        </li>
                        <li>
                            <a href="map_jvector.html">Maps </a>
                        </li>

                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#errors" aria-expanded="false"><div> Errors</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="errors" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="pages_error404.html" target="_blank"> 404 </a>
                                </li>
                                <li>
                                    <a href="pages_error500.html" target="_blank"> 500 </a>
                                </li>
                                <li>
                                    <a href="pages_error503.html" target="_blank"> 503 </a>
                                </li>
                                <li>
                                    <a href="pages_maintenence.html" target="_blank"> Maintanence </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#pages" aria-expanded="false"><div> Pages</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="pages" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="pages_helpdesk.html">Helpdesk </a>
                                </li>
                                <li>
                                    <a href="pages_contact_us.html">Contact Form </a>
                                </li>
                                <li>
                                    <a href="pages_faq.html">FAQ </a>
                                </li>
                                <li>
                                    <a href="pages_faq2.html">FAQ 2 </a>
                                </li>
                                <li>
                                    <a href="pages_privacy.html">Privacy Policy </a>
                                </li>
                                <li>
                                    <a href="pages_coming_soon.html" target="_blank">Coming Soon </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#auth" aria-expanded="false"><div> Authentication</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="auth" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="auth_login.html" target="_blank"> Login </a>
                                </li>
                                <li>
                                    <a href="auth_login_boxed.html" target="_blank"> Login Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_register.html" target="_blank"> Register </a>
                                </li>
                                <li>
                                    <a href="auth_register_boxed.html" target="_blank"> Register Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_lockscreen.html" target="_blank"> Unlock </a>
                                </li>
                                <li>
                                    <a href="auth_lockscreen_boxed.html" target="_blank"> Unlock Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_pass_recovery.html" target="_blank"> Recover ID </a>
                                </li>
                                <li>
                                    <a href="auth_pass_recovery_boxed.html" target="_blank"> Recover ID Boxed </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#starter-kit" aria-expanded="false"><div>Starter Kit</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="starter-kit" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="starter_kit_blank_page.html"> Blank Page </a>
                                </li>
                                <li>
                                    <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                                </li>
                                <li>
                                    <a href="starter_kit_boxed.html"> Boxed </a>
                                </li>
                                <li>
                                    <a href="starter_kit_single_click_menu.html">Single Click Menu</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

        </div>