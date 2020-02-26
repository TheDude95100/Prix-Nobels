<?php
require_once "Utils/functions.php";
require_once "Models/Model.php";
require_once "Controllers/Controller.php";
class Controller_list extends Controller{

  public function action_default(){
    $this->action_last();
  }
  public function action_last(){
    $m=Model::getModel();
    $data=["res"=>$m->getLast()];
    $this->render("last",$data);
  }
  public function action_info(){
    $e= Model::getModel();
    if (isset($_GET["id"]) && 0 < $_GET["id"]){
      $info = $e->getNobelPrizeInformations($_GET['id']);
      if ($info == false)
      $this->action_error();
      else{
      $data = [
        "infoNobel"=> $info
      ];
      $this->render("info",$data);
    }
    } else {
      $this->action_error();
    }
  }
}
?>
