function gerarCodigoAleatorio() {
    // Gera um número aleatório entre 10000000 e 99999999 e o arredonda para um número inteiro.
    var codigo = Math.floor(Math.random() * 90000000 + 10000000);
    return codigo.toString(); // Converte o número para uma string.
  }
  
  var codigoGerado = gerarCodigoAleatorio();
  console.log(codigoGerado);
  


  document.getElementById("resultado").value = codigoGerado;
