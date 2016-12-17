//Header to construct the top menu
$(document).ready(function() {
        
        var topMenu = ''+
			'<div class="menuTop">'+
				'<ul >'+
					'<li>'+
						'<a href="/index.html">Home</a>'+
					'</li>'+
					'<li>'+
						'<a href="/Cadastros/Cadastros.html">Cadastro de Trabalhadores</a>'+
					'</li>'+
					'<li>'+
						'<a href="/Listagens/ListagemDeTrabalhadores.html">Listagens</a>'+
					'</li>'+
					'<li class="dropdownTop">'+
				    '<a href="#" class="dropbtnTop">Buscas</a>'+
				    '<div class="dropdownTop-content">'+
				      '<a href="/Buscas/Buscas.html?tipoDeBusca=1">Trabalhadores Internos</a>'+
				      '<a href="/Buscas/Buscas.html?tipoDeBusca=2">Trabalhadores Externos</a>'+
				      '<a href="/Buscas/Buscas.html?tipoDeBusca=3">Empresas Clientes</a>'+
				    '</div>'+
				  '</li>'+
				'</ul>'+
			'</div>';
$('body').prepend(topMenu);
});