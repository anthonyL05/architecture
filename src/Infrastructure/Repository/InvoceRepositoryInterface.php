<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 11:34
 */

declare(strict_types= 1);

namespace App\Infrastructure\Repository;




use App\Domaine\Collection\Invoce;

interface InvoceRepositoryInterface
{


    /**
     * @return array
     */
     public function findAll(): Invoce;
}