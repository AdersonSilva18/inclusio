<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo - Modelo</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex justify-center p-4">
<div class="bg-white w-full max-w-4xl shadow-lg rounded p-8">
    <header class="border-b pb-4 mb-6">
        <h1 class="text-3xl font-bold">Seu Nome</h1>
        <h2 class="text-xl text-gray-600">Sua Profissão / Cargo</h2>
        <p class="mt-2 text-gray-700">
            Pequeno resumo profissional ou descrição que destaque suas principais habilidades e objetivos.
            Exemplo: "Desenvolvedor Front-end especializado em criar interfaces intuitivas e responsivas."
        </p>
    </header>

    <div class="md:flex md:space-x-6">
        <aside class="md:w-1/3 mb-6 md:mb-0">
            <section class="mb-6">
                <h3 class="text-xl font-semibold border-b pb-2 mb-2">Contato</h3>
                <ul class="space-y-1 text-gray-700">
                    <li><strong>Endereço:</strong> Rua Exemplo, 123</li>
                    <li><strong>Telefone:</strong> (xx) xxxx-xxxx</li>
                    <li><strong>E-mail:</strong> seuemail@exemplo.com</li>
                    <li><strong>LinkedIn:</strong> linkedin.com/in/seu-perfil</li>
                    <li><strong>GitHub:</strong> github.com/seu-usuario</li>
                </ul>
            </section>

            <section class="mb-6">
                <h3 class="text-xl font-semibold border-b pb-2 mb-2">Habilidades</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-700">
                    <li>HTML / CSS / JavaScript</li>
                    <li>Frameworks JS (React, Vue, Angular)</li>
                    <li>Tailwind CSS / Bootstrap</li>
                    <li>Versionamento GIT</li>
                </ul>
            </section>

            <section>
                <h3 class="text-xl font-semibold border-b pb-2 mb-2">Idiomas</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-700">
                    <li>Português (nativo)</li>
                    <li>Inglês (avançado)</li>
                    <li>Espanhol (básico)</li>
                </ul>
            </section>
        </aside>

        <main class="md:w-2/3 space-y-8">
            <section>
                <h3 class="text-xl font-semibold border-b pb-2 mb-4">Experiência Profissional</h3>

                <div class="mb-4">
                    <h4 class="font-bold">Empresa X</h4>
                    <span class="text-gray-600 text-sm">Desenvolvedor Front-end (2021 - Atual)</span>
                    <ul class="list-disc list-inside mt-1 text-gray-700">
                        <li>Desenvolvimento de aplicações responsivas usando React e Tailwind.</li>
                        <li>Manutenção de sistemas e otimização de performance.</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold">Empresa Y</h4>
                    <span class="text-gray-600 text-sm">Estagiário em TI (2019 - 2021)</span>
                    <ul class="list-disc list-inside mt-1 text-gray-700">
                        <li>Auxílio na implementação de novas funcionalidades em sistemas internos.</li>
                        <li>Criação de relatórios e dashboards para acompanhamento de métricas.</li>
                    </ul>
                </div>
            </section>

            <section>
                <h3 class="text-xl font-semibold border-b pb-2 mb-4">Formação Acadêmica</h3>

                <div class="mb-4">
                    <h4 class="font-bold">Graduação em Análise e Desenvolvimento de Sistemas</h4>
                    <span class="text-gray-600 text-sm">Faculdade ABC (2017 - 2020)</span>
                    <p class="text-gray-700 mt-1">
                        Principais disciplinas: Algoritmos, Estrutura de Dados, Engenharia de Software, Banco de Dados, etc.
                    </p>
                </div>

            </section>

            <section>
                <h3 class="text-xl font-semibold border-b pb-2 mb-4">Projetos</h3>

                <div class="mb-4">
                    <h4 class="font-bold">Projeto 1</h4>
                    <p class="text-gray-700">
                        Descrição resumida do projeto, tecnologias usadas e resultados obtidos. Ex.: "Criação de uma plataforma
                        de e-commerce com React e Node.js, obtendo 1000+ usuários no primeiro mês."
                    </p>
                </div>

                <div>
                    <h4 class="font-bold">Projeto 2</h4>
                    <p class="text-gray-700">
                        Descrição do projeto, realçando suas contribuições e impacto. Ex.: "Desenvolvimento de um aplicativo
                        mobile para gestão de tarefas usando Flutter, alcançando 4.5 de rating na Play Store."
                    </p>
                </div>
            </section>
        </main>
    </div>
</div>
</body>
</html>
