@props([
    'active' => '',
    'wrapperClass' => '',
    'navWidth' => 'xl:w-9/12',
])

@php
    $serviceSlugs = ['services', 'apostille', 'mobile-notary', 'legalservice', 'document-notarization'];
    $servicesActive = in_array($active, $serviceSlugs, true);

    $navLink = function (string $page) use ($active): string {
        $base = 'leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm md:mt-0 hover:animate-bounce';
        $tone = $active === $page ? 'textED9393 font-semibold' : 'text-gray-900';

        return "{$base} {$tone}";
    };

    $subLink = function (string $page) use ($active): string {
        $base = 'block px-4 py-2 text-sm hover:bg-gray-50 hover:text-litePink';
        $tone = $active === $page ? 'textED9393 font-semibold' : 'text-gray-900';

        return "{$base} {$tone}";
    };
@endphp

<div {{ $attributes->merge(['class' => $wrapperClass]) }}>
    <x-logo></x-logo>
    <div class="w-11/12 mx-auto py-2 mt-4 bgFFFDFD shadow-lg rounded-lg">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false, servicesOpen: false, servicesMobileOpen: false }"
                class="flex flex-col {{ $navWidth }} px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-end">
                    <button type="button" class="md:hidden rounded-lg focus:outline-none focus:shadow-outline p-2"
                        aria-label="Toggle navigation menu" :aria-expanded="open" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6" aria-hidden="true">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="w-full md:w-7/12 mx-auto flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-between md:flex-row md:items-center md:flex-wrap">
                    <a class="{{ $navLink('home') }}" href="/">Home</a>

                    <div class="relative md:mt-0 mt-2"
                        @mouseenter="servicesOpen = true"
                        @mouseleave="servicesOpen = false">
                        <button type="button"
                            class="{{ $servicesActive ? 'textED9393 font-semibold' : 'text-gray-900' }} leading-6 tracking-wider hover:text-litePink px-4 py-2 text-sm md:mt-0 hover:animate-bounce inline-flex items-center gap-1 w-full md:w-auto text-left"
                            :aria-expanded="servicesOpen || servicesMobileOpen"
                            @click="servicesMobileOpen = !servicesMobileOpen">
                            Services
                            <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': servicesMobileOpen }"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="servicesOpen"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="hidden md:block absolute left-0 top-full z-50 mt-1 min-w-[15rem] rounded-lg border border-gray-100 bg-white py-1 shadow-lg"
                            @click.outside="servicesOpen = false">
                            <a class="{{ $subLink('services') }}" href="/services">All Services</a>
                            <a class="{{ $subLink('mobile-notary') }}" href="/mobile-notary">Mobile Notary</a>
                            <a class="{{ $subLink('apostille') }}" href="/apostille-service">Apostille Services</a>
                            <a class="{{ $subLink('document-notarization') }}" href="/document-notarization">Document
                                Notarization</a>
                            <a class="{{ $subLink('legalservice') }}" href="/legalservice">Legal Services</a>
                        </div>

                        <div x-show="servicesMobileOpen" x-cloak class="md:hidden pl-2 border-l-2 border-gray-100 ml-4">
                            <a class="{{ $subLink('services') }}" href="/services">All Services</a>
                            <a class="{{ $subLink('mobile-notary') }}" href="/mobile-notary">Mobile Notary</a>
                            <a class="{{ $subLink('apostille') }}" href="/apostille-service">Apostille Services</a>
                            <a class="{{ $subLink('document-notarization') }}" href="/document-notarization">Document
                                Notarization</a>
                            <a class="{{ $subLink('legalservice') }}" href="/legalservice">Legal Services</a>
                        </div>
                    </div>

                    <a class="{{ $navLink('review') }}" href="/review">Reviews</a>
                    <a class="{{ $navLink('blog') }}" href="/blog">Blog</a>
                    <a class="{{ $navLink('faq') }}" href="/faq">FAQ</a>
                    <a class="{{ $navLink('contact') }}" href="/contactUs">Contact Us</a>
                    <a class="{{ $navLink('subscribe') }}" href="/subscribe">Subscribe</a>
                </nav>
            </div>
        </div>
    </div>
</div>
