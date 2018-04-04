<?php

namespace App\Mirafox\Model;


class Team extends BaseModel
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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getGames(): int
    {
        return $this->games;
    }

    /**
     * @param int $games
     */
    public function setGames(int $games): void
    {
        $this->games = $games;
    }

    /**
     * @return int
     */
    public function getWin(): int
    {
        return $this->win;
    }

    /**
     * @param int $win
     */
    public function setWin(int $win): void
    {
        $this->win = $win;
    }

    /**
     * @return int
     */
    public function getDraw(): int
    {
        return $this->draw;
    }

    /**
     * @param int $draw
     */
    public function setDraw(int $draw): void
    {
        $this->draw = $draw;
    }

    /**
     * @return int
     */
    public function getDefeat(): int
    {
        return $this->defeat;
    }

    /**
     * @param int $defeat
     */
    public function setDefeat(int $defeat): void
    {
        $this->defeat = $defeat;
    }

    /**
     * @return int
     */
    public function getGoalsScored(): int
    {
        return $this->goalsScored;
    }

    /**
     * @param int $goalsScored
     */
    public function setGoalsScored(int $goalsScored): void
    {
        $this->goalsScored = $goalsScored;
    }

    /**
     * @return int
     */
    public function getGoalsSkipped(): int
    {
        return $this->goalsSkipped;
    }

    /**
     * @param int $goalsSkipped
     */
    public function setGoalsSkipped(int $goalsSkipped): void
    {
        $this->goalsSkipped = $goalsSkipped;
    }
}
