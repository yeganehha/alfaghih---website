<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

        <!-- begin:: Header Menu -->
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">

            </div>
        </div>

        <!-- end:: Header Menu -->

        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: User Bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="kt-header__topbar-user">
                        <span class="kt-header__topbar-welcome">{{ trans('Hi') }}</span>
                        <span class="kt-header__topbar-username">{{ auth()->user()->name }}</span>
                        <img class="kt-hidden" alt="Pic" src="https://v1.dealsco.app/uploads/admins/no-image.png"/>
                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
                            <img alt="Pic" src="https://v1.dealsco.app/uploads/admins/no-image.png"/>
                        </span>
                    </div>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                    <!--begin: Head -->
                    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{ asset('admin-assets/media/misc/bg-1.jpg') }})">
                        <div class="kt-user-card__avatar">
                            <img class="kt-hidden" alt="Pic" src="https://v1.dealsco.app/uploads/admins/no-image.png"/>

                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                            <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">
                                                            <img alt="Pic" src="https://v1.dealsco.app/uploads/admins/no-image.png"/>
                                                    </span>
                        </div>
                        <div class="kt-user-card__name">
                            {{ auth()->user()->name }}
                        </div>
                    </div>
                    <!--end: Head -->

                    <!--begin: Navigation -->
                    <div class="kt-notification">
                        <a href="{{ route('admin:admins.edit' , [auth('admin')->id()]) }}" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title kt-font-bold">
                                    {{ trans('EditProfile') }}
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('admin:admins.edit' , [auth('admin')->id()]) }}" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-lock kt-font-warning"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title kt-font-bold">
                                    {{ trans('ChangePassword') }}
                                </div>
                            </div>
                        </a>
                        <div class="kt-notification__custom kt-space-between">
                            <a href="{{ route('admin:auth.logout') }}"
                               class="btn btn-label-danger btn-label-brand btn-sm btn-bold"
                            >
                                {{ trans('SignOut') }}
                            </a>
                        </div>
                    </div>
                    <!--end: Navigation -->
                </div>
            </div>
            <!--end: User Bar -->
        </div>

        <!-- end:: Header Topbar -->
    </div>

    <!-- end:: Header -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">@yield('title')</h3>
                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('admin:dashboard') }}" class="kt-subheader__breadcrumbs-link">
                            {{ trans('dashboard')  }} </a>
                        @hasSection('subheader')
                            @yield('subheader')
                        @endif
{{--                        <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span>--}}
                    </div>
                </div>
                @hasSection('actionButton')
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        @yield('actionButton')
                    </div>
                </div>
                @endif

            </div>
        </div>

        <!-- end:: Subheader -->
