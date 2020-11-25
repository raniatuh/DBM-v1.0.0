<html>
<head>
</head>
<body>
<p>
    <form name="uploadImage" action="image_up.php" method="post" enctype="multipart/form-data">
    <!--As diafol said, you'll need multipart/form data. It wouldn't work without that attribute-->
        Select the image:<br />
        <input type="file" name="img" />
        <input type="submit" value="Upload" />
    </form>
</p>
</body>
</html>
