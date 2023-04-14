const botao = document.querySelector('.botao');

botao.addEventListener("click",function(e){
    e.preventDefault();
    const nome = document.querySelector('.nome').value;
    const idade = document.querySelector('.idade').value;
    const resultado = document.querySelector('.resultado');
    resultado.style.display = 'block';
    resultado.innerHTML = `Olá, ${nome}! Você tem ${idade} anos.`;
});