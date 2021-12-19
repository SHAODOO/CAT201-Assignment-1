<!DOCTYPE html>
<html>
<head>
    <title>PDF to Text Converter</title>
</head>
<body>

<div class="header">
    <h1 class="header layout">PDF to Text Converter</h1>
</div>

<p>Convert your PDF to text file in a matter of seconds!</p>
<div class="container">
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <br><br>Select PDF to upload:<br><br>
        <link href="stylesheet.css" rel="stylesheet">  
        <label for="fileToUpload"></label>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Upload PDF" name="submit" class="button">
    
    </form>
</div>

</body>
</html>