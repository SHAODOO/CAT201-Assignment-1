<html>
<head>
    <title>Pdf to Txt Converter</title>
</head>

<?php
// Retrieve session variables that were set on previous page
$TxtFileName = "Converted" . $_SESSION["FileName"] . ".txt";
$PdfFileName = $_SESSION["PDF"];

//Display the button to let user download the converted text file
//echo '<a href="download/text.txt" download= "' . $convertedFileName . '" > <button>Click here to download</button> </a>';

//Delete .pdf file
$path = "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\upload\upload.pdf";
unlink($path);

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();
?>

<body>
    <!--Message to user that pdf has succesfully uploaded and converted-->
    <p><?php echo $PdfFileName ?> has been successfully uploaded and converted. </p>

    <!--Display the button to let user download the converted text file-->
    <a href="download/text.txt" download= "<?php echo $TxtFileName ?>" > <button>Click here to download</button> </a>
</body>
</html>
