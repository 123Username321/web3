<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Feedback;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function index($id)
    {
        /*
        $feedback = new Feedback();

        $form = $this->createFormBuilder($feedback)
            ->add('content', TextType::class)
            ->add('raiting', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        return $this->render('product/index.html.twig', [
            //'product' => $product,
            'form' => $form->createView()
        ]);
        */
    }
}
