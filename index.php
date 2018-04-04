<?php
require_once 'autoloader.php';

use App\Mirafox\Service\TeamPowerCalculatorService;
use App\Mirafox\Service\TeamsGetterService;

function match(int $firstTeamId, int $secondTeamId): array
{
    $teamsGetterService = new TeamsGetterService(require_once 'data.php');

    $averageGoals = $teamsGetterService->getAverageGoalsScoredPerGame();
    $firstTeamPowerCalculatorService = new TeamPowerCalculatorService(
        $teamsGetterService->getTeamById($firstTeamId),
        $averageGoals
    );
    $firsTeamPower = $firstTeamPowerCalculatorService->getTeamPower();
    $secondTeamPowerCalculatorService = new TeamPowerCalculatorService(
        $teamsGetterService->getTeamById($secondTeamId),
        $averageGoals
    );
    $secondTeamPower = $secondTeamPowerCalculatorService->getTeamPower();

    return [
        round($firsTeamPower->getAttackPower() * $secondTeamPower->getDefencePower() * $averageGoals),
        round($secondTeamPower->getAttackPower() * $firsTeamPower->getDefencePower() * $averageGoals),
    ];
}
