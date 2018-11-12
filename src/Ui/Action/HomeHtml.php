<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 10:09
 */

declare(strict_types=1);

namespace App\Ui\Action;


use App\Infrastructure\Repository\InvoceRepositoryInterface;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class HomeHtml
{
    private $invoceRepository;
    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(InvoceRepositoryInterface $invoceRepository, Environment $renderer)
    {
        $this->invoceRepository = $invoceRepository;
        $this->renderer = $renderer;
    }

    public function handle() : Response
    {
        return new Response($this->renderer->render('home.html.twig', [
            'invoices' => $this->invoceRepository->findAll()
        ]));
    }
}