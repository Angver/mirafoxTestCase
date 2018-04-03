<?php

namespace App\TeamsCalculator\Service;

use App\Teams\Model\Team;

class TeamPowerCalculatorService
{
    /**
     * @var Team
     */
    private $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    /**
     * @return float
     */
    public function getAttackPower()
    {
        return round($this->team->getGoalsScored() / $this->team->getGames(), 2);
    }

    /**
     * @return float
     */
    public function getDefencePower()
    {
        return round($this->team->getGoalsSkipped() / $this->team->getGames(), 2);
    }
}
