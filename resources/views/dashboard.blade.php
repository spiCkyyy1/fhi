@extends('layouts.app')

@section('css')
    <link href="{{asset('css/customapp.css')}}" rel="stylesheet" />
    <link href="{{asset('css/customapp-all.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">App-Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="user-profile">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="user-photo m-b-30">
                                            <img
                                                class="img-responsive"
                                                src="{{asset('images/user-profile.jpg')}}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="user-work">
                                            <h4>work</h4>
                                            <div class="work-content">
                                                <h3>HTML</h3>
                                                <p>123, South Mugda</p>
                                                <p>Dhaka, 1214</p>
                                            </div>
                                            <div class="work-content">
                                                <h3>Unix dewas</h3>
                                                <p>123, South Mugda</p>
                                                <p>Dhaka, 1214</p>
                                            </div>
                                        </div>
                                        <div class="user-skill">
                                            <h4>Skill</h4>
                                            <ul>
                                                <li><a href="#">Branding</a></li>
                                                <li><a href="#">UI/UX</a></li>
                                                <li><a href="#">Web Design</a></li>
                                                <li><a href="#">Wordpress</a></li>
                                                <li><a href="#">Magento</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="user-profile-name">{{ucfirst(Auth::user()->first_name)}} {{ucfirst(Auth::user()->last_name)}}</div>
                                        @if(Auth::user()->city)
                                        <div class="user-Location">
                                            <i class="ti-location-pin"></i> {{Auth::user()->city}}, {{Auth::user()->state}}
                                        </div>
                                        @endif
                                        <div class="user-job-title">Product Designer</div>
                                        <div class="ratings">
                                            <h4>Ratings</h4>
                                            <div class="rating-star">
                                                <span>8.9</span>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star"></i>
                                            </div>
                                        </div>
                                        <div class="user-send-message">
                                            <button
                                                class="btn btn-primary btn-addon"
                                                type="button"
                                            >
                                                <i class="ti-email"></i>Send Message
                                            </button>
                                        </div>
                                        <div class="custom-tab user-profile-tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a
                                                        href="#1"
                                                        aria-controls="1"
                                                        role="tab"
                                                        data-toggle="tab"
                                                    >About</a
                                                    >
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div
                                                    role="tabpanel"
                                                    class="tab-pane active"
                                                    id="1"
                                                >
                                                    <div class="contact-information">
                                                        <h4>Contact information</h4>
                                                        <div class="phone-content">
                                                            <span class="contact-title">Phone:</span>
                                                            <span class="phone-number"
                                                            >{{Auth::user()->phone}}</span
                                                            >
                                                        </div>
                                                        <div class="address-content">
                                                            <span class="contact-title">Address:</span>
                                                            <span class="mail-address"
                                                            >{{Auth::user()->address1}}</span
                                                            >
                                                        </div>
                                                        <div class="email-content">
                                                            <span class="contact-title">Email:</span>
                                                            <span class="contact-email"
                                                            >{{Auth::user()->email}}</span
                                                            >
                                                        </div>
                                                        <div class="website-content">
                                                            <span class="contact-title">Website:</span>
                                                            <span class="contact-website"
                                                            >www.example.com</span
                                                            >
                                                        </div>
                                                        <div class="skype-content">
                                                            <span class="contact-title">Skype:</span>
                                                            <span class="contact-skype"
                                                            >support@example.com</span
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="basic-information">
                                                        <h4>Basic information</h4>
                                                        <div class="birthday-content">
                                                            <span class="contact-title">Birthday:</span>
                                                            <span class="birth-date"
                                                            >January 31, 1990
																		</span>
                                                        </div>
                                                        <div class="gender-content">
                                                            <span class="contact-title">Gender:</span>
                                                            <span class="gender">Male</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="row portfolio-tabs">
                        <div class="col-lg-4">
                            <a data-toggle="tab" href="#">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="profile-widget">
                                            <div class="stat-text">Home</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a data-toggle="" href="#">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="profile-widget">
                                            <div class="stat-text">Asset Track</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a data-toggle="" href="#">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="profile-widget">
                                            <div class="stat-text">Financial Health Servey</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-lg-3">
                                    <div class="card">
                                        <div class="stat-widget-one">
                                            <div class="profile-widget">
                                                <div class="stat-text">Upcomming</div>
                                                <div class="stat-digit">29</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                    <div class="tab-content card alert">
                        <div id="home" class="tab-pane fade in active">
                            <h3 class="text-center">
                                Welcome to your F&H Resource Dashboard
                            </h3>
                            <p class="text-center">
                                Start taking advantage of the free tools and resources
                                today. If you need assistance, your F&amp;H advisor is
                                always standing by to answer questions. If you do not have
                                an advisor yet, please
                                <a href="mailto:feedback@fhri.org">contact us</a> today.
                            </p>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="asset text-center">
                                        <a href="#">
                                            <img
                                                src="{{asset('images/custom/assettrack.jpg')}}"
                                                alt=""
                                            />
                                            <h3>AssetTrack</h3>
                                            <p>
                                                Organize your asset portfolio with this
                                                easy-to-use and secure tool. Be able to update and
                                                view exactly where your assets are.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="financial text-center">
                                        <a href="{{route('graph')}}">
                                            <img
                                                src="{{asset('images/custom/spectrograph.jpg')}}"
                                                alt=""
                                            />
                                            <h3>Financial Health Spectrograph</h3>
                                            <p>
                                                Expose the level of risk in your portfolio with
                                                the Financial Health Spectrograph. With this tool,
                                                you will understand exactly where the risk in your
                                                investments lie so you can make the proper
                                                investment decisions for your needs.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="financial-servey text-center">
                                        <a href="{{route('fhs')}}">
                                            <img src="{{asset('images/custom/survey.jpg')}}" alt="" />
                                            <h3>Financial Health Servey</h3>
                                            <p>
                                                Get a check-up on your financial health by taking
                                                the Financial Health Servey. Find out how well you
                                                are covered in 9 key areas of financial
                                                responsibility.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="assettrack" class="tab-pane fade">
                            <div
                                class="x-panel-tbar x-panel-tbar-noheader x-panel-tbar-noborder"
                                id="ext-gen225"
                            >
                                <div id="ext-comp-1216" class="x-toolbar x-small-editor">
                                    <table cellspacing="0">
                                        <tbody>
                                        <tr>
                                            <td id="ext-gen227">
                                                <table
                                                    border="0"
                                                    cellpadding="0"
                                                    cellspacing="0"
                                                    class="x-btn-wrap x-btn x-btn-text-icon"
                                                    id="ext-comp-1217"
                                                    style="width: auto;"
                                                >
                                                    <tbody>
                                                    <tr>
                                                        <td class="x-btn-left"><i>&nbsp;</i></td>
                                                        <td class="x-btn-center">
                                                            <em unselectable="on"
                                                            ><button
                                                                    class="x-btn-text"
                                                                    type="button"
                                                                    id="ext-gen229"
                                                                    style="
																							background-image: url('images/icons/coins_add.png');
																						"
                                                                >
                                                                    New Asset
                                                                </button></em
                                                            >
                                                        </td>
                                                        <td class="x-btn-right"><i>&nbsp;</i></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td style="width: 100%;">
                                                <div class="ytb-spacer" id="ext-gen236"></div>
                                            </td>
                                            <td id="ext-gen238">
                                                <table
                                                    border="0"
                                                    cellpadding="0"
                                                    cellspacing="0"
                                                    class="x-btn-wrap x-btn x-btn-text-icon"
                                                    id="ext-comp-1218"
                                                    style="width: auto;"
                                                >
                                                    <tbody>
                                                    <tr>
                                                        <td class="x-btn-left"><i>&nbsp;</i></td>
                                                        <td class="x-btn-center">
                                                            <em unselectable="on"
                                                            ><button
                                                                    class="x-btn-text"
                                                                    type="button"
                                                                    id="ext-gen240"
                                                                    style="
																							background-image: url('images/icons/chart_bar.png');
																						"
                                                                >
                                                                    View Spectrograph
                                                                </button></em
                                                            >
                                                        </td>
                                                        <td class="x-btn-right"><i>&nbsp;</i></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>
                                                <span class="ytb-sep" id="ext-gen247"></span>
                                            </td>
                                            <td id="ext-gen248">
                                                <table
                                                    border="0"
                                                    cellpadding="0"
                                                    cellspacing="0"
                                                    class="x-btn-wrap x-btn x-btn-text-icon"
                                                    id="ext-comp-1219"
                                                    style="width: auto;"
                                                >
                                                    <tbody>
                                                    <tr>
                                                        <td class="x-btn-left"><i>&nbsp;</i></td>
                                                        <td class="x-btn-center">
                                                            <em unselectable="on"
                                                            ><button
                                                                    class="x-btn-text"
                                                                    type="button"
                                                                    id="ext-gen250"
                                                                    style="
																							background-image: url('images/icons/briefcase.png');
																						"
                                                                >
                                                                    Manage Portfolios
                                                                </button></em
                                                            >
                                                        </td>
                                                        <td class="x-btn-right"><i>&nbsp;</i></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h3>Menu 1</h3>
                            <p>
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div id="f-h-s" class="tab-pane fade">
                            <div
                                id="FHSTab"
                                class="x-panel x-panel-noborder"
                                style="width: 1920px;"
                            >
                                <div class="x-panel-bwrap" id="ext-gen161">
                                    <div
                                        class="x-panel-tbar x-panel-tbar-noheader x-panel-tbar-noborder"
                                        id="ext-gen162"
                                    >
                                        <div
                                            id="ext-comp-1212"
                                            class="x-toolbar x-small-editor"
                                        >
                                            <table cellspacing="0">
                                                <tbody>
                                                <tr>
                                                    <td id="ext-gen164">
                                                        <table
                                                            border="0"
                                                            cellpadding="0"
                                                            cellspacing="0"
                                                            class="x-btn-wrap x-btn x-btn-text-icon"
                                                            id="ext-comp-1213"
                                                            style="width: auto;"
                                                        >
                                                            <tbody>
                                                            <tr>
                                                                <td class="x-btn-left">
                                                                    <i>&nbsp;</i>
                                                                </td>
                                                                <td class="x-btn-center">
                                                                    <em unselectable="on"
                                                                    ><button
                                                                            class="x-btn-text"
                                                                            type="button"
                                                                            id="ext-gen166"
                                                                            style="
																									background-image: url('images/icons/delete.png');
																								"
                                                                        >
                                                                            Clear Answers
                                                                        </button></em
                                                                    >
                                                                </td>
                                                                <td class="x-btn-right">
                                                                    <i>&nbsp;</i>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td style="width: 100%;">
                                                        <div
                                                            class="ytb-spacer"
                                                            id="ext-gen173"
                                                        ></div>
                                                    </td>
                                                    <td id="ext-gen175">
                                                        <table
                                                            border="0"
                                                            cellpadding="0"
                                                            cellspacing="0"
                                                            class="x-btn-wrap x-btn x-btn-text-icon"
                                                            id="ext-comp-1214"
                                                            style="width: auto;"
                                                        >
                                                            <tbody>
                                                            <tr>
                                                                <td class="x-btn-left">
                                                                    <i>&nbsp;</i>
                                                                </td>
                                                                <td class="x-btn-center">
                                                                    <em unselectable="on"
                                                                    ><button
                                                                            class="x-btn-text"
                                                                            type="button"
                                                                            id="ext-gen177"
                                                                            style="
																									background-image: url('images/icons/chart_bar.png');
																								"
                                                                        >
                                                                            View Report
                                                                        </button></em
                                                                    >
                                                                </td>
                                                                <td class="x-btn-right">
                                                                    <i>&nbsp;</i>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct"
                                        id="ext-gen163"
                                        style="width: 1920px; height: 725px;"
                                    >
                                        <div
                                            id="fhsgrid"
                                            class="x-panel x-border-panel x-grid-panel"
                                            style="left: 0px; top: 0px; width: 1920px;"
                                        >
                                            <div class="x-panel-bwrap" id="ext-gen184">
                                                <div
                                                    class="x-panel-body x-panel-body-noheader xedit-grid"
                                                    id="ext-gen185"
                                                    style="width: 1918px; height: 723px;"
                                                >
                                                    <div
                                                        class="x-grid3"
                                                        hidefocus="true"
                                                        id="ext-gen197"
                                                        style="width: 1918px; height: 723px;"
                                                    >
                                                        <div class="x-grid3-viewport" id="ext-gen198">
                                                            <div class="x-grid3-header" id="ext-gen199">
                                                                <div
                                                                    class="x-grid3-header-inner"
                                                                    id="ext-gen206"
                                                                    style="width: 1918px;"
                                                                >
                                                                    <div class="x-grid3-header-offset">
                                                                        <table
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <thead>
                                                                            <tr class="x-grid3-hd-row">
                                                                                <td
                                                                                    class="x-grid3-hd x-grid3-cell x-grid3-td-0"
                                                                                    style="width: 184px;"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-hd-inner x-grid3-hd-0"
                                                                                        unselectable="on"
                                                                                        style=""
                                                                                    >
                                                                                        <a
                                                                                            class="x-grid3-hd-btn"
                                                                                            href="#"
                                                                                        ></a
                                                                                        >Number<img
                                                                                            class="x-grid3-sort-icon"
                                                                                            src="/appui/lib/ext/resources/images/default/s.gif"
                                                                                        />
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-hd x-grid3-cell x-grid3-td-1"
                                                                                    style="width: 1394px;"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-hd-inner x-grid3-hd-1"
                                                                                        unselectable="on"
                                                                                        style=""
                                                                                    >
                                                                                        <a
                                                                                            class="x-grid3-hd-btn"
                                                                                            href="#"
                                                                                            id="ext-gen223"
                                                                                            style="height: 22px;"
                                                                                        ></a
                                                                                        >Question<img
                                                                                            class="x-grid3-sort-icon"
                                                                                            src="/appui/lib/ext/resources/images/default/s.gif"
                                                                                        />
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-hd x-grid3-cell x-grid3-td-2"
                                                                                    style="width: 314px;"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-hd-inner x-grid3-hd-2"
                                                                                        unselectable="on"
                                                                                        style=""
                                                                                    >
                                                                                        <a
                                                                                            class="x-grid3-hd-btn"
                                                                                            href="#"
                                                                                        ></a
                                                                                        >Answer<img
                                                                                            class="x-grid3-sort-icon"
                                                                                            src="/appui/lib/ext/resources/images/default/s.gif"
                                                                                        />
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="x-clear"></div>
                                                            </div>
                                                            <div
                                                                class="x-grid3-scroller"
                                                                id="ext-gen200"
                                                                style="
																				overflow-x: hidden;
																				width: 1918px;
																				height: 699px;
																			"
                                                            >
                                                                <div class="x-grid3-body" id="ext-gen201">
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        1
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="white-space:normal; !important;width:1394px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are more than 50% of your
                                                                                        net assets liquid?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Maybe
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        2
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have enough money to
                                                                                        last the rest of your life?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        3
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="white-space:normal; !important;width:1394px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Can you afford to lose some
                                                                                        money in a stock market
                                                                                        correction without affecting
                                                                                        your standard of living?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Maybe
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        4
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have burial insurance
                                                                                        and a prepaid burial plot?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        5
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you tap into the
                                                                                        principal of your
                                                                                        investments to sustain your
                                                                                        standard of living?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        6
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is your home protected from
                                                                                        the claims of the state
                                                                                        should you require
                                                                                        assistance in paying for
                                                                                        nursing home care?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        7
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        If there were ways to ensure
                                                                                        that you could pass more on
                                                                                        to your family with proper
                                                                                        planning, would you do the
                                                                                        planning required?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        8
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are Your Automobiles,
                                                                                        including RVs and
                                                                                        recreational trailers, paid
                                                                                        for?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        9
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Would your family be able to
                                                                                        pay for any estate taxes
                                                                                        after your death without
                                                                                        having to sell illiquid
                                                                                        assets, such as real estate?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        10
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are you able to access
                                                                                        $25,000 or more in cash
                                                                                        within 24 hours without
                                                                                        incurring any penalties from
                                                                                        the financial institution
                                                                                        holding the money?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        11
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you make more than you
                                                                                        spend?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        12
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="white-space:normal; !important;width:1394px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are you concerned about
                                                                                        having enough money for
                                                                                        emergencies such as fire,
                                                                                        earthquake, or serious
                                                                                        illness?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        No
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        13
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are you gifting part of your
                                                                                        estate to anyone on a
                                                                                        regular basis?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        14
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are the majority of your
                                                                                        investments insured by a
                                                                                        government agency?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        15
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are more than 30% of your
                                                                                        assets placed in investments
                                                                                        that are subject to the ups
                                                                                        and downs of the stock
                                                                                        market?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        16
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="white-space:normal; !important;width:1394px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have more than
                                                                                        $100,000 in any savings
                                                                                        institution or life
                                                                                        insurance company?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Maybe
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        17
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have health insurance
                                                                                        or a Medicare Supplement
                                                                                        policy?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        18
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are more than 50% of your
                                                                                        liquid assets invested in
                                                                                        CDs, savings accounts or
                                                                                        money market accounts?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        19
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have a completely
                                                                                        funded Living Trust?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        20
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you keep more than $5,000
                                                                                        in your household checking
                                                                                        account?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        21
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you own your home rather
                                                                                        than rent?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        22
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Have you estimated the
                                                                                        effect that inflation will
                                                                                        have on your income to
                                                                                        ensure that you will not
                                                                                        outlive your money?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        23
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is there something about
                                                                                        your finances which causes
                                                                                        you concern or about which
                                                                                        you are anxious about?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        24
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you own or have you
                                                                                        purchased any cash value
                                                                                        life insurance policies?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        25
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Have you ever been the
                                                                                        victim of bad financial
                                                                                        advice?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        26
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Other than your mortgage, do
                                                                                        you have debts less than
                                                                                        $5,000 (yes), greater than
                                                                                        $5,000 (maybe) or greater
                                                                                        than $15,000 (no)?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        27
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have a current or
                                                                                        updated will?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        28
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have a current
                                                                                        Durable Power of Attorney
                                                                                        for Healthcare and a Living
                                                                                        Will?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        29
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you delegate the handling
                                                                                        of your finances to another?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        30
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        In liquid assets, do you
                                                                                        have less than $25,000
                                                                                        (yes), greater than $25,000
                                                                                        (maybe) or greater than
                                                                                        $100,000 (no)?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        31
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are your principal residence
                                                                                        and your investment
                                                                                        properties mortgage-free?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        32
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Have you arranged your
                                                                                        estate in such a way to make
                                                                                        you eligible for government
                                                                                        programs, such as Medicaid
                                                                                        or Medi-Cal, that provide
                                                                                        for long-term care?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        33
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is your mortgage debt less
                                                                                        than $50,000 (yes), greater
                                                                                        than $50,000 (maybe) or
                                                                                        greater than $100,000 (no)?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        34
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Have you included anyone as
                                                                                        a joint owner of your
                                                                                        property?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        35
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        After retirement, will you
                                                                                        have at least 10 times the
                                                                                        amount of your annual
                                                                                        desired income less pension
                                                                                        (Retirement Income Gap) in
                                                                                        liquid assets?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        36
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is your annual income
                                                                                        including investments,
                                                                                        pensions, and entitlements
                                                                                        greater than $50,000?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        37
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is your estate worth more
                                                                                        than $1,000,000 if single or
                                                                                        more than $2,000,000 if
                                                                                        married?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        38
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have any family with
                                                                                        special needs that you have
                                                                                        not provided for?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        39
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you seek the advice of
                                                                                        others rather than keep your
                                                                                        own counsel in making
                                                                                        financial decisions?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        40
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you pay more than 25% in
                                                                                        income taxes?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        41
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is your credit card debt
                                                                                        less than $2,500 (yes),
                                                                                        greater than $2,500 (maybe)
                                                                                        or greater than $7,500 (no)?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        42
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Have you planned for the up
                                                                                        to 50% estate tax your
                                                                                        family may have to pay at
                                                                                        your death(s)?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        43
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have a long-term care
                                                                                        insurance policy?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        44
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are you earning more than
                                                                                        the rate of inflation on
                                                                                        your investments?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        45
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have more than
                                                                                        $100,000 invested in
                                                                                        tax-deferred annuites or
                                                                                        Municipal Bonds?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        46
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have a current
                                                                                        Durable Power of Attorney
                                                                                        for Asset Management?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        47
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are more than 1/3 of your
                                                                                        liquid assets subject to
                                                                                        capital gains taxes?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        48
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is leaving money to your
                                                                                        children or others you care
                                                                                        about important to you?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        49
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are you paying taxes on
                                                                                        income that you do not use
                                                                                        such as interest income?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        50
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are you investing in what
                                                                                        you consider risky
                                                                                        investments in an attempt to
                                                                                        increase your income to
                                                                                        sustain your standard of
                                                                                        living?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        51
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Are you (and your spouse) in
                                                                                        good health?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        52
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have a financial
                                                                                        advisor you trust?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        53
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Is the interest and gain on
                                                                                        your investments sufficient
                                                                                        to sustain your standard of
                                                                                        living?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        54
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Will your family have to pay
                                                                                        off the debts and taxes of
                                                                                        your estate from its own
                                                                                        pockets?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div
                                                                        class="x-grid3-row"
                                                                        style="width: 1898px;"
                                                                    >
                                                                        <table
                                                                            class="x-grid3-row-table"
                                                                            border="0"
                                                                            cellspacing="0"
                                                                            cellpadding="0"
                                                                            style="width: 1898px;"
                                                                        >
                                                                            <tbody>
                                                                            <tr>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first"
                                                                                    style="width: 184px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-0"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        55
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-1"
                                                                                    style="
																										white-space: normal;
																										width: 1394px;
																									"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-1"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        Do you have more than
                                                                                        $100,000 in CDs?
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last"
                                                                                    style="width: 314px;"
                                                                                    tabindex="0"
                                                                                >
                                                                                    <div
                                                                                        class="x-grid3-cell-inner x-grid3-col-2"
                                                                                        unselectable="on"
                                                                                    >
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <a
                                                                    href="#"
                                                                    class="x-grid3-focus"
                                                                    tabindex="-1"
                                                                    id="ext-gen202"
                                                                ></a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="x-grid3-resize-marker"
                                                            id="ext-gen204"
                                                        >
                                                            &nbsp;
                                                        </div>
                                                        <div
                                                            class="x-grid3-resize-proxy"
                                                            id="ext-gen205"
                                                        >
                                                            &nbsp;
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Task</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert">
                                                <i class="ti-close"></i>
                                            </li>
                                            <li class="doc-link">
                                                <a href="#"><i class="ti-link"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul>
                                                <li>
                                                    <label
                                                    ><input type="checkbox" /><i></i
                                                        ><span>Organize your asset portfolio</span
                                                        ><a href="#" class="ti-close"></a
                                                        ></label>
                                                </li>
                                                <li>
                                                    <label
                                                    ><input type="checkbox" /><i></i
                                                        ><span
                                                        >Expose the level of risk on your
																		portfolio</span
                                                        ><a href="#" class="ti-close"></a
                                                        ></label>
                                                </li>
                                                <li>
                                                    <label
                                                    ><input type="checkbox" checked /><i></i
                                                        ><span
                                                        >Go and check upon your finacial
																		health</span
                                                        ><a href="#" class="ti-close"></a
                                                        ></label>
                                                </li>
                                                <!-- <li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li>
                                                        <li><label><input type="checkbox" checked><i></i><span>do something else</span><a href='#' class="ti-close"></a></label></li>
                                                        <li><label><input type="checkbox" checked><i></i><span>stand up</span><a href='#' class="ti-close"></a></label></li>
                                                        <li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li> -->
                                            </ul>
                                        </div>
                                        <input
                                            type="text"
                                            class="tdl-new form-control"
                                            placeholder="Write new item and hit 'Enter'..."
                                        />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Recent Project</h4>
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
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Kolor Tea Shirt For Man</td>
                                        <td>
                                            <span class="badge badge-primary">Ongoing</span>
                                        </td>
                                        <td>January 22</td>
                                        <td class="color-primary">$21.56</td>
                                    </tr>
                                    <tr>
                                        <td>Kolor Tea Shirt For Women</td>
                                        <td>
                                            <span class="badge badge-success">Complete</span>
                                        </td>
                                        <td>January 30</td>
                                        <td class="color-success">$55.32</td>
                                    </tr>
                                    <tr>
                                        <td>Blue Backpack For Baby</td>
                                        <td>
                                            <span class="badge badge-danger">Rejected</span>
                                        </td>
                                        <td>January 25</td>
                                        <td class="color-danger">$14.85</td>
                                    </tr>
                                    <tr>
                                        <td>Kolor Tea Shirt For Man</td>
                                        <td>
                                            <span class="badge badge-primary">Ongoing</span>
                                        </td>
                                        <td>January 22</td>
                                        <td class="color-primary">$21.56</td>
                                    </tr>
                                    <tr>
                                        <td>Kolor Tea Shirt For Women</td>
                                        <td>
                                            <span class="badge badge-success">Complete</span>
                                        </td>
                                        <td>January 30</td>
                                        <td class="color-success">$55.32</td>
                                    </tr>
                                    <tr>
                                        <td>Blue Backpack For Baby</td>
                                        <td>
                                            <span class="badge badge-danger">Rejected</span>
                                        </td>
                                        <td>January 25</td>
                                        <td class="color-danger">$14.85</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Recent Comments</h4>
                            <div class="card-header-right-icon">
                                <ul>
                                    <li class="card-close" data-dismiss="alert">
                                        <i class="ti-close"></i>
                                    </li>
                                    <li class="doc-link">
                                        <a href="#"><i class="ti-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="recent-comment">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"
                                    ><img
                                            class="media-object"
                                            src="{{asset('images/avatar/1.jpg')}}"
                                            alt="..."
                                        /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. Ajay</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                        metus scelerisque ante sollicitudin commodo.
                                    </p>
                                    <div class="comment-action">
                                        <div class="badge badge-success">Approved</div>
                                        <span class="m-l-10">
														<a href="#"
                                                        ><i class="ti-check color-success"></i
                                                            ></a>
														<a href="#"
                                                        ><i class="ti-close color-danger"></i
                                                            ></a>
														<a href="#"
                                                        ><i class="fa fa-reply color-primary"></i
                                                            ></a>
													</span>
                                    </div>
                                    <p class="comment-date">October 21, 2017</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"
                                    ><img
                                            class="media-object"
                                            src="{{asset('images/avatar/1.jpg')}}"
                                            alt="..."
                                        /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. Ajay</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                        metus scelerisque ante sollicitudin commodo.
                                    </p>
                                    <div class="comment-action">
                                        <div class="badge badge-warning">Pending</div>
                                        <span class="m-l-10">
														<a href="#"
                                                        ><i class="ti-check color-success"></i
                                                            ></a>
														<a href="#"
                                                        ><i class="ti-close color-danger"></i
                                                            ></a>
														<a href="#"
                                                        ><i class="fa fa-reply color-primary"></i
                                                            ></a>
													</span>
                                    </div>
                                    <p class="comment-date">October 21, 2017</p>
                                </div>
                            </div>
                            <div class="media no-border">
                                <div class="media-left">
                                    <a href="#"
                                    ><img
                                            class="media-object"
                                            src="{{asset('images/avatar/3.jpg')}}"
                                            alt="..."
                                        /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. Ajay</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                        metus scelerisque ante sollicitudin commodo.
                                    </p>
                                    <div class="comment-action">
                                        <div class="badge badge-danger">Rejected</div>
                                        <span class="m-l-10">
														<a href="#"
                                                        ><i class="ti-check color-success"></i
                                                            ></a>
														<a href="#"
                                                        ><i class="ti-close color-danger"></i
                                                            ></a>
														<a href="#"
                                                        ><i class="fa fa-reply color-primary"></i
                                                            ></a>
													</span>
                                    </div>
                                    <div class="comment-date">October 21, 2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p>
                            This dashboard was generated on
                            <span id="date-time"></span>
                            <a href="#" class="page-refresh">Refresh Dashboard</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
