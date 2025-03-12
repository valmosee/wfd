<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bintang</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    @include('header')

    <div class="relative isolate overflow-hidden w-full min-h-[calc(100vh-5.5rem)] bg-cover bg-center bg-no-repeat py-24 sm:py-32">
        <img src="{{ asset('images/homepage_image.jpg') }}" 
            alt="" 
            class="absolute inset-0 -z-10 w-full h-full object-cover">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 bg-gray-900/50">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Welcome to Toko Tiga Bingtang</h2>
                <p class="mt-8 text-lg font-medium text-pretty sm:text-xl/8 text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque impedit ipsa libero unde accusantium aliquid quibusdam deleniti totam adipisci sit eum, voluptatum recusandae tempore quidem doloremque, aperiam autem quo. Molestiae!</p>
            </div>
        
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-300">Open since</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white">2004</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-300">Shop open time</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white">11:00 - 17:00</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-300">Location</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white">Pasar Atom Mall</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</body>
</html>