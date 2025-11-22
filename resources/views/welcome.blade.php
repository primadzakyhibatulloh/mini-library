<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusFTUnsoed — Academic Portal</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #1e293b; }
        ::-webkit-scrollbar-thumb { background: #6366f1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #4f46e5; }

        /* Navbar Glass Effect (Adaptive) */
        .nav-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        .dark .nav-glass {
            background: rgba(15, 23, 42, 0.85);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Hero Parallax Background */
        .hero-parallax {
            background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2670&auto=format&fit=crop');
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Hover Effect Kartu */
        .card-hover-pop {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .card-hover-pop:hover {
            transform: translateY(-5px);
            border-color: #6366f1;
        }
        .dark .card-hover-pop:hover {
            box-shadow: 0 10px 30px -5px rgba(99, 102, 241, 0.15);
        }
    </style>

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body class="bg-acad-light-100 dark:bg-acad-dark-950 text-slate-700 dark:text-slate-300 antialiased font-sans selection:bg-acad-accent-500 selection:text-white transition-colors duration-500">

    <nav class="fixed w-full z-50 top-0 transition-all duration-500 nav-glass shadow-sm">
        <div class="max-w-[1800px] mx-auto px-6 lg:px-12 h-20 flex justify-between items-center">
            
            <a href="/" class="flex items-center gap-4 group">
                <div class="w-10 h-10 bg-acad-accent-500 rounded-lg flex items-center justify-center shadow-lg shadow-acad-accent-500/20 group-hover:rotate-6 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-serif text-2xl font-bold tracking-wide text-slate-900 dark:text-white leading-none transition-colors">Perpus<span class="text-acad-accent-500">FT</span></span>
                    <span class="text-[11px] tracking-wider text-slate-500 dark:text-slate-400 uppercase mt-1">Academic Portal</span>
                </div>
            </a>
            
            <div class="flex items-center gap-4">
                <button id="theme-toggle" class="p-2.5 rounded-full bg-white dark:bg-acad-dark-800 text-slate-600 dark:text-yellow-400 border border-slate-200 dark:border-slate-700 hover:border-acad-accent-500 dark:hover:border-acad-accent-500 transition-all shadow-sm">
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z" clip-rule="evenodd"></path></svg>
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-slate-500" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                </button>

                <a href="/admin" class="px-6 py-2.5 text-xs font-bold tracking-wider uppercase text-white bg-acad-accent-500 hover:bg-acad-accent-600 rounded-md shadow-md transition-all hover:shadow-accent-glow">
                    Admin Login
                </a>
            </div>
        </div>
    </nav>

    <div class="relative pt-36 pb-48 lg:pt-44 lg:pb-64 px-6 lg:px-12 hero-parallax overflow-hidden">
        
        <div class="absolute inset-0 bg-gradient-to-b from-acad-dark-900/80 via-acad-dark-900/70 to-acad-light-100 dark:to-acad-dark-950 transition-colors duration-500"></div>

        <div class="max-w-5xl mx-auto text-center relative z-10 animate-fade-in">
            
            <div class="inline-block mb-8">
                <div class="px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md text-white text-xs font-bold tracking-widest uppercase border border-white/20 flex items-center gap-2 shadow-lg">
                   <span class="flex h-2 w-2 relative">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-acad-accent-500 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-acad-accent-500"></span>
                    </span>
                    Katalog Digital 2025
                </div>
            </div>
            
            <h1 class="font-serif text-5xl md:text-7xl lg:text-[5.5rem] font-bold text-white mb-8 leading-tight drop-shadow-2xl">
                Pusat Referensi & <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-acad-accent-500 to-indigo-300">Inovasi Teknik.</span>
            </h1>
            
            <p class="text-xl text-slate-200 max-w-2xl mx-auto mb-16 leading-relaxed font-light drop-shadow-md">
                Jelajahi koleksi literatur Fakultas Teknik Unsoed. Platform terintegrasi untuk mendukung riset dan pembelajaran Anda.
            </p>

            <div class="max-w-4xl mx-auto bg-white dark:bg-acad-dark-800 p-1.5 rounded-xl shadow-2xl shadow-acad-dark-900/20 dark:shadow-black/50 relative z-20 transition-colors duration-500">
                
                <form action="{{ route('home') }}" method="GET" class="flex flex-col md:flex-row w-full items-center gap-2">
                    
                    <div class="relative flex flex-grow w-full items-center bg-slate-50 dark:bg-acad-dark-900 rounded-lg border border-slate-200 dark:border-slate-700 focus-within:border-acad-accent-500 transition-all">
                        
                        <div class="relative w-[180px] group/select border-r border-slate-200 dark:border-slate-700">
                            <select name="category_id" class="w-full bg-transparent text-xs font-bold text-acad-dark-900 dark:text-white uppercase tracking-wider cursor-pointer outline-none appearance-none py-4 pl-5 pr-8 rounded-l-lg hover:text-acad-accent-500 transition-colors bg-none">
                                <option value="">Semua Kategori</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" class="text-acad-dark-900 dark:text-slate-200 bg-white dark:bg-acad-dark-900" {{ request('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>

                        <input type="text" name="search" value="{{ request('search') }}" class="flex-grow bg-transparent text-base text-acad-dark-900 dark:text-white placeholder:text-slate-400 font-medium border-none px-5 py-4 outline-none focus:ring-0" placeholder="Cari judul buku atau penulis..." autocomplete="off">
                    </div>

                    <button type="submit" class="w-full md:w-auto h-[54px] px-10 bg-acad-accent-500 hover:bg-acad-accent-600 text-white font-bold text-sm tracking-widest uppercase rounded-lg shadow-md transition-all hover:shadow-accent-glow flex items-center justify-center flex-shrink-0 hover:scale-[1.02] active:scale-95">
                        Cari
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-[1800px] mx-auto px-6 lg:px-12 pb-20 relative z-10 -mt-16">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 pb-6 border-b-2 border-slate-200 dark:border-slate-700 gap-6 transition-colors">
            <div>
                <h2 class="text-3xl font-serif font-bold text-acad-dark-900 dark:text-white mb-2 transition-colors">Katalog Buku</h2>
                <p class="text-sm text-slate-500 dark:text-slate-400 font-medium uppercase tracking-wider">Arsip Terkurasi & Terbaru</p>
            </div>
            
            @if(request('search') || request('category_id'))
                <a href="/" class="group flex items-center gap-2 text-xs font-bold tracking-widest text-white bg-rose-500 hover:bg-rose-600 px-6 py-3 rounded-md shadow-sm transition-all">
                    <span>Reset Filter</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </a>
            @else
                <div class="flex items-center gap-4 px-5 py-3 bg-white dark:bg-acad-dark-800 rounded-lg border border-slate-200 dark:border-slate-700 shadow-sm transition-colors">
                    <span class="text-3xl font-serif font-bold text-acad-accent-500 leading-none">{{ $books->count() }}</span>
                    <div class="flex flex-col border-l border-slate-200 dark:border-slate-600 pl-4">
                        <span class="text-[10px] font-bold text-acad-dark-900 dark:text-white uppercase tracking-widest">Total</span>
                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest">Aset</span>
                    </div>
                </div>
            @endif
        </div>

        @if($books->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
                @foreach($books as $book)
                <div class="group flex flex-col h-full bg-white dark:bg-acad-dark-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden card-hover-pop shadow-card-shadow relative transition-colors duration-300">
                    
                    <div class="absolute top-3 left-3 z-20">
                        <span class="inline-block bg-acad-accent-500/95 backdrop-blur-sm text-white text-[9px] font-bold tracking-widest uppercase px-3 py-1.5 rounded-md shadow-md">
                            {{ $book->category->name }}
                        </span>
                    </div>

                    <div class="relative aspect-[3/4] w-full bg-slate-100 dark:bg-acad-dark-900 overflow-hidden border-b border-slate-100 dark:border-slate-700">
                        @if($book->cover)
                            <img src="{{ $book->cover_url }}" alt="{{ $book->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center bg-slate-50 dark:bg-acad-dark-900 text-slate-300 dark:text-slate-600">
                                <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <span class="font-bold text-xs uppercase tracking-widest">No Cover</span>
                            </div>
                        @endif
                    </div>

                    <div class="flex flex-col flex-grow p-5">
                        <h3 class="font-serif text-lg font-bold text-acad-dark-900 dark:text-white leading-tight mb-4 group-hover:text-acad-accent-500 transition-colors" title="{{ $book->title }}">
                            {{ $book->title }}
                        </h3>

                        <div class="mb-5">
                            <span class="block text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest mb-1">Penulis:</span>
                            <span class="text-sm font-semibold text-acad-dark-800 dark:text-slate-200">{{ $book->author }}</span>
                        </div>

                        <div class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between transition-colors">
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mb-1">Tahun</span>
                                <span class="text-sm font-bold text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-acad-dark-900 px-2 py-0.5 rounded">{{ $book->year }}</span>
                            </div>

                            <div class="text-right">
                                <span class="block text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mb-1">Stok</span>
                                @if($book->stock > 0)
                                    <div class="flex items-center gap-1.5 justify-end font-bold text-emerald-600 dark:text-emerald-400">
                                        <span class="text-base">{{ $book->stock }}</span>
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    </div>
                                @else
                                    <span class="text-[10px] font-bold text-rose-600 dark:text-rose-400 bg-rose-50 dark:bg-rose-900/30 px-2 py-1 rounded-sm tracking-wider">HABIS</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-20 flex justify-center relative z-10">
                <div class="bg-white dark:bg-acad-dark-800 px-6 py-3 rounded-lg border border-slate-200 dark:border-slate-700 shadow-md transition-colors">
                    {{ $books->links() }}
                </div>
            </div>

        @else
            <div class="py-32 text-center bg-white dark:bg-acad-dark-800 rounded-2xl border-2 border-dashed border-slate-300 dark:border-slate-700 transition-colors">
                <div class="w-20 h-20 bg-slate-100 dark:bg-acad-dark-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-slate-400 dark:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-serif text-2xl font-bold text-acad-dark-900 dark:text-white mb-4">Arsip Tidak Ditemukan</h3>
                <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed max-w-md mx-auto">
                    Maaf, kami tidak menemukan buku yang cocok dengan kriteria pencarian Anda.
                </p>
                <a href="/" class="inline-flex items-center justify-center px-8 py-3 bg-acad-dark-800 dark:bg-white hover:bg-acad-dark-900 dark:hover:bg-slate-200 text-white dark:text-acad-dark-900 text-xs font-bold tracking-widest uppercase rounded-md shadow-md transition-all">
                    Reset Pencarian
                </a>
            </div>
        @endif
    </div>

    <footer class="bg-acad-dark-900 dark:bg-black pt-16 pb-8 border-t-4 border-acad-accent-500 relative z-10 transition-colors">
        <div class="max-w-[1800px] mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <span class="font-serif text-2xl font-bold text-white block mb-2">Perpus<span class="text-acad-accent-500">FT</span></span>
                <p class="text-[10px] font-bold tracking-widest text-slate-400 uppercase">Fakultas Teknik Unsoed</p>
            </div>
            <div class="flex gap-8">
                 <a href="/admin" class="text-[10px] font-bold tracking-widest text-slate-400 hover:text-acad-accent-500 uppercase transition-colors">
                    Admin Access
                </a>
            </div>
            <p class="text-slate-500 text-[10px] tracking-widest uppercase font-medium">
                &copy; 2025 Academic Portal System.
            </p>
        </div>
    </footer>

    <script>
        var themeToggleBtn = document.getElementById('theme-toggle');
        var darkIcon = document.getElementById('theme-toggle-dark-icon');
        var lightIcon = document.getElementById('theme-toggle-light-icon');

        // Logic Ikon Awal
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            lightIcon.classList.remove('hidden');
        } else {
            darkIcon.classList.remove('hidden');
        }

        // Logic Tombol Toggle
        themeToggleBtn.addEventListener('click', function() {
            darkIcon.classList.toggle('hidden');
            lightIcon.classList.toggle('hidden');

            if (localStorage.getItem('theme') === 'dark') {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });
    </script>

</body>
</html>