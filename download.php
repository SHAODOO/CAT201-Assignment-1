<?php
echo '<a href="download/text.txt" download> <button>Click here to download</button> </a>';
//Delete .pdf file
$path = "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\upload\upload.pdf";
unlink($path);
?>