<?php

namespace Miw\PracticaBundle\Services;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface; 
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface; 
use Symfony\Component\Security\Core\SecurityContext; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Component\Routing\Router; 
use Symfony\Component\HttpFoundation\Response;
/**
* Custom login listener.
*/
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface 
{
    protected $router;
    
    protected $security;
    

    /**
    * Constructor
    *
    * @param SecurityContext $context
    * @param Doctrine $doctrine
    */
    public function __construct(Router $router, SecurityContext $security)
    {
        $this->router = $router;
        $this->security = $security;
    }
    
    /**
    * @param Event $event
    */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {            
        if ($this->security->isGranted('ROLE_ADMIN')) {
            $response = new RedirectResponse($this->router->generate('admin'));
        } else {
            $response = new RedirectResponse($this->router->generate('contacto'));
        }

        return $response;
    }
}