const formulario = document.querySelector('form');

formulario.addEventListener('submit',function(e){
    e.preventDefault();
    texto = "";
    nome = document.querySelector('#nome').value;
    texto += `${nome}`; 
    tamanho = document.querySelector('input[name="tamanho"]:checked').value;
    texto += `\n${tamanho}`; 
    if(document.querySelector("#molho").checked){
        texto += "\n Molho"; 

    }
    if(document.querySelector("#queijo").checked == true){
        texto += "\n Queijo"; 

    }
    if(document.querySelector("#manjericão").checked == true){
        texto += "\n Manjericão"; 

    }
    if(document.querySelector("#calabresa").checked == true){
        texto += "\n Calabresa"; 

    }
    if(document.querySelector("#pimentão").checked == true){
        texto += "\n Pimentão"; 
    }

    document.querySelector('.resultado').innerHTML = texto;
    document.querySelector('.resultado').style.display = 'inline-block';
});