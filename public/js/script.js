function abrirWhatsapp() {
    var nome = document.getElementById("nome").value;
    var telefone = document.getElementById("telefone").value;
    var email = document.getElementById("email").value;
    var msg = document.getElementById("msg").value;
    var municipio = document.getElementById("municipio").value;
    var unidade = document.getElementById("unidade").value;
    var url = "https://wa.me/556699916539?text=" // Numero do suporte
        //var url = "https://wa.me/5518981244374?text=" // Numero pessoal teste
        +
        "*Formulário de Contato*" + "%0a" // Mensagem personalizada
        +
        "%0a" // Quebra de linha
        +
        "*Nome*: " + nome + "%0a" // Dados do formulário
        +
        "*Telefone*: " + telefone + "%0a" +
        "*E-mail*: " + email + "%0a" +
        "*Município*: " + municipio + "%0a" +
        "*Unidade*: " + unidade + "%0a" +
        "*Mensagem*: " + msg;
    window.open(url, '_blank').focus();
}
$('.navBar li a').click(function () {
    $('#menu-toggle').trigger('click');
});

function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "../img/menu_white_36dp.svg";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "../img/close_white_36dp.svg";
    }
}

