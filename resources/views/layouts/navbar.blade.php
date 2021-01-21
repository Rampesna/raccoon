<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <div id="kt_header" class="header header-fixed">

        <div class="container-fluid d-flex align-items-stretch justify-content-between">

            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                    <ul class="menu-nav">
                        <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                            <a href="#" data-toggle="modal" data-target="#QuickActions" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect opacity="0.200000003" x="0" y="0" width="24" height="24"/>
                                            <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="menu-text">@lang('navbar.quick_menu.title')</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="topbar">

                <div class="dropdown">
                    <!--begin::Toggle-->
                    <div class="topbar-item cursor-pointer" data-toggle="dropdown" data-offset="10px,0px">
                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                            <img class="h-20px w-20px rounded-sm" src="{{ asset('assets/media/svg/flags/' . \Illuminate\Support\Facades\Cookie::get('language')) . '.svg' }}" alt="" />
                        </div>
                    </div>
                    <!--end::Toggle-->
                    <!--begin::Dropdown-->
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                        <ul class="navi navi-hover py-4">
                            @foreach($languages as $language)
                                <li class="navi-item">
                                    <a href="#" class="navi-link languageSelector changeLanguage" data-lang="{{ $language->code }}">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="{{ asset('assets/media/svg/flags/' . $language->code . '.svg') }}" alt="" />
                                        </span>
                                        <span class="navi-text">{{ $language->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="dropdown">

                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                            <span class="svg-icon svg-icon-xl svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <span class="pulse-ring"></span>
                        </div>
                    </div>

                    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                        <form>
                            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{ asset('assets/media/misc/bg-1.jpg') }})">

                                <h4 class="d-flex flex-center rounded-top">
                                    <span class="text-white">@lang('navbar.notifications.title')</span>
                                    <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23</span>
                                </h4>

                                <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">@lang('navbar.notifications.warnings')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">@lang('navbar.notifications.events')</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Content-->
                            <div class="tab-content">
                                <!--begin::Tabpane-->
                                <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                    <!--begin::Scroll-->
                                    <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">


                                        <div class="d-flex align-items-center mb-6">
                                            <div class="symbol symbol-40 symbol-light-warning mr-5">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column font-weight-bold">
                                                <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome SAAS</a>
                                                <span class="text-muted">Project status update meeting</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                    <!--begin::Nav-->
                                    <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-line-chart text-success"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New report has been received</div>
                                                    <div class="text-muted">23 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-paper-plane text-danger"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">Finance report has been generated</div>
                                                    <div class="text-muted">25 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-user flaticon2-line- text-success"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New order has been received</div>
                                                    <div class="text-muted">2 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-pin text-primary"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New customer is registered</div>
                                                    <div class="text-muted">3 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-sms text-danger"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">Application has been approved</div>
                                                    <div class="text-muted">3 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-pie-chart-3 text-warning"></i>
                                                </div>
                                                <div class="navinavinavi-text">
                                                    <div class="font-weight-bold">New file has been uploaded</div>
                                                    <div class="text-muted">5 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon-pie-chart-1 text-info"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New user feedback received</div>
                                                    <div class="text-muted">8 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-settings text-success"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">System reboot has been successfully completed</div>
                                                    <div class="text-muted">12 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon-safe-shield-protection text-primary"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New order has been placed</div>
                                                    <div class="text-muted">15 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-notification text-primary"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">Company meeting canceled</div>
                                                    <div class="text-muted">19 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-fax text-success"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New report has been received</div>
                                                    <div class="text-muted">23 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon-download-1 text-danger"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">Finance report has been generated</div>
                                                    <div class="text-muted">25 hrs ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon-security text-warning"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New customer comment recieved</div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="navi-item">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <i class="flaticon2-analytics-1 text-success"></i>
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">New customer is registered</div>
                                                    <div class="text-muted">3 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Tabpane-->
                                <!--begin::Tabpane-->
                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                    <!--begin::Nav-->
                                    <div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
                                        <br />No new notifications.</div>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Tabpane-->
                            </div>
                            <!--end::Content-->
                        </form>
                    </div>
                    <!--end::Dropdown-->
                </div>

                <div class="topbar-item">
                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">@lang('navbar.welcome'),</span>
                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ @$authenticated->name }}</span>
                        <span class="symbol symbol-35 symbol-light-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">{{ @substr($authenticated->name,0,1) }}</span>
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

{{--        <div class="loader" id="loader-1"></div>--}}
        <div class="container-fluid" style="margin-top: -50px;">

            @yield('content')

        </div>

    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    @include('layouts.footer')
    <!--end::Footer-->
    @include('layouts.rightbar')
</div>
