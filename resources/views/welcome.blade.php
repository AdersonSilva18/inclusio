<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inClusio - Formulário</title>
    <!-- CDN do Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <div class="flex justify-between items-center px-16 py-7">
                <a href="{{ route('home') }}">
                    <h1 class="text-4xl" id="main-title">
                        .inClusio
                    </h1>
                </a>
                @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Perfil') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('home')">
                                {{ __('Criar Curriculo') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @else
                <div id="nav-links" class="flex space-x-4 text-2xl">
                    <a href="{{route('register')}}">cadastre-se</a>
                    <div id="vertical-bar"></div>
                    <a href="{{route('login')}}">login</a>
                </div>
                @endauth

            </div>
        </nav>
    </header>
    <section class="flex flex-col items-center justify-center font-libre">
        <h2 class="text-xl">Bem-vindo a inClusio!</h2>
        <p>A plataforma mais simplificada para a criação do seu currículo</p>
        <div id="horizontal-bar"></div>
    </section>
    <main class="mt-7 ml-12">
        <section>
            <p class="font-libre text-base">A partir de agora iremos solicitar algumas<br>
                informações para a criação do seu mais novo currículo digital</p>
        </section>
        <article>
            <form action="">
                <section class="flex flex-row space-x-4">
                    <div class="relative my-5 w-80">
                        <input type="text" id="nome" required
                            class="peer w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="nome" class="absolute left-0 bottom-2 text-black transition-all duration-300
           peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black
           peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            nome completo
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="absolute bottom-0 left-0 h-px w-full bg-black scale-x-0
              transition-transform duration-300 peer-focus:scale-x-100"></div>
                    </div>
                    <div class="relative my-5 w-72">
                        <input type="email" id="email" required
                            class="peer  w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="email" class="absolute left-0 bottom-2 text-black transition-all duration-300
           peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black
           peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            e-mail
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="absolute bottom-0 left-0 h-px w-full bg-black scale-x-0
              transition-transform duration-300 peer-focus:scale-x-100"></div>
                    </div>
                    <div class="relative my-5 w-52">
                        <input type="tel" id="telefone" required
                            class="peer  w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="telefone" class="absolute left-0 bottom-2 text-black transition-all duration-300
           peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black
           peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            telefone
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="absolute bottom-0 left-0 h-px w-full bg-black scale-x-0
              transition-transform duration-300 peer-focus:scale-x-100"></div>

                    </div>
                    <div class="relative my-5 w-52">
                        <input type="text" id="estado" required
                            class="peer  w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="estado" class="absolute left-0 bottom-2 text-black transition-all duration-300
           peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black
           peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            estado
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="absolute bottom-0 left-0 h-px w-full bg-black scale-x-0
              transition-transform duration-300 peer-focus:scale-x-100"></div>
                    </div>
                    <div class="relative my-5 w-52">
                        <input type="text" id="cidade" required
                            class="peer  w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="cidade" class="absolute left-0 bottom-2 text-black transition-all duration-300
           peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black
           peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            cidade
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="absolute bottom-0 left-0 h-px w-full bg-black scale-x-0
              transition-transform duration-300 peer-focus:scale-x-100"></div>
                    </div>
                </section>
                <section>
                    <div class="flex gap-36">
                        <div class="flex flex-col w-4/12">
                            <label for="resumo" class="text-black font-montagu">
                                resumo profissional
                            </label>
                            <textarea id="resumo" name="resumo"
                                class="w-full border border-gray-600 rounded px-3 py-2"></textarea>
                        </div>
                        <div class="w-8/12">
                            <p class="font-montagu text-base mb-1">experiência profissional</p>
                            <div class="font-montagu cursor-pointer flex items-center gap-1">
                                <span class="text-xl cursor-pointer">+</span>
                                <button type="button" onclick="openModal()" class="cursor-pointer">adicionar
                                    experiência</button>
                            </div>
                            <!-- Lista de Experiências -->
                            <div id="experienciasList" class="mt-2 space-y-4"></div>
                        </div>
                    </div>
                </section>
                <section class="mt-3">
                    <p class="font-libre">Selecione o template de currículo que deseja: </p>
                    <div class="flex gap-10 mt-1 font-libre">
                        <div>
                            <input type="radio" name="template" id="ats" value="ats" checked>
                            <label for="ats">ATS</label>
                        </div>
                        <div>
                            <input type="radio" name="template" id="criativo" value="criativo">
                            <label for="criativo">Criativo</label>
                        </div>
                        <div>
                            <input type="radio" name="template" id="europeu" value="europeu">
                            <label for="europeu">Europeu</label>
                        </div>
                        <div>
                            <input type="radio" name="template" id="ia" value="ia">
                            <label for="ia">IA</label>
                        </div>
                    </div>


                </section>

            </form>
        </article>
    </main>
    <!-- Modal corrigido -->
    <div id="experienceModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-60" onclick="closeModal()"></div>
        <div class="relative bg-white p-8 rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto mx-auto my-8">
            <h3 class="text-2xl font-montagu mb-4">Adicionar Experiência Profissional</h3>
            <form id="experienceForm" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative">
                        <input type="text" id="cargo" required
                            class="peer w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="cargo"
                            class="absolute left-0 bottom-2 text-black transition-all duration-300 peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            Cargo
                            <span class="text-red-500">*</span>
                        </label>
                    </div>

                    <div class="relative">
                        <input type="text" id="empresa" required
                            class="peer w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="empresa"
                            class="absolute left-0 bottom-2 text-black transition-all duration-300 peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            Empresa
                            <span class="text-red-500">*</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="relative">
                        <label for="dataInicio" class="text-black font-montagu">
                            Data de Início
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="month" id="dataInicio" required
                            class="peer w-full bg-transparent outline-none border-0 border-b border-black focus:ring-0" />

                    </div>

                    <div id="dataFimContainer" class="relative">
                        <label for="dataFim" class="text-black font-montagu">
                            Data de Término
                        </label>
                        <input type="month" id="dataFim" required
                            class="peer w-full bg-transparent outline-none border-0 border-b border-black focus:ring-0" />

                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="empregoAtual" class="w-4 h-4" onchange="toggleEndDate()" />
                    <label for="empregoAtual" class="font-montagu">Este é meu emprego atual</label>
                </div>

                <div class="flex flex-col">
                    <label for="descricaoExperiencia" class="text-black font-montagu">
                        Descrição das Atividades
                    </label>
                    <textarea id="descricaoExperiencia" name="descricaoExperiencia"
                        class="w-full border border-gray-600 rounded px-3 py-2" rows="5"></textarea>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <button type="button" onclick="closeModal()"
                        class="font-montagu px-4 py-2 border border-black rounded cursor-pointer">Cancelar</button>
                    <button type="submit"
                        class="font-montagu px-4 py-2 bg-black text-white rounded cursor-pointer">Salvar</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        let experiences = [];

        function openModal() {
            document.getElementById('experienceModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('experienceModal').classList.add('hidden');
            document.getElementById('experienceForm').reset();
            document.getElementById('empregoAtual').checked = false;
            toggleEndDate();
        }

        function toggleEndDate() {
            const checkBox = document.getElementById('empregoAtual');
            const endDate = document.getElementById('dataFim');
            endDate.disabled = checkBox.checked;
            if (checkBox.checked) {
                document.getElementById('dataFimContainer').classList.add('hidden');
                endDate.value = '';
            } else {
                document.getElementById('dataFimContainer').classList.remove('hidden');
            }
        }

        document.getElementById('experienceForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const checkBox = document.getElementById('empregoAtual');
            const endDate = document.getElementById('dataFim');

            // Validação condicional
            if (!checkBox.checked && !endDate.value) {
                alert('Por favor, preencha a data de término ou marque "Este é meu emprego atual"');
                return;
            }

            const experience = {
                cargo: document.getElementById('cargo').value,
                empresa: document.getElementById('empresa').value,
                dataInicio: document.getElementById('dataInicio').value,
                dataFim: checkBox.checked ? 'Atual' : document.getElementById('dataFim').value,
                empregoAtual: checkBox.checked,
                descricao: document.getElementById('descricaoExperiencia').value
            };

            experiences.push(experience);
            renderExperiences();
            closeModal();
        });

        function renderExperiences() {
            const list = document.getElementById('experienciasList');
            list.innerHTML = '';
            experiences.sort((a, b) => new Date(b.dataInicio) - new Date(a.dataInicio));

            experiences.forEach((exp, index) => {
                const div = document.createElement('div');
                div.className = 'border-l-4 border-black pl-4 py-2 mb-4';
                div.innerHTML = `
                <h4 class="font-montagu font-bold">${exp.cargo}</h4>
                <p class="font-montagu">${exp.empresa}</p>
                <p class="text-sm text-gray-600">
                    ${formatDate(exp.dataInicio)} - ${exp.empregoAtual ? 'Atual' : formatDate(exp.dataFim)}
                </p>
                <p class="mt-2 text-gray-700">${exp.descricao}</p>
                <button onclick="deleteExperience(${index})"
                    class="text-red-500 text-sm mt-2 hover:text-red-700 cursor-pointer">
                    Remover
                </button>
            `;
                list.appendChild(div);
            });
        }

        function formatDate(dateString) {
            if (!dateString) return '';
            const date = new Date(dateString);
            return date.toLocaleDateString('pt-BR', { month: '2-digit', year: 'numeric' });
        }

        function deleteExperience(index) {
            experiences.splice(index, 1);
            renderExperiences();
        }
    </script>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montagu+Slab:opsz,wght@16..144,100..700&display=swap');

    .font-libre {
        font-family: 'Libre Baskerville', serif;
    }

    .font-montagu {
        font-family: 'Montagu Slab', serif;
    }

    #main-title {
        font-family: 'Libre Baskerville', serif;
        font-weight: 700;
    }

    #nav-links a {
        font-family: 'Libre Baskerville', serif;
        font-weight: 500;
    }

    #vertical-bar {
        width: 1.5px;
        background-color: #000;
    }

    #horizontal-bar {
        width: 75%;
        height: 1.5px;
        background-color: #000;
        margin-top: 20px;
    }
</style>
