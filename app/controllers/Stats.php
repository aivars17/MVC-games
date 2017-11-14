<?php

class Stats extends Controller {

    public function index() {

        if (isset($_SESSION['nickname'])) {
            $game = $this->model('Game');
            $data['title'] = "CA Dice Game";
            $data['header'] = "User statistics";
            $data['body'] = "This is my all game statistics";
            $data['my_stats'] = $game->getUserGames($_SESSION['nickname']);
            $this->view("stats/index", $data);
        }else {
            $data['title'] = "CA Dice Game";
            $data['header'] = "User statistics";
            $data['alert'] = "If you wanna see statistics please login";
            $this->view("pleasereg", $data);
        }
        
    }

    public function tops() {
        if (isset($_SESSION['nickname'])) {
        $game = $this->model('Game');
        $data['title'] = "CA Dice Game";
        $data['header'] = "User statistics";
        $data['body'] = "Thi is my all game statistics";
        $data['my_stats'] = $game->getTopWinners(5);
        $this->view("stats/tops", $data);
        }else {
            $data['title'] = "CA Dice Game";
            $data['header'] = "Users statistics";
            $data['alert'] = "If you wanna see statistics please login";
            $this->view("pleasereg", $data);
        }
    }


	  


}