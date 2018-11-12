<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 15:19
 */

declare(strict_types=1);

namespace App\Application\Query;


final class FindAllInvoices
{
    /**
     * @var int
     */
    private $limite;
    /**
     * @var int
     */
    private $offset;

    public function __construct(int $limite = 2, int $offset = 0)
    {
        $this->limite = $limite;
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLimite(): int
    {
        return $this->limite;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }



}