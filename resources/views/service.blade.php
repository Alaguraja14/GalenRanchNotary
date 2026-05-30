<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Certified Mobile Notary Services | San Ramon</title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description"
        content="Professional mobile notarization for legal documents, power of attorney, loan signing, and estate paperwork.">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/thumbnail.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description"
        content="Professional mobile notarization for legal documents, power of attorney, loan signing, and estate paperwork.">

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
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">



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
    </style>
</head>

<body class="antialiased">
    <main class="w-full backgroundGradient shadow-lg pb-20 rounded-b-3xl">
        <x-site-header active="services" nav-width="lg:w-8/12 md:w-10/12" />
        <section class="w-11/12 mx-auto ">
            <div class="text-center shadow-xl w-11/12 mx-auto rounded py-2.5 bgED9393 my-4">
                <h1 class="text-white md:text-2xl text-xl font-bold tracking-wider">Services</h1>
            </div>

            <section class="w-11/12 max-w-6xl mx-auto py-8 sm:py-10" aria-labelledby="our-services-heading">
                <div class="text-center mb-8">
                    <h2 id="our-services-heading" class="sm:text-2xl text-xl font-semibold title-font text-gray-900 mb-2">
                        Our Services
                    </h2>
                    <div class="flex justify-center">
                        <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">
                    <a href="/mobile-notary"
                        class="group flex flex-col bg-white shadow-xl rounded-lg p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                        <i class="fa-solid fa-car-side text-litePink text-3xl mb-4" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-litePink mb-2">Mobile Notary</h3>
                        <p class="text-sm text-gray-600 leading-relaxed flex-grow">
                            24/7 mobile notary in San Ramon and Tri-Valley. Same-day loan signing, power of attorney,
                            and immigration documents — we travel to you.
                        </p>
                        <span class="mt-4 text-sm font-semibold textED9393 group-hover:text-litePink">Learn more &rarr;</span>
                    </a>
                    <a href="/apostille-service"
                        class="group flex flex-col bg-white shadow-xl rounded-lg p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                        <i class="fa-solid fa-stamp text-litePink text-3xl mb-4" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-litePink mb-2">Apostille Services</h3>
                        <p class="text-sm text-gray-600 leading-relaxed flex-grow">
                            Fast apostille for birth certificates, FBI background checks, power of attorney, and
                            international legal documents.
                        </p>
                        <span class="mt-4 text-sm font-semibold textED9393 group-hover:text-litePink">Learn more &rarr;</span>
                    </a>
                    <a href="/document-notarization"
                        class="group flex flex-col bg-white shadow-xl rounded-lg p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                        <i class="fa-solid fa-file-circle-check text-litePink text-3xl mb-4" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-litePink mb-2">Document Notarization</h3>
                        <p class="text-sm text-gray-600 leading-relaxed flex-grow">
                            Professional notarization for legal, business, medical, travel, and general affidavit
                            documents.
                        </p>
                        <span class="mt-4 text-sm font-semibold textED9393 group-hover:text-litePink">Learn more &rarr;</span>
                    </a>
                    <a href="/legalservice"
                        class="group flex flex-col bg-white shadow-xl rounded-lg p-6 hover:border-b-4 hover:border-litePink transition duration-300">
                        <i class="fa-solid fa-file-signature text-litePink text-3xl mb-4" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-litePink mb-2">Loan Signing Services</h3>
                        <p class="text-sm text-gray-600 leading-relaxed flex-grow">
                            Certified loan signing agent for real estate closings, lenders, escrow, and title companies
                            in San Ramon, CA.
                        </p>
                        <span class="mt-4 text-sm font-semibold textED9393 group-hover:text-litePink">Learn more &rarr;</span>
                    </a>
                </div>
            </section>

            <section class="text-gray-600 body-font">
                <div class="w-11/12 px-5 py-10 mx-auto">
                    <div class="text-center mb-20">
                        <h1 class="sm:text-2xl text-xl font-semibold title-font text-gray-900 mb-2">Legal Documentation
                            Services for
                        </h1>
                        <div class="flex mb-2 justify-center">
                            <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                        </div>
                        <p
                            class="md:text-lg font-semibold leading-relaxed xl:w-3/4 lg:w-3/4 mx-auto text-gray-900s mb-2">
                            Introducing Legal Services by Gale Ranch Notary And Apostille.</p>
                        <p
                            class="md:text-lg font-semibold leading-relaxed xl:w-3/4 lg:w-3/4 mx-auto text-gray-900s mb-2">
                            ONE-STOP-SHOP FOR ALL YOUR DOCUMENTATION SERVICES EITHER NEW | EXTENSION – INDIAN | USA |
                            CANADA
                            PASSPORTS;</p>
                        <p
                            class="md:text-lg font-semibold leading-relaxed xl:w-3/4 lg:w-3/4 mx-auto text-gray-900s mb-2">
                            VISITORS
                            VISA; OCI; GREEN CARD</p>
                        <p
                            class="md:text-lg font-semibold leading-relaxed xl:w-3/4 lg:w-3/4 mx-auto text-gray-900s mb-5">
                            GREEN CARD;
                            CITIZENSHIP – 2 BUSINESS DAYS TURN-AROUND</p>
                        <p
                            class="md:text-lg font-semibold leading-relaxed xl:w-3/4 lg:w-3/4 mx-auto text-gray-900s mb-2">
                            I am Immigration Consultant, and can validate I-9 - Employment Eligibility Verification on
                            behalf of employer.</p>

                    </div>
                </div>
            </section>
    </main>

    <section class="text-gray-600 body-font -mt-40 mb-10">
        <div class="md:w-8/12 w-11/12 px-5 py-14 mx-auto bg-white shadow-2xl">
            <div class=" lg:w-3/4 w-full mx-auto text-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="inline-block w-8 h-8 textED9393 mb-8" viewBox="0 0 975.036 975.036">
                    <path
                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm font-semibold">Lead Time to process OCI is
                    taking a longer time than
                    anticipated. </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm font-semibold">Save your documentation /
                    filing time, </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">You may get in touch with
                    Mr. Govind – Gale Ranch
                    Notary<span class="text-green-500"><a
                            href="https://api.whatsapp.com/send/?phone=19253223131&text=Documentation+Inquiry.+.&type=phone_number&app_absent=0"
                            target="_blank">
                            ‘Whatsapp’</a></span> </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-6 font-semibold">(a) Indian Passport – New
                    | Renewal | Expired |
                    Renunciate. </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">(b) OCI – New | Renewal |
                    Expired </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">(c) Green Card – New |
                    Renewal. </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">(d) Tourist Visa
                    Extension [I539] for
                    Parents/In-Laws
                    including applying for Canada Visa. </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">(e) Tourist Visa for your
                    Parents | In-Laws |
                    Dependents. </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">(f) Citizenship. </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">(g) Review the documents
                    prepared by you when you
                    want
                    to renew your USA | Indian | Canada passport; </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">OCI | Green Card renewal
                </p>
                <p class="leading-relaxed md:text-lg sm:text-base text-sm mt-4 font-semibold">Apply for Indian eVisa or
                    Visitors Visa for parents
                    |
                    siblings at a very nominal price</p>
            </div>
        </div>
    </section>

    <section class="py-10" id="subscribe">
        <div class="md:w-8/12 w-11/12 mx-auto flex md:flex-row flex-col shadow-xl rounded-lg">
            <div
                class="md:w-1/2 rounded-l-lg  py-10 text-white text-left bg-litePink flex flex-col items-start md:px-10 px-5 justify-center">
                <h1 class="md:text-2xl text-xl font-semibold mb-2">
                    Subscribe:
                </h1>
                <p class="md:text-lg">
                    To receive Bay Area Events, Finance and Notary Info, Discount/FREE offers</p>
            </div>
            <div
                class="md:w-1/2 rounded-r-lg  py-10 text-white text-left border-b-8 border-litePink flex flex-col items-center md:px-10 px-5 justify-center">
                <a href="/subscribe"
                    class="bg-litePink hover:bg-blue-700 px-3  text-center py-2.5 rounded text-white m-5 show-modal">Hit
                    to
                    view subscription Form</a>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
    <script>
        $(document).ready(function() {
            $("body").show();
        });
    </script>
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
