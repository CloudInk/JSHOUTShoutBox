$(document).ready(function()
{
	$('#avatar_change').submit(function(event)
	{
		event.preventDefault(); 
		$(this).qtip(
		{
			content: {
			
				text: '<img class="throbber" src="css/img/loading_sm.gif" alt="Loading..." />',
				ajax: {
					url: $(this).attr('rel') 
				},
				title: {
					text: 'Avatar' + $(this).text(), 
					button: true
				}
			},
			position: {
				at: 'bottom center', 
				my: 'top center',
				viewport: $(window), 
				effect: false
			},
			show: {
				event: 'click',
				solo: true 
			},
			hide: 'unfocus',
			style: {
				classes: 'ui-tooltip-wiki ui-tooltip-light ui-tooltip-shadow'
			}
		})
	})
});
