<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 10:09
 */

declare(strict_types=1);

namespace App\Action;


use App\Repository\InvoceRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class Home
{
    private $invoceRepository;

    public function __construct(InvoceRepositoryInterface $invoceRepository)
    {
        $this->invoceRepository = $invoceRepository;
    }

    public function handle() : Response
    {
        return new JsonResponse([
            'success' => true,
            'invoices' => $this->invoceRepository->findAll(),
            ]);
    }
}