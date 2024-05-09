<?php

namespace App\Controller;

use App\Entity\Prd;
use App\Form\PrdType;
use App\Repository\PrdRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/prd')]
class PrdController extends AbstractController
{
    #[Route('/', name: 'app_prd_index', methods: ['GET'])]
    public function index(PrdRepository $prdRepository): Response
    {
        return $this->render('prd/index.html.twig', [
            'prds' => $prdRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_prd_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $prd = new Prd();
        $form = $this->createForm(PrdType::class, $prd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($prd);
            $entityManager->flush();

            return $this->redirectToRoute('app_prd_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('prd/new.html.twig', [
            'prd' => $prd,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_prd_show', methods: ['GET'])]
    public function show(Prd $prd): Response
    {
        return $this->render('prd/show.html.twig', [
            'prd' => $prd,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_prd_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Prd $prd, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PrdType::class, $prd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_prd_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('prd/edit.html.twig', [
            'prd' => $prd,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_prd_delete', methods: ['POST'])]
    public function delete(Request $request, Prd $prd, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$prd->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($prd);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_prd_index', [], Response::HTTP_SEE_OTHER);
    }
}
