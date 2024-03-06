<x-guest-layout>
    <!-- Session Status -->
        <div class="container mx-auto py-20">
            <div class="flex flex-wrap justify-center items-center text-start gap-10 lg:gap-20">
                <div class="grup">
                    <dotlottie-player src="https://lottie.host/32acdecd-7114-48ee-8f83-65cb924cd06c/3f9Npg8cHE.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></dotlottie-player>
                </div>
                <div class="form">
                    <h1 class="font-bold text-4xl lg:text-5xl text-start login py-5" >WELCOME</h1>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="flex flex-col gap-5">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" p class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            {{-- PASS --}}
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                {{-- END PASS --}}

                            <div class="button w-full">
                                <button type="submit"  class="my-5 w-full flex justify-center bg-lime-500 text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-lime-600 shadow-lg cursor-pointer transition ease-in duration-300">
                    Login
                </button>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="Remember flex justify-center items-center gap-2 text-[12px] ">
                                    <input type="checkbox" class="rounded-lg" name="remember" id="remember_me">
                                    <div>{{ __('Remember me') }}</div>
                                </div>
                               
                            </div>
                            <div class="text-center text-[13px] ">Belum Punya Akun? &nbsp; <a href="/register" class="text-blue-500 font-bold">Registrasi</a></div>
                            <br />
                        </div>

                    </form>
                    <div class="text-center text-[13px] mt-4">
                        <a href="{{ route('password.request') }}" class="text-blue-500 font-bold">Forgot your password?</a>
                    </div>
                    
                </div>
            </div>
        </div>
</x-guest-layout>
