<?php

namespace  App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function symfony\Component\String\u;


class VinylController
{
    #[Route()]
    function homepage()
    {
        return new Response("<strong> Bonjour </strong>");
    }

    #[Route("/browse/{slug}")]
    function browse(string $slug): Response
    {
        if ($slug) {
            $title = u(str_replace('-', '', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }
        return new Response($title);
    }
}
