<?php

include('../dbcon.php');
        $rollno = $_post['rollno'];
        $name  = $_post['name'];
        $city  = $_post['city'];
        $pcon  = $_post['pcon'];
        $std   = $_post['std'];
        $id= $_post['sid'];
        $imagename = $_files['simg']['name'];
        $tempname = $_files['simg']['tmp_name'];
        
        move_uploaded_file($tempname,"../dataimg/$imagename");
        
        
        
        $qry="UPDATE `student` SET `rollno` ='$std', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standerd` = '$std' , `image` = '$img' , WHERE `id` = $id ; "; 
        
        $run = myqli_query($con,$qry);
        
        if($run == true)
        {
            ?>
        <script>
            alert('Data Inserted Successfully.');
            window.open('updateform.php?sid=<?php echo $id;?>','_self');
        </script>
       <?php
        }
        




?>