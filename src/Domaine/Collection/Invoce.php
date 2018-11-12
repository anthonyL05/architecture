<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 14:57
 */

declare(strict_types=1);

namespace App\Domaine\Collection;


final class Invoce implements \IteratorAggregate
{
    private $collection;

    public function __construct(\App\Domaine\Entity\Invoce ...$collection){
        $this->collection = $collection;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->collection);
    }

}