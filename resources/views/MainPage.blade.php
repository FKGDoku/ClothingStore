<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black">

<footer class="cursor-pointer flex justify-center items-center gap-25 text-white/80 font-light">
    <h1 class="active:text-white text-xl">футболки</h1>
    <h1 class="active:text-white text-xl text-xl">свитшоты</h1>
    <h1 class="active:text-white text-xl text-xl">верхняя одежда</h1>
    <h1 class="active:text-white text-xl text-xl">аксессуары</h1>
    <h1 class="active:text-white text-xl text-xl">все товары</h1>
</footer>

<div class="flex justify-center items-center mt-5">
<details class="inline-block">
    <summary class="text-white/80">цвета

    </summary>

    <div class=" mt-2 bg-gray-900/80 rounded-md p-3 shadow-md z-10 min-w-[180px]">
        <ul class="flex gap-3 justify-center">
            <!-- цвет: просто кнопка/свитч -->
            <li>
                белый
            </li>
            <li>
                графит
            </li>
            <li>
                серый
            </li>
            <li>
                хаки
            </li>
            <li>
                черный
            </li>
        </ul>
    </div>

</details>
</div>


</body>
</html>