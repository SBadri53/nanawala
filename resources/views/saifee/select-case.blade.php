<!doctype html>
</html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

</head>
<body>
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="color:black;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Case Entry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="bd" class="modal-body">
<div>
<h4>Select particular Case</h4>
<table>
<thead>
<th>Date</th>
<th>ID</th>
<th>Patient Name</th>
<th>Action</th>
</thead>
<tbody id='tbody11'>
@foreach ($casefile as $case)
<tr>
<td id="dt1">{{ $case->case_dt }}</td>
<td id="id1">{{ $case->patient->id }}</td>
<td id="name1">{{ $case->patient->pt_name }}</td>
<td><button type="button" id="select1">Select</button></td>
</tr>
@endforeach
</tbody>
</table>
Name :
<input type="text" id="id11" value="0" />
<input type="text" id="txt1" value="xyz" />
</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 
      </div>
    </div>
  </div>

</div>

 <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>

</body>
</html>