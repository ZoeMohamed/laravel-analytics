@extends('backend.layouts.master')


@section('admin-content')
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">
                        <a href="index.html" class="mobile-logo"><img src="assets/images/logo.svg" class="img-fluid"
                                alt="logo" /></a>
                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void();">
                                        <img src="assets/images/svg-icon/horizontal.svg"
                                            class="img-fluid menu-hamburger-horizontal" alt="horizontal" />
                                        <img src="assets/images/svg-icon/verticle.svg"
                                            class="img-fluid menu-hamburger-vertical" alt="verticle" />
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="assets/images/svg-icon/collapse.svg"
                                            class="img-fluid menu-hamburger-collapse" alt="collapse" />
                                        <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close"
                                            alt="close" />
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="assets/images/svg-icon/collapse.svg"
                                            class="img-fluid menu-hamburger-collapse" alt="collapse" />
                                        <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close"
                                            alt="close" />
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">

                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">

                            </li>
                            <li class="list-inline-item">
                                <div class="settingbar">
                                    <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                        <img src="assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings" />
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="languagebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="languagelink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="flag flag-icon-us flag-icon-squared"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">
                                            <a class="dropdown-item" href="#"><i
                                                    class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="flag flag-icon-cn flag-icon-squared"></i>Chinese</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="flag flag-icon-es flag-icon-squared"></i>Spanish</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentbar">
            <!-- Start row -->
            <div class="row">
                <div class="col-md-6 mt-5 ">

                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <h4 class="card-header">Ayam Goreng Pak Gembus</h4>
                        <div class="card-body">

                            <h5>Summary Of Analysis</h5>

                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos vero modi
                                illum voluptatibus amet. Eius asperiores quibusdam ducimus quaerat assumenda? Vitae
                                atque nam et dolorum numquam inventore expedita cum asperiores?....
                            </p>


                            <div class="progress mb-2 mt-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    style="width: 80%" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>

                            <p class="font-weight-bold">Progress 80%</p>

                            <a href="#" class="btn btn-primary mt-2">Detail</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">

                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <h4 class="card-header">Penjualan Motor</h4>
                        <div class="card-body">

                            <h5>Summary Of Analysis</h5>

                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos vero modi
                                illum voluptatibus amet. Eius asperiores quibusdam ducimus quaerat assumenda? Vitae
                                atque nam et dolorum numquam inventore expedita cum asperiores?....
                            </p>


                            <div class="progress mb-2 mt-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    style="width: 80%" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>

                            <p class="font-weight-bold">Progress 80%</p>

                            <a href="#" class="btn btn-primary mt-2">Detail</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
