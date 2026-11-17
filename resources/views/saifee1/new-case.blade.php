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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <title>Hello, hru world!</title>

  </head>
  <body>
 <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="color:black;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Case Entry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="bd" class="modal-body">
        New Case Entry
        <table id="tbl">
          <tbody id="">
            <tr>
              <td><label>Case No</label></td>
              <td><input type="text" id="case_no" name=""/></td>
            </tr>
            <tr>
              <td><label>Patient Name</label></td>
              <td><select id="pt_new">
                  <option value=""></option>
                  @foreach ($patient as $pt)
                    <option value={{ $pt->id }}>{{ $pt->fname}}</option>        
                  @endforeach
                  </select>
              </td>
            </tr>
            <tr>
              <td><label>Case Date</label></td>

              <td>
                <div class="datepicker2 border-1">
                  	<input id="dateAndTimePicker2" name="dateAndTimePicker2" value="{{ Carbon::today()->format('Y-m-d') }}"/>
                    <input type="text" id="date2" />
                </div>
              </td>
            </tr>
            <tr>
              <td><label>Doctor Name</label></td>
              <td><input type="text" id="dr" name=""/></td>
            </tr>
          </tbody>
        </table>
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
    
 
<script>
		/*$("#dateAndTimePicker1").datetimepicker({
			format: 'Y-m-d H:i:i',
			formatTime:  'H:i:i',
			formatDate:  'Y-m-d',
			step:  30
			});*/
      $("#dateAndTimePicker2").datepicker({
			      format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true,
            startView: 0,
            minViewMode: 0,
            container: '.datepicker2'

      }).on('changeDate', function(e){
        $('#date2').val(moment(e.date).format("YYYY-MM-DD"));
            var assign_dt = document.getElementById("date2");
                alert("Date : " + assign_dt);
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
