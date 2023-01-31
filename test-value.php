<!--  -->
<link rel="stylesheet" href="assets/css/style8a4f.css?v1.1.0">

<div class="countdown">
    10
</div>
<div class="button d-none">
  <input type="button" value="Click Here">
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js">
</script>
<script>
$(document).ready(function() {

// Function to update counters on all elements with class counter
var doUpdate = function() {
  $('.countdown').each(function() {
    var count = parseInt($(this).html());
    if (count !== 0) {
      $(this).html(count - 1);
    }
    else
    {
      $(this).html("Ready, Click below Button");
      $(".button").removeClass('d-none');
    }
  });
};

// Schedule the update to happen once every second
setInterval(doUpdate, 1000);
});
</script>

