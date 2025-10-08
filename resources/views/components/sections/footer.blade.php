<footer class="relative z-10 bg-[#171717] text-white">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            {{-- Logo e Slogan (agora centralizado no mobile) --}}
            <div class="flex flex-col items-center xl:items-start text-center xl:text-left space-y-4">
                <img class="h-12" src="{{ asset('images/logo-fusion-energy.png') }}" alt="Fusion Energy Logo">
                <p class="text-sm leading-6 text-gray-300 max-w-xs">
                    Energia que impulsiona o seu futuro. Soluções inovadoras e sustentáveis em engenharia elétrica.
                </p>
                {{-- Ícones de Redes Sociais --}}
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-[#FD9835] transition-colors">
                        <span class="sr-only">Instagram</span>
                        <i class="bi bi-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#FD9835] transition-colors">
                        <span class="sr-only">Facebook</span>
                        <i class="bi bi-facebook text-xl"></i>
                    </a>
                    <a href="https://wa.me/5532000000000" target="_blank" class="text-gray-400 hover:text-[#FD9835] transition-colors">
                        <span class="sr-only">WhatsApp</span>
                        <i class="bi bi-whatsapp text-xl"></i>
                    </a>
                </div>
            </div>

            {{-- Links de Navegação (agora centralizado no mobile) --}}
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 gap-8 text-center sm:text-left xl:col-span-2 xl:mt-0">
                {{-- Coluna Navegação e Serviços --}}
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Navegação</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#quem-somos" class="text-sm leading-6 text-gray-300 hover:text-white">Quem Somos</a>
                            </li>
                            <li>
                                <a href="#servicos" class="text-sm leading-6 text-gray-300 hover:text-white">Serviços</a>
                            </li>
                            <li>
                                <a href="#contato" class="text-sm leading-6 text-gray-300 hover:text-white">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Serviços</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#servicos" class="text-sm leading-6 text-gray-300 hover:text-white">Energia Solar</a>
                            </li>
                            <li>
                                <a href="#servicos" class="text-sm leading-6 text-gray-300 hover:text-white">Limpeza de Painéis</a>
                            </li>
                            <li>
                                <a href="#servicos" class="text-sm leading-6 text-gray-300 hover:text-white">Ar Condicionado</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Coluna Contato --}}
                <div class="md:grid md:grid-cols-1 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Contato</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex items-center justify-center sm:justify-start gap-3">
                                <i class="bi bi-telephone-fill text-[#6BB7E7]"></i>
                                <span class="text-sm leading-6 text-gray-300">(32) 99999-9999</span>
                            </li>
                            <li class="flex items-center justify-center sm:justify-start gap-3">
                                <i class="bi bi-envelope-fill text-[#6BB7E7]"></i>
                                <span class="text-sm leading-6 text-gray-300">contato@fusionenergy.com.br</span>
                            </li>
                             <li class="flex items-center justify-center sm:justify-start gap-3">
                                <i class="bi bi-geo-alt-fill text-[#6BB7E7]"></i>
                                <span class="text-sm leading-6 text-gray-300">Juiz de Fora - MG</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Barra de Copyright (já estava centralizada) --}}
        <div class="mt-16 border-t border-white/10 pt-8 text-center sm:mt-20 lg:mt-24">
            <p class="text-xs leading-5 text-gray-400">&copy; {{ date('Y') }} Fusion Energy. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>