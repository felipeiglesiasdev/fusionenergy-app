<div class="fixed bottom-6 right-6 z-40 group animate-fade-in">
    <a href="https://wa.me/553298321024?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais..." 
        target="_blank" 
        class="relative flex items-center justify-center w-16 h-16 bg-green-500 rounded-full shadow-lg
                transition-transform duration-300 transform hover:scale-110 hover:bg-green-600"
        aria-label="Fale Conosco pelo WhatsApp"
    >
        <i class="bi bi-whatsapp text-white text-3xl"></i>
        
        {{-- Balão de texto que aparece no hover --}}
        <div class="absolute right-full mr-4 px-4 py-2 bg-[#171717] text-white text-sm font-semibold 
                    rounded-lg shadow-lg whitespace-nowrap opacity-0 
                    transition-all duration-300 transform -translate-x-2 
                    group-hover:opacity-100 group-hover:translate-x-0">
            Fale Conosco!
            {{-- Setinha do balão --}}
            <div class="absolute top-1/2 -right-2 transform -translate-y-1/2 w-0 h-0 
                        border-t-8 border-t-transparent
                        border-b-8 border-b-transparent
                        border-l-8 border-l-[#171717]">
            </div>
        </div>
    </a>
</div>
