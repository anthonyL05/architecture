<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 13:29
 */

namespace App\Infrastructure\ValueObject;

use App\Domaine\ValueObject\Uuid as UuidInterface;
use Ramsey\Uuid\Uuid as ThirdPartyUuid;
use Ramsey\Uuid\UuidInterface as ThirdPartyInterface;

final class Uuid implements UuidInterface
{
    private $uuid;

    public function __construct(ThirdPartyInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public static function uuid4(): UuidInterface
    {
        return new self(ThirdPartyUuid::uuid4());
    }
    public function toString(): string
    {
        return $this->uuid->toString();
    }
}