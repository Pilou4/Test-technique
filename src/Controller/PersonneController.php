<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/personne', name: 'personne_')]
class PersonneController extends AbstractController
{

    public function __construct(private EntityManagerInterface $entityManager)
    {
    }
    
    #[Route('/list', name: 'list')]
    public function list(PersonneRepository $personneRepository): Response
    {
        return $this->render('personne/list.html.twig', [
            'personnes' => $personneRepository->findAllOrderedByName(),
        ]);
    }

    #[Route('/add', name: 'add')]
    public function add(Request $request): Response
    {
        $personne = new Personne();

        $form = $this->createForm(PersonneType::class, $personne);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $this->entityManager->persist($personne);
            $this->entityManager->flush();

            $this->addFlash('success', "La personne à bien été enregistrer");
            return $this->redirectToRoute('home');
        }

        return $this->render('personne/add.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
