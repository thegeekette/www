<?php

/* AppBundle:Computer:show.html.twig */
class __TwigTemplate_e537961f8ff56758af6555fe96222d70e888333eb554cdf1c7cedbca375c9bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Computer:show.html.twig", 1);
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
        $__internal_c46897bdcd18e47ccc25e93312529cfc40bce98b65a49436a2ae84447bc779fb = $this->env->getExtension("native_profiler");
        $__internal_c46897bdcd18e47ccc25e93312529cfc40bce98b65a49436a2ae84447bc779fb->enter($__internal_c46897bdcd18e47ccc25e93312529cfc40bce98b65a49436a2ae84447bc779fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Computer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c46897bdcd18e47ccc25e93312529cfc40bce98b65a49436a2ae84447bc779fb->leave($__internal_c46897bdcd18e47ccc25e93312529cfc40bce98b65a49436a2ae84447bc779fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75c6ad9ec8e82960a62c4cb32eb328d4d291bc3aad95da3ac44984a6454875b7 = $this->env->getExtension("native_profiler");
        $__internal_75c6ad9ec8e82960a62c4cb32eb328d4d291bc3aad95da3ac44984a6454875b7->enter($__internal_75c6ad9ec8e82960a62c4cb32eb328d4d291bc3aad95da3ac44984a6454875b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Computer</h1>

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
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ip</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ip", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enabled</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("computer");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("computer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_75c6ad9ec8e82960a62c4cb32eb328d4d291bc3aad95da3ac44984a6454875b7->leave($__internal_75c6ad9ec8e82960a62c4cb32eb328d4d291bc3aad95da3ac44984a6454875b7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Computer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  87 => 34,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Computer</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ entity.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ip</th>*/
/*                 <td>{{ entity.ip }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Enabled</th>*/
/*                 <td>{{ entity.enabled }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('computer') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('computer_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
