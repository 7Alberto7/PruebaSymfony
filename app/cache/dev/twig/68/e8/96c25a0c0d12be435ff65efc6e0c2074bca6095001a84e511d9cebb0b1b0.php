<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_68e896c25a0c0d12be435ff65efc6e0c2074bca6095001a84e511d9cebb0b1b0 extends Twig_Template
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

    // line 4
    public function block_logout($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 well\">
            <h1 class=\"text-center\">Formulario de Registro</h1>     
                <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\" class=\"form-signin\" novalidate>
                    <div class=\"form-group\">
                        <label>Usuario</label>
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Email</label>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 20
            echo "                    <div class=\"form-group\">
                        ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'label', array("attr" => array("class" => "control-label")));
            echo "
                        ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 26
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 'row');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn btn-success btn-lg\"><i class=\"fa fa-check\"></i> Aceptar</button>
                    <a class=\"btn btn-danger btn-lg\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-times\"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  94 => 28,  85 => 26,  80 => 25,  71 => 22,  67 => 21,  64 => 20,  60 => 19,  55 => 17,  48 => 13,  42 => 10,  37 => 7,  34 => 6,  29 => 4,);
    }
}
