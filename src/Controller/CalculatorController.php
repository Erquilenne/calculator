<?php

namespace App\Controller;

use App\Calculate;
use App\Form\CalculatorFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(CalculatorFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $calculation = new Calculate($form->get('first_number')->getData(), $form->get('second_number')->getData(), $form->get('symbol')->getData());
            $result = $calculation->calc();

            $this->addFlash('success', 'Ответ: ' . $result);
        }

        return $this->render('calculator/index.html.twig', [
            'controller_name' => 'CalculatorController',
            'form' => $form->createView(),
        ]);
    }
}
