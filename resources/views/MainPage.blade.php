<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ФУТБОЛКИ</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black">

<footer class=" cursor-pointer text-white/80 font-light">
    <div class="ml-2 mt-2 mb-2 flex gap-5">
        <a href="{{route('registrationIndex')}}"
           class="rounded active:bg-white/70 active:shadow-lg shadow-white/50 duration-200 ease-in-out active:text-black">
            регистрируйся </a>
        <h1> / </h1>
        <a href="{{route('LoginIndex')}}" class="rounded active:bg-white/70 active:shadow-lg shadow-white/50 duration-200 ease-in-out active:text-black">
            входи </a>

        <input class="ease-in-out duration-500 focus:border-yellow-700 focus:text-yellow-700 text-white/70 focus:outline-none border-white/70 border-3 border-rounded rounded-lg "
               type="text" placeholder="поиск">
        <div class="text-white/80">
            @if(\Illuminate\Support\Facades\Auth::check())
                приветствуем тебя {{\Illuminate\Support\Facades\Auth::user()->name}}
            @endif
        </div>
        <div class="flex flex-row gap-2 active:shadow-lg shadow-white/40 rounded-lg duration-200 ease-in-out active:text-black active:bg-yellow-700 mr-5 ml-auto">
            <img class="h-7 w-7" src="{{ Vite::asset('resources/images/orthodox-cross.png') }}"
                 alt="Православный крест">
            <h1>быть Русским - жить вечно</h1>
        </div>
    </div>

    <div class="flex justify-center items-center gap-25">
        <h1 class="rounded-lg bg-white/70 shadow-lg shadow-white/50 duration-200 ease-in-out text-black text-xl">
            футболки</h1>
        <h1 class="rounded-lg active:bg-white/70 active:shadow-lg shadow-white/50 duration-200 ease-in-out active:text-black text-xl text-xl">
            свитшоты</h1>
        <h1 class="rounded-lg active:bg-white/70 active:shadow-lg shadow-white/50 duration-200 ease-in-out active:text-black text-xl text-xl">
            верхняя одежда</h1>
        <h1 class="rounded-lg active:bg-white/70 active:shadow-lg shadow-white/50 duration-200 ease-in-out active:text-black text-xl text-xl">
            аксессуары</h1>
        <h1 class="rounded-lg active:bg-white/70 active:shadow-lg shadow-white/50 duration-200 ease-in-out active:text-black text-xl text-xl">
            все товары</h1>
    </div>
</footer>

<div class="mt-5 flex justify-center items-center">
    <details class="inline-block">

        <summary class="font-light text-white/80 flex items-center gap-2 list-none cursor-pointer">
            цвета
            <svg class="caret w-4 h-4 transition-transform duration-300"
                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                      clip-rule="evenodd"/>
            </svg>
        </summary>


        <div class="font-light text-white/80 mt-2 rounded-md p-3 shadow-md z-10 min-w-[180px]">
            <ul class="cursor-pointer flex-col flex gap-2 justify-center">

                <li class="active:border-yellow-700 border border-1 border-white/50 active:text-white duration-150 ease-in-out">
                    белый
                </li>
                <li class="active:border-yellow-700 border border-1 border-white/50 active:text-white duration-150 ease-in-out">
                    графит
                </li>
                <li class="active:border-yellow-700 border border-1 border-white/50 active:text-white duration-150 ease-in-out">
                    серый
                </li>
                <li class="active:border-yellow-700 border border-1 border-white/50 active:text-white duration-150 ease-in-out">
                    хаки
                </li>
                <li class="active:border-yellow-700 border border-1 border-white/50 active:text-white duration-150 ease-in-out">
                    черный
                </li>
            </ul>
        </div>
    </details>
</div>

<style>

    details summary::-webkit-details-marker {
        display: none;
    }

    details summary::marker {
        display: none;
    }


    details[open] .caret {
        transform: rotate(180deg);
    }

</style>

</body>
</html>