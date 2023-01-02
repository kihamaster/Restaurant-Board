<?php
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);
    
    $query = "select * from board3 where idx= '$idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    

?>
<form action="writepost3.php" method="post">
    <table width=800 border="1" cellpadding=10 >
    <tr>
        <th width=100>제목 </th>
        <td> <?=$data['subject']?></td>
       </tr>
    <tr>
        <th width=100>작성자 </th>
        <td> <?=$data['name']?> </td>
       </tr>
    <tr>
        <th width=100>소개 </th>
        <td> <?=nl2br($data['memo'])?>
        </td>
       </tr>
       
       <tr>
            <td colspan="3">    
            <a href="list3.php">목록</a>
            </td>
       </tr>
    </table>
</form>