<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjelajah Alam</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="navigation-bg fixed w-full z-50">
        <div class="container mx-auto px-1 py-0.5">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('img\logo.png') }}" alt="Pejelajah Alam logo" class="h-8 mr-2">
                    <span class="text-base font-bold text-teal-500">Penjelajah Alam</span>
                </div>
                <div class="hidden md:flex space-x-8 text-base font-bold">
                    <a href="#home" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Home</a>
                    <a href="#about" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">About</a>
                    <a href="#activities" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Activities</a>
                    <a href="#gallery" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Gallery</a>
                    <a href="#contact" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Contact</a>
                    <a href="#join" class="hidden md:block join-btn bg-teal-600 hover:bg-teal-700 text-black px-3 py-1.5 rounded-lg font-bold text-base">Join Us</a>
                    <button class="md:hidden focus:outline-none nav-link">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-white pt-32 pb-20">
        <div class="hero-overlay absolute inset-0"></div>
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center relative z-10">
            <div class="md:w-1/2 md:mr-8 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-10">Jelajahi Alam Dengan Semangat</h1>
                <p class="text-xl mb-8">Bergabunglah dengan komunitas pecinta alam terbuka kami yang berbagi pengetahuan, petualangan, dan upaya konservasi di seluruh lanskap indah Indonesia.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#join" class="bg-black text-teal-700 hover:bg-white-100 px-6 py-3 rounded-lg font-semibold text-center">Menjadi Member</a>
                    <a href="#activities" class="border-2 border-white hover:bg-white hover:bg-opacity-20 px-6 py-3 rounded-lg font-semibold text-center">Lihat Aktivitas</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-end pr-20">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/48c11140-e13e-4f90-9276-f87fd7d5d042.png" 
                     alt="Sekelompok pendaki saat matahari terbit di puncak gunung dengan ransel dan tongkat trekking" 
                     class="rounded-lg shadow-xl animate-float">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
            </div>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-16">
                    <img src="https://th.bing.com/th/id/OIP.KUBVtO9B1RqUwzE0jaxgIwHaE8?w=229&h=180&c=7&r=0&o=7&dpr=1.1&pid=1.7&rm=3" alt="Ecovolunteers planting trees in a rainforest conservation project" class="rounded-lg h-80 w-full object-cover overflow-hidden">
                </div>
                <div class="md:w-1/2">
                    <!-- <h3 class="text-2xl font-semibold text-gray-800 mb-4">Connecting People With Nature</h3> -->
                    <p class="text-gray-600 mb-6">Web Penjelajah Alam ini didirikan dengan misi untuk mempertemukan para pencinta alam yang ingin menjelajahi, mempelajari, dan melindungi keindahan alam Indonesia. Kami menyelenggarakan kegiatan hiking, berkemah, dan konservasi secara berkala di berbagai lokasi.</p>
                    <p class="text-gray-600 mb-6">Komunitas kami terdiri dari orang-orang dari berbagai latar belakang yang memiliki minat yang sama terhadap alam. Dari pemula hingga pendaki gunung berpengalaman, semua orang dipersilakan bergabung.</p>
                    <div class="flex items-center space-x-4 mt-8">
                        <div class="bg-teal-50 p-4 rounded-lg">
                            <p class="text-teal-700 font-bold text-2xl">500+</p>
                            <p class="text-gray-600">Anggota</p>
                        </div>
                        <div class="bg-teal-50 p-4 rounded-lg">
                            <p class="text-teal-700 font-bold text-2xl">120+</p>
                            <p class="text-gray-600">Aktivitas</p>
                        </div>
                        <!-- <div class="bg-teal-50 p-4 rounded-lg">
                            <p class="text-teal-700 font-bold text-2xl">15</p>
                            <p class="text-gray-600">Conservation Projects</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-4">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Kegiatan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Dari pendakian akhir pekan hingga ekspedisi beberapa hari, kami menawarkan aktivitas untuk semua tingkat keterampilan.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-md feature-card transition duration-300">
                    <div class="h-40 mb-4 overflow-hidden rounded-lg">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2b4be112-2885-4765-b4df-b583b81b3cf8.png" alt="Group hiking" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Pendakian Akhir Minggu</h3>
                    <p class="text-gray-600 mb-4">Bergabunglah dalam pendakian akhir pekan rutin kami...</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 learn-more-btn"
                    data-title="Pendakian Akhir Minggu"
                    data-desc="Nikmati pengalaman mendaki di akhir pekan bersama komunitas kami. Rute mencakup pegunungan lokal, air terjun tersembunyi, dan area alam yang belum banyak dijamah. Cocok untuk pemula maupun pendaki berpengalaman."
                    data-img="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2b4be112-2885-4765-b4df-b583b81b3cf8.png">Learn more →</a>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md feature-card transition duration-300">
                    <div class="h-40 mb-4 overflow-hidden rounded-lg">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bb390ea3-4277-4066-b6fb-3d134b6f899d.png" alt="Camping scene" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Camping Hutan Belantara</h3>
                    <p class="text-gray-600 mb-4">Pelajari keterampilan bertahan hidup dan nikmati berkemah...</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 learn-more-btn"
                    data-title="Camping Hutan Belantara"
                    data-desc="Pelajari keterampilan bertahan hidup di alam liar dan habiskan malam di bawah bintang-bintang bersama pemandu berpengalaman. Kegiatan ini cocok bagi kamu yang ingin melepas penat dan menyatu dengan alam."
                    data-img="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bb390ea3-4277-4066-b6fb-3d134b6f899d.png">Learn more →</a>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md feature-card transition duration-300">
                    <div class="h-40 mb-4 overflow-hidden rounded-lg">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6e0bb3c6-1ed9-42cd-a417-0b315a85d43e.png" alt="Beach cleanup" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Proyek Konservasi</h3>
                    <p class="text-gray-600 mb-4">Berpartisipasilah dalam upaya konservasi kami...</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 learn-more-btn"
                    data-title="Proyek Konservasi"
                    data-desc="Bergabunglah dalam proyek pelestarian lingkungan seperti pembersihan pantai, penanaman pohon, dan monitoring satwa liar. Jadilah bagian dari perubahan nyata untuk bumi yang lebih baik."
                    data-img="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6e0bb3c6-1ed9-42cd-a417-0b315a85d43e.png">Learn more →</a>
                </div>
            </div>
        </div>
    </section>

    <div id="activityModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 max-w-xl rounded-xl shadow-xl relative">
            <button id="activityModalClose" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl font-bold">&times;</button>
            <img id="activityModalImg" src="" alt="" class="w-full h-64 object-cover rounded-lg mb-4">
            <h3 id="activityModalTitle" class="text-2xl font-bold text-gray-800 mb-2"></h3>
            <p id="activityModalDesc" class="text-gray-700 mb-4"></p>
            <button onclick="closeActivityModal()" class="mt-2 px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-700">Kembali</button>
        </div>
    </div>

    <!-- Gallery Section -->
    <section id="gallery" class="py-24 bg-white">
        <div class="container mx-auto px-8">
            <div class="text-center mb-4">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Petualangan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Jelajahi momen dari ekspedisi dan acara komunitas kami.</p>
                <!-- <div class="w-16 h-1 bg-teal-600 mx-auto"></div> -->
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ff6d5e4e-b11a-460e-ba78-f9358611c34e.png" alt="Sunrise over Mount Bromo" data-location="Gunung Bromo, Jawa Timur" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ee285ca4-742a-4589-9fc0-61887c86b68b.png" alt="Pendaki melintasi jembatan bambu di atas sungai hutan" data-location="Gunung Munara, Jawa Barat" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/890fcb0a-40b3-47e1-af13-0ccaf09f0787.png" alt="Bunga liar mekar sepenuhnya di sepanjang jalur pegunungan yang tinggi" data-location="Gunung Sumbing, Jawa Tengah" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cdb9ba6b-26c0-4a49-8496-65ae1b4162bd.png" alt="Anggota komunitas belajar mengikat simpul panjat" data-location="Tebing Gunung Parang" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/48d25d53-d364-48ff-8f5f-6fbb8a536c61.png" alt="Kegiatan membangun tim dengan api unggun di mana peserta berbagi cerita" data-location="Hutan Pinus, Songgon, Jawa Timur" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ac17a25e-c0e2-41b9-995e-781048f8c769.png" alt="Air terjun yang menakjubkan di Jawa Tengah dengan pendaki yang mengambil foto" data-location="Curug Tumpak Sewu, Kendal, Jawa Tengah" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7e53c54d-f934-40ae-889b-952f2a382ab8.png" alt="Pemandu hutan mengajarkan tentang flora dan fauna lokal" data-location="Alas Purwo, Jawa Timur" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e8fa8e08-3e53-49e2-a78f-ddce5dcafad1.png" alt="Foto grup di puncak Gunung Rinjani dengan pose kemenangan" data-location="Gunung Rinjani, Pulau Lombok, Nusa Tenggara Barat" class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
            </div>
            <!-- <div class="text-center mt-10">
                <a href="#more-gallery"class="inline-block bg-teal-600 hover:bg-teal-700 text-black px-6 py-3 rounded-lg font-medium shadow-lg transition duration-300">
                View More Photos</a>
            </div> -->
        </div>

        <div id="imageModal"
            class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-50 hidden justify-center items-center px-4">
            <div class="bg-white max-w-5xl w-full rounded-xl shadow-lg flex flex-col md:flex-row overflow-hidden relative">
                <button onclick="closeModal()"
                    class="absolute top-3 right-3 text-gray-600 text-3xl font-bold z-50 hover:text-teal-600">
                &times;
            </button>
            <img id="modalImage" src="" alt="" class="md:w-1/2 w-full h-auto object-cover">
            <div class="p-6 md:w-1/2 flex flex-col justify-center">
                <h3 id="modalTitle" class="text-xl font-semibold text-gray-800 mb-2">Kegiatan</h3>
                <p id="modalLocation" class="text-gray-600">Lokasi</p>
            </div>
            </div>
        </div>
    </section>

    <!-- Join Section -->
    <section id="join" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Bergabunglah dengan Komunitas Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Siap memulai petualangan Anda? Daftar hari ini dan dapatkan akses ke semua aktivitas dan manfaat komunitas kami.</p>
                <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
            </div>
            <div class="max-w-xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-8">
                <form action="#" method="POST">
                    <!-- Form Inputs -->
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">No. WhatsApp</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                    </div>
                    <div class="mb-6">
                        <label for="experience" class="block text-gray-700 font-medium mb-2">Tingkat Pengalaman Luar Ruangan</label>
                        <select id="experience" name="experience" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                            <option value="beginner">Pemula</option>
                            <option value="intermediate">Menengah</option>
                            <option value="advanced">Mahir</option>
                        </select>
                    </div>
                    <div class="mb-6">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="newsletter" name="newsletter" type="checkbox" class="focus:ring-teal-500 h-4 w-4 text-teal-600 border-gray-300 rounded" checked>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="newsletter" class="font-medium text-gray-700">Langganan newsletter kami untuk pembaruan dan acara</label>
                        </div>
                    </div>
                    </div>
                    <button href="https://chat.whatsapp.com/CxxUlIogc6IHQOtTh1Cys6?mode=ac_c" target="_blank" type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                    Join Sekarang
                    </button>
                </form>

                <!-- WhatsApp Group Button -->
                <!-- <div class="mt-6 text-center">
                    <a href="https://chat.whatsapp.com/CxxUlIogc6IHQOtTh1Cys6?mode=ac_c" target="_blank" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                        join
                    </a>
                </div> -->
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Testimoni Anggota</h2>
                <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7b2f1bdc-c98f-45a3-8164-683b7532c1e4.png" alt="Portrait of Andi, hiking enthusiast from Jakarta" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Andi Wijaya</h4>
                            <p class="text-sm text-gray-600">Anggota 2018</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Melalui Penjelajah Alam, saya menemukan banyak tempat indah yang tidak pernah saya ketahui keberadaannya. Komunitasnya ramah dan penyelenggara menjadikan keselamatan sebagai prioritas utama."</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a6f20c33-a301-486b-9577-192b92b5290b.png" alt="Portrait of Rina, conservation volunteer from Bandung" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Rina Dewi</h4>
                            <p class="text-sm text-gray-600">Anggota 2019</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Sebagai pemula, saya merasa gugup pada awalnya, tetapi para anggota yang berpengalaman sangat mendukung. Sekarang saya telah mendaki 5 gunung dan berkontribusi pada 3 proyek konservasi!"</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/31926da9-a12f-4c8d-b9e5-88c67f14f859.png" alt="Portrait of Agung, outdoor photography hobbyist from Bali" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Agung Putra</h4>
                            <p class="text-sm text-gray-600">Anggota 2017</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Berbagi pengetahuan dalam komunitas ini luar biasa. Saya telah belajar banyak tentang fotografi luar ruangan, navigasi, dan pertolongan pertama di alam liar."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Punya pertanyaan tentang kegiatan kami atau ingin bermitra dengan kami? Hubungi kami!</p>
                    <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Kantor Pusat Kami</h3>
                        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                            <div class="flex items-start mb-4">
                                <svg class="w-6 h-6 text-teal-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-700">Gedung Adventure, Lt. 3</p>
                                    <p class="text-gray-600">Jl. Gunung Raung No. 45, Banyuwangi</p>
                                </div>
                            </div>
                            <div class="flex items-start mb-4">
                                <svg class="w-6 h-6 text-teal-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-gray-600">info@penjelajahalam.id</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-teal-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <p class="text-gray-600">+62 831 3457 7627</p>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 mt-8">Hubungi Kami</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="igGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#feda75" />
                                        <stop offset="30%" stop-color="#fa7e1e" />
                                        <stop offset="60%" stop-color="#d62976" />
                                        <stop offset="80%" stop-color="#962fbf" />
                                        <stop offset="100%" stop-color="#4f5bd5" />
                                    </linearGradient>
                                    </defs>
                                    <path fill="url(#igGradient)" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                                </svg>
                            </a>
                            <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                                </svg>
                            </a>
                            <a href="https://wa.me/6283134577627" target="_blank" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.77 11.77 0 0012 0C5.37 0 .02 5.35 0 11.97a11.93 11.93 0 001.66 6.1L0 24l6.12-1.6a11.89 11.89 0 005.87 1.5h.01c6.63 0 12-5.37 12-12 0-3.21-1.26-6.23-3.48-8.52zM12 22c-1.67 0-3.29-.42-4.71-1.21l-.34-.2-3.63.95.97-3.53-.22-.36a9.84 9.84 0 01-1.55-5.24c0-5.43 4.42-9.85 9.85-9.85 2.63 0 5.1 1.02 6.96 2.88A9.8 9.8 0 0122 12c0 5.43-4.42 9.85-9.85 9.85z"/>
                                <path d="M17.52 14.87c-.3-.15-1.77-.87-2.05-.97-.27-.1-.47-.15-.67.15s-.77.97-.95 1.17c-.17.2-.35.22-.64.07a8.02 8.02 0 01-2.35-1.45 8.82 8.82 0 01-1.62-2.02c-.17-.3 0-.46.13-.6.14-.14.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.37-.02-.52s-.67-1.61-.92-2.2c-.24-.6-.48-.5-.67-.5l-.57-.01c-.2 0-.52.07-.79.35s-1.04 1.02-1.04 2.48 1.06 2.88 1.21 3.07c.15.2 2.09 3.2 5.08 4.48.71.31 1.27.5 1.7.64.71.23 1.36.2 1.87.12.57-.08 1.77-.72 2.03-1.41.25-.69.25-1.28.18-1.41-.07-.13-.27-.2-.57-.35z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <form action="#" method="POST" class="bg-white p-8 rounded-xl shadow-sm">
                            <div class="mb-6">
                                <label for="contact-name" class="block text-gray-700 font-medium mb-2">Nama</label>
                                <input type="text" id="contact-name" name="contact-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                            </div>
                            <div class="mb-6">
                                <label for="contact-email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="contact-email" name="contact-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                            </div>
                            <div class="mb-6">
                                <label for="contact-subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                <input type="text" id="contact-subject" name="contact-subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                            </div>
                            <div class="mb-6">
                                <label for="contact-message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                                <textarea id="contact-message" name="contact-message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required></textarea>
                            </div>
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('img\logo-1.png') }}" alt="Penjelajah Alam logo" class="h-10 mr-3">
                        <span class="text-xl font-bold">Penjelajah Alam</span>
                    </div>
                    <p class="text-gray-300 max-w-xs">Menghubungkan masyarakat dengan alam melalui petualangan, pendidikan, dan konservasi.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Explore</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white">Activities</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Gallery</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Membership</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Conservation</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Resources</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white">FAQ</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Safety Guidelines</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Gear Checklist</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Legal</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white">Terms</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Privacy</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Cookies</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Waiver</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-300 mb-4 md:mb-0">© 2025 Penjelajah Alam. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-300 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden fixed inset-0 z-50 bg-white bg-opacity-95">
        <div class="container mx-auto px-6 py-8">
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center">
                    <img src="{{ asset('img\logo.png') }}" alt="Penjelajah Alam logo" class="h-10 mr-3">
                    <span class="text-xl font-bold text-teal-700">Penjelajah Alam</span>
                </div>
                <button class="mobile-menu-close focus:outline-none nav-link">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="flex flex-col space-y-6">
                <a href="#home" class="nav-link text-gray-800 text-xl font-medium hover:text-teal-600 px-4 py-2 rounded-lg active:shadow-md">Home</a>
                <a href="#about" class="nav-link text-gray-800 text-xl font-medium hover:text-teal-600 px-4 py-2 rounded-lg active:shadow-md">About</a>
                <a href="#activities" class="nav-link text-gray-800 text-xl font-medium hover:text-teal-600 px-4 py-2 rounded-lg active:shadow-md">Activities</a>
                <a href="#gallery" class="nav-link text-gray-800 text-xl font-medium hover:text-teal-600 px-4 py-2 rounded-lg active:shadow-md">Gallery</a>
                <a href="#contact" class="nav-link text-gray-800 text-xl font-medium hover:text-teal-600 px-4 py-2 rounded-lg active:shadow-md">Contact</a>
                <a href="#join" class="join-btn nav-link bg-teal-600 hover:bg-teal-700 text-black px-6 py-3 rounded-lg font-medium text-center">Join Us</a>
            </nav>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ff6d5e4e-b11a-460e-ba78-f9358611c34e.png"></script>
</body>
</html>