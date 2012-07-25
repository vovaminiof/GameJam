<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // AcmeJamGameBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\JamGameBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'AcmeJamGameBundle_homepage'));
        }

        // pages
        if (0 === strpos($pathinfo, '/gamejam') && preg_match('#^/gamejam(?:/(?P<id>[^/]+?)(?:/(?P<page>[^/]+?))?)?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\JamGameBundle\\Controller\\JamGameController::pagesAction',  'page' => 'home',  'id' => '',)), array('_route' => 'pages'));
        }

        // game
        if (0 === strpos($pathinfo, '/game') && preg_match('#^/game/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\JamGameBundle\\Controller\\JamGameController::gameAction',)), array('_route' => 'game'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
