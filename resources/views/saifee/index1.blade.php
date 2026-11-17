
@include("saifee1.new-case")
@include("saifee.new-pt")
@include('saifee.select-case')

<?php
use Carbon\Carbon;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--Required Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.10.1/dist/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!--Required JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.10.1/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.30.1/moment.min.js"></script>
    <!-- Styles -->
    <title>XYZ Clinic</title>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<style> 
    #tbl
    {
    color:white;
    /*border-radius:25px; */
    background-color:black;
    /*border-spacing:75px;
    padding:75px;*/
    }
    #btn1
    {
     background-color:green;
     color:white;
     height:30px;
     width:250px;
     border-radius:25px; 
    }
    #bd
    {
     background-color:blue;
    color:white;
    }
    a.edit:link, a.edit:visited {
     background-color:green;
     color:white;
     height:20px;
     width:50px;
     border-radius: 25px;
     text-decoration: none; 
     text-align: center;
     padding: 10px 10px;
     display: inline-block;
    }
    a.new:link, a.new:visited {
     background-color:green;
     color:white;
     height:20px;
     width:200px;
     border-radius: 25px;
     text-decoration: none; 
     text-align: center;
     padding: 10px 10px;
     display: inline-block;
    }

</style> 
  </head>
  <body id="bd">
<form method="get" id="frm_malabis">
   <img length="10%" width="10%" src="{{ asset('Tulips.jpg') }}" />
<h3>XYZ No. 1 Clinic</h3>
Date and Time :
<div class = "datepicker1 border-1">
	<input id="dateAndTimePicker1" name="dateAndTimePicker1" value="{{ Carbon::today()->format('Y-m-d') }}"/>
    <input type="text" id="date1" disabled/>
</div>
<br>
<label>Patient Details</label>
 <br>ID : <input type="text" id="id111" value="0" disabled/>
Name :<input type="text" id="txt11" value="xyz" disabled/>
<br><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Create New CASE
  </button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Select a CASE
  </button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
    Enter Patient Details
  </button>
  <!-- Button for fullscreen image -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
    Enter Patient Details
  </button>

<div id="saifee">
<table id="tbl">
<tr>
<td><label>Patient ID : </label>
    <input type="text" id="no" /></td>
<td><label>Name : </label>
    <input type="text" id="pt_name"/></td>
<td><label>Surname : </label>
    <input type="text" id="pt_surname"/></td>
</tr>

<tr>
<td><label>Age : </label>
    <input type="text" id="age"/></td>
<td><label>Address : </label>
    <input type="text" id="address"/></td>
<td><label>Mobile : </label>
    <input type="text" id="mobile"/></td>
</tr>
</table>
</div>
<label id="flag" style="color:red"></label>


<br><br><br>
		
Patient Diagnosis
<table id="tbl">
<tbody id="dr_remarks">
<tr>
<td><label>Symptom </label></td>
<td><input type="text" id="txt1" name="symptom" disabled/></td>
<td><button type="button" class="edit" >Edit</button></td>
</tr>
<tr>
<td><label>Past History</label></td>
<td><input type="text" id="txt1" name="history" disabled/></td>
<td><button type="button" class="edit" >Edit</button></td>
</tr>
<tr>
<td><label>RS </label></td>
<td><input type="text" id="txt1" name="rs" disabled/></td>
<td><button type="button" class="edit" >Edit</button></td>
</tr>
<tr>
<td><label>CVS </label></td>
<td><input type="text" id="txt1" name="cvs" disabled/></td>
<td><button type="button" class="edit" >Edit</button></td>
</tr>
</tbody>
</table>


Dosage
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
    <td><input type="button" id="table2_add" value="Add"> <!--onclick="Javascript:addRow1()">--></td> <!--onclick="Javascript:addRow()"-->
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

Lab Test
<table id="tbl">
<tr>
<td>
<table>
    <tr>
        <td>Lab Test : </td><td><input type="text" id="test"></td>
    </tr>
    <tr>
    <td><input type="button" id="table3_add" value="Add"> <!--onclick="Javascript:addRow1()">--></td> <!--onclick="Javascript:addRow()"-->
    </tr>
</table>
</td>
</tr>
<tr>
<td>
<table id="table3">
<thead>
<tr>
<th>ID</th>
<th>LAB Test</th>
</tr>
</thead>
<tbody id="tbody3">
<tr>
<td><input type='text' id='txt0' disabled /></td>
<td><input type='text' id='txt1' disabled /></td>
<td><button type="button" class="edit">Edit</button></td>
<td><button type="button" class="save" hidden >Save</button></td>
<td><button type="button" class="delete">Delete</button></td>
</tr>
<td>
</tbody>
</table>
</tr>
</table>

