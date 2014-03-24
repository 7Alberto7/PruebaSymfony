<?php

/* MiwPracticaBundle:User:show.html.twig */
class __TwigTemplate_fa876a394df7f6ced83d007337fd18f2aaef645e80a289fb010eac48f1bbf133 extends Twig_Template
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
        echo "<h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Email</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rol</th>
                <td>";
        // line 14
        if (twig_in_filter("ROLE_ADMIN", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles"))) {
            echo "Administrador";
        } else {
            echo " Usuario ";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Última visita</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin"), "d-m-Y H:i:s"), "html", null, true);
        echo "</td>
            </tr>            
        </tbody>
    </table>
    <br>
    <div class=\"text-center\">
        <a class=\"btn btn-primary\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">
            <i class=\"fa fa-reply\"></i> Volver
        </a>
    </div>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MiwPracticaBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  148 => 53,  134 => 45,  127 => 41,  97 => 29,  104 => 33,  76 => 27,  70 => 24,  58 => 21,  34 => 5,  84 => 29,  65 => 23,  23 => 1,  124 => 41,  113 => 36,  90 => 28,  53 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 51,  128 => 42,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 46,  119 => 39,  102 => 37,  71 => 19,  67 => 17,  63 => 16,  59 => 18,  38 => 6,  94 => 40,  89 => 27,  85 => 38,  75 => 22,  68 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 36,  78 => 22,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 45,  105 => 34,  91 => 29,  62 => 22,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 10,  72 => 26,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 40,  120 => 40,  115 => 42,  111 => 37,  108 => 34,  101 => 34,  98 => 35,  96 => 34,  83 => 24,  74 => 21,  66 => 23,  55 => 18,  52 => 11,  50 => 10,  43 => 10,  41 => 10,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 49,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 35,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 32,  86 => 28,  82 => 23,  80 => 28,  73 => 30,  64 => 24,  60 => 23,  57 => 22,  54 => 10,  51 => 17,  48 => 14,  45 => 11,  42 => 7,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
