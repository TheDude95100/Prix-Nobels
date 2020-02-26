<?php
require_once "Utils/functions.php";
require_once "Models/Model.php";
require_once "Controllers/Controller.php";
class Controller_home extends Controller{

  public function action_default(){
    $this->action_home();
  }
  public function action_home(){
    $m=Model::getModel();
    $data=["nb_nobels"=>$m->getNbNobelPrizes()];
    $this->render("home",$data);
  }
}
?>
