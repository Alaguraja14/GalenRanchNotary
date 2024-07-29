<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Review | Gale Ranch Notary
    </title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description" content="Read customer reviews on our top-notch Apostille, Trusts, Immigration & 
    Financial services. Discover why we are the best! #CustomerFeedback">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/Banner.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="576">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description"
        content="Read customer reviews on our top-notch Apostille, Trusts, Immigration & 
        Financial services. Discover why we are the best! #CustomerFeedback">

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
    <main class="w-full backgroundGradient shadow-lg">
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
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm  md:mt-0 hover:animate-bounce"
                            href="/">Home</a>
                        <a class="leading-6 hover:animate-bounce tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0"
                            href="/apostille-service">Apostille Services</a>
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0 hover:animate-bounce"
                            href="/services">Services</a>
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-litePink font-semibold md:mt-0 hover:animate-bounce"
                            href="review">Reviews</a>
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0 hover:animate-bounce"
                            href="/blog">Blog</a>
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0 hover:animate-bounce"
                            href="/faq">FAQ</a>
                        <a class="leading-6 tracking-wider hover:text-litePink px-4 py-2 mt-2 text-sm text-gray-900 md:mt-0 hover:animate-bounce"
                            href="/contactUs">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
        <section class="w-11/12 mx-auto ">
            <div class="text-center w-11/12 mx-auto shadow-xl rounded py-2.5 bgED9393 my-4">
                <h1 class="text-white md:text-2xl text-xl font-bold tracking-wider">Reviews</h1>
            </div>
            <div class="w-full mt-2">
                <img src="images\Ratings-and-Reviews.png" alt="ratingsAndReviews" title=""
                    class="w-6/12 mx-auto bg-cover bg-center rounded-lg">
            </div>
            <div class="flex flex-col items-center justify-center mt-5">
                <p class="md:text-2xl sm:text-lg font-semibold">Gale Ranch Notary, Apostille and Financial Services</p>
                <p class="md:text-lg sm:text-base text-xs font-semibold py-2">6156 W Branch Rd, San Ramon, CA, United
                    States
                </p>
                <div class="h-1 w-14 rounded-xl">
                    <div class="h-full w-full bg-litePink rounded-xl"></div>
                </div>
            </div>
            <main class="flex md:flex-row flex-col py-5 justify-between">

                <div class="md:w-1/2  mt-10 reviews md:px-10 px-4 py-5 shadow-2xl overflow-y-scroll">
                    <p class="md:text-xl sm:text-lg font-semibold">Gale Ranch Notary - Google Reviews</p>
                    <p class="md:text-base sm:text-sm py-2">5.0 <span class="text-yellow-500"><i
                                class="fa-solid fa-star ml-2"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></span>
                        41 reviews</p>
                    <div class="py-5 space-y-4">
                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">CHIN-YI CHENG</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 months ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Quick response, flexible schedule, reasonable price,
                                and
                                nice
                                and polite. Very lucky to have a notary service in the neighborhood.</p>
                        </div>
                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Myra Villena</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 months ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">It was such a pleasure working with Govind for the
                                Apostille
                                services my sister and I needed. He was very professional and responsive. He even
                                delivered
                                our
                                documents once they were available. I will definitely work with him again if I need
                                notary
                                and
                                Apostille services again.</p>
                        </div>

                        <div
                            class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4  md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Vin Liao</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">a year ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is professional, responsive, and friendly. He
                                offered me
                                the best price and did his best to accommodate my timeline. Thanks Govind for the great
                                help. I
                                would highly recommend Govind and will use him again whenever needed.</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Naveen Manikireddy</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6 months ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is very nice, polite and helpful and provide
                                additional
                                information on the notory for us which will be helpful and make our work easy</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">joe ramey</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">3 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Responded immediately to an urgent matter. Had an
                                appointment
                                within 30 minutes. Completely professional and explained everything (these were
                                documents
                                written in a foreign language that required an Apostille from the Secretary of State, so
                                everything had to be exact).
                                <br>I made a mistake on the original documents and had to return and she took me in
                                within
                                15
                                minutes of my call. She saved my day.
                                <br>I would recommend this Notary business and her personally as a Notary.
                                <br> Anyone within the San Ramon/Dublin area would do well to have your documents
                                notarized
                                here!
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Pradeep N</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind was very helpful in time , I need to get some
                                documents
                                notarized for Visa purpose on weekend and he helped me in getting this done in very
                                short
                                time
                                and he was very knowledgeable and patient .He charges are very nominal when compared
                                everybody
                                in Pleasanton , San Ramon area. I would highly recommend Govind anytime</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Lin Yang</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is extremely flexible and knowledgeable, even
                                letting
                                us come in on Thanksgiving. He is very helpful and efficient. He gives free notaries to
                                students, and it only took 10 min!</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">chitra subbaiah</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6 months ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Immediate response, Quick scheduling, on time. Highly
                                recommend.</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Anoop SIngh</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is very experienced notory and his rates are
                                very
                                reasonable for the kind of service he provides , I would recommend Govind highly for any
                                notory
                                job , he is very accessible and always ready for the help even in early times</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Kandasamy Muthusamy</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is very quick and friendly. I needed notary for
                                my
                                appointment in next day morning and he was available for me at 10:30 PM previous day.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Dawn Mendoza</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Great service. Needed a document notarized and was
                                able to
                                get
                                it done in less than 30 minutes!! I would definitely use Govind again.</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">bala59100</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Had to get a document notary over a weekend. Govind
                                was so
                                flexible and accommodating that he did on a Sunday night. Extremely convenient and cost
                                effective. I would recommend Govind to anyone.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Kanagalakshmi Ramesh</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Very friendly and caring person. We get right advice
                                for
                                the
                                service we are going for.
                                <br>
                                He is doing commendable community service as well. So I recommended him for any Notary
                                service
                                and advice.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Yerbolat Ussenov</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">2 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Much thanks to Govind, the apostille service was fast
                                and
                                looked good. I recommend him to others, the service is also at the right price.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Vinodh Kuppuswamy</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Very good services and Notary fee cost is very minimal
                                compared to market rate. I will recommend highly anyone who is looking for notary to
                                take it
                                from Govind @ Gale Ranch.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Carissa Bracy</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Service was excellent! Was available in a pinch when
                                other
                                notary services were closed or unresponsive. Also, great price.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Sachin Srivastava</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is very professional notary person and very
                                reasonable
                                and friendly. Highly recommend his services to anyone who needs notary services
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Diana Thompson</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Excellent service! Very courteous and professional.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Nish Reddy</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Very nice service. Available after hours as well
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Par Gha</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">His job was great and I'm happy!
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Divya Nookala</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Can't beat the price. Fast service and great customer
                                service.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Mohamed Omrane</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">a years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Very helpful, and responsive.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Adam Kennedy</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">This is a nice reliable and quick service. Thanks for
                                the
                                help.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">V M</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">a year ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Professional and Good value
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Armika Berkley</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">a year ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Very professional, and responsive.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Praveen S</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Excellent & after hours service
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">liom88</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">3 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Quick and good communication.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Nivathan Athiganoor Somasundharam</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">2 years ago</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Great service!
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">sabari palani</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">a year ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">monika sharma</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Cameron Pospisil</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">2 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Ajay thomas</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6 months ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Krishna Rajannan</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">a year ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Theresa Chew</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Minyoung Park</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Jose Montanez</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Sri Neralla</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Uma Rajaram</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Lisa Clinton</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Meena Sundar</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Karla Callies</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5 years ago</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="md:w-1/2  mt-10 reviews md:px-10 px-4 py-5 shadow-2xl overflow-y-scroll">
                    <p class="md:text-xl sm:text-lg font-semibold">Gale Ranch Notary - Yelp Reviews</p>
                    <p class="md:text-base sm:text-sm py-2">5.0 <span class="text-red-500"><i
                                class="fa-solid fa-star ml-2"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i></span>
                        30 reviews</p>
                    <div class="py-5 space-y-4">
                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Arash M.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">8/22/2023</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Was amazed at how promptly I was able to get my
                                document notarized! Mr. Govind was very professional and was available at a time where
                                no other notaries were available. Will definitely use his service again. Highly
                                recommend!</p>
                        </div>
                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Stephanie M.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4/21/2023</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Amazing service! He was super professional and got
                                back to me quickly with any questions that I had. The service was super fast and easy.
                                If I ever need anything else notarized I'll definitely be coming here again. I
                                definitely recommend it.</p>
                        </div>
                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Rekha G.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4/10/2023</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind was amazing , pleasant and responsive in the
                                first
                                meeting . He explained the process in detail , gave me a time frame as to when to expect
                                the
                                signed documents and went above and beyond by delivering to my house , I would highly
                                recommend gale Ranch Notary.</p>
                        </div>
                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Bearman S.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">7/12/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">My own notary commission expired and I needed to
                                execute
                                clients' docs at their home in Danville. Govind showed up on time, executed the
                                documents
                                promptly and professionally and his mobile notary fee was reasonable.
                                An easy recommendation.</p>
                        </div>
                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                Anji I.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">2/28/2022</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Needed an Apostille and Nortary for a document and
                                Govind
                                handled it in a timely manner!
                                He is responsive and professional.
                                For any future documents that need Nortary or Apostille, I will be coming here again.
                            </p>
                        </div>

                        <div
                            class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4  md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Mel A.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">7/9/2021</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Great experience with Govind. He was reliable and
                                patient.
                                Even with short notice he accommodated a signing at my house. I would recommend his
                                service.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Ramana T.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">8/26/2021</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind was professional and courteous. We wanted to
                                setup
                                a living Will and trust and he referred us to a good lawyer and worked with him to get
                                us
                                what we need. Price was also reasonable. We would highly recommend him as the go to
                                notary
                                for San Ramon valley.</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                Matthew A.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">10/23/2017</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind (a mobile notary guy) came to our house for us
                                to
                                sign loan docs. He called us ahead of time and showed up to our home on time. Our paper
                                signing went very smoothly. He even briefly explained some of the paperwork. After many
                                signatures and several thumb ink prints in his book we shook hands and he left. No
                                complaints and would use him again in a heart beat. I would recommend this business.
                                Peace
                                out.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Chandra S.</h1>
                            <div class="text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">11/2/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Gale Ranch Notary helped my friend Apostille his
                                document
                                quickly without any hassle. They are my go to service provider to get documents
                                notarized.
                                Thanks Chitra and Govind.</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Yuhang L.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6/1/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is such a nice person to deal with. He made our
                                busy life so much easier by doing the notary at our house. Even my husband was
                                impressed!
                                Thanks again for all the help!!!</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                Mohan G.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">8/31/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind was very responsive and flexible to our needs
                                and
                                helped notarize several documents and also had them appostilled at Sacramento. We will
                                gladly use his help again. He was knowledgeable about exactly what needed to be done. He
                                is
                                very quick to respond and keeps you informed.
                                Mohan G</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Ronnie G.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">8/23/2017</span>
                            </div>
                            <p class="md:text-base text-sm py-2">What a pleasant surprise to find a mobile notary! Saw
                                the
                                car parked with the phone number on the side and called to make an appointment.
                                Surprised at
                                how easy it was!! Govind was available in the evening, after we got home from work,
                                showed
                                up exactly on time, was extremely pleasant and very reasonable. The convenience is
                                immeasurable, especially after running around a few banks trying to get a document
                                notarized
                                only to find the notaries are either not there that day or only notarized by prior
                                appointment.
                                <br>I strongly recommend Govind for your notary needs. I will use him every time I need
                                a
                                notary.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                Edward C.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5/23/2019</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Had no knowledge of Gale Ranch Notary when I picked
                                them
                                from a Google search. Simply stated, Govind Gopal was excellent! I had a reasonably
                                complex
                                need for a notary, a Jurad and an Apostille for a home sale in Mexico. Govind
                                accomplished
                                all in s reasonably tight time frame and at a good price.</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Rubal B.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6/8/2021</span>
                            </div>
                            <p class="md:text-base text-sm py-2">My experience was seamless, timely, and professional.
                                I
                                would utilize the service again in the future.</p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Marina I.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6/22/2021</span>
                            </div>
                            <p class="md:text-base text-sm py-2">I am very happy with the notary service. Very
                                knowledgeable. Responsive. Was easy to schedule an appointment.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                Cheryl C.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6/14/2020</span>
                            </div>
                            <p class="md:text-base text-sm py-2">I needed to have a document notarized asap. Mr. Govind
                                Gopal replied right away and met up with me at a location that was convenient for both
                                of
                                us. I highly recommend his service.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Magizh T.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">9/7/2020</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Reasonable rate for signatures. $10 per signature for
                                in
                                person and $10 for traveling. Came on time and communication was good.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                John M.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">10/8/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">I requested Gale Ranch Notary and Apostille for both
                                Notary and Apostille service. From the moment I first interacted with Chitra
                                Govindarajan,
                                she showed kindness and professionalism. She was able to meet me on short notice and she
                                said she could get the Apostille done in Sacramento on the very next day. It was a
                                pleasure
                                working with her and I would strongly recommend her for any Notary and Apostille
                                service.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Sid S.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">8/12/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">I was looking to Apostille a Power of Attorney
                                document
                                and found Mr. Govind Gopal on Yelp. I called him and he came to my house to collect the
                                documents. He got my documents apostilled from Sacramento and returned me the documents
                                the
                                very next day.
                                He is very professional, flexible, very thorough and punctual. I highly recommend Mr.
                                Govind
                                Gopal for his notary and Apostille services.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                Bearman S.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">7/12/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">My own notary commission expired and I needed to
                                execute
                                clients' docs at their home in Danville. Govind showed up on time, executed the
                                documents
                                promptly and professionally and his mobile notary fee was reasonable.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Matthew A.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">10/23/2017</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Excellent service! Very courteous and
                                professional.Govind
                                (a mobile notary guy) came to our house for us to sign loan docs. He called us ahead of
                                time
                                and showed up to our home on time. Our paper signing went very smoothly. He even briefly
                                explained some of the paperwork. After many signatures and several thumb ink prints in
                                his
                                book we shook hands and he left. No complaints and would use him again in a heart beat.
                                I
                                would recommend this business. Peace out.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Chandra S.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">11/2/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Gale Ranch Notary helped my friend Apostille his
                                document
                                quickly without any hassle. They are my go to service provider to get documents
                                notarized.
                                Thanks Chitra and Govind.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Yuhang L.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">6/1/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind is such a nice person to deal with. He made our
                                busy life so much easier by doing the notary at our house. Even my husband was
                                impressed!
                                Thanks again for all the help!!!
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Paula B.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">9/13/2017</span>
                            </div>
                            <p class="md:text-base text-sm py-2"> Fast service and great customer
                                service.This was a very fast, easy, convenient, and pleasant experience. I will
                                definitely
                                be using him again. Thanks for responding so quickly!
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Mohan G.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">8/31/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Govind was very responsive and flexible to our needs
                                and
                                helped notarize several documents and also had them appostilled at Sacramento. We will
                                gladly use his help again. He was knowledgeable about exactly what needed to be done. He
                                is
                                very quick to respond and keeps you informed.
                                Mohan G
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Ronnie G.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">8/23/2017</span>
                            </div>
                            <p class="md:text-base text-sm py-2">What a pleasant surprise to find a mobile notary! Saw
                                the
                                car parked with the phone number on the side and called to make an appointment.
                                Surprised at
                                how easy it was!! Govind was available in the evening, after we got home from work,
                                showed
                                up exactly on time, was extremely pleasant and very reasonable. The convenience is
                                immeasurable, especially after running around a few banks trying to get a document
                                notarized
                                only to find the notaries are either not there that day or only notarized by prior
                                appointment.
                                <br>
                                I strongly recommend Govind for your notary needs. I will use him every time I need a
                                notary.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">
                                Karla B.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4/18/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">I'm in San Ramon and needed a Notary fast. Mr. Govind
                                Gopal promptly returned my call, set up an appointment, and texted me a few minutes
                                before
                                arriving on time. He has a pleasant personality and was very professional. Everything
                                was
                                taken care of very quickly and he went out of his way to drop the papers off for me. I
                                would
                                highly recommend Gale Ranch Notary for going above and beyond my expectations.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Pej N.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">12/31/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Great service.. Couldn't be happier. Called them for
                                help
                                with last minute notary and they delivered. Prompt, courteous and professional. If you
                                need
                                notary look no further. Thanks again for your help!
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Edward C.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">5/23/2019</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Excellent & after hours serviceHad no knowledge of
                                Gale
                                Ranch Notary when I picked them from a Google search. Simply stated, Govind Gopal was
                                excellent! I had a reasonably complex need for a notary, a Jurad and an Apostille for a
                                home
                                sale in Mexico. Govind accomplished all in s reasonably tight time frame and at a good
                                price.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Mihir S.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">4/22/2019</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Mr. Govind is very friendly and helpful. I did not
                                have my
                                documents notarized at the time I was waiting in queue while getting apostille at
                                Sacramento
                                SoS, however fortunately for me Mr. Govind was present there and acted as a last minute
                                savior. He is extremely generous, humble, quick and easy to work with. I would highly
                                recommend him for notary & other services he offers.
                            </p>
                        </div>

                        <div class="rounded-xl shadow-2xl hover:border-b-litePink hover:border-b-4 py-4 md:px-10 px-4">
                            <h1 class="md:text-lg font-semibold mb-2">Christin J.</h1>
                            <div class="text-red-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="ml-2 text-sm text-black">10/6/2018</span>
                            </div>
                            <p class="md:text-base text-sm py-2">Chitra and Govind were very responsive and were able
                                to
                                accommodate my appointment request with a short notice on a weekend.
                            </p>
                        </div>
                    </div>
                </div>
            </main>
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
