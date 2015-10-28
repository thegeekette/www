<?php

/* AppBundle:Calculator:sum.html.twig */
class __TwigTemplate_35cecba3b171c16b25505caf90e11cb8160f8727b300063ce9c667eb1647b569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Calculator:sum.html.twig", 1);
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
        $__internal_f16e6568d0532a3f660357a2458fa741d135f609c604a8c5a2d86fda0e717c9e = $this->env->getExtension("native_profiler");
        $__internal_f16e6568d0532a3f660357a2458fa741d135f609c604a8c5a2d86fda0e717c9e->enter($__internal_f16e6568d0532a3f660357a2458fa741d135f609c604a8c5a2d86fda0e717c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Calculator:sum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16e6568d0532a3f660357a2458fa741d135f609c604a8c5a2d86fda0e717c9e->leave($__internal_f16e6568d0532a3f660357a2458fa741d135f609c604a8c5a2d86fda0e717c9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67242bf8c83e960792ee71ed43f7eeced9944e7694923930f6969e123c736116 = $this->env->getExtension("native_profiler");
        $__internal_67242bf8c83e960792ee71ed43f7eeced9944e7694923930f6969e123c736116->enter($__internal_67242bf8c83e960792ee71ed43f7eeced9944e7694923930f6969e123c736116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Voici le resultat</h1>

    <div id=\"sumResult\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "</div>

";
        
        $__internal_67242bf8c83e960792ee71ed43f7eeced9944e7694923930f6969e123c736116->leave($__internal_67242bf8c83e960792ee71ed43f7eeced9944e7694923930f6969e123c736116_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Calculator:sum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Voici le resultat</h1>*/
/* */
/*     <div id="sumResult">{{ result }}</div>*/
/* */
/* {% endblock %}*/
/* */
