<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Lover's Recipe</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <header class="bg-white py-4">
        <nav>
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <a class="font-bold text-xl text-gray-800" href="#">
                    <img src="asset/logo.png" alt="Logo Image" class="mx-auto mb-4" />
                </a>
                <div class="hidden md:flex space-x-6">
                    <a class="text-gray-800 hover:text-gray-600" href="#">Recipes</a>
                    <a class="text-gray-800 hover:text-gray-600" href="#">Learn/How-to</a>
                    <a class="text-gray-800 hover:text-gray-600" href="#">Seasonal Sensations</a>
                    <a class="text-gray-800 hover:text-gray-600" href="#">Shop</a>
                </div>

                <button class="bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800">
                    Subscribe
                </button>
            </div>
        </nav>
    </header>

    <main class="container mx-auto">
        <div class="relative">
            <img src="asset/background1.jpg" alt="Delicious dishes laid out on a table" class="w-full h-100px" />
            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center" style="background-color: rgba(255, 255, 255, 0.5)">
                <div class="text-center">
                    <h1 class="text-3xl text-gray-800 font-bold mb-2">
                        9 Delicious Dishes for Food Lovers
                    </h1>
                    <p class="text-gray-600 mb-4">
                        Ex has minim elitr intellegat. Mea aeterno elefiend
                        cotidieque ad, nam no suscipit quaerendum. At nom
                        minimum ponderum est, eu etiam animal pro.
                    </p>
                    <a href="#" class="inline-block bg-orange-500 text-white px-6 py-2 font-semibold rounded hover:bg-orange-600">Explore recipes</a>
                </div>
            </div>
        </div>

        <section class="my-16">
            <h2 class="text-center text-3xl font-bold mb-10">
                Check our
                <span style="color: orange">Shop</span>
            </h2>

            <div class="flex justify-center gap-10 flex-wrap">
                <div class="flex flex-col items-center justify-center mb-4">
                    <div class="w-32 h-32 rounded-full bg-cover bg-center mb-4" style="
                                background-image: url('asset/shop/product-1.jpg');
                            "></div>
                    <p class="text-center font-bold text-xl">
                        Your Text Here
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center mb-4">
                    <div class="w-32 h-32 rounded-full bg-cover bg-center mb-4" style="
                                background-image: url('asset/shop/product-2.jpg');
                            "></div>
                    <p class="text-center font-bold text-xl">
                        Your Text Here
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center mb-4">
                    <div class="w-32 h-32 rounded-full bg-cover bg-center mb-4" style="
                                background-image: url('asset/shop/product-3.jpg');
                            "></div>
                    <p class="text-center font-bold text-xl">
                        Your Text Here
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center mb-4">
                    <div class="w-32 h-32 rounded-full bg-cover bg-center mb-4" style="
                                background-image: url('asset/shop/product-4.jpg');
                            "></div>
                    <p class="text-center font-bold text-xl">
                        Your Text Here
                    </p>
                </div>

                <div class="flex flex-col items-center justify-center mb-4">
                    <div class="w-32 h-32 rounded-full bg-cover bg-center mb-4" style="
                                background-image: url('asset/shop/product-5.jpg');
                            "></div>
                    <p class="text-center font-bold text-xl">
                        Your Text Here
                    </p>
                </div>
            </div>
        </section>

        <section class="mb-16">
            <h2 class="text-center text-3xl font-bold mb-10">
                Trendy
                <span style="color: orange">Recipesop</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <!-- Replace with Unsplash images -->
                <div class="rounded overflow-hidden shadow-lg">
                    <img src="asset/shop/product-5.jpg" alt="Deskripsi Gambar" class="w-full h-65 object-cover" />
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            Chicken Fajita
                        </div>
                        <p class="text-gray-700 text-base">
                            Ingredients: Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="rounded overflow-hidden shadow-lg">
                    <img src="asset/shop/product-5.jpg" alt="Deskripsi Gambar" class="w-full h-65 object-cover" />
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            Air fryer chicken
                        </div>
                        <p class="text-gray-700 text-base">
                            Ingredients: Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="rounded overflow-hidden shadow-lg">
                    <img src="asset/shop/product-5.jpg" alt="Deskripsi Gambar" class="w-full h-65 object-cover" />
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            Crispy baked
                        </div>
                        <p class="text-gray-700 text-base">
                            Ingredients: Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-900 text-white py-40">
        <div class="container mx-auto px-4">
            <div class="w-full md:w-auto text-center">
                <img src="asset/footer-logo.png" alt="Logo Image" class="mx-auto mb-4" />

                <p class="text-white text-center mb-4">
                    Lorem ipsum dolor sit amet dipiscing,<br />
                    consectetur adipiscing elit.
                </p>
                <div class="flex justify-center gap-4 mb-4 py-5 pb-5">
                    <a href="#" class="bg-orange-400 hover:bg-orange-500 text-white rounded-full w-10 h-10 flex items-center justify-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-orange-400 hover:bg-orange-500 text-white rounded-full w-10 h-10 flex items-center justify-center">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="bg-orange-400 hover:bg-orange-500 text-white rounded-full w-10 h-10 flex items-center justify-center">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="bg-orange-400 hover:bg-orange-500 text-white rounded-full w-10 h-10 flex items-center justify-center">
                        <i class="fas fa-rss"></i>
                    </a>
                </div>
                <div class="flex justify-center gap-4 my-4">
                    <a href="#" class="text-white hover:text-orange-400">Recipes</a>
                    <a href="#" class="text-white hover:text-orange-400">Learn/How-to</a>
                    <a href="#" class="text-white hover:text-orange-400">Seasonal Sensations</a>
                    <a href="#" class="text-white hover:text-orange-400">Shop</a>
                </div>
            </div>
            <div class="container mx-auto md:px-80 mt-5">
                <div class="flex flex-wrap justify-between items-center text-center md:text-left">
                    <div class="w-full md:w-auto mb-4 md:mb-0">
                        <p>&copy;Copyright 2022</p>
                    </div>
                    <div class="w-full md:flex md:justify-end md:w-auto text-center">
                        <a href="#" class="text-white hover:text-orange-400 mr-4">Terms and Condition</a>
                        <a href="#" class="text-white hover:text-orange-400">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>