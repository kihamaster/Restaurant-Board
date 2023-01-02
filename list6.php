<?php
    include "lib.php";

?>

<table width=800 border="1">
    <tr>
        <th width=40 >No </th>
        <th>제목 </th>
        <th width=90>작성자 </th>
        <th>작성시간 </th>
    </tr>
<?php
    
    $query = "select * from board6 order by idx desc";
    $result = mysqli_query($connect, $query);

    while($data = mysqli_fetch_array($result)){
?>
    <tr>
        <td> <?=$data['idx']?> </td>
        <td> <a href="view6.php?idx=<?=$data['idx']?>"><?=$data['subject']?></a> </td>
        <td> <?=$data['name']?> </td>
        <td> <?=$data['regdate']?> </td>

<?php } ?>
</table>

<a href="write6.php">글쓰기</a>