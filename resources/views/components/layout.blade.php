<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/8566ff9c70.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col justify-between min-h-screen">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="absolute left-6 top-6 text-2xl text-orange-600 font-semibold">
            <a href="/"><i class="fa-solid fa-car"></i> Car-Marketplace</a>
        </div>
            <div class="flex items-center justify-center">
            <ul class="flex justify-center items-center gap-20 text-xl text-white h-20">
                <li class="hover:text-orange-600"><a href="/">Home</a></li>
                <li class="hover:text-orange-600"><a href="/cars">Buy Cars</a></li>
                <li class="hover:text-orange-600"><a href="/cars/new">Add New Car</a></li>
                <li class="hover:text-orange-600"><a href="/chat">Chat</a></li>
                @if(Auth::user() && Auth::user()->is_admin === 1)
                    <li class="hover:text-orange-600"><a href="/admin">Admin</a></li>
                @endif
            </ul>
            @if(Auth::check())
            <form action="/logout" method="POST" class="absolute right-12 text-xl text-white hover:text-orange-600">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
            @else
            <a href="/login" class="absolute right-12 text-xl text-white hover:text-orange-600"><i class="fa-solid fa-door-open"></i> Login</a>
            @endif
        </div>
    </nav>
        {{ $slot }}
    <footer {{$attributes->merge(['class' => 'bg-white border-gray-200 dark:bg-gray-900 text-white h-1/8 w-full p-2'])}}>
        <div class="flex flex-col items-end mr-4">
            <p>©{{date('Y')}} Car Marketplace</p>
            <p>carmarketplace@bestcars.com</p>
            <p>0123 456 789</p>
        </div>
    </footer>

    <x-flash-message />
</body>
</html>

