<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROFILE</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2">
                <img src="{{asset('assets/image/wg1.png')}}" width="40" alt="logo" />
                <h1 class="font-bold text-lg">WEBSITE IMAGE</h1>
            </a>

            <ul class="hidden lg:flex items-center space-x-6">
                <li>
                    <a href="/dashboard" class="text-gray-700 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15l-5-5 5-5m0 5h10a6 6 0 0 1 0 12H9"></path>
                        </svg>
                        Kembali
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 justify-items-center">
        
            <!-- Profile Card -->
            <div class="bg-white mx-auto w-full relative left-96 rounded-xl shadow-lg p-8">
                <div class="">
                    <img src="{{asset('assets/image/wg1.png')}}" width="30" alt="logo" />
                    <div>
                        <p class="font-semibold text-lg">Name</p>
                        <p class="text-gray-600">{{$user->namalengkap}}</p>
                    </div>
                </div>

                <div class="mb-6">
                    <p class="font-semibold text-lg">Email Akun</p>
                    <p class="text-gray-600">{{$user->email}}</p>
                </div>

                <div class="flex justify-between">
                    <div>
                        <p class="font-semibold text-sm">Alamat</p>
                        <p class="text-gray-600">{{$user->alamat}}</p>
                    </div>
                    <div>
                        <p class="font-semibold text-sm">Tanggal Akun</p>
                        <p class="text-gray-600">{{date('Y-m-d')}}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <form  action="{{ route('profile.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                        
                        <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Delete Account</button>
                    </form>
                    </div>
                    <!-- Modal -->
<div id="deleteAccountModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <h2 class="text-lg font-semibold mb-4">Confirm Account Deletion</h2>
            <p>Please enter your password to confirm account deletion.</p>
            <form id="deleteAccountForm" class="mt-4">
                <input type="password" name="password" placeholder="Enter your password" class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-400">
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Delete</button>
                    <button type="button" id="cancelDeleteBtn" class="ml-2 px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteAccountBtn = document.getElementById('deleteAccountBtn');
            const deleteAccountModal = document.getElementById('deleteAccountModal');
            const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
            const deleteAccountForm = document.getElementById('deleteAccountForm');
    
            deleteAccountBtn.addEventListener('click', function () {
                deleteAccountModal.classList.remove('hidden');
            });
    
            cancelDeleteBtn.addEventListener('click', function () {
                deleteAccountModal.classList.add('hidden');
            });
    
            deleteAccountForm.addEventListener('submit', function (event) {
                event.preventDefault();
                // Send password to server for verification and account deletion
                const formData = new FormData(deleteAccountForm);
                const password = formData.get('password');
                // Add logic to send password and handle account deletion on server
                // Example: fetch('/delete-account', { method: 'POST', body: formData })
            });
        });
    </script>
    
</body>

</html>
