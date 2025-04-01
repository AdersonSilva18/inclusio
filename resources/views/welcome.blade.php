<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inClusio - Formulário</title>
    <!-- CDN do Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <div class="flex justify-between items-center px-16 py-7">
                <a href="{{ route('home') }}" class="text-4xl" id="main-title">
                    <h1>
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
                                                clip-rule="evenodd" />
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
            <form method="POST" id="mainForm" action="{{ route('generate.pdf') }}">
                @csrf
                <section class="flex flex-row space-x-4">
                    <div class="relative my-5 w-80">
                        <input type="text" name="nome" id="nome" required
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
                        <input type="email" name="email" id="email" required
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
                        <input type="tel" name="telefone" id="telefone" required
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
                        <input type="text" name="estado" id="estado" required
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
                        <input type="text" name="cidade" id="cidade" required
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
                    <div class="flex gap-48">
                        <div class="flex flex-col w-5/12">
                            <div class="flex flex-col">
                                <label for="resumo" class="text-black font-montagu">
                                    resumo profissional
                                </label>
                                <textarea id="resumo" name="resumo"
                                    class="w-full border border-gray-600 rounded px-3 py-2" rows="5"></textarea>
                            </div>
                            <section class="mt-4">
                                <p class="font-montagu text-base mb-1">formações educacionais</p>
                                <div class="font-montagu cursor-pointer flex items-center gap-1">
                                    <span class="text-xl cursor-pointer">+</span>
                                    <button type="button" onclick="openEducationModal()"
                                        class="cursor-pointer">adicionar
                                        formação</button>
                                </div>
                                <!-- Lista de Formações -->
                                <div id="educationsList" class="mt-2 space-y-4 w-full"></div>
                            </section>

                            <section class="mt-3">
                                <p class="font-libre">Selecione o template de currículo que deseja: </p>
                                <div class="flex gap-10 mt-1 font-libre">
                                    <div class="cursor-pointer">
                                        <input type="radio" name="template" id="ats" value="ats" checked
                                            class="accent-black">
                                        <label for="ats" class="cursor-pointer">ATS</label>
                                    </div>
                                    <div class="cursor-pointer">
                                        <input type="radio" name="template" id="criativo" value="criativo"
                                            class="accent-black">
                                        <label for="criativo" class="cursor-pointer">Criativo</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="template" id="europeu" value="europeu"
                                            class="accent-black">
                                        <label for="europeu" class="cursor-pointer">Europeu</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="template" id="ia" value="ia" class="accent-black">
                                        <label for="ia" class="cursor-pointer">IA</label>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="w-7/12"> <!-- Ajuste de width -->
                            <p class="font-montagu text-base mb-1">experiência profissional</p>
                            <div class="font-montagu cursor-pointer flex items-center gap-1">
                                <span class="text-xl cursor-pointer">+</span>
                                <button type="button" onclick="openModal()" class="cursor-pointer">adicionar
                                    experiência</button>
                            </div>
                            <!-- Lista de Experiências -->
                            <div id="experienciasList" class="mt-2 space-y-4 w-full"></div>
                            <!-- Alterado para w-full -->
                        </div>
                    </div>
                </section>


                <input type="submit" value="Criar Currículo"
                    class="mt-5 bg-black text-white font-montagu px-4 py-2 mb-5 rounded cursor-pointer" />
            </form>
        </article>
    </main>
    <!-- Modal de Formações -->
    <div id="educationModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-60" onclick="closeEducationModal()"></div>
        <div class="relative bg-white p-8 rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto mx-auto my-8">
            <h3 class="text-2xl font-montagu mb-4">Adicionar Formação Acadêmica</h3>
            <form id="educationForm" class="space-y-4" onsubmit="handleEducationSubmit(event)">
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative">
                        <input type="text" id="instituicao" required
                            class="peer w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="instituicao"
                            class="absolute left-0 bottom-2 text-black transition-all duration-300 peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            Instituição
                            <span class="text-red-500">*</span>
                        </label>
                    </div>

                    <div class="relative">
                        <input type="text" id="grau" required
                            class="peer w-full bg-transparent pb-2 pt-4 outline-none border-0 border-b border-black focus:ring-0" />
                        <label for="grau"
                            class="absolute left-0 bottom-2 text-black transition-all duration-300 peer-focus:-translate-y-6 peer-focus:text-sm peer-focus:text-black peer-valid:-translate-y-6 peer-valid:text-sm peer-placeholder-shown:translate-y-0 font-montagu">
                            Curso
                            <span class="text-red-500">*</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="relative">
                        <label for="dataInicioEducacao" class="text-black font-montagu">
                            Data de Início
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="month" id="dataInicioEducacao" required
                            class="peer w-full bg-transparent outline-none border-0 border-b border-black focus:ring-0" />
                    </div>

                    <div id="dataFimEducacaoContainer" class="relative">
                        <label for="dataFimEducacao" class="text-black font-montagu">
                            Data de Conclusão
                        </label>
                        <input type="month" id="dataFimEducacao"
                            class="peer w-full bg-transparent outline-none border-0 border-b border-black focus:ring-0" />
                    </div>
                </div>

                <div class="flex items-center gap-2 my-3">
                    <input type="checkbox" id="cursandoAtual" class="w-4 h-4" onchange="toggleEducationEndDate()" />
                    <label for="cursandoAtual" class="font-montagu">Atualmente cursando</label>
                </div>

                <div class="flex flex-col">
                    <label for="descricaoEducacao" class="text-black font-montagu">
                        Descrição
                    </label>
                    <textarea id="descricaoEducacao" name="descricaoEducacao"
                        class="w-full border border-gray-600 rounded px-3 py-2" rows="3"></textarea>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <button type="button" onclick="closeEducationModal()"
                        class="font-montagu px-4 py-2 border border-black rounded cursor-pointer">Cancelar</button>
                    <button type="submit" class="font-montagu px-4 py-2 bg-black text-white rounded cursor-pointer">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal corrigido -->
    <div id="experienceModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-60" onclick="closeModal()"></div>
        <div class="relative bg-white p-8 rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto mx-auto my-8">
            <h3 class="text-2xl font-montagu mb-4">Adicionar Experiência Profissional</h3>
            <form id="experienceForm" class="space-y-4" onsubmit="handleExperienceSubmit(event)">
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
        // Adicione esta função para lidar com o submit da educação
        function handleEducationSubmit(event) {
            event.preventDefault(); // Impede o submit do formulário principal

            const checkBox = document.getElementById('cursandoAtual');
            const endDate = document.getElementById('dataFimEducacao');

            if (!checkBox.checked && !endDate.value) {
                alert('Por favor, preencha a data de conclusão ou marque "Atualmente cursando"');
                return;
            }

            const education = {
                instituicao: document.getElementById('instituicao').value,
                grau: document.getElementById('grau').value,
                dataInicio: document.getElementById('dataInicioEducacao').value,
                dataFim: checkBox.checked ? 'Cursando' : document.getElementById('dataFimEducacao').value,
                cursando: checkBox.checked,
                descricao: document.getElementById('descricaoEducacao').value
            };

            educations.push(education);
            renderEducations();
            closeEducationModal();
        }

        // Função de submit para experiências
        function handleExperienceSubmit(event) {
            event.preventDefault();

            const checkBox = document.getElementById('empregoAtual');
            const endDate = document.getElementById('dataFim');

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
        }


        let educations = [];

        function openEducationModal() {
            document.getElementById('educationModal').classList.remove('hidden');
        }

        function closeEducationModal() {
            document.getElementById('educationModal').classList.add('hidden');
            document.getElementById('educationForm').reset();
            document.getElementById('cursandoAtual').checked = false;
            toggleEducationEndDate();
        }

        function toggleEducationEndDate() {
            const checkBox = document.getElementById('cursandoAtual');
            const endDate = document.getElementById('dataFimEducacao');
            endDate.disabled = checkBox.checked;
            if (checkBox.checked) {
                document.getElementById('dataFimEducacaoContainer').classList.add('hidden');
                endDate.value = '';
            } else {
                document.getElementById('dataFimEducacaoContainer').classList.remove('hidden');
            }
        }

        function renderEducations() {
            const list = document.getElementById('educationsList');
            list.innerHTML = '';
            educations.sort((a, b) => new Date(b.dataInicio) - new Date(a.dataInicio));

            educations.forEach((edu, index) => {
                const div = document.createElement('div');
                div.className = 'border-l-4 border-black pl-4 py-2 mb-4 w-8/12';
                div.innerHTML = `
            <h4 class="font-montagu font-bold">${edu.grau}</h4>
            <p class="font-montagu">${edu.instituicao}</p>
            <p class="text-sm text-gray-600">
                ${formatDate(edu.dataInicio)} - ${edu.cursando ? 'Cursando' : formatDate(edu.dataFim)}
            </p>
            ${edu.descricao ? `
                <p class="mt-2 text-gray-700 break-words">
                    ${edu.descricao}
                </p>` : ''}
            <button onclick="deleteEducation(${index})"
                class="text-red-500 text-sm mt-2 hover:text-red-700 cursor-pointer">
                Remover
            </button>
        `;
                list.appendChild(div);
            });
        }

        function deleteEducation(index) {
            educations.splice(index, 1);
            renderEducations();
        }

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

        function renderExperiences() {
            const list = document.getElementById('experienciasList');
            list.innerHTML = '';
            experiences.sort((a, b) => new Date(b.dataInicio) - new Date(a.dataInicio));

            experiences.forEach((exp, index) => {
                const div = document.createElement('div');
                div.className = 'border-l-4 border-black pl-4 py-2 mb-4 w-8/12';
                div.innerHTML = `
            <h4 class="font-montagu font-bold">${exp.cargo}</h4>
            <p class="font-montagu">${exp.empresa}</p>
            <p class="text-sm text-gray-600">
                ${formatDate(exp.dataInicio)} - ${exp.empregoAtual ? 'Atual' : formatDate(exp.dataFim)}
            </p>
            <p class="mt-2 text-gray-700 break-words w-full">
                ${exp.descricao}
            </p>
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

        let mainform = document.getElementById('mainForm');

        function updateHiddenInputs() {
            let hiddenEducations = document.getElementById('educationsHidden');
            let hiddenExperiences = document.getElementById('experiencesHidden');

            if (hiddenEducations) hiddenEducations.remove();
            if (hiddenExperiences) hiddenExperiences.remove();

            hiddenEducations = document.createElement('input');
            hiddenEducations.type = 'hidden';
            hiddenEducations.name = 'educations';
            hiddenEducations.id = 'educationsHidden';
            hiddenEducations.value = JSON.stringify(educations);

            hiddenExperiences = document.createElement('input');
            hiddenExperiences.type = 'hidden';
            hiddenExperiences.name = 'experiences';
            hiddenExperiences.id = 'experiencesHidden';
            hiddenExperiences.value = JSON.stringify(experiences);

            mainform.appendChild(hiddenEducations);
            mainform.appendChild(hiddenExperiences);
        }

        mainform.addEventListener('submit', function(event) {
            updateHiddenInputs();
        });

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
