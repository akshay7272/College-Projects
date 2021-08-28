<?php

class Connect
{

    public $conn;

    function __construct()
    {
        $serverName = "localhost";
        $username = "root";
        $password = "";
        $dbName = "pg_db";

        // Create connection
        $this->conn = new mysqli($serverName, $username, $password, $dbName);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function select($tableName, $where = NULL)
    {
        $sql = "SELECT * FROM ".$tableName;
        
        if (isset($where) && !empty($where)) {
            $sql .= " where";
            foreach ($where as $key=>$value) {
                $sql .= " ".$key." = '". $value. "' and";
            }
        }
        $sql = rtrim($sql, ' and');
        $result = $this->conn->query($sql);
       
        if ($result->num_rows > 0) {
               return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return NULL;
        }
    }
    
    function insert($tableName, $data)
    {
        $keys = null;
        $values = null;
        foreach ($data as $key=>$value){
            $keys .= $key.",";
            $values .= "'".$value."',";
        }
        $keys = rtrim($keys,",");
        $values = rtrim($values,",");
        $sql = "Insert into ".$tableName." (".$keys.") values (".$values.")"; 
        if ($this->conn->query($sql) === TRUE) {
            return "Record Inserted Sucessfully";
        } else {
            return $this->conn->error;
        }
        
    }
    
    function update($tableName, $data, $condition)
    {
        $update = null;
        foreach ($data as $key=>$value){
            $update .= $key."='".$value."',";
        }
        $update = rtrim($update,",");
        $sql = "Update ".$tableName." set ".$update." where ".$condition;
        if ($this->conn->query($sql) === TRUE) {
            return "Record Updated Sucessfully";
        } else {
            return $this->conn->error;
        }
        
    }
    
    function delete($tableName, $id)
    {
        $sql = "DELETE FROM ".$tableName." WHERE id=".$id;
        
        if ($this->conn->query($sql) === TRUE) {
            return "Record deleted successfully";
        } else {
            return "Error deleting record: " . $this->conn->error;
        }
    }
}