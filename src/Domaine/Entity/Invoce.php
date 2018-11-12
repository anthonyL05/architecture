<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 11:36
 */

declare(strict_types= 1);


namespace App\Domaine\Entity;





use App\Domaine\ValueObject\Uuid;

class Invoce
{

    private $uuid;

    private $creationDate;

    public function __construct(Uuid $uuid, \DateTimeInterface $creationDate)
    {
        $this->uuid = $uuid;
        $this->creationDate = $creationDate;
    }

    public function date(): \DateTimeInterface
    {
        return $this->creationDate;
    }
    public function id(): string
    {
        return $this->uuid->toString();
    }
}