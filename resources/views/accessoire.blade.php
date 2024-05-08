<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel Shop') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ url('storage/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigationfront')

                <section class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
                    <header class="font-bold py-4">
                        <h2 class="uppercase text-4xl md:text-5xl">{{ $products["titre"] }}</h2>
                    </header>
                    <div class="products md:grid md:gap-4 md:grid-cols-2 lg:grid-cols-4">
                        @foreach($products["data"] as $product)
                            <div class="product__card bg-white p-5 hover:cursor-pointer hover:shadow-lg">
                                <img src="{{ url('storage/' . $product->image_path) }}" alt="">
                                <div>
                                    <h5 class="font-bold">{{ $product->name }}</h5>
                                    <p class="py-5">{{ $product->description }}</p>
                                </div>
                                <div class="text-right font-bold">{{ number_format($product->price, 0, ',', ' ') }} F CFA</div>
                            </div>
                        @endforeach
                    </div>
                
                </section>



           







            @include('layouts.footer')
        </div>
    </body>
</html>
