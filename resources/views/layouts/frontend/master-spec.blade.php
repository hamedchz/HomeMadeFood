<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ in_array(app()->getLocale(), config('locales.rtl')) ? 'rtl' : 'ltr' }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ trans($title) }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @if (in_array(app()->getLocale(), config('locales.rtl')))
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <link rel="preload" as="style" href="{{ asset('frontend/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const persianDigits = '۰۱۲۳۴۵۶۷۸۹';
                const toPersianDigits = str => str.replace(/\d/g, d => persianDigits[d]);

                // Convert a text node
                function convertTextNode(node) {
                    if (!node || node.nodeType !== 3) return;
                    if (!/\d/.test(node.nodeValue)) return;
                    node.nodeValue = toPersianDigits(node.nodeValue);
                }

                // Convert all text nodes in an element (default: document)
                function convertNumbers(root = document) {
                    const walker = document.createTreeWalker(
                        root,
                        NodeFilter.SHOW_TEXT, {
                            acceptNode(node) {
                                const p = node.parentNode;
                                if (!p) return NodeFilter.FILTER_REJECT;
                                const tag = p.nodeName.toLowerCase();
                                if (['script', 'style', 'textarea', 'input', 'code', 'pre'].includes(tag))
                                    return NodeFilter.FILTER_REJECT;
                                if (p.isContentEditable) return NodeFilter.FILTER_REJECT;
                                if (!/\d/.test(node.nodeValue)) return NodeFilter.FILTER_REJECT;
                                return NodeFilter.FILTER_ACCEPT;
                            }
                        },
                        false
                    );

                    let n;
                    while ((n = walker.nextNode())) convertTextNode(n);
                }

                // Run conversion instantly using requestAnimationFrame (no delay)
                function convertInstant(root) {
                    requestAnimationFrame(() => convertNumbers(root || document));
                }

                // --- Initial conversion
                convertNumbers();

                // --- Livewire hooks (instant update after Livewire renders)
                function setupLivewireHooks() {
                    if (!window.Livewire) return false;

                    try {
                        Livewire.hook && Livewire.hook('message.processed', (message, component) => {
                            const root = component?.el || document;
                            convertInstant(root);
                        });

                        Livewire.hook && Livewire.hook('morph.updated', payload => {
                            const root = payload?.el || payload;
                            convertInstant(root);
                        });

                        Livewire.hook && Livewire.hook('morph.added', payload => {
                            const root = payload?.el || payload;
                            convertInstant(root);
                        });

                        document.addEventListener('livewire:update', () => convertInstant());
                        document.addEventListener('livewire:load', () => convertInstant());

                        return true;
                    } catch (err) {
                        console.warn('Livewire hooks setup failed:', err);
                        return false;
                    }
                }

                const livewireOk = setupLivewireHooks();

                // --- MutationObserver fallback (for extra reliability)
                const observer = new MutationObserver(mutations => {
                    let shouldRun = false;
                    let rootToConvert = null;

                    for (const m of mutations) {
                        if (m.type === 'childList' && m.addedNodes.length) {
                            shouldRun = true;
                            rootToConvert = rootToConvert || m.target;
                        } else if (m.type === 'characterData') {
                            shouldRun = true;
                            rootToConvert = rootToConvert || m.target.parentNode;
                        } else if (m.type === 'attributes' && m.attributeName === 'class') {
                            shouldRun = true;
                            rootToConvert = rootToConvert || m.target;
                        }
                    }

                    if (shouldRun) convertInstant(rootToConvert || document);
                });

                observer.observe(document.body, {
                    childList: true,
                    subtree: true,
                    characterData: true,
                    attributes: true,
                    attributeFilter: ['class', 'style']
                });

                // --- Cleanup
                window.addEventListener('beforeunload', () => observer.disconnect());
            });
        </script>
    @else
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <link rel="preload" as="style" href="{{ asset('frontend/assets/css/style-ltr.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style-ltr.css') }}" />
    @endif

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- toast --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .swal2-title-custom {
            font-size: 16px !important;
            /* change to your desired size */
        }
    </style>
    @stack('custom-styles')

</head>

<body class="font-sans antialiased text-dark-600 ">

    {{-- <div class="loading-spinner bg-transparent hidden " wire:loading.class="block loading-animate"
        wire:loading.class.remove="hidden">
        <div class="spinner-beat-container flex justify-center items-center h-full">
            <div class="loading-container ">
                <div class=" bg-white shadow flex px-3 py-2 items-center">
                    <span class="text-dark mx-2">{{ trans('Please Wait') }}</span>
                    <div class="spinner-border text-blue-500 spinner-border-sm" role="status">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <x-frontend.header /> --}}

    @if (isset($slot))
        {{ $slot }}
    @else
        @yield('body')
    @endif



    <!-- Footer -->
    {{-- <x-frontend.footer /> --}}

    {{-- sweet alert --}}
    <script src="/admin/assets/sweet-alert/sweet.js"></script>
    <script src="/frontend/assets/js/jquery-3-7-1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/frontend/assets/js/header.js"></script>
    <script src="/frontend/assets/js/tabs.js"></script>
    <script src="/frontend/assets/js/myswiper.js"></script>
    {{-- toast --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <x-frontend.sticky-toastr />
    @if (session()->has('message'))
        <script>
            const icon = "{{ session('tag') }}";
            const content = "{{ session('message') }}";

            const Toast = Swal.mixin({
                toast: @json(session('swal_toast', true)),
                position: @json(session('swal_position', 'top-end')),
                showConfirmButton: @json(session('swal_showConfirmButton', false)),
                confirmButtonText: @json(session('swal_confirmButtonText', trans('Got it'))),
                timer: @json(session('swal_timer', 3000)),
                timerProgressBar: @json(session('swal_timerProgressBar', true)),
            });

            Toast.fire({
                icon: icon,
                title: content,
                customClass: {
                    title: 'swal2-title-custom' // custom font size for toast title
                }
            });
        </script>
    @endif

    @stack('custom-scripts')


</body>

</html>
