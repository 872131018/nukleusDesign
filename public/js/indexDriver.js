$(document).ready()
{
  /*
  * Set the logo sticker
  */
  Sticker.init('.logo-sticker');
  /*
  * Init the design slider
  */
  $('#design_slider').unslider({
    autoplay: true
  });
  /*
  * Init the mockup slider
  */
  $('#mockup_slider').unslider({
    autoplay: true
  });
	/*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=signup]', function(event)
  {
		/*
		* @TODO Validate user email
		*/
    if(validateSignup())
		{
      /*
      * Set url for post to correct endpoint
      */
      var url = window.location.href+"/signup";
      $.post(url, $("form").serialize(), function(response, status)
    	{
    		if(status == "success")
    		{
          $('form').html(response);
    		}
        else
        {
          console.log("server error");
        }
    	});
		}
	});
}
