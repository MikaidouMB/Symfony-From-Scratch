<?php

namespace App\Controller;

use App\Controller\PageController;
use Symfony\Component\HttpFoundation\Response;

class PageController {
    public function about(){
        ob_start();
        include __DIR__ . '/../pages/cms/about.php';
        return new Response(ob_get_clean());
    }
}