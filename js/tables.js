<script>

	// Get table data

	var str = $('.table').attr('class');
	var n = str.search('col');
	var columns_no = eval(str.substring( n + 4, n + 5 ));
	var first = $('.table').data('first');		// default percentage of first column
	var single = $('.table').data('single');	// default percentage of single column
	var coll_width = 4; // collapsed column width

	// Calculate and set column widths

	$('.table .row div').each(function()
	{
		if ($(this).index() == 0 && $(this).parent().children().length == 1) // first column, single 
		{
			$(this).data('span', columns_no);
			$(this).css('width', '100%');
		}
		else if ($(this).index() == 0 && $(this).parent().children().length != 1) // first column, not single
		{
			span = first / single;
			$(this).data('span', span);
			$(this).css('width', span * single + '%');
		}
		else // all other columns
		{	
			var span = 1;
			var str = $(this).attr('class');

			if ( str != undefined )
			{
				var n = str.search('span');
				if (n != -1) // spanning columns
				{
					span = eval(str.substring( n + 5, n + 6 ));
				}
			}

			if (span > 1) // for spanning columns assign the indexes of the columns they span
			{
				var val = $(this).prev().data('span');
				var group = [];
				for( i = 0; i< span; i++)
				{
					group.push( ($(this).index()+val) + i);
				}
				$(this).data('group', group);
			}

			$(this).data('span', span);
			$(this).css('width', span * single + '%');
		}
	});

	// Analyze the table header
	$('.table .row.heading div').each(function()
	{
		if($(this).html() == '' || $(this).html() == 'null' || $(this).html() == '€m' || $(this).html() == '&rsquo;000')
		{
			$(this).addClass('ignore'); // ignore empty cells and unit cells
		}
		else
		{
			$(this).append('<span class="highlight"></span>');
			$(this).addClass('toggle');
		}
	});

	// Column header hover

	$('.table .row.heading div:not(.ignore)').hover(
	function()
	{
		$(this).find('.highlight').fadeIn(300);
	}, function()
	{
		$(this).find('.highlight').fadeOut(150);
	});

	// Collapsing visible columns

	var diff = 0;
	var coll_no = 0;

	$('.table .row.heading div:not(.ignore)').click(function()
	{
		
		if ( $(this).data('coll') == undefined ) // collapse columns
		{

			if( $(this).data('span') == 1) // collapsing single columns
			{
				var index = $(this).index() + 1;
				
				diff = diff + coll_width;
				coll_no = coll_no + 1;
				var recal_single = (100 - diff) / ( (columns_no - coll_no) + first / single - 1);
				
				$('.table .row div').each( function()
				{
								
					if( $(this).index() == index - 1) // collapse the cells
					{
						var val = $(this).text();
						$(this).html('<span class="value">'+val+'</span>');
						$(this).addClass('collapse');
						$(this).css('width', coll_width + '%');
					}
					else if( !$(this).hasClass('collapse') && $(this).data('span') != columns_no) // resize the other cells
					{
						var val = $(this).data('span') * recal_single;
						$(this).css('width', val + '%');
					}
				
				});

				$(this).data('coll', 1);
				$(this).append('<span class="control"></span>'); // add the background to the column


			}
			else // collapsing column groups // WIP!!!!!
			{
				var group = $(this).data('group');
				for ( var i=0, len = group.length; i < len; i++ )
				{
					console.log(group[i]);
				}
			}

		}
		else // expand columns
		{
			console.log('expand');

			if( $(this).data('span') == 1) // collapsing single columns
			{
				var index = $(this).index() + 1;
				
				diff = diff - coll_width;
				coll_no = coll_no - 1;
				
				var recal_single = (100 - diff) / ( (columns_no - coll_no) + first / single - 1);
				
				$('.table .row div').each( function()
				{
								
					if( $(this).index() == index - 1) // expand the cells
					{
						var val = $(this).text();
						$(this).html(val);
						$(this).removeClass('collapse');
						$(this).css('width', recal_single + '%');
					}
					else if( !$(this).hasClass('collapse') && $(this).data('span') != columns_no) // resize the other cells
					{
						var val = $(this).data('span') * recal_single;
						$(this).css('width', val + '%');
					}
				
				});

				$(this).data('coll', undefined);
				$(this).append('<span class="highlight"></span>'); // add the background to the column


			}
			else // collapsing column groups // WIP!!!!!
			{
				
			}
		}
	
	});

	// Expanding collapsed columns

	$('.table .row.heading div.collapse').click(function()
	{
		
	});

</script>