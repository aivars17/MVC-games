<?php

class Home extends Controller {

    public function index() {


    if (isset($_SESSION['nickname'])) {
        $data['alert'] = "Welcome back, ". $_SESSION['nickname'];
        $data['logout'] = "/Auth/logout";
        $data['reg'] = "Logout";
        $data['drop'] = "<div class='btn-group' role='group'>
                            <button id='btnGroupDrop1' type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                              Stats
                            </button>
                            <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>
                              <a class='dropdown-item' href='/".CONFIG['site_path']."/stats'>User stats</a>
                              <a class='dropdown-item' href='allstats.php'>All player stats</a>
                              <a class='dropdown-item' href='/".CONFIG['site_path']."/stats/tops'>Top 5</a>
                            </div>
                          </div>";
    } else {
        $data['alert'] = "If you wanna play please login";
        $data['logout'] = "/Auth";
        $data['reg'] = "Login";
        $data['drop'] ='';
    }
        $data['title'] = "Best javascript games";
        $data['header'] = "Best javascript games";
        $data['body'] = "This is the best game!";

        $this->view("main", $data);
    }

    public function userList() {

        $user = $this->model('User');
        $game = $this->model('Game');

        $data['games'] = $game->getAllGames();
        $data['users'] = $user->getAllUsers();

        $data['title'] = "CA Dice Game";
        $data['header'] = "User List";
        $data['body'] = "Here we have a list of our players";

       

        $this->view("main", $data);
    }
    public function pleasReg() {

        $data['title'] = "Best javascript games";
        $data['header'] = "Best javascript games";
        $data['body'] = "This is the best game!";

        $this->view("pleasereg", $data);
    }
}