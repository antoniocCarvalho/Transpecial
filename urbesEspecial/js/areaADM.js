//mascara cpf
const inputCPF = document.querySelector('#cpf_adm')

console.log(inputCPF)
        
inputCPF.addEventListener('keypress', () => {
            let inputLength = inputCPF.value.length
    
            console.log(inputLength)
        
            // MAX LENGHT 14  CPF
            if (inputLength == 3 || inputLength == 7) {
                inputCPF.value += '.'
            }else if (inputLength == 11) {
                inputCPF.value += '-'
            }
        
        })
    

// puxando dados tele de login

const loginAdm = document.getElementById ("admLog")
loginAdm.addEventListener('click', function(event){
    event.preventDefault()

    var cpf = document.getElementById ("cpf_adm").value
    var senha = document.getElementById ("senha_adm").value


    //teste
    console.log(cpf);
    console.log(senha);

})

