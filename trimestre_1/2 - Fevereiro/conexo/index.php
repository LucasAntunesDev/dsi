<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conexo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-zinc-50">
    <div class="flex flex-col justifycenter items-center h-screen w-screen">
        <div class="mx-auto">
            <span class="font-semibold">23/02/2024</span>
            <span class="capitalize">tentativas: <span class="font-bold">0</span></span>
        </div>

        <div
            class="grid grid-cols-4 gap-2 min-w-6/12 m-auto *:p-6 *:rounded-md *:flex *:items-center 
            font-semibold *:hover:cursor-pointer *:focus:scale-90 *:transition *:duration-300 *:ease-in-out
            *:uppercase">
            <button id="água" onclick="ativarBotao(this)" class="bg-slate-800">água</button>

            <button id="autora" onclick="ativarBotao(this)" class="bg-slate-800">autora</button>

            <button id="dó" onclick="ativarBotao(this)" class="bg-slate-800">dó</button>

            <button id="ali" onclick="ativarBotao(this)" class="bg-slate-800">ali</button>

            <button id="ré" onclick="ativarBotao(this)" class="bg-slate-800">ré</button>

            <button id="carvão" onclick="ativarBotao(this)" class="bg-slate-800">carvão</button>

            <button id="juíza" onclick="ativarBotao(this)" class="bg-slate-800">juíza</button>

            <button id="fá" onclick="ativarBotao(this)" class="bg-slate-800">fá</button>

            <button id="sol" onclick="ativarBotao(this)" class="bg-slate-800">sol</button>

            <button id="aqui" onclick="ativarBotao(this)" class="bg-slate-800">aqui</button>

            <button id="testemunha" onclick="ativarBotao(this)" class="bg-slate-800">testemunha</button>

            <button id="acolá" onclick="ativarBotao(this)" class="bg-slate-800">acolá</button>

            <button id="vento" onclick="ativarBotao(this)" class="bg-slate-800">vento</button>

            <button id="mi" onclick="ativarBotao(this)" class="bg-slate-800">mi</button>

            <button id="lá" onclick="ativarBotao(this)" class="bg-slate-800">lá</button>

            <button id="si" onclick="ativarBotao(this)" class="bg-slate-800">si</button>
        </div>
    </div>
</body>

<script src="scripts.js"></script>

</html>