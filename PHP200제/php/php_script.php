<script type="text/javascript">
    function run() {
        alert("hello world");
    }

    <?="run();"?>
</script>


<?php
    $str="here!";
    function getfile() {
        global $str;
        return $str;
    }
?>


<script language="javascript">
    function getfile() {
        var aa = document.getElementById("aa");
        aa.innerHTML = "<?=$str();?>";
    }
    echo "<script>getfile();</script>"
</script>

<div id="aa"></div>
<input type="button" value="click me" onclick="getfile()">