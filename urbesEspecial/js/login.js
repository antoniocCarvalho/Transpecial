//mascara cpf
const inputCPF = document.querySelector('#cpf_login')

inputCPF.addEventListener('keypress', () => {
    let inputLength = inputCPF.value.length

    // MAX LENGHT 14  CPF
    if (inputLength == 3 || inputLength == 7) {
        inputCPF.value += '.'
    }else if (inputLength == 11) {
        inputCPF.value += '-'
    }

})



// puxando dados tele de login

const login = document.getElementById ("logar")
login.addEventListener('click', function(event){
    event.preventDefault()

    var cpf = document.getElementById ("cpf_login").value
    var senha = document.getElementById ("senha_login").value


    //teste
    console.log(cpf);
    console.log(senha);

})

