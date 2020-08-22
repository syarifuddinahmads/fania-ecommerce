<?php
include 'config/Database.php';
class Models{

    public function __construct()
    {
        new Database();
    }

    public function getData($tableName,$id=null){
        $sql = $id == null ? mysqli_query("select * from '$tableName'"):mysqli_query("select * from $tableName where id='$id'");
        while ($row = mysqli_fetch_array($sql)){
            $data[] = $row;
        }

        return $data;
    }

    public function deleteData($tableName,$id=null){
        mysqli_query("delete * from '$tableName' where id='$id'");
    }

    public function insertData($tableName,$data=array()){
        $values = implode(",", $data);
        mysqli_query("insert into '$tableName' values('',$values)");
    }


}