<?php

require_once 'core/crud.php';

class Company extends Crud
{
    private $id;
    private $name;
    private $image;
    private $range;
    private $price_km;
    private $max_weight;
    private $max_width;
    private $max_height;
    private $comments;
    private $pdo;
    const TABLE='company';
 
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->pdo=parent::connection();

    }


    public function __set($name, $value)
    {
        $this->$name=$value;
    }
    public function __get($name)
    {
       return $this->$name;
    }

    public function create()
    {
        try
        {   
            $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE."( `name`, `image`, `range`, `price_km`, `max_weight`, `max_width`, `max_height`, `comments`) VALUES (?,?,?,?,?,?,?,?)");
            $stm->execute(array(ucfirst($this->name), $this->image, ucfirst($this->range), $this-> price_km, $this->max_weight, $this->max_width, $this->max_height, $this->comments));
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
    }
    public function update()
    {
        try
        {
            $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET `name`=?, `image`=?, `range`=?, `price_km`=?, `max_weight`=?, `max_width`=?, `max_height`=?, `comments`=? WHERE id=?");
            $stm->execute(array(ucfirst($this->name), $this->image, ucfirst($this->range), $this-> price_km, $this->max_weight, $this->max_width, $this->max_height, $this->comments, $this->id));
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function search($option, $input)
    {
        try
        {
            $option == 'max_weight' || $option == 'max_height' || $option == 'max_width' ? $op='>' : $op = "=";
            ucfirst($input);
            $stm=$this->pdo->prepare("SELECT * FROM ".self::TABLE." WHERE `$option`$op? ");
            $stm->execute(array($input));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}






?>