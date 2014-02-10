<?php

namespace Cerad\Bundle\BlogBundle\Controller\Blog;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use \Michelf\Markdown;

class ShowController extends Controller
{
    public function showAction(Request $request, $blogNum)
    {
        $resourceDir = $this->container->getParameter('cerad_blog__resources_dir');
        
        $blogFilePath = $resourceDir . '/Blog' . $blogNum . '.md';
        die($blogFilePath);
        $my_html = Markdown::defaultTransform(file_get_contents($blogFilePath));
        die($my_html);
        
        return new Response($my_html);
        return $this->render('CeradBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
