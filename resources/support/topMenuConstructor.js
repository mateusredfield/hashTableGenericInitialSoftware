//Header to construct the top menu
$(document).ready(function() {
        var topMenu = ''+
			'<span class="menuAlto">'+
				'<ul>'+
					'<li>'+
						'<a href="/index.html">Home</a>'+
					'</li>'+
					'<li>'+
						'<a href="/Cadastros/Cadastros.html">Cadastro de Trabalhadores</a>'+
					'</li>'+
					'<li>'+
						'<a href="/Listagens/ListagemDeTrabalhadores.html">Listagens</a>'+
					'</li>'+
					'<li>'+
						'<a href="/Buscas/Buscas.html">Buscas na Base de Dados</a>'+
					'</li>'+
				'</ul>'+
			'</span>';
$('body').prepend(topMenu);
});