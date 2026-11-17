@extends('layouts.saifee-admin')
@section('content')

<?php
use Carbon\Carbon;
?>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- DateTimePicker Css -->
    <link href="{{ asset('assets/datetime/jquery.datetimepicker.min.css')}}" rel="stylesheet">
    <style> 
        #tbl
        {
        color:white;
        /*border-radius:25px; */
        background-color:black;
        border-spacing:75px;
        /*padding:75px;*/
        }
        #btn1
        {
         background-color:green;
         color:white;
         height:30px;
         width:250px;
         border-radius:25px; 
        }
        #bd1
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
        table, th, td {
            border: 1px solid black;
        }
        
    </style>
    

    
</head>
<body id="bd1">
<!-- Button trigger modal -->
<button type="button" id="btn1" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  @include('saifee1.new-case')  


Table 1
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
</body>
</html>
@endsection