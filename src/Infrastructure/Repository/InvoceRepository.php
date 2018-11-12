<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 11:34
 */

declare(strict_types= 1);

namespace App\Infrastructure\Repository;




use App\Domaine\Entity\Invoce;
use App\Infrastructure\ValueObject\Uuid;

final class InvoceRepository implements InvoceRepositoryInterface
{

    /**
     * @return Invoce
     * @throws \Exception
     */
    public function findAll(): \App\Domaine\Collection\Invoce
    {
        return new \App\Domaine\Collection\Invoce(...[
            new Invoce(Uuid::uuid4(), new \DateTimeImmutable()),
            new Invoce(Uuid::uuid4(), new \DateTimeImmutable()),
            new Invoce(Uuid::uuid4(), new \DateTimeImmutable()),
        ]);
    }
}