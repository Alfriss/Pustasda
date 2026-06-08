<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Pustasda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#F8FAFC] flex h-screen overflow-hidden antialiased text-gray-800" x-data="{ sidebarOpen: false }">

    <!-- Overlay untuk Sidebar di Mobile -->
    <div x-show="sidebarOpen" x-transition.opacity @click="sidebarOpen = false" class="fixed inset-0 bg-gray-800/50 z-40 md:hidden" x-cloak></div>

    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="w-[260px] border-r border-gray-200 flex flex-col justify-between shrink-0 bg-white fixed md:relative z-50 h-full transition-transform duration-300 ease-in-out md:translate-x-0">
        <div>
            <div class="h-[72px] flex items-center justify-between px-6 border-b border-gray-100 md:border-none">
                <div class="flex items-center gap-2.5">
                    <div class="w-7 h-7 bg-rose-600 rounded-lg flex items-center justify-center text-white shadow-sm shadow-rose-500/20">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5v4.11l4.83 4.46V21h4.34v-9.43L19 7.11V3zm-2 3H7V5h10v1z"/></svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-gray-900">Pustasda</span>
                </div>
                <!-- Tombol tutup sidebar di mobile -->
                <button @click="sidebarOpen = false" class="md:hidden text-gray-400 hover:text-gray-600 p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="px-4 mt-2">
                <div class="mb-6">
                    <p class="px-3 text-[11px] font-semibold text-gray-400 mb-2">Halaman</p>
                    
                    <a href="{{ url('/') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md font-medium text-sm mb-1 {{ request()->is('/') ? 'bg-gray-100 text-gray-800' : 'text-gray-400 hover:text-gray-700' }}">
                        <svg class="w-5 h-5 {{ request()->is('/') ? 'text-gray-500' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Beranda
                    </a>

                    <a href="{{ url('/pengaturan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md font-medium text-sm {{ request()->is('pengaturan') ? 'bg-gray-100 text-gray-800' : 'text-gray-400 hover:text-gray-700' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Pengaturan
                    </a>
                </div>

                <div>
                    <p class="px-3 text-[11px] font-semibold text-gray-400 mb-2">Lomba</p>
                    
                    <a href="{{ url('/eksplor') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md font-medium text-sm mb-1 {{ request()->is('eksplor') ? 'bg-gray-100 text-gray-800' : 'text-gray-400 hover:text-gray-700' }}">
                        <svg class="w-5 h-5 {{ request()->is('eksplor') ? 'text-gray-500' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Eksplor
                    </a>

                    <a href="{{ url('/disimpan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md font-medium text-sm mb-1 {{ request()->is('disimpan') ? 'bg-gray-100 text-gray-800' : 'text-gray-400 hover:text-gray-700' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        Disimpan
                    </a>

                    <a href="{{ url('/leaderboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md font-medium text-sm {{ request()->is('leaderboard') ? 'bg-gray-100 text-gray-800' : 'text-gray-400 hover:text-gray-700' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        Leaderboard
                    </a>
                </div>
            </div>
        </div>

        <div class="px-4 pb-6">
            <button class="w-full flex items-center justify-center gap-2 px-4 py-2.5 bg-[#FFE4E6] text-[#E11D48] rounded-md font-semibold text-sm hover:bg-rose-200 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </button>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative w-full">
        
        <header class="h-[72px] flex items-center justify-between px-4 md:px-8 border-b border-gray-200 shrink-0 bg-white">
            <div class="flex h-full items-center">
                <!-- Hamburger menu toggle for mobile -->
                <button @click="sidebarOpen = true" class="md:hidden mr-3 text-gray-600 p-1.5 hover:bg-gray-100 rounded-md transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <a href="{{ url('/') }}" class="flex items-center px-3 md:px-4 font-semibold text-sm h-full border-b-2 transition {{ !request()->is('tentang') ? 'text-[#E11D48] border-[#E11D48]' : 'text-gray-400 hover:text-gray-700 border-transparent' }}">
                    Dashboard
                </a>
                <a href="{{ url('/tentang') }}" class="flex items-center px-3 md:px-4 font-semibold text-sm h-full border-b-2 transition {{ request()->is('tentang') ? 'text-[#E11D48] border-[#E11D48]' : 'text-gray-400 hover:text-gray-700 border-transparent' }}">
                    Tentang
                </a>
            </div>
            
            <div class="flex items-center gap-3 md:gap-6">
                <div class="hidden sm:block w-32 md:w-40 h-8 bg-gray-100 rounded-lg"></div>
                <a href="{{ url('/profile') }}" class="flex items-center gap-3 cursor-pointer hover:bg-gray-50 p-1.5 rounded-lg transition">
                    <div class="text-right hidden sm:block">
                        <div class="font-bold text-[15px] text-gray-900 leading-tight">Brahma Alfaris</div>
                        <div class="text-[11px] font-bold text-[#E11D48] tracking-wide">ADMIN</div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-sm">BA</div>
                </a>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto px-4 sm:px-6 md:px-8 py-6 md:py-8">
            <div class="w-full">
                
                <div class="mb-6 md:mb-8">
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mb-2">Tentang Pustasda</h1>
                    <p class="text-sm text-gray-500">Pusat Prestasi SMK Telkom Sidoarjo</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="h-40 md:h-56 bg-gradient-to-br from-[#E11D48] to-rose-600 relative flex items-center justify-center">
                        <div class="absolute inset-0 bg-black/10"></div>
                        <h2 class="text-white text-3xl md:text-5xl font-black z-10 tracking-tight">PUSTASDA</h2>
                    </div>
                    
                    <div class="p-6 md:p-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Apa itu Pustasda?</h3>
                        <p class="text-gray-600 leading-relaxed mb-8">
                            <strong>Pustasda</strong> (Pusat Prestasi Daerah/Sekolah) adalah sebuah platform inovatif yang dirancang khusus untuk memfasilitasi, mencatat, dan mengelola seluruh aktivitas kompetisi serta pencapaian siswa di lingkungan SMK Telkom Sidoarjo. Platform ini bertujuan untuk membangun ekosistem yang mendukung semangat kompetitif yang sehat dan transparan.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <div>
                                <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center mb-4 shadow-sm border border-rose-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                </div>
                                <h4 class="text-[16px] font-bold text-gray-900 mb-2">Manajemen Lomba</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">Siswa dapat dengan mudah mengeksplorasi berbagai lomba dari tingkat regional hingga nasional, dan menyimpan daftar lomba yang diminati.</p>
                            </div>
                            
                            <div>
                                <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center mb-4 shadow-sm border border-rose-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                </div>
                                <h4 class="text-[16px] font-bold text-gray-900 mb-2">Pencatatan Prestasi</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">Setiap medali, penghargaan, atau keikutsertaan kompetisi dicatat secara digital menjadi portofolio prestasi siswa yang kredibel.</p>
                            </div>

                            <div>
                                <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center mb-4 shadow-sm border border-rose-100">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89l-.06-1.3C3 10.703 3.11 9.99 3.31 9.397zM6.93 11.3a11.393 11.393 0 011.986-.132c.55 0 1.08.039 1.584.114l-2.007.86a1 1 0 00-.787 0l-1.32-.566zM12 14.222c0 .242-.012.48-.034.716A8.91 8.91 0 0110 15.303c-1.13 0-2.207-.208-3.2-.582a1.1 1.1 0 01-.8-.94l-.06-1.3A1 1 0 017 11.41a10.36 10.36 0 013-.41c1.11 0 2.143.174 3 .483V14.22z"></path></svg>
                                </div>
                                <h4 class="text-[16px] font-bold text-gray-900 mb-2">Leaderboard Terbuka</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">Membangun iklim kompetitif dengan sistem poin dan peringkat yang dapat dilihat oleh semua orang, mendorong siswa untuk terus berkembang.</p>
                            </div>
                            
                            <div>
                                <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center mb-4 shadow-sm border border-rose-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <h4 class="text-[16px] font-bold text-gray-900 mb-2">Pembaruan Cepat</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">Akses informasi real-time terkait status pendaftaran lomba, penutupan kontes, dan jadwal penting lainnya dengan mudah.</p>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-100 pt-6 mt-6 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-500">
                            <p>&copy; 2026 Pustasda - SMK Telkom Sidoarjo.</p>
                            <div class="flex gap-4 mt-4 sm:mt-0">
                                <a href="#" class="hover:text-gray-800 transition">Kebijakan Privasi</a>
                                <a href="#" class="hover:text-gray-800 transition">Syarat & Ketentuan</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>
