<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center text-3xl font-bold mt-5">Welcome to the Home Page</h1>

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Home - Style-Sync</title>
                    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                </head>
                <body>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between items-center">
                            <h1 class="text-3xl font-bold text-gray-900">STYLE-SYNC</h1>
                            <nav class="space-x-4">
                                <a href="#" class="text-gray-500 hover:text-gray-900">Home</a>
                                <a href="#" class="text-gray-500 hover:text-gray-900">About Us</a>
                                <a href="#" class="text-gray-500 hover:text-gray-900">Service Menu</a>
                                <a href="#" class="text-gray-500 hover:text-gray-900">Our Story</a>
                                <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Contact Us</a>
                            </nav>
                        </div>
                    </div>
                </header>

                <main>
                    <div class="relative bg-cover bg-center" style="background-image: url('/public/images/bg.jpg'); height: 600px;">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="relative flex flex-col items-center justify-center text-center text-white h-full">
                            <h2 class="text-5xl font-bold mb-4">Life isn’t perfect but your</h2>
                            <h2 class="text-5xl font-bold mb-4 text-pink-500">HAIR</h2>
                            <h2 class="text-5xl font-bold mb-4">can be.</h2>
                            <div class="space-x-4">
                                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Book Appointment</a>
                                <a href="/login" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Login or Sign up</a>
                            </div>
                        </div>
                    </div>

                    <section class="bg-gray-100 py-12">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h2 class="text-center text-4xl font-bold mb-8">Service Menu</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="/public/images/hair-icon.png" alt="Hair" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Hair</h3>
                                </div>
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="/public/images/makeup-icon.png" alt="Makeup" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Makeup</h3>
                                </div>
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="/public/images/manicure-icon.png" alt="Manicure Pedicure" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Manicure Pedicure</h3>
                                </div>
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="/public/images/skincare-icon.png" alt="Skincare" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Skincare</h3>
                                </div>
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="/public/images/facial-icon.png" alt="Facial" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Facial</h3>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="bg-beige py-12">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h2 class="text-center text-4xl font-bold mb-4">OUR SERVICES</h2>
                            <p class="text-center mb-8">Robiotyip is a su sevdello nosotrine ponira boclas virentes</p>
                            <div class="flex justify-center items-center space-x-4">
                                <button class="p-2 bg-gray-300 rounded-full">❮</button>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                                    <div class="bg-black p-6 rounded-lg text-white">
                                        <h3 class="text-xl font-bold">XXXXX X.X.X</h3>
                                    </div>
                                    <div class="bg-black p-6 rounded-lg text-white">
                                        <h3 class="text-xl font-bold">YYYYYYYY</h3>
                                    </div>
                                    <div class="bg-black p-6 rounded-lg text-white">
                                        <h3 class="text-xl font-bold">ZZZ ZZZZZZZ ZZZZZ</h3>
                                    </div>
                                    <div class="bg-black p-6 rounded-lg text-white">
                                        <h3 class="text-xl font-bold">PPPP PP</h3>
                                    </div>
                                </div>
                                <button class="p-2 bg-gray-300 rounded-full">❯</button>
                            </div>
                        </div>
                    </section>

                    <section class="bg-white py-12">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="flex justify-between items-center mb-8">
                                <div>
                                    <h2 class="text-4xl font-bold">Our Exclusive Products</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                                <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700">All Products</button>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="path-to-your-face-cleaner-image.png" alt="Face Cleaner" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Face Cleaner</h3>
                                    <p class="text-gray-500">$50.00</p>
                                    <div class="flex justify-center items-center">
                                        <div class="text-yellow-500">
                                            ★★★★★
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="path-to-your-olive-oil-image.png" alt="Olive Oil" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Olive Oil</h3>
                                    <p class="text-gray-500">$25.00</p>
                                    <div class="flex justify-center items-center">
                                        <div class="text-yellow-500">
                                            ★★★★★
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="path-to-your-skin-body-cleaner-image.png" alt="Skin & Body Cleaner" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Skin & Body Cleaner</h3>
                                    <p class="text-gray-500">$55.00</p>
                                    <div class="flex justify-center items-center">
                                        <div class="text-yellow-500">
                                            ★★★★★
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <img src="path-to-your-luxury-perfume-image.png" alt="Luxury Perfume" class="mx-auto mb-4" />
                                    <h3 class="text-xl font-bold">Luxury Perfume</h3>
                                    <p class="text-gray-500">$200.00</p>
                                    <div class="flex justify-center items-center">
                                        <div class="text-yellow-500">
                                            ★★★★★
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Feedback Section -->
                    <section class="bg-black text-white py-12">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h2 class="text-center text-4xl font-bold mb-4">Give Us Your Feedback</h2>
                            <p class="text-center mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                            <form class="max-w-3xl mx-auto">
                                <textarea class="w-full h-32 p-4 text-black rounded-lg mb-4" placeholder="Your feedback"></textarea>
                                <div class="flex justify-center">
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Send</button>
                                </div>
                            </form>
                            <div class="flex justify-center mt-8 space-x-4">
                                <div class="text-center">
                                    <p class="text-2xl font-bold">3213+</p>
                                    <p>Happy Clients</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-2xl font-bold">4324</p>
                                    <p>New Awards</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-2xl font-bold">5484</p>
                                    <p>Our Stories</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Branches Section -->
                    <section class="bg-gray-100 py-12">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h2 class="text-center text-4xl font-bold mb-4">Our Branches</h2>
                            <div class="flex justify-center items-center space-x-4">
                                <img src="/path-to-your-branch-image.jpg" alt="Our Branches" class="rounded-lg shadow-lg">
                            </div>
                        </div>
                    </section>

                    <!-- Footer Section -->
                    <footer class="bg-black text-white py-8">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <p class="mt-2">© 2024 STYLE-SYNC. All rights reserved.</p>
                                </div>
                                <div class="flex space-x-4">
                                    <a href="#" class="hover:text-gray-500">Privacy Policy</a>
                                    <a href="#" class="hover:text-gray-500">Terms of Use</a>
                                </div>
                            </div>
                        </div>
                    </footer>

                </main>
                </body>
                </html>
            </div>
        </div>
    </div>
</x-app-layout>

