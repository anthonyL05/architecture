<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 14:23
 */

declare(strict_types=1);


namespace App\Infrastructure\Service;


use App\Infrastructure\Repository\InvoceRepositoryInterface;

final class Invoce implements \App\Domaine\Service\Invoce
{
    /**
     * @var InvoceRepositoryInterface
     */
    private $invoceRepository;


    public function __construct(InvoceRepositoryInterface $invoceRepository)
    {
        $this->invoceRepository = $invoceRepository;
    }

    public function retriveInvoceWith(int $getlimit, int $getOffsets): \App\Domaine\Collection\Invoce
    {
        return $this->invoceRepository->findAll();
    }
}