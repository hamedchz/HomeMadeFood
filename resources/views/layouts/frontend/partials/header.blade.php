<!-- Navbar Wrapper -->
<div class="relative font-sans text-gray-800">

    <!-- Navbar -->
    <nav id="top-navbar" class="transition-transform bg-white text-sm fixed inset-x-0 top-0 z-50 shadow-md">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between mx-auto py-2 px-4">

                <!-- SECTION START: Logo + Mobile Hamburger -->
                <div class="flex items-center">
                    <!-- Hamburger (Mobile) -->
                    <button id="hamburger"
                        class="xl:hidden p-2 ms-2 focus:outline-none text-gray-600 hover:bg-gray-100 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <a href="#" class="flex items-center gap-2 py-1 md:py-2">
                        <!-- Example Logo Square -->

                        <span class="text-xl font-bold text-gray-800">
                            <img src="{{ asset('img/logo.png') }}" class=" w-16 " alt="">

                        </span>
                    </a>
                </div>

                <!-- SECTION CENTER: Desktop Menu -->
                <div class="hidden xl:block" id="navbar-multi-level">
                    <ul class="flex font-bold p-0 flex-row rtl:space-x-reverse space-x-6">
                        <li><a href="#" class="block py-4 text-gray-700 hover:text-green-500 transition">صندوق‌های
                                سرمایه‌گذاری</a></li>
                        <li><a href="#" class="block py-4 text-gray-700 hover:text-green-500 transition">خدمات
                                مالی</a></li>
                        <li><a href="#" class="block py-4 text-gray-700 hover:text-green-500 transition">اخبار و
                                آموزش</a></li>
                        <li><a href="#" class="block py-4 text-gray-700 hover:text-green-500 transition">درباره
                                ما</a></li>
                    </ul>
                </div>

                <!-- SECTION END: Action Buttons (Profile, Notifs, Auth) -->
                <div class="flex items-center rtl:space-x-reverse space-x-2 py-2">


                    @auth
                        <!-- 2. Messages Button -->
                        <livewire:frontend.partials.header-notification />

                        <div class="relative" id="profile-container">
                            <button id="profile-btn"
                                class="flex items-center focus:outline-none ring-2 ring-transparent  rounded-full transition p-1">
                                <img class="w-8 h-8 rounded-full object-cover border border-gray-200"
                                    src="{{ auth()->user()->avatar() }}" alt="avatar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-500 mx-1 hidden md:block"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="profile-dropdown"
                                class="absolute top-full mt-3 w-56 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden hidden z-[60] ltr:right-0 rtl:left-0">
                                <!-- Header -->
                                <div class="px-4 py-3 border-b border-gray-100 bg-gray-50 rounded-t-xl">
                                    <p class="text-sm font-bold text-gray-800">{{ Str::upper(auth()->user()->fullName) }}
                                    </p>
                                    <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                                </div>
                                <!-- Items -->
                                <ul class="py-1 text-gray-700">
                                    <li>
                                        <a href="{{ auth()->user()->is_admin ? route('admin.dashboard', app()->getLocale()) : route('member.dashboard', app()->getLocale()) }}"
                                            class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition">
                                            <svg class="w-4 h-4 rtl:ml-2 ltr:mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                            {{ trans('Dashboard') }}
                                        </a>
                                    </li>
                                    <li>
                                        {{-- TODO:problem in hover --}}
                                        <form action="{{ route('auth.logout', app()->getLocale()) }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition w-full">
                                                <svg class="w-4 h-4 rtl:ml-2 ltr:mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    width="50" height="50" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="#000" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M4.393 4C4 4.617 4 5.413 4 7.004v9.994c0 1.591 0 2.387.393 3.002q.105.165.235.312c.483.546 1.249.765 2.78 1.202c1.533.438 2.3.657 2.856.329a1.5 1.5 0 0 0 .267-.202C11 21.196 11 20.4 11 18.803V5.197c0-1.596 0-2.393-.469-2.837a1.5 1.5 0 0 0-.267-.202c-.555-.328-1.323-.11-2.857.329c-1.53.437-2.296.656-2.78 1.202a2.5 2.5 0 0 0-.234.312M11 4h2.017c1.902 0 2.853 0 3.443.586c.33.326.476.764.54 1.414m-6 14h2.017c1.902 0 2.853 0 3.443-.586c.33-.326.476-.764.54-1.414m4-6h-7m5.5-2.5S22 11.34 22 12s-2.5 2.5-2.5 2.5" />
                                                </svg>

                                                {{ trans('Log Out') }}
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endauth
                    <!-- 4. Login / Register Buttons -->
                    @guest
                        <div class="hidden md:flex items-center rtl:space-x-reverse space-x-2">
                            <a href="#"
                                class="border-gray-200 border px-2 py-2 md:px-3 rounded-xl  hover:border-toranj hover:text-toranj">
                                ورود
                            </a>
                            <a href="#" class="relative text-xs md:text-base btn-toranj px-2 py-2 md:px-3 rounded-xl"
                                style="font-size: 12px;">

                                ثبت نام
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <!-- ========================================== -->
    <!-- SLIDE-OUT DRAWERS (Shared Backdrop)        -->
    <!-- ========================================== -->



    <!-- C. Mobile Menu -->
    <div id="mobile-menu-container" class="relative z-[80] pointer-events-none">
        <div id="slide-panel"
            class="fixed top-0 bottom-0 ltr:left-0 rtl:right-0 w-64 h-full bg-white shadow-lg pointer-events-auto transform transition-transform duration-300 ease-in-out ltr:-translate-x-full rtl:translate-x-full">
            <div class="flex justify-between items-center p-4 border-b border-gray-200 bg-gray-50">
                <h2 class="font-bold text-lg text-gray-800">منوی اصلی</h2>
                <button id="close-menu" class="p-2 close-drawer text-gray-500 hover:text-red-500">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col p-4 space-y-4 font-bold text-gray-700">
                <li><a href="#" class="block hover:text-green-500">صندوق‌های سرمایه‌گذاری</a></li>
                <li><a href="#" class="block hover:text-green-500">خدمات مالی</a></li>
                <li><a href="#" class="block hover:text-green-500">اخبار و آموزش</a></li>
                <li class="border-t pt-4 mt-2">
                    <a href="#" class="block text-gray-500 hover:text-gray-800">ورود به حساب</a>
                    <a href="#" class="block mt-4 text-center bg-green-500 text-white py-2 rounded-lg">ثبت
                        نام</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('custom-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Elements ---
            // const overlay = document.getElementById('drawer-overlay');
            // const btnNotif = document.getElementById('btn-notifications');
            // const btnMsg = document.getElementById('btn-messages');
            const btnHamburger = document.getElementById('hamburger');
            const btnProfile = document.getElementById('profile-btn');

            // const drawerNotif = document.getElementById('drawer-notifications');
            // const drawerMsg = document.getElementById('drawer-messages');
            const mobilePanel = document.getElementById('slide-panel');
            const profileDropdown = document.getElementById('profile-dropdown');
            const profileContainer = document.getElementById('profile-container');

            const closeButtons = document.querySelectorAll('.close-drawer');
            const allDrawers = [mobilePanel];

            // --- Functions ---

            // 1. Open a Side Drawer
            function openDrawer(drawer) {
                // closeAllDrawers(false); // Close others, keep overlay if switching
                closeProfileDropdown(); // Always close profile dropdown

                // Remove all hide classes (Start or End side)
                drawer.classList.remove('ltr:translate-x-full', 'rtl:-translate-x-full', 'ltr:-translate-x-full',
                    'rtl:translate-x-full');
                // Add visible class
                drawer.classList.add('translate-x-0');

                // Show Overlay
                overlay.classList.remove('hidden');
                setTimeout(() => overlay.classList.remove('opacity-0'), 10);
            }

            // 2. Close All Side Drawers
            function closeAllDrawers(hideOverlay = true) {
                allDrawers.forEach(drawer => {
                    drawer.classList.remove('translate-x-0');
                    // Re-add hidden classes based on ID
                    if (drawer.id === 'slide-panel') {
                        // Start Side
                        drawer.classList.add('ltr:-translate-x-full', 'rtl:translate-x-full');
                    } else {
                        // End Side
                        drawer.classList.add('ltr:translate-x-full', 'rtl:-translate-x-full');
                    }
                });

                if (hideOverlay) {
                    overlay.classList.add('opacity-0');
                    setTimeout(() => overlay.classList.add('hidden'), 300);
                }
            }

            // 3. Profile Dropdown Toggle
            function toggleProfileDropdown() {
                if (profileDropdown.classList.contains('hidden')) {
                    // closeAllDrawers(true); // Close sidebars if opening profile
                    profileDropdown.classList.remove('hidden');
                } else {
                    profileDropdown.classList.add('hidden');
                }
            }

            function closeProfileDropdown() {
                if (profileDropdown && !profileDropdown.classList.contains('hidden')) {
                    profileDropdown.classList.add('hidden');
                }
            }
            btnHamburger.addEventListener('click', (e) => {
                e.stopPropagation();
                openDrawer(mobilePanel);
            });

            btnProfile.addEventListener('click', (e) => {
                e.stopPropagation();
                console.log(e)
                toggleProfileDropdown();
            });

            // Global Click Handler
            window.addEventListener('click', (e) => {
                // Close drawers if overlay clicked
                // if (e.target === overlay) closeAllDrawers(true);

                // Close profile if clicked outside container
                if (!profileContainer.contains(e.target)) {
                    closeProfileDropdown();
                }
            });

            // Close buttons inside drawers
            // closeButtons.forEach(btn => btn.addEventListener('click', () => closeAllDrawers(true)));

            // Escape Key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    // closeAllDrawers(true);
                    closeProfileDropdown();
                }
            });
        });
    </script>
@endpush
