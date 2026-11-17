@extends('layouts.app-saifee')
@section('content')
@include("saifee.new-case")
 <?php
use Carbon\Carbon;
?>
<h3>Saifee Clinic</h3>
Select Date and Time :
	<input id="dateAndTimePicker1" name="dateAndTimePicker1" value="{{ Carbon::today()->format('Y-m-d') }}"/>
<label>Patient Name</label>
<select id="pt">
    <option value=""></option>
    @foreach ($patient as $pt)
        <option value={{ $pt->id }}>{{ $pt->pt_name }}</option>        
    @endforeach
    
</select><br><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  Table 2
<table id="tbl">
<tr>
<td>
<table>
    <tr>
        <td>Medicine : </td><td><input type="text" id="med"></td>
    </tr>
    <tr>
        <td>Dosage : </td><td><input type="text" id="dosage"></td>
    </tr>
    <tr>
    <td><input type="button" id="table2_add" value="Add" /> 
    </td> 
    </tr>
</table>
</td>
</tr>
<tr>
<td>
<table id="table2">
<thead>
<tr>
<th>ID</th>
<th>Medicines</th>
<th>Dosage</th>
</tr>
</thead>
<tbody id="tbody2">
<tr>
<td><input type='text' id='txt0' disabled /></td>
<td><input type='text' id='txt1' disabled /></td>
<td><input type='text' id='txt2' disabled /></td>
<td><button type="button" class="edit">Edit</button></td>
<td><button type="button" class="save" hidden >Save</button></td>
<td><button type="button" class="delete">Delete</button></td>
</tr>
<tr>
<td>ID</td>
<td>COLD</td>
<td></td>
<td><button type="button" class="edit">Edit</button></td>
<td><button type="button" class="save" hidden >Save</button></td>
<td><button type="button" class="delete">Delete</button></td>
</tr>
</tbody>
</table>
</td>
</tr>
</table> 
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{ asset("frontend/js/jquery.js") }}"></script>

