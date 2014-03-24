<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bb76a997d6abd41e003edee238830b913b6529d714946d690fc9ea22bfd26ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'logout' => array($this, 'block_logout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_logout($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 well\">
            <h1 class=\"text-center login-title\">Gestión de Contactos</h1>
            <br>
            ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                <div class=\"alert alert-danger\">
                    <p>El usuario o contraseña son incorrectos</p>
                </div>
            ";
        }
        // line 15
        echo "            
            <div class=\"text-center\">
                <i class=\"fa fa-group fa-5x text-primary\"></i>
            </div>
            <form class=\"form-signin\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"well\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />                
                ";
        // line 21
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 22
            echo "                    <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo ", ya estás conectado</p>
                ";
        } else {
            // line 24
            echo "                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Usuario</label>
                    <input class=\"form-control\" id=\"username\" name=\"_username\" type=\"text\" placeholder=\"Introduzca su usuario\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Contraseña</label>
                    <input class=\"form-control\" id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Introduzca su contraseña\" />
                </div>
                ";
        }
        // line 32
        echo "                

                ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "                    <a class=\"btn btn-lg btn-success btn-block\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">
                        <i class=\"fa fa-refresh\"> Continuar</i>
                    </a>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 39
            echo "                    <a class=\"btn btn-lg btn-success btn-block\"  href=\"";
            echo $this->env->getExtension('routing')->getPath("contacto");
            echo "\">
                        <i class=\"fa fa-refresh\"> Continuar</i>
                    </a>
                ";
        } else {
            // line 43
            echo "                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                        Entrar
                    </button>
                ";
        }
        // line 47
        echo "            </form>
            <div class=\"text-center\">
            ";
        // line 49
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 50
            echo "                <br>
                <a class=\"btn btn-lg btn-danger btn-block\" href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    <i class=\"fa fa-power-off\"> Salir</i>
                </a>
            ";
        }
        // line 55
        echo "            </div>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  122 => 51,  119 => 50,  117 => 49,  113 => 47,  107 => 43,  99 => 39,  91 => 35,  89 => 34,  85 => 32,  74 => 24,  68 => 22,  66 => 21,  62 => 20,  58 => 19,  52 => 15,  46 => 11,  44 => 10,  37 => 5,  34 => 4,  29 => 2,);
    }
}
