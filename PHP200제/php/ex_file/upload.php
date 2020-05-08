<?
    $root = $_SERVER['DOCUMENT_ROOT'];
    include_once $root."ex_file/db.php";
?>

<form action="upload_ok.php"  
   method="post" 
   enctype="multipart/form-data">
   
    <input type="file" name="upload">
    <input type="submit" value="업로드">
    
</form>



