<?php

/* ::base.html.twig */
class __TwigTemplate_a6300deae6598ab6d2e369b72804c7a260d7868484e34359c9e28353a590cc5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'logout' => array($this, 'block_logout'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/miwpractica/css/estilo.css"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div class=\"container\">
            ";
        // line 14
        $this->displayBlock('logout', $context, $blocks);
        // line 19
        echo "            <div class=\"row\">
                ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "            </div>                   
        </div>
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js\"></script>
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gestión de Contactos";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_logout($context, array $blocks = array())
    {
        // line 15
        echo "            <div class=\"row\">
                <a class=\"btn btn-primary pull-right\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-power-off\"></i>Salir</a>
            </div>
            ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  96 => 20,  86 => 15,  83 => 14,  66 => 26,  64 => 25,  58 => 21,  56 => 20,  53 => 19,  51 => 14,  46 => 11,  44 => 10,  40 => 9,  34 => 6,  30 => 5,  24 => 1,  140 => 63,  132 => 59,  126 => 56,  123 => 55,  121 => 54,  113 => 48,  107 => 44,  99 => 40,  91 => 36,  89 => 16,  85 => 33,  78 => 10,  76 => 27,  72 => 5,  68 => 23,  62 => 21,  60 => 20,  54 => 17,  50 => 16,  47 => 15,  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
