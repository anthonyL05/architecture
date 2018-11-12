<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 14:23
 */

declare(strict_types=1);


namespace App\Domaine\Service;


interface Invoce
{
    public function retriveInvoceWith(int $getlimit, int $getOffsets): \App\Domaine\Collection\Invoce;
}