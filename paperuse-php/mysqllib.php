<?php
class mysqllib{
    var $host;
    var $passwd;
    var $user;
    var $conn;
    var $db;
    function __construct($host_,$passwd_,$db_,$user_){
        $this->host=$host_;
        $this->passwd=$passwd_;
        $this->user=$user_;
        $this->db=$db_;
        $this->conn=new mysqli($this->host,$this->user,$this->passwd,$this->db);
    }
    function insert($table,$list,$params){
        $sql = "INSERT INTO `".$table."` (`".$list."`) VALUES ('".$params."');";
        echo $sql;
        if ($this->conn->query($sql) === TRUE) {
            return 0;
        } else {
            return 1;
        }
    }
    function close(){
        $this->conn->close();
    }
    
}
?>