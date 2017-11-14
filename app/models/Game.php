<?php


class Game  {




    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    public function getUserGames(string $string): array
    {
        return $this->db->select("SELECT * FROM stats WHERE nickname = :nickname", ["nickname" => $string]);

    
    }
    public function getTopWinners(int $count): array
    {

        return $this->db->select("SELECT * FROM stats ORDER BY win DESC LIMIT $count");

        

    }

    public function getTopPlayers(): array
    {

        return $this->db->select("SELECT nickname, count(*) as games from stats Group by nickname order by games desc ");
    }
    public function inToDB($win,$game)
    {
        return $this->db->insert("INSERT INTO stats (nickname, win, game, ip, last_play) VALUES (:nickname, :win, :game, :ip, :last_play)", ['nickname' => $_SESSION['nickname'], 'win' => $win, 'game' => $game, 'ip' => $_SERVER['SERVER_ADDR'], 'last_play' => date("Y-m-d H:i:s")]);

        
    }

    
}