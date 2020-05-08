<?php
    $id = $_GET["id"];
    $pw = $_GET["pw"];
    $s = $_GET["s"];
    $city = $_GET["city"];
    $what = implode("/", $_GET["what"]);
    $content = $_GET["content"];

    echo $id."<br>";
    echo $pw."<br>";
    echo $s."<br>";
    echo $city."<br>";
    echo $what."<br>";
    echo nl2br($content);

    // foreach($what as $value){
    //     $w = $value."/";
    //     echo $w;
    // }

?>