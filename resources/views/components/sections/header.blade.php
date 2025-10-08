<header 
    x-data="{ isScrolled: false, mobileMenuOpen: false }" 
    @scroll.window="isScrolled = (window.scrollY > 50)"
    :class="{ 
        'bg-white/80 backdrop-blur-lg shadow-md': isScrolled, 
        'bg-transparent': !isScrolled 
    }"
    class="fixed top-4 left-0 right-0 z-50 transition-all duration-300 mx-auto max-w-screen-xl rounded-2xl"
>
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div>
                <a href="#">
                    <img src="{{ asset('images/logo-fusion-energy.png') }}" alt="Fusion Energy Logo" class="h-10">
                </a>
            </div>

            <nav class="hidden md:flex items-center space-x-8">
                <a href="#quem-somos" class="text-gray-700 hover:text-[#2115AD] transition-transform duration-300 transform hover:scale-110 hover:-translate-y-0.5">Quem Somos</a>
                <a href="#servicos" class="text-gray-700 hover:text-[#2115AD] transition-transform duration-300 transform hover:scale-110 hover:-translate-y-0.5">Serviços</a>
                <a href="#contato" class="text-gray-700 hover:text-[#2115AD] transition-transform duration-300 transform hover:scale-110 hover:-translate-y-0.5">Contato</a>
            </nav>

            <div class="hidden md:flex items-center">
                <a href="#contato" class="flex items-center gap-2 bg-[#FD9835] text-white font-semibold px-5 py-2 rounded-full hover:bg-orange-500 transition-all duration-300 transform hover:scale-105">
                    <i class="bi bi-whatsapp"></i>
                    <span>Fale Conosco</span>
                </a>
            </div>

            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-800 focus:outline-none text-2xl">
                    <i x-show="!mobileMenuOpen" class="bi bi-list"></i>
                    <i x-show="mobileMenuOpen" class="bi bi-x"></i>
                </button>
            </div>
        </div>

        <div 
            x-show="mobileMenuOpen" 
            @click.away="mobileMenuOpen = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-4"
            class="md:hidden mt-4 bg-white rounded-lg shadow-xl"
            style="display: none;"
        >
            <a href="#quem-somos" @click="mobileMenuOpen = false" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Quem Somos</a>
            <a href="#servicos" @click="mobileMenuOpen = false" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Serviços</a>
            <a href="#contato" @click="mobileMenuOpen = false" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 border-b">Contato</a>
            <div class="p-4">
                 <a href="#contato" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 bg-[#FD9835] text-white font-semibold px-5 py-2 rounded-full hover:bg-orange-500 transition-all duration-300 w-full">
                    <i class="bi bi-whatsapp"></i>
                    <span>Fale Conosco</span>
                </a>
            </div>
        </div>
    </div>
</header>