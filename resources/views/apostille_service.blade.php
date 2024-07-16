<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Apostille Service | Gale Ranch Notary
    </title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description" content="Apostille Service - Standard Service, Personal & Business Documents.">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/Banner.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description" content="Apostille Service - Standard Service, Personal & Business Documents.">

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
        <x-logo></x-logo>
        <div class="w-11/12 mx-auto py-2 mt-4 bgFFFDFD shadow-lg rounded-lg">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
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
                        <a class="leading-6 tracking-wider hover:animate-bounce hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/services">Services</a>
                        <a class="leading-6 tracking-wider hover:animate-bounce hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/review">Reviews</a>
                        <a class="leading-6 tracking-wider hover:animate-bounce hover:text-litePink px-4 py-2 mt-2 text-sm  md:mt-0"
                            href="/blog">Blog</a>
                            <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm textED9393 font-semibold md:mt-0"
                            href="/apostille-service">Apostille Services</a>
                        <a class="leading-6 tracking-wider hover:animate-bounce hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/faq">FAQ</a>
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0 hover:animate-bounce"
                            href="/contactUs">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <!-- component -->
    <section class="lg:pb-20 -mt-14">
        <div class='w-full bg-cover py-40 flex justify-center items-center'
            style='background-image:url(images/apostille-service.jpg)'>
            <div class='md:text-5xl sm:text-2xl text-xl font-bold text-white text-center'>Apostille Service <br><span
                    class="md:text-3xl sm:text-xl text-lg font-bold text-white text-center mt-10">Standard Service,
                    Personal & Business Documents.</span></div>
            {{-- <img src="images\apostille-service.jpg" alt="apostille services" class='w-full h-full object-cover'/> --}}
        </div>
        <div class="flex flex-col items-center justify-between w-full px-10 pt-5 pb-20 lg:pt-0 lg:flex-row">
            <div class="relative z-10 mx-auto w-full max-w-8/12 mt-20 lg:mt-0 lg:w-10/12">
                <div
                    class="relative z-10 mt-4 flex flex-col items-start justify-start md:p-10 sm:p-8 p-6 bg-white shadow-2xl rounded-xl">
                    <h4 class="w-full md:text-3xl sm:text-2xl text-xl text-center font-medium leading-snug">Gale Ranch
                        Notary - Apostille Service</h4>
                    {!! NoCaptcha::renderJs() !!}
                    <form action="{{ route('sendemailApostille') }}" enctype="multipart/form-data" method="POST"
                        autocomplete="off" class="relative w-full mt-6 space-y-8 ">
                        @csrf
                        @if ($message = Session::get('success'))
                            <div
                                class="mt-4 alert alert-success bg-green-600 text-white py-2.5 text-center text-base font-semibold">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class='grid md:grid-cols-2 grid-cols-1 md:gap-4'>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">First Name
                                    <span class="text-litePink font-semibold">*</span></label>
                                <input type="text" required name="fname" value="{{ old('fname') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="John">
                                @if ($errors->has('fname'))
                                    <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                        {{ $errors->first('fname') }}.
                                    </span>
                                @endif
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Last
                                    Name</label>
                                <input type="text" name="lname" value="{{ old('lname') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="Morrison">
                                @if ($errors->has('lname'))
                                    <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                        {{ $errors->first('lname') }}.
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class='grid md:grid-cols-2 grid-cols-1 md:gap-4'>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Phone
                                    Number<span class="text-litePink font-semibold">*</span></label>
                                <input type="text" required name="phone_number" value="{{ old('phone_number') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="Morrison">
                                @if ($errors->has('phone_number'))
                                    <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                        {{ $errors->first('phone_number') }}.
                                    </span>
                                @endif
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Email
                                    Address
                                    <span class="text-litePink font-semibold">*</span></label>
                                <input type="email" required name="email" value="{{ old('email') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="janedoe@email.com">
                                @if ($errors->has('email'))
                                    <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                        {{ $errors->first('email') }}.
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class='grid md:grid-cols-2 grid-cols-1 md:gap-4'>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Street
                                    Address
                                    <span class="text-litePink font-semibold">*</span></label>
                                <input type="text" required name="address" value="{{ old('address') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="132,silver street">
                                @if ($errors->has('address'))
                                    <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                        {{ $errors->first('address') }}.
                                    </span>
                                @endif
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Zip Code
                                    <span class="text-litePink font-semibold">*</span></label>
                                <input type="text" required name="zipcode" value="{{ old('zipcode') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="50210">
                                @if ($errors->has('zipcode'))
                                    <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                        {{ $errors->first('zipcode') }}.
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">What foreign
                                country are the documents inteded for?
                                <span class="text-litePink font-semibold">*</span></label>
                            <input type="text" required name="doc_inteded" value="{{ old('doc_inteded') }}"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="Brazil">
                            @if ($errors->has('doc_inteded'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('doc_inteded') }}.
                                </span>
                            @endif
                        </div>
                        <div>
                            <label class="mt-4 px-2 font-medium text-gray-600 bg-white">Do your
                                documents need to be translated?
                                <span class="text-litePink font-semibold">*</span></label>
                            <div class="flex space-x-5 mt-4">
                                <label>
                                    <input type="radio" name="language" value="yes" class="option"> Yes
                                </label>
                                <label>
                                    <input type="radio" name="language" value="no" class="option"> No
                                </label>
                            </div>
                            <br>
                            <div id="textBoxContainer" style="display: none;">
                                <input type="text" id="reasonTextBox" name="language_name"
                                    class="block w-full px-4 py-4 mt-1 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="French">
                            </div>
                            @if ($errors->has('language'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('language') }}.
                                </span>
                            @endif
                        </div>

                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">How many
                                documents do you need an apostille for?
                                <span class="text-litePink font-semibold">*</span></label>
                            <input type="text" required name="doc_count" value="{{ old('doc_count') }}"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="2">
                            @if ($errors->has('doc_count'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('doc_count') }}.
                                </span>
                            @endif
                        </div>

                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">What type(s) of
                                documents do you need an apostille/legalization for?
                                <span class="text-litePink font-semibold">*</span></label>
                            <input type="text" required name="doc_type" value="{{ old('doc_type') }}"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="Driving license">
                            @if ($errors->has('doc_type'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('doc_type') }}.
                                </span>
                            @endif
                        </div>

                        <div class="flex flex-col w-full  items-start justify-center bg-grey-lighter">
                            <label class="mt-4 px-2 font-medium text-gray-600 bg-white mb-2">Upload your documents
                                <span class="text-litePink font-semibold">*</span></label>
                            <label
                                class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-xl tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-500 hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input type='file' name="file" class="hidden" />
                            </label>
                            <span class="text-litePink font-semibold mt-3">Max upload file size 5MB. Allowed File Type
                                - jpg, .jpeg, .pdf, .doc, .docx.</span>
                            @if ($errors->has('file'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('file') }}.
                                </span>
                            @endif
                        </div>
                        <div class="relative mb-4 mt-4"> {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2"
                                    role="alert">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>

                        <div class="relative flex justify-center items-center">
                            <button
                                class="inline-block  px-10 py-4 text-xl font-medium text-center text-white transition duration-200 bg-litePink rounded-lg hover:bg-teal-500 ease">Submit</button>
                        </div>
                    </form>
                </div>
                <svg class="absolute top-0 left-0 z-0 w-32 h-32 -mt-12 -ml-12 text-gray-500 fill-current"
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
                <svg class="absolute bottom-0 right-0 z-0 w-32 h-32 -mb-12 -mr-12 text-teal-600 fill-current"
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
            // Function to handle click event on radio buttons
            $('.option').click(function() {
                // Check if the clicked radio button is 'Yes'
                if ($(this).val() === 'yes') {
                    // Show the text box container
                    $('#textBoxContainer').show();
                } else {
                    // Hide the text box container if 'No' is clicked
                    $('#textBoxContainer').hide();
                }
            });

            // Trigger the click event on page load to initialize state
            $('.option:checked').trigger('click');

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
