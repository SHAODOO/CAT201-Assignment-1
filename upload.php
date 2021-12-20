<?php
//Start the session to record PDF file name
session_start();
?>

<html>
<head>
    <title>Pdf to Txt Converter</title>
</head>

<?php
//Specific the directory where the file is going to be placed
$target_dir = "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\upload\ ";

//Specific the path of the file to be uploaded
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//Set session variable to record PDF file name
$_SESSION["FileName"] = basename($target_file, '.pdf');
$_SESSION["PDF"] = basename($target_file);

//flag
$successUpload = 1;

//Convert all characters to lowercase
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES['fileToUpload']['size'] > 2000000) {
    echo '<script>alert("Sorry, your file is too large.")</script>';
    $successUpload = 0;
}

// Allow certain file formats
if($fileType != "pdf") {
    echo '<script>alert("Sorry, only PDF file are allowed.")</script>';
    $successUpload = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($successUpload == 0) {
    include 'index.php';
// If everything is ok, try to upload file
} else {
    //Rename the file to upload.pdf
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\upload\upload.pdf")) {
        include 'convert.php';
    } else {
        echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        include 'index.php';
    }
}
?>
</html>
