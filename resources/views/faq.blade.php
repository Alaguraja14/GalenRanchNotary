<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Frequently Asked Questions – FAQ | Gale Ranch Notary
    </title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description"
        content="Expert answers to FAQs on Apostille, Trusts, Immigration & Financial Services. 
    Get informed today!">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/Banner.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description"
        content="Expert answers to FAQs on Apostille, Trusts, Immigration & Financial Services. 
        Get informed today!">

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
        function gtag(){dataLayer.push(arguments);}
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
    <main class="w-full backgroundGradient shadow-lg pb-20">
        <x-logo></x-logo>
        <div class="w-11/12 mx-auto py-2 mt-4 bgFFFDFD shadow-lg rounded-lg">
            <div class="w-full text-gray-700 bg-white">
                <div x-data="{ open: false }"
                    class="flex flex-col lg:w-8/12 md:w-10/12 px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="p-4 flex flex-row items-center justify-end">
                        <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                            @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
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
                        class="w-7/12 mx-auto flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-between md:flex-row">
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/">Home</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/services">Services</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/review">Reviews</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/blog">Blog</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm textED9393 font-semibold md:mt-0"
                            href="/faq">FAQ</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/apostille-service">Apostille Services</a>
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0 hover:animate-bounce"
                            href="/contactUs">Contact Us</a>
                    </nav>
                </div>
            </div>

        </div>
        <section class="w-11/12 mx-auto ">
            <div class="text-center shadow-xl w-11/12 mx-auto rounded py-2.5 bgED9393 my-4">
                <h1 class="text-white md:text-2xl text-xl font-bold tracking-wider">FAQ</h1>
            </div>
            <section class="text-gray-600 body-font">
                <div class="md:w-3/4 px-5 py-24 mx-auto">
                    <div class="h-full w-full flex justify-center -mt-10">
                        <div class="w-full mx-auto border-gray-200" x-data="{ selected: null }">
                            <ul class="shadow-box">
                                <li class=" bg-silver py-2 border-gray-200 mb-5 rounded-sm">
                                    <button type="button" class="w-full px-8 py-2 text-left"
                                        @click="selected !== 1 ? selected = 1 : selected = null">
                                        <div class="flex items-center justify-between text-white">
                                            <span class="md:text-lg text-sm font-medium">
                                                1) Estate Planning – Will/Trust/Advance Health-Care Directive
                                                Notarization</span>
                                            <i class="fa-solid fa-angles-down md:text-2xl text-sm"></i>
                                        </div>
                                    </button>

                                    <div class=" overflow-hidden bg-white transition-all max-h-0 duration-700"
                                        style="" x-ref="container1"
                                        x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                        <div class="px-5 py-4">
                                            <div
                                                class=" shadow-2xl px-4 py-10 rounded-xl flex flex-col md:items-start md:text-left items-center text-center">
                                                <h1 class="title-font md:text-xl mb-4 font-medium text-gray-900">
                                                    Gale Ranch Notary Coordinates with the Bay Area based Attorney and
                                                    does
                                                    Notary Sign. The Estate Plan forms are:
                                                </h1>
                                                <div class="flex mb-4 justify-center">
                                                    <div class="w-16 h-0.5 rounded-full bg-litePink inline-flex"></div>
                                                </div>
                                                <div
                                                    class=" md:text-base text-sm leading-relaxed text-justify md:px-10 px-5">
                                                    <ol class="list-disc">
                                                        <li>The Revocable Trust</li>
                                                        <li>Pour-over Wills (one for each spouse)</li>
                                                        <li>Medical Power of Attorney (one for each spouse)</li>
                                                        <li>Assignment of Personal Property to the trust</li>
                                                        <li>Deeds. One deed is included in the price but additional
                                                            properties cost extra.</li>
                                                    </ol>
                                                    <p class="mt-4">This includes lookup of the chain of title,
                                                        preparation of the deed, the Preliminary Change of Owner Form,
                                                        and I
                                                        record it with the County.</p>
                                                    <ol class="list-disc py-2">
                                                        <li>Guardianship Nomination and Information – if applicable for
                                                            minor children.</li>
                                                        <li>Certificate of Trust.</li>
                                                    </ol>
                                                    <p class="py-2 font-semibold">Please note Gale Ranch Notary does
                                                        not
                                                        provide Attorney Services but refer to the right Attorney to
                                                        protect
                                                        your family and assets. After the attorney completes the above
                                                        paper
                                                        work, Gale Ranch Notary does the notarization.</p>
                                                    <p class="py-2">Contact Gale Ranch Notary for Estate Planning –
                                                        Wills/Trust/Health-Care directive references to Cost-Effective
                                                        Bay
                                                        Area Attorney.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="relative  bg-liteGrey py-2 border-gray-200 mb-5 rounded-sm">
                                    <button type="button" class="w-full px-8 py-2 text-left"
                                        @click="selected !== 2 ? selected = 2 : selected = null">
                                        <div class="flex items-center justify-between text-white">
                                            <span class="md:text-lg text-sm font-medium">
                                                2) What are the Valid form of ID in California?</span>
                                            <i class="fa-solid fa-angles-down text-2xl"></i>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700"
                                        style="" x-ref="container2"
                                        x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                        <div class="px-5 py-4">
                                            <div
                                                class=" shadow-2xl px-4 py-10 rounded-xl flex flex-col md:items-start md:text-left items-center text-center">

                                                <div
                                                    class=" md:text-base text-sm leading-relaxed text-justify md:px-10 px-5">
                                                    <ol class="list-disc">
                                                        <li>A California driver’s license or nondriver’s ID</li>
                                                        <li>A U.S. passport (or passport card)</li>
                                                        <li>An inmate identification card issued by the California
                                                            Department of Corrections and Rehabilitation if the inmate
                                                            is in
                                                            prison or any form of inmate identification issued by a
                                                            sheriff’s department if the inmate is in custody in a local
                                                            detention facility</li>
                                                        <li>A driver’s license or official nondriver’s ID issued by a
                                                            U.S.
                                                            state<span class="textED9393 font-bold"> *</span></li>
                                                        <li>A Canadian or Mexican driver’s license issued by an
                                                            appropriate
                                                            public agency<span class="textED9393 font-bold"> *</span>
                                                        </li>
                                                        <li>A U.S. military ID<span class="textED9393 font-bold">
                                                                *</span>
                                                        </li>
                                                        <li>A valid foreign passport from the applicant’s country of
                                                            citizenship<span class="textED9393 font-bold"> *</span>
                                                        </li>
                                                        <li>An employee ID issued by an agency or office of the state of
                                                            California or a California city, county, or city and
                                                            county<span class="textED9393 font-bold"> *</span></li>
                                                        <li>An identification card issued by a federally-recognized
                                                            tribal
                                                            government<span class="textED9393 font-bold"> *</span></li>
                                                        <li>A valid consular identification document issued by a
                                                            consulate
                                                            from the applicant’s country of citizenship that meets
                                                            specific
                                                            requirements (see #3 below)<span
                                                                class="textED9393 font-bold">
                                                                *</span></li>
                                                        <li>The oath or affirmation of one credible witness personally
                                                            known
                                                            to the Notary and identified through statutorily prescribed
                                                            ID
                                                            cards or the oath or affirmation of two credible witnesses
                                                            not
                                                            personally known to the Notary and identified through
                                                            statutorily prescribed ID cards All of the identification
                                                            documents listed above must be current or issued within the
                                                            past
                                                            5 years in order to be accepted by California Notaries.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="relative bg-silver py-2 border-gray-200 mb-5 rounded-sm">
                                    <button type="button" class="w-full px-8 py-2 text-left"
                                        @click="selected !== 3 ? selected = 3 : selected = null">
                                        <div class="flex items-center justify-between text-white">
                                            <span class="md:text-lg text-sm font-medium">
                                                3) What is Apostille?</span>
                                            <i class="fa-solid fa-angles-down text-2xl"></i>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700 "
                                        style="" x-ref="container3"
                                        x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                        <div class="px-5 py-4">
                                            <div
                                                class="py-10 rounded-xl flex flex-col md:items-start md:text-left items-center text-center md:px-10 px-5">
                                                <div class="text-base leading-relaxed text-justify">
                                                    <h1
                                                        class="title-font md:text-base text-sm px-5 mb-4 font-semibold text-gray-900">
                                                        An “apostille” is a form of authentication issued to documents
                                                        for
                                                        use in countries that participate in the Hague Convention of
                                                        1961.
                                                        An Apostille is a specialized certificate of authentication that
                                                        provides a uniform method of validating documents to be used in
                                                        foreign countries.
                                                    </h1>
                                                    <h1
                                                        class="title-font md:text-base text-sm px-5 mb-4 font-semibold text-gray-900">
                                                        Apostille to India: India is a member of the Hague Apostille
                                                        Convention and any official document destined for this country
                                                        requires an Apostille from the Secretary of State. India joined
                                                        the
                                                        Hague Apostille Convention on July 14, 2005.
                                                    </h1>
                                                    <h1
                                                        class="title-font md:text-base text-sm px-5 mb-4 font-semibold text-gray-900">
                                                        Common Documents Apostille requests are:
                                                    </h1>
                                                    <section class="text-gray-600 body-font">
                                                        <div class="container px-5 py-4 mx-auto">
                                                            <div
                                                                class="flex flex-wrap lg:w-5/5 sm:mx-auto sm:mb-2 -mx-2">

                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">
                                                                            Birth Certificates</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Marriage
                                                                            Certificates</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Death
                                                                            Certificates</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Divorce
                                                                            Decree</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Single
                                                                            Status Affidavit</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Background
                                                                            Checks (Local, State, FBI)</span>
                                                                    </div>
                                                                </div>


                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">FBI
                                                                            Apostille for India</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Copy
                                                                            of Passport</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Copy
                                                                            of Driver License</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Transcripts</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Diplomas</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Authorization
                                                                            Letter</span>
                                                                    </div>
                                                                </div>

                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Travel
                                                                            Consent Letter</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Articles
                                                                            of Incorporation</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Certificate
                                                                            of Good Standing</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Certification
                                                                            of Free Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Certification
                                                                            of Origin</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Corporate
                                                                            Power of Attorney</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Commercial
                                                                            Invoice</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <h1
                                                        class="title-font md:text-base text-sm px-5 mb-4 font-semibold text-gray-900">
                                                        Here is 3-steps process to send Power of attorney to India:
                                                    </h1>


                                                    <div class="px-5 py-5 mx-auto flex flex-wrap">
                                                        <div
                                                            class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                                                            <div
                                                                class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                                                <div
                                                                    class="h-full w-1 bg-gray-200 pointer-events-none">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bgED9393 text-white relative z-10 title-font font-medium text-sm">
                                                                1</div>
                                                            <div
                                                                class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                                                                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                                                    <p class="leading-relaxed">Notarize documents by an
                                                                        experienced Notary. Gale Ranch Notary does this.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                                                            <div
                                                                class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                                                <div
                                                                    class="h-full w-1 bg-gray-200 pointer-events-none">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bgED9393 text-white relative z-10 title-font font-medium text-sm">
                                                                2</div>
                                                            <div
                                                                class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                                                                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">

                                                                    <p class="leading-relaxed">Get the apostille done
                                                                        from
                                                                        Secretary of State, Sacramento. Gale Ranch
                                                                        notary
                                                                        does this service too from the Secretary of
                                                                        State.
                                                                        3-5 Business days lead time due to Covid.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                                                            <div
                                                                class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                                                <div
                                                                    class="h-full w-1 bg-gray-200 pointer-events-none">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bgED9393 text-white relative z-10 title-font font-medium text-sm">
                                                                3</div>
                                                            <div
                                                                class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                                                                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">

                                                                    <p class="leading-relaxed">Get Consulate sign from
                                                                        Indian embassy. 10-15 Days Mail services due to
                                                                        Covid. No In-person/walk-ins as of June 2021.
                                                                        Gale
                                                                        Ranch notary does this service.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <h1
                                                        class="title-font md:text-base text-sm px-5 mb-4 font-semibold text-gray-900">
                                                        Why is step-3 optional?
                                                    </h1>

                                                    <a href="https://www.cgisf.gov.in/page/power-of-attorney-affidavits-relating-to-property-or-financial-matters/"
                                                        class="text-blue-500 md:text-base text-sm px-5 font-semibold"><cite>https://www.cgisf.gov.in/page/power-of-attorney-affidavits-relating-to-property-or-financial-matters/</cite></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="relative bg-liteGrey py-2 border-gray-200 mb-5 rounded-sm">
                                    <button type="button" class="w-full px-8 py-2 text-left"
                                        @click="selected !== 4 ? selected = 4 : selected = null">
                                        <div class="flex items-center justify-between text-white">
                                            <span class="md:text-lg text-sm font-medium">
                                                4) Do we offer Mobile Notary Services?</span>
                                            <i class="fa-solid fa-angles-down text-2xl"></i>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700"
                                        style="" x-ref="container4"
                                        x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                        <div class="px-5 py-4">
                                            <div
                                                class=" shadow-2xl px-4 py-10 rounded-xl flex flex-col md:items-start md:text-left items-center text-center">

                                                <div
                                                    class=" md:text-base text-sm leading-relaxed text-justify md:px-10 px-5">
                                                    <h1
                                                        class="title-font md:text-base text-sm mb-4 font-semibold text-gray-900">
                                                        Yes – We are Traveling Notaries & Apostille Services in
                                                        Tri-Valley
                                                        Bay Area. Gale Ranch Notary is Full-TIme Notary and works around
                                                        your schedule. We travel to your location, ie; Home, Office,
                                                        Hospital, Nursing / Assisted living Center, Retirement Home and
                                                        even
                                                        at the local coffee shop. We are available to notarize your
                                                        documents on call 24 x 7. Call (925) 322 3131 to schedule a
                                                        Mobile
                                                        Notary or Apostille now.
                                                    </h1>
                                                    <ol class="list-disc px-5">
                                                        <li>Our Travel Fee is very reasonable.</li>
                                                        <li>Proudly Serving</li>
                                                        <li>Walnut Creek</li>
                                                        <li>San Ramon, Dublin, Pleasanton</li>
                                                        <li>Concord, Pittsburgh</li>
                                                        <li>Alamo, Danville</li>
                                                        <li>Livermore, Pleasant Hill & more</li>
                                                        <li>MOBILE ALL East BAY AREA (Tri-Valley)</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="relative bg-silver py-2 border-gray-200 mb-5 rounded-sm">
                                    <button type="button" class="w-full px-8 py-2 text-left"
                                        @click="selected !== 5 ? selected = 5 : selected = null">
                                        <div class="flex items-center justify-between text-white">
                                            <span class="md:text-lg text-sm font-medium">
                                                5) Does Gale Ranch Notary offer Notary Signing Guarantee?</span>
                                            <i class="fa-solid fa-angles-down text-2xl"></i>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700"
                                        style="" x-ref="container5"
                                        x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                                        <div class="px-5 py-4">
                                            <div
                                                class=" shadow-2xl px-4 py-10 rounded-xl flex flex-col md:items-start md:text-left items-center text-center">
                                                <div
                                                    class=" md:text-base text-sm leading-relaxed text-justify md:px-10 px-5">
                                                    <h1
                                                        class="title-font md:text-base text-sm mb-4 font-semibold text-gray-900">
                                                        Gale Ranch Notary is careful in the work we do and back up our
                                                        work
                                                        with a guarantee if something was left out.
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="relative bg-liteGrey  py-2 border-gray-200 mb-5 rounded-sm rounded-b-lg">
                                    <button type="button" class="w-full px-8 py-2 text-left"
                                        @click="selected !== 6 ? selected = 6 : selected = null">
                                        <div class="flex items-center justify-between text-white">
                                            <span class="md:text-lg text-sm font-medium">
                                                6) Why Mobile Notary Services?</span>
                                            <i class="fa-solid fa-angles-down text-2xl"></i>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700"
                                        style="" x-ref="container6"
                                        x-bind:style="selected == 6 ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
                                        <div class="px-5 py-4">
                                            <div
                                                class=" shadow-2xl px-4 py-10 rounded-xl flex flex-col md:items-start md:text-left items-center text-center">
                                                <div
                                                    class=" md:text-base text-sm leading-relaxed text-justify md:px-10 px-5">
                                                    <h1
                                                        class="title-font md:text-base text-sm mb-4 font-normal text-gray-900">
                                                        Fraud can be widespread when executing legal documents. But now,
                                                        you
                                                        can prevent fraud and make sure paperwork is signed correctly
                                                        when
                                                        you have a notary public present at the time of signing!
                                                    </h1>
                                                    <h1
                                                        class="title-font md:text-base text-sm mb-4 font-normal text-gray-900">
                                                        The notary public will require signatories to prove their
                                                        identities
                                                        and check the documents for certain details, and ensure that all
                                                        parties involved aren’t signing due to threats or intimidation,
                                                        ensuring a smooth, easy, perfectly legal process.
                                                    </h1>
                                                    <h1
                                                        class="title-font md:text-base text-sm mb-4 font-semibold text-gray-900">
                                                        But having to drive to an off-site location to get documents
                                                        notarized can take time out of your busy day. Instead, have the
                                                        notary public come to you.
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="relative bg-silver py-2 border-gray-200 mb-5 rounded-sm">
                                    <button type="button" class="w-full px-8 py-2 text-left"
                                        @click="selected !== 7 ? selected = 7 : selected = null">
                                        <div class="flex items-center justify-between text-white">
                                            <span class="md:text-lg text-sm font-medium">
                                                7) Loan Signing – Do you offer Signing Services?</span>
                                            <i class="fa-solid fa-angles-down text-2xl"></i>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700"
                                        style="" x-ref="container7"
                                        x-bind:style="selected == 7 ? 'max-height: ' + $refs.container7.scrollHeight + 'px' : ''">
                                        <div class="px-5 py-4">
                                            <div
                                                class=" shadow-2xl px-4 py-10 rounded-xl flex flex-col md:items-start md:text-left items-center text-center">
                                                <div
                                                    class=" md:text-base text-sm leading-relaxed text-justify md:px-10 px-5">
                                                    <h1
                                                        class="title-font md:text-base text-sm mb-4 font-semibold text-gray-900">
                                                        Yes, Signing services to the public, lenders, brokers, escrow,
                                                        title, legal or anyone who would be in need of our services in
                                                        Alameda and Contra Costa County.
                                                    </h1>

                                                    <section class="text-gray-600 body-font">
                                                        <div class="container px-5 py-4 mx-auto">
                                                            <div
                                                                class="flex flex-wrap lg:w-5/5 sm:mx-auto sm:mb-2 -mx-2">

                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">
                                                                            Refinances</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Purchases</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Modifications</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Short
                                                                            Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">HELCO</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Same
                                                                            Day Service</span>
                                                                    </div>
                                                                </div>


                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Experienced</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Competative
                                                                            Rates</span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-2 sm:w-1/2 w-full">
                                                                    <div
                                                                        class="bg-gray-100 rounded flex p-4 h-full items-center">
                                                                        <i
                                                                            class="fa-solid fa-share textED9393 text-xl w-6 h-6 flex-shrink-0 mr-4"></i>
                                                                        <span
                                                                            class="title-font font-medium md:text-base text-sm">Service
                                                                            24/7</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
    </main>
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
