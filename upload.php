          <?php
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            // print_r($_FILES);
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            // IF YOU FORGET THAT ONE - YOU MAY GET FIRED
            if (strstr($target_file, '..')) {
                echo "You can't upload to parent directories.";
                $uploadOk = 0;
            }

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            // print_r($check);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                switch ($check['mime']) {
                    case 'image/jpeg':
                    case 'image/gif':
                    case 'image/png':
                    case 'image/mp4':
                        
                        break;
                    default:
                        $uploadOk = 0;
                }
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        ?>