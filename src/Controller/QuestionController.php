<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('hi');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug): Response
    {
        $answers = ['First answer', 'Second', 'Third'];
        dump($this);
        return $this->render('question/show.html.twig',
            ['question' => ucwords(str_replace('-', '', $slug)),
              'answers' => $answers,
            ]);
    }
}