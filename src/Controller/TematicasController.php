<?php

namespace App\Controller;

use App\Entity\Tematicas;
use App\Form\TematicasType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tematicas")
 */
class TematicasController extends AbstractController
{
    /**
     * @Route("/", name="tematicas_index", methods={"GET"})
     */
    public function index(): Response
    {
        $tematicas = $this->getDoctrine()
            ->getRepository(Tematicas::class)
            ->findAll();

        return $this->render('tematicas/index.html.twig', [
            'tematicas' => $tematicas,
        ]);
    }

    /**
     * @Route("/new", name="tematicas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tematica = new Tematicas();
        $form = $this->createForm(TematicasType::class, $tematica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tematica);
            $entityManager->flush();

            return $this->redirectToRoute('tematicas_index');
        }

        return $this->render('tematicas/new.html.twig', [
            'tematica' => $tematica,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tematicas_show", methods={"GET"})
     */
    public function show(Tematicas $tematica): Response
    {
        return $this->render('tematicas/show.html.twig', [
            'tematica' => $tematica,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tematicas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tematicas $tematica): Response
    {
        $form = $this->createForm(TematicasType::class, $tematica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tematicas_index');
        }

        return $this->render('tematicas/edit.html.twig', [
            'tematica' => $tematica,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tematicas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tematicas $tematica): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tematica->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tematica);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tematicas_index');
    }
}
