<?php
$command =  'javac -cp ".;C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\pdfbox-app-2.0.24.jar" ReadingText.java';
//compile java program
shell_exec($command);
$command2 = 'java -cp ".;C:\Users\User\OneDrive - Universiti Sains Malaysia\Laptop\CAT201_ASSIGNMENT_1\pdfbox-app-2.0.24.jar" ReadingText';
//run java program
shell_exec($command2);
include 'download.php';
?>
