<section class="relative z-10 h-[80vh] w-full flex items-center justify-center overflow-hidden bg-[#171717]">
    <video 
        class="absolute z-0 min-w-full min-h-full object-cover" 
        autoplay 
        loop 
        muted 
        playsinline
    >
        <source src="{{ asset('videos/limpeza-paineis.mp4') }}" type="video/mp4">
        Seu navegador não suporta vídeos em HTML5.
    </video>

    <div class="absolute inset-0 bg-[#171717] opacity-70 z-10"></div>

    <div class="relative z-20 text-center text-white px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">
            Limpeza de Painéis Solares
        </h2>
        <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8 opacity-90">
            Recupere a máxima eficiência do seu sistema fotovoltaico. A sujeira pode reduzir sua geração de energia em até 25%.
        </p>
        
        {{-- ===== NOVO BOTÃO "FANTASMA" ===== --}}
        <a href="https://wa.me/5532000000000?text=Olá! Quero saber mais sobre o serviço de Limpeza de Painéis Solares." 
           target="_blank" 
           class="inline-flex items-center gap-2 bg-transparent text-white font-bold px-8 py-3 rounded-full text-base 
                  border-2 border-[#FD9835] 
                  transition-all duration-300 
                  hover:bg-[#FD9835] hover:text-[#171717] hover:scale-105"
        >
            <i class="bi bi-calendar2-check"></i>
            <span>Agendar Limpeza</span>
        </a>
    </div>
</section>