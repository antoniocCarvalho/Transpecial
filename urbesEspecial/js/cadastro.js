//mascara cpf
const inputCPF = document.querySelector('#cadastro_cpf')

inputCPF.addEventListener('keypress', () => {
    let inputLength = inputCPF.value.length

    // MAX LENGHT 14  CPF
    if (inputLength == 3 || inputLength == 7) {
        inputCPF.value += '.'
    }else if (inputLength == 11) {
        inputCPF.value += '-'
    }

})

// puxando dados tele de cadastro

const cadastro = document.getElementById ("cadastrar")
cadastro.addEventListener('click', function(event){
    event.preventDefault()

    var nome = document.getElementById ("cadastro_nome").value
    var cpf = document.getElementById ("cadastro_cpf").value
    var senha = document.getElementById ("senha_cadastro").value


    //teste
    console.log(nome);
    console.log(cpf);
    console.log(senha);

})

