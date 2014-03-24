<?php

/* MiwPracticaBundle:User:index.html.twig */
class __TwigTemplate_76de1bf0f005e0d8572e65655e012bd547e269043ca96fd84095f71ff6e69e36 extends Twig_Template
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
        echo "<h1 class=\"text-center\">Usuarios</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <div class=\"btn-group\">
                        <a class=\"btn btn-info\" type=\"button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                        <a class=\"btn btn-primary\" type=\"button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                        <a class=\"btn btn-danger\" type=\"button\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_erase", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-trash-o\"></i>
                        </a>
                    </div>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    <br>
    <div class=\"text-center\">
        <a class=\"btn btn-success\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("admin_new");
        echo "\">
            <i class=\"fa fa-plus\"></i> Crear Usuario
        </a>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "MiwPracticaBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 40,  88 => 36,  74 => 28,  68 => 25,  62 => 22,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,);
    }
}
