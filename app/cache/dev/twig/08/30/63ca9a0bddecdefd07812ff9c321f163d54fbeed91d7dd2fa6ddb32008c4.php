<?php

/* MiwPracticaBundle:Contacto:index.html.twig */
class __TwigTemplate_083063ca9a0bddecdefd07812ff9c321f163d54fbeed91d7dd2fa6ddb32008c4 extends Twig_Template
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
        echo "<h1 class=\"text-center\">Contactos</h1>
    
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("contacto_erase_multiple");
        echo "\" method=\"post\" >
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Tlf. Fijo</th>
                <th>Tlf. Móvil</th>
                <th>Email</th>
                <th>F. Nacimiento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td><input id=\"seleccion\" name=\"seleccion[]\" type=\"checkbox\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\"></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tlfFijo"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tlfMovil"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nacimiento")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nacimiento"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"btn-group\">
                        <a class=\"btn btn-info\" type=\"button\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                        <a class=\"btn btn-primary\" type=\"button\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                        <a class=\"btn btn-danger\" type=\"button\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto_erase", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-trash-o\"></i>
                        </a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
    <br>
    <div class=\"text-center\">
        <a class=\"btn btn-success\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("contacto_new");
        echo "\">
            <i class=\"fa fa-plus\"></i> Crear Contacto
        </a>
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Borrado multiple\"/>
    </div>
    </form>
    ";
    }

    public function getTemplateName()
    {
        return "MiwPracticaBundle:Contacto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  117 => 45,  104 => 38,  98 => 35,  92 => 32,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  57 => 22,  53 => 21,  35 => 6,  31 => 4,  28 => 3,);
    }
}
