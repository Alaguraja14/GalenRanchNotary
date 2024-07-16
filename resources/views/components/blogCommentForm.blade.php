<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto md:shadow-sm shadow-2xl rounded-xl">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Leave a Comment</h1>
            <div class="flex justify-center mb-2">
                <div class="w-12 h-0.5 rounded-full bgED9393 inline-flex"></div>
            </div>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Your email address will not be published.
                Required fields are marked <span class="ml-1 text-litePink font-semibold">*</span></p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            {!! NoCaptcha::renderJs() !!}
            <form action="{{ route('sendBlogEmail') }}" enctype="multipart/form-data" method="POST"
                class="flex flex-wrap -m-2" autocomplete="off">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger text-red-600 w-full py-4">
                    <p class="text-lg font-semibold pb-2">Please correct this</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name<span
                                class="ml-1 text-litePink font-semibold">*</span></label>
                        <input type="text" id="name" name="name" required value="{{old('name')}}"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-litePink focus:bg-white focus:ring-1 focus:ring-litePink text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email<span
                                class="ml-1 text-litePink font-semibold">*</span></label>
                        <input type="email" id="email" name="email" required  value="{{old('email')}}"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-litePink focus:bg-white focus:ring-1 focus:ring-litePink text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message<span
                                class="ml-1 text-litePink font-semibold">*</span></label>
                        <textarea id="message" name="message" required
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-litePink focus:bg-white focus:ring-1 focus:ring-litePink h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{Request::old('message')}}</textarea>
                    </div>
                </div>
                <div class="relative mb-4 p-2" required> {!! NoCaptcha::display() !!}
                    {{-- @if ($errors->has('g-recaptcha-response'))
                        <span class="py-2 mt-2 text-red-600 text-sm font-normal px-2"
                            role="alert">{{ $errors->first('g-recaptcha-response') }}</span>
                    @endif --}}
                </div>
                <div class="p-2 w-full">
                    <button
                        class="flex mx-auto items-center text-white bg-litePink border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">Post
                        a Comment<i class="fa-solid fa-angles-right ml-2"></i></button>
                </div>

            </form>
        </div>
    </div>
</section>