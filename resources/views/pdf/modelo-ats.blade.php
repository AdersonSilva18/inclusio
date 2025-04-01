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
        @foreach($experiences as $experiencia)
            <article class="mb-4">
                <h3 class="font-bold text-sm">{{$experiencia['cargo']}} | {{$experiencia['empresa']}}</h3>
                <p class="text-gray-600 text-xs">Período: {{$experiencia['dataInicio']}} - {{$experiencia['dataFim']}}</p>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mt-1">
                    <li>{{$experiencia['descricao']}}</li>
                </ul>
            </article>

        @endforeach
    </section>

    <section class="mb-6">
        <h2 class="text-lg font-semibold mb-2">Formação Acadêmica</h2>
        @foreach($educations as $educacaoItem)
            <article class="mb-4">
                <h3 class="font-bold text-sm">{{$educacaoItem['grau']}} | {{$educacaoItem['instituicao']}}</h3>
                <p class="text-gray-600 text-xs">Período: {{$educacaoItem['dataInicio']}} - {{$educacaoItem['dataFim']}}</p>
                <p class="text-gray-700 text-sm mt-1">
                    {{$educacaoItem['descricao']}}
                </p>
            </article>

        @endforeach
    </section>
</div>
</body>
</html>
