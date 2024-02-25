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

        <h1 class="text-blue-500 text-5xl font-bold">
            CONEXO
        </h1>

        <!-- <div id="acertou" class="hidden"> -->
        <div id="acertou" class="hidden">
            <span class="font-bold mx-auto inline-flex">Parabéns!</span>
            <p>
                Você conseguiu em <span id="acertouNumeroTentativas"></span> tentativas.
            </p>

            <span class="bg-sky-500 font-semibold rounded-lg p-3 w-fit inline-flex gap-x-2
            hover:bg-sky-600 hover:cursor-pointer mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-zinc-50 size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                </svg>
                Compartilhe
            </span>
        </div>

        <div class="mx-auto">
            <span class="font-semibold" id="dataAtual"></span>
            <span class="capitalize">acertos: <span class="font-bold" id="numeroAcertos">0</span></span>
            <span class="capitalize">tentativas: <span class="font-bold" id="numeroTentativas">0</span></span>
        </div>
        <span id="grupos" class="flex flex-col gap-y-1"></span>

        <main id="tabuleiro" class="grid grid-cols-4 gap-2 min-w-6/12 m-auto text-uppercase"></main>

        <!-- <div
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
        </div> -->
    </div>
</body>

<!-- <script src="scripts.js"></script> -->
<script src="script.js"></script>

</html>