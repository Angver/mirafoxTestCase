<?php

namespace App\Teams\Service;


use App\Teams\Model\Team;

class TeamsGetterService
{
    /**
     * @var Team[]
     */
    private $teamRepository;

    public function __construct($teamsRaw)
    {
        $this->teamRepository = $this->getAllTeams($teamsRaw);
    }

    /**
     * @param array
     *
     * @return Team[] Массив моделей команд
     */
    public function getAllTeams($teamsRaw)
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
   public function getTeamById($teamId)
   {
       if (isset($this->teamRepository[$teamId])) {
           return $this->teamRepository[$teamId];
       }

       return null;
   }
}
