
                        <?php
                        require("../../database/dbhandler.php");
                        include("../../config/path.php");
                        $admin = queryhandler("Select * from admin LIMIT 1","get");
                            if(isset($_POST['change-avatar'])){
                                $file = $_FILES['file-avatar'];
                                // print_r($file);
                                $fileName = $_FILES['file-avatar']['name'];
                                $fileTmpname = $_FILES['file-avatar']['tmp_name'];
                                $fileSize = $_FILES['file-avatar']['size'];
                                $fileError = $_FILES['file-avatar']['error'];
                                $fileType = $_FILES['file-avatar']['type'];

                                $fileExt = explode('.',$fileName);
                                $fileActualExt = strtolower(end($fileExt));

                                $allowed = array('jpg','jpeg','png','pdf','jfif');

                                if(in_array($fileActualExt,$allowed)){
                                    if($fileError === 0){
                                        if($fileSize <100000000){
                                            $fileNamenew = uniqid('',true).".".$fileActualExt;
                                            $fileDestination = '../../../img/avatar/'.$fileNamenew;
                                            move_uploaded_file($fileTmpname,$fileDestination);
                                            if(queryhandler("update admin set avatar=? where id_a=?","set",[$fileNamenew,$admin[0]['id_a']])){
                                                header("location: ".constant("URL")."/server/page_item/profile.php");
                                            }
                                        }else{
                                            echo "your file is too big";
                                        }
                                    }else{
                                        echo "there was an error uploading your file";
                                    }
                                }else{
                                    echo "you cannot upload files of this type";
                                }       
                            }