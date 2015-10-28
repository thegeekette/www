<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_428c1df1ae3e5f9cbd60a65dc936d1f78988a68ee373d7b7dd70d116d392fe7c extends Twig_Template
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
        $__internal_09fbc9a52360bc075d13891dd3d8fcb0b9bc426f6ee369a89fc56579ce635e21 = $this->env->getExtension("native_profiler");
        $__internal_09fbc9a52360bc075d13891dd3d8fcb0b9bc426f6ee369a89fc56579ce635e21->enter($__internal_09fbc9a52360bc075d13891dd3d8fcb0b9bc426f6ee369a89fc56579ce635e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_09fbc9a52360bc075d13891dd3d8fcb0b9bc426f6ee369a89fc56579ce635e21->leave($__internal_09fbc9a52360bc075d13891dd3d8fcb0b9bc426f6ee369a89fc56579ce635e21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
