<?php

namespace App\Controller;

use App\Entity\Supplier;
use App\Form\SupplierType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SupplierController extends AbstractController
{
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        $supplier = new Supplier();
        $form = $this->createForm(SupplierType::class, $supplier);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $supplier->setActive(true);
            $supplier->setCreatedAt(new \DateTimeImmutable());

            $doctrine->getManager()->persist($supplier);
            $doctrine->getManager()->flush();

            return $this->redirectToRoute('app_supplier_index');
        }

        return $this->render('supplier/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function index(ManagerRegistry $doctrine): Response
    {
        $suppliers = $doctrine->getRepository(Supplier::class)->findAll();

        return $this->render('supplier/index.html.twig', [
            'suppliers' => $suppliers,
        ]);
    }

    public function update(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $supplier = $entityManager->getRepository(Supplier::class)->find($id);

        if (!$supplier) {
            throw $this->createNotFoundException(
                'No supplier found for id '.$id
            );
        }

        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $supplier->setUpdatedAt(new \DateTimeImmutable());

            $entityManager->flush();

            return $this->redirectToRoute('app_supplier_index');
        }
        return $this->render('supplier/update.html.twig', [
            'form' => $form->createView(),
            'supplier' => $supplier,
        ]);
    }

    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $supplier = $entityManager->getRepository(Supplier::class)->find($id);

        if (!$supplier) {
            throw $this->createNotFoundException(
                'No supplier found for id '.$id
            );
        }

        $entityManager->remove($supplier);
        $entityManager->flush();

        return $this->redirectToRoute('app_supplier_index');
    }
}
