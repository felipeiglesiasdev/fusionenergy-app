{{-- Removemos o Alpine.js daqui, não é mais necessário para o parallax --}}
<section class="relative h-screen flex items-center justify-center 
                bg-gradient-to-br from-[#171717] via-[#2115AD] to-[#171717]
                text-white overflow-hidden pt-20">

    <div class="absolute inset-0 z-0">
        <div class="fixed inset-0 z-0">
            <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-[#FD9835] rounded-full mix-blend-screen filter blur-2xl opacity-50 animate-blob"></div>
            <div class="absolute top-1/2 right-1/3 w-96 h-96 bg-[#6BB7E7] rounded-full mix-blend-screen filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/2 w-72 h-72 bg-[#2115AD] rounded-full mix-blend-screen filter blur-2xl opacity-50 animate-blob animation-delay-4000"></div>
        </div>
    </div>

    {{-- O conteúdo de texto permanece na frente e rolará normalmente --}}
    <div class="relative z-10 text-center max-w-5xl mx-auto px-6">
        <h1 class="text-[2.75rem] md:text-[3.2rem] font-extrabold leading-tight mb-6 animate-slide-up">
            Energia Que Impulsiona o Seu Futuro
        </h1>
        
        <p class="text-base md:text-[1.4rem] mb-4 opacity-90 animate-fade-in animation-delay-500">
            Soluções completas em energia solar e engenharia elétrica.
        </p>
        
        <p class="text-sm md:text-[1.0rem] mb-8 font-extrabold opacity-80 animate-fade-in animation-delay-500">
            Atendemos Juiz de Fora e Região.
        </p>

        <a href="#contato" class="inline-flex items-center gap-3 bg-[#FD9835] text-[#171717] font-bold px-6 py-3 rounded-full text-base 
                                  hover:bg-orange-400 transition-all duration-300 transform hover:scale-105 shadow-lg animate-fade-in animation-delay-1000">
            <i class="bi bi-lightning-charge-fill"></i>
            <span>Quero um Orçamento</span>
        </a>
    </div>
</section>