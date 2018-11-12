<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 10:09
 */

declare(strict_types=1);

namespace App\Ui\Action;


use App\Domaine\Entity\Invoce as InvoceEntity;
use App\Infrastructure\Repository\InvoceRepositoryInterface;
use App\Ui\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class Home
{
    private $invoceRepository;
    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(InvoceRepositoryInterface $invoceRepository, Serializer $serializer)
    {
        $this->invoceRepository = $invoceRepository;
        $this->serializer = $serializer;
    }

    public function handle() : Response
    {
        return new JsonResponse([
            'success' => true,
            'invoices' => $this->serializer->serialize($this->invoceRepository->findAll())
            ]);
    }
}