<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustasda - Pengaturan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white flex h-screen overflow-hidden antialiased text-gray-800">

    <aside class="w-[260px] border-r border-gray-200 flex flex-col justify-between shrink-0 bg-white relative">
        <div>
            <div class="h-[72px] flex items-center px-6">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5v4.11l4.83 4.46V21h4.34v-9.43L19 7.11V3zm-2 3H7V5h10v1z"/></svg>
                    <span class="text-xl font-bold tracking-tight">Pustasda</span>
                </div>
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

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative bg-[#F8FAFC]">
        
        <header class="h-[72px] flex items-center justify-between px-8 border-b border-gray-200 shrink-0 bg-white">
            <div class="flex h-full">
                <a href="#" class="flex items-center px-4 font-semibold text-sm text-gray-400 hover:text-gray-700">
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 font-semibold text-sm text-[#E11D48] border-b-2 border-[#E11D48]">
                    Pengaturan
                </a>
            </div>
            
            <div class="flex items-center gap-6">
                <div class="w-40 h-8 bg-gray-200 rounded-sm"></div>
                <div class="font-semibold text-sm text-gray-800">
                    Profile
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto px-10 py-8">
            <div class="max-w-[1000px] w-full mx-auto">
                
                <div class="mb-8">
                    <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-2">Pengaturan Akun.</h1>
                    <p class="text-sm text-gray-500">Kelola informasi pribadi, preferensi, dan keamanan akun Anda.</p>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Navigasi Pengaturan Kiri -->
                    <div class="w-full lg:w-64 shrink-0">
                        <nav class="flex lg:flex-col gap-2 overflow-x-auto lg:overflow-visible pb-2 lg:pb-0 scrollbar-hide">
                            <button class="flex items-center gap-3 px-4 py-3 rounded-lg bg-white border border-gray-200 shadow-sm text-gray-900 font-semibold text-sm w-full text-left transition">
                                <svg class="w-5 h-5 text-[#E11D48]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Profil Publik
                            </button>
                            <button class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-500 hover:bg-gray-100 font-medium text-sm w-full text-left transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                Notifikasi
                            </button>
                            <button class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-500 hover:bg-gray-100 font-medium text-sm w-full text-left transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                Keamanan Akun
                            </button>
                            <button class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-500 hover:bg-gray-100 font-medium text-sm w-full text-left transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                Integrasi
                            </button>
                        </nav>
                    </div>

                    <!-- Konten Pengaturan -->
                    <div class="flex-1 space-y-6">
                        
                        <!-- Card Foto & Info -->
                        <div class="bg-white rounded-[14px] border border-gray-200 shadow-sm overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-lg font-bold text-gray-900 mb-6">Informasi Dasar</h2>
                                
                                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 mb-8">
                                    <div class="relative">
                                        <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-rose-400 to-[#E11D48] flex items-center justify-center text-white text-3xl font-bold shadow-md">
                                            JD
                                        </div>
                                        <button class="absolute bottom-0 right-0 w-8 h-8 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:text-[#E11D48] shadow-sm transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        </button>
                                    </div>
                                    <div>
                                        <div class="flex gap-3 mb-2">
                                            <button class="px-4 py-2 bg-white border border-gray-200 rounded-md text-sm font-semibold text-gray-700 hover:bg-gray-50 transition shadow-sm">Unggah Baru</button>
                                            <button class="px-4 py-2 bg-gray-50 border border-transparent rounded-md text-sm font-semibold text-gray-500 hover:text-red-600 hover:bg-red-50 transition">Hapus</button>
                                        </div>
                                        <p class="text-[13px] text-gray-500">Direkomendasikan foto persegi minimal 500x500px, maksimal 2MB (JPG atau PNG).</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Nama Depan</label>
                                        <input type="text" value="John" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-800 bg-gray-50 focus:bg-white focus:outline-none focus:border-[#E11D48] focus:ring-1 focus:ring-[#E11D48] transition">
                                    </div>
                                    <div>
                                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Nama Belakang</label>
                                        <input type="text" value="Doe" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-800 bg-gray-50 focus:bg-white focus:outline-none focus:border-[#E11D48] focus:ring-1 focus:ring-[#E11D48] transition">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Alamat Email</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                                            </div>
                                            <input type="email" value="john.doe@example.com" class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-800 bg-gray-50 focus:bg-white focus:outline-none focus:border-[#E11D48] focus:ring-1 focus:ring-[#E11D48] transition">
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Bio Singkat</label>
                                        <textarea rows="4" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-800 bg-gray-50 focus:bg-white focus:outline-none focus:border-[#E11D48] focus:ring-1 focus:ring-[#E11D48] transition" placeholder="Ceritakan sedikit tentang keahlian atau minat Anda pada perlombaan..."></textarea>
                                        <p class="text-xs text-gray-400 mt-1.5 text-right">Maksimal 250 karakter.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex justify-end gap-3">
                                <button class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-semibold hover:bg-gray-50 transition shadow-sm">Batal</button>
                                <button class="px-5 py-2.5 bg-[#E11D48] text-white rounded-lg text-sm font-semibold hover:bg-rose-700 transition shadow-sm">Simpan Perubahan</button>
                            </div>
                        </div>

                        <!-- Preferensi Visual Card -->
                        <div class="bg-white rounded-[14px] border border-gray-200 shadow-sm overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-lg font-bold text-gray-900 mb-1">Preferensi Tampilan</h2>
                                <p class="text-sm text-gray-500 mb-6">Sesuaikan tampilan visual aplikasi Pustasda di perangkat ini.</p>
                                
                                <div class="flex gap-5">
                                    <!-- Light Mode Option -->
                                    <label class="flex flex-col items-start gap-3 cursor-pointer group">
                                        <div class="w-36 h-24 rounded-xl border-2 border-[#E11D48] p-1.5 transition">
                                            <div class="w-full h-full bg-gray-50 rounded-lg shadow-sm border border-gray-200 flex flex-col gap-1.5 p-2 overflow-hidden">
                                                <div class="flex gap-1.5">
                                                    <div class="w-4 h-full bg-gray-200 rounded-sm"></div>
                                                    <div class="flex-1 flex flex-col gap-1.5">
                                                        <div class="w-full h-2 bg-gray-200 rounded-sm"></div>
                                                        <div class="w-2/3 h-2 bg-gray-200 rounded-sm"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-4 h-4 rounded-full border-4 border-[#E11D48] bg-white"></div>
                                            <span class="text-sm font-semibold text-gray-900">Terang (Default)</span>
                                        </div>
                                    </label>
                                    
                                    <!-- Dark Mode Option -->
                                    <label class="flex flex-col items-start gap-3 cursor-pointer group">
                                        <div class="w-36 h-24 rounded-xl border-2 border-transparent group-hover:border-gray-300 p-1.5 transition">
                                            <div class="w-full h-full bg-gray-900 rounded-lg shadow-sm border border-gray-700 flex flex-col gap-1.5 p-2 overflow-hidden">
                                                <div class="flex gap-1.5">
                                                    <div class="w-4 h-full bg-gray-700 rounded-sm"></div>
                                                    <div class="flex-1 flex flex-col gap-1.5">
                                                        <div class="w-full h-2 bg-gray-700 rounded-sm"></div>
                                                        <div class="w-2/3 h-2 bg-gray-700 rounded-sm"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-4 h-4 rounded-full border border-gray-300 bg-white"></div>
                                            <span class="text-sm font-medium text-gray-500">Gelap</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Danger Zone -->
                        <div class="bg-white rounded-[14px] border border-red-200 shadow-sm overflow-hidden mb-10">
                            <div class="p-6">
                                <h2 class="text-lg font-bold text-red-600 mb-1">Zona Berbahaya</h2>
                                <p class="text-sm text-gray-500 mb-4">Aksi di bawah ini tidak dapat diurungkan. Pastikan Anda mengerti sebelum melanjutkan.</p>
                                
                                <div class="flex items-center justify-between border-t border-gray-100 pt-5">
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-900">Hapus Akun Permanen</h3>
                                        <p class="text-xs text-gray-500 mt-0.5">Semua data profil, lomba yang disimpan, dan riwayat akan hilang selamanya.</p>
                                    </div>
                                    <button class="px-4 py-2 bg-white border border-red-200 text-red-600 rounded-lg text-sm font-semibold hover:bg-red-50 hover:border-red-300 transition shadow-sm whitespace-nowrap ml-4">Hapus Akun</button>
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