<script src="{{ asset("frontend/js/jquery.datetimepicker.full.min.js") }}">
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function AddRow2(id,med, dosage) {
            var row =   "<tr>" +
                        "<td class='id'>" + "<input type='text' id='txt0' value='" +
                        id +"' disabled />"  + "</td>" +
                        "<td>" + "<input type='text' id='txt1' value='" +
                        med +"' disabled />"  + "</td>" +
                        "<td>" + "<input type='text' id='txt2' value='" +
                        dosage +"' disabled />"  + "</td>" +
                        "<td><button type='button' class='edit'>Edit</button></td>" +
"<td><button type='button' class='save' hidden >Save</button></td>" +
"<td><button type='button' class='delete'>Delete</button></td>" +
"</tr>";
            $("#table2 tbody").append(row);

        };
        $("#table2_add").click(function(e){
            alert ("add button clicked");
            var med = document.getElementById('med');
            var dosage = document.getElementById('dosage');
            var med = med.value;
            var dosage = dosage.value;
            var id = $("#pt option:selected").val();
            var dt = document.getElementById("dateAndTimePicker1");
            var dt = dt.value;

            $.ajax({
            type: 'POST',
            url:  'GetDosage/' + id,
            data: {_token : $('meta[name="csrf_token"]').attr('content'),id:id,med:med,dosage:dosage,dt:dt},
            success: function(data){
                console.log("med = " + data.med + "  Dosage : " + data.dos);
                AddRow2(data.id,data.med,data.dos);
                if(data.success == 'success'){
                    $('#flag').text('Dosage Record inserted successfully');
                }
                else {
                    $('#flag').text('Error while saving');
                }
            }   
        })
            
        });
                 $('#tbody2').on('click','.save', function() {
                        alert('saved');
                        var id=$(this).parent().parent().find('#txt0').val();
                        var med=$(this).parent().parent().find('#txt1').val();
                        var dos=$(this).parent().parent().find('#txt2').val();
                      alert (id);
                        $.ajax({
                            type: 'get',
                            url: 'updateDosage',
                            data: {id:id,med:med,dos:dos},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                }
                            }    
                        })
            });
            $('#tbody3').on('click','.save', function() {
                        alert('saved');
                        var id=$(this).parent().parent().find('#txt0').val();
                        var test=$(this).parent().parent().find('#txt1').val();
                        $.ajax({
                            type: 'get',
                            url: 'updateLab',
                            data: {id:id,test:test},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                }
                            }    
                        })
            });
            $('#tbody4').on('click','.save', function() {
                        var id=$(this).parent().parent().find('#txt0').val();
                        var med=$(this).parent().parent().find('#txt1').val();
                        var qty=$(this).parent().parent().find('#txt2').val();
                        $.ajax({
                            type: 'get',
                            url: 'updatePharmacy',
                            data: {id:id,med:med,qty:qty},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                }
                            }    
                        })
            });

         $('#tbody2').on('click','.delete', function() {
                        alert('deleted');
                        var id=$(this).parent().parent().find('#txt0').val();
                        $(this).parent().parent().remove();
                        $.ajax({
                            type: 'get',
                            url: 'deleteDosage',
                            data: {id:id},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                }
                            }    
                        })
            });
       $('#tbody3').on('click','.delete', function() {
                        alert('deleted');
                        var id=$(this).parent().parent().find('#txt0').val();
                        $(this).parent().parent().remove();
                        $.ajax({
                            type: 'get',
                            url: 'deleteLab',
                            data: {id:id},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                }
                            }    
                        })
            });
       $('#tbody4').on('click','.delete', function() {
                        alert('deleted');
                        var id=$(this).parent().parent().find('#txt0').val();
                        $(this).parent().parent().remove();
                        $.ajax({
                            type: 'get',
                            url: 'deletePharmacy',
                            data: {id:id},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                }
                            }    
                        })
            });
       
    $(document).ready(function() {

        $.fn4 = function(s) 
        {
            s.forEach(function(e1, index) {
        var id = document.getElementById("id");
        var pt_name = document.getElementById('pt_name');
        var pt_surname = document.getElementById('pt_surname');
        var age = document.getElementById('age');
        var address = document.getElementById('address');
        var mobile = document.getElementById('mobile');
        //alert("Pt Name : "+ e1.pt_name);
        //id.value = e1.id;
        pt_name.value = e1.pt_name;
        pt_surname.value = e1.pt_surname;
        age.value = e1.age;
        address.value = e1.address;
        mobile.value = e1.mobile;
        
            })
            
        }
        $.fn5 = function(s) 
        {
            s.forEach(function(e1, index) {
        //var id = document.getElementById("id");
        var pt_name = document.getElementById('pt_name');
        var pt_surname = document.getElementById('pt_surname');
        var age = document.getElementById('age');
        var address = document.getElementById('address');
        var mobile = document.getElementById('mobile');

        alert("Name : "+ e1.pt_name);
        $('#id').text(e1.id);
        $('#pt_name').text(e1.pt_name);
        $('#pt_surname').text(e1.pt_surname);
        $('#age').text(e1.age);
        $('#address').text(e1.address);
        $('#mobile').text(mobile);
        
        })
            
        }
                $.fn1 = function(s) {
            $("#table2 tbody").empty();
            s.forEach(function(e1, index) {
                var row = "<tr> " +
                        "<td class='id'>" + "<input type='text' id='txt0' value='"+e1.id +"' disabled />" + "</td>" +
                        "<td>" + "<input type='text' id='txt1' value='"+e1.medicine +"' disabled />" + "</td>" +
                        "<td>" + "<input type='text' id='txt2' value='"+e1.dosage +"' disabled />" + "</td>" +
                        "<td>" + "<button type='button' class='edit'>Edit" + "</button> </td>" +
                        "<td>" + "<button type='button' class='save' hidden >Save" + "</button> </td>" +
                        "<td>" + "<button type='button' class='delete' >Delete" + "</button> </td>" +
                        "</tr>";
                $("#table2 tbody").append(row);
            })
        };
              $.fn2 = function(s) {
            $("#table3 tbody").empty();
            s.forEach(function(e1, index) {
                var row = "<tr> " +
                        "<td class='id'>" + "<input type='text' id='txt0' value='"+ e1.id +"' disabled />" + "</td>" +
                        "<td>" + "<input type='text' id='txt1' value='"+ e1.test +"' disabled />" + "</td>" +
                        "<td>" + "<button type='button' class='edit'>Edit" + "</button> </td>" +
                        "<td>" + "<button type='button' class='save' hidden >Save" + "</button> </td>" +
                        "<td>" + "<button type='button' class='delete' >Delete" + "</button> </td>" +
                        "</tr>";
                $("#table3 tbody").append(row);
            })
        };
            $.fn3 = function(s) {
            $("#table4 tbody").empty();
            s.forEach(function(e1, index) {
                var row = "<tr> " +
                        "<td class='id'>" + "<input type='text' id='txt0' value='"+ e1.id +"' disabled />" + "</td>" +
                        "<td>" + "<input type='text' id='txt1' value='"+ e1.medicine +"' disabled />" + "</td>" +
                         "<td>" + "<input type='text' id='txt2' value='"+ e1.qty +"' disabled />" + "</td>" +
                        "<td>" + "<button type='button' class='edit'>Edit" + "</button> </td>" +
                        "<td>" + "<button type='button' class='save' hidden >Save" + "</button> </td>" +
                        "<td>" + "<button type='button' class='delete' >Delete" + "</button> </td>" +
                        "</tr>";
                $("#table4 tbody").append(row);
            })
        };



        $('#pt').on('change', function() {
            let id = $(this).val();
            //alert(id);
            $.ajax({
                type: 'GET',
                url: 'GetPatient/' + id,
                success: function(response) {
                    console.log("success");
                    var response = JSON.parse(response);
                    console.log(response);
                    $.fn4(response);
                   // $.fn5(response);
       
                }
        });
        var dt = document.getElementById("dateAndTimePicker1");
        var dt = dt.value;
        $.ajax({
                type: 'GET',
                url: 'GetDosage/' + id +'/'+ dt,
                success: function(response) {
                    console.log("success");
                    var response = JSON.parse(response);
                    console.log(response);
                    $.fn1(response);
                   // $.fn5(response);
       
                }
        });
         $.ajax({
                type: 'GET',
                url: 'GetLab/' + id +'/'+ dt,
                success: function(response) {
                    console.log("success");
                    var response = JSON.parse(response);
                    console.log(response);
                    $.fn2(response);
                   
       
                }
        });
        $.ajax({
                type: 'GET',
                url: 'GetPharmacy/' + id +'/'+ dt,
                success: function(response) {
                    console.log("success");
                    var response = JSON.parse(response);
                    console.log(response);
                    $.fn3(response);
                   
       
                }
        });

        });
        $('#dr_remarks').on('click','.edit', function() {
            alert('Edit.. Dr. Remarks');
            var id = $(this).parent().parent().find('#txt1').val();
            alert ("Name : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
        });
        $('#tbody2').on('click','.edit', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
            $(this).parent().parent().find('#txt2').prop('disabled',false);
            $(this).parent().parent().find('.save').prop('hidden',false);
            $(this).parent().parent().find('.edit').prop('hidden',true);
        });
        $('#tbody2').on('click','.save', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',true);
            $(this).parent().parent().find('#txt2').prop('disabled',true);
            $(this).parent().parent().find('.save').prop('hidden',true);
            $(this).parent().parent().find('.edit').prop('hidden',false);
        });
        $('#tbody3').on('click','.edit', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
            $(this).parent().parent().find('.save').prop('hidden',false);
            $(this).parent().parent().find('.edit').prop('hidden',true);
        });
        $('#tbody3').on('click','.save', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',true);
            $(this).parent().parent().find('.save').prop('hidden',true);
            $(this).parent().parent().find('.edit').prop('hidden',false);
        });
        $('#tbody4').on('click','.edit', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
            $(this).parent().parent().find('#txt2').prop('disabled',false);
            $(this).parent().parent().find('.save').prop('hidden',false);
            $(this).parent().parent().find('.edit').prop('hidden',true);
        });
        $('#tbody4').on('click','.save', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',true);
            $(this).parent().parent().find('#txt2').prop('disabled',true);
            $(this).parent().parent().find('.save').prop('hidden',true);
            $(this).parent().parent().find('.edit').prop('hidden',false);
        });
        function AddRow3(id,test){
            var row =   "<tr>" +
                        "<td>" + "<input type='text' id='txt0' value='" +id + "' disabled />" + "</td>" +
                        "<td>" + "<input type='text' id='txt1' value='" +test + "' disabled />" + "</td>" +
"<td><button type='button' class='edit'>Edit</button></td>" +
"<td><button type='button' class='save' hidden>Save</button></td>" +
"<td><button type='button' class='delete'>Delete</button></td>" +
"</tr>";
       // alert(row);
        $("#table3 tbody").append(row);

        };
        $("#table3_add").click(function(e){
            //alert ("add button clicked");
            var test = document.getElementById('test');
            var test = test.value;
            var id = $("#pt option:selected").val();
            var dt = document.getElementById("dateAndTimePicker1");
            var dt = dt.value;

            $.ajax({
            type: 'POST',
            url:  'GetLab/' + id,
            data: {_token : $('meta[name="csrf_token"]').attr('content'),id:id,test:test,dt:dt},
            success: function(data){
                console.log("test = " + data.test);
                AddRow3(data.id,data.test);
                if(data.success == 'success'){
                    $('#flag').text('Dosage Record inserted successfully');
                }
                else {
                    $('#flag').text('Error while saving');
                }
            }   
        })
            
        });
        function AddRow4(id,med_name,qty){
            var row =   "<tr>" +
                        "<td>" + "<input type='text' id='txt0' value='" +
                        id +"' disabled />" + "</td>" +
                        "<td>" + "<input type='text' id='txt1' value='" +
                        med_name +"' disabled />" + "</td>" +
                        "<td>" + "<input type='text' id='txt2' value='" +
                        qty +"' disabled />" + "</td>" +
"<td><button type='button' class='edit'>Edit</button></td>" +
"<td><button type='button' class='save' hidden >Save</button></td>" +
"<td><button type='button' class='delete'>Delete</button></td>" +
"</tr>";
        $("#table4 tbody").append(row);

        };
        $("#table4_add").click(function(e){
            alert("add button clicked");
            var med_name = document.getElementById('med_name');
            var qty = document.getElementById('qty');
            var med_name = med_name.value;
            var qty = qty.value;
            var id = $("#pt option:selected").val();
            var dt = document.getElementById("dateAndTimePicker1");
            var dt = dt.value;

        $.ajax({
            type: 'POST',
            url:  'GetPharmacy/' + id,
            data: {_token : $('meta[name="csrf_token"]').attr('content'),id:id,med_name:med_name,qty:qty,dt:dt},
            success: function(data){
                console.log("med_name = " + data.med_name);
                AddRow4(data.id,data.med_name,data.qty);
                if(data.success == 'success'){
                    $('#flag').text('Dosage Record inserted successfully');
                }
                else {
                    $('#flag').text('Error while saving');
                }
            }   
        })
            
        });
    });

</script>
  <script>
    $("#save1").click(function(e){
        
            alert ("add button clicked");
            var case_no = document.getElementById('case_no');
            var dr = document.getElementById('dr');
            var case_no = case_no.value;
            var dr = dr.value;
            var pt_id = $("#pt_new option:selected").val();
            var dt = document.getElementById("dateAndTimePicker2");
            var dt = dt.value;
            var id = 1;
            console.log(case_no + dr + pt_id + dt)
            $.ajax({
            type: 'POST',
            url:  'GetCase/' + id,
            data: {_token : $('meta[name="csrf_token"]').attr('content'),pt_id:pt_id,case_no:case_no,dr:dr,dt:dt},
            success: function(data){
                console.log("success = " + data.success);
                
            }   
        })
//      alert ("New Case Entry Done in modal window");
    });
</script>
@endsection