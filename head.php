<link rel="stylesheet" href="../externos/bootstrap.min.css">
	<link rel="stylesheet" href="../externos/style.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="../externos/bootstrap-theme.min.css">
	<script src="externos/jquery-2.1.1.min.js"></script>
	<script>
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	
	</script>
	<script src="externos/bootstrap.min.js"></script>