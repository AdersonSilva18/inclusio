<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Currículo ATS-friendly - Modelo</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex justify-center px-4 py-6">
<div class="bg-white w-full max-w-2xl p-6 rounded shadow-lg">
    <header class="mb-6">
        <h1 class="text-2xl font-bold">{{$nome ?? ''}}</h1>
        <p class="text-gray-700 mt-1">Profissão / Área de Atuação</p>
        <div class="mt-2 text-gray-700 text-sm">
            <p><strong>E-mail:</strong> {{$email ?? ''}}</p>
            <p><strong>Telefone:</strong> {{$telefone ?? ''}}</p>
            <p><strong>Cidade/Estado:</strong> {{$cidade ?? ''}} - {{$estado ?? ''}}</p>
{{--            <p><strong>LinkedIn:</strong> linkedin.com/in/seu-perfil</p>--}}
        </div>
    </header>

    <section class="mb-6">
        <h2 class="text-lg font-semibold mb-2">Resumo Profissional</h2>
        <p class="text-gray-700 text-sm leading-relaxed">
            {{$resumo ?? ''}}
        </p>
    </section>

    <section class="mb-6">
        <h2 class="text-lg font-semibold mb-2">Experiência Profissional</h2>

        <article class="mb-4">
            <h3 class="font-bold text-sm">Cargo | Empresa X</h3>
            <p class="text-gray-600 text-xs">Período: 2021 - Atual</p>
            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mt-1">
                <li>Responsável por [atividade principal].</li>
                <li>Conquista/resultado que demonstre impacto (ex.: aumentou em 20%...).</li>
                <li>Ferramentas utilizadas (ex.: React, Node.js, GIT...).</li>
            </ul>
        </article>

        <article class="mb-4">
            <h3 class="font-bold text-sm">Cargo | Empresa Y</h3>
            <p class="text-gray-600 text-xs">Período: 2019 - 2021</p>
            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mt-1">
                <li>Principais atividades, responsabilidades e resultados obtidos.</li>
                <li>Métricas ou conquistas relevantes (ex.: redução de custos, otimização...).</li>
                <li>Principais *soft skills* desenvolvidas (ex.: comunicação, trabalho em equipe).</li>
            </ul>
        </article>
    </section>

    <section class="mb-6">
        <h2 class="text-lg font-semibold mb-2">Formação Acadêmica</h2>

        <article class="mb-4">
            <h3 class="font-bold text-sm">Curso Superior | Instituição XYZ</h3>
            <p class="text-gray-600 text-xs">Período: 2016 - 2020 (ou previsão de conclusão)</p>
            <p class="text-gray-700 text-sm mt-1">
                Descrição breve (ex.: área de estudo, TCC ou projetos relevantes).
            </p>
        </article>
    </section>
</div>
</body>
</html>
