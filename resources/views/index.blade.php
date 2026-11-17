
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
            #txt
            {
                color: black;
                background-color: white;
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

        <form action="{{ url("patients") }}" method="post">
            @csrf
      <table border="0"align="center"id="tbl" cellspacing="15   ">
          <TR>
              <TD>
                  <H2 ALIGN="CENTER">Patient ENTRY FORM </H2>
          
              </TD>
          </TR>
          
          <tr> <td>
        First Name<td> <input type="text" name="fname" id="txt" SIZE="22">
                 </td></tr>
      <tr> <td>
      Last Name<td> <input type="text" name="lname"  id="txt" SIZE="22">
       </td></tr>
       <tr> <td>
      Mobile Number<td> <input type="number" name="mobile" id="txt" SIZE="22"><br>
       </td></tr>
          
       <tr> <td>     
      Email<td> <input type="email" name="email"  id="txt" SIZE="22"><br>
       </td></tr>
     <!--  <tr> <td>     
      Password<td> <input type="password" name="password"  id="txt" SIZE="22"><br>
       </td></tr>
       <tr> <td>     
       Confirm Password<td> <input type="password" name="confirm"  id="txt" SIZE="22"><br>
       </td></tr>
    -->
           <tr> <td>     
       Gender<td> <input type="radio" NAME = "r1" id="txt" value="MALE" checked> Male 
                <input type="radio" NAME="r1" id="txt" value="FEMALE" >Female<br>

       </td></tr>
    
       <tr>
           <td>
          Date Of Birth
            </td>          
            <td>
                <select name="dd" id='txt'>
                    <option>1</option>
                    <option>2</option>
                  <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                </select>
                <select name="mmm" id='txt'>
                    
                    <option>JAN</option>
                    <option>FEB</option>
                    <option>MAR</option>
                    <option>APR</option>
                    <option>MAY</option>
                    <option>JUN</option>
                    <option>JUL</option>
                    <option>AUG</option>
                    <option>SEP</option>
                    <option>OCT</option>
                    <option>NOV</option>
                    <option>DEC</option>
                    
                    </select>
                <SELECT name="yyyy" id='txt'>
                    <OPTION>2000</OPTION>
                    <OPTION>2001</OPTION>
                    <OPTION>2002</OPTION>
                    <OPTION>2003</OPTION>
                    <OPTION>2004</OPTION>
                    <OPTION>2005</OPTION>
                    <OPTION>2006</OPTION>
                    <OPTION>2007</OPTION>
                    <OPTION>2008</OPTION>
                    <OPTION>2009</OPTION>
                    <OPTION>2010</OPTION>
                    <OPTION>2011</OPTION>
                    <OPTION>2012</OPTION>
                    <OPTION>2013</OPTION>
                    <OPTION>2014</OPTION>
                    <OPTION>2015</OPTION>
                    <OPTION>2016</OPTION>
                    <OPTION>2017</OPTION>
                    <OPTION>2018</OPTION>
                    <OPTION>2019</OPTION>
                    <OPTION>2020</OPTION>
                    
                </SELECT>   
            </td>
       </tr>
       
       <tr> <td>     
       LANGUAGES <td><input type="CHECKBOX" NAME = "c1" id="txt" value='ENGLISH' > 
               ENGLISH <input type="CHECKBOX" NAME="c2" id="txt" value='HINDI'>HINDI<BR>
               <input type="CHECKBOX" NAME="c3" id="txt" value='GUJARATI'>GUJARATI
               <input type="CHECKBOX" NAME="c4" id="txt" value='MARATHI'>MARATHI
           </td></tr>

       
       <tr><td>          
               Address<td> <textarea name="address" id="txt" rows="3" cols="16"></textarea>    
       </td></tr>   
               
           </td></tr>
       <tr> <td ALIGN="CENTER" COLSPAN="2">     
               <input type="Submit" name="submit" value="SUBMIT" id="btn">
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
