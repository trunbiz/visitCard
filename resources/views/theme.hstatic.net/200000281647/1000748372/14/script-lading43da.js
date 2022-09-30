$(document).ready(function(){
	main();
})
let main = () =>{
	$("#main-slider #owl-home-main-slider").owlCarousel({
		smartSpeed: 1000,
		autoplay: true,
		autoplayTimeout: 5000,
		mouseDrag: false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav: true,
		dots: true,
		lazyload: false,
		loop: true,
		responsiveRefreshRate: 200,
		navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
		responsive: {
			0: {
				items: 1,
				touchDrag: false
			},
			480: {
				items: 1,
				touchDrag: false
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	$(".f-night-wrap-slider").owlCarousel({
		smartSpeed: 1000,
		autoplay: true,
		autoplayTimeout: 5000,
		mouseDrag: false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav: true,
		dots: true,
		lazyload: false,
		loop: true,
		responsiveRefreshRate: 200,
		navText: ['<button type="button" class="slick-prev slick-arrow" style=""><svg width="8" height="17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 15 29" style="enable-background:new 0 0 15 29;" xml:space="preserve"><g><polygon class="st12" points="1.35,0 0,1.43 12.31,14.5 0,27.57 1.35,29 15,14.5  "/></g></svg></button>', '<button type="button" class="slick-next slick-arrow" style=""><svg width="8" height="17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 15 29" style="enable-background:new 0 0 15 29;" xml:space="preserve"><g><polygon class="st12" points="1.35,0 0,1.43 12.31,14.5 0,27.57 1.35,29 15,14.5  "/></g></svg></button>'],
		responsive: {
			0: {
				items: 1,
				touchDrag: false
			},
			480: {
				items: 1,
				touchDrag: false
			},
			768: {
				items: 1
			},
			1000: {
				items: 1,
				dots:false
			}
		}
	});


	$(".swatch .color label").click(function(){
		$(".swatch .color label").removeClass('sd');
		var dataid = $(this).parents('.color').data('id');
		$("#product-select").val(dataid).trigger('change');
		$(this).addClass('sd');
		var color = $(this).data('color-handle');
		var img = $(this).find('span').data('imgvariant');
		var price = $(this).data('priceswatch');
		var compare_price = $(this).data('pricecompare');
		$(".actions-item-price p").text(price);
		if(compare_price != '0₫'){
			$(".actions-item-price del").text(compare_price);
		}
		$('.future-product').attr('src',img);
		$('.future-product').parent().attr('data-color',color);
	})
	$(".swatch .color:first label").trigger('click');
	$(".close-popup-success").click(() =>{
		$("#popup-success").modal('hide');
	})
	$('#btn-button').click(function(e){
		var name = $("#full-name").val();
		var dataproduct = $(".clone-success").html();
		var color = $('.color label.sd span') .text();
		var infomation = `<div class="name-info">Tên in trên thẻ: ${name}</div><div class="type-card">Loại thẻ: ${color}</div>`;
		$("#popup-success").find('.load-product').html('');
		$("#popup-success").find('.load-product').prepend(dataproduct);
		$("#popup-success").find('.load-product').append(infomation);
		$("#popup-success").delay(200).modal('show');
	});
	$('.buy-now-success').click(function(e){
		var id = $("#product-select").val();
		var name= $("#full-name").val();
		e.preventDefault();
		var params = {
			type: 'POST',
			async: false,
			url:'/cart/add.js',
			async:false,
			data: {
				'quantity': 1,
				'id': id
			},
			success:function(){
				$.ajax({
					type: 'POST',
					url: '/cart/update.js',
					async: false,
					data: { 'attributes[Info]' : name},
					complete: function(line) {
						window.location.href ="/checkout";
					}
				})
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Sản phẩm bạn vừa mua đã vượt quá tồn kho');
			}
		};
		jQuery.ajax(params); 
	})
	var maxCharacters = 24;
	$('#full-name').keyup(function() {
		var leng = $(this).val().length;
		var $value = $(this).val();
		$('#characters-counter').html(maxCharacters - leng);
		$(".get-value-input").html($value);
		if($(".get-value-input").text() == ''){
			$(".get-value-input").html('Tên của bạn');
		}
	});
	jQuery(document).on("click", ".back-to-top", function(){
		jQuery('html, body').animate({
			scrollTop: 0			
		}, 800);
	});
	$("#site-header .menu-mobile i").click(function(){
		$(".menu-mobile-tablet").toggleClass('active-show');
	})
	$(".close-menu").click(function(){
		$(".menu-mobile-tablet").removeClass('active-show');
	})
	$("a").on('click', function(event) {
		var heighthead = $("#site-header").height();
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			var scrolltotop = $(hash).offset().top - heighthead;
			$(".menu-mobile-tablet").removeClass('active-show');
			$('html, body').animate({
				scrollTop: scrolltotop
			}, 800);
		}
	});
}
