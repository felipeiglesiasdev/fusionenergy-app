<header 
    x-data="{ isScrolled: false, mobileMenuOpen: false }" 
    @scroll.window="isScrolled = (window.scrollY > 50)"
    :class="{ 
        'bg-white/95 backdrop-blur-lg shadow-md': isScrolled || mobileMenuOpen, 
        'bg-transparent': !isScrolled && !mobileMenuOpen 
    }"
    class="fixed top-4 left-4 right-4 z-50 transition-colors duration-300 mx-auto max-w-screen-xl rounded-2xl"
>
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <a href="#">
                {{-- Logo para fundo transparente --}}
                <img x-show="!isScrolled && !mobileMenuOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                     src="{{ asset('images/logo-fusion-energy.png') }}" alt="Fusion Energy Logo" class="h-10">
                
                {{-- Logo para fundo claro (rolado) --}}
                <img x-show="isScrolled || mobileMenuOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                     src="{{ asset('images/logo-fusion-energy-dark.png') }}" alt="Fusion Energy Logo" class="h-10" style="display: none;">
            </a>

            <nav class="hidden md:flex items-center space-x-8" :class="isScrolled || mobileMenuOpen ? 'text-gray-700' : 'text-white'">
                <a href="#servicos" class="transition-colors duration-300 hover:text-[#FD9835]" :class="{ 'text-[#FD9835] font-bold': activeSection === 'servicos' }">Serviços</a>
                <a href="#fotovoltaico" class="transition-colors duration-300 hover:text-[#FD9835]" :class="{ 'text-[#FD9835] font-bold': activeSection === 'fotovoltaico' }">Fotovoltaico</a>
                <a href="#limpeza" class="transition-colors duration-300 hover:text-[#FD9835]" :class="{ 'text-[#FD9835] font-bold': activeSection === 'limpeza' }">Limpeza de Painéis</a>
                <a href="#instagram" class="transition-colors duration-300 hover:text-[#FD9835]" :class="{ 'text-[#FD9835] font-bold': activeSection === 'instagram' }">Nossos Trabalhos</a>
                <a href="#contato" class="transition-colors duration-300 hover:text-[#FD9835]" :class="{ 'text-[#FD9835] font-bold': activeSection === 'contato' }">Contato</a>
            </nav>

            <div class="hidden md:flex items-center">
                <a href="#contato" class="flex items-center gap-2 bg-[#FD9835] text-white font-semibold px-5 py-2 rounded-full hover:bg-orange-500 transition-all duration-300 transform hover:scale-105">
                    <i class="bi bi-whatsapp"></i>
                    <span>Fale Conosco</span>
                </a>
            </div>

            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="focus:outline-none text-2xl" :class="isScrolled || mobileMenuOpen ? 'text-gray-800' : 'text-white'">
                    <i x-show="!mobileMenuOpen" class="bi bi-list"></i>
                    <i x-show="mobileMenuOpen" class="bi bi-x"></i>
                </button>
            </div>
        </div>
    </div>

    <div 
        x-show="mobileMenuOpen" 
        @click.away="mobileMenuOpen = false"
        x-transition
        class="md:hidden mt-4 rounded-b-lg shadow-xl overflow-hidden" 
        style="display: none;"
    >
        <div class="p-4 space-y-4">
            <a href="#servicos" @click="mobileMenuOpen = false" class="block text-center text-gray-700 font-medium hover:text-[#2115AD]">Serviços</a>
            <a href="#fotovoltaico" @click="mobileMenuOpen = false" class="block text-center text-gray-700 font-medium hover:text-[#2115AD]">Fotovoltaico</a>
            <a href="#limpeza" @click="mobileMenuOpen = false" class="block text-center text-gray-700 font-medium hover:text-[#2115AD]">Limpeza de Painéis</a>
            <a href="#instagram" @click="mobileMenuOpen = false" class="block text-center text-gray-700 font-medium hover:text-[#2115AD]">Nossos Trabalhos</a>
            <a href="#contato" @click="mobileMenuOpen = false" class="block text-center text-gray-700 font-medium hover:text-[#2115AD]">Contato</a>
            
            <div class="border-t border-gray-500/20 pt-4">
                <a href="#contato" @click="mobileMenuOpen = false" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#FD9835] hover:bg-orange-500">
                    Fale Conosco
                </a>
            </div>
        </div>
    </div>
</header>