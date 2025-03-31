<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela de Login - inClusio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-white flex flex-col">

<header class="flex justify-between items-center p-4">
    <h1 class="text-xl font-bold italic">.inClusio</h1>
    <a href="{{route('register')}}" class="text-gray-700 hover:underline">cadastre-se</a>
</header>

<main class="flex-grow flex items-center justify-center">
    <div class="border rounded-md max-w-sm w-full p-6 shadow-md">
        <h2 class="text-center text-lg font-bold mb-6">Entrar</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="block mb-1 font-semibold">e-mail</label>
            <input
                id="email"
                type="email"
                placeholder="Digite seu e-mail"
                class="w-full mb-4 border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            />

            <label for="password" class="block mb-1 font-semibold">senha</label>
            <input
                id="password"
                type="password"
                placeholder="Digite sua senha"
                class="w-full mb-4 border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            />

            <div class="flex items-center mb-4">
                <input
                    id="remember"
                    type="checkbox"
                    class="mr-2 focus:ring-0"
                />
                <label for="remember">me mantenha conectado</label>
            </div>

            <button
                type="submit"
                class="w-full bg-black text-white py-2 rounded font-semibold hover:bg-gray-800 transition-colors"
            >
                ENTRAR
            </button>

            <p class="mt-4 text-center">
                ainda não tem cadastro?
                <a href="{{route('register')}}" class="font-semibold hover:underline">cadastre-se</a>
            </p>
        </form>
    </div>
</main>

<footer class="p-4 text-right">
    <span class="text-sm">.inC</span>
</footer>

</body>
</html>
