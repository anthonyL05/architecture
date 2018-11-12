<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 10:09
 */

declare(strict_types=1);

namespace App\Ui\Action;


use App\Application\Query\FindAllInvoices;
use App\Application\QueryHandler\FindAllInvocesHandler;
use App\Domaine\Entity\Invoce as InvoceEntity;
use App\Infrastructure\Repository\InvoceRepositoryInterface;
use App\Ui\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class Home
{
    /**
     * @var Serializer
     */
    private $serializer;
    /**
     * @var FindAllInvocesHandler
     */
    private $handler;

    public function __construct(FindAllInvocesHandler $handler, Serializer $serializer)
    {
        $this->serializer = $serializer;
        $this->handler = $handler;
    }

    public function handle() : Response
    {
        return new JsonResponse([
            'success' => true,
            'invoices' => $this->serializer->serialize($this->handler->handle(new FindAllInvoices()))
            ]);
    }
}