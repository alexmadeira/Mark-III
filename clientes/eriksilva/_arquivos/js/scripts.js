var tipoAtual;
var $wall = $('.grid');
var home  = true;

function showProjeto(el){
	tipo = el.data('tipo');
	$('.projeto').each(function(){
		if($(this).data('tipo') == tipo){
			$(this).fadeIn();
		}else{
			$(this).fadeOut();
			$(this).addClass('invis');
		}
	});
	//reloadMasonry();
}
function opacityIn(el,callback){
	callback = typeof callback !== 'undefined' ? callback :false;

	if($('.projetos-list').css('opacity')!=1){
		if(callback){
			$('.projetos-list').stop().animate({
				opacity:1
			},800,callback);
		}else{
			$('.projetos-list').stop().animate({
				opacity:1
			},800);
		}
	}
}

function closeHome(){
	if(!home){
		$('.menu-item').removeClass('ativo');
		$('.projetos-list').animate({
			opacity:0
		},800,function(){
			
			$('.projeto').removeClass("col-md-4");
			$('.projeto').addClass("col-md-1");

			$(".header").animate({
				"margin-top": "15%"
			},800,function(){
				home = true;
				tipoAtual = '*';
				$wall.isotope({ filter: '*' })
				$wall.one( 'arrangeComplete', opacityIn('.projetos-list'));
			});
		});
	}
}

function openHome(el){
	if(home){
		$('.projetos-list').animate({
			opacity:0
		},800,function(){
			$('.projeto').removeClass("col-md-1");
			$('.projeto').addClass("col-md-4");

			$(".header").animate({
				"margin-top": "15px"
			},800,function(){
				home = false;
				filtrar(el);
			});
		});
	}
}

function filtrar(el) {
	tipo = el.data('tipo');
	if(!home){
		$('.menu-item').removeClass('ativo');
		el.addClass('ativo');
		if(el.hasClass("sub")){
			$('a[data-tipo="'+el.data('sub')+'"]').addClass('ativo')
		}
		if(tipo != tipoAtual){
			console.log(tipo)
			if (tipo=="*"){
				$wall.isotope({ filter: '*' })
			}else{
				$wall.isotope({ filter: '.'+tipo })
			}
		}
		tipoAtual = tipo;
		$wall.one( 'arrangeComplete', opacityIn('.projetos-list'));
		$wall.one( 'arrangeComplete',console.log('arrange Complete'));

	}
}

$(window).load(function(){

	//---------- Loader
	setTimeout(function(){$('.loader').fadeOut(1000);}, 20);
	//---------- Abrir home
	$('.openHome').click(function(){openHome($(this));})
	//---------- fechar home
	$('.closeHome').click(function(){closeHome()})
	//---------- Filtro
	$('.filtro').click(function(){filtrar($(this));})
	$wall.isotope({
		itemSelector: '.grid-item',
		layoutMode: 'fitRows',
		hiddenStyle: {
			opacity: 0
		},
		visibleStyle: {
			opacity: 1
		}
	});   
});
