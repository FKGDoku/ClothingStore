<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ВХОДИ</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black">

<div class="mt-15 flex justify-center items-center flex-col">
    <h1 class="font-bold text-white/70 text-3xl"> ВХОДИ</h1><br>


    <form class="mt-10 items-center justify-center rounded-md border-10 gap-5 py-6 px-12 bg-yellow-900 flex flex-col border-white/40 border"
          method="POST" action="{{route('LoginStore')}}">
        @csrf

        <img class="w-30 h-30" src="{{ Vite::asset('resources/images/eagleRUSSIA.svg') }}" alt="Русский орел">

        <div
                class="w-full min-h-[3rem] flex items-center justify-center transition-all duration-150"
                role="status"
                aria-live="polite"
        >
            @if ($errors->any())
                <ul class="text-black text-lg font-light flex items-center justify-center flex-col">
                    @foreach ($errors->all() as $error)
                        <li class="px-2 py-1">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @else
                <span class="invisible">&nbsp;</span>
            @endif
        </div>

        <input class="duration-400 ease-in-out focus:outline-none border-5 border-black font-light text-yellow-700 rounded bg-black"
               placeholder="вводи имя" name="name" type="text">
        <input class="duration-400 ease-in-out focus:outline-none border-5 border-black font-light text-white/80 rounded bg-black text-yellow-700"
               placeholder="вводи пароль" name="password" type="password">
        <input class="border-4 border-black active:bg-white/60 ease-in-out duration-200 active:text-yellow-900 rounded font-light text-white/70 rounded bg-black bg-black"
               type="submit" value="войти">
    </form>

</div>

</body>
</html>