Medicine From Pharmacy
<table id="tbl">
<tr>
<td>
<table>
    <tr>
        <td>Medicine Name: </td><td><input type="text" id="med_name"></td>
    </tr>
    <tr>
        <td>Quantity : </td><td><input type="text" id="qty"></td>
    </tr>
    <tr>
    <td><input type="button" id="table4_add" value="Add"> <!--onclick="Javascript:addRow1()">--></td> <!--onclick="Javascript:addRow()"-->
    </tr>
</table>
</td>
</tr>
<tr>
<td>
<table id="table4">
<thead>
<tr><th colspan="2">Medicine from Pharmacy</th></tr>
<tr>
<th>ID</th>
<th>Medicine Name</th>
<th>Quantity</th>
</tr>
</thead>
<tbody id="tbody4">
<tr>
<td><input type='text' id='txt0' disabled /></td>
<td><input type='text' id='txt1' disabled /></td>
<td><input type='text' id='txt2' disabled /></td>
<td><button type="button" class="edit">Edit</button></td>
<td><button type="button" class="save" hidden >Save</button></td>
<td><button type="button" class="delete">Delete</button></td>
</tr>
<tr>
<td>1</td>
<td>Paracetamol</td>
<td>2 Times</td>
<td><button type="button" class="edit">Edit</button></td>
<td><button type="button" class="save" hidden >Save</button></td>
<td><button type="button" class="delete">Delete</button></td>
</tr>
<td>
</tbody>
</table>

</tr>
</table>

