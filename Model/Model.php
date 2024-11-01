<?php

use LDAP\Result;

require_once __DIR__ . '/../DB/Conection.php';
require_once __DIR__ . '/../interface/Modelinterface.php';

abstract class Model extends Conection implements ModelInterface
{
    public function create_data($datas, $table)
    {
        // echo "Datas berhasil dibuat";
        // var_dump($datas);
        $key = array_keys($datas);
        $value = array_values($datas);
        $key = implode(",", $key);
        $value = implode("','", $value);
        $query = "INSERT INTO $table ($key) VALUES ('$value')";
        echo $query;
        $result = mysqli_query($this->db, $query);
        if ($result) {
            return $datas;
        } else {
            return false;
        }
        return $result;
    }

    public function all_data($table)
    {
        $query = "SELECT * FROM $table";
        $result = mysqli_query($this->db, $query);

        return $this->convert_data($result);
    }

    public function convert_data($datas)
    //  ini datas itu paramater doank. bebas mau dinamain apa
    {
        $data = [];
        while ($row = mysqli_fetch_assoc($datas)) {
            $data[] = $row;
        }
        return $data;
    }

    public function find_data($id, $table)
    {
        $query = "SELECT * FROM $table WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function update_data($id, $datas, $table)
    {
        $key = array_keys($datas);
        $value = array_values($datas);
        $query = "UPDATE $table SET ";
        for ($i = 0; $i < count($key); $i++) {
            $query .= $key[$i] . " = '" . $value[$i] . "'";
            if ($i != count($key) - 1) {
                $query .= " , ";
            }
        }
        $query .= " WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function delete_data($id, $table)
    {
        $query = "DELETE FROM $table WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function search_data($keyword, $table)
    {
        $query = "SELECT * FROM $table $keyword";
        $result = mysqli_query($this->db, $query);
        return $this->convert_data($result);
    }

    public function paginate_data($start, $limit, $table)
    {
        $query = "SELECT * FROM $table LIMIT $start, $limit";
        $result = mysqli_query($this->db, $query);
        return  $this->convert_data($result);
    }
}
