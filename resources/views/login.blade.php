<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#C58B3E]">
    <div class="max-w-5xl px-4 py-4">
        <div>
          <h1 class="text-4xl font-bold">SHOPIX</h1>
          <p class="text-3xl font-bold">
            Sua jornada de compras começa aqui.
          </p>
        </div>
        <form class="w-full bg-[#e49b21]  rounded-3xl grid grid-cols-2 mt-4 h-[370px]">
          <div class="flex flex-col gap-4 bg-[#f6e0bb] items-center justify-center rounded-3xl p-10">
            <h1 class="text-3xl font-bold mb-5">Seja bem vindo de volta</h1>
            <input
              class="outline-none w-full rounded-full p-3 text-base"
              type="text"
              placeholder="Email"
            />
            <input
              class="outline-none w-full rounded-full p-3 text-base"
              type="password"
              placeholder="Senha"
            />            <button class="font-bold text-2xl bg-[#ffa800] border border-black rounded-full px-3">Login</button>

          </div>
          <div class="flex items-center flex-col justify-center space-y-5">
            <h1 class="text-3xl font-bold">Criar uma conta</h1>
            <a href="{{ route('cadastro') }}" class="cursor-pointer font-bold text-2xl bg-[#ffa800] border border-black rounded-full px-3">Cadastrar</a>
          </div>
        </form>
      </div>
</body>
</html>