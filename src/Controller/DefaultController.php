<?php

namespace App\Controller;

use App\Repository\LinkRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/{link_parent}", name="default")
     */
    public function index(LinkRepository $linkRepository, $link_parent = 0)
    {
        return $this->render('default/index.html.twig', [
            'links_parent' => $linkRepository->findBy(["parent" => $link_parent])
        ]);
    }
}
