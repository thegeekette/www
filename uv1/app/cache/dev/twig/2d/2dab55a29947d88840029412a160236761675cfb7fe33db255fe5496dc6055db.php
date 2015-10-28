<?php

/* AppBundle:Person:new.html.twig */
class __TwigTemplate_60be762eccd63ad56dc29ddc7038da6b6b8062c665fcbbbeb707313785f980b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Person:new.html.twig", 1);
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
        $__internal_3ba3c264230bdc164d2a26fe1ffdeacf0a2704ac01c84ea506763ca93f6c1fde = $this->env->getExtension("native_profiler");
        $__internal_3ba3c264230bdc164d2a26fe1ffdeacf0a2704ac01c84ea506763ca93f6c1fde->enter($__internal_3ba3c264230bdc164d2a26fe1ffdeacf0a2704ac01c84ea506763ca93f6c1fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba3c264230bdc164d2a26fe1ffdeacf0a2704ac01c84ea506763ca93f6c1fde->leave($__internal_3ba3c264230bdc164d2a26fe1ffdeacf0a2704ac01c84ea506763ca93f6c1fde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f94e4870c1a34edeb47633a5b889e0c3c50943c9aecd90c9166e75c61ea35dd = $this->env->getExtension("native_profiler");
        $__internal_7f94e4870c1a34edeb47633a5b889e0c3c50943c9aecd90c9166e75c61ea35dd->enter($__internal_7f94e4870c1a34edeb47633a5b889e0c3c50943c9aecd90c9166e75c61ea35dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_7f94e4870c1a34edeb47633a5b889e0c3c50943c9aecd90c9166e75c61ea35dd->leave($__internal_7f94e4870c1a34edeb47633a5b889e0c3c50943c9aecd90c9166e75c61ea35dd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Person:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('person') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
