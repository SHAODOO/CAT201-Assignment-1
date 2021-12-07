<html>
<body>
<?php
$target_dir = "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\upload\ ";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo '<script>alert("Sorry, your file is too large.")</script>';
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($fileType != "pdf") {
    echo '<script>alert("Sorry, only PDF file are allowed.")</script>';
    //echo "Sorry, only PDF file are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.<br>";
    include 'index.php';
// if everything is ok, try to upload file
} else {
    //rename the file to upload.pdf
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\upload\upload.pdf")) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been successfully uploaded and converted. <br>";
        include 'convert.php';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</body>
</html>
