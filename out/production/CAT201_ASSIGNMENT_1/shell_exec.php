<?php
$file = 'HelloWorld.pdf';

//combine java class and file
//$command = "java Main". ' ' .$file;
$command2 = 'java -cp "C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\PDFBox\pdfbox-app-2.0.24.jar;." ReadingText';

//display the output from java program
$output = shell_exec($command2);
echo $output;
?>
