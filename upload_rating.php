<?php
    $conn = mysqli_connect("localhost","root","","travelhowl");
    $crowd = $_REQUEST['Current_Crowd'];
    $sql = "UPDATE crowd_rating SET banaras = '$crowd'";
    $result = $conn->query($sql);
    if($result){
        echo "<script>alert('Rating Uploaded Successfully!')</script>";
        echo "<script>window.location='create-class.php'</script>";
    }
?>