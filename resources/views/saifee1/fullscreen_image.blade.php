<?php
//use illuminate\Support\Facades\DateTime;
use Carbon\Carbon;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Hello, hru world!</title>


  </head>
  <body>
<!-- Modal -->
 <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="color:black;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Case Entry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div>
    <p>{{ asset('img/img1.jpg') }}</p>      

    
    <div class="modal-body" style="color:black;">
      <img class="modal-content" src="{{ asset('img/img1.jpg') }}" />
       </div>
This example creates a full page background image. Try to resize the browser window to see how it always will cover the full screen (when scrolled to top), and that it scales nicely on all screen sizes.

</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="save1" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>

</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    
<script src="{{ asset('public/frontend/js/jquery.datetimepicker.full.min.js') }}">
</script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <!-- Scripts -->
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}" ></script>
<script>
		/*$("#dateAndTimePicker1").datetimepicker({
			format: 'Y-m-d H:i:i',
			formatTime:  'H:i:i',
			formatDate:  'Y-m-d',
			step:  30
			});*/
      $("#dateAndTimePicker2").datetimepicker({
			format: 'Y-m-d',
			formatDate:  'Y-m-d',
			});
      $("#dateAndTimePicker2").on('click', function(){
        var dt = document.getElementById("dateAndTimePicker2");
        var dt = dt.value;
        //alert('Date : '+ dt );
      });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>

</body>
</html>
