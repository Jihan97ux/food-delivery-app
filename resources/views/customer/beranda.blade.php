<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="flex h-screen font-roboto">
<div class="flex w-full">
    @include('layout.sidebar')
    <main class="flex-1 bg-white flex flex-col p-10">
        @include('layout.navbar')
        <section class="flex flex-col space-y-4">
            <h1 class="text-4xl text-gray-700 p-15"><b>What would you like to order</b></h1>
            <div class="flex gap-6 mb-4">
                <button class="flex flex-col items-center bg-white text-gray-600 w-20 h-36 rounded-full shadow-md hover:bg-orange-500 hover:text-white transition duration-300">
                    <img src="{{ asset('foto/burger.JPG') }}" class="w-full h-auto mb-2 rounded-full p-1">
                    <h4 class="text-sm">Burger</h4>
                </button>
                <button class="flex flex-col items-center bg-white text-gray-600 w-20 h-36 rounded-full shadow-md hover:bg-orange-500 hover:text-white transition duration-300">
                    <img src="{{ asset('foto/donut.JPG') }}" class="w-full h-auto mb-2 rounded-full p-1">
                    <h4 class="text-sm">Donut</h4>
                </button>
                <button class="flex flex-col items-center bg-white text-gray-600 w-20 h-36 rounded-full shadow-md hover:bg-orange-500 hover:text-white transition duration-300">
                    <img src="{{ asset('foto/pizza.JPG') }}" class="w-full h-auto mb-2 rounded-full p-1">
                    <h4 class="text-sm">Pizza</h4>
                </button>
                <button class="flex flex-col items-center bg-white text-gray-600 w-20 h-36 rounded-full shadow-md hover:bg-orange-500 hover:text-white transition duration-300">
                    <img src="{{ asset('foto/mexican.JPG') }}" class="w-full h-auto mb-2 rounded-full p-1">
                    <h4 class="text-sm">Mexican</h4>
                </button>
                <button class="flex flex-col items-center bg-white text-gray-600 w-20 h-36 rounded-full shadow-md hover:bg-orange-500 hover:text-white transition duration-300">
                    <img src="{{ asset('foto/asian.JPG') }}" class="w-full h-auto mb-2 rounded-full p-1">
                    <h4 class="text-sm">Asian</h4>
                </button>
                <button class="flex flex-col items-center bg-white text-gray-600 w-20 h-36 rounded-full shadow-md hover:bg-orange-500 hover:text-white transition duration-300">
                    <img src="{{ asset('foto/baverages.JPG') }}" class="w-full h-auto mb-2 rounded-full p-1">
                    <h4 class="text-sm">Beverages</h4>
                </button>
            </div>
            <h2 class="text-2xl"><b>Featured Restaurant</b></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
                <div class="bg-orange-100 rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/kfc.JPG') }}" class="w-full h-auto">
                    <div class="p-4">
                        <h3 class="text-lg">KFC Kemanggisan</h3>
                        <p class="text-sm text-gray-500">15-25 mins</p>
                        <div class="flex gap-2 mt-2">
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">BURGER</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">CHICKEN</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">FAST FOOD</span>
                        </div>
                    </div>
                </div>
                <div class="bg-orange-100 rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/subway.JPG') }}" class="w-full h-auto">
                    <div class="p-4">
                        <h3 class="text-lg">Subway FX Sudirman</h3>
                        <p class="text-sm text-gray-500">35-45 mins</p>
                        <div class="flex gap-2 mt-2">
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">BURGER</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">CHICKEN</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">FAST FOOD</span>
                        </div>
                    </div>
                </div>
                <div class="bg-orange-100 rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/mcd.JPG') }}" class="w-full h-auto">
                    <div class="p-4">
                        <h3 class="text-lg">McDonalds</h3>
                        <p class="text-sm text-gray-500">10-15 mins</p>
                        <div class="flex gap-2 mt-2">
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">BURGER</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">CHICKEN</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">FAST FOOD</span>
                        </div>
                    </div>
                </div>
                <div class="bg-orange-100 rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/burgerking.JPG') }}" class="w-full h-auto">
                    <div class="p-4">
                        <h3 class="text-lg">Burger King</h3>
                        <p class="text-sm text-gray-500">15-20 mins</p>
                        <div class="flex gap-2 mt-2">
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">BURGER</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">CHICKEN</span>
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">FAST FOOD</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>
