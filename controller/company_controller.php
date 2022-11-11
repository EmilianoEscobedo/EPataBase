<?php

require_once 'model/company.php';

class CompanyController
{
    private $model;
    public function __construct(){
        $this->model = new Company();
    }
    public function indexCompany(){
        require_once 'view/database.php';
    }
    public function showById(){
        $company = new Company();
        if(isset($_REQUEST['id'])){
            $company=$this->model->getById($_REQUEST['id']);
        }
        require_once 'view/company_form.php';
    }
    public function search(){
        $company = new Company();
        $input = $_REQUEST['input'];
        $option = $_REQUEST['option'];
        $response = $company->search($option, $input);
        require_once 'view/show_results.php';
    }
    public function save(){
        $company = new Company();
        $company->id=$_REQUEST['id'];
        $company->name=$_REQUEST['name'];
        $company->image=$_REQUEST['image'];
        $company->range=$_REQUEST['range'];
        $company->price_km=$_REQUEST['price_km'];
        $company->max_weight=$_REQUEST['max_weight'];
        $company->max_width=$_REQUEST['max_width'];
        $company->max_height=$_REQUEST['max_height'];
        $company->comments=$_REQUEST['comments'];
        $company-> id > 0 ? 
            $company->update()
            :
            $company->create();
        header('Location: index.php');
    }
    public function quit(){
        $this->model->delete($_REQUEST['id']);
        header('Location: index.php');
    }
}
