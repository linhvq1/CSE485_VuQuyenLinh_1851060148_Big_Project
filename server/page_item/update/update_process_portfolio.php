
                        <?php
                        require("../../database/dbhandler.php");
                        include("../../config/path.php");
                        if (isset($_REQUEST['port-id'])) {
                            $getID = $_REQUEST['port-id'];
                            $port = queryhandler("select * from portfolio where id_p= ?", "get", [$getID]);
                        
                            if (isset($_POST['change-port'])) {
                                $file = $_FILES['file-port'];
                                // print_r($file);
                                $fileName = $_FILES['file-port']['name'];
                                $fileTmpname = $_FILES['file-port']['tmp_name'];
                                $fileSize = $_FILES['file-port']['size'];
                                $fileError = $_FILES['file-port']['error'];
                                $fileType = $_FILES['file-port']['type'];

                                $fileExt = explode('.', $fileName);
                                $fileActualExt = strtolower(end($fileExt));

                                $allowed = array('jpg','jpeg','png','pdf','jfif');

                                if (in_array($fileActualExt, $allowed)) {
                                    if ($fileError === 0) {
                                        if ($fileSize <100000000) {
                                            $fileNamenew = uniqid('', true).".".$fileActualExt;
                                            $fileDestination = '../../../img/portfolio/'.$fileNamenew;
                                            move_uploaded_file($fileTmpname, $fileDestination);
                                            if (queryhandler("update portfolio set image=? where id_p =?", "set", [$fileNamenew,$port[0]['id_p']])) {
                                                header("location: ".constant("URL")."/server/page_item/edit_portfolio.php?id=".$port[0]['id_p']);
                                            }
                                        } else {
                                            echo "your file is too big";
                                        }
                                    } else {
                                        echo "there was an error uploading your file";
                                    }
                                } else {
                                    echo "you cannot upload files of this type";
                                }
                            }
                        }