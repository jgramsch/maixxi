
<link rel="stylesheet" href="../externos/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="../externos/bootstrap-theme.min.css">
<script src="../externos/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src='../externos/latexit.js'></script>
<link rel="stylesheet" href="../externos/style.css">
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
<script type='text/javascript' src="../externos/bootstrap.min.js"></script>
