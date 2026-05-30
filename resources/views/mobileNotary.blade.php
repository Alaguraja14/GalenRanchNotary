<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>24/7 Mobile Notary Services San Ramon | Gale Ranch Notary</title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel="canonical" href="https://www.galeranchnotary.com/mobile-notary" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="24/7 Mobile Notary Services | San Ramon, CA">
    <meta property="og:description"
        content="24/7 mobile notary in San Ramon &amp; Tri-Valley. Same-day loan signing, power of attorney, immigration &amp; business documents. We travel to you.">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/thumbnail.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/mobile-notary">
    <meta name="description"
        content="24/7 mobile notary in San Ramon, Dublin, Pleasanton &amp; Tri-Valley. Same-day loan signing, power of attorney, immigration &amp; business documents. We travel to you — book today.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="24/7 Mobile Notary Services | San Ramon, CA">
    <meta name="twitter:description"
        content="Certified mobile notary serving San Ramon and Tri-Valley. Same-day appointments, loan signing, POA, and immigration documents.">
    <meta name="twitter:image" content="https://www.galeranchnotary.com/images/thumbnail.png">
    <meta name="geo.region" content="US-CA">
    <meta name="geo.placename" content="San Ramon">
    @php
        $mobileNotarySchema = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'WebPage',
                    '@id' => 'https://www.galeranchnotary.com/mobile-notary#webpage',
                    'url' => 'https://www.galeranchnotary.com/mobile-notary',
                    'name' => '24/7 Mobile Notary Services San Ramon | Gale Ranch Notary',
                    'description' => 'Certified mobile notary in San Ramon and Tri-Valley. Same-day service for loan documents, power of attorney, real estate, business, and immigration documents.',
                    'isPartOf' => ['@id' => 'https://www.galeranchnotary.com/#website'],
                    'about' => ['@id' => 'https://www.galeranchnotary.com/#business'],
                    'inLanguage' => 'en-US',
                ],
                [
                    '@type' => 'BreadcrumbList',
                    'itemListElement' => [
                        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://www.galeranchnotary.com/'],
                        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Mobile Notary Services', 'item' => 'https://www.galeranchnotary.com/mobile-notary'],
                    ],
                ],
                [
                    '@type' => 'Service',
                    'name' => 'Mobile Notary Services',
                    'description' => 'Certified mobile notary traveling to your home, office, or hospital in San Ramon, Dublin, Pleasanton, Danville, Walnut Creek, and Livermore.',
                    'provider' => ['@id' => 'https://www.galeranchnotary.com/#business'],
                    'areaServed' => ['San Ramon', 'Dublin', 'Pleasanton', 'Danville', 'Walnut Creek', 'Livermore'],
                    'serviceType' => 'Mobile Notary Public',
                ],
                [
                    '@type' => 'HowTo',
                    'name' => 'How to book mobile notary services in San Ramon',
                    'step' => [
                        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Book Appointment', 'text' => 'Schedule your preferred date and time.'],
                        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'We Come To You', 'text' => 'Our notary travels to your location.'],
                        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Documents Notarized', 'text' => 'Fast and professional notarization service.'],
                    ],
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        ['@type' => 'Question', 'name' => 'What documents can you notarize?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'We notarize power of attorney, loan documents, real estate documents, business documents, immigration documents, and more.']],
                        ['@type' => 'Question', 'name' => 'Do you offer mobile notary services?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes, we provide mobile notary services at your home, office, hospital, or any preferred location.']],
                        ['@type' => 'Question', 'name' => 'What areas do you serve?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'We serve San Ramon, Dublin, Pleasanton, Danville, Walnut Creek, and Livermore.']],
                        ['@type' => 'Question', 'name' => 'How much do your notary services cost?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Pricing depends on the type of document and travel requirements. Contact us for a quote.']],
                        ['@type' => 'Question', 'name' => 'Do I need to be present for notarization?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes, the signer must be physically present with valid identification.']],
                    ],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($mobileNotarySchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Martel' rel='stylesheet'>

    <script src="https://cdn.tailwindcss.com"></script>

    <!--Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7TGK99DB0N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7TGK99DB0N');
    </script>

    <style>
        body {
            font-family: 'Martel';
        }

        [x-cloak] {
            display: none !important;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 4px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #ED9393;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #ED9393;
        }

        .drop-container {
            position: relative;
            display: flex;
            gap: 10px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 200px;
            border-radius: 10px;
            border: 2px dashed #555;
            color: #444;
            cursor: pointer;
            transition: background .2s ease-in-out, border .2s ease-in-out;
        }

        .drop-container:hover {
            background: #eee;
            border-color: #111;
        }

        .drop-container:hover .drop-title {
            color: #222;
        }

        .drop-title {
            color: #444;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: color .2s ease-in-out;
        }

        input[type=file] {
            max-width: 100%;
            color: #444;
            padding: 5px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #555;
        }

        input[type=file]::file-selector-button {

            border: none;
            background: #084cdf;
            padding: 10px 20px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
            background: #0d45a5;
        }

        .mobile-notary-page {
            overflow-x: hidden;
        }

        .mobile-notary-section {
            width: 100%;
            max-width: 72rem;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        @media (min-width: 640px) {
            .mobile-notary-section {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        .touch-target {
            min-height: 2.75rem;
        }

        @media (max-width: 639px) {
            .mobile-notary-hero {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
        }
    </style>
</head>

<body class="antialiased mobile-notary-page">
    <div class="w-full backgroundGradient shadow-lg pb-20 rounded-b-3xl" role="banner">
        <x-site-header active="mobile-notary" nav-width="lg:w-8/12 md:w-10/12" />
    </div>
    <main id="main-content" class="lg:pb-20 -mt-10 sm:-mt-14">
        <header class="mobile-notary-hero w-full bg-litePink flex justify-center items-center py-20 sm:py-28 md:py-40 px-4 sm:px-6" aria-labelledby="mobile-notary-hero">
            <div class="max-w-4xl text-center">
                <h1 id="mobile-notary-hero" class="text-2xl sm:text-3xl md:text-5xl font-bold text-white leading-tight">Mobile Notary Services in San Ramon, CA</h1>
                <p class="text-base sm:text-xl md:text-2xl font-semibold text-white mt-4 sm:mt-6 leading-relaxed">We come to you — home, office, hospital, or any location. Same-day &amp; 24/7 availability.</p>
            </div>
        </header>

        <nav class="mobile-notary-section py-3 sm:py-4" aria-label="Breadcrumb">
            <ol class="flex flex-wrap items-center gap-1 text-xs sm:text-sm text-gray-600">
                <li><a href="/" class="hover:text-litePink">Home</a></li>
                <li aria-hidden="true" class="px-1">/</li>
                <li class="text-gray-900 font-medium" aria-current="page">Mobile Notary</li>
            </ol>
        </nav>

        <div class="mobile-notary-section pb-8 sm:pb-12">
            <p class="text-gray-700 text-sm sm:text-base md:text-lg leading-relaxed text-center max-w-3xl mx-auto">
                <strong>Gale Ranch Notary</strong> provides certified, insured mobile notary services throughout the Tri-Valley.
                We notarize loan documents, power of attorney, real estate and business paperwork, and immigration documents
                at your location in <strong>San Ramon</strong>, <strong>Dublin</strong>, <strong>Pleasanton</strong>, and surrounding cities.
            </p>
        </div>

        {{-- Why Choose Us --}}
        <section class="text-gray-600 body-font mobile-notary-section py-10 sm:py-16" aria-labelledby="why-choose-heading">
            <div class="text-center mb-8 sm:mb-12">
                <h2 id="why-choose-heading" class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">Why Choose Us</h2>
                <div class="flex justify-center">
                    <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6">
                <div class="text-center bg-white shadow-xl rounded-lg p-5 sm:p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                    <i class="fa-solid fa-bolt text-litePink text-2xl sm:text-3xl mb-3 sm:mb-4" aria-hidden="true"></i>
                    <h3 class="text-gray-900 text-sm sm:text-base font-semibold title-font">Same Day Service</h3>
                </div>
                <div class="text-center bg-white shadow-xl rounded-lg p-5 sm:p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                    <i class="fa-solid fa-shield-halved text-litePink text-2xl sm:text-3xl mb-3 sm:mb-4" aria-hidden="true"></i>
                    <h3 class="text-gray-900 text-sm sm:text-base font-semibold title-font">Certified &amp; Insured</h3>
                </div>
                <div class="text-center bg-white shadow-xl rounded-lg p-5 sm:p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                    <i class="fa-solid fa-car-side text-litePink text-2xl sm:text-3xl mb-3 sm:mb-4" aria-hidden="true"></i>
                    <h3 class="text-gray-900 text-sm sm:text-base font-semibold title-font">Mobile Service</h3>
                </div>
                <div class="text-center bg-white shadow-xl rounded-lg p-5 sm:p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                    <i class="fa-solid fa-clock text-litePink text-2xl sm:text-3xl mb-3 sm:mb-4" aria-hidden="true"></i>
                    <h3 class="text-gray-900 text-sm sm:text-base font-semibold title-font">Serving 24/7</h3>
                </div>
            </div>
        </section>

        {{-- Documents We Notarize --}}
        <section class="text-gray-600 body-font mobile-notary-section pb-10 sm:pb-16" aria-labelledby="documents-heading">
            <div class="text-center mb-8 sm:mb-12">
                <h2 id="documents-heading" class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">Documents We Notarize</h2>
                <div class="flex justify-center">
                    <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                </div>
            </div>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 list-none p-0 m-0">
                <li class="flex items-center gap-3 bg-white shadow-lg rounded-lg px-4 sm:px-6 py-4 min-h-[3.5rem]">
                    <i class="fa-solid fa-file-signature text-litePink text-lg sm:text-xl shrink-0" aria-hidden="true"></i>
                    <span class="text-gray-900 text-sm sm:text-base font-semibold">Power of Attorney</span>
                </li>
                <li class="flex items-center gap-3 bg-white shadow-lg rounded-lg px-4 sm:px-6 py-4 min-h-[3.5rem]">
                    <i class="fa-solid fa-house-chimney text-litePink text-lg sm:text-xl shrink-0" aria-hidden="true"></i>
                    <span class="text-gray-900 text-sm sm:text-base font-semibold">Loan Documents</span>
                </li>
                <li class="flex items-center gap-3 bg-white shadow-lg rounded-lg px-4 sm:px-6 py-4 min-h-[3.5rem]">
                    <i class="fa-solid fa-building text-litePink text-lg sm:text-xl shrink-0" aria-hidden="true"></i>
                    <span class="text-gray-900 text-sm sm:text-base font-semibold">Real Estate Documents</span>
                </li>
                <li class="flex items-center gap-3 bg-white shadow-lg rounded-lg px-4 sm:px-6 py-4 min-h-[3.5rem]">
                    <i class="fa-solid fa-briefcase text-litePink text-lg sm:text-xl shrink-0" aria-hidden="true"></i>
                    <span class="text-gray-900 text-sm sm:text-base font-semibold">Business Documents</span>
                </li>
                <li class="flex items-center gap-3 bg-white shadow-lg rounded-lg px-4 sm:px-6 py-4 min-h-[3.5rem] sm:col-span-2 lg:col-span-1">
                    <i class="fa-solid fa-passport text-litePink text-lg sm:text-xl shrink-0" aria-hidden="true"></i>
                    <span class="text-gray-900 text-sm sm:text-base font-semibold">Immigration Documents</span>
                </li>
            </ul>
        </section>

        {{-- Where We Travel --}}
        <section class="text-gray-600 body-font mobile-notary-section pb-10 sm:pb-16" aria-labelledby="areas-heading">
            <div class="text-center mb-8 sm:mb-12">
                <h2 id="areas-heading" class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">Where We Travel</h2>
                <div class="flex justify-center">
                    <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mt-4 max-w-2xl mx-auto">Mobile notary service areas in the East Bay and Tri-Valley</p>
            </div>
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3 sm:gap-4 list-none p-0 m-0 max-w-4xl mx-auto">
                <li class="bg-litePink text-white text-center text-xs sm:text-sm font-semibold px-3 sm:px-4 py-3 rounded-full shadow-md">San Ramon</li>
                <li class="bg-litePink text-white text-center text-xs sm:text-sm font-semibold px-3 sm:px-4 py-3 rounded-full shadow-md">Dublin</li>
                <li class="bg-litePink text-white text-center text-xs sm:text-sm font-semibold px-3 sm:px-4 py-3 rounded-full shadow-md">Pleasanton</li>
                <li class="bg-litePink text-white text-center text-xs sm:text-sm font-semibold px-3 sm:px-4 py-3 rounded-full shadow-md">Danville</li>
                <li class="bg-litePink text-white text-center text-xs sm:text-sm font-semibold px-3 sm:px-4 py-3 rounded-full shadow-md">Walnut Creek</li>
                <li class="bg-litePink text-white text-center text-xs sm:text-sm font-semibold px-3 sm:px-4 py-3 rounded-full shadow-md">Livermore</li>
            </ul>
        </section>

        {{-- How It Works --}}
        <section class="text-gray-600 body-font mobile-notary-section pb-10 sm:pb-16" aria-labelledby="how-it-works-heading">
            <div class="text-center shadow-xl w-full mx-auto rounded py-2.5 bgED9393 mb-8 sm:mb-12">
                <h2 id="how-it-works-heading" class="text-white text-lg sm:text-xl md:text-2xl font-bold tracking-wider px-2">How It Works</h2>
            </div>
            <ol class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 list-none p-0 m-0 max-w-5xl mx-auto">
                <li>
                    <article class="relative bg-white shadow-2xl rounded-xl p-6 sm:p-8 text-center h-full">
                        <span class="absolute -top-4 left-1/2 -translate-x-1/2 flex h-9 w-9 sm:h-10 sm:w-10 items-center justify-center rounded-full bgED9393 text-white font-bold text-base sm:text-lg" aria-hidden="true">1</span>
                        <i class="fa-solid fa-calendar-check text-litePink text-2xl sm:text-3xl mt-4 mb-3 sm:mb-4" aria-hidden="true"></i>
                        <h3 class="text-gray-900 text-base sm:text-lg font-semibold title-font mb-2">Book Appointment</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Schedule your preferred date and time.</p>
                        <a href="/contactUs" class="touch-target inline-flex items-center justify-center mt-4 text-litePink font-semibold text-sm hover:underline min-h-[44px]">Book now</a>
                    </article>
                </li>
                <li>
                    <article class="relative bg-white shadow-2xl rounded-xl p-6 sm:p-8 text-center h-full">
                        <span class="absolute -top-4 left-1/2 -translate-x-1/2 flex h-9 w-9 sm:h-10 sm:w-10 items-center justify-center rounded-full bgED9393 text-white font-bold text-base sm:text-lg" aria-hidden="true">2</span>
                        <i class="fa-solid fa-location-dot text-litePink text-2xl sm:text-3xl mt-4 mb-3 sm:mb-4" aria-hidden="true"></i>
                        <h3 class="text-gray-900 text-base sm:text-lg font-semibold title-font mb-2">We Come To You</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Our notary travels to your location.</p>
                    </article>
                </li>
                <li>
                    <article class="relative bg-white shadow-2xl rounded-xl p-6 sm:p-8 text-center h-full">
                        <span class="absolute -top-4 left-1/2 -translate-x-1/2 flex h-9 w-9 sm:h-10 sm:w-10 items-center justify-center rounded-full bgED9393 text-white font-bold text-base sm:text-lg" aria-hidden="true">3</span>
                        <i class="fa-solid fa-file-circle-check text-litePink text-2xl sm:text-3xl mt-4 mb-3 sm:mb-4" aria-hidden="true"></i>
                        <h3 class="text-gray-900 text-base sm:text-lg font-semibold title-font mb-2">Documents Notarized</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Fast and professional notarization service.</p>
                    </article>
                </li>
            </ol>
        </section>

        {{-- FAQ (visible + matches schema) --}}
        <section class="text-gray-600 body-font mobile-notary-section pb-10 sm:pb-16" aria-labelledby="faq-heading">
            <div class="text-center mb-8 sm:mb-10">
                <h2 id="faq-heading" class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">Frequently Asked Questions</h2>
                <div class="flex justify-center">
                    <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                </div>
            </div>
            <div class="max-w-3xl mx-auto w-full" x-data="{ selected: null }">
                <ul class="space-y-3 sm:space-y-4 list-none p-0 m-0">
                    @foreach ([
                        ['id' => 1, 'q' => 'What documents can you notarize?', 'a' => 'We notarize power of attorney, loan documents, real estate documents, business documents, immigration documents, and more.'],
                        ['id' => 2, 'q' => 'Do you offer mobile notary services?', 'a' => 'Yes, we provide mobile notary services at your home, office, hospital, or any preferred location.'],
                        ['id' => 3, 'q' => 'What areas do you serve?', 'a' => 'We serve San Ramon, Dublin, Pleasanton, Danville, Walnut Creek, and Livermore.'],
                        ['id' => 4, 'q' => 'How much do your notary services cost?', 'a' => 'Pricing depends on the type of document and travel requirements. Contact us for a quote.', 'link' => true],
                        ['id' => 5, 'q' => 'Do I need to be present for notarization?', 'a' => 'Yes, the signer must be physically present with valid identification.'],
                    ] as $faq)
                    <li class="bg-silver rounded-sm overflow-hidden">
                        <button type="button" class="touch-target w-full px-4 sm:px-6 py-4 text-left min-h-[48px]"
                            @click="selected !== {{ $faq['id'] }} ? selected = {{ $faq['id'] }} : selected = null"
                            :aria-expanded="selected === {{ $faq['id'] }}">
                            <div class="flex items-center justify-between gap-3 text-white">
                                <span class="text-sm sm:text-base font-medium text-left">{{ $faq['q'] }}</span>
                                <i class="fa-solid fa-angles-down text-sm sm:text-lg shrink-0" aria-hidden="true"></i>
                            </div>
                        </button>
                        <div class="overflow-hidden bg-white transition-all duration-500"
                            :class="selected === {{ $faq['id'] }} ? 'max-h-48 py-4 px-4 sm:px-6' : 'max-h-0'">
                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                                @if (!empty($faq['link']))
                                    Pricing depends on the type of document and travel requirements.
                                    <a href="/contactUs" class="text-litePink font-semibold hover:underline">Contact us</a> for a quote.
                                @else
                                    {{ $faq['a'] }}
                                @endif
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>

        {{-- CTA --}}
        <section class="mobile-notary-section pb-12 sm:pb-20" aria-labelledby="cta-heading">
            <div class="max-w-3xl mx-auto w-full text-center bg-litePink rounded-xl shadow-2xl py-8 sm:py-12 px-4 sm:px-6">
                <h2 id="cta-heading" class="text-white text-xl sm:text-2xl md:text-3xl font-bold mb-2">Need a Notary?</h2>
                <p class="text-white text-sm sm:text-base md:text-lg mb-6 sm:mb-8">We're here for you 24/7.</p>
                <div class="flex flex-col sm:flex-row sm:flex-wrap items-stretch sm:items-center justify-center gap-3 sm:gap-4 max-w-md sm:max-w-none mx-auto">
                    <a href="tel:+19253223131"
                        class="touch-target flex items-center justify-center gap-2 bg-white text-gray-900 font-semibold text-sm sm:text-base px-5 py-3 rounded-lg hover:bg-gray-100 transition w-full sm:w-auto min-h-[48px]">
                        <i class="fa-solid fa-phone text-litePink" aria-hidden="true"></i>
                        <span>Call: (925) 322 3131</span>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=19253223131&amp;text=Mobile+Notary+Inquiry&amp;type=phone_number&amp;app_absent=0"
                        target="_blank" rel="noopener noreferrer"
                        class="touch-target flex items-center justify-center gap-2 bg-green-600 text-white font-semibold text-sm sm:text-base px-5 py-3 rounded-lg hover:bg-green-700 transition w-full sm:w-auto min-h-[48px]">
                        <i class="fa-brands fa-whatsapp text-xl" aria-hidden="true"></i>
                        <span>WhatsApp Us</span>
                    </a>
                    <a href="/contactUs"
                        class="touch-target flex items-center justify-center bgED9393 text-white font-semibold text-sm sm:text-base px-5 py-3 rounded-lg hover:bg-teal-600 transition w-full sm:w-auto min-h-[48px]">
                        Book Appointment
                    </a>
                </div>
            </div>
        </section>

    </main>
    <x-schema-local-business />
    <x-footer></x-footer>

    <button x-cloak x-data="{ scroll: false }"
        @scroll.window="document.documentElement.scrollTop > 20 ? scroll = true : scroll = false" x-show="scroll"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})" type="button" data-mdb-ripple="true"
        data-mdb-ripple-color="light"
        class="fixed inline-block p-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-600 rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg bottom-5 right-5"
        id="btn-back-to-top" x-transition.opacity>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
        </svg>
    </button>
</body>

</html>
