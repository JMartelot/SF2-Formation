<?php

namespace BYS\CoreBundle\Controller;

use BYS\CoreBundle\Entity\Reply;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Reply controller.
 *
 * @Route("reply")
 */
class ReplyController extends Controller
{
    /**
     * Lists all reply entities.
     *
     * @Route("/", name="reply_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $replies = $em->getRepository('BYSCoreBundle:Reply')->findAll();

        return $this->render('reply/index.html.twig', array(
            'replies' => $replies,
        ));
    }

    /**
     * Creates a new reply entity.
     *
     * @Route("/new", name="reply_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reply = new Reply();
        $form = $this->createForm('BYS\CoreBundle\Form\ReplyType', $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush($reply);

            return $this->redirectToRoute('reply_show', array('id' => $reply->getId()));
        }

        return $this->render('reply/new.html.twig', array(
            'reply' => $reply,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reply entity.
     *
     * @Route("/{id}", name="reply_show")
     * @Method("GET")
     */
    public function showAction(Reply $reply)
    {
        $deleteForm = $this->createDeleteForm($reply);

        return $this->render('reply/show.html.twig', array(
            'reply' => $reply,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reply entity.
     *
     * @Route("/{id}/edit", name="reply_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reply $reply)
    {
        $deleteForm = $this->createDeleteForm($reply);
        $editForm = $this->createForm('BYS\CoreBundle\Form\ReplyType', $reply);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reply_edit', array('id' => $reply->getId()));
        }

        return $this->render('reply/edit.html.twig', array(
            'reply' => $reply,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reply entity.
     *
     * @Route("/{id}", name="reply_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reply $reply)
    {
        $form = $this->createDeleteForm($reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reply);
            $em->flush($reply);
        }

        return $this->redirectToRoute('reply_index');
    }

    /**
     * Creates a form to delete a reply entity.
     *
     * @param Reply $reply The reply entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reply $reply)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reply_delete', array('id' => $reply->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
