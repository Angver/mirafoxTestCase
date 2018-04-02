<?php
require_once 'autoloader.php';

use App\Teams\Service\TeamsGetterService;

function match($firstTeamId, $secondTeamId)
{
    $teamsGetterService = new TeamsGetterService(require_once 'data.php');

    $firstTeam = $teamsGetterService->getTeamById($firstTeamId);
    $secondTeam = $teamsGetterService->getTeamById($secondTeamId);

    return [];
}

match(1, 2);