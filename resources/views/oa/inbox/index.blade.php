@extends('layouts.layout1')

@section('css_section')
    
    <style>
        .hover-btn-shadow:hover {
            cursor: pointer;
            animation: shadow 1s;
            box-shadow: 0 2px 1px rgba(0,0,0,0.03), 
              0 4px 2px rgba(0,0,0,0.03), 
              0 8px 4px rgba(0,0,0,0.03), 
              0 16px 8px rgba(0,0,0,0.03),
              0 32px 16px rgba(0,0,0,0.03);
        }
        @keyframes shadow {
            from {box-shadow: 0 0px 0px rgba(0,0,0,0.11),  0 0px 0px rgba(0,0,0,0.11),  0 0px 0px rgba(0,0,0,0.11),  0 0px 0px rgba(0,0,0,0.11), 0 0px 0px rgba(0,0,0,0.11)}
            to {box-shadow: 0 2px 1px rgba(0,0,0,0.03), 
              0 4px 2px rgba(0,0,0,0.03), 
              0 8px 4px rgba(0,0,0,0.03), 
              0 16px 8px rgba(0,0,0,0.03),
              0 32px 16px rgba(0,0,0,0.03);}
        }
        li .active a{
            /* background: linear-gradient(43.96deg, #EA5455 2.91%, #F08182 94.71%) !important; */
            border-radius: 4px 
        }
    </style>
@endsection

@section('page_title')
    Inbox
@endsection

@section('sidebar-size', 'collapsed')
@section('url_back', url('pmo/master/tpp'))

