<?php

/* AppBundle:Person:show.html.twig */
class __TwigTemplate_1bfa3d79d064cd232d0236f73f011c445e64a21d6c853a585eec250894488428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Person:show.html.twig", 1);
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
        $__internal_53fa1739f236d357b2995b5ae651245be1854f2e6a5f124e44db406546cd7142 = $this->env->getExtension("native_profiler");
        $__internal_53fa1739f236d357b2995b5ae651245be1854f2e6a5f124e44db406546cd7142->enter($__internal_53fa1739f236d357b2995b5ae651245be1854f2e6a5f124e44db406546cd7142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53fa1739f236d357b2995b5ae651245be1854f2e6a5f124e44db406546cd7142->leave($__internal_53fa1739f236d357b2995b5ae651245be1854f2e6a5f124e44db406546cd7142_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0409a3213ad45e553e9c7ae160b15989c6efa985a51a97899bc8f6a05c35ac7 = $this->env->getExtension("native_profiler");
        $__internal_a0409a3213ad45e553e9c7ae160b15989c6efa985a51a97899bc8f6a05c35ac7->enter($__internal_a0409a3213ad45e553e9c7ae160b15989c6efa985a51a97899bc8f6a05c35ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_a0409a3213ad45e553e9c7ae160b15989c6efa985a51a97899bc8f6a05c35ac7->leave($__internal_a0409a3213ad45e553e9c7ae160b15989c6efa985a51a97899bc8f6a05c35ac7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Person:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ entity.firstName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ entity.lastName }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('person') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('person_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
