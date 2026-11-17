
<html>
    <head>
 
        <title>CLinic Software</title>
  
        <style> 
            #tbl
            {
            color:white;
            border-radius:25px; 
            background-color:black;
            }
            #btn
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
            }
            .btn_delete {
             background-color:green;
             color:white;
             height:40px;
             width:100px;
             border-radius: 25px;
             text-decoration: none; 
             text-align: center;
             padding: 1px 1px;
             display: inline-block;
               
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
            div.dv {
                background-color: white;
            }

</style>  
            
    </head>
    <body id="bd">
        <br>
        @if(session('status'))
        <div class="dv" >
            {{ session('status') }}

        </div>

@endif

<!--<form method="post" action="insert1.php">-->
<!--<form action="" method="POST">    
    -->  <div align="center">
                
                <a href="" class="new" >Nanawala Clinic</a>
                
            </div>
            <!--
            <div align="center">
                <a href="{{ url('patients_list') }}" class="new">Print Patient List</a> 
    
            </div> -->
        <H2 ALIGN="CENTER">Patient List </H2>
           <!-- <div align="center">
                
                <a href="{{ url('patients/create') }}" class="new" >Add New</a>
                
            </div>
        -->
        <table border="0"align="center"id="tbl" cellspacing="15   ">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Gender</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $no)
        <tr>
            <td>{{ $no->id }}</td>
            <td>{{ $no->fname }}</td>
            <td>{{ $no->lname }}</td>
            <td>{{ $no->mobile }}</td>
            <td>{{ $no->gender }}</td>
           <!-- <td>
                <a href= "{{ url('patients/'. $no->id. '/edit') }}" class="edit" >Edit</a>
            </td>
            <td>
                <br>
                <form action="{{ url('patients/' . $no->id) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn_delete" >DELETE</button>       
                </form>
            </td>
        -->
        </tr>
            @endforeach
        </tbody>
</table>
        

<?php
// define variables and set to empty values
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";

//if (isset($_POST['submit']))
//{$msg=$_POST['dd']."  ".$_POST['mmm']."   ".$_POST['yyyy'];

  //     echo "<script>alert('$msg');</script>";
 //echo  $_POST['dd']."  ".$_POST['mmm']."   ".$_POST['yyyy'];
            

    
    
?>
    </body>
</html>
