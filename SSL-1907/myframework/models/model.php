<?php

class model{

    public function __construct($parent){
        $this->parent = $parent;
    }

    // CREATE
    // name is passed through $params via addForm

    // register new user logic
    // INSERT INTO  `users`.`accounts` (`id` , `email` , `password` , `bio`) VALUES ('1',  'mike@aol.com',  'password',  'Hi I''m Mike.');
    public function addItem($params){
        $sql = "insert into fruit_table (name) values (:name)";
        $sth = $this->parent->db->prepare($sql);
        // Key = value pair
        $sth->execute(array(":name"=>$params["name"]));
    }

    // READ
    // Plural get
    public function getItems($sql){

        // PDO statement needs 3 procedures
        // $sql = "select * from fruit_table";

        $sth = $this->parent->db->prepare($sql);

        // For conditions
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    // Singular get
    public function getItem($sql){
        // $sql = "select * from fruit_table where id = :id";
        $sth = $this->parent->db->prepare($sql);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    // UPDATE
    public function updateItem($params){
        $sql = "update fruit_table set name = :name where id = :id";
        $sth = $this->parent->db->prepare($sql);
        $sth->execute(array(":name"=>$params["name"], ":id"=>$params["id"]));
    }

    // DESTROY
    public function deleteItem($id){
        // echo $params;
        $sql = "delete from fruit_table where id = :id";
        $sth = $this->parent->db->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->execute();
    }
}

?>