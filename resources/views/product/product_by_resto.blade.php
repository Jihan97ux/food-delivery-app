<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="flex h-screen font-roboto">
<div class="flex w-full">
    @include('layout.sidebar')
    <main class="flex-1 bg-white p-8">
        @include('layout.navbar')
        <section class="main-section flex flex-col pl-8 bg-fixed bg-no-repeat bg-right-top" style="background-image: url('foto/background.JPG'); background-size: auto 110%;">
            <div class="restaurant-temp grid gap-1 md:grid-cols-2 mb-10">
                <img src="{{ asset('foto/mcd1.JPG') }}" style="width: 70%; height: auto;" class="rounded-2xl shadow-md">
                <div class="restaurant-info flex flex-col p-5">
                    <h3 class="mb-0">McDonalds</h3>
                    <p class="mt-1 text-sm text-gray-500">10-15 mins</p>
                    <div class="tags flex flex-wrap gap-2 mt-2">
                        <span class="bg-orange-300/50 text-black/80 px-2 py-1 rounded text-xs">BURGER</span>
                        <span class="bg-orange-300/50 text-black/80 px-2 py-1 rounded text-xs">CHICKEN</span>
                        <span class="bg-orange-300/50 text-black/80 px-2 py-1 rounded text-xs">FAST FOOD</span>
                    </div>
                </div>
            </div>
            <h4 class="text-[22px] text-black/80"><b>Suggestion</b></h4>
            <div class="foods grid gap-5 md:grid-cols-2 lg:grid-cols-4 mt-5">
                <!-- Food Card 1 -->
                <div class="food-card bg-orange-100 rounded-2xl shadow-md overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/chicken_burger.JPG') }}" class="w-full h-auto">
                    <div class="food-info p-5">
                        <div class="info-harga flex justify-between">
                            <h3 class="text-sm">Chicken Burger</h3>
                            <p class="text-sm">Rp.25.000</p>
                        </div>
                        <p class="info-stok text-xs text-gray-500 mt-2">stok : 30</p>
                    </div>
                </div>
                <!-- Food Card 2 -->
                <div class="food-card bg-orange-100 rounded-2xl shadow-md overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/french_fries.JPG') }}" class="w-full h-auto">
                    <div class="food-info p-5">
                        <div class="info-harga flex justify-between">
                            <h3 class="text-sm">Fried Fries</h3>
                            <p class="text-sm">Rp.45.000</p>
                        </div>
                        <p class="info-stok text-xs text-gray-500 mt-2">stok : 40</p>
                    </div>
                </div>
                <!-- Food Card 3 -->
                <div class="food-card bg-orange-100 rounded-2xl shadow-md overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/happy_meal.JPG') }}" class="w-full h-auto">
                    <div class="food-info p-5">
                        <div class="info-harga flex justify-between">
                            <h3 class="text-sm">Happy Meal</h3>
                            <p class="text-sm">Rp.25.000</p>
                        </div>
                        <p class="info-stok text-xs text-gray-500 mt-2">stok : 26</p>
                    </div>
                </div>
                <!-- Food Card 4 -->
                <div class="food-card bg-orange-100 rounded-2xl shadow-md overflow-hidden flex flex-col">
                    <img src="{{ asset('foto/happy_meal.JPG') }}" class="w-full h-auto">
                    <div class="food-info p-5">
                        <div class="info-harga flex justify-between">
                            <h3 class="text-sm">Fried Fries</h3>
                            <p class="text-sm">Rp.45.000</p>
                        </div>
                        <p class="info-stok text-xs text-gray-500 mt-2">stok : 40</p>
                    </div>
                </div>
            </div>
        </section>        
    </main>
</div>
</body>
</html>
