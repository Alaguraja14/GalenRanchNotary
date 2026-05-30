<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Buy a car extended warranty | Gale Ranch Notary</title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description" content="Buy a car extended warranty | Gale Ranch Notary">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/thumbnail.png">
    <meta property="og:image:secure_url" content="https://www.galeranchnotary.com/images/thumbnail.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gale Ranch Notary">
    <meta name="twitter:description" content="Buy a car extended warranty | Gale Ranch Notary">
    <meta name="twitter:image" content="https://www.galeranchnotary.com/images/thumbnail.png">
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
    </style>
</head>

<body class="antialiased">
    <x-blogHeader></x-blogHeader>
    <section class="text-gray-600 body-font -mt-48">
        <div class="w-11/12 px-5 py-10 mx-auto">
            @if ($message = Session::get('success'))
                <div
                    class="mt-4 alert alert-success bg-green-600 text-white py-2.5 text-center text-base font-semibold">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="py-10">


                <div class="text-center shadow-xl rounded py-4 bg-teal-800">
                    <h1 class="text-gray-100 md:text-xl text-base font-semibold tracking-wider">Would you buy a car
                        extended warranty for 15 years instead of 10 years?</h1>
                </div>

                <div class="py-10 px-5  mt-10">
                    <p class="md:text-xl text-base font-semibold mt-4 mb-4">Most people say yes if:</p>
                    <ul class="list-disc py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>The extra cost is reasonable</li>
                        <li>They plan to keep the car long term</li>
                        <li>They want to lock in protection while the vehicle is still in good condition</li>
                    </ul>


                    <p class="md:text-lg text-base font-semibold mt-4">Because:</p>

                    <ul class="list-none py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>You can always cancel early if you sell the car.</li>
                        <li>But once the warranty expires, buying new coverage later is usually much more expensive—or
                            may not be available.</li>
                    </ul>
                    <p class=" text-base font-semibold mt-4">❤️ Term Life Insurance Works the Same Way</p>
                    <p class=" text-base font-semibold mt-4">If you have the option to secure a 35-year term instead of
                        just 10, 15, or 20 years, it can be a powerful strategy.</p>
                    <p class=" text-base font-semibold mt-4">Why a 35-Year Term Makes Sense</p>


                    <ul class="list-disc py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>✅ Locks in today’s premium while you are younger and healthier</li>

                        <li>✅ Provides coverage until retirement age for many people</li>
                        <li>✅ Protects your family during mortgage payoff, child education, and wealth-building years
                        </li>
                        <li>✅ Eliminates the risk of reapplying later at an older age with possible health issues</li>
                        <li>✅ You can cancel anytime if coverage is no longer needed</li>
                    </ul>

                    <p class="md:text-lg text-base font-semibold mt-4">Shorter Terms: The Hidden Risk</p>
                    <p class="md:text-lg text-base font-semibold mt-4">If you choose a 10- or 20-year term:</p>

                    <ul class="list-none py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>You may still need coverage when it expires.</li>
                        <li>Renewing later could cost much more.</li>
                        <li>New health conditions could make coverage difficult or impossible to obtain.</li>
                    </ul>

                    <p class="md:text-lg text-base font-semibold mt-4">Simple Example</p>
                    <p class="md:text-lg text-base font-semibold mt-4">At age 35:</p>

                    <ul class="list-none py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>20-year term covers you until age 55.</li>
                        <li>35-year term covers you until age 70.</li>
                    </ul>

                    <p class="md:text-lg text-base font-semibold mt-4">That extra protection can cover:</p>

                    <ul class="list-none py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>Mortgage</li>
                        <li>College costs</li>
                        <li>Retirement transition</li>
                        <li>Income replacement for your family</li>
                    </ul>

                    <p class="md:text-lg text-base font-semibold mt-4">Best Rule of Thumb</p>
                    <p class="md:text-lg text-base font-semibold mt-4">Choose a term that covers you until:</p>

                    <ul class="list-none py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>Your children are financially independent</li>
                        <li>Your mortgage is paid off</li>
                        <li>Your retirement assets can support your family</li>
                    </ul>

                    <p class="md:text-lg text-base font-medium mt-4">Many insurers commonly offer 10–30 year terms, and
                        some carriers offer longer options such as 35 or even 40 years.</p>

                    <p class="md:text-lg text-base font-medium mt-4">If the price difference is reasonable, many
                        families prefer a 35-year term because it provides longer peace of mind and locks in
                        insurability while they are healthy.</p>
                    <p class="md:text-lg text-base font-medium mt-4 px-5"> – <span class='text-blue-600'>
                            Govind Gopal,(925) 322 3131 &nbsp; &nbsp; &nbsp;<a href='mailto:govind@galeranchnotary.com'
                                class='underline'>Govind@GaleRanchNotary.com</a></span><br>Gale Ranch
                        Notary, Apostille and Financial
                        Services</a>
                    </p>

                </div>
                <x-subscribeButton></x-subscribeButton>
                <div class="md:px-5 py-8 flex justify-between border-y-2 w-full sm:text-base text-sm">
                    <a href="/beneficiary-designations-override-your-Will-or-Trust" class="text-gray-100 bg-teal-800 px-4 py-2 rounded-md"><i
                            class="fa-solid fa-chevron-left mr-1"></i>Previous Post</a>
                    <a href="/Protection-Tips-for-Families-&-Professionals" class="bg-yellow-500 text-white px-4 py-2 rounded-md">Next
                        Post<i class="fa-solid fa-chevron-right ml-1"></i></a>
                </div>
            </div>

            <x-blogCommentForm></x-blogCommentForm>
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
