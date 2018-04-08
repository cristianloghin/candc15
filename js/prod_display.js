jQuery.fn.extend({
	prod_display : function(settings) 
	{
		var target = $(this);
		var products_no = target.find('.images_wrapper').children().length;
		var val = Math.round(80 / products_no);
		var grow = val * 2.5;
		var shrink = Math.round((80 - grow) / ( products_no - 1 ));

		target.find('.product').css( 'width', val + '%');

		target.find('.product').click( function()
		{
			if( $(this).hasClass('grow'))
			{
				$(this).removeClass('grow');
				target.find('.product.shrink').removeClass('shrink');
				target.find('.product').animate(
				{
					'width' : val + '%'
				});
			}
			else if($(this).hasClass('shrink'))
			{
				target.find('.grow').animate(
				{
					'width' : shrink + '%'
				});
				target.find('.grow').removeClass('grow').addClass('shrink');
				$(this).removeClass('shrink').addClass('grow');
				$(this).animate(
				{
					'width' : grow + '%'
				});
			}
			else
			{
				$(this).addClass('grow');
				$(this).animate(
				{
					'width': grow + '%'
				});
				target.find('.product:not(.grow)').addClass('shrink');
				target.find('.product.shrink').animate(
				{
						'width' : shrink + '%'
				});
			}
		})
	}
});