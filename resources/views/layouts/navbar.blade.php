<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<nav class="bg-white border-gray-200 dark:bg-lime-950">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('assets/image/wg1.png')}}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" style="font-family: 'contibute', sans-serif;">WEBSITE GALLERY</span>

        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <?php if(auth()->check()): ?>
                <a href="/" class="text-sm text-white-600 dark:text-white hover:underline">Home</a>
                <a href="dashboard" class="text-sm text-white-600 dark:text-white hover:underline">Dashboard</a>
                <button type="button" class="flex rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/image/joko.jpg')}}">
                  </button>
                  <!-- Dropdown menu -->
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    
                    <ul class="py-2" aria-labelledby="user-menu-button">
                      
                      
                      <li>
                        <a href="/akun" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-bla">Profile</a>
                      </li>
                      <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <li>
                        <a href="route('log out')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="event.preventDefault();
                        this.closest('form').submit();">{{ __('Log Out') }}</a>
                      </li>
                      </form>
                    @csrf
        
                </form>
            <?php else: ?>
                <a href="/" class="text-sm text-white-600 dark:text-white hover:underline">Home</a>
                <a href="login" class="block w-full select-none rounded-lg bg-lime-500 py-3 px-4 text-center align-middle font-sans text-sm font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

</body>
</html>
