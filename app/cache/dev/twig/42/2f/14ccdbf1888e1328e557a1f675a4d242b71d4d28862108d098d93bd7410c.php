<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_422f14ccdbf1888e1328e557a1f675a4d242b71d4d28862108d098d93bd7410c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  100 => 27,  81 => 24,  20 => 1,  110 => 42,  148 => 53,  134 => 45,  127 => 41,  97 => 29,  104 => 33,  76 => 27,  70 => 24,  58 => 24,  34 => 7,  84 => 29,  65 => 28,  23 => 4,  124 => 41,  113 => 36,  90 => 28,  53 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 51,  128 => 42,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 46,  119 => 39,  102 => 40,  71 => 19,  67 => 20,  63 => 16,  59 => 18,  38 => 6,  94 => 40,  89 => 27,  85 => 38,  75 => 22,  68 => 24,  56 => 9,  87 => 36,  21 => 2,  26 => 12,  93 => 29,  88 => 36,  78 => 22,  46 => 14,  27 => 5,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 45,  105 => 34,  91 => 27,  62 => 19,  49 => 11,  24 => 7,  25 => 3,  19 => 2,  79 => 10,  72 => 30,  69 => 29,  47 => 9,  40 => 12,  37 => 9,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 40,  120 => 40,  115 => 42,  111 => 37,  108 => 34,  101 => 34,  98 => 35,  96 => 34,  83 => 24,  74 => 21,  66 => 23,  55 => 18,  52 => 11,  50 => 10,  43 => 12,  41 => 10,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 49,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 35,  106 => 36,  103 => 28,  99 => 31,  95 => 28,  92 => 37,  86 => 28,  82 => 23,  80 => 28,  73 => 30,  64 => 24,  60 => 23,  57 => 22,  54 => 16,  51 => 17,  48 => 12,  45 => 11,  42 => 9,  39 => 7,  36 => 10,  33 => 4,  30 => 2,);
    }
}
