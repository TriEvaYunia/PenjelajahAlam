<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjelajah Alam</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="navigation-bg fixed w-full z-50">
        <div class="container mx-auto px-1 py-0.5">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="Pejelajah Alam logo" class="h-8 mr-2">
                    <span class="text-lg font-bold tracking-wide bg-gradient-to-r from-teal-500 to-green-700 bg-clip-text drop-shadow">Penjelajah Alam</span>
                </div>
                <div class="hidden md:flex space-x-8 text-base font-bold">
                    <a href="#home" class="nav-link text-black-800 hover:text-teal-600 px-2 py-1 rounded-lg">Home</a>
                    <a href="#about" class="nav-link text-black-800 hover:text-teal-600 px-2 py-1 rounded-lg">About</a>
                    <a href="#activities" class="nav-link text-black-800 hover:text-teal-600 px-2 py-1 rounded-lg">Activities</a>
                    <a href="#gallery" class="nav-link text-black-800 hover:text-teal-600 px-2 py-1 rounded-lg">Gallery</a>
                    <a href="#contact" class="nav-link text-black-800 hover:text-teal-600 px-2 py-1 rounded-lg">Contact</a>
                    <a href="#" class="join-btn nav-link text-white bg-green-700 hover:bg-teal-700 px-6 py-1 rounded-full" onclick="openLoginModal()">Login</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobileMenuButton" class="focus:outline-none">
                        <svg class="w-8 h-8 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="bg-white w-64 h-full p-4">
            <button id="closeMobileMenu" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl font-bold">&times;</button>
            <nav class="flex flex-col space-y-4">
                <a href="#home" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Home</a>
                <a href="#about" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">About</a>
                <a href="#activities" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Activities</a>
                <a href="#gallery" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Gallery</a>
                <a href="#contact" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Contact</a>
                <a href="#" class="join-btn nav-link text-white bg-green-900 hover:bg-teal-700 px-8 py-2 rounded-full" onclick="openLoginModal()">Login</a>
            </nav>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50 z-50 flex items-start justify-center pt-10">
        <div class="bg-white rounded-xl w-full max-w-md p-6 shadow-lg relative">
            <h2 class="text-xl font-bold text-center mb-6 text-gray-800">Login</h2>
            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="email" name="email" placeholder="Email" class="w-full border rounded px-3 py-2 text-sm" required value="{{ old('email') }}" />
                <input type="password" name="password" placeholder="Password" class="w-full border rounded px-3 py-2 text-sm" required />
                <button type="submit" class="w-full bg-green-600 text-white py-2 rounded text-sm">Login</button>
                <div class="text-center text-xs mt-2">
                    Belum punya akun? <a href="#" onclick="openRegisterModal();return false;" class="text-teal-600 font-semibold">Daftar sekarang</a>
                </div>
            </form>
            <!-- Close button -->
            <button onclick="closeLoginModal()" class="absolute top-2 right-3 text-xl text-gray-500 hover:text-gray-800">&times;</button>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50 z-50 flex items-start justify-center pt-4">
        <div class="bg-white rounded-xl w-full max-w-md p-4 shadow-lg relative">
            <h2 class="text-xl font-bold text-center mb-6 text-gray-800">Register</h2>
            <!-- Register Form -->
            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-2 text-sm">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm" required value="{{ old('name') }}">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2 text-sm">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm" required value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 font-medium mb-2 text-sm">No. WhatsApp</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm" required value="{{ old('phone') }}">
                    </div>
                </div>
                <div>
                    <label for="experience" class="block text-gray-700 font-medium mb-2 text-sm">Tingkat Pengalaman Luar Ruangan</label>
                    <select id="experience" name="experience" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm">
                        <option value="beginner" {{ old('experience') == 'beginner' ? 'selected' : '' }}>Pemula</option>
                        <option value="intermediate" {{ old('experience') == 'intermediate' ? 'selected' : '' }}>Menengah</option>
                        <option value="advanced" {{ old('experience') == 'advanced' ? 'selected' : '' }}>Mahir</option>
                    </select>
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-2 text-sm">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm" required>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-medium mb-2 text-sm">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm" required>
                </div>
                
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200 text-sm">Join Sekarang</button>
            </form>
            <!-- Close button -->
            <button onclick="closeRegisterModal()" class="absolute top-2 right-3 text-xl text-gray-500 hover:text-gray-800">&times;</button>
        </div>
    </div>

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
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
            </div>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-16">
                    <img src="https://th.bing.com/th/id/OIP.KUBVtO9B1RqUwzE0jaxgIwHaE8?w=229&h=180&c=7&r=0&o=7&dpr=1.1&pid=1.7&rm=3" alt="Ecovolunteers planting trees in a rainforest conservation project" class="rounded-lg h-80 w-full object-cover overflow-hidden">
                </div>
                <div class="md:w-1/2">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="py-20 bg-gray-50">
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
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bb390ea3-4277-4066-b6fb-3d134b6f899d.png" alt="Camping hutan belantara" class="w-full h-full object-cover">
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
        <button id="activityModalClose" class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-2xl font-bold z-50 bg-white bg-opacity-80 rounded-full w-10 h-10 flex items-center justify-center shadow-lg">&times;</button>
        <div class="bg-white p-6 max-w-xl rounded-xl shadow-xl relative">
            <img id="activityModalImg" src="" alt="" class="w-full h-64 object-cover rounded-lg mb-4">
            <h3 id="activityModalTitle" class="text-2xl font-bold text-gray-800 mb-2"></h3>
            <p id="activityModalDesc" class="text-gray-700 mb-4"></p>
            <button onclick="closeActivityModal()" class="mt-2 px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-700">Kembali</button>
        </div>
    </div>

    <!-- Gallery Section -->
    <section id="gallery" class="py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="text-center mb-4">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Petualangan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Jelajahi momen dari ekspedisi dan acara komunitas kami.</p>
                <div class="w-16 h-1 bg-teal-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ff6d5e4e-b11a-460e-ba78-f9358611c34e.png" alt="Sunrise over Mount Bromo" data-location="Gunung Bromo, Jawa Timur" data-desc="Pendakian di Gunung Bromo saat sunrise, pengalaman luar biasa bersama komunitas dan tempat paling populer untuk menyaksikan matahari terbit legendaris Bromo. Terletak di ketinggian 2.770 meter, Penanjakan menyajikan panorama Gunung Bromo, Gunung Batok, dan Gunung Semeru yang menjulang di latar belakang. Cahaya keemasan matahari terbit yang menerangi kabut membuat tempat ini favorit bagi fotografer dan pencinta alam." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ee285ca4-742a-4589-9fc0-61887c86b68b.png" alt="Pendaki melintasi jembatan bambu di atas sungai hutan" data-location="Gunung Munara, Jawa Barat" data-desc="Petualangan menyeberangi sungai dengan jembatan bambu, penuh tantangan dan seru. Tempat tepat untuk dijadikan sebagai kawasan untuk para pendaki pemula atau juga sebagai pemanasan untuk para pendaki yang profesional yang hanya ingin melepas kerinduan dengan suasana dari puncak gunung. Tak hanya dapat mendaki gunung maupun bukit saja, namun di tempat juga terdapat objek wisata lain berupa goa dan beberapa petilasan." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/890fcb0a-40b3-47e1-af13-0ccaf09f0787.png" alt="Bunga liar mekar sepenuhnya di sepanjang jalur pegunungan yang tinggi" data-location="Gunung Prau, Jawa Tengah" data-desc="Keindahan bunga liar di jalur pendakian Gunung Prau, cocok untuk pecinta fotografi alam. Banyak wisatawan berkunjung dan melakukan pendakian ke Gunung Prau karena keindahan alamnya yang memesona, seperti Padang Savana yang rumputnya bisa berubah warna sesuai musim, sunrise dan sunset dengan latar belakang gunung-gunung Jawa, lautan awan dan tentu saja bunga Edelweis yang tumbuh subur di beberapa titik pendakian." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cdb9ba6b-26c0-4a49-8496-65ae1b4162bd.png" alt="Anggota komunitas belajar mengikat simpul panjat" data-location="Tebing Gunung Parang" data-desc="Pelatihan teknik panjat tebing dan simpul, meningkatkan skill dan kekompakan tim. Dari atas tebing, kamu bisa menikmati pemandangan memukau yang meliputi hamparan sawah, perbukitan, hingga kota Purwakarta yang terletak di kejauhan. Pemandangan ini menjadi reward tersendiri setelah berhasil menaklukkan tebing." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/48d25d53-d364-48ff-8f5f-6fbb8a536c61.png" alt="Kegiatan membangun tim dengan api unggun di mana peserta berbagi cerita" data-location="Hutan Pinus, Songgon, Jawa Timur" data-desc="Malam keakraban di hutan pinus, berbagi cerita dan membangun kebersamaan di sekitar api unggun. Merasakan sensasi bermalam di hutan. Bermalam di tenda tidak lagi sebagai aktifitas yang melelahkan. Di Pinus CAMP Songgon telah disediakan keperluan untuk berkemah. Tenda Dome, Tenda Peleton, Alas Tidur dan sebagainya. Tanah lapang yang cukup luas untuk mendirikan tenda. Anda hanya perlu datang ke Pinus CAMP Songgon dan rasakan sensasi keceriaan berkemah yang bisa di dapat hanya di Pinus CAMP Songgon." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ac17a25e-c0e2-41b9-995e-781048f8c769.png" alt="Air terjun yang menakjubkan di Jawa Tengah dengan pendaki yang mengambil foto" data-location="Curug Tumpak Sewu, Kendal, Jawa Tengah" data-desc="Eksplorasi air terjun spektakuler, Keindahan Curug Sewu ini terbilang unik dan punya keindahan yang menakjubkan. Hal ini dikarenakan debit aliran air yang besar dan cukup tinggi, terlebih disaksikan dari jauh. Perpaduan hijaunya hutan yang mengelilingi dengan birunya langit saat cuaca cerah begitu menawan untuk diabadikan.." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7e53c54d-f934-40ae-889b-952f2a382ab8.png" alt="Pemandu hutan mengajarkan tentang flora dan fauna lokal" data-location="Alas Purwo, Jawa Timur" data-desc="Belajar langsung dari pemandu tentang flora dan fauna khas Alas Purwo. Sebagai kawasan hutan, ekosistem yang ada pada Taman Nasional Alas Purwo tergolong utuh. Ekosistem itu terdiri dari hutan pantai, hutan hujan dataran rendah, hutan mangrove, hutan bambu, savana buatan, hingga hutan tanaman. Keutuhan ekosistem ini membuat jenis flora yang ada di sana juga termasuk tinggi. Tercatat lebih dari 700 jenis tumbuhan ada di taman nasional ini, mulai dari tumbuhan bawah hingga tumbuhan pohon dengan berbagai tipe." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
                <div class="rounded-lg overflow-hidden h-48">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e8fa8e08-3e53-49e2-a78f-ddce5dcafad1.png" alt="Foto grup di puncak Gunung Rinjani dengan pose kemenangan" data-location="Gunung Rinjani, Pulau Lombok, Nusa Tenggara Barat" data-desc="Salah satu fitur paling terkenal dari gunung ini adalah Danau Segara Anak, yang terletak di kawah gunung. Danau yang luas ini memiliki air biru kehijauan yang jernih dan dikelilingi oleh tebing-tebing curam yang menambah kesan dramatis. Segara Anak, yang berarti "Laut Anak" dalam bahasa Sasak, adalah sebuah tempat yang dianggap suci oleh masyarakat Lombok. Setiap tahun, masyarakat lokal melakukan upacara spiritual di danau ini, mempercayai bahwa danau tersebut adalah tempat bersemayamnya roh leluhur mereka." class="w-full h-full object-cover cursor-pointer" onclick="openModal(this)">
                </div>
            </div>
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
                <p id="modalDesc" class="text-gray-700 mt-4"></p>
            </div>
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
                            <div class="mb-1">
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                            </div>
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
                            <div class="mb-1">
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                            </div>
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
                            <div class="mb-1">
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Berbagi pengetahuan dalam komunitas ini luar biasa. Saya telah belajar banyak tentang fotografi luar ruangan, navigasi, dan pertolongan pertama di alam liar."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Punya pertanyaan tentang kegiatan kami atau ingin bermitra dengan kami? Hubungi kami!</p>
                    <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 mb-4 md:mb-0 md:pr-2">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Kantor Pusat Kami</h3>
                        <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
                            <div class="flex items-start mb-4">
                                <svg class="w-6 h-6 text-teal-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-700">Gedung Adventure</p>
                                    <p class="text-gray-600">Desa Gumuk Dusun Krajan, RT.03/RW.01, Kabupaten Banyuwangi, Jawa Timur 68454, Indonesia</p>
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
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 mt-8">Sosial Media Kami</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
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
                            <a href="https://x.com/" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="https://youtobe.com/" class="bg-white p-3 rounded-lg shadow-sm hover:bg-teal-50 transition duration-200">
                                <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full flex items-center justify-center">
                        <iframe
                          width="100%"
                          height="350"
                          style="border:0; border-radius: 1rem;"
                          loading="lazy"
                          allowfullscreen
                          referrerpolicy="no-referrer-when-downgrade"
                          src="https://www.google.com/maps?q=-8.219934,114.306374&z=17&output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-8 md:mb-0 flex flex-col">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('img/logo-1.png') }}" alt="Penjelajah Alam logo" class="h-10 mr-3">
                        <span class="text-xl font-bold">Penjelajah Alam</span>
                    </div>
                    <p class="text-gray-300 max-w-xs">Menghubungkan masyarakat dengan alam melalui petualangan, pendidikan, dan konservasi.</p>
                </div>
                <p class="text-gray-300 mt-8 md:mt-0 md:ml-8 whitespace-nowrap">© 2025 Penjelajah Alam. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="bg-white w-64 h-full p-4">
            <button id="closeMobileMenu" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl font-bold">&times;</button>
            <nav class="flex flex-col space-y-6">
                <a href="#home" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Home</a>
                <a href="#about" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">About</a>
                <a href="#activities" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Activities</a>
                <a href="#gallery" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Gallery</a>
                <a href="#contact" class="nav-link text-gray-800 hover:text-teal-600 px-1 py-1 rounded-lg">Contact</a>
                <a href="#" class="join-btn nav-link text-white bg-green-900 hover:bg-teal-700 px-8 py-2 rounded-full" onclick="openLoginModal()">Login</a>
            </nav>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white rounded-xl w-full max-w-md p-6 shadow-lg relative">
            <h2 class="text-xl font-bold text-center mb-6 text-gray-800">Login</h2>
            <!-- Login Form -->
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="login-email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="login-email" name="login-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                </div>
                <div class="mb-4">
                    <label for="login-password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" id="login-password" name="login-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                </div>
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember-me" name="remember-me" class="form-checkbox text-teal-500">
                        <label for="remember-me" class="ml-2 text-gray-700">Ingat Saya</label>
                    </div>
                    <a href="#" class="text-teal-500 hover:text-teal-700">Lupa Password?</a>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                        Masuk
                    </button>
                </div>
            </form>
            <button class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl font-bold" onclick="closeLoginModal()">&times;</button>
            <p class="text-gray-600 mt-6 text-center">Belum punya akun? <a href="#" class="text-teal-500 hover:text-teal-700" onclick="openRegisterModal()">Daftar</a></p>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white rounded-xl w-full max-w-md p-6 shadow-lg relative">
            <h2 class="text-xl font-bold text-center mb-6 text-gray-800">Daftar</h2>
            <!-- Register Form -->
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="register-name" class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input type="text" id="register-name" name="register-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                </div>
                <div class="mb-4">
                    <label for="register-email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="register-email" name="register-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                </div>
                <div class="mb-4">
                    <label for="register-password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" id="register-password" name="register-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                </div>
                <div class="mb-4">
                    <label for="register-confirm-password" class="block text-gray-700 font-medium mb-2">Konfirmasi Password</label>
                    <input type="password" id="register-confirm-password" name="register-confirm-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                        Daftar
                    </button>
                </div>
            </form>
            <button class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl font-bold" onclick="closeRegisterModal()">&times;</button>
            <p class="text-gray-600 mt-6 text-center">Sudah punya akun? <a href="#" class="text-teal-500 hover:text-teal-700" onclick="openLoginModal()">Masuk</a></p>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>