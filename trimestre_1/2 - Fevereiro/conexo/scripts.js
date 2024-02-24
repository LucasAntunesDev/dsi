let jogadas = []

const tentativas = []

let tentativa = {
    "selecionado": jogadas
}


let grupos = [
    {
        numero: 3,
        tema: "Advérbios de lugar",
        palavras: ["lá", "ali", "aqui", "acolá"],
    },
    {
        numero: 2,
        tema: "Fontes de energia",
        palavras: ["vento", "sol", "carvão", "água"],
    },
    {
        numero: 4,
        tema: "Participantes num processo judicial",
        palavras: ["ré", "juíza", "testemunha", "autora"],
    },
    { numero: 1, tema: "Notas musicais", palavras: ["dó", "mi", "si", "fá"] },
]

/*
    for (let grupo of grupos) {
    console.log("Número: " + grupo.numero)
    console.log("Tema: " + grupo.tema)
    console.log("Palavras: " + grupo.palavras.join(", "))
    console.log()
}*/

const ativarBotao = (btn) => {
    btn.setAttribute("class", "bg-blue-600")
    btn.setAttribute("disabled", "true")


    // jogadas.every(palavra => palavra)

    if (jogadas.length === 4) {
        // tentativa[0].selected.push
        // jogadas = []
        tentativa = {
            "selecionado": jogadas
        }
        // tentativa.push(jogadas)
        tentativas.push(tentativa)

        let todasPresentes = jogadas.every((palavra) => {
            return grupos.some((grupo) => grupo.palavras.includes(palavra));
        });
        // console.log(todasPresentes)
        if (todasPresentes) {
            console.log("Todas as palavras de jogadas estão presentes nos grupos.");
        } else {
            console.log("Alguma(s) palavra(s) de jogadas não está(ão) presente(s) nos grupos.");
        }
    }

    jogadas.push(btn.innerHTML)
    console.log(`🎮 Jogadas ${jogadas}`)
    console.log(`🟩🟥 Tentativa {${tentativa}},`)
    console.log(`TentativaSS {${tentativas}},`)




    // console.log(tentativa.selecionado)

    //  console.log(`botão: ${btn.innerHTML}`)
    //  console.log(jogadas.length)


}

const verificarStatusJogo = () => {

}
