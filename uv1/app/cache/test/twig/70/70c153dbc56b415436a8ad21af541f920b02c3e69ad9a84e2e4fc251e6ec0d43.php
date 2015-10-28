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
        $__internal_f068850cee6bd6ff0f1d4b9bc86156760e0af85ebb0778fb46ded72a1fc3ffba = $this->env->getExtension("native_profiler");
        $__internal_f068850cee6bd6ff0f1d4b9bc86156760e0af85ebb0778fb46ded72a1fc3ffba->enter($__internal_f068850cee6bd6ff0f1d4b9bc86156760e0af85ebb0778fb46ded72a1fc3ffba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f068850cee6bd6ff0f1d4b9bc86156760e0af85ebb0778fb46ded72a1fc3ffba->leave($__internal_f068850cee6bd6ff0f1d4b9bc86156760e0af85ebb0778fb46ded72a1fc3ffba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_635a9adafe173c5ba38b11e6d0b327e40750a9007d31be478015897d874bbc03 = $this->env->getExtension("native_profiler");
        $__internal_635a9adafe173c5ba38b11e6d0b327e40750a9007d31be478015897d874bbc03->enter($__internal_635a9adafe173c5ba38b11e6d0b327e40750a9007d31be478015897d874bbc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_635a9adafe173c5ba38b11e6d0b327e40750a9007d31be478015897d874bbc03->leave($__internal_635a9adafe173c5ba38b11e6d0b327e40750a9007d31be478015897d874bbc03_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_68b00a779a4c230d2434c1898e6493672c7546200532ccd3192f51638713e6f8 = $this->env->getExtension("native_profiler");
        $__internal_68b00a779a4c230d2434c1898e6493672c7546200532ccd3192f51638713e6f8->enter($__internal_68b00a779a4c230d2434c1898e6493672c7546200532ccd3192f51638713e6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_68b00a779a4c230d2434c1898e6493672c7546200532ccd3192f51638713e6f8->leave($__internal_68b00a779a4c230d2434c1898e6493672c7546200532ccd3192f51638713e6f8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db024c64b8210832ffcc905642b4e44051519f333af919ea413087f7844422ab = $this->env->getExtension("native_profiler");
        $__internal_db024c64b8210832ffcc905642b4e44051519f333af919ea413087f7844422ab->enter($__internal_db024c64b8210832ffcc905642b4e44051519f333af919ea413087f7844422ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_db024c64b8210832ffcc905642b4e44051519f333af919ea413087f7844422ab->leave($__internal_db024c64b8210832ffcc905642b4e44051519f333af919ea413087f7844422ab_prof);

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
