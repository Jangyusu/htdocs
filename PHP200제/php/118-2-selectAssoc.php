<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php/108-2-connectDB.php';

    $sql = "SELECT name, userId FROM myMember";
    $result = $dbConnect->query($sql); //쿼리 송신

    $dataCount = $result->num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
        echo "아이디 : ".$memberInfo['userId'];
        echo "<hr>";
    }
?>