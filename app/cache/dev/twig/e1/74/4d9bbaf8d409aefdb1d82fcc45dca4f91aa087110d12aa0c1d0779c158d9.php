<?php

/* MiwPracticaBundle:User:erase.html.twig */
class __TwigTemplate_e1744d9bbaf8d409aefdb1d82fcc45dca4f91aa087110d12aa0c1d0779c158d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"text-center\">¿Estás seguro de que quieres borrar este usuario?</h1>

    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Usuario</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <br>

    <div class=\"text-center\">
        <a class=\"btn btn-danger\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            <i class=\"fa fa-trash-o\"></i> Borrar
        </a>
        <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">
            <i class=\"fa fa-reply\"></i> Cancelar
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MiwPracticaBundle:User:erase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  57 => 22,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
