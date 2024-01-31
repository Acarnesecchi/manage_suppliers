<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SupplierController extends AbstractController
{
    public function supp(): Response
    {
        $supp = random_int(0, 100);

        return $this->render('supplier.html.twig', [
            'supp' => $supp,
        ]);
    }
}