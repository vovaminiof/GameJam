<?php

namespace Acme\JamGameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
 
class JamGameController extends Controller
{
    public function getMenu(){
        $url[] = $this->get('router')->generate('pages', array(
            'id' => 1,
            'page' => ''
        ));
        $url[] = $this->get('router')->generate('pages', array(
            'id' => 1,
            'page' => 'games'
        ));
        $url[] = $this->get('router')->generate('pages', array(
            'id' => 1,
            'page' => 'info'
        ));
        
        return $url;
    }
    public function pagesAction($page)
    {
        $content = '';
        $url = $this->getMenu();
        switch($page) {
         case 'info':
            $content = 'info';
            break;
         case 'games':
            $content = 'games';
            break;
         case 'home':
            $content = 'home';
            break;
         default:
            return $this->render('AcmeJamGameBundle:JamGame:404.html.twig');
       }  
       
       return $this->render('AcmeJamGameBundle:JamGame:page.html.twig', array('content' => $content, 'str' => $url));  
    }
    
    public function gameAction($id)
    {
        $url = $this->getMenu();
        return $this->render('AcmeJamGameBundle:JamGame:page.html.twig', array('content' => 'first game', 'str' => $url));
    }
}
?>