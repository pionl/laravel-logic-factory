<?php
namespace Tests\Mock;

use Pion\Support\Logic\LogicFactory;
use Illuminate\Support\Collection;

/**
 * Class TypeFactory
 *
 * The basic factory that creates a list of actions and uses the const
 * for easier usage in other parts of code.
 *
 * @package Test\Mock
 */
class TypeFactory extends LogicFactory
{
    const TYPE_TEST = "TestType";
    const TYPE_TEST_TITLE = "Testing type";

    /**
     * Must be setted on every subclass
     * @var Collection|null
     */
    static protected $list = null;

    /**
     * Create an own colleciton of types
     * @return \Illuminate\Support\Collection
     */
    static function createLogicList()
    {
        return new Collection([
            self::TYPE_TEST => self::TYPE_TEST_TITLE
        ]);
    }

    /**
     * A namespace where the logic classes are stored. Like
     * __NAMESPACE__."\\Types
     * @return string
     */
    static function logicNamespace()
    {
        return __NAMESPACE__."\\Types";
    }
}