<x-app-layout>
    <div class="container px-10 mx-auto">

        <section class="py-10">
            <div class="banner flex flex-wrap justify-center items-center gap-x-44">
                <div class="content-text flex flex-col gap-3">
                    <h1 class="text-4xl w-80" style="font-family: 'Ubuntu', sans-serif;">
                        <span class="text-lime-500" style="font-style: italic;">Upload your best</span> pictures on our website.
                    </h1>
                    <p>Upload your coolest picture and get the most likes</p>
                    
                    <div class="grup-button">
                        <button onclick="window.location.href='/upload'" class="bg-lime-500 hover:bg-lime-300 delay-75 text-white font-semibold px-10 py-3 rounded-full" >Upload Image</button>
                    </div>
                </div>
                <div class="content-poto lg:py-0 py-2">
                    <img src="{{asset('assets/image/wg1.png')}}" class="w-96" alt="astronot">
                </div>
            </div>
        </section>
        <section class="container body mx-auto flex flex-col justify-center items-center">
            <div class="header">
                <div class="grup-button flex jusify-center-items-center gap-10">
                    <a href="{{ route('image') }}" class="bg-lime-500 text-white px-5 py-2 rounded-lg font-semibold">Image</a>
                    
                </div>
            </div>
            <div class="mx-auto py-10">
                @yield('data')
            </div>
        </section>

    </div>
</x-app-layout>


