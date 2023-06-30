<?php

if(isset($_POST['submit'])){


    print_r($_FILES['file_upload']);
}

$upload_errors=array(
        UPLOAD_ERR_OK => "THERE IS NO ERROR",
        UPLOAD_ERR_INI_SIZE=> "EXCEED THE SIZE",
        UPLOAD_ERR_FORM_SIZE=> "EXCEED THE MAX_FILE_SIZE",
        UPLOAD_ERR_PARTIAL=>"PARTIALLY UPLOADED",
        UPLOAD_ERR_NO_FILE=>"NO FILE UPLOADED",
        UPLOAD_ERR_NO_TMP_DIR=>"MISSING TEMPRORAY FOLDER",
        UPLOAD_ERR_CANT_WRITE=>"FAILD TO WRITE FILE TO DISK",
        UPLOAD_ERR_EXTENSION=>"A PHP EXTENSION STOPPED THE FILE UPLOAD"




);

$the_error=$_FILES['file_upload']['error'];

$the_message= $upload_errors[$the_error];


?>

<!DOCTYPE html>
<html>

<head>



</head>
<body>

</body>
<form action ="upload.php" enctype="multipart/form-data" method="post">
  <?php if(!empty($upload_errors)){

        echo $the_message."<br>";

   }
?>
<input type ="file" name="file_upload"><br>

    <input type="submit"name="submit">
</form>



</html>

