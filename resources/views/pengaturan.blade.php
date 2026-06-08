<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - Pustasda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#F8FAFC] flex h-screen overflow-hidden antialiased text-gray-800" x-data="{ activeTab: 'profil', sidebarOpen: false }">

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

            <div class="px-4 mt-4">
                <div class="mb-5">
                    <p class="px-3 text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-2">Halaman</p>
                    <a href="/" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm mb-1 text-gray-400 hover:text-gray-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Beranda
                    </a>
                    <a href="/pengaturan" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-semibold text-sm mb-1 bg-rose-50 text-rose-600 transition">
                        <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Pengaturan
                    </a>
                </div>

                <div class="mb-5">
                    <p class="px-3 text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-2">Lomba</p>
                    <a href="/eksplor" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm mb-1 text-gray-400 hover:text-gray-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h12M4 18h12"></path></svg>
                        Eksplor
                    </a>
                    <a href="/disimpan" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm mb-1 text-gray-400 hover:text-gray-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
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
                
                <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-gray-900 tracking-tight">Pengaturan</h1>
                    <p class="text-sm text-gray-500 mt-1">Kelola informasi profil, preferensi, dan keamanan akun Anda.</p>
                </div>

                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Navigasi Pengaturan -->
                    <div class="w-full lg:w-[240px] shrink-0">
                        <div class="bg-white rounded-2xl border border-gray-200 p-2 shadow-sm flex flex-row lg:flex-col gap-1 overflow-x-auto lg:overflow-visible pb-2 lg:pb-2">
                            
                            <button @click="activeTab = 'profil'" :class="{'bg-rose-50 text-rose-600 font-semibold': activeTab === 'profil', 'text-gray-600 hover:bg-gray-50 font-medium': activeTab !== 'profil'}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition text-left min-w-[120px] lg:min-w-0">
                                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Profil
                            </button>
                            
                            <button @click="activeTab = 'notifikasi'" :class="{'bg-rose-50 text-rose-600 font-semibold': activeTab === 'notifikasi', 'text-gray-600 hover:bg-gray-50 font-medium': activeTab !== 'notifikasi'}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition text-left min-w-[140px] lg:min-w-0">
                                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                Notifikasi
                            </button>

                            <button @click="activeTab = 'keamanan'" :class="{'bg-rose-50 text-rose-600 font-semibold': activeTab === 'keamanan', 'text-gray-600 hover:bg-gray-50 font-medium': activeTab !== 'keamanan'}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition text-left min-w-[140px] lg:min-w-0">
                                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                Keamanan
                            </button>

                            <button @click="activeTab = 'integrasi'" :class="{'bg-rose-50 text-rose-600 font-semibold': activeTab === 'integrasi', 'text-gray-600 hover:bg-gray-50 font-medium': activeTab !== 'integrasi'}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm transition text-left min-w-[140px] lg:min-w-0">
                                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                                Integrasi
                            </button>

                        </div>
                    </div>

                    <!-- Area Konten -->
                    <div class="flex-1 min-w-0">
                        
                        <!-- Tab Profil -->
                        <div x-show="activeTab === 'profil'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                            
                            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sm:p-6 sm:p-8">
                                <h3 class="text-lg font-bold text-gray-900 mb-6">Informasi Pribadi</h3>
                                
                                <div class="flex flex-col sm:flex-row items-center gap-6 mb-8">
                                    <div class="relative group cursor-pointer shrink-0">
                                        <div class="w-20 h-20 sm:w-24 sm:h-24 bg-gray-200 rounded-full overflow-hidden border-4 border-white shadow-md">
                                            <svg class="w-full h-full text-gray-400 p-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                        </div>
                                        <div class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="text-center sm:text-left w-full">
                                        <button class="bg-gray-100 text-gray-700 hover:bg-gray-200 px-4 py-2 rounded-lg text-sm font-semibold transition w-full sm:w-auto">Ubah Foto</button>
                                        <p class="text-xs text-gray-500 mt-2">JPG, GIF atau PNG. Maksimal 2MB.</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                                        <input type="text" value="Brahma Alfaris" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
                                        <input type="text" value="brahma.alfaris" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition bg-gray-50">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                        <input type="email" value="brahma@smktelkom-sda.sch.id" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition bg-gray-50">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Instansi/Sekolah</label>
                                        <input type="text" value="SMK Telkom Sidoarjo" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Bio Singkat</label>
                                        <textarea rows="3" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition placeholder-gray-400" placeholder="Ceritakan sedikit tentang dirimu..."></textarea>
                                    </div>
                                </div>

                                <div class="mt-8 flex justify-end">
                                    <button class="bg-[#E11D48] text-white px-6 py-2.5 rounded-xl text-sm font-bold hover:bg-rose-700 transition shadow-sm w-full sm:w-auto">Simpan Perubahan</button>
                                </div>
                            </div>

                        </div>

                        <!-- Tab Notifikasi -->
                        <div x-cloak x-show="activeTab === 'notifikasi'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                            
                            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sm:p-8">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Preferensi Notifikasi</h3>
                                <p class="text-sm text-gray-500 mb-6">Pilih pemberitahuan mana yang ingin Anda terima.</p>

                                <div class="space-y-4">
                                    <div class="flex items-center justify-between py-4 border-b border-gray-100">
                                        <div>
                                            <h4 class="text-sm font-bold text-gray-800">Lomba Baru Ditambahkan</h4>
                                            <p class="text-xs text-gray-500 mt-0.5">Dapatkan notifikasi ketika ada lomba baru yang sesuai dengan minat Anda.</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer shrink-0">
                                            <input type="checkbox" checked class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-rose-600"></div>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-between py-4 border-b border-gray-100">
                                        <div>
                                            <h4 class="text-sm font-bold text-gray-800">Pembaruan Leaderboard</h4>
                                            <p class="text-xs text-gray-500 mt-0.5">Beritahu saya ketika posisi saya berubah di leaderboard.</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer shrink-0">
                                            <input type="checkbox" checked class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-rose-600"></div>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-between py-4">
                                        <div>
                                            <h4 class="text-sm font-bold text-gray-800">Pengingat Penutupan Lomba</h4>
                                            <p class="text-xs text-gray-500 mt-0.5">Ingatkan saya 3 hari sebelum lomba yang saya simpan ditutup.</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer shrink-0">
                                            <input type="checkbox" class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-rose-600"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Keamanan -->
                        <div x-cloak x-show="activeTab === 'keamanan'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                            
                            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sm:p-8">
                                <h3 class="text-lg font-bold text-gray-900 mb-6">Ubah Password</h3>
                                
                                <div class="space-y-5 max-w-md">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Password Saat Ini</label>
                                        <input type="password" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Password Baru</label>
                                        <input type="password" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition">
                                        <p class="text-[11px] text-gray-500 mt-2">Minimal 8 karakter, mengandung huruf besar, huruf kecil, dan angka.</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Password Baru</label>
                                        <input type="password" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition">
                                    </div>
                                    <div class="pt-2">
                                        <button class="bg-gray-800 text-white px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-gray-900 transition shadow-sm w-full sm:w-auto">Update Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Integrasi -->
                        <div x-cloak x-show="activeTab === 'integrasi'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                            
                            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sm:p-8">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Akun Tertaut</h3>
                                <p class="text-sm text-gray-500 mb-6">Tautkan akun Anda untuk mempermudah proses login dan melengkapi data.</p>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    
                                    <div class="border border-gray-200 rounded-xl p-4 flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-white border border-gray-100 rounded-full flex items-center justify-center shadow-sm shrink-0">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-bold text-gray-800">Google</h4>
                                                <p class="text-xs text-gray-500">brahma@smktelkom...</p>
                                            </div>
                                        </div>
                                        <button class="text-xs font-bold text-gray-400 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition">Putuskan</button>
                                    </div>

                                    <div class="border border-gray-200 rounded-xl p-4 flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-gray-900 text-white rounded-full flex items-center justify-center shadow-sm shrink-0">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-bold text-gray-800">GitHub</h4>
                                                <p class="text-xs text-gray-500">Belum tertaut</p>
                                            </div>
                                        </div>
                                        <button class="text-xs font-bold text-rose-600 bg-rose-50 border border-rose-100 px-3 py-1.5 rounded-lg hover:bg-rose-100 transition">Tautkan</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>
