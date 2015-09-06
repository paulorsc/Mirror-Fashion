function validaBusca() {
    if (document.querySelector('#q').value == '') {
        alert('Nao podia ter deixado em branco a busca!');
        document.querySelector('#form-busca').style.background = 'red';
        return false;
    }
}

document.querySelector('#form-busca').onsubmit = validaBusca;

var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.destaque img').src = banners[bannerAtual];
}
setInterval(trocaBanner, 4000);

/*Vamos implementar a funcionalidade em JavaScript. O primeiro passo é remover a classe painel-compacto do HTML. Como ela é uma classe atrelada a funcionalidade JS, vamos adicioná-la com jQuery, apenas se o JS for executado.*/
$('.novidades').addClass('painel-compacto');

/*Ainda no home.js, implemente o evento de clique no botão. Ele deve remover a classe painel-compacto, fazendo o produto aparecer:*/
$('.novidades button').click(function() {
  $('.novidades').removeClass('painel-compacto');
});