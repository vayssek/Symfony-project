<?php

namespace Kevin\CatalogueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Kevin\CatalogueBundle\Entity\Commentaire;
use Kevin\CatalogueBundle\Form\CommentaireType;

/**
 * Commentaire controller.
 *
 * @Route("/catalogue/commentaire")
 */
class CommentaireController extends Controller
{
    /**
     * Lists all Commentaire entities.
     *
     * @Route("/", name="Catcommentaire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('KevinCatalogueBundle:Commentaire')->findAll();

        return $this->render('KevinCatalogueBundle:commentaire:index.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }

    /**
     * Creates a new Commentaire entity.
     *
     * @Route("/new", name="Catcommentaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm('Kevin\CatalogueBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('Catcommentaire_show', array('id' => $commentaire->getId()));
        }

        return $this->render('KevinCatalogueBundle:commentaire:new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commentaire entity.
     *
     * @Route("/{id}", name="Catcommentaire_show")
     * @Method("GET")
     */
    public function showAction(Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);

        return $this->render('KevinCatalogueBundle:commentaire:show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Commentaire entity.
     *
     * @Route("/{id}/edit", name="Catcommentaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('Kevin\CatalogueBundle\Form\CommentaireType', $commentaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('Catcommentaire_edit', array('id' => $commentaire->getId()));
        }

        return $this->render('KevinCatalogueBundle:commentaire:edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Commentaire entity.
     *
     * @Route("/{id}", name="Catcommentaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Commentaire $commentaire)
    {
        $form = $this->createDeleteForm($commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();
        }

        return $this->redirectToRoute('Catcommentaire_index');
    }

    /**
     * Creates a form to delete a Commentaire entity.
     *
     * @param Commentaire $commentaire The Commentaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaire $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Catcommentaire_delete', array('id' => $commentaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
