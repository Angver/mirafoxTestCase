<?php

namespace App\Teams\Model;


class Team
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $games;

    /**
     * @var int
     */
    private $win;

    /**
     * @var int
     */
    private $draw;

    /**
     * @var int
     */
    private $defeat;

    /**
     * @var int
     */
    private $goalsScored;

    /**
     * @var int
     */
    private $goalsSkipped;

    public function __construct($rawModel = [])
    {
        if (!empty($rawModel) && (is_array($rawModel) || $rawModel instanceof \Traversable)) {
            foreach ($rawModel as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @param int $games
     */
    public function setGames($games)
    {
        $this->games = $games;
    }

    /**
     * @return int
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * @param int $win
     */
    public function setWin($win)
    {
        $this->win = $win;
    }

    /**
     * @return int
     */
    public function getDraw()
    {
        return $this->draw;
    }

    /**
     * @param int $draw
     */
    public function setDraw($draw)
    {
        $this->draw = $draw;
    }

    /**
     * @return int
     */
    public function getDefeat()
    {
        return $this->defeat;
    }

    /**
     * @param int $defeat
     */
    public function setDefeat($defeat)
    {
        $this->defeat = $defeat;
    }

    /**
     * @return int
     */
    public function getGoalsScored()
    {
        return $this->goalsScored;
    }

    /**
     * @param int $goalsScored
     */
    public function setGoalsScored($goalsScored)
    {
        $this->goalsScored = $goalsScored;
    }

    /**
     * @return int
     */
    public function getGoalsSkipped()
    {
        return $this->goalsSkipped;
    }

    /**
     * @param int $goalsSkipped
     */
    public function setGoalsSkipped($goalsSkipped)
    {
        $this->goalsSkipped = $goalsSkipped;
    }
}
