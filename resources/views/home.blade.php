<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite("resources/css/app.css")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/esmalte.png') }}" type="image/x-icon">
    <title>Página Principal</title>
</head>
<body>
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
                    <a class="font-bold" href="{{ url('/contat') }}">Contato</a>
                    </li>
                </ul>
                <div class="absolute top[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
                <span class="material-symbols-outlined">close</span>
                </div>
            </div>
        </nav>
    </header>
    <section class="flex items-center justify-center w-full lg:px-80" id="home">
    <img class= "pr-7 h-[400px]" src={{ asset('img/banner.png') }}>

<div>
    <h1 class="text-black text-4xl p-6">CityNails</h1>
    <p class="px-6">
        Cuidar e pintar as unhas é uma prática que combina saúde, estética e bem-estar emocional. Ao incorporar essas atividades na rotina de autocuidado, é possível desfrutar de unhas bonitas, fortes e saudáveis, além de uma melhoria na autoestima e na imagem pessoal.
    </p>
</div>
    </section>
<div class="p-6">
    <h2 class="text-2xl">Destaques</h2>
    <h4 class="text-xl">Escolha o esmalte que mais combina com você!</h4>
</div>
<ul class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-10 px-6">
    <li class="item_wrap manha tarde noite">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
        <img src={{ asset('img/azulm.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"></a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Já Acordo Divando</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>

    <li class="item_wrap manha">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/maca.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"></a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Maçã do Amor</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>

    <li class="item_wrap manha tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/verdem.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"></a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">A Vez da Penélope</h4>
                <p class="paragraph">R$: 5,99
                </p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/corfeia.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Uma Abelha Me Contou</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/poema.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Poema</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/regendo.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Regendo Minha História</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/poprose.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Pop Rose</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/craveja.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Cravejada No Glitter</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/capricha.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Capricha No Glow</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/dona.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Dona da Festa</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/laranja.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Querida Leitora</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-200 rounded-3xl hover:bg-rose-300 ease-linear duration-200 flex items-center justify-center">
            <img src={{ asset('img/preto.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Preto Sépia</h4>
                <p class="paragraph">R$: 5,99</p>
            </div>
        </div>
    </li>
</ul>
<footer class="bg-zinc-200 mt-8">
    <section class="footer">
        <div class="px-6 pt-8">
            <ul class="flex items-start gap-2 pb-5">
                <li>
                    <div class="space-y-3">
                        <a href="#" class="text-4xl font-oswald uppercase">
                        City<span class="text-rose-400">Nails</span>
                        </a>
                    </div>
                </li>

                <li class="flex pl-16 space-x-8">
                    <div>
                        <h3 class="text-lg uppercase font-oswald">Contato</h3>
                        <p class="flex items-center gap-2 text-xs">
                            <span class="material-symbols-outlined text-lg text-rose-400">call</span>
                            +55 (11)XXXXX-XXXX
                        </p>
                    </div>

                    <div>
                        <h3 class="text-lg uppercase font-oswald">Email</h3>

                        <p class="flex items-center gap-2 text-xs">
                        <span class="material-symbols-outlined text-lg text-rose-400">mail</span>
                            city@nails.com
                        </p>
                    </div>
                </li>
            </ul>

            <div class="flex flex-col items-center border-t border-rose-400 py-5 md:flex-row md:justify-between">
                <p class="paragraph">CityNails</p>
                <p class="paragraph"> Copyright © 2024 Todos os direitos reservados.</p>
            </div>

        </div>
    </section>
</footer>


<!--JAVASCRIPT-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
const carouselItems = document.querySelectorAll('[data-carousel-item]');
const carouselPrevBtn = document.querySelector('[data-carousel-prev]');
const carouselNextBtn = document.querySelector('[data-carousel-next]');
let currentSlide = 0;
let timer; // Variável para armazenar o temporizador

// Função para mostrar o slide atual e esconder os outros
function showSlide(index) {
carouselItems.forEach((item, i) => {
if (i === index) {
    item.classList.remove('hidden');
} else {
    item.classList.add('hidden');
}
});
}

// Função para mostrar o próximo slide
function nextSlide() {
currentSlide = (currentSlide + 1) % carouselItems.length;
showSlide(currentSlide);
}

// Função para mostrar o slide anterior
function prevSlide() {
currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
showSlide(currentSlide);
}

// Adicionar ouvintes de eventos para os botões de navegação
carouselPrevBtn.addEventListener('click', function() {
clearTimeout(timer); // Limpa o temporizador ao clicar no botão de navegação
prevSlide();
autoAdvance(); // Reinicia o avanço automático
});

carouselNextBtn.addEventListener('click', function() {
clearTimeout(timer); // Limpa o temporizador ao clicar no botão de navegação
nextSlide();
autoAdvance(); // Reinicia o avanço automático
});

// Iniciar o avanço automático ao carregar a página
autoAdvance();
});

</script>
</body>
</html>