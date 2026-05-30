<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Fast Apostille Services | San Ramon
    </title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description" content="Reliable apostille services for birth certificates, FBI background checks, and international legal documents.">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/Banner.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description" content="Reliable apostille services for birth certificates, FBI background checks, and international legal documents.">

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
            max-width:100%;
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
    </style>
</head>

<body class="antialiased">
    <main class="w-full backgroundGradient shadow-lg pb-20 rounded-b-3xl">
        <x-site-header active="apostille" nav-width="lg:w-8/12 md:w-10/12" />
    </main>
    <!-- component -->
    <section class="lg:pb-20 -mt-14">
        <div class='w-full bg-cover py-40 flex justify-center items-center'
            style='background-image:url(images/apostille-service.jpg)'
            role="img"
            aria-label="Apostille document authentication services for personal and business documents in San Ramon">
            <div class='md:text-5xl sm:text-2xl text-xl font-bold text-white text-center'>Apostille Service <br><span
                    class="md:text-3xl sm:text-xl text-lg font-bold text-white text-center mt-10">Standard Service,
                    Personal & Business Documents.</span></div>
            {{-- <img src="images\apostille-service.jpg" alt="Apostille document authentication services for San Ramon personal and business documents" class='w-full h-full object-cover'/> --}}
        </div>
        <div class="flex flex-col items-center justify-between w-full md:px-10 px-4 pt-5 pb-20 lg:pt-0 lg:flex-row">
            <div class="relative z-10 mx-auto w-full max-w-8/12 mt-20 lg:mt-0 lg:w-10/12">
                <div
                    class="relative z-10 mt-4 flex flex-col items-start justify-start md:p-10 sm:p-8 p-4 bg-white shadow-2xl rounded-xl">
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
                        <div class='grid md:grid-cols-2 grid-cols-1 md:gap-4 gap-6'>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">First Name
                                    <span class="text-litePink font-semibold">*</span></label>
                                <input type="text" name="fname" value="{{ old('fname') }}"
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
                                    Name <span class="text-litePink font-semibold">*</span></label>
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

                        <div class='grid md:grid-cols-2 grid-cols-1 md:gap-4 gap-6'>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Phone
                                    Number<span class="text-litePink font-semibold">*</span></label>
                                <input type="text"  name="phone_number" value="{{ old('phone_number') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="+14422123456">
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
                                <input type="email"  name="email" value="{{ old('email') }}"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="janedoe@email.com">
                                @if ($errors->has('email'))
                                    <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                        {{ $errors->first('email') }}.
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class='grid md:grid-cols-2 grid-cols-1 md:gap-4 gap-6'>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Street
                                    Address
                                    <span class="text-litePink font-semibold">*</span></label>
                                <input type="text"  name="address" value="{{ old('address') }}"
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
                                <input type="text"  name="zipcode" value="{{ old('zipcode') }}"
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
                            <label class="md:absolute md:px-2 md:ml-2 -mt-3 font-medium text-gray-600 bg-white">What foreign
                                country are the documents intended for?
                                <span class="text-litePink font-semibold">*</span></label>
                            <input type="text"  name="doc_inteded" value="{{ old('doc_inteded') }}"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="Brazil">
                            @if ($errors->has('doc_inteded'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('doc_inteded') }}.
                                </span>
                            @endif
                        </div>
                        <div>
                            <label class="mt-4 md:px-2 font-medium text-gray-600 bg-white">Do your
                                documents need to be translated?<span class="text-litePink font-semibold">*</span>
                                </label>
                            <div class="flex space-x-5 mt-4">
                                <label>
                                    <input type="radio" name="language" value="yes" class="option" {{ old('language') == 'yes' ? 'checked' : '' }}> Yes
                                </label>
                                <label>
                                    <input type="radio" name="language" value="no" class="option" {{ old('language') == 'no' ? 'checked' : '' }}> No
                                </label>
                            </div>
                            <br>
                            <div id="textBoxContainer" style="display: none;">
                                <input type="text" id="reasonTextBox" name="language_name" value="{{ old('language_name') }}"
                                    class="block w-full px-4 py-4 mt-1 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                    placeholder="French" required>
                                    @if ($errors->has('language_name'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('language_name') }}.
                                </span>
                            @endif
                            </div>
                            @if ($errors->has('language'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('language') }}.
                                </span>
                            @endif
                        </div>

                        <div class="relative">
                            <label class="md:absolute md:px-2 md:ml-2 -mt-3 font-medium text-gray-600 bg-white">How many
                                documents do you need an apostille for?
                                <span class="text-litePink font-semibold">*</span></label>
                            <input type="text"  name="doc_count" value="{{ old('doc_count') }}"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="2">
                            @if ($errors->has('doc_count'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('doc_count') }}.
                                </span>
                            @endif
                        </div>

                        <div class="relative">
                            <label class="md:absolute md:px-2 md:ml-2 -mt-3 font-medium text-gray-600 bg-white">What type(s) of
                                documents do you need an apostille/legalization for?
                                <span class="text-litePink font-semibold">*</span></label>
                            <input type="text"  name="doc_type" value="{{ old('doc_type') }}"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="Driving license">
                            @if ($errors->has('doc_type'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('doc_type') }}.
                                </span>
                            @endif
                        </div>

                        <div class="flex flex-col w-full  items-start justify-center bg-grey-lighter">
                            <label class="mt-4 px-2 font-medium text-gray-600 bg-white mb-4">Upload your documents
                                <span class="text-litePink font-semibold">*</span></label>

                            <label for="images" class="drop-container py-10 md:px-10 px-2 md:w-7/12 w-full" id="dropcontainer">
                                <span class="drop-title">Select a file</span>
                                
                                <input type="file" name="file" id="file" >
                            </label>

                            {{-- <label
                                class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-xl tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-500 hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input type='file' name="file" class="hidden" />
                            </label> --}}
                            <span class="text-litePink font-semibold text-sm mt-3">Max upload file size 5MB. Allowed File Type
                                - jpg, .jpeg, .pdf, .doc, .docx.</span>
                            @if ($errors->has('file'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2" role="alert">
                                    {{ $errors->first('file') }}.
                                </span>
                            @endif
                        </div>
                        <div class="relative mb-4 mt-4 w-full overflow-auto"> {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2"
                                    role="alert">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>

                        <div class="relative flex justify-center items-center">
                            <button
                                class="inline-block  px-10 py-4 text-xl font-medium text-center text-white transition duration-200 bg-litePink rounded-lg hover:bg-teal-500 ease">Submit & Pay</button>
                        </div>
                    </form>
                </div>

                <div class="relative z-10 mt-12 sm:mt-16 w-full space-y-10 sm:space-y-14">
                    {{-- Top Features --}}
                    <section aria-labelledby="apostille-features-heading">
                        <div class="text-center mb-8 sm:mb-10">
                            <h2 id="apostille-features-heading"
                                class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">
                                Top Features
                            </h2>
                            <div class="flex justify-center">
                                <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                            </div>
                        </div>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 list-none p-0 m-0">
                            <li class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900">
                                <i class="fa-solid fa-bolt text-litePink text-3xl mb-3" aria-hidden="true"></i>
                                <p>Fast Turnaround</p>
                            </li>
                            <li class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900">
                                <i class="fa-solid fa-circle-check text-litePink text-3xl mb-3" aria-hidden="true"></i>
                                <p>100% Accuracy Guarantee</p>
                            </li>
                            <li class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900">
                                <i class="fa-solid fa-stamp text-litePink text-3xl mb-3" aria-hidden="true"></i>
                                <p>State of California Apostille</p>
                            </li>
                            <li class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900">
                                <i class="fa-solid fa-globe text-litePink text-3xl mb-3" aria-hidden="true"></i>
                                <p>International Use</p>
                            </li>
                        </ul>
                    </section>

                    {{-- Documents We Apostille --}}
                    <section aria-labelledby="apostille-documents-heading">
                        <div class="text-center mb-8 sm:mb-10">
                            <h2 id="apostille-documents-heading"
                                class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">
                                Documents We Apostille
                            </h2>
                            <div class="flex justify-center">
                                <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                            </div>
                        </div>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 list-none p-0 m-0">
                            <li class="bg-white shadow-lg rounded-lg px-5 py-4 font-semibold text-gray-900 flex items-center gap-3">
                                <i class="fa-solid fa-baby text-litePink text-xl" aria-hidden="true"></i>
                                <span>Birth Certificates</span>
                            </li>
                            <li class="bg-white shadow-lg rounded-lg px-5 py-4 font-semibold text-gray-900 flex items-center gap-3">
                                <i class="fa-solid fa-heart text-litePink text-xl" aria-hidden="true"></i>
                                <span>Marriage Certificates</span>
                            </li>
                            <li class="bg-white shadow-lg rounded-lg px-5 py-4 font-semibold text-gray-900 flex items-center gap-3">
                                <i class="fa-solid fa-file-signature text-litePink text-xl" aria-hidden="true"></i>
                                <span>Power of Attorney</span>
                            </li>
                            <li class="bg-white shadow-lg rounded-lg px-5 py-4 font-semibold text-gray-900 flex items-center gap-3">
                                <i class="fa-solid fa-graduation-cap text-litePink text-xl" aria-hidden="true"></i>
                                <span>Diplomas &amp; Transcripts</span>
                            </li>
                            <li class="bg-white shadow-lg rounded-lg px-5 py-4 font-semibold text-gray-900 flex items-center gap-3">
                                <i class="fa-solid fa-fingerprint text-litePink text-xl" aria-hidden="true"></i>
                                <span>FBI Documents</span>
                            </li>
                            <li class="bg-white shadow-lg rounded-lg px-5 py-4 font-semibold text-gray-900 flex items-center gap-3">
                                <i class="fa-solid fa-briefcase text-litePink text-xl" aria-hidden="true"></i>
                                <span>Business Documents</span>
                            </li>
                        </ul>
                    </section>

                    {{-- Apostille Process --}}
                    <section aria-labelledby="apostille-process-heading">
                        <div class="text-center shadow-xl w-full mx-auto rounded py-2.5 bgED9393 mb-8 sm:mb-10">
                            <h2 id="apostille-process-heading"
                                class="text-white text-lg sm:text-xl md:text-2xl font-bold tracking-wider px-2">
                                Apostille Process
                            </h2>
                        </div>
                        <ol class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 list-none p-0 m-0">
                            <li>
                                <article class="relative bg-white shadow-2xl rounded-xl p-6 text-center h-full">
                                    <span
                                        class="absolute -top-4 left-1/2 -translate-x-1/2 flex h-9 w-9 items-center justify-center rounded-full bgED9393 text-white font-bold text-base"
                                        aria-hidden="true">1</span>
                                    <i class="fa-solid fa-magnifying-glass text-litePink text-2xl mt-4 mb-3"
                                        aria-hidden="true"></i>
                                    <h3 class="text-gray-900 text-base font-semibold title-font mb-2">Document Review</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">We review your documents for requirements.</p>
                                </article>
                            </li>
                            <li>
                                <article class="relative bg-white shadow-2xl rounded-xl p-6 text-center h-full">
                                    <span
                                        class="absolute -top-4 left-1/2 -translate-x-1/2 flex h-9 w-9 items-center justify-center rounded-full bgED9393 text-white font-bold text-base"
                                        aria-hidden="true">2</span>
                                    <i class="fa-solid fa-file-signature text-litePink text-2xl mt-4 mb-3"
                                        aria-hidden="true"></i>
                                    <h3 class="text-gray-900 text-base font-semibold title-font mb-2">Notarization (If needed)</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">Documents are notarized if required.</p>
                                </article>
                            </li>
                            <li>
                                <article class="relative bg-white shadow-2xl rounded-xl p-6 text-center h-full">
                                    <span
                                        class="absolute -top-4 left-1/2 -translate-x-1/2 flex h-9 w-9 items-center justify-center rounded-full bgED9393 text-white font-bold text-base"
                                        aria-hidden="true">3</span>
                                    <i class="fa-solid fa-stamp text-litePink text-2xl mt-4 mb-3" aria-hidden="true"></i>
                                    <h3 class="text-gray-900 text-base font-semibold title-font mb-2">State Apostille</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">We obtain apostille from the California Secretary of State.</p>
                                </article>
                            </li>
                            <li>
                                <article class="relative bg-white shadow-2xl rounded-xl p-6 text-center h-full">
                                    <span
                                        class="absolute -top-4 left-1/2 -translate-x-1/2 flex h-9 w-9 items-center justify-center rounded-full bgED9393 text-white font-bold text-base"
                                        aria-hidden="true">4</span>
                                    <i class="fa-solid fa-truck text-litePink text-2xl mt-4 mb-3" aria-hidden="true"></i>
                                    <h3 class="text-gray-900 text-base font-semibold title-font mb-2">Deliver to You</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">Documents are returned safely via mail or pickup.</p>
                                </article>
                            </li>
                        </ol>
                    </section>

                    {{-- Legal documents cross-link --}}
                    <section aria-labelledby="legal-documents-cta-heading">
                        <div class="bg-white shadow-2xl rounded-xl p-6 sm:p-8 text-center border-l-4 border-litePink">
                            <h2 id="legal-documents-cta-heading"
                                class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-900 mb-3">
                                Need Help Preparing Legal Documents?
                            </h2>
                            <p class="text-gray-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto mb-6">
                                If you need Power of Attorney, Trusts, or Estate Planning documents for international use, we can help.
                            </p>
                            <a href="/https://www.galeranchwilltrust.com/" target="_blank"
                                class="inline-flex items-center justify-center bg-litePink text-white font-semibold text-sm sm:text-base px-6 py-3 rounded-lg hover:bg-teal-500 transition">
                                Visit Gale Ranch Will &amp; Trust
                            </a>
                        </div>
                    </section>

                    {{-- FAQ --}}
                    <section aria-labelledby="apostille-faq-heading">
                        <div class="text-center mb-8 sm:mb-10">
                            <h2 id="apostille-faq-heading"
                                class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">
                                Frequently Asked Questions
                            </h2>
                            <div class="flex justify-center">
                                <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                            </div>
                        </div>
                        <div class="max-w-3xl mx-auto w-full" x-data="{ selected: null }">
                            <ul class="space-y-3 sm:space-y-4 list-none p-0 m-0">
                                @foreach ([
                                    ['id' => 1, 'q' => 'What is an apostille?', 'a' => 'An apostille is a form of authentication issued to documents for use in countries that participate in the Hague Convention of 1961. It provides a uniform method of validating documents for use in foreign countries.'],
                                    ['id' => 2, 'q' => 'How long does apostille take?', 'a' => 'Processing time depends on document type and Secretary of State workload. Standard service typically takes several business days; expedited options may be available. Contact us for a current timeline.'],
                                    ['id' => 3, 'q' => 'Do all countries accept apostille?', 'a' => 'No. Apostilles are accepted only in countries that are members of the Hague Apostille Convention. Countries that are not members may require embassy legalization instead.'],
                                ] as $faq)
                                <li class="bg-silver rounded-sm overflow-hidden">
                                    <button type="button" class="w-full px-4 sm:px-6 py-4 text-left"
                                        @click="selected !== {{ $faq['id'] }} ? selected = {{ $faq['id'] }} : selected = null"
                                        :aria-expanded="selected === {{ $faq['id'] }}">
                                        <div class="flex items-center justify-between gap-3 text-white">
                                            <span class="text-sm sm:text-base font-medium text-left">{{ $faq['q'] }}</span>
                                            <i class="fa-solid fa-angles-down text-sm sm:text-lg shrink-0"
                                                aria-hidden="true"></i>
                                        </div>
                                    </button>
                                    <div class="overflow-hidden bg-white transition-all duration-500"
                                        :class="selected === {{ $faq['id'] }} ? 'max-h-48 py-4 px-4 sm:px-6' : 'max-h-0'">
                                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed">{{ $faq['a'] }}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>

                    {{-- Related Services --}}
                    <section aria-labelledby="apostille-related-heading" class="pb-4 sm:pb-8">
                        <div class="text-center mb-8 sm:mb-10">
                            <h2 id="apostille-related-heading"
                                class="text-xl sm:text-2xl md:text-3xl font-semibold title-font text-gray-900 mb-2">
                                Related Services
                            </h2>
                            <div class="flex justify-center">
                                <div class="w-16 h-0.5 rounded-full bgED9393 inline-flex"></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <a href="/mobile-notary"
                                class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900 hover:text-litePink transition">
                                <i class="fa-solid fa-car-side text-litePink text-2xl mb-3" aria-hidden="true"></i>
                                <p>Mobile Notary</p>
                            </a>
                            <a href="/document-notarization"
                                class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900 hover:text-litePink transition">
                                <i class="fa-solid fa-file-circle-check text-litePink text-2xl mb-3" aria-hidden="true"></i>
                                <p>Document Notarization</p>
                            </a>
                            <a href="/POAGaleRanchNotary"
                                class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900 hover:text-litePink transition">
                                <i class="fa-solid fa-file-signature text-litePink text-2xl mb-3" aria-hidden="true"></i>
                                <p>Power of Attorney Notary</p>
                            </a>
                            <a href="/mobile-notary"
                                class="text-center bg-white shadow-xl rounded-lg p-5 font-semibold text-gray-900 hover:text-litePink transition">
                                <i class="fa-solid fa-location-dot text-litePink text-2xl mb-3" aria-hidden="true"></i>
                                <p>Traveling Notary</p>
                            </a>
                        </div>
                    </section>
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
                    $('#reasonTextBox').prop('required', true);
                } else {
                    // Hide the text box container if 'No' is clicked
                    $('#textBoxContainer').hide();
                    $('#reasonTextBox').prop('required', false);
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
