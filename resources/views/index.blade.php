<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('layouts.app')
@section('content')
@include('layouts.carousel')





<h1 class="flex justify-center text-5xl p-5 ">descobertas do dia</h1>

    


<div class="grid grid-cols-3 justify-items-center">
    <a href=""><img class="w-[170x] h-[170px]" src="https://m.media-amazon.com/images/I/51BMMOKhSJL._AC_SL1000_.jpg" alt=""></a>
    <a href=""><img class="w-[170x] h-[170px]" src="https://m.media-amazon.com/images/I/51BMMOKhSJL._AC_SL1000_.jpg" alt=""></a>
    <a href=""><img class="w-[170x] h-[170px]" src="https://m.media-amazon.com/images/I/51BMMOKhSJL._AC_SL1000_.jpg" alt=""></a>
</div>

<div class="flex justify-center m-28">
<a class="bg-transparent border-4 border-[#FFA800] text-[#FFA800] py-3 px-6 rounded-lg hover:border-blue-700 hover:text-blue-700">Mostrar mais</a>
</div>


<div class="flex justify-center ">
@include('layouts.card')
</div>
    @endsection
</body>
</html>
