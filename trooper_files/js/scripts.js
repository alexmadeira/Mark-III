function reloadMasonry(){
  $container.masonry('reloadItems');   
  $container.masonry('layout');
}

function dropzone(){

	if($(".dropzone").length){
		Dropzone.autoDiscover = true;
		var myDropzone = new Dropzone(".dropzone");
		myDropzone.on("success", function(data) {
			arquivo = data.name;
			nome = arquivo.substring(0,(arquivo.length -4));
			nome = nome.replace(/_/g, ' ');
			nome = nome.replace(/-/g, ' ');
			grid = $('.grid');

			element = $('.grid-item-modelo').clone();
			element.removeClass('grid-item-modelo');
			element.addClass('grid-item');

			img = element.find('img.thumbnail');
			titulo = element.find('p.titulo');

			img.attr('src',public_url+'upload/'+arquivo);
			titulo.html(nome);
			grid.prepend(element);
			setTimeout("reloadMasonry()",1000)
		});
	}else{
		setTimeout("reloadMasonry()",1000)
	}
}
$(function(){
    var masonryOptions = {itemSelector: '.grid-item'};
    $container = $('.grid').masonry( masonryOptions );
   
	dropzone();
    
    var posicao = 0;
    $('.projeto *[data-ls-module="modal"]').click(function(){
       setTimeout("reloadMasonry()",1000);
       posicao = $(this).data('posicao');
    });
	
	$(".inserirImage").click(function() {
		imagem_id = $(this).data('id');
		imagem_src = $(this).parent().find('.thumbnail').attr('src');

		switch(posicao){
			case 1 : $('input[name="projeto_logo"]').val(imagem_id); break;
			case 2 : $('input[name="projeto_background_principal"]').val(imagem_id); break;
			case 3 : $('input[name="projeto_preview"]').val(imagem_id); break;
			case 4 : $('input[name="projeto_mobile1"]').val(imagem_id); break;
			case 5 : $('input[name="projeto_mobile2"]').val(imagem_id); break;
			case 6 : $('input[name="projeto_produto"]').val(imagem_id); break;
			case 7 : $('input[name="projeto_background"]').val(imagem_id); break;
			case 8 : $('input[name="projeto_desktop"]').val(imagem_id); break;
		}

		el = $('.imagemPosicao a[data-posicao="'+posicao+'"]').parent().find('.imgBox');
		el.fadeOut(function(){
			el.html('<img src="'+imagem_src+'"/>');
			el.fadeIn();
		})
	})

})