<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="myfile">Upload the File</label>
        <input type="file" name="myfile" id="myfile">
        <input type="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == 0) {

            $file_name = $_FILES["myfile"]["name"];
            $file_size = $_FILES["myfile"]["size"];
            $file_type = $_FILES["myfile"]["type"];
            $file_temp = $_FILES["myfile"]["tmp_name"]; // Corrected typo: 'temp' to 'tmp_name'

            echo "File Name: " . $file_name . "<br>";
            echo "File Size: " . $file_size . "<br>";
            echo "File Type: " . $file_type . "<br>";
            echo "Temporary File Path: " . $file_temp . "<br>";

            // Set a directory to upload the file to
            $uploadDirectory = "uploads/";

            // Ensure the directory exists
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0755);
            }

            // Set the target file path
            $targetFilePath = $uploadDirectory . basename($file_name);

            // Allow only certain types (for example, only images)
            $allowedFileTypes = array("jpg", "jpeg", "png", "gif");
            $fileExtension = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            // Check if the file type is allowed
            if (in_array($fileExtension, $allowedFileTypes)) {
                // Check file size (limit to 5MB) 5*1024*1024
                if ($file_size < 5000000) {
                    if (move_uploaded_file($file_temp, $targetFilePath)) {
                        echo "The File " . basename($file_name) . " has been uploaded successfully" . "<br>";
                    }else {
                        echo "The file size limit exceeded" . "<br>";
                    }
                }
            } 
        }
    }
    ?>
</body>
</html>
