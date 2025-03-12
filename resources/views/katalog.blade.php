<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    @include('header')

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @include('item', [
                    'image' => asset('images/ANTAM25.jpg'), 
                    'alt' => 'Emas ANTAM 25gr', 
                    'title' => 'Emas ANTAM 25gr', 
                    'price' => '40.000.000'
                ])

                @include('item', [
                    'image' => asset('images/ANTAM10.jpg'), 
                    'alt' => 'Emas ANTAM 10gr', 
                    'title' => 'Emas ANTAM 10gr', 
                    'price' => '16.000.000'
                ])

                @include('item', [
                    'image' => asset('images/gelang_bulgari.jpg'), 
                    'alt' => 'gelang bulgari item kuning 20.1gr', 
                    'title' => 'Gelang bulgari hitam kuning 20.1gr', 
                    'price' => '26.150.000'
                ])

                @include('item', [
                    'image' => asset('images/anting_lavani.jpg'), 
                    'alt' => 'anting gantung 2 batu 12.9gr', 
                    'title' => 'Anting gantung 2 batu 12.9gr', 
                    'price' => '16.750.000'
                ])
            </div>

        </div>
    </div>


</body>
</html>