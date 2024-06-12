<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite("resources/css/app.css")
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="/>
    <link rel="icon" href="{{ asset('img/esmalte.png') }}" type="image/x-icon">
    <title>Quem Somos</title>
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
    <main class="w-full px-6">
        <section class="w-full" id="home">
            <div class="bg-[url('../../public/img/seila.jpg')] w-full h-[30rem] bg-center bg-cover bg-no-repeat">
                <div class="p-20 flex justify-center items-start h-full flex-col sm:max-w-1/3 border border-b-gray-700">    
                    <h1 class="text-5xl md:min-w-96 text-zinc-100">Conheça a CityNail</h1>
                    <p class="md:w-1/3 md:min-w-96 text-balance text-zinc-100 py-5">Lorem ipsum dolor sit amet. Est exercitationem aliquam et asperiores autem et velit nostrum ut galisum eveniet et rerum quia id rerum corrupti.</p>
                </div>    
            </div>
        </section>

        <section id="sobrenos">
            <div class="container flex flex-col gap-10">
                <div class="flex-1">
                    <h2 class="section__title py-5">Sobre nós</h2>
                    <div class="separator"></div>
                    <p>Lorem ipsum dolor sit amet. Est exercitationem aliquam et asperiores autem et velit nostrum ut galisum eveniet et rerum quia id rerum corrupti. Et possimus omnis et veritatis quia quo eveniet rerum quo libero aspernatur est reiciendis voluptates ab rerum recusandae. Nam provident voluptatem quo voluptate obcaecati id architecto accusamus id temporibus reiciendis id quia consequatur. Et dolores accusantium non magni autem ut ipsam eius ut internos laborum est suscipit quaerat.

                        Est omnis aliquam sit sequi accusamus nam tenetur commodi hic libero magni qui aperiam reprehenderit et aperiam delectus. A libero totam est enim beatae ut minima ducimus ut temporibus officiis non velit atque est nihil voluptates. Ut veniam sapiente est reprehenderit maiores id molestias provident et ipsam ratione in dolore quos.
                        
                        Et fugit dicta At incidunt quam sit ducimus totam. Et nesciunt quia sit facilis nihil est eligendi ipsa est cupiditate ratione. Aut voluptatum officia aut dolores ipsa rem minima ducimus est quasi galisum ut minus ullam ut tenetur dolorem sed reiciendis voluptatibus. Ut quia consequatur aut doloribus illo 33 repellendus consequatur et vitae quod eos quia ullam aut facilis delectus.</p>
                        <p>Lorem ipsum dolor sit amet. Est exercitationem aliquam et asperiores autem et velit nostrum ut galisum eveniet et rerum quia id rerum corrupti. Et possimus omnis et veritatis quia quo eveniet rerum quo libero aspernatur est reiciendis voluptates ab rerum recusandae. Nam provident voluptatem quo voluptate obcaecati id architecto accusamus id temporibus reiciendis id quia consequatur. Et dolores accusantium non magni autem ut ipsam eius ut internos laborum est suscipit quaerat.

                            Est omnis aliquam sit sequi accusamus nam tenetur commodi hic libero magni qui aperiam reprehenderit et aperiam delectus. A libero totam est enim beatae ut minima ducimus ut temporibus officiis non velit atque est nihil voluptates. Ut veniam sapiente est reprehenderit maiores id molestias provident et ipsam ratione in dolore quos.
                            
                            Et fugit dicta At incidunt quam sit ducimus totam. Et nesciunt quia sit facilis nihil est eligendi ipsa est cupiditate ratione. Aut voluptatum officia aut dolores ipsa rem minima ducimus est quasi galisum ut minus ullam ut tenetur dolorem sed reiciendis voluptatibus. Ut quia consequatur aut doloribus illo 33 repellendus consequatur et vitae quod eos quia ullam aut facilis delectus.</p>
                </div>

                <div class="flex justify-center">
                    <img class="items-center" src={{ asset('img/seila.jpg') }} alt="imgAbt" class="w-full">
                </div>

                <p>Lorem ipsum dolor sit amet. Est exercitationem aliquam et asperiores autem et velit nostrum ut galisum eveniet et rerum quia id rerum corrupti. Et possimus omnis et veritatis quia quo eveniet rerum quo libero aspernatur est reiciendis voluptates ab rerum recusandae. Nam provident voluptatem quo voluptate obcaecati id architecto accusamus id temporibus reiciendis id quia consequatur. Et dolores accusantium non magni autem ut ipsam eius ut internos laborum est suscipit quaerat.

                    Est omnis aliquam sit sequi accusamus nam tenetur commodi hic libero magni qui aperiam reprehenderit et aperiam delectus. A libero totam est enim beatae ut minima ducimus ut temporibus officiis non velit atque est nihil voluptates. Ut veniam sapiente est reprehenderit maiores id molestias provident et ipsam ratione in dolore quos.
                    
                    Et fugit dicta At incidunt quam sit ducimus totam. Et nesciunt quia sit facilis nihil est eligendi ipsa est cupiditate ratione. Aut voluptatum officia aut dolores ipsa rem minima ducimus est quasi galisum ut minus ullam ut tenetur dolorem sed reiciendis voluptatibus. Ut quia consequatur aut doloribus illo 33 repellendus consequatur et vitae quod eos quia ullam aut facilis delectus.</p>
            

            <div class="flex-1">
                <h2 class="section__title py-5">Valores</h2>
                <div class="separator"></div>
                <p>Lorem ipsum dolor sit amet. Est exercitationem aliquam et asperiores autem et velit nostrum ut galisum eveniet et rerum quia id rerum corrupti. Et possimus omnis et veritatis quia quo eveniet rerum quo libero aspernatur est reiciendis voluptates ab rerum recusandae. Nam provident voluptatem quo voluptate obcaecati id architecto accusamus id temporibus reiciendis id quia consequatur. Et dolores accusantium non magni autem ut ipsam eius ut internos laborum est suscipit quaerat.

                    Est omnis aliquam sit sequi accusamus nam tenetur commodi hic libero magni qui aperiam reprehenderit et aperiam delectus. A libero totam est enim beatae ut minima ducimus ut temporibus officiis non velit atque est nihil voluptates. Ut veniam sapiente est reprehenderit maiores id molestias provident et ipsam ratione in dolore quos.
                    
                    Et fugit dicta At incidunt quam sit ducimus totam. Et nesciunt quia sit facilis nihil est eligendi ipsa est cupiditate ratione. Aut voluptatum officia aut dolores ipsa rem minima ducimus est quasi galisum ut minus ullam ut tenetur dolorem sed reiciendis voluptatibus. Ut quia consequatur aut doloribus illo 33 repellendus consequatur et vitae quod eos quia ullam aut facilis delectus.</p>
            </div>
        </div>
        </section>
    </main>
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
</body>
</html>