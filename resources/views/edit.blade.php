
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
            #txt
            {
                background-color: white;
                color: black;
            }
            div.dv {
                background-color: white;
            }

        </style>  
            
    </head>
    <body id="bd">
       <br>
<div>
@if(session('status'))
                <div class="dv" >
                    {{ session('status') }}

                </div>
        
@endif

 <div align="right">
    <a href="{{ url('patients') }}" class="edit" >BACK</a>

 </div>

        <form action="{{ url("patients/". $patient->id) }}" method="post">
            @csrf
            @method('PUT')
      <table border="0"align="center"id="tbl" cellspacing="15   ">
          <TR>
              <TD>
                  <H2 ALIGN="CENTER">Patient Edit FORM </H2>
          
              </TD>
          </TR>
          
          <tr> <td>
        First Name<td> <input type="text" name="fname" SIZE="22" id="txt" value={{ $patient->fname }}>
                 </td></tr>
      <tr> <td>
      Last Name<td> <input type="text" name="lname"  SIZE="22" id="txt" value= {{ $patient->lname }}>
       </td></tr>
       <tr> <td>
      Mobile Number<td> <input type="number" name="mobile"  SIZE="22" id="txt" value ={{ $patient->mobile }}><br>
       </td></tr>
          
       <tr> <td>     
      Email<td> <input type="email" name="email"  SIZE="22" id="txt" value = {{ $patient->email }}><br>
       </td></tr>
       <!--
       <tr> <td>     
      Password<td> <input type="password" name="password"  SIZE="22" id="txt" value= {{ $patient->password }}><br>
       </td></tr>
       <tr> <td>     
       Confirm Password<td> <input type="password" name="confirm"  SIZE="22" id="txt" value={{ $patient->confirm }}><br>
       </td></tr>
    -->

       <tr> <td>     
       Gender<td> <input type="radio" NAME = "r1" id="txt" value="MALE" {!! $patient->gender =='MALE' ? 'checked' : ' '!!}> Male 
                <input type="radio" NAME="r1" id="txt" value="FEMALE" {!! $patient->gender =='FEMALE' ? 'checked' : ' '!!}>Female<br>

       </td></tr>
    
       <tr>
           <td>
          Date Of Birth
            </td>  
            <td>
            <?php    
            $t = strtotime($patient->dob);
            $dd = date('d',$t);
            $mmm = date('M',$t);
            $yyyy = date('Y', $t);
            //echo "Date : ". $dd . "/" . $mmm . "/" . $yyyy;
            echo "<select name='dd' id='txt' >
                    <option ".
                    ($dd == '1' ? 'selected' : '') .
                    ">1</option>
                    <option ".
                    ($dd == '2' ? 'selected' : '') .
                    ">2</option>
                    <option ".
                    ($dd == '3' ? 'selected' : '') .
                    ">3</option>
                    <option ".
                    ($dd == '4' ? 'selected' : '') .
                    ">4</option>
                    <option ".
                    ($dd == '5' ? 'selected' : '') .
                    ">5</option>
                    <option ".
                    ($dd == '6' ? 'selected' : '') .
                    ">6</option>
                    <option ".
                    ($dd == '7' ? 'selected' : '') .
                    ">7</option>
                    <option ".
                    ($dd == '8' ? 'selected' : '') .
                    ">8</option>
                    <option ".
                    ($dd == '9' ? 'selected' : '') .
                    ">9</option>
                    <option ".
                    ($dd == '10' ? 'selected' : '') .
                    ">10</option>
                    <option ".
                    ($dd == '11' ? 'selected' : '') .
                    ">11</option>
                    <option ".
                    ($dd == '12' ? 'selected' : '') .
                    ">12</option>
                    <option ".
                    ($dd == '13' ? 'selected' : '') .
                    ">13</option>
                    <option ".
                    ($dd == '14' ? 'selected' : '') .
                    ">14</option>
                    <option ".
                    ($dd == '15' ? 'selected' : '') .
                    ">15</option>
                    <option ".
                    ($dd == '16' ? 'selected' : '') .
                    ">16</option>
                    <option ".
                    ($dd == '17' ? 'selected' : '') .
                    ">17</option>
                    <option ".
                    ($dd == '18' ? 'selected' : '') .
                    ">18</option>
                    <option ".
                    ($dd == '19' ? 'selected' : '') .
                    ">19</option>
                    <option ".
                    ($dd == '20' ? 'selected' : '') .
                    ">20</option>
                    <option ".
                    ($dd == '21' ? 'selected' : '') .
                    ">21</option>
                    <option ".
                    ($dd == '22' ? 'selected' : '') .
                    ">22</option>
                    <option ".
                    ($dd == '23' ? 'selected' : '') .
                    ">23</option>
                    <option ".
                    ($dd == '24' ? 'selected' : '') .
                    ">24</option>
                    <option ".
                    ($dd == '25' ? 'selected' : '') .
                    ">25</option>
                    <option ".
                    ($dd == '26' ? 'selected' : '') .
                    ">26</option>
                    <option ".
                    ($dd == '27' ? 'selected' : '') .
                    ">27</option>
                    <option ".
                    ($dd == '28' ? 'selected' : '') .
                    ">28</option>
                    <option ". 
                    ($dd == '29' ? 'selected' : '') .
                    ">29</option>
                    <option ".
                    ($dd == '30' ? 'selected' : '') .
                    ">30</option>
                    <option ".
                    ($dd == '31' ? 'selected' : '') .
                    ">31</option>
                </select>";

            ?>
            <?php
            echo
                "<select name='mmm' id='txt'>
                    
                    <option ".
                    ($mmm == 'Jan' ? 'selected' : '').
                    ">JAN</option>
                    <option ".
                    ($mmm == 'Feb' ? 'selected' : '').
                    ">FEB</option>
                    <option ".
                    ($mmm == 'Mar' ? 'selected' : '').
                    ">MAR</option>
                    <option ".
                    ($mmm == 'Apr' ? 'selected' : '').
                    ">APR</option>
                    <option ".
                    ($mmm == 'May' ? 'selected' : '').
                    ">MAY</option>
                    <option ".
                    ($mmm == 'Jun' ? 'selected' : '').
                    ">JUN</option>
                    <option ".
                    ($mmm == 'Jul' ? 'selected' : '').
                    ">JUL</option>
                    <option ".
                    ($mmm == 'Aug' ? 'selected' : '').
                    ">AUG</option>
                    <option ".
                    ($mmm == 'Sep' ? 'selected' : '').
                    ">SEP</option>
                    <option ".
                    ($mmm == 'Oct' ? 'selected' : '').
                    ">OCT</option>
                    <option ".
                    ($mmm == 'Nov' ? 'selected' : '').
                    ">NOV</option>
                    <option ".
                    ($mmm == 'Dec' ? 'selected' : '').
                    ">DEC</option>
                    
                    </select>";
                ?>
                <?php
                echo "
                   <SELECT name='yyyy' id='txt'>
                    <OPTION ".
                    ($yyyy == '2000' ? 'selected' : '').
                    ">2000</OPTION>
                    <OPTION ".
                    ($yyyy == '2001' ? 'selected' : '').
                    ">2001</OPTION>
                    <OPTION ".
                    ($yyyy == '2002' ? 'selected' : '').
                    ">2002</OPTION>
                    <OPTION ".
                    ($yyyy == '2003' ? 'selected' : '').
                    ">2003</OPTION>
                    <OPTION ".
                    ($yyyy == '2004' ? 'selected' : '').
                    ">2004</OPTION>
                    <OPTION ".
                    ($yyyy == '2005' ? 'selected' : '').
                    ">2005</OPTION>
                    <OPTION ".
                    ($yyyy == '2006' ? 'selected' : '').
                    ">2006</OPTION>
                    <OPTION ".
                    ($yyyy == '2007' ? 'selected' : '').
                    ">2007</OPTION>
                    <OPTION ".
                    ($yyyy == '2008' ? 'selected' : '').
                    ">2008</OPTION>
                    <OPTION ".
                    ($yyyy == '2009' ? 'selected' : '').
                    ">2009</OPTION>
                    <OPTION ".
                    ($yyyy == '2010' ? 'selected' : '').
                    ">2010</OPTION>
                    <OPTION ".
                    ($yyyy == '2011' ? 'selected' : '').
                    ">2011</OPTION>
                    <OPTION ".
                    ($yyyy == '2012' ? 'selected' : '').
                    ">2012</OPTION>
                    <OPTION ".
                    ($yyyy == '2013' ? 'selected' : '').
                    ">2013</OPTION>
                    <OPTION ".
                    ($yyyy == '2014' ? 'selected' : '').
                    ">2014</OPTION>
                    <OPTION ".
                    ($yyyy == '2015' ? 'selected' : '').
                    ">2015</OPTION>
                    <OPTION ".
                    ($yyyy == '2016' ? 'selected' : '').
                    ">2016</OPTION>
                    <OPTION ".
                    ($yyyy == '2017' ? 'selected' : '').
                    ">2017</OPTION>
                    <OPTION ".
                    ($yyyy == '2018' ? 'selected' : '').
                    ">2018</OPTION>
                    <OPTION ".
                    ($yyyy == '2019' ? 'selected' : '').
                    ">2019</OPTION>
                    <OPTION ".
                    ($yyyy == '2020' ? 'selected' : '').
                    ">2020</OPTION>
                    
                </SELECT>";

                ?>

            </td>
       </tr>
       
       <tr> <td>     
       LANGUAGES <td><input type="CHECKBOX" NAME = "c1" id="txt" value='ENGLISH' {!! $patient->english ==true ? 'checked' : ' '!!}> 
               ENGLISH <input type="CHECKBOX" NAME="c2" id="txt" value='HINDI' {!! $patient->hindi ==true ? 'checked' : ' '!!}>HINDI<BR>
               <input type="CHECKBOX" NAME="c3" id="txt" value='GUJARATI' {!! $patient->gujarati ==true ? 'checked' : ' '!!} >GUJARATI
               <input type="CHECKBOX" NAME="c4" id="txt" value='MARATHI' {!! $patient->hindi ==true ? 'checked' : ' '!!} >MARATHI
           </td></tr>

       
       <tr><td>           
               Address<td> <textarea name="address" rows="3" cols="16" id="txt">{{ $patient->address }}</textarea>    
       </td></tr>   
               
           </td></tr>
       <tr> <td ALIGN="CENTER" COLSPAN="2">     
               <input type="Submit" name="submit" value="UPDATE" id="btn">
       </td></tr>
       </table>
        </form>
</div>
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
