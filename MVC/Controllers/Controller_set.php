<?php
require_once "Utils/functions.php";
require_once "Models/Model.php";
require_once "Controllers/Controller.php";
class Controller_set extends Controller{
  public function action_default(){
    $this->action_form_add();
  }
  public function action_form_add(){
    $this->render('form_add');
  }
  public function action_add(){
    $e=Model::getModel();
    $marqueurs = ['year', 'category', 'name', 'birthdate','birthplace', 'county', 'motivation'];
    if (isset($_POST['name']) && isset($_POST['category']) && isset($_POST['year']) && estUnEntierPositif($_POST['year']) && estPasVide($_POST['name']) && estPasVide($_POST['category'])){
      foreach($marqueurs as $k){
        if (!(isset($_POST[$k]))){
          $_POST[$k]=null;
        }
      }
      $e->addNobelPrize($_POST);
      $message = [
        "title" => "Message",
        "message" => "Nobel ajouté avec succès!"
      ];
      $this->render("message",$message);
    }else{
    $message = [
      "title" => "Erreur",
      "message" => "Probleme lors de l'ajout, une donnée n'existe pas!"
];
  $this->render('message',$message);
  }
}
  public function action_remove(){
    $e=Model::getModel();
    if (isset($_GET['id'])){
      if($e->isInDataBase($_GET['id'])){
        $e->removeNobelPrize($_GET['id']);
        $message = [
        "title" => "Message",
        "message" => "Suppression effectuée avec succès!"
      ];
        $this->render('message',$message);
    }else{
      $message = [
      "title" => "Erreur",
      "message" => "Id non enregistré dans la base de donnée"
    ];
      $this->render('message',$message);
    }
  }else{
    $message = [
    "title" => "Erreur",
    "message" => "Aucune id reconnue dans l'URl"
  ];
    $this->render('message',$message);
  }
}
public function action_form_update(){
  $e= Model::getModel();
  if (isset($_GET["id"]) && 0 < $_GET["id"]){
    $info = $e->getNobelPrizeInformations($_GET['id']);
    if ($info == false)
    $this->action_error();
    else{
    $data = [
      "infoNobel"=> $info
    ];
    $this->render("form_update",$data);
  }
  } else {
    $this->action_error();
  }
}

public function action_update(){
  $e=Model::getModel();
  $marqueurs = ['id','year', 'category', 'name', 'birthdate','birthplace', 'county', 'motivation'];
  foreach ($marqueurs as $v){
  $marqueurs[$v]=$_POST[$v];
  }
  $e->updateNobelPrize($marqueurs);
  $message = [
  "title" => "Mise a jour",
  "message" => "Prix Nobel mis a jour avec succès"
];
  $this->render('message',$message);
    }
}
