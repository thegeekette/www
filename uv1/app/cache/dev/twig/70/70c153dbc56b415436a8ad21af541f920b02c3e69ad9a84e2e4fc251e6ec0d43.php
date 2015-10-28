<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_77a9c715baf999348b8ae16136669ea5eb9e96ceceb50e6c3adddc10e05223ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dd2095d909ac9286b1ebf4734c7b505a80803cbf79d55769822b89e4e7bd508 = $this->env->getExtension("native_profiler");
        $__internal_1dd2095d909ac9286b1ebf4734c7b505a80803cbf79d55769822b89e4e7bd508->enter($__internal_1dd2095d909ac9286b1ebf4734c7b505a80803cbf79d55769822b89e4e7bd508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd2095d909ac9286b1ebf4734c7b505a80803cbf79d55769822b89e4e7bd508->leave($__internal_1dd2095d909ac9286b1ebf4734c7b505a80803cbf79d55769822b89e4e7bd508_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c04a2229a53909dcdb8f9bbca01152985659c1e3975e288e4df93dfc56093cc3 = $this->env->getExtension("native_profiler");
        $__internal_c04a2229a53909dcdb8f9bbca01152985659c1e3975e288e4df93dfc56093cc3->enter($__internal_c04a2229a53909dcdb8f9bbca01152985659c1e3975e288e4df93dfc56093cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c04a2229a53909dcdb8f9bbca01152985659c1e3975e288e4df93dfc56093cc3->leave($__internal_c04a2229a53909dcdb8f9bbca01152985659c1e3975e288e4df93dfc56093cc3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e18741ae461f1ef6b886fbe203f6e40e63d711a697d2a4dc29a8c2c5db9e7a4 = $this->env->getExtension("native_profiler");
        $__internal_7e18741ae461f1ef6b886fbe203f6e40e63d711a697d2a4dc29a8c2c5db9e7a4->enter($__internal_7e18741ae461f1ef6b886fbe203f6e40e63d711a697d2a4dc29a8c2c5db9e7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e18741ae461f1ef6b886fbe203f6e40e63d711a697d2a4dc29a8c2c5db9e7a4->leave($__internal_7e18741ae461f1ef6b886fbe203f6e40e63d711a697d2a4dc29a8c2c5db9e7a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_855200a2e13a6fecb420ec610d81cd91f425963ff45cbf159d424894731f661e = $this->env->getExtension("native_profiler");
        $__internal_855200a2e13a6fecb420ec610d81cd91f425963ff45cbf159d424894731f661e->enter($__internal_855200a2e13a6fecb420ec610d81cd91f425963ff45cbf159d424894731f661e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_855200a2e13a6fecb420ec610d81cd91f425963ff45cbf159d424894731f661e->leave($__internal_855200a2e13a6fecb420ec610d81cd91f425963ff45cbf159d424894731f661e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
