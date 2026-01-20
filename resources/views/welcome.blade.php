<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-black text-white">
    {{-- Header --}}
    <header class="absolute inset-x-0 top-0 z-50">
        <nav aria-label="Global" class="flex items-center gap-12 p-6 lg:px-8 justify-center">
            {{-- Desktop Menu --}}
            <div class="lg:flex lg:gap-x-12">
                <a href="#" class="text-sm/6 font-semibold text-white">Desk
                    <span
                        class="inline-flex items-center justify-center text-[12px] text-white ring-inset ring-2 ring-[#d1d5db] w-6 h-6 ml-1.5 rounded-[6px] align-middle font-sans font-bold">
                        /
                    </span>
                </a>
                <a href="#" class="text-sm/6 font-semibold text-white">About</a>
                <a href="#" class="text-sm/6 font-semibold text-white">Play</a>
                <a href="#" class="text-sm/6 font-semibold text-white">Notes</a>
                <a href="#" class="text-sm/6 font-semibold text-white">Contact</a>
            </div>
        </nav>
    </header>

    {{-- Hero Section --}}
    <div class="relative isolate px-6 pt-1 lg:px-8">
        <div class="mx-auto max-w-2xl py-20 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">
                    <span>Hello, I'm Rapip</span>
                    <span>Web Developer</span>
                </h1>
            </div>
        </div>
    </div>

    {{-- Card Section --}}
    <div class="bg-[#FEFFFC] mx-10 rounded-3xl">
        <div class="top-10 justify-center flex gap-15 bg-white relative">
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
            <span class="w-10 h-10 bg-black rounded-full"></span>
        </div>
        <!-- Container Utama -->
        <div class="grid grid-cols-8 grid-rows-6 gap-2 w-full max-w-10xl mx-auto bg-white p-10 mt-15 h-[600px]">

            <div
                class="col-span-2 row-span-3 border-2 border-black flex items-center justify-center font-bold text-2xl text-slate-700 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-[1.02]">
                <span class="drop-shadow-sm">1</span>
            </div>

            <!-- Div 2: Span 2 kolom, Span 3 baris (kolom 1, baris 4) -->
            <div
                class="col-span-2 row-span-3 col-start-1 row-start-4 border-2 border-black flex items-center justify-center font-bold text-2xl text-slate-700 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-[1.02]">
                <span class="drop-shadow-sm">2</span>
            </div>

            <!-- Div 3: Span 2 kolom, Span 3 baris (kolom 3, baris 1) -->
            <div
                class="col-span-2 row-span-3 col-start-3 row-start-1 border-2 border-black flex items-center justify-center font-bold text-2xl text-slate-700 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-[1.02]">
                <span class="drop-shadow-sm">3</span>
            </div>

            <!-- Div 4: Span 2 kolom, Span 3 baris (kolom 3, baris 4) -->
            <div
                class="col-span-2 row-span-3 col-start-3 row-start-4 border-2 border-black flex items-center justify-center font-bold text-2xl text-slate-700 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-[1.02]">
                <span class="drop-shadow-sm">4</span>
            </div>

            <!-- Div 5: Span 2 kolom, Span 3 baris (kolom 5, baris 1) -->
            <div
                class="col-span-2 row-span-3 col-start-5 row-start-1 border-2 border-black flex items-center justify-center font-bold text-2xl text-slate-700 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-[1.02]">
                <span class="drop-shadow-sm">5</span>
            </div>

            <!-- Div 6: Span 2 kolom, Span 3 baris (kolom 7, baris 1) -->
            <div
                class="col-span-2 row-span-3 col-start-7 row-start-1 border-2 border-black flex items-center justify-center font-bold text-2xl text-slate-700 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-[1.02]">
                <span class="drop-shadow-sm">6</span>
            </div>

            <!-- Div 7: Span 4 kolom, Span 3 baris (kolom 5, baris 4) -->
            <div
                class="col-span-4 row-span-3 col-start-5 row-start-4 border-2 border-black flex items-center justify-center font-bold text-2xl text-slate-700 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-[1.02]">
                <span class="drop-shadow-sm">7</span>
            </div>
        </div>
    </div>

    {{-- Card Section 2 --}}
    <div class="relative my-50">
        <!-- Container utama dengan bentuk notebook -->
        <div class="relative max-w-7xl mx-auto bg-white rounded-r-3xl justify-center" style="min-height: 400px;">
            
            <!-- Lingkaran binding di sisi kiri -->
            <div class="absolute -left-7 top-0 bottom-0 flex flex-col justify-evenly" style="width: 60px;">
                <div class="w-10 h-10 bg-black rounded-full ml-2"></div>
                <div class="w-10 h-10 bg-black rounded-full ml-2"></div>
                <div class="w-10 h-10 bg-black rounded-full ml-2"></div>
                <div class="w-10 h-10 bg-black rounded-full ml-2"></div>
                <div class="w-10 h-10 bg-black rounded-full ml-2"></div>
            </div>
            
            <!-- Area konten (opsional) -->
            <div class="p-8">
                <!-- Konten bisa ditambahkan di sini -->
            </div>
            
        </div>
    </div>

</body>

</html>
