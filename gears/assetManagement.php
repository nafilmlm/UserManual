<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>


<button>Open up <i class="fa fa-angle-right"></i></button>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    $('button').on('click', function () {
      $(this)
        .find('[data-fa-i2svg]')
        .toggleClass('fa-angle-down')
    });
  });


  
</script>
