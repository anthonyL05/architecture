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
use App\Infrastructure\Repository\InvoceRepositoryInterface;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class HomeHtml
{
    /**
     * @var Environment
     */
    private $renderer;
    /**
     * @var FindAllInvocesHandler
     */
    private $handler;

    public function __construct(Environment $renderer, FindAllInvocesHandler $handler)
    {

        $this->renderer = $renderer;
        $this->handler = $handler;
    }

    public function handle() : Response
    {
        return new Response($this->renderer->render('home.html.twig', [
            'invoices' => $this->handler->handle(new FindAllInvoices())
        ]));
    }
}