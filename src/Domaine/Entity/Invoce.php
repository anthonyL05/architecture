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

class Invoce implements \JsonSerializable
{

    private $uuid;

    private $creationDate;

    public function __construct(Uuid $uuid, \DateTimeInterface $creationDate)
    {
        $this->uuid = $uuid;
        $this->creationDate = $creationDate;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->uuid->toString(),
            'creation_date' => $this->creationDate->format(\DateTimeInterface::ATOM)
            ];
    }
}