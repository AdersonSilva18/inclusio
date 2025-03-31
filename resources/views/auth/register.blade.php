<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela de Cadastro - inClusio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen flex flex-col bg-white">

<header class="flex justify-between items-center p-4">
    <h1 class="text-xl font-bold italic">.inClusio</h1>
    <a href="{{route('login')}}" class="text-gray-700 hover:underline">fazer login</a>
</header>

<main class="flex-grow flex items-center justify-center">
    <div class="border rounded-md max-w-sm w-full p-6 shadow-md">
        <h2 class="text-center text-lg font-bold mb-6">vamos realizar o seu cadastro</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="email" class="block mb-1 font-semibold">nome</label>
            <input
                id="nome"
                name="name"
                type="text"
                placeholder="Digite seu nome"
                class="w-full mb-4 border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            />

            <label for="email" class="block mb-1 font-semibold">e-mail</label>
            <input
                id="email"
                name="email"
                type="email"
                placeholder="Digite seu e-mail"
                class="w-full mb-4 border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            />

            <label for="password" class="block mb-1 font-semibold">senha</label>
            <input
                id="password"
                name="password"
                type="password"
                placeholder="Digite sua senha"
                class="w-full mb-4 border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            />

            <label for="confirmPassword" class="block mb-1 font-semibold">repita a senha</label>
            <input
                id="confirmPassword"
                name="password_confirmation"
                type="password"
                placeholder="Repita sua senha"
                class="w-full mb-4 border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            />

            <button
                type="submit"
                class="w-full bg-black text-white py-2 rounded font-semibold hover:bg-gray-800 transition-colors"
            >
                CADASTRAR
            </button>

            <p class="mt-4 text-center">
                já possui cadastro?
                <a href="{{route('login')}}" class="font-semibold hover:underline">entre</a>
            </p>
        </form>
    </div>
</main>

<footer class="p-4 text-right">
    <span class="text-sm">.inC</span>
</footer>

</body>
</html>
