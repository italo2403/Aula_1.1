function respostas(){
    let resposta = document.querySelector("#rest").value;
    let nome = document.querySelector("#nome").value;
    switch (resposta) {
        case "a":
            document.querySelector("#res").textContent=`${nome} a resposta correta é: A `;
            break;
    
        default:
            break;
    }




}