<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inClusio - Formulário</title>
    <!-- CDN do Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50">

<!-- Cabeçalho / Header -->
<header class="flex items-center justify-between px-6 py-4 bg-white shadow-sm">
    <h1 class="text-2xl font-bold">.inClusio</h1>
    <nav>
        <ul class="flex space-x-4">
            <li>
                <a href="{{route('register')}}" class="text-xl font-medium hover:underline">
                    cadastre-se
                </a>
            </li>
            <li>
                <a href="{{route('login')}}" class="text-xl font-medium hover:underline">
                    fazer login
                </a>
            </li>
        </ul>
    </nav>
</header>

<!-- Conteúdo Principal -->
<main class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow rounded">

    <div class="text-center">
        <h2 class="text-xl font-semibold mb-1">Bem-vindo a inClusio!</h2>
        <p class="text-gray-600">A plataforma mais simplificada para a criação do seu currículo</p>

        <hr class="my-4"/>
    </div>

    <p class="mb-6">
        A partir de agora iremos solicitar algumas informações para a criação do seu
        mais novo currículo digital
    </p>

    <form>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mb-6">
            <div class="col-span-2">
                <label for="nome-completo" class="inline-block text-gray-800 mb-1">
                    nome completo
                    <span class="text-red-600">*</span>
                </label>
                <input
                    type="text"
                    id="nome-completo"
                    class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    required
                />
            </div>
            <div>
                <label for="email" class="block font-medium mb-1">
                    e-mail
                    <span class="text-red-600">*</span>
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    required
                />
            </div>
            <div>
                <label for="telefone" class="block font-medium mb-1">
                    telefone
                    <span class="text-red-600">*</span>
                </label>
                <input
                    type="tel"
                    id="telefone"
                    name="telefone"
                    class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    required
                />
            </div>
            <div>
                <label for="pais" class="block font-medium mb-1">
                    país
                    <span class="text-red-600">*</span>
                </label>
                <input
                    type="text"
                    id="pais"
                    name="pais"
                    class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    required
                />
            </div>
            <div>
                <label for="cidade" class="block font-medium mb-1">
                    cidade
                    <span class="text-red-600">*</span>
                </label>
                <input
                    type="text"
                    id="cidade"
                    name="cidade"
                    class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    required
                />
            </div>
        </div>

        <div class="mb-6">
            <label for="resumo" class="block font-medium mb-1">Resumo Profissional</label>
            <textarea
                id="resumo"
                name="resumo"
                rows="5"
                class="w-full border border-gray-600 rounded px-3 py-2"
            ></textarea>
        </div>

        <div class="mb-6" id="experience-container">
            <h2 class="block mb-2">Experiência Profissional</h2>
            <div class="flex flex-col sm:flex-row sm:space-x-2 mb-2">
                <div class="w-full">
                    <label for="cargo" class="block font-medium mb-1">
                        cargo
                    </label>
                    <input
                        type="text"
                        name="cargo[]"
                        class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    />
                </div>
                <div class="w-full">
                    <label for="empresa" class="block font-medium mb-1">
                        empresa
                    </label>
                    <input
                        type="text"
                        name="empresa[]"
                        class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    />
                </div>
                <div class="w-full">
                    <label for="ano" class="block font-medium mb-1">
                        ano
                    </label>
                    <input
                        type="text"
                        name="ano[]"
                        class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    />
                </div>
            </div>
            <button
                id="btn-add-experience"
                type="button"
                class="text-blue-600 text-sm hover:underline cursor-pointer"
            >
                + adicionar experiência
            </button>
        </div>

        <div class="mb-6" id="formacao-container">
            <label class="block font-medium mb-2">Formações Educacionais</label>
            <div class="flex flex-col sm:flex-row sm:space-x-2 mb-2">
                <div class="w-full">
                    <label for="formacao" class="block font-medium mb-1">
                        formação
                    </label>
                    <input
                        type="text"
                        name="formacao[]"
                        class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    />
                </div>
                <div class="w-full">
                    <label for="ano-formacao" class="block font-medium mb-1">
                        ano
                    </label>
                    <input
                        type="text"
                        name="ano-formacao[]"dw
                        class="
                          block
                          w-full
                          border-b-2
                          border-black
                          focus:outline-none
                          focus:border-blue-500
                          py-1
                        "
                    />
                </div>
            </div>
            <button type="button" class="text-blue-600 text-sm hover:underline  cursor-pointer" id="btn-add-formacao">
                + adicionar formação
            </button>
        </div>

        <!-- Botão de submissão ou próximo passo -->
        <div>
            <button
                type="submit"
                class="bg-blue-600 text-white font-medium px-6 py-2 rounded hover:bg-blue-700"
            >
                Enviar
            </button>
        </div>
    </form>
</main>

<!-- Rodapé (opcional) -->
<footer class="text-right mr-16 text-black text-xl mt-8">
    <p>.inC</p>
</footer>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btnAddExperience = document.getElementById("btn-add-experience");
        const experienceContainer = document.getElementById("experience-container");
        const formacaoContainer = document.getElementById("formacao-container");
        const btnAddformacao = document.getElementById("btn-add-formacao");

        btnAddExperience.addEventListener("click", function () {
            const newExperienceRow = document.createElement("div");
            newExperienceRow.className = "flex flex-col sm:flex-row sm:space-x-2 mb-2";

            newExperienceRow.innerHTML = `
          <div class="w-full mt-4">
            <label class="block font-medium mb-1">
              cargo
              <span class="text-red-600">*</span>
            </label>
            <input
              type="text"
              name="cargo[]"
              class="block w-full border-b-2 border-black focus:outline-none focus:border-blue-500 py-1"
              required
            />
          </div>
          <div class="w-full mt-4">
            <label class="block font-medium mb-1">
              empresa
              <span class="text-red-600">*</span>
            </label>
            <input
              type="text"
              name="empresa[]"
              class="block w-full border-b-2 border-black focus:outline-none focus:border-blue-500 py-1"
              required
            />
          </div>
          <div class="w-full mt-4">
            <label class="block font-medium mb-1">
              ano
              <span class="text-red-600">*</span>
            </label>
            <input
              type="text"
              name="ano[]"
              class="block w-full border-b-2 border-black focus:outline-none focus:border-blue-500 py-1"
              required
            />
          </div>
        `;
            experienceContainer.insertBefore(newExperienceRow, btnAddExperience);
        });

        btnAddformacao.addEventListener("click", function (){
            const newEformacaoRow = document.createElement("div");
            newEformacaoRow.className = "flex flex-col sm:flex-row sm:space-x-2 mb-2";
            newEformacaoRow.innerHTML = `
          <div class="w-full mt-4">
            <label class="block font-medium mb-1">
              formacao
              <span class="text-red-600">*</span>
            </label>
            <input
              type="text"
              name="formacao[]"
              class="block w-full border-b-2 border-black focus:outline-none focus:border-blue-500 py-1"
              required
            />
          </div>
          <div class="w-full mt-4">
            <label class="block font-medium mb-1">
              ano
              <span class="text-red-600">*</span>
            </label>
            <input
              type="text"
              name="ano-formacao[]"
              class="block w-full border-b-2 border-black focus:outline-none focus:border-blue-500 py-1"
              required
            />
          </div>
        `;
            formacaoContainer.insertBefore(newEformacaoRow, btnAddformacao);
        })
    });
</script>
</body>
</html>
