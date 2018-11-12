<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 15:22
 */

declare(strict_types = 1);

namespace App\Application\QueryHandler;

use App\Application\Query\FindAllInvoices;
use App\Domaine\Service\Invoce;

final class FindAllInvocesHandler
{
    /**
     * @var Invoce
     */
    private $invoceService;


    public function __construct(Invoce $invoceService)
    {
        $this->invoceService = $invoceService;
    }

    public function handle(FindAllInvoices $query) : \App\Domaine\Collection\Invoce
    {
        return $this->invoceService->retriveInvoceWith(
            $query->getLimite(),
            $query->getOffset()
        );
    }
}