<label id="flag" style="color:red"></label>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script>
      $("#dateAndTimePicker1").datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true,
            startView: 0,
            minViewMode: 0,
            container: '.datepicker1'
			}).on('changeDate', function(e){
                $('#date1').val(moment(e.date).format("YYYY-MM-DD"));
            var assign_dt = document.getElementById("date1");
                alert("Date : " + assign_dt);
        
      });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function AddNewPatient(name, surname) {
            var row =   "<tr>" +
                        "<td class='id'>" + "<input type='text' id='txt0' value='" +'0' +"' hidden />"  + "</td>" +
                        "<td>" + "<input type='text' id='txt1' value='" +
                        name +"' disabled />"  + "</td>" +
                        "<td>" + "<input type='text' id='txt2' value='" +
                        surname +"' disabled />"  + "</td>" +
                        
"</tr>";
            $("#n_pt_table tbody").append(row);

        };
    
    $("#n_pt_add").click(function(e){
            var n_pt_no = document.getElementById('n_pt_no');
            var n_pt_name = document.getElementById('n_pt_name');
            var n_pt_surname = document.getElementById('n_pt_surname');
            var n_pt_age = document.getElementById('n_pt_age');
            var n_pt_address = document.getElementById('n_pt_address');
            var n_pt_mobile = document.getElementById('n_pt_mobile');
            var n_pt_no = n_pt_no.value;
            var n_pt_name = n_pt_name.value;
            var n_pt_surname = n_pt_surname.value;
            var n_pt_age = n_pt_age.value;
            var n_pt_address = n_pt_address.value;
            var n_pt_mobile = n_pt_mobile.value;
            
            $.ajax({
            type: 'POST',
            url:  'NewPatient',
            data: {_token : $('meta[name="csrf_token"]').attr('content'),n_pt_no:n_pt_no, n_pt_name:n_pt_name, n_pt_surname:n_pt_surname, n_pt_age:n_pt_age, n_pt_address:n_pt_address, n_pt_mobile:n_pt_mobile},
            success: function(data){
                console.log("n_pt_name = " + data.n_pt_name + "  Surname : " + data.n_pt_surname);
                AddNewPatient(data.n_pt_name,data.n_pt_surname);
                if(data.success == 'success'){
                    $('#flag').text('New Patient inserted successfully');
                    alert('New Patient inserted successfully')
                }
                else {
                    $('#flag').text('Error while saving');
                    alert('Error while saving')
                }
            }   
        })
            
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
            //alert ("add button clicked");
            var med = document.getElementById('med');
            var dosage = document.getElementById('dosage');
            var med = med.value;
            var dosage = dosage.value;
            //var id = $("#pt option:selected").val();
            var id = $('#id111').val();
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
                    alert('Dosage Record inserted successfully');
                }
                else {
                    $('#flag').text('Error while saving');
                    alert('Error while saving');
                }
            }   
        })
            
        });
                 $('#n_pt_body').on('click','.save', function() {
                        //alert('saved');
                        var id=$(this).parent().parent().find('#txt0').val();
                        var name=$(this).parent().parent().find('#txt1').val();
                        var surname=$(this).parent().parent().find('#txt2').val();
                      
                        $.ajax({
                            type: 'get',
                            url: 'updatePatient',
                            data: {id:id,name:name,surname:surname},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record saved successfully');
                                    alert('Record saved successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while saving');
                                    alert('Error while saving');
                                }
                            }    
                        })
            });
                 $('#tbody2').on('click','.save', function() {
                        //alert('saved');
                        var id=$(this).parent().parent().find('#txt0').val();
                        var med=$(this).parent().parent().find('#txt1').val();
                        var dos=$(this).parent().parent().find('#txt2').val();
                      //alert (id);
                        $.ajax({
                            type: 'get',
                            url: 'updateDosage',
                            data: {id:id,med:med,dos:dos},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record saved successfully');
                                    alert('Record saved successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while saving');
                                    alert('Error while saving');
                                }
                            }    
                        })
            });
            $('#tbody3').on('click','.save', function() {
                        //alert('saved');
                        var id=$(this).parent().parent().find('#txt0').val();
                        var test=$(this).parent().parent().find('#txt1').val();
                        $.ajax({
                            type: 'get',
                            url: 'updateLab',
                            data: {id:id,test:test},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record saved successfully');
                                    alert('Record saved successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while saving');
                                    alert('Error while saving');
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
                                    $('#flag').text('Record saved successfully');
                                    alert('Record saved successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while saving');
                                    alert('Error while saving');
                                }
                            }    
                        })
            });

        $('#n_pt_body').on('click','.delete', function() {
                        //alert('deleted');
                        var id=$(this).parent().parent().find('#txt0').val();
                        $(this).parent().parent().remove();
                        $.ajax({
                            type: 'get',
                            url: 'deletePatient',
                            data: {id:id},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                    alert('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                    alert('Error while deleting');
                                }
                            }    
                        })
            });

         $('#tbody2').on('click','.delete', function() {
                        //alert('deleted');
                        var id=$(this).parent().parent().find('#txt0').val();
                        $(this).parent().parent().remove();
                        $.ajax({
                            type: 'get',
                            url: 'deleteDosage',
                            data: {id:id},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                    alert('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                    alert('Error while deleting');
                                }
                            }    
                        })
            });
       $('#tbody3').on('click','.delete', function() {
                        //alert('deleted');
                        var id=$(this).parent().parent().find('#txt0').val();
                        $(this).parent().parent().remove();
                        $.ajax({
                            type: 'get',
                            url: 'deleteLab',
                            data: {id:id},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                    alert('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                    alert('Error while deleting');
                                }
                            }    
                        })
            });
       $('#tbody4').on('click','.delete', function() {
                        //alert('deleted');
                        var id=$(this).parent().parent().find('#txt0').val();
                        $(this).parent().parent().remove();
                        $.ajax({
                            type: 'get',
                            url: 'deletePharmacy',
                            data: {id:id},
                            success: function(data){
                                if(data.success == 'success'){
                                    $('#flag').text('Record deleted successfully');
                                    alert('Record deleted successfully');
                                }
                                else
                                {
                                    $('#flag').text('Error while deleting');
                                    alert('Error while deleting');
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

        //alert("Name : "+ e1.pt_name);
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


$.common_fn = function(){
        let id = $('#id111').val();
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

};
        $('#pt').on('change', function() {

       //  $.common_fn();
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
         $('#id111').on('change', function() {

       //  $.common_fn();
       let id = $('#id111').val();
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
            //alert ("Name : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
        });
        $('#n_pt_body').on('click','.edit', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
            $(this).parent().parent().find('#txt2').prop('disabled',false);
            $(this).parent().parent().find('.save').prop('hidden',false);
            $(this).parent().parent().find('.edit').prop('hidden',true);
        });
        $('#n_pt_body').on('click','.save', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',true);
            $(this).parent().parent().find('#txt2').prop('disabled',true);
            $(this).parent().parent().find('.save').prop('hidden',true);
            $(this).parent().parent().find('.edit').prop('hidden',false);
        });
        
        $('#tbody2').on('click','.edit', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
            $(this).parent().parent().find('#txt2').prop('disabled',false);
            $(this).parent().parent().find('.save').prop('hidden',false);
            $(this).parent().parent().find('.edit').prop('hidden',true);
        });
        $('#tbody2').on('click','.save', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',true);
            $(this).parent().parent().find('#txt2').prop('disabled',true);
            $(this).parent().parent().find('.save').prop('hidden',true);
            $(this).parent().parent().find('.edit').prop('hidden',false);
        });
        $('#tbody3').on('click','.edit', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
            $(this).parent().parent().find('.save').prop('hidden',false);
            $(this).parent().parent().find('.edit').prop('hidden',true);
        });
        $('#tbody3').on('click','.save', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',true);
            $(this).parent().parent().find('.save').prop('hidden',true);
            $(this).parent().parent().find('.edit').prop('hidden',false);
        });
        $('#tbody4').on('click','.edit', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
            $(this).parent().parent().find('#txt1').prop('disabled',false);
            $(this).parent().parent().find('#txt2').prop('disabled',false);
            $(this).parent().parent().find('.save').prop('hidden',false);
            $(this).parent().parent().find('.edit').prop('hidden',true);
        });
        $('#tbody4').on('click','.save', function() {
            var id = $(this).parent().parent().find('#txt1').val();
            //alert ("Data : " + id);
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
            var id = $('#id111').val();
            //var id = $("#pt option:selected").val();
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
                    $('#flag').text('Lab Record inserted successfully');
                    alert('Lab Record inserted successfully');
                }
                else {
                    $('#flag').text('Error while saving');
                    alert('Error while saving');
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
            //alert("add button clicked");
            var med_name = document.getElementById('med_name');
            var qty = document.getElementById('qty');
            var med_name = med_name.value;
            var qty = qty.value;
            var id = $('#id111').val();
            //var id = $("#pt option:selected").val();
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
                    $('#flag').text('Pharmacy Record inserted successfully');
                    alert('Pharmacy Record inserted successfully')
                }
                else {
                    $('#flag').text('Error while saving');
                    alert('Error while saving');
                }
            }   
        })
            
        });
    });
