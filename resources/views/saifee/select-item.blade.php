<!doctype html>
</html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
        <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

</head>
<body>
 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="color:black;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">List of Items</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="bd" class="modal-body">
<div>
<h4>Select Item</h4>
<table>
<thead>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
<th>Price</th>
<th>Action</th>
</thead>
<tbody id='tbody3'>
@foreach ($items as $item)
<tr>
<td id="id3">{{ $item->id }}</td>
<td id="iname3">{{ $item->iname }}</td>
<td id="brand3">{{ $item->brand }}</td>
<td id="price3">{{ $item->selling_price }}</td>
<td><button type="button" id="select3" data-bs-dismiss="modal">Select</button></td>
</tr>
@endforeach
</tbody>
</table>
</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 
      </div>
    </div>
  </div>

</div>
<!-- Patient Choice Layout-->
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{ asset("frontend/js/jquery.datetimepicker.full.min.js") }}">
</script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
 <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 

</script>

</body>
</html>