<?php
    require("dbconnect.php");

    function queryhandler( $query, $option , $data = [] ){
        global $conn;
        $stmt = $conn->prepare($query); // khoi tao 1 statement
        if(!$stmt){
            echo $conn->error;
            return; // neu cau truy van bi loi thi bao loi, out
        }
        if(count($data)>0){ // kiem tra neu nhu co parameter thi tien hanh kiem tra kieu
            $datatype = ""; //tao 1 bien string: null de chuan bi gan kieu
            foreach($data as $d){
                if(is_int($d)){ // kiem tra xem co phai la kieu int ko
                    $datatype = $datatype.'i'; // neu la int thi noi them vao datatype ki tu "i"
                }else if(is_double($d)){
                    $datatype = $datatype.'d';
                }else if(is_string($d)){
                    $datatype = $datatype.'s';
                }//}else{
                //     $datatype = $datatype.'s';
                // }
            }
            $getData = array_values($data);
            // hanm array_values: lay ra du lieu cua mang sau do xep vao 1 mag chi so
            $stmt->bind_param($datatype, ...$getData);
            // ham bind_param chuan bi parameter de day len database match voi so luong pram
        }
        $stmt->execute(); // chay lenh sql
        return($option =="set") ? $stmt : $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }