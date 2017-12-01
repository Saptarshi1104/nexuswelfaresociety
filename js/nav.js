/*
 * Created by SAPTARSHI on 22-08-2017.
 */


$(document).ready(function ()
{


    if($(window).width()>1200)
    {
        $('.list-item').click(function ()
        {
            $('.list-item').removeClass('list-item-selected');
            $(this).addClass('list-item-selected');
        })
    }
    else if($(window).width()<1200)
    {
        $('.nav-menu').hide();
        $('.logo').click(function ()
        {
            $('.nav-menu').slideToggle();
        })
        $('.list-item').click(function ()
        {
            $('.list-item').removeClass('mobile-list-item-selected').addClass('mobile-list-item-not-selected');
            $(this).removeClass('mobile-list-item-not-selected').addClass('mobile-list-item-selected');
        })
    }
    


    $('.list-item').click(function()
    {
	    
	    if($(this).html()=='Home')
	    {
			window.location.replace('http://localhost/project/NGO-web/');
	    }
	    else if($(this).html()=='About Us')
	    {
			window.location.replace('about.php');
	    }
	    else if($(this).html()=='Mission &amp; Vision')
	    {
			window.location.replace('mission_vision.php');
	    }
	    else if($(this).html()=='Activity')
	    {
			window.location.replace('activity.php');
	    }
	    else if($(this).html()=='Membership')
	    {
			window.location.replace('membership.php');
	    }
	    else if($(this).html()=='Contact Us')
	    {
			window.location.replace('contact.php');
	    }
	    else if($(this).html()=='Admin Panel')
	    {
			window.location.replace('cms_admin.php');
	    }
    })


})