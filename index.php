<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
</head>
<body>
    <h3 align="right" style="margin-right:20px;"><a href=login.php>Admin Login</a></h3>
   <h1 align="center">Welcome to Student Management System</h1>
   
   <form method="post" action="index.php">
   <table style="width:30%; background: linear-gradient(to right , #db1bf6 ,#19d7f8);" align="center" border="1">
       <tr>
           <td colspan="2" align="center">Student Information</td>
       </tr>
       <tr>
           <td align="left">Choose Standerd</td>
           <td>
               <select>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3th</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
               </select>
           </td>
       </tr>
       <tr>
           <td align="left">Enter Rollno</td>
           <td>
               <input type="text" name="rollno" required>
           </td>
       </tr>
       <tr>
           <td colspan="2" align="center"><input type="submit" value="Show Info"></td>
       </tr>
   </table>
   </form>
    
</body>
</html>
<?php 



if(isset($_post['submit']))
{
    $standerd=$_post['std'];
    $rollno=$_post['rollno'];
    
    include('dbcon.php');
    include('function.php');
    
    
    showdetails($standerd , $rollno);
    
    
    
    
    
    
    
    
}






?>