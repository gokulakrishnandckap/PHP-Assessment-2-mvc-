<?php

require_once 'model/usermodel.php';

class UserController
    {

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function view() 
    {

        require "view/create.php";
 

      

    }
    public function showing() 
    {

        
       $alldbnames =  $this->userModel->showing();
        require "view/create.php";

      

    }

    public function views() 
    {

        require "view/create.php";
        // header("location:/");
        // var_dump("here");

      

    }
    public function create() 
    {
        // var_dump($_POST);

        $this->userModel->create($_POST);


    }

    public function insertcolumns() 
    {
       $this->userModel->insertcolumns($_POST);
    // var_dump($_POST);


    //     require "view/views.php";
 
    }

    public function edit($id) {
       
    //    $singledata = $this->userModel->edit($id);

    //    require "view/edit.php";


    }

    public function delete($id) {

        // $this->userModel->delete($id);
        

    }

    public function update($id) {

    //    $user = $this->userModel->update($id,$_POST,$_FILES);



    }


}
