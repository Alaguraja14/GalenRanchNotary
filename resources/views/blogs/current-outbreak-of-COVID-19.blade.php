<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title> Current outbreak of COVID 19 | Gale Ranch Notary
    </title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description" content="Exploring the COVID-19 Impact on Economy & Wall Street. Stay informed with 
    our insightful blog post. #COVID19 #Economy #WallStreet">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/Banner.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description"
        content="Exploring the COVID-19 Impact on Economy & Wall Street. Stay informed with 
        our insightful blog post. #COVID19 #Economy #WallStreet">

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
                <div class="text-center shadow-xl rounded py-4 bg-red-900">
                    <h1 class="text-white md:text-xl text-base font-semibold tracking-wider">The current outbreak of
                        COVID-19
                        coronavirus has had a significant impact on the economy and Wall Street</h1>
                </div>

                <div class="py-10 px-5  mt-10">
                    <ul class="md:text-lg text-base py-4 list-disc md:px-10 px-4 space-y-3">
                        <li>The markets will recover, but uncertainty in your retirement or other savings methods can be
                            balanced with non-market strategies. </li>
                        <li>
                            <p>Most people are unaware that life insurance contracts provide living benefits that can be
                                utilized to enhance various savings strategies and hedge against market changes. </p>
                        </li>
                        <li>Cash value life insurance provides guaranteed growth and tax-efficient distribution options.
                        </li>
                        <li>While retirement account balances have been declining owing to the present market climate,
                            the
                            cash value of life insurance policies has not been affected and will continue to rise. </li>
                        <li>Hence it is more important to diversify your portfolio in Tax-Now, Tax-Later and Tax-Never
                            buckets. </li>
                        <li>To learn more and understand tax-never strategy (IRS code 7702), please contact me for
                            30-minutes session. </li>
                        <li>It can save thousands $ of your retirement, investment and college savings against market
                            and
                            tax risks. </li>
                    </ul>


                    <p class="md:text-lg text-base py-4 leading-10">- Govind, Gale Ranch Notary and Financial Services.
                        <a href="mailto:Govind@GaleRanchNotary.com"
                            class="text-blue-500 font-semibold ml-4">Govind@GaleRanchNotary.com</a>
                    </p>



                </div>
                <x-subscribeButton></x-subscribeButton>
                <div class="px-5 py-8 flex justify-between border-y-2 w-full">
                    <a href="/usa-to-india-and-india-to-usa-travel-requirements"
                        class="bg-red-900 text-gray-100 px-4 py-2 rounded-md"><i
                            class="fa-solid fa-chevron-left mr-1"></i>Previous Post</a>
                    <a href="/life-insurance-tips" class="bg-red-900 text-white px-4 py-2 rounded-md">Next
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
