//mascara cep
const inputCEP = document.querySelector('#cep')

inputCEP.addEventListener('keypress', () => {
    let inputLength = inputCEP.value.length

    if (inputLength == 5 ) {
        inputCEP.value += '-'
    }
    

})

function buscaCep() {
    let cep = document.getElementById('cep').value;
    if(cep !== ""){
        let url = "https://brasilapi.com.br/api/cep/v1/" + cep;

        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();
        //tratar a resposta da requisição 
        req.onload = function() {
            if(req.status === 200){
                let endereco = JSON.parse(req.response);
                document.getElementById("rua").value = endereco.street;
                console.log(endereco);
                document.getElementById("bairro").value = endereco.neighborhood;
                document.getElementById("cidade").value = endereco.city;
                document.getElementById("estado").value = endereco.state;
            }
            else if (req.status === 404){
                alert("CEP inválido");
            }       
            else{
                alert("Erro ao fazer requisição");
            } 

        }
    }

}

window.onload = function (){
    let txtCep = document.getElementById("cep");
    txtCep.addEventListener("blur", buscaCep);
}
