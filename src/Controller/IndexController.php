<?php

namespace App\Controller;

use App\Form\TestType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $form = $this->createForm(TestType::class);
        return $this->render('base.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
