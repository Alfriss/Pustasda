<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disimpan - Pustasda</title>
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
                <button @click="sidebarOpen = false" class="md:hidden text-gray-400 hover:text-gray-600 p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="px-4 mt-2">
                <div class="mb-5">
                    <p class="px-3 text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-2">Halaman</p>
                    <a href="/" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm mb-1 text-gray-400 hover:text-gray-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Beranda
                    </a>
                    <a href="/pengaturan" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm text-gray-400 hover:text-gray-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Pengaturan
                    </a>
                </div>

                <div class="mb-5">
                    <p class="px-3 text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-2">Lomba</p>
                    <a href="/eksplor" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm mb-1 text-gray-400 hover:text-gray-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h12M4 18h12"></path></svg>
                        Eksplor
                    </a>
                    <a href="/disimpan" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-semibold text-sm mb-1 bg-rose-50 text-rose-600 transition">
                        <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        Disimpan
                    </a>
                    <a href="/leaderboard" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm mb-1 text-gray-400 hover:text-gray-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        Leaderboard
                    </a>
                </div>
            </div>
        </div>

        <div class="px-4 pb-6">
            <button class="w-full flex items-center justify-center gap-2 px-4 py-2.5 bg-rose-50 text-rose-600 rounded-xl font-semibold text-sm hover:bg-rose-100 transition duration-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </button>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative w-full">
        
        <header class="h-[72px] flex items-center justify-between px-4 md:px-8 border-b border-gray-200 shrink-0 bg-white">
            <div class="flex h-full items-center">
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
                <div class="relative w-40 sm:w-60">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </span>
                    <input type="text" placeholder="Cari sesuatu..." class="w-full pl-9 pr-4 py-1.5 md:py-2 bg-gray-100/80 border border-transparent rounded-lg text-xs font-medium text-gray-700 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-gray-200 transition">
                </div>
                
                <a href="{{ url('/profile') }}" class="flex items-center gap-3 border-l border-gray-200 pl-4 md:pl-6 cursor-pointer hover:bg-gray-50 p-1.5 rounded-lg transition">
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
                
                <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-extrabold text-gray-900 tracking-tight">Disimpan</h1>
                        <p class="text-sm text-gray-500 mt-1">Daftar perlombaan yang Anda tandai untuk diikuti.</p>
                    </div>
                    <div class="flex gap-2">
                        <select class="border border-gray-200 text-gray-600 text-xs sm:text-sm rounded-lg block p-2 sm:p-2.5 bg-white focus:outline-none focus:border-[#E11D48] cursor-pointer shadow-sm">
                            <option selected>Kategori</option>
                            <option value="it">Teknologi & IT</option>
                            <option value="desain">Desain</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-[14px] border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col">
                        <div class="h-32 bg-gradient-to-r from-blue-500 to-cyan-400 relative">
                            <div class="absolute inset-0 flex items-center justify-center text-white/50 text-xs font-medium">Banner Kompetisi</div>
                            <div class="absolute top-3 right-3 bg-white/90 p-1.5 rounded-full shadow-sm cursor-pointer hover:bg-rose-50 group/btn">
                                <svg class="w-4 h-4 text-rose-500 group-hover/btn:fill-rose-500" fill="currentColor" viewBox="0 0 24 24"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex gap-2 mb-3">
                                <span class="bg-blue-50 text-blue-600 text-[11px] font-semibold px-2 py-0.5 rounded">Machine Learning</span>
                            </div>
                            <h3 class="text-[16px] font-bold text-gray-900 mb-1 leading-snug group-hover:text-blue-600 transition-colors">Titanic Dataset Analysis Challenge</h3>
                            <p class="text-[13px] text-gray-500 mb-4 line-clamp-2">Kompetisi klasifikasi dataset untuk memprediksi probabilitas keselamatan.</p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <button class="w-full bg-rose-50 text-rose-600 text-[13px] font-semibold py-2 rounded-lg hover:bg-rose-100 transition">Daftar Sekarang</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="bg-white rounded-[14px] border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col">
                        <div class="h-32 bg-gradient-to-r from-emerald-500 to-teal-400 relative">
                            <div class="absolute inset-0 flex items-center justify-center text-white/50 text-xs font-medium">Banner Kompetisi</div>
                            <div class="absolute top-3 right-3 bg-white/90 p-1.5 rounded-full shadow-sm cursor-pointer hover:bg-rose-50 group/btn">
                                <svg class="w-4 h-4 text-rose-500 group-hover/btn:fill-rose-500" fill="currentColor" viewBox="0 0 24 24"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex gap-2 mb-3">
                                <span class="bg-emerald-50 text-emerald-600 text-[11px] font-semibold px-2 py-0.5 rounded">Design UI/UX</span>
                            </div>
                            <h3 class="text-[16px] font-bold text-gray-900 mb-1 leading-snug group-hover:text-emerald-600 transition-colors">App Redesign Challenge 2026</h3>
                            <p class="text-[13px] text-gray-500 mb-4 line-clamp-2">Tantangan mendesain ulang aplikasi e-commerce lokal dengan pendekatan User-Centered Design.</p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <button class="w-full bg-rose-50 text-rose-600 text-[13px] font-semibold py-2 rounded-lg hover:bg-rose-100 transition">Daftar Sekarang</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Empty State (Opsional) -->
                <div class="hidden mt-10 text-center">
                    <div class="inline-flex w-16 h-16 bg-gray-100 rounded-full items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Belum ada yang disimpan</h3>
                    <p class="text-sm text-gray-500 mt-1">Jelajahi dan tandai perlombaan yang Anda minati.</p>
                    <a href="/eksplor" class="inline-block mt-4 text-[#E11D48] text-sm font-semibold hover:underline">Eksplor Lomba &rarr;</a>
                </div>

            </div>
        </div>
    </main>

</body>
</html>