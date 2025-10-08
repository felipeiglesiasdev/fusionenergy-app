<section 
    x-data="{ visible: false }" 
    x-intersect.once.threshold.0.3="visible = true"
    id="servicos" 
    class="relative z-10 bg-gray-50 pt-32 pb-24 sm:pb-32"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#171717] mb-3">
                Nossas Soluções
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Oferecemos um portfólio completo de serviços em energia e climatização, com a excelência que seu projeto merece.
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">

                {{-- Card 1 --}}
                <div x-show="visible" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="relative flex flex-col rounded-2xl bg-white/50 backdrop-blur-md border border-gray-900/10 p-8 transition-all duration-300 hover:-translate-y-1 hover:border-[#FD9835] group">
                    <div class="absolute -top-7 left-6 bg-gray-50 p-2 rounded-full ring-8 ring-gray-50">
                        <i class="bi bi-sun text-4xl text-[#2115AD]"></i>
                    </div>
                    <dt class="mt-6 text-xl font-semibold leading-7 text-[#171717]">Projeto Fotovoltaico</dt>
                    <dd class="mt-2 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Desenvolvemos e executamos projetos de energia solar totalmente personalizados.</p>
                        <p class="mt-6">
                            <a href="https://wa.me/5532000000000?text=Olá! Gostaria de saber mais sobre o serviço de Projeto Fotovoltaico." target="_blank" class="text-sm font-semibold leading-6 text-[#2115AD] group-hover:text-[#FD9835] transition-colors">
                                Quero saber mais <span aria-hidden="true">→</span>
                            </a>
                        </p>
                    </dd>
                </div>

                {{-- Card 2 --}}
                <div x-show="visible" x-transition:enter="transition ease-out duration-500 delay-200" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="relative flex flex-col rounded-2xl bg-white/50 backdrop-blur-md border border-gray-900/10 p-8 transition-all duration-300 hover:-translate-y-1 hover:border-[#FD9835] group">
                    <div class="absolute -top-7 left-6 bg-gray-50 p-2 rounded-full ring-8 ring-gray-50">
                        <i class="bi bi-clipboard-data text-4xl text-[#2115AD]"></i>
                    </div>
                    <dt class="mt-6 text-xl font-semibold leading-7 text-[#171717]">Homologação e Monitoramento</dt>
                    <dd class="mt-2 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Cuidamos da burocracia e oferecemos sistemas para você acompanhar sua geração de energia.</p>
                        <p class="mt-6">
                            <a href="https://wa.me/5532000000000?text=Olá! Gostaria de saber mais sobre Homologação e Monitoramento." target="_blank" class="text-sm font-semibold leading-6 text-[#2115AD] group-hover:text-[#FD9835] transition-colors">
                                Quero saber mais <span aria-hidden="true">→</span>
                            </a>
                        </p>
                    </dd>
                </div>

                {{-- Card 3 --}}
                <div x-show="visible" x-transition:enter="transition ease-out duration-500 delay-[400ms]" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="relative flex flex-col rounded-2xl bg-white/50 backdrop-blur-md border border-gray-900/10 p-8 transition-all duration-300 hover:-translate-y-1 hover:border-[#FD9835] group">
                    <div class="absolute -top-7 left-6 bg-gray-50 p-2 rounded-full ring-8 ring-gray-50">
                         <i class="bi bi-droplet-half text-4xl text-[#2115AD]"></i>
                    </div>
                    <dt class="mt-6 text-xl font-semibold leading-7 text-[#171717]">Limpeza de Painéis</dt>
                    <dd class="mt-2 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Maximize a eficiência do seu sistema com nossa limpeza técnica especializada.</p>
                        <p class="mt-6">
                            <a href="https://wa.me/5532000000000?text=Olá! Gostaria de saber mais sobre Limpeza de Painéis." target="_blank" class="text-sm font-semibold leading-6 text-[#2115AD] group-hover:text-[#FD9835] transition-colors">
                                Quero saber mais <span aria-hidden="true">→</span>
                            </a>
                        </p>
                    </dd>
                </div>

                {{-- Card 4 --}}
                <div x-show="visible" x-transition:enter="transition ease-out duration-500 delay-[600ms]" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="relative flex flex-col rounded-2xl bg-white/50 backdrop-blur-md border border-gray-900/10 p-8 transition-all duration-300 hover:-translate-y-1 hover:border-[#FD9835] group">
                    <div class="absolute -top-7 left-6 bg-gray-50 p-2 rounded-full ring-8 ring-gray-50">
                         <i class="bi bi-tools text-4xl text-[#2115AD]"></i>
                    </div>
                    <dt class="mt-6 text-xl font-semibold leading-7 text-[#171717]">Instalação de Ar Condicionado</dt>
                    <dd class="mt-2 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Instalação precisa de todos os tipos de sistemas de ar condicionado para o seu conforto.</p>
                        <p class="mt-6">
                            <a href="https://wa.me/5532000000000?text=Olá! Gostaria de saber mais sobre Instalação de Ar Condicionado." target="_blank" class="text-sm font-semibold leading-6 text-[#2115AD] group-hover:text-[#FD9835] transition-colors">
                                Quero saber mais <span aria-hidden="true">→</span>
                            </a>
                        </p>
                    </dd>
                </div>

                {{-- Card 5 --}}
                <div x-show="visible" x-transition:enter="transition ease-out duration-500 delay-[800ms]" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="relative flex flex-col rounded-2xl bg-white/50 backdrop-blur-md border border-gray-900/10 p-8 transition-all duration-300 hover:-translate-y-1 hover:border-[#FD9835] group">
                    <div class="absolute -top-7 left-6 bg-gray-50 p-2 rounded-full ring-8 ring-gray-50">
                        <i class="bi bi-gear text-4xl text-[#2115AD]"></i>
                    </div>
                    <dt class="mt-6 text-xl font-semibold leading-7 text-[#171717]">Manutenção Preventiva</dt>
                    <dd class="mt-2 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Aumente a vida útil e a eficiência do seu equipamento, evitando falhas e gastos inesperados.</p>
                        <p class="mt-6">
                            <a href="https://wa.me/5532000000000?text=Olá! Gostaria de saber mais sobre Manutenção Preventiva." target="_blank" class="text-sm font-semibold leading-6 text-[#2115AD] group-hover:text-[#FD9835] transition-colors">
                                Quero saber mais <span aria-hidden="true">→</span>
                            </a>
                        </p>
                    </dd>
                </div>

                {{-- Card 6 --}}
                <div x-show="visible" x-transition:enter="transition ease-out duration-500 delay-[1000ms]" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="relative flex flex-col rounded-2xl bg-white/50 backdrop-blur-md border border-gray-900/10 p-8 transition-all duration-300 hover:-translate-y-1 hover:border-[#FD9835] group">
                    <div class="absolute -top-7 left-6 bg-gray-50 p-2 rounded-full ring-8 ring-gray-50">
                        <i class="bi bi-wind text-4xl text-[#2115AD]"></i>
                    </div>
                    <dt class="mt-6 text-xl font-semibold leading-7 text-[#171717]">Higienização de Sistemas</dt>
                    <dd class="mt-2 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Respire um ar mais puro. Realizamos a limpeza completa do seu sistema de ar condicionado.</p>
                        <p class="mt-6">
                            <a href="https://wa.me/5532000000000?text=Olá! Gostaria de saber mais sobre Higienização de Sistemas." target="_blank" class="text-sm font-semibold leading-6 text-[#2115AD] group-hover:text-[#FD9835] transition-colors">
                                Quero saber mais <span aria-hidden="true">→</span>
                            </a>
                        </p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</section>