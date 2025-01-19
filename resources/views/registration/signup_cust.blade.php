<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex justify-center items-center h-screen">
    <div class="container flex justify-center items-center px-4">
        <div class="bg-white rounded-lg shadow-lg p-8 w-96 text-center">
            <h2 class="text-orange-500 text-xl font-semibold mb-6">Welcome to Food For Everyone!</h2>
            @include('komponen.pesan')
            <form action="{{ url('customer_store') }}" method="POST">
                @csrf
                <div class="flex justify-between gap-4 mb-4">
                    <input type="text" placeholder="First Name" name='nama_depan' value="{{ Session::get('nama_depan') }}" id="nama_depan"
                        class="w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400">
                    <input type="text" placeholder="Last Name" name='nama_belakang' value="{{ Session::get('nama_belakang') }}" id="nama_belakang"
                        class="w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400">
                </div>
                <input type="date" name='tanggal_lahir' value="{{ Session::get('tanggal_lahir') }}" id="tanggal_lahir"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
                <input type="email" placeholder="E-mail" name='email' value="{{ Session::get('email') }}" id="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
                <input type="password" placeholder="Password" name='password' value="{{ Session::get('password') }}" id="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
                <p class="text-sm text-gray-600 mb-4">
                    Have an account? <a href="{{ url('/') }}" class="text-orange-500 hover:underline">Sign In</a>
                </p>
                <button type="submit" name="submit"
                    class="w-full bg-orange-500 text-white py-2 rounded-full font-medium hover:bg-orange-600 transition">
                    SIGN UP
                </button>
                <p class="text-sm text-gray-600 mt-4">Sign Up with</p>
                <div class="flex justify-between mt-4">
                    <button type="button"
                        class="w-1/2 bg-blue-600 text-white py-2 rounded-full mr-2 hover:opacity-90 transition">
                        Facebook
                    </button>
                    <button type="button"
                        class="w-1/2 bg-red-600 text-white py-2 rounded-full ml-2 hover:opacity-90 transition">
                        Google
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
