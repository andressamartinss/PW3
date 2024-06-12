<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite("resources/css/app.css")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="/>
    
    <link rel="icon" href="{{ asset('img/esmalte.png') }}" type="image/x-icon">
    <title>Formulário contato</title>
</head>
<body class="bg-gradient-to-r from-rose-400 to-pink-400">
  <header class="flex bg-zinc-200 w-full p-3 flex-1 items-center justify-center">
    <nav class="container relative h-14 flex items-center justify-between">
        <div>
            <a href="{{ url('/home') }}"><img class="max-w-14" src={{ asset('img/logo.png') }}></a>
        </div>
        <div class="hidden border-b md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
            <ul class="flex items-center justify-around text-center gap-12 md:flex-row menu_mode">
                <li>
                <a class="font-bold" href="{{ url('/quemsomos') }}">Quem Somos</a>
                </li>
                <li>
                <a class="font-bold" href="{{ url('/contato') }}">Contato</a>
                </li>
            </ul>
            <div class="absolute top[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
            <span class="material-symbols-outlined">close</span>
            </div>
        </div>
    </nav>
</header>
<!-- Formulário -->
<div class="flex items-center justify-center pt-20">
<div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
  <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Form</h2>

  <form method="POST" action="{{route('site.contat')}}" class="flex flex-col">
  @csrf
    <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-pink-500 transition ease-in-out duration-150" placeholder="Nome" id="nome" name="nome">
    <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-pink-500 transition ease-in-out duration-150" placeholder="Sobrenome" id="sobre" name="sobre">
    <input type="email" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-pink-500 transition ease-in-out duration-150" placeholder="Email">
    <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-pink-500 transition ease-in-out duration-150" placeholder="Número" id="numero" name="num">
    <input type="date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-pink-500 transition ease-in-out duration-150" placeholder="Data de nascimento" id="nasc" name="nasc">
    <textarea name="message" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-pink-500 transition ease-in-out duration-150" placeholder="Mensagem"></textarea>

    <button type="submit" class="bg-gradient-to-r from-pink-500 to-rose-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-pink-800 hover:to-rose-700 transition ease-in-out duration-150">Enviar</button>
  </form>
</div>
</div>
</body>
</html>