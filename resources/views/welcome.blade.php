<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inClusio - Formulário</title>
    <!-- CDN do Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header>
        <nav>
            <div class="flex justify-between items-center px-16 py-7">
                <h1 class="text-4xl" id="main-title">
                    .inClusio
                </h1>
                <div id="nav-links" class="flex space-x-4 text-2xl">
                    <a href="#">cadastre-se</a>
                    <div id="vertical-bar"></div>
                    <a href="#">login</a>
                </div>
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
                        <div>
                            <p class="font-montagu text-base">experiência profissional</p>
                            <button>+ adicionar experiência</button>
                        </div>
                    </div>

                </section>
            </form>
        </article>
    </main>
</body>
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

        btnAddformacao.addEventListener("click", function () {
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
