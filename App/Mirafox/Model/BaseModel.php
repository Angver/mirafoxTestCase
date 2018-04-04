<?php

namespace App\Mirafox\Model;


class BaseModel
{
    /**
     * @param array $rawModel
     */
    public function __construct(array $rawModel = [])
    {
        if (!empty($rawModel) && (is_array($rawModel) || $rawModel instanceof \Traversable)) {
            foreach ($rawModel as $key => $value) {
                $this->$key = $value;
            }
        }
    }
}
