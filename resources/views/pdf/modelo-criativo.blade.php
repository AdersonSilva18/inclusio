<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Currículo Criativo</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex justify-center py-6 px-4">
<!-- Container principal -->
<div class="w-full max-w-4xl bg-white shadow-lg flex flex-col md:flex-row rounded overflow-hidden">

    <!-- Lateral esquerda (perfil) -->
    <aside class="md:w-1/3 bg-gradient-to-b from-indigo-600 to-indigo-500 text-white p-8 flex flex-col items-center">
        <!-- Foto de perfil (pode substituir a div por <img> real) -->
        <div class="w-32 h-32 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-4 overflow-hidden">
            <!-- Foto substitua a div abaixo com: <img src="sua_foto.jpg" alt="Foto de Perfil" class="object-cover w-full h-full" /> -->
            <span class="text-center text-sm">Sua Foto</span>
        </div>
        <!-- Nome e posição -->
        <h1 class="text-2xl font-bold">Seu Nome Completo</h1>
        <p class="italic mb-4">Profissão | Cargo</p>

        <!-- Seção de contato -->
        <div class="text-sm space-y-1 mt-auto">
            <p><strong>E-mail:</strong> <a href="mailto:email@exemplo.com" class="underline">email@exemplo.com</a></p>
            <p><strong>Telefone:</strong> (XX) XXXXX-XXXX</p>
            <p><strong>Cidade/Estado:</strong> Exemplo - BR</p>
            <p><strong>LinkedIn:</strong> <a href="#" class="underline">linkedin.com/in/seuperfil</a></p>
            <p><strong>GitHub:</strong> <a href="#" class="underline">github.com/seuusuario</a></p>
        </div>
    </aside>

    <!-- Corpo principal (conteúdo) -->
    <main class="md:w-2/3 p-8 space-y-8">
        <!-- Resumo -->
        <section>
            <h2 class="text-xl font-semibold mb-2 border-b border-gray-200 pb-1 uppercase tracking-wide">
                Sobre Mim
            </h2>
            <p class="text-gray-700 text-sm leading-relaxed">
                Parágrafo de apresentação, explicando brevemente sua área de atuação,
                qualidades, objetivos e o que o diferencia de outros profissionais.
            </p>
        </section>

        <!-- Habilidades -->
        <section>
            <h2 class="text-xl font-semibold mb-2 border-b border-gray-200 pb-1 uppercase tracking-wide">
                Habilidades
            </h2>
            <!-- Exemplos de barras de progresso ou listas de habilidades -->
            <ul class="mt-4 space-y-2">
                <li>
                    <h3 class="font-bold text-gray-800 text-sm">HTML / CSS / JavaScript</h3>
                    <div class="bg-gray-200 rounded-full h-2 mt-1">
                        <div class="bg-indigo-600 h-2 rounded-full w-3/4"></div>
                    </div>
                </li>
                <li>
                    <h3 class="font-bold text-gray-800 text-sm">React & Tailwind CSS</h3>
                    <div class="bg-gray-200 rounded-full h-2 mt-1">
                        <div class="bg-indigo-600 h-2 rounded-full w-2/3"></div>
                    </div>
                </li>
                <li>
                    <h3 class="font-bold text-gray-800 text-sm">Node.js & Express</h3>
                    <div class="bg-gray-200 rounded-full h-2 mt-1">
                        <div class="bg-indigo-600 h-2 rounded-full w-1/2"></div>
                    </div>
                </li>
                <li>
                    <h3 class="font-bold text-gray-800 text-sm">UI/UX Design</h3>
                    <div class="bg-gray-200 rounded-full h-2 mt-1">
                        <div class="bg-indigo-600 h-2 rounded-full w-1/3"></div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Experiência -->
        <section>
            <h2 class="text-xl font-semibold mb-2 border-b border-gray-200 pb-1 uppercase tracking-wide">
                Experiência
            </h2>
            <div class="space-y-4">
                <article>
                    <h3 class="font-bold text-gray-800 text-sm">Empresa X | Desenvolvedor Front-end</h3>
                    <p class="text-xs text-gray-600">Jan 2021 - Atual</p>
                    <p class="text-sm text-gray-700 mt-1">
                        Responsável pelo desenvolvimento de aplicações SPA usando React e Tailwind.
                        Principais conquistas incluem a otimização da performance e a implementação de
                        novas funcionalidades que resultaram em um aumento de 20% na satisfação dos usuários.
                    </p>
                </article>
                <article>
                    <h3 class="font-bold text-gray-800 text-sm">Empresa Y | Estágio em TI</h3>
                    <p class="text-xs text-gray-600">Ago 2019 - Dez 2020</p>
                    <p class="text-sm text-gray-700 mt-1">
                        Auxiliou na implementação de soluções Web e na manutenção de sistemas internos.
                        Realizou testes de qualidade e trabalhou em parceria com equipes multidisciplinares
                        para melhorias de UX.
                    </p>
                </article>
            </div>
        </section>

        <!-- Formação Acadêmica -->
        <section>
            <h2 class="text-xl font-semibold mb-2 border-b border-gray-200 pb-1 uppercase tracking-wide">
                Formação
            </h2>
            <div class="space-y-4">
                <article>
                    <h3 class="font-bold text-gray-800 text-sm">Graduação em Análise e Desenvolvimento de Sistemas</h3>
                    <p class="text-xs text-gray-600">Faculdade ABC | 2017 - 2020</p>
                    <p class="text-sm text-gray-700 mt-1">
                        Principais disciplinas: Algoritmos, Estrutura de Dados, Desenvolvimento Web, Banco de Dados.
                    </p>
                </article>
                <!-- Adicione outras formações se desejar -->
            </div>
        </section>

        <!-- Projetos (opcional) -->
        <section>
            <h2 class="text-xl font-semibold mb-2 border-b border-gray-200 pb-1 uppercase tracking-wide">
                Projetos
            </h2>
            <div class="space-y-4">
                <article>
                    <h3 class="font-bold text-gray-800 text-sm">Projeto Nome</h3>
                    <p class="text-sm text-gray-700 mt-1">
                        Descrição breve: tecnologias utilizadas, funcionalidades principais e conquistas.
                        Exemplo: "Desenvolvimento de uma aplicação de controle de estoque
                        utilizando React, Node.js e MongoDB. Implementação de testes unitários e
                        integração contínua, resultando em maior confiabilidade e qualidade do código."
                    </p>
                </article>
                <!-- Acrescente outros projetos relevantes -->
            </div>
        </section>
    </main>
</div>
</body>
</html>
