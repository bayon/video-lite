<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
/*
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
 * */
 /*
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
*/
/*
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/

// Allow certain file formats
/*
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
        echo('
            <!DOCTYPE html>
                <html>
                    <head>
                        <meta charset="utf-8">
                         
                         
                 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">   
                <style>
                 @media (min-width: 0px) and (max-width: 768px) { 
                 
                 }
                </style>

                    </head>
                    <body>
                    <h1>Video-Lite</h1>
            ');
        
            $servername = $_SERVER["SERVER_NAME"];

          // 
          echo("'http://" . $servername.":8888/videoLite/uploads/".basename( $_FILES["fileToUpload"]["name"])."'");
          echo("</br></br>
            <video controls='controls' width='200' height='150' name='Video Name' src='http://" . $servername.":8888/uploads/".basename( $_FILES["fileToUpload"]["name"])."'></video>
            <a onclick=redir()>BACK</a>
            <script>
            function redir(){
                window.location.assign('http://" . $servername.":8888/redirector.php');
            }

            </script>
            ");
          echo('
            </body>
            </html>
            ');

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>