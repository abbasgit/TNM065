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
    	/*
    	$.ajax({
	      url: "http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php?/main_page/ajax_request",
	      async: false,
	      type: "POST",
	      data: "type=report",
	      dataType: "html",
	      success: function(data) {
	        $('#main_container').html(data);
    	 	}
  		  })
		*/

		$('#main_container').load('index.php?/main_page/ajax_request', function(){
			
		});
  	});



}