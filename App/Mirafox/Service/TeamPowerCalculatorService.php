<?php

namespace App\Mirafox\Service;

use App\Mirafox\Model\Team;
use App\Mirafox\Model\TeamPower;

class TeamPowerCalculatorService
{
    /**
     * @var Team
     */
    private $team;

    /**
     * @var float
     */
    private $averageGoals;

    public function __construct(Team $team, float $averageGoals)
    {
        $this->team = $team;
        $this->averageGoals = $averageGoals;
    }

    /**
     * @return float
     */
    private function getAttackPower(): float
    {
        return round($this->team->getGoalsScored() / $this->team->getGames() / $this->averageGoals, 2);
    }

    /**
     * @return float
     */
    private function getDefencePower(): float
    {
        return round($this->team->getGoalsSkipped() / $this->team->getGames() / $this->averageGoals, 2);
    }

    public function getTeamPower(): TeamPower
    {
        return new TeamPower([
            'attackPower' => $this->getAttackPower(),
            'defencePower' => $this->getDefencePower(),
        ]);
    }
}
