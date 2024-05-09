<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
#[Route('/ticket')]
class TicketController extends AbstractController
{
    #[Route('/pay/{id}', name:'choose_ticket', methods: ["POST","GET"])]
    public function chooseTicket($id,EntityManagerInterface $entityManager): Response
    {
        $ticket = $entityManager->getRepository(Ticket::class)->find($id);

        if (!$ticket) {
            return new Response('Ticket not found', Response::HTTP_NOT_FOUND);
        }

        $ticket->setValide(true);
        $entityManager->flush();

        return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/show', name: 'app_ticket_index', methods: ['GET'])]
    public function index(TicketRepository $ticketRepository): Response
    {
        return $this->render('ticket/index.html.twig', [
            'tickets' => $ticketRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ticket_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $ticket = new Ticket();
    $form = $this->createForm(TicketType::class, $ticket);
    $form->handleRequest($request);

    // Calculate total based on form submission
    $total = 0;
    if ($form->isSubmitted() && $form->isValid()) {
        // Get the selected products from the form submission
        $selectedPrds = $ticket->getPrds();
        
        // Calculate the total based on the selected products
        foreach ($selectedPrds as $prd) {
            // Assuming each product has a price property, adjust this according to your entity structure
            $total += $prd->getPrix();
        }
        
        // Set the total to the ticket entity
        $ticket->setTotal($total);
        $ticket->setValide(false);
        // Persist and flush the ticket entity
        $entityManager->persist($ticket);
        $entityManager->flush();

        // Redirect to the index page
        return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('ticket/new.html.twig', [
        'ticket' => $ticket,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{id}', name: 'app_ticket_show', methods: ['GET'])]
    public function show(Ticket $ticket): Response
    {
        return $this->render('ticket/show.html.twig', [
            'ticket' => $ticket,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ticket_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        $total = 0;
    if ($form->isSubmitted() && $form->isValid()) {
        // Get the selected products from the form submission
        $selectedPrds = $ticket->getPrds();
        
        // Calculate the total based on the selected products
        foreach ($selectedPrds as $prd) {
            // Assuming each product has a price property, adjust this according to your entity structure
            $total += $prd->getPrix();
        }
        
        // Set the total to the ticket entity
        $ticket->setTotal($total);
        $ticket->setValide(false);
        // Persist and flush the ticket entity
        $entityManager->persist($ticket);
        $entityManager->flush();

        // Redirect to the index page
        return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
    }

        return $this->render('ticket/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ticket_delete', methods: ['POST'])]
    public function delete(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($ticket);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
    }
}
