<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Upload File : 
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" id="myfile">
        <input type="submit" value="Upload" name="upload">
    </form>
    <?php
    print_r($_FILES["myfile"]);
    $file_name = $_FILES["myfile"]["name"];
    $file_size = $_FILES["myfile"]["size"];
    $file_type = $_FILES["myfile"]["type"]."<br>";
    $file_tempname = $_FILES["myfile"]["tmp_name"]."<br>";
    
    $myfile_extension = pathinfo("$file_name",PATHINFO_EXTENSION);
    echo "<br>The extension of my File is ".$myfile_extension;
    $allowed_file_type = ['jpg','png','jpeg','js'];

    if(!is_dir("MyDirectory")){
        mkdir("MyDirectory",0755);
    }
    if(in_array($myfile_extension,$allowed_file_type)){
        if($file_size < 2*1024*1024){
            if(move_uploaded_file("$tmp_filename","MyDirectory/"."$file_name")){
                echo "The file is moved successfully <br>";
            }else{
                echo "The file is not moved <br>";
            }
        }else{
            echo "The file is too large <br>";
        }
    }else{
        echo "Invalid file type<br>";
    }
    ?>
</body>
</html>