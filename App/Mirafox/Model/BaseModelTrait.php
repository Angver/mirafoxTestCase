<?php

namespace App\Mirafox\Model;


trait BaseModelTrait
{
    public function __get($name)
    {
        $getter = 'get' . $name;
        if (method_exists($this, $getter)) {
            return $this->$getter();
        }

        if (strpos($name, 'is') === 0 && method_exists($this, $name)) {
            return $this->$name();
        }

    }

    public function __set($name, $value)
    {
        $setter = 'set' . $name;
        if (method_exists($this, $setter)) {
            $this->$setter($value);
        }
    }

    public function __isset($name)
    {
        $getter = 'get' . $name;
        if (method_exists($this, $getter)) {
            return $this->$getter() !== null;
        }

        if (strpos($name, 'is') === 0 && method_exists($this, $name)) {
            return $this->$name() !== null;
        }

        return false;
    }

    public function __unset($name)
    {
        $setter = 'set' . $name;
        if (method_exists($this, $setter)) {
            $this->$setter(null);
        }
    }

    public function __call($name, $params)
    {
    }

    protected function hasProperty($name, $checkVars = true)
    {
        return $this->canGetProperty($name, $checkVars) || $this->canSetProperty($name, false);
    }

    protected function canGetProperty($name, $checkVars = true)
    {
        $hasGetters = method_exists($this, 'get' . $name) || (strpos($name, 'is') === 0 && method_exists($this, $name));

        return $hasGetters || $checkVars && property_exists($this, $name);
    }

    protected function canSetProperty($name, $checkVars = true)
    {
        return method_exists($this, 'set' . $name) || $checkVars && property_exists($this, $name);
    }

    protected function hasMethod($name)
    {
        return method_exists($this, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        foreach (get_class_methods($this) as $method) {
            if (strpos($method, 'get') === 0) {
                yield lcfirst(substr($method, 3)) => $this->$method();
            } elseif (strpos($method, 'is') === 0) {
                yield lcfirst($method) => $this->$method();
            }
        }
    }

    final public function offsetExists($offset)
    {
        return $this->__isset($offset);
    }

    final public function offsetGet($offset)
    {
        return $this->__get($offset);
    }

    final public function offsetSet($offset, $value)
    {
        $this->__set($offset, $value);
    }

    final public function offsetUnset($offset)
    {
    }
}
