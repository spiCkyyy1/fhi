@extends('layouts.app')

@section('css')
        <link rel="stylesheet" href="{{asset('css/chartist.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')
    <!-- /# row -->
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h1 class="text-center">real estate(Pre)</h1>
                    <div class="card-header-right-icon">
                        <ul>
                            <li class="card-close" data-dismiss="alert">
                                <i class="ti-close"></i>
                            </li>
                            <li class="card-option drop-menu">
                                <i
                                    class="ti-settings"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    role="link"
                                ></i>
                                <ul class="card-option-dropdown dropdown-menu">
                                    <li>
                                        <a href="#"><i class="ti-loop"></i> Update data</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                        ><i class="ti-menu-alt"></i> Detail log</a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-pulse"></i> Statistics</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                        ><i class="ti-power-off"></i> Clear ist</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="doc-link">
                                <a href="#"><i class="ti-link"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Total Sale</h4>
                        <ul class="list-inline text-center m-t-40">
                            <li>
                                <h5>
                                    <i class="fa fa-circle m-r-5 text-info"></i>Phone
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <i class="fa fa-circle m-r-5 text-inverse"></i>Windows
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <i class="fa fa-circle m-r-5 text-success"></i>Mac
                                </h5>
                            </li>
                        </ul>
                        <div id="extra-area-chart"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="card alert">
                    <div class="card-header m-b-37">
                        <h4>Recent Orders</h4>
                        <div class="card-header-right-icon">
                            <ul>
                                <li class="card-close" data-dismiss="alert">
                                    <i class="ti-close"></i>
                                </li>
                                <li class="card-option drop-menu">
                                    <i
                                        class="ti-settings"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="true"
                                        role="link"
                                    ></i>
                                    <ul class="card-option-dropdown dropdown-menu">
                                        <li>
                                            <a href="#"
                                                ><i class="ti-loop"></i> Update data</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i class="ti-menu-alt"></i> Detail log</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i class="ti-pulse"></i> Statistics</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i class="ti-power-off"></i> Clear ist</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="doc-link">
                                    <a href="#"><i class="ti-link"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""
                                                    ><img src="assets/images/avatar/1.jpg" alt=""
                                                /></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td>
                                            <span class="badge badge-primary"
                                                >Samsang Pro</span
                                            >
                                        </td>
                                        <td class="color-primary">$21.56</td>
                                        <td>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-pencil-alt color-success m-r-5"
                                                    ></i></a
                                            ></span>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-trash color-danger m-l-5"
                                                    ></i> </a
                                            ></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""
                                                    ><img src="assets/images/avatar/1.jpg" alt=""
                                                /></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td>
                                            <span class="badge badge-primary">Nokia-456</span>
                                        </td>
                                        <td class="color-success">$55.32</td>
                                        <td>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-pencil-alt color-success m-r-5"
                                                    ></i></a
                                            ></span>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-trash color-danger m-l-5"
                                                    ></i> </a
                                            ></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""
                                                    ><img src="assets/images/avatar/1.jpg" alt=""
                                                /></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td>
                                            <span class="badge badge-primary">Ipone-7</span>
                                        </td>
                                        <td class="color-danger">$14.85</td>
                                        <td>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-pencil-alt color-success m-r-5"
                                                    ></i></a
                                            ></span>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-trash color-danger m-l-5"
                                                    ></i> </a
                                            ></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""
                                                    ><img src="assets/images/avatar/1.jpg" alt=""
                                                /></a>
                                            </div>
                                        </td>
                                        <td>lew Shawon</td>
                                        <td>
                                            <span class="badge badge-primary">Ipone-7</span>
                                        </td>
                                        <td class="color-danger">$14.85</td>
                                        <td>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-pencil-alt color-success m-r-5"
                                                    ></i></a
                                            ></span>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-trash color-danger m-l-5"
                                                    ></i> </a
                                            ></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""
                                                    ><img src="assets/images/avatar/1.jpg" alt=""
                                                /></a>
                                            </div>
                                        </td>
                                        <td>lew Shawon</td>
                                        <td>
                                            <span class="badge badge-primary">Ipone-7</span>
                                        </td>
                                        <td class="color-danger">$14.85</td>
                                        <td>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-pencil-alt color-success m-r-5"
                                                    ></i></a
                                            ></span>
                                            <span
                                                ><a href=""
                                                    ><i
                                                        class="ti-trash color-danger m-l-5"
                                                    ></i> </a
                                            ></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('js/circle-progress.min.js')}}"></script>
    <script src="{{asset('js/circle-progress-init.js')}}"></script>
    <script src="{{asset('js/chartist.min.js')}}"></script>
    <script src="{{asset('js/chartist-init.js')}}"></script>
    <script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline.init.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/peitychart.init.js')}}"></script>
    <script src="{{asset('js/d3.min.js')}}"></script>
    <script src="{{asset('js/topojson.js')}}"></script>
    <script src="{{asset('js/datamaps.world.min.js')}}"></script>
    <script src="{{asset('js/datamap-init.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel-init.js')}}"></script>
    <script src="{{asset('js/raphael-min.js')}}"></script>
    <script src="{{asset('js/morris.js')}}"></script>
    <script src="{{asset('js/morris-init.js')}}"></script>

@endsection