</script>
<script>
    $("#save1").click(function(e){
        
            //alert ("add button clicked");
           /* var case_no = 21;
            var dr = "Rangwala";
            var pt_id = 1;
            var dt = "2024-04-04";
            
            var id = 1;*/
            //var case_dt = date("Y-m-d H:i:s",strtotime(dt));

            //alert(case_dt);
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
            url:  '/GetCase/' + id,
            data: {_token : $('meta[name="csrf_token"]').attr('content'),id:id,pt_id:pt_id,case_no:case_no,dr:dr,dt:dt},
            success: function(data){
                console.log("success = " + data.success);
                
            }   
        })
      alert ("New Case Entry Done in modal window");
    });
</script>
<script>
$('#tbody11').on('click','#select1', function(){
//alert("select case");
var dt1 = $(this).parent().parent().find('#dt1').html();
//alert('date : ' + dt1); 
var id1 = $(this).parent().parent().find('#id1').html();
//alert('ID : ' + id1); 
var name1 = $(this).parent().parent().find('#name1').html();
//alert('name : ' + name1); 
$('#txt1').val(name1);
$('#id11').val(id1);

$('#dateAndTimePicker1').val(dt1);
$('#pt').prop('hidden',true);
$('#txt11').val(name1);
$('#id111').val(id1);
$.common_fn();
})
</script>

 {{-- <script>
    $("#save1").click(function(e){
        
            alert ("add button clicked");
            var case_no = document.getElementById('case_no');
            var dr = document.getElementById('dr');
            var case_no = case_no.value;
            var dr = dr.value;
            var pt_id = $("#pt_new option:selected").val();
            var dt = document.getElementById("dateAndTimePicker1");
            var dt = dt.value;
            var id = 1;
            console.log(case_no + dr + pt_id + dt)
            $.ajax({
            type: 'POST',
            url:  'GetCase/' + id,
            data: {_token : $('meta[name="csrf_token"]').attr('content'),id:id,pt_id:pt_id,case_no:case_no,dr:dr,dt:dt},
            success: function(data){
                console.log("success = " + data.success);
                
            }   
        })
      alert ("New Case Entry Done in modal window");
    });
</script>
 --}}
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

  </body>
</html>