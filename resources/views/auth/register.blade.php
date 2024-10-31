<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
<div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">Zaloguj się</h2>
    <form action="{{route("register.post")}}" method="POST" class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-600">Nazwa użytkownika</label>
            <input type="text" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Adres e-mail</label>
            <input type="email" id="email" name="email" required
                   class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-600">Hasło</label>
            <input type="password" id="password" name="password" required
                   class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-600">Powtórz hasło</label>
            <input type="password" id="password" name="password" required
                   class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex items-center justify-between">
            <label class="flex items-center text-sm">
                <input type="checkbox" class="text-blue-500 rounded focus:ring-0 focus:ring-offset-0">
                <span class="ml-2 text-gray-600">Zapamiętaj mnie</span>
            </label>

        </div>
        <button type="submit"
                class="w-full py-2 px-4 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Zarejestruj się
        </button>
    </form>
    <p class="mt-4 text-center text-sm text-gray-600">
        Masz już konto? <a href="{{route("login")}}" class="text-blue-600 hover:underline">Zaloguj się</a>
    </p>
</div>
</body>
</html>
