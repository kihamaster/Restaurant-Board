<?php
    include "lib.php";

    $name = $_POST['name'];
   
    $subject = $_POST['subject'];
    $memo = $_POST['memo'];

    $name = mysqli_real_escape_string($connect, $name);
    $subject = mysqli_real_escape_string($connect, $subject);
    $memo = mysqli_real_escape_string($connect, $memo);
    
    $regdate = date("Y-m-d H:i:s");
     
    $query = "insert into board6(name, subject, memo, regdate)
        values('$name','$subject', '$memo', '$regdate') ";

    mysqli_query($connect, $query);

?>
<script>
    location.href='list6.php';
</script>
