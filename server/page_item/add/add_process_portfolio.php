
                        <?php
                        session_start();
                        require("../../database/dbhandler.php");
                        include("../../config/path.php");
                        if(!isset($_SESSION["login"])){
                            header("location: ".constant("URL")."/server/");
                        }
                            if (isset($_POST['change-port'])) {
                               
                                $gettype =$_REQUEST['type-port'];//echo $gettype;
                                // $port = queryhandler("select * from portfolio where id_p= ?", "get", [$getID]);
                                $type = queryhandler("select * from type_portfolio where name_t=?","get",[$gettype]); //echo "ma type".$type[0]['id_t'];
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
                                            $fileNamenew = uniqid('', true).".".$fileActualExt; echo "link anh".$fileNamenew;
                                            $fileDestination = '../../../img/portfolio/'.$fileNamenew;
                                            move_uploaded_file($fileTmpname, $fileDestination);
                                            if (queryhandler("insert into portfolio(id_t,image) values(?,?) ", "set", [$type[0]['id_t'],$fileNamenew])) {
                                                $id_pf = queryhandler("Select id_p from portfolio where image = ?","get",[$fileNamenew]);
                                                $_SESSION['port'] = $id_pf[0]['id_p']; //echo $_SESSION['port'];
                                                header("location: ".constant("URL")."/server/page_item/add_portfolio.php");
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
                        