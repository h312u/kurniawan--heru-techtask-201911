<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return new Response('
            <html>
                <body>
                    <h1>Heru Kurniawan - Techtask (Nov 2019)</h1>
                    <h3>Welcome to Symfony 4.3.8</h3>
                </body>
            </html>
        ');
    }
}