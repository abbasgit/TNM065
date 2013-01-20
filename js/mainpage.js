var BASE_URL = "http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php?/";
$(document).ready(function ()
{
	setupLinks();

});

function setupLinks()
{
	$('#site_banner').click(function(){
		window.location = '';
	});

	$('#report').click(function () {
		$('#main_container').load( BASE_URL + 'reports');
  	});

  	$('#profile').click(function()
  	{
  		$('#main_container').load( BASE_URL + 'edit_profile');
  	});
}