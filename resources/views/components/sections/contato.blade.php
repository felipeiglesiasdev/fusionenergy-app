<section id="contato" class="relative z-10 bg-gradient-to-br from-[#1e1b4b] to-[#2115AD] py-24 sm:py-32 overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Título da Seção --}}
        <div class="mx-auto max-w-2xl text-center text-white">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-3">
                Vamos Iniciar Seu Projeto?
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-300">
                Estamos a um clique de distância. Escolha seu canal preferido e vamos conversar sobre como podemos te ajudar a economizar com energia solar.
            </p>
        </div>

        {{-- CARDS DE CONTATO --}}
        <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 gap-8 lg:max-w-4xl lg:grid-cols-2">
            
            {{-- Card WhatsApp --}}
            <a href="https://wa.me/5532000000000?text=Olá! Vim pelo site e gostaria de um orçamento." 
               target="_blank"
               class="relative flex flex-col items-center justify-center p-8 rounded-2xl bg-black/20 backdrop-blur-lg border border-white/10 shadow-lg transition-all duration-300 hover:border-green-400/50 hover:scale-105 group">
                
                <div class="text-6xl text-green-400">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <h3 class="mt-6 text-2xl font-semibold text-white">Iniciar Conversa</h3>
                <p class="mt-2 text-gray-300">Orçamentos e dúvidas rápidas</p>

                <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-300 group-hover:opacity-100" 
                     style="background: radial-gradient(circle at center, rgba(44, 197, 94, 0.15) 0%, rgba(44, 197, 94, 0) 70%);">
                </div>
            </a>

            {{-- Card Instagram --}}
            <a href="https://www.instagram.com/SEU_USUARIO_AQUI" 
               target="_blank"
               class="relative flex flex-col items-center justify-center p-8 rounded-2xl bg-black/20 backdrop-blur-lg border border-white/10 shadow-lg transition-all duration-300 hover:border-pink-500/50 hover:scale-105 group">

                <div class="text-6xl text-pink-500">
                    <i class="bi bi-instagram"></i>
                </div>
                <h3 class="mt-6 text-2xl font-semibold text-white">Ver Nossos Projetos</h3>
                <p class="mt-2 text-gray-300">Acompanhe nosso trabalho de perto</p>

                <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-300 group-hover:opacity-100" 
                     style="background: radial-gradient(circle at center, rgba(219, 39, 119, 0.15) 0%, rgba(219, 39, 119, 0) 70%);">
                </div>
            </a>

        </div>
    </div>
</section>