<?php
include "dbcon.php";

 $sname=$_POST['sname'];
 $email=$_POST['email'];
 $mno=$_POST['mno'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $collage=$_POST['collage'];
 $qua=$_POST['qualification'];
 $branch=$_POST['branch'];
 $sem=$_POST['sem'];
 $Icourse=$_POST['Icourse'];

$q ="INSERT INTO reg (sname,email,mno,address,gender,collage,qualification,branch,sem,Icourse) VALUES ('$sname','$email','$mno','$address','$gender','$collage','$qua','$branch','$sem','$Icourse')";

$query =mysqli_query($con, $q);

    if($query){
        ?>
        <script>
            alert("data inserted properly")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted")
        </script>
        <?php
    }







?>