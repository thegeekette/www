<?php

/* ::menu.html.twig */
class __TwigTemplate_6397db696d15df166503bce6bde498ac788161ac05a0a6455614a806bfde284f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b22caa0882d013c5bbfd3d93bf7bae7f37c74baf752bb3f92036aa4374669e3 = $this->env->getExtension("native_profiler");
        $__internal_8b22caa0882d013c5bbfd3d93bf7bae7f37c74baf752bb3f92036aa4374669e3->enter($__internal_8b22caa0882d013c5bbfd3d93bf7bae7f37c74baf752bb3f92036aa4374669e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">

    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Home</a>
    </li>

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Computers <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("computer");
        echo "\">Computer</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\">Person</a></li>
        </ul>
    </li>

</ul>
";
        
        $__internal_8b22caa0882d013c5bbfd3d93bf7bae7f37c74baf752bb3f92036aa4374669e3->leave($__internal_8b22caa0882d013c5bbfd3d93bf7bae7f37c74baf752bb3f92036aa4374669e3_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  36 => 10,  27 => 4,  22 => 1,);
    }
}
/* <ul class="nav navbar-nav">*/
/* */
/*     <li>*/
/*         <a href="{{ path('app_homepage') }}"><span class="glyphicon glyphicon-home"></span> Home</a>*/
/*     </li>*/
/* */
/*     <li class="dropdown">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computers <span class="caret"></span></a>*/
/*         <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('computer') }}">Computer</a></li>*/
/*             <li><a href="{{ path('person') }}">Person</a></li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* </ul>*/
/* */
