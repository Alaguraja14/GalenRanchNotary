<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Beneficiary designations override your Will or Trust | Gale Ranch Notary</title>
    <link rel="icon" type="image/x-icon" href="images\Logo.png">
    <link rel=“canonical” href=“https://www.galeranchnotary.com/” />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta property="og:site_name" content="Gale Ranch Notary">
    <meta property="og:title" content="Gale Ranch Notary">
    <meta property="og:description" content="Beneficiary designations override your Will or Trust| Gale Ranch Notary">
    <meta property="og:image" content="https://www.galeranchnotary.com/images/thumbnail.png">
    <meta property="og:image:secure_url" content="https://www.galeranchnotary.com/images/thumbnail.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://www.galeranchnotary.com/">
    <meta name="description" content="Beneficiary designations override your Will or Trust | Gale Ranch Notary">
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


                <div class="text-center shadow-xl rounded py-4 bg-green-800">
                    <h1 class="text-gray-100 md:text-xl text-base font-semibold tracking-wider">Did you know beneficiary
                        designations override your Will or Trust?</h1>
                </div>

                <div class="py-10 px-5  mt-10">
                    <p class="md:text-xl text-base font-semibold mt-4 mb-4">For example:
                        You may have:
                    </p>
                    <ul class="list-disc py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>IRA</li>
                        <li>401(k)</li>
                        <li>Life Insurance</li>
                        <li>529 Plan</li>
                        <li>Annuity</li>
                    </ul>


                    <p class=" text-base font-medium mt-4">These often make up the bulk of what you’ll leave
                        behind.</p>

                    <p class="md:text-lg text-base font-semibold mt-4">But here’s the problem:</p>

                    <ul class="list-none py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li>If your beneficiary designations don’t match your Will or Trust, your assets will NOT go
                            where you intended.</li>
                    </ul>
                    <p class=" text-base font-semibold mt-4">✅ A Will says “everything goes to Tim.”</p>
                    <p class=" text-base font-semibold mt-4">❌ But your 401(k) still names George, your life insurance
                        still names Susan, and your IRA names Tim.</p>
                    <p class=" text-base font-semibold mt-4">Result? Tim only gets the IRA. The Will is powerless here.
                    </p>
                    <p class=" text-base font-semibold mt-4">📌 Key Point: Beneficiary designations always override your
                        Will or Trust.</p>

                    <p class="md:text-lg text-base font-semibold mt-8">💡 Action Step:</p>

                    <ul class="list-disc py-4 md:px-10 px-4 space-y-3 md:text-base text-sm leading-relaxed">
                        <li> The first step to making sure your assets actually go where you want them is to review your
                            beneficiary designations alongside your Will or Trust.</li>
                    </ul>


                    <p class="md:text-lg text-base font-medium mt-4 px-5"> – <span class='text-blue-600'>
                            Govind Gopal,(925) 322 3131 &nbsp; &nbsp; &nbsp;<a href='mailto:govind@galeranchnotary.com'
                                class='underline'>Govind@GaleRanchNotary.com</a></span><br>Gale Ranch
                        Notary, Apostille and Financial
                        Services</a>
                    </p>

                </div>
                <x-subscribeButton></x-subscribeButton>
                <div class="md:px-5 py-8 flex justify-between border-y-2 w-full sm:text-base text-sm">
                    <a href="/POAGaleRanchNotary" class="text-gray-100 bg-green-800 px-4 py-2 rounded-md"><i
                            class="fa-solid fa-chevron-left mr-1"></i>Previous Post</a>
                    <a href="/buy-a-car-extended-warranty" class="bg-teal-800 text-white px-4 py-2 rounded-md">Next
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
