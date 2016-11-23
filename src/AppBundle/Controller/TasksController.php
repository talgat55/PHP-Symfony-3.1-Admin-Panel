<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tasks;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Task controller.
 *
 * @Route("tasks")
 */
class TasksController extends Controller
{
    /**
     * Lists all task entities.
     *
     * @Route("/", name="tasks_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tasks = $em->getRepository('AppBundle:Tasks')->findAll();

        return $this->render('tasks/index.html.twig', array(
            'tasks' => $tasks,
        ));
    }

    /**
     * Finds and displays a task entity.
     *
     * @Route("/{id}", name="tasks_show")
     * @Method("GET")
     */
    public function showAction(Tasks $task)
    {

        return $this->render('tasks/show.html.twig', array(
            'task' => $task,
        ));
    }
}