@section('content')
    <div class="row">
        <div class="col-xl-9 col-lg-9 col-md-12">
            <div class="row mb-2">
                <div class="col-lg-4 col-md-4">
                    <div class="hover-btn-shadow p-2 rounded my-1 d-flex align-items-center"
                        style="background: linear-gradient(45.79deg, #28C76F 0%, #48DA89 94.75%, #48DA89 94.75%);color:white">
                        <i data-feather="book"></i>
                        <strong class="mx-1">0</strong>
                        Perlu Diproses
                        <i class="ms-auto" data-feather="chevron-right"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="hover-btn-shadow p-2 rounded my-1 d-flex align-items-center"
                        style="background: linear-gradient(45deg, #4784DE 0%, #77A7EE 100%);color:white">
                        <i class="" data-feather="mail"></i>
                        <strong class="mx-1">7</strong>
                        Surat Pesanan
                        <i class="ms-auto" data-feather="chevron-right"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="hover-btn-shadow p-2 rounded my-1 d-flex align-items-center"
                        style="background: linear-gradient(41.83deg, #FF922A 2.18%, #FFB976 97.5%);color:white">
                        <i data-feather="message-square"></i>
                        <strong class="mx-1">10</strong>
                        Disposisi
                        <i class="ms-auto" data-feather="chevron-right"></i>
                    </div>
                </div>
            </div>

            <div class="app- ontent email-application">
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-area-wrapper container-xxl p-0">
                    <div class="sidebar-left">
                        <div class="sidebar">
                            <div class="sidebar-content email-app-sidebar">
                                <div class="email-app-menu">
                                    <div class="form-group-compose text-center compose-btn">
                                        <button type="button" class="compose-email btn btn-danger w-100"
                                            data-bs-backdrop="false" data-bs-toggle="modal" data-bs-target="#compose-mail">
                                            Buat Surat
                                        </button>
                                    </div>
                                    <div class="sidebar-menu-list">
                                        <div class="list-group list-group-messages">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <i data-feather="mail" class="font-medium-3 me-50"></i>
                                                <span class="align-middle">Surat Masuk</span>
                                                <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                            </a>
                                        </div>
                                        <div class="list-group list-group-messages">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i data-feather="mail" class="font-medium-3 me-50"></i>
                                                <span class="align-middle">Map Saya</span>
                                                <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                            </a>
                                        </div>
                                        <div class="list-group list-group-messages">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i data-feather="mail" class="font-medium-3 me-50"></i>
                                                <span class="align-middle">Draft</span>
                                                <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                            </a>
                                        </div>
                                        <div class="list-group list-group-messages">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i data-feather="mail" class="font-medium-3 me-50"></i>
                                                <span class="align-middle">Berbintang</span>
                                                <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                            </a>
                                        </div>
                                        <div class="list-group list-group-messages">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i data-feather="mail" class="font-medium-3 me-50"></i>
                                                <span class="align-middle">Spam</span>
                                                <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                            </a>
                                        </div>
                                        <div class="list-group list-group-messages">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i data-feather="mail" class="font-medium-3 me-50"></i>
                                                <span class="align-middle">Sampah</span>
                                                <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-right">
                        <div class="content-wrapper container-xxl p-0">
                            <div class="content-header row">
                            </div>
                            <div class="content-body">
                                <div class="body-content-overlay"></div>
                                <!-- Email list Area -->
                                <div class="email-app-list">
                                    <!-- Email search starts -->
                                    <div class="app-fixed-search d-flex align-items-center">
                                        <div class="sidebar-toggle d-block d-lg-none ms-1">
                                            <i data-feather="menu" class="font-medium-5"></i>
                                        </div>
                                        <div class="d-flex align-content-center justify-content-between w-100">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i data-feather="search"
                                                        class="text-muted"></i></span>
                                                <input type="text" class="form-control" id="email-search"
                                                    placeholder="Search email" aria-label="Search..."
                                                    aria-describedby="email-search" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Email search ends -->

                                    <!-- Email actions starts -->
                                    <div class="app-action">
                                        <div class="action-left">
                                            <div class="form-check selectAll">
                                                <input type="checkbox" class="form-check-input" id="selectAllCheck" />
                                                <label class="form-check-label fw-bolder ps-25" for="selectAllCheck">Select
                                                    All</label>
                                            </div>
                                        </div>
                                        <div class="action-right">
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="folder"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i data-feather="folder" class="font-medium-2"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="folder">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                <i data-feather="edit-2" class="font-small-4 me-50"></i>
                                                                <span>Draft</span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                <i data-feather="info" class="font-small-4 me-50"></i>
                                                                <span>Spam</span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                <i data-feather="trash" class="font-small-4 me-50"></i>
                                                                <span>Trash</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="tag"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i data-feather="tag" class="font-medium-2"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tag">
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-success bullet-sm"></span>Personal</a>
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-primary bullet-sm"></span>Company</a>
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-warning bullet-sm"></span>Important</a>
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-danger bullet-sm"></span>Private</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item mail-unread">
                                                    <span class="action-icon"><i data-feather="mail"
                                                            class="font-medium-2"></i></span>
                                                </li>
                                                <li class="list-inline-item mail-delete">
                                                    <span class="action-icon"><i data-feather="trash-2"
                                                            class="font-medium-2"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Email actions ends -->

                                    <!-- Email list starts -->
                                    <div class="email-user-list">
                                        <ul class="email-media-list">
                                            <li class="d-flex user-mail mail-read">
                                                <div class="mail-left pe-50">
                                                    <div class="avatar">
                                                        <img src="{{ asset('themes/vuexy/images/portrait/small/avatar-s-20.jpg') }}"
                                                            alt="avatar img holder" />
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck1" />
                                                            <label class="form-check-label" for="customCheck1"></label>
                                                        </div>
                                                        <span class="email-favorite"><i data-feather="star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="mail-body">
                                                    <div class="mail-details">
                                                        <div class="mail-items">
                                                            <h5 class="mb-25">Tonny Deep</h5>
                                                            <span class="text-truncate">🎯 Focused impactful open system
                                                            </span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="me-50 bullet bullet-success bullet-sm"></span>
                                                            <span class="mail-date">4:14 AM</span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="text-truncate mb-0">
                                                            Hey John, bah kivu decrete epanorthotic unnotched Argyroneta
                                                            nonius veratrine preimaginary saunders
                                                            demidolmen Chaldaic allusiveness lorriker unworshipping
                                                            ribaldish tableman hendiadys outwrest unendeavored
                                                            fulfillment scientifical Pianokoto CheloniaFreudian sperate
                                                            unchary hyperneurotic phlogiston duodecahedron
                                                            unflown Paguridea catena disrelishable Stygian paleopsychology
                                                            cantoris phosphoritic disconcord fruited
                                                            inblow somewhatly ilioperoneal forrard palfrey Satyrinae
                                                            outfreeman melebiose
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-results">
                                            <h5>No Items Found</h5>
                                        </div>
                                    </div>
                                    <!-- Email list ends -->
                                </div>
                                <!--/ Email list Area -->
                                <!-- Detailed Email View -->
                                <div class="email-app-details">
                                    <!-- Detailed Email Header starts -->
                                    <div class="email-detail-header">
                                        <div class="email-header-left d-flex align-items-center">
                                            <span class="go-back me-1"><i data-feather="chevron-left"
                                                    class="font-medium-4"></i></span>
                                            <h4 class="email-subject mb-0">Focused open system 😃</h4>
                                        </div>
                                        <div class="email-header-right ms-2 ps-1">
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <span class="action-icon favorite"><i data-feather="star"
                                                            class="font-medium-2"></i></span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown no-arrow">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i data-feather="folder" class="font-medium-2"></i>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="folder">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                <i data-feather="edit-2" class="font-medium-3 me-50"></i>
                                                                <span>Draft</span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                <i data-feather="info" class="font-medium-3 me-50"></i>
                                                                <span>Spam</span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                <i data-feather="trash" class="font-medium-3 me-50"></i>
                                                                <span>Trash</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown no-arrow">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i data-feather="tag" class="font-medium-2"></i>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="tag">
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-success bullet-sm"></span>Personal</a>
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-primary bullet-sm"></span>Company</a>
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-warning bullet-sm"></span>Important</a>
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="me-50 bullet bullet-danger bullet-sm"></span>Private</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="action-icon"><i data-feather="mail"
                                                            class="font-medium-2"></i></span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="action-icon"><i data-feather="trash"
                                                            class="font-medium-2"></i></span>
                                                </li>
                                                <li class="list-inline-item email-prev">
                                                    <span class="action-icon"><i data-feather="chevron-left"
                                                            class="font-medium-2"></i></span>
                                                </li>
                                                <li class="list-inline-item email-next">
                                                    <span class="action-icon"><i data-feather="chevron-right"
                                                            class="font-medium-2"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Detailed Email Header ends -->

                                    <!-- Detailed Email Content starts -->
                                    <div class="email-scroll-area">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="email-label">
                                                    <span
                                                        class="mail-label badge rounded-pill badge-light-primary">Company</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header email-detail-head">
                                                        <div
                                                            class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="avatar me-75">
                                                                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg"
                                                                    alt="avatar img holder" width="48" height="48" />
                                                            </div>
                                                            <div class="mail-items">
                                                                <h5 class="mb-0">Carlos Williamson</h5>
                                                                <div class="email-info-dropup dropdown">
                                                                    <span role="button"
                                                                        class="dropdown-toggle font-small-3 text-muted"
                                                                        id="card_top01" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        carlos@gmail.com
                                                                    </span>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="card_top01">
                                                                        <table class="table table-sm table-borderless">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-end">From:</td>
                                                                                    <td>carlos@gmail.com</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-end">To:</td>
                                                                                    <td>johndoe@ow.ly</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-end">Date:</td>
                                                                                    <td>14:58, 29 Aug 2020</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mail-meta-item d-flex align-items-center">
                                                            <small class="mail-date-time text-muted">29 Aug, 2020,
                                                                14:58</small>
                                                            <div class="dropdown ms-50">
                                                                <div role="button" class="dropdown-toggle hide-arrow"
                                                                    id="email_more" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="more-vertical"
                                                                        class="font-medium-2"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="email_more">
                                                                    <div class="dropdown-item"><i
                                                                            data-feather="corner-up-left"
                                                                            class="me-50"></i>Reply</div>
                                                                    <div class="dropdown-item"><i
                                                                            data-feather="corner-up-right"
                                                                            class="me-50"></i>Forward</div>
                                                                    <div class="dropdown-item"><i data-feather="trash-2"
                                                                            class="me-50"></i>Delete</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body mail-message-wrapper pt-2">
                                                        <div class="mail-message">
                                                            <p class="card-text">Hey John,</p>
                                                            <p class="card-text">
                                                                bah kivu decrete epanorthotic unnotched Argyroneta nonius
                                                                veratrine preimaginary saunders demidolmen
                                                                Chaldaic allusiveness lorriker unworshipping ribaldish
                                                                tableman hendiadys outwrest unendeavored
                                                                fulfillment scientifical Pianokoto Chelonia
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h5 class="mb-0">
                                                                Click here to
                                                                <a href="#">Reply</a>
                                                                or
                                                                <a href="#">Forward</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Detailed Email Content ends -->
                                </div>
                                <!--/ Detailed Email View -->

                                <!-- compose email -->
                                <div class="modal modal-sticky" id="compose-mail" data-bs-keyboard="false">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content p-0">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Buat Surat</h5>
                                                <div class="modal-actions">
                                                    <a class="text-body" href="#" data-bs-dismiss="modal"
                                                        aria-label="Close"><i data-feather="x"></i></a>
                                                </div>
                                            </div>
                                            <div class="modal-body flex-grow-1 p-0">
                                                <form class="compose-form">
                                                    <div class="p-3">
                                                        TES FORM
                                                    </div>
                                                    <div class="compose-footer-wrapper">
                                                        <div class="btn-wrapper d-flex align-items-center">
                                                            <div class="btn-group dropup me-1">
                                                                <button type="button" class="btn btn-danger">Kirim Surat</button>
                                                            </div>
                                                            <!-- add attachment -->
                                                            <div class="email-attachement">
                                                                <label for="file-input" class="form-label">
                                                                    <i data-feather="paperclip" width="17" height="17"
                                                                        class="ms-50"></i>
                                                                </label>

                                                                <input id="file-input" type="file"
                                                                    class="d-none" />
                                                            </div>
                                                        </div>
                                                        <div class="footer-action d-flex align-items-center">
                                                            <div class="dropup d-inline-block">
                                                                <i class="font-medium-2 cursor-pointer me-50"
                                                                    data-feather="more-vertical" role="button"
                                                                    id="composeActions" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                </i>
                                                                <div class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="composeActions">
                                                                    <a class="dropdown-item" href="#">
                                                                        <span class="align-middle">Add Label</span>
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <span class="align-middle">Plain text mode</span>
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">
                                                                        <span class="align-middle">Print</span>
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <span class="align-middle">Check Spelling</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <i data-feather="trash" class="font-medium-2 cursor-pointer"
                                                                data-bs-dismiss="modal"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ compose email -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-xl col-md">
            <div class="col-md-12 my-1 ">
                <div class="p-2 rounded d-flex align-items-center"
                    style="background: linear-gradient(43.96deg, #EA5455 2.91%, #F08182 94.71%);color:white">
                    Sekretaris
                    <i class="ms-auto me-1" data-feather="user"></i>
                    <strong>10</strong>
                </div>
                <div class="bg-white p-2 text-center rounded-bottom hover-btn-shadow shadow" style="cursor: unset">
                    Anda belum mengaktifkan Sekretaris <br/>
                    <strong class="text-danger" style="cursor: pointer">Aktifkan</strong>
                </div>
            </div>
            <div class="col-md-12 my-1 ">
                <div class="p-2 rounded d-flex align-items-center"
                    style="background: linear-gradient(43.96deg, #EA5455 2.91%, #F08182 94.71%);color:white">
                    Delegasi
                    <i class="ms-auto me-1" data-feather="user"></i>
                    <strong>10</strong>
                </div>
                <div class="bg-white p-2 text-center rounded-bottom hover-btn-shadow shadow" style="cursor: unset">
                    Anda belum mengaktifkan Delegasi <br/>
                    <strong class="text-danger" style="cursor: pointer">Buat Baru</strong>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_section')
    <script src="{{ asset('themes/vuexy/js/scripts/pages/app-email.js') }}"></script>
@endsection
