<?php

class Dice extends Controller {

    public function index() {


    	header("Content-type:application/json");
        
        $game = $this->model('Game');
        $result = $game->getAllGames();

       echo json_encode($result);
    }

    public function myGames() {

    	header("Content-type:application/json");
        
        $game = $this->model('Game');
        $result = $game->getUserGames($_SESSION["nickname"]);

        echo json_encode($result);
        
    }

    public function getTopWinners() {
    	header("Content-type:application/json");
        
        $game = $this->model('Game');
        $result = $game->getTopWinners(3);

        echo json_encode($result);
        
    }
    public function getTopPlayers() {
    	header("Content-type:application/json");
        
        $game = $this->model('Game');
        $result = $game->getTopPlayers();

        echo json_encode($result);
        
    }
    public function play() {

    $alert = '';
     if (isset($_SESSION['nickname'])) {
        $data['alert'] = "Welcome in Dice game, ". $_SESSION['nickname'];
        $data['title'] = "Dice Game";
        $data['header'] = "Welcome to Dice game";
        $this->view("dice/play", $data);
     } else {
        $data['title'] = "Dice Game";
        $data['header'] = "Welcome to Dice game";
        $data['alert'] = "If you wanna play please login";
        $this->view("pleasereg", $data);
     }    	
    }
    public function inToDB() {
    	header("Content-type:application/json");
        
        $game = $this->model('Game');
        $result = $game->inToDB($_POST['inToDB'],'Dice');
        echo json_encode($result);    
    }

    public function topWins() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopWinners(5);

        echo json_encode($result);
    }

    public function topPlayers() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopPlayers(5);

        echo json_encode($result);
    }

    

}