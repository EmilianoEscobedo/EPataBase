<?php

require_once 'core/crud.php';

class User extends Crud
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $name;
    private $lastname;
    private $adress;
    private $pdo;
    const TABLE='user';
 
    public function __construct(){
        parent::__construct(self::TABLE);
        $this->pdo=parent::connection();

    }

    public function __set($name, $value){
        $this->$name=$value;
    }
    public function __get($name){
       return $this->$name;
    }

    public function create(){
        try{   
            $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE."(username, password, email, name, lastname, adress) VALUES (?,?,?,?,?,?)");
            $stm->execute(array($this->username, $this->password, $this->email, $this-> name, $this->lastname, $this->adress));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }
    public function update(){
        try{
            $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET email=?, name=?, lastname=?, adress=? WHERE id=?");
            $stm->execute(array($this->email, $this->name, $this->lastname, $this-> adress, $this->id));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function search(){
        try{
            $stm=$this->pdo->prepare('SELECT * FROM '.self::TABLE." WHERE username=? and password=? ");
            $stm->execute(array($this->username, $this->password));
            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
