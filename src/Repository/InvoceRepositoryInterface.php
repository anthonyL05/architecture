<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 11:34
 */

declare(strict_types= 1);

namespace App\Repository;




interface InvoceRepositoryInterface
{


    /**
     * @return array
     */
     public function findAll(): array;
}