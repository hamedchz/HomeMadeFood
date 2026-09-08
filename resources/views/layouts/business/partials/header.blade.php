<div>
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/logo-light.png" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->

        {{-- switch panel --}}
        <div class=" align-items-center switch-panel">
            <div class="role-switcher">
                <span class="role-label " id="labelUser"> <small>تجاری
                    </small></span>
                <div class="form-check form-switch m-0 p-0 position-relative">
                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-primary position-absolute top-0 left-0 right-0 bottom-0"
                        style="z-index: 10;opacity:0;" id="switchUserPanel" data-toggle="modal"
                        data-target="#switchUserPanelModal">

                    </button>
                    <div>
                        <span class="switch switch-primary switch-sm">
                            <label>
                                <input type="checkbox" checked="checked" name="select" />
                                <span></span>
                            </label>
                        </span>
                    </div>
                </div>
                <span class="role-label text-success" id="labelAdmin"><small>مشاور
                    </small></span>
            </div>
        </div>



        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    {{-- <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper"> --}}



    <div id="kt_header" class="header header-fixed">
        {{-- switch panel --}}
        <div class="d-flex align-items-center switch-panel">
            <div class="role-switcher">
                <span class="role-label " id="labelUser"> <small>تجاری
                    </small></span>
                <div class="form-check form-switch m-0 p-0 position-relative">
                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-primary position-absolute top-0 left-0 right-0 bottom-0"
                        style="z-index: 10;opacity:0;" data-toggle="modal" data-target="#switchUserPanelModal">

                    </button>
                    <div>
                        <span class="switch switch-primary switch-sm">
                            <label>
                                <input type="checkbox" checked="checked" name="select" />
                                <span></span>
                            </label>
                        </span>
                    </div>
                </div>
                <span class="role-label text-success" id="labelAdmin"><small>مشاور
                    </small></span>
            </div>
        </div>





        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class="topbar">
                <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
                    <!--begin::Header-->
                    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
                        <h3 class="font-weight-bold m-0">{{ trans('User Profile') }}
                            {{-- <small class="text-muted font-size-sm ml-2">12 messages</small> --}}
                        </h3>
                        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary"
                            id="kt_quick_user_close">
                            <i class="ki ki-close icon-xs text-muted"></i>
                        </a>
                    </div>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="offcanvas-content pr-5 mr-n5">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center mt-5">
                            <div class="symbol symbol-100 mr-5">
                                <div class="symbol-label"
                                    style="background-image:url('{{ auth()->user()->avatar() }}')">
                                </div>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ auth()->user()->fullName }}</a>
                                <div class="text-muted mt-1">{{ auth()->user()->identity_no }}</div>
                                <div class="navi mt-2">
                                    <a href="#" class="navi-item">
                                        <span class="navi-link p-0 pb-2">
                                            <span class="navi-icon mr-1">
                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                fill="#000000" />
                                                            <circle fill="#000000" opacity="0.3" cx="19.5"
                                                                cy="17.5" r="2.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span
                                                class="navi-text text-muted text-hover-primary">{{ auth()->user()->email }}</span>
                                        </span>
                                    </a>
                                    <form action="{{ route('auth.logout', app()->getLocale()) }}" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">
                                            {{ trans('Log Out') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end::Content-->
                </div>
                <livewire:member.partials.header-notification />
                <!--begin::Languages-->
                <div class="dropdown">
                    <!--begin::Toggle-->
                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                            @foreach (config('locales.locales') as $locale)
                                @if ($locale['regional'] == app()->getLocale())
                                    <img class="h-20px w-20px rounded-sm" src="{{ asset($locale['flag']) }}"
                                        alt="iran-flag"
                                        style="height: 19px;border-radius: 5px !important;width: 20px;object-fit: cover;" />
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <!--end::Toggle-->
                    <!--begin::Dropdown-->
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Nav-->
                        <ul class="navi navi-hover py-4">
                            @foreach (config('locales.locales') as $locale)
                                @if ($locale['regional'] !== app()->getLocale())
                                    <li class="navi-item">
                                        <a href="{{ route('user.change.language', [app()->getLocale(), $locale['regional']]) }}"
                                            class="navi-link">
                                            <span class="symbol symbol-20 mr-3">
                                                <img src="{{ asset($locale['flag']) }}" alt=""
                                                    style="height: 19px;border-radius: 5px !important;width: 20px;object-fit: cover;" />
                                            </span>
                                            <span class="navi-text"> {{ $locale['native'] }}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <!--end::Nav-->
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Languages-->
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                        id="kt_quick_user_toggle">
                        {{-- <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span> --}}
                        <span
                            class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ ucfirst(auth()->user()->name) }}</span>
                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success overflow-hidden"
                            style="border-radius: 5px;">
                            <span class="symbol-label font-size-h5 font-weight-bold">
                                {{-- TODO:image size css --}}
                                <img src="{{ auth()->user()->avatar() }}" style="width: 35px;height:35px;" />
                            </span>
                        </span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->


    </div>

    <!-- Modal switch panel-->

    <div class="modal fade" id="switchUserPanelModal" tabindex="-1" role="dialog"
        aria-labelledby="switchUserPanelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header w-100">
                    <h5 class="modal-title" id="switchUserPanelModalLabel">تغییر نوع حساب
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    با تغییر نوع حساب، تمام بخش‌ها (از جمله اتاق کار و نحوه نمایش پروفایل شما برای
                    سایر کاربران)
                    مطابق نقش انتخابی‌تان نمایش داده خواهد شد.آیا مطمئن هستید که می‌خواهید این تغییر را
                    انجام دهید؟
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">{{ trans('Close') }}</button>
                    <button type="button" class="btn btn-primary font-weight-bold">{{ trans('Ok') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custom-scripts')
    <script>
        const switchUserPanel = document.querySelector('#switchUserPanel')
        switchUserPanel.addEventListener('click', () => {
            console.log('object')
        })
    </script>
@endpush
