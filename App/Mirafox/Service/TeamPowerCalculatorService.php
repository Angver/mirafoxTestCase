<?php

namespace App\Mirafox\Service;

use App\Mirafox\Model\Team;

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
     * @param float $averageGoals
     *
     * @return float
     */
    public function getAttackPower(float $averageGoals): float
    {
        return round($this->team->getGoalsScored() / $this->team->getGames() / $averageGoals, 2);
    }

    /**
     * @param float $averageGoals
     *
     * @return float
     */
    public function getDefencePower(float $averageGoals): float
    {
        return round($this->team->getGoalsSkipped() / $this->team->getGames() / $averageGoals, 2);
    }
}
