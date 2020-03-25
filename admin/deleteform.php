<?php

include('../dbcon.php');
        
        $id=$_request['sid'];
        
        $qry="DELETE FROM `student` WHERE `id`='$id';"; 
        
        $run = myqli_query($con,$qry);
        
        if($run == true)
        {
            ?>
        <script>
            alert('Data Deleted Successfully.');
            window.open('deletestudent.php','_self');
        </script>
       <?php
        }
        
?>