<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>ContactUs Page | Gale Ranch Notary
    </title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description"
        content="Contact us for Free Apostille, Trusts, Immigration & Financial Services queries. 
    Top-notch solutions at your fingertips!
    ">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/Banner.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description"
        content="Contact us for Free Apostille, Trusts, Immigration & Financial Services queries. 
    Top-notch solutions at your fingertips!
    ">

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
    <main class="w-full backgroundGradient shadow-lg pb-48 rounded-b-3xl">
        <x-logo></x-logo>
        <div class="w-11/12 mx-auto py-2 mt-4 bgFFFDFD shadow-lg rounded-lg">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: false }"
                    class="flex flex-col lg:w-7/12 md:w-10/12 px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
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
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm  md:mt-0"
                            href="/services">Services</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/review">Reviews</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/blog">Blog</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/faq">FAQ</a>
                        <a class="leading-6 tracking-wider  px-4 py-2 mt-2 text-sm text-litePink font-semibold md:mt-0 hover:animate-bounce"
                            href="/contactUs">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <section class="lg:py-20 -mt-40">
        <div class="flex flex-col items-center justify-between w-full md:px-10 px-2 pt-5 pb-20 lg:pt-0 lg:flex-row">
            <div class="relative z-10 mx-auto w-full mt-0 lg:mt-0 lg:w-7/12">
                <div
                    class="relative z-10 flex flex-col items-start justify-start md:p-10 sm:p-8 p-2 bg-white shadow-2xl rounded-xl">
                    <h4
                        class="w-full md:text-2xl sm:text-lg text-base md:text-left text-center font-medium leading-snug mb-4">
                        Gale Ranch
                        Notary</h4>
                    {!! NoCaptcha::renderJs() !!}
                    <form action="{{ route('sendemail') }}" enctype="multipart/form-data" method="POST"
                        class="md:pl-10 pl-2 pr-5 pb-4 w-full shadow-2xl rounded-md" autocomplete="off">
                        @csrf
                        @if ($message = Session::get('success'))
                            <div
                                class="mt-4 alert alert-success bg-green-600 text-white py-2 text-center text-base font-semibold">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <h1 class="font-semibold black252B42 text-xl text-center pt-2">Contact Us</h1>
                        <div class="flex mt-1 justify-center">
                            <div class="w-12 h-0.5 rounded-full bgED9393 inline-flex"></div>
                        </div>
                        <!-- @if ($errors->any())
    <div class="alert alert-danger text-red-600">
                                    <ul>
        @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
                                    </ul>
                                </div>
    @endif-->
                        <div class="relative mb-6">
                            <label for="name" class="leading-7 text-sm font-semibold tracking-wide">Name<span
                                    class="text-red-600 ml-1">*</span></label>
                            <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                class="w-full mt-1 bg-white border rounded shadow-xl focus:border-litePink focus:ring-2 focus:ring-litePink text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @if ($errors->has('name'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('name') }}.
                                </span>
                            @endif
                        </div>
                        <div class="relative mb-6">
                            <label for="email" class="leading-7 text-sm font-semibold tracking-wide">Email<span
                                    class="text-red-600 ml-1">*</span></label>
                            <input type="text" id="email" name="email" rounded value="{{ old('email') }}"
                                class="w-full mt-1 bg-white border rounded shadow-xl focus:border-litePink focus:ring-2 focus:ring-litePink text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @if ($errors->has('email'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('email') }}.
                                </span>
                            @endif
                        </div>
                        <div class="relative mb-6">
                            <label for="phone_number" class="leading-7 text-sm font-semibold tracking-wide">Phone
                                Number<span class="text-red-600 ml-1">*</span></label>
                            <input type="text" id="phone_number" name="phone_number" required
                                value="{{ old('phone_number') }}"
                                class="w-full mt-1 bg-white border rounded shadow-xl focus:border-litePink focus:ring-2 focus:ring-litePink text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @if ($errors->has('phone_number'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('phone_number') }}.
                                </span>
                            @endif
                        </div>
                        <div class="relative mb-6">
                            <label for="message"
                                class="leading-7 text-sm font-semibold tracking-wide">Message</label>
                            <textarea id="message" name="message"
                                class="w-full mt-1 bg-white border rounded shadow-xl focus:border-litePink focus:ring-2 focus:ring-litePink h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ Request::old('message') }}</textarea>
                        </div>
                        <div class="relative mb-4"> {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2"
                                    role="alert">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>

                        <button
                            class="text-white w-full bgED9393 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded text-lg">Send</button>

                        <p class="mt-4 text-xs">* Feel free to contact us.</p>

                    </form>
                </div>
                <svg class="absolute md:block hidden top-0 left-0 z-0 w-32 h-32 -mt-12 -ml-12 text-gray-300 fill-current"
                    viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg">
                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                        <g fill-rule="nonzero">
                            <g>
                                <g>
                                    <circle cx="3.261" cy="3.445" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.445" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.445" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.445" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.445" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.445" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.445" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.445" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 12)">
                                    <circle cx="3.261" cy="3.525" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.525" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.525" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.525" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.525" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.525" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.525" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.525" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 24)">
                                    <circle cx="3.261" cy="3.605" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.605" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.605" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.605" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.605" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.605" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.605" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.605" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 36)">
                                    <circle cx="3.261" cy="3.686" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.686" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.686" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.686" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.686" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.686" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.686" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.686" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 49)">
                                    <circle cx="3.261" cy="2.767" r="2.72"></circle>
                                    <circle cx="15.296" cy="2.767" r="2.719"></circle>
                                    <circle cx="27.333" cy="2.767" r="2.72"></circle>
                                    <circle cx="39.369" cy="2.767" r="2.72"></circle>
                                    <circle cx="51.405" cy="2.767" r="2.72"></circle>
                                    <circle cx="63.441" cy="2.767" r="2.72"></circle>
                                    <circle cx="75.479" cy="2.767" r="2.72"></circle>
                                    <circle cx="87.514" cy="2.767" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 61)">
                                    <circle cx="3.261" cy="2.846" r="2.72"></circle>
                                    <circle cx="15.296" cy="2.846" r="2.719"></circle>
                                    <circle cx="27.333" cy="2.846" r="2.72"></circle>
                                    <circle cx="39.369" cy="2.846" r="2.72"></circle>
                                    <circle cx="51.405" cy="2.846" r="2.72"></circle>
                                    <circle cx="63.441" cy="2.846" r="2.72"></circle>
                                    <circle cx="75.479" cy="2.846" r="2.72"></circle>
                                    <circle cx="87.514" cy="2.846" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 73)">
                                    <circle cx="3.261" cy="2.926" r="2.72"></circle>
                                    <circle cx="15.296" cy="2.926" r="2.719"></circle>
                                    <circle cx="27.333" cy="2.926" r="2.72"></circle>
                                    <circle cx="39.369" cy="2.926" r="2.72"></circle>
                                    <circle cx="51.405" cy="2.926" r="2.72"></circle>
                                    <circle cx="63.441" cy="2.926" r="2.72"></circle>
                                    <circle cx="75.479" cy="2.926" r="2.72"></circle>
                                    <circle cx="87.514" cy="2.926" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 85)">
                                    <circle cx="3.261" cy="3.006" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.006" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.006" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.006" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.006" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.006" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.006" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.006" r="2.719"></circle>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <svg class="absolute md:block hidden bottom-0 right-0 z-0 w-32 h-32 -mb-12 -mr-12 text-teal-600 fill-current"
                    viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg">
                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                        <g fill-rule="nonzero">
                            <g>
                                <g>
                                    <circle cx="3.261" cy="3.445" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.445" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.445" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.445" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.445" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.445" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.445" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.445" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 12)">
                                    <circle cx="3.261" cy="3.525" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.525" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.525" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.525" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.525" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.525" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.525" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.525" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 24)">
                                    <circle cx="3.261" cy="3.605" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.605" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.605" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.605" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.605" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.605" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.605" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.605" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 36)">
                                    <circle cx="3.261" cy="3.686" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.686" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.686" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.686" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.686" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.686" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.686" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.686" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 49)">
                                    <circle cx="3.261" cy="2.767" r="2.72"></circle>
                                    <circle cx="15.296" cy="2.767" r="2.719"></circle>
                                    <circle cx="27.333" cy="2.767" r="2.72"></circle>
                                    <circle cx="39.369" cy="2.767" r="2.72"></circle>
                                    <circle cx="51.405" cy="2.767" r="2.72"></circle>
                                    <circle cx="63.441" cy="2.767" r="2.72"></circle>
                                    <circle cx="75.479" cy="2.767" r="2.72"></circle>
                                    <circle cx="87.514" cy="2.767" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 61)">
                                    <circle cx="3.261" cy="2.846" r="2.72"></circle>
                                    <circle cx="15.296" cy="2.846" r="2.719"></circle>
                                    <circle cx="27.333" cy="2.846" r="2.72"></circle>
                                    <circle cx="39.369" cy="2.846" r="2.72"></circle>
                                    <circle cx="51.405" cy="2.846" r="2.72"></circle>
                                    <circle cx="63.441" cy="2.846" r="2.72"></circle>
                                    <circle cx="75.479" cy="2.846" r="2.72"></circle>
                                    <circle cx="87.514" cy="2.846" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 73)">
                                    <circle cx="3.261" cy="2.926" r="2.72"></circle>
                                    <circle cx="15.296" cy="2.926" r="2.719"></circle>
                                    <circle cx="27.333" cy="2.926" r="2.72"></circle>
                                    <circle cx="39.369" cy="2.926" r="2.72"></circle>
                                    <circle cx="51.405" cy="2.926" r="2.72"></circle>
                                    <circle cx="63.441" cy="2.926" r="2.72"></circle>
                                    <circle cx="75.479" cy="2.926" r="2.72"></circle>
                                    <circle cx="87.514" cy="2.926" r="2.719"></circle>
                                </g>
                                <g transform="translate(0 85)">
                                    <circle cx="3.261" cy="3.006" r="2.72"></circle>
                                    <circle cx="15.296" cy="3.006" r="2.719"></circle>
                                    <circle cx="27.333" cy="3.006" r="2.72"></circle>
                                    <circle cx="39.369" cy="3.006" r="2.72"></circle>
                                    <circle cx="51.405" cy="3.006" r="2.72"></circle>
                                    <circle cx="63.441" cy="3.006" r="2.72"></circle>
                                    <circle cx="75.479" cy="3.006" r="2.72"></circle>
                                    <circle cx="87.514" cy="3.006" r="2.719"></circle>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
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
