<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit"><br>
upload:
<input type="file" name="fileToUpload" id="fileToUpload">
 
    
</body>
</html>


<?php 
if(isset($_FILES['fileToUpload']))
 { 
echo "<pre>"; 
print_r($_FILES); 
echo "</pre>";

$file_name = $_FILES['fileToUpload']['name']; 
$file_size = $_FILES['fileToUpload']['size']; 
$file_tmp =  $_FILES['fileToUpload'] ['tmp_name']; 
$file_type = $_FILES['fileToUpload']['type'];

move_uploaded_file($file_tmp,"rishabh".$file_name);

}
?>