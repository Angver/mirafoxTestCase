<?php

namespace App\Mirafox\Service;


use App\Mirafox\Model\Team;

class TeamsGetterService
{
    /**
     * @var Team[]
     */
    private $teamRepository;

    public function __construct(array $teamsRaw)
    {
        $this->teamRepository = $this->getAllTeams($teamsRaw);
    }

    /**
     * @param array
     *
     * @return Team[] Массив моделей команд
     */
    private function getAllTeams(array $teamsRaw): array
    {
        $teams = [];
        foreach ($teamsRaw as $k => $team) {
            $teams[$k] = new Team([
                'name' => $team['name'],
                'games' => $team['games'],
                'win' => $team['win'],
                'draw' => $team['draw'],
                'defeat' => $team['defeat'],
                'goalsScored' => $team['goals']['scored'],
                'goalsSkipped' => $team['goals']['skiped'],
            ]);
        }

        return $teams;
    }

    /**
     * @param int $teamId
     *
     * @return Team|null
     */
    public function getTeamById(int $teamId): Team
    {
        if (isset($this->teamRepository[$teamId])) {
            return $this->teamRepository[$teamId];
        }

        return null;
    }

    public function getAverageGoalsScoredPerGame(): float
    {
        $totalTeamsGoalsScored = 0;
        $totalTeamsGames = 0;
        /**
         * @var Team $team
         */
        foreach ($this->teamRepository as $team)
        {
            $totalTeamsGoalsScored += $team->getGoalsScored();
            $totalTeamsGames += $team->getGames();
        }

        return round($totalTeamsGoalsScored / $totalTeamsGames, 2);
    }
}
