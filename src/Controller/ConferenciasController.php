<?php

namespace App\Controller;

use App\Entity\Conferencias;
use App\Form\ConferenciasType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/conferencias")
 */
class ConferenciasController extends AbstractController
{
    /**
     * @Route("/", name="conferencias_index", methods={"GET"})
     */
    public function index(): Response
    {
        $conferencias = $this->getDoctrine()
            ->getRepository(Conferencias::class)
            ->findAll();

        return $this->render('conferencias/index.html.twig', [
            'conferencias' => $conferencias,
        ]);
    }

    /**
     * @Route("/new", name="conferencias_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $conferencia = new Conferencias();
        $form = $this->createForm(ConferenciasType::class, $conferencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($conferencia);
            $entityManager->flush();

            return $this->redirectToRoute('conferencias_index');
        }

        return $this->render('conferencias/new.html.twig', [
            'conferencia' => $conferencia,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="conferencias_show", methods={"GET"})
     */
    public function show(Conferencias $conferencia): Response
    {
        return $this->render('conferencias/show.html.twig', [
            'conferencia' => $conferencia,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="conferencias_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Conferencias $conferencia): Response
    {
        $form = $this->createForm(ConferenciasType::class, $conferencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('conferencias_index');
        }

        return $this->render('conferencias/edit.html.twig', [
            'conferencia' => $conferencia,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="conferencias_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Conferencias $conferencia): Response
    {
        if ($this->isCsrfTokenValid('delete'.$conferencia->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($conferencia);
            $entityManager->flush();
        }

        return $this->redirectToRoute('conferencias_index');
    }
}
