<?php

namespace App\Controller;

use App\Entity\Attachement;
use App\Form\AttachementType;
use App\Repository\AttachementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/attachement")
 */
class AttachementController extends AbstractController
{
    /**
     * @Route("/", name="app_attachement_index", methods={"GET"})
     */
    public function index(AttachementRepository $attachementRepository): Response
    {
        return $this->render('attachement/index.html.twig', [
            'attachements' => $attachementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_attachement_new", methods={"GET", "POST"})
     */
    function new (Request $request, AttachementRepository $attachementRepository): Response {
        $attachement = new Attachement();
        $form = $this->createForm(AttachementType::class, $attachement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('attachement')['file'];
            $filename = uniqid() . '.' . $file->guessExtension();
            $attachement->setName($filename);
            $attachement->setSize($file->getSize());
            $attachement->setFile($file->getClientOriginalName());
            $file->move($this->getParameter('uploads'), $filename);
            $attachement->setContent(file_get_contents($this->getParameter('uploads') . '/' . $filename));
            $attachementRepository->add($attachement);
            return $this->redirectToRoute('app_attachement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('attachement/new.html.twig', [
            'attachement' => $attachement,
            'form' => $form,
        ]);
    }
}
