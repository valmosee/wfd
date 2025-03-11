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
                @include('item', ['image' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-04-image-card-01.jpg', 'alt' => 'Tall slender porcelain bottle with natural clay textured body and cork stopper.', 'title' => 'Earthen Bottle', 'price' => 48])

                @include('item', ['image' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-04-image-card-02.jpg', 'alt' => 'Olive drab green insulated bottle with flared screw lid and flat top.', 'title' => 'Nomad Tumbler', 'price' => 35])

                @include('item', ['image' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-04-image-card-03.jpg', 'alt' => 'Person using a pen to cross a task off a productivity paper card.', 'title' => 'Focus Paper Refill', 'price' => 89])

                @include('item', ['image' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-04-image-card-04.jpg', 'alt' => 'Hand holding black machined steel mechanical pencil with brass tip and top.', 'title' => 'Machined Mechanical Pencil', 'price' => 35])

                
            </div>

        </div>
    </div>


</body>
</html>