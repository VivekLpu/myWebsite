<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Upload the File: <input type="file" name="myfile">
        <br>
        <input type="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0) {
            print_r($_FILES["myfile"]);
            $file_name = $_FILES["myfile"]["name"]."<br>";
            $file_size = $_FILES["myfile"]["size"]."<br>";
            $file_type = $_FILES["myfile"]["type"]."<br>";
            $file_tempname = $_FILES["myfile"]["tmp_name"]."<br>";
            
            echo"<br>";
            echo "File Name : $file_name"."<br>";
            echo "File Size : $file_size"."<br>";
            echo "File Type : $file_type"."<br>";
            echo "File TempName : $file_tempname"."<br>";

            if(!is_dir("BTech-KN")){
                mkdir("BTech-KN",0755);
            }
            if(move_uploaded_file("$file_tempname","BTech-KN/".$file_name)){
                echo "My file is moved successfully"."<br>";
            }else{
                echo "My file is not moved"."<br>"; 
            }

            if($file_size <= 1*1024*1024){
                echo "File size is supported"."<br>";
            }else{
                echo "File size limit exceeded"."<br>";
            }

            $allowed_file = ["jpg","png","jpeg","gif"];
            //get file extension
            $myfile_extension = strtolower(pathinfo("$file_name", PATHINFO_EXTENSION));
            echo "Extension of my file is .$myfile_extension";

            if(in_array($myfile_extension,$allowed_file)){
                echo "File type is supported";
            }else{
                echo "File type is not supported"."<br>";
            }
        }
    }
    ?>
</body>
</html>
