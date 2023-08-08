const divRespostas = document.getElementById("divRespostas");
const proximaQuestao = document.getElementById("proximaQuestao");
const questao = document.getElementById("questao");

let acertos = 0;
let questaoAtualIndex = 0;

function comecarProva() {
    acertos = 0;
    questaoAtualIndex = 0;
    proximaQuestao.innerHTML = "Próxima";
    mostrarQuestao();
}

function mostrarQuestao() {
    resetarQuestao();
    let questaoAtual = questoes[questaoAtualIndex];
    let numeroQuestao = questaoAtualIndex + 1;
    questao.innerHTML = numeroQuestao + "." + questaoAtual.questao;

    questaoAtual.alternativas.forEach(resposta => {
        const botao = document.createElement("button");
        botao.innerHTML = resposta.text;
        botao.classList.add("btn");
        divRespostas.appendChild(botao);
        if (resposta.correct) {
            botao.dataset.correct = resposta.correct;
        }
        botao.addEventListener("click", selecionarResposta);
    });
}

function selecionarResposta(e) {
    const opcSelecionada = e.target;
    const correta = opcSelecionada.dataset.correct === "true";
    if (correta) {
        opcSelecionada.classList.add("certa");
        acertos++;
    } else {
        opcSelecionada.classList.add("errada");
    }
    Array.from(divRespostas.children).forEach(botao => {
        if (botao.dataset.correct === "true") {
            botao.classList.add("certa");
        }
        botao.disabled = true;
    });
    proximaQuestao.style.display = "block";
}

function resetarQuestao() {
    proximaQuestao.style.display = "none";
    while (divRespostas.firstChild) {
        divRespostas.removeChild(divRespostas.firstChild);
    }
}

function mostrarNota() {
    resetarQuestao();
    if (acertos >= 7) {
        questao.innerHTML = `Você acertou ${acertos} de ${questoes.length}, sendo assim sua nota final é ${acertos}. Parabéns, você foi APROVADO!`;
    } else {
        questao.innerHTML = `Você acertou ${acertos} de ${questoes.length}, sendo assim sua nota final é ${acertos}. Infelizmente você foi REPROVADO!`;
    }
}

function handleProximaQuestao() {
    questaoAtualIndex++;
    if (questaoAtualIndex < questoes.length) {
        mostrarQuestao();
    } else {
        mostrarNota();
    }
}

proximaQuestao.addEventListener("click", () => {
    if (questaoAtualIndex < questoes.length) {
        handleProximaQuestao();
    } else {
        comecarProva();
    }
});

const questoes = [
    {
        questao: " Qual das alternativas a seguir, de acordo com a documentação da linguagem de programação PHP, NÃO é uma palavra reservada?",
        alternativas: [
            { text: "intermedio", correct: true },
            { text: "global", correct: false },
            { text: "continue", correct: false },
            { text: "case", correct: false },
            { text: "and", correct: false },
        ]
    },

    {
        questao: " Levando em consideração 'echo number_format($i, 2, \"\ . \"\ , \"\ , \"\ ' e $i = 1232.2696, como ficaria a impressão de $i?",
        alternativas: [
            { text: "1.232.26", correct: false },
            { text: "1,232.26", correct: false },
            { text: "1,232,26", correct: false },
            { text: "1,232.26", correct: true },
            { text: "1232,2696", correct: false },
        ]
    },

    {
        questao: " Qual comando na linguagem de programação PHP tem por objetivo de finalizar a execução de estruturas de repetição antes que suas condições de parada sejam alcançadas?",
        alternativas: [
            { text: "while", correct: false },
            { text: "switch", correct: false },
            { text: "if", correct: false },
            { text: "foreach", correct: false },
            { text: "break", correct: true },
        ]
    },

    {
        questao: " No contexto da linguagem PHP, analise as afirmativas a seguir e indique quais são verdadeiras: <br> I - Todos os comandos de saída podem receber múltiplos argumentos de entrada.<br> II - Todos os comandos de saída retornam o valor zero.<br> III - Os comandos PRINT e ECHO podem ser usados para produzir saída de dados (output).",
        alternativas: [
            { text: "I, apenas.", correct: false },
            { text: "II, apenas.", correct: false },
            { text: "III, apenas.", correct: true },
            { text: "II e III, apenas.", correct: false },
            { text: "I, II, e III.", correct: false },
        ]
    },

    {
        questao: " Qual é o metacaractere, no contexto de expressões regulares em PHP, que sinaliza que se devem encontrar ocorrências de um dado padrão a ser buscado no começo de uma string?",
        alternativas: [
            { text: "!", correct: false },
            { text: "@", correct: false },
            { text: "#", correct: false },
            { text: "~", correct: false },
            { text: "^", correct: true },
        ]
    },

    {
        questao: " Qual das alternativas apresenta uma variável com a função de armazenar dados do formulário e é considerada uma variável ESPECIAL, conhecida também como superglobal, por ser interna ao PHP e ficar disponível para o script inteiro?",
        alternativas: [
            { text: "$_ENV", correct: false },
            { text: "$_MSG", correct: false },
            { text: "$_POST", correct: false },
            { text: "$_SERVER", correct: true },
            { text: "$_REQUEST", correct: false },
        ]
    },

    {
        questao: " Com relação as linguagens de programação é correto afirmar que:",
        alternativas: [
            { text: "O PHP é executado no navegador e o Javascript é executado no servidor de quem acessa o site.", correct: false },
            { text: "O PHP é executado no servidor de hospedagem e o Javascript é executado no navegador do usuário que acessa o site.", correct: true },
            { text: "O Javascript é executado no servidor de hospedagem e PHP é executado no navegador.", correct: false },
            { text: "O Javascript é executado no servidor de hospedagem e o PHP é executado no navegador do usuário que acessa o site.", correct: false },
            { text: "O Javascript é executado no servidor de quem acessa o site e o PHP é executado no navegador.", correct: false },
        ]
    },

    {
        questao: " Em PHP, não é necessário declarar as variáveis, mas caso se queira declará-las há um caractere especial reservado para isto. Desta fora, qual alternativa apresenta esse caractere?",
        alternativas: [
            { text: "#", correct: false },
            { text: "$", correct: true },
            { text: "&", correct: false },
            { text: "?", correct: false },
            { text: "!", correct: false },
        ]
    },

    {
        questao: " Considerando o seguinte fragmento de código em PHP <br><br> $var = 2; <br>function primeira(&$var) { $var++;} <br>function segunda($var) { $var++;} <br>function terceira() { $var++;} <br>echo $var; primeira($var); <br>echo $var; segunda($var); <br>echo $var; terceira($var); <br>echo $var; <br><br> Qual será a saída gerada fragmento de código acima?",
        alternativas: [
            { text: "2222", correct: false },
            { text: "2233", correct: false },
            { text: "2224", correct: false },
            { text: "2234", correct: true },
            { text: "2244", correct: false },
        ]
    },

    {
        questao: " PHP corresponde na verdade a um acrônimo do nome oficial da linguagem de programação. Dentre as alternativas abaixo, qual corresponde ao original significado do acrônimo?",
        alternativas: [
            { text: "Page Home Personal", correct: false },
            { text: "Page Homed Personally", correct: false },
            { text: "Personal Home Page", correct: true },
            { text: "Personaly Homed Page", correct: false },
            { text: "Personally Homed Pages", correct: false },
        ]
    }
];

comecarProva();