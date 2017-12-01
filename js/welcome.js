$(document).ready(function()
{
	$('.image-admin-container,.add-member-admin-container,.delete-member-admin-container,.add-admin-container,.delete-admin-container').hide();

	$('.list').click(function()
	{
		/*console.log($(this).html());*/
		$('.list').removeClass('select');
		$(this).addClass('select');
		
		if($(this).html() == '<i class="fa fa-clipboard" aria-hidden="true"></i> Notice Board')
		{
			
			$('.image-admin-container,.add-member-admin-container,.delete-member-admin-container,.add-admin-container,.delete-admin-container').hide();
			$('.notice-admin-container').show();
			
		}
		else if($(this).html() == '<i class="fa fa-sliders" aria-hidden="true"></i> Image Slider')
		{
			
			$('.notice-admin-container,.add-member-admin-container,.delete-member-admin-container,.add-admin-container,.delete-admin-container').hide();
			$('.image-admin-container').show();
			
		}
		else if($(this).html() == '<i class="fa fa-plus" aria-hidden="true"></i> Add Members')
		{
			
			$('.notice-admin-container,.image-admin-container,.delete-member-admin-container,.add-admin-container,.delete-admin-container').hide();
			$('.add-member-admin-container').show();
			
		}
		else if($(this).html() == '<i class="fa fa-trash-o" aria-hidden="true"></i> Delete Members')
		{
			
			$('.notice-admin-container,.image-admin-container,.add-member-admin-container,.add-admin-container,.delete-admin-container').hide();
			$('.delete-member-admin-container').show();
			
		}
		else if($(this).html() == '<i class="fa fa-plus" aria-hidden="true"></i> Add Admin')
		{
			
			$('.notice-admin-container,.image-admin-container,.add-member-admin-container,.delete-member-admin-container,.delete-admin-container').hide();
			$('.add-admin-container').show();
			
		}
		else if($(this).html() == '<i class="fa fa-trash-o" aria-hidden="true"></i> Delete Admin')
		{
			
			$('.notice-admin-container,.image-admin-container,.add-member-admin-container,.delete-member-admin-container,.add-admin-container').hide();
			$('.delete-admin-container').show();
			
		}
	
	})
	
	$('.message').click(function()
	{
		
		$('.message').remove();
		
	})
	
})