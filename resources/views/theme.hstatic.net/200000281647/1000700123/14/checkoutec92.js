if(window.location.pathname.indexOf('checkouts') !== -1){
	if(window.location.pathname.indexOf('thank_you') === -1){
		var xFunc = function(){
			$.ajax({
				type: 'GET',
				url: '/cart.js',
				dataType: 'json',
				success: function(data){
					$.each(data.items, function(i, v){
						var value = v.properties;
						if(value.qr && value.name && value.design){
							var p = $('.product-table .product[data-variant-id="'+v.variant_id+'"]').find('.product-description');
							p.find('.product-description-variant').remove();
							p.append(`<span class="product-description-variant order-summary-small-text">Tên hiển thị: ${value.name}</span>`);
						//	p.append(`<span class="product-description-variant order-summary-small-text">QR Code: ${value.qr}</span>`);
							p.append(`<span class="product-description-variant order-summary-small-text"><a target="_blank" href="${value.design}">Xem trước</a></span>`);
						}
					})
				}
			})
		};
		xFunc();
		$(document).ajaxComplete(function(event,request, settings){
			if(
				settings.url.indexOf('form_name=form_update_location') !== -1 
				|| settings.url.indexOf('form_name=form_update_shipping_method') !== -1 
				|| settings.url.indexOf('form_name=form_discount_add') !== -1
				|| settings.url.indexOf('form_name=form_discount_remove') !== -1
				|| settings.url.indexOf('form_name=form_next_step') !== -1
			){
				xFunc();
			}
		})
		
	}else{
	
	}
}