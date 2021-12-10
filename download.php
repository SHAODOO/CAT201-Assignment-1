<?php
// Retrieve session variables that were set on previous page
$convertedFileName = "Converted_" . $_SESSION["uploadFileName"] . ".txt";

//Display the button to let user download the converted text file
echo '<a href="download/text.txt" download= "' . $convertedFileName . '" > <button>Click here to download</button> </a>';

//Delete .pdf file
$path = "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\upload\upload.pdf";
unlink($path);

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();
?>