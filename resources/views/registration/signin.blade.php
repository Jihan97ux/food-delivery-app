<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex justify-center items-center h-screen">
    <div class="container flex justify-center items-center px-4">
        <div class="bg-white rounded-lg shadow-lg p-8 w-96 text-center">
            <h2 class="text-orange-500 text-xl font-semibold mb-6">Welcome to Food For Everyone!</h2>
            <form action='{{ url('signin') }}' method='POST'>
                @csrf
                <div class="mb-4">
                <input type="email" placeholder="E-mail" name='email' value="{{ old('email') }}" id="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
                @if ($errors->has('email'))
                    <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                @endif
                </div>
                <div class="mb-4">
                <input type="password" placeholder="Password" name='password' id="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
                @if ($errors->has('password'))
                    <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                @endif
                </div>
                <p class="text-sm text-gray-600 mb-4"><a href="{{ url('role') }}" class="text-orange-500 hover:underline">forgot password?</a></p>
                <p class="text-sm text-gray-600 mb-4"><a href="{{ url('role') }}" class="text-orange-500 hover:underline">SIGN UP</a></p>
                <button type="submit"
                    class="w-full bg-orange-500 text-white py-2 rounded-full font-medium hover:bg-orange-600 transition">
                    SIGN IN
                </button>
                <p class="text-sm text-gray-600 mt-4">Sign In with</p>
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
