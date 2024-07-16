<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Subscription | Gale Ranch Notary
    </title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description"
        content="Subscription on Apostille, Trusts, Immigration & Financial Services. 
    Get informed today!">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/Banner.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description"
        content="Subscription on Apostille, Trusts, Immigration & Financial Services. 
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
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
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
    <x-blogHeader></x-blogHeader>
    <!-- component -->
    <section class=" lg:py-20 -mt-40">
        <div class="flex flex-col items-center justify-between w-full px-10 pt-5 pb-20 lg:pt-0 lg:flex-row">
            <div class="relative z-10 mx-auto w-full max-w-2xl mt-20 lg:mt-0 lg:w-5/12">
                <div
                    class="relative z-10 flex flex-col items-start justify-start md:p-10 sm:p-8 p-6 bg-white shadow-2xl rounded-xl">
                    <h4 class="w-full md:text-4xl sm:text-2xl text-xl font-medium leading-snug">Gale Ranch Notary</h4>
                    <form action="{{ route('sendSubscribeemail') }}" enctype="multipart/form-data" method="POST"
                        autocomplete="off" class="relative w-full mt-6 space-y-8 ">
                        @csrf
                        @if ($message = Session::get('success'))
                            <div
                                class="mt-4 alert alert-success bg-green-600 text-white py-2.5 text-center text-base font-semibold">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Name <span
                                    class="text-litePink font-semibold">*</span></label>
                            <input type="text" required name="name"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="John">
                        </div>

                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Email Address
                                <span class="text-litePink font-semibold">*</span></label>
                            <input type="email" required name="email"
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-litePink"
                                placeholder="janedoe@email.com">
                        </div>
                        <div class="relative">
                            <button
                                class="inline-block w-full px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-litePink rounded-lg hover:bg-teal-500 ease">Subscribe</button>
                        </div>
                    </form>
                </div>
                <svg class="absolute top-0 left-0 z-0 w-32 h-32 -mt-12 -ml-12 text-gray-300 fill-current"
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
