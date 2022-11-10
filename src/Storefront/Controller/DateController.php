<?php declare(strict_types=1);

namespace RePage\Storefront\Controller;

use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(defaults={"_routeScope"={"storefront"}})
 */
class DateController extends StorefrontController
{
    /**
     * @Route("/timestamp", name="frontend.example.example", defaults={"XmlHttpRequest"=true}, methods={"GET"})
     */
    public function showExample(): JsonResponse
    {
        return new JsonResponse("{\"timestamp\": \"" . date('d-m-Y H:i:s') . "\"}", 200, [], true);
    }
}
