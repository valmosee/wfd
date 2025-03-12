<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    @include('header')

    <section class="py-24 relative">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                        <h2 class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">About Us</h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore excepturi est qui, voluptatem cumque numquam, nihil dolor itaque ipsam error cum, accusantium assumenda quo. Fugiat vitae quaerat odio porro harum.</p>
                    </div>
                </div>
                <img class="lg:mx-0 mx-auto h-full rounded-3xl object-cover" src="{{ asset('images/tiga_bintang_board.jpg') }}" alt="about Us image" />
            </div>
        </div>
    </section>
                                            
</body>
</html>