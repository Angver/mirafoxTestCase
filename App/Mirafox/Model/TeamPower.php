<?php

namespace App\Mirafox\Model;


class TeamPower extends BaseModel
{
    /**
     * @var float
     */
    private $attackPower;

    /**
     * @var float
     */
    private $defencePower;

    /**
     * @return float
     */
    public function getAttackPower(): float
    {
        return $this->attackPower;
    }

    /**
     * @param float $attackPower
     */
    public function setAttackPower(float $attackPower): void
    {
        $this->attackPower = $attackPower;
    }

    /**
     * @return float
     */
    public function getDefencePower(): float
    {
        return $this->defencePower;
    }

    /**
     * @param float $defencePower
     */
    public function setDefencePower(float $defencePower): void
    {
        $this->defencePower = $defencePower;
    }

}
