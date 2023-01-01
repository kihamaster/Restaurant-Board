<?php
    include "lib.php";

    $idx = $_GET['idx'];
    
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "select * from board2 where idx='$idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);
    
    
?>

<form action="writepost2.php" method="post">
    <input type="hidden" name="idx" value="<?$idx?>">
    <table width=800 border="1" cellpadding=10 >
    <tr>
        <th>작성자 </th>
        <td><input type="text" name="name" value="<?=$data['name']?>"> </td>
       </tr>
    <tr>
        <th>제목 </th>
        <td><input type="text" name="subject" style="width:100%;" value="<?=$data['subject']?>"> </td>
       </tr>
    <tr>
        <th>소개 </th>
        <td><textarea name="memo" style="width:100%; height: 250px;"><?=$data['memo']?></textarea> 
        </td>
       </tr>
       
       <tr>
        
            <td colspan="3">
                <div style="text-align:center; ">
                    <input type="submit" value="제출">
            </td>
       </tr>
    </table>
</form>
