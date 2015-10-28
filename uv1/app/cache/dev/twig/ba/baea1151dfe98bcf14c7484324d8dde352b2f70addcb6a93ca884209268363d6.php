<?php

/* AppBundle:Person:index.html.twig */
class __TwigTemplate_5b9464303ab911a5f583647240694026093b2e9f26c784bb49e123728be28491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Person:index.html.twig", 1);
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
        $__internal_e5e7130858c3b2fe24eb47c720037f797d5e5b5503334dcd3fdf3cfa024fda00 = $this->env->getExtension("native_profiler");
        $__internal_e5e7130858c3b2fe24eb47c720037f797d5e5b5503334dcd3fdf3cfa024fda00->enter($__internal_e5e7130858c3b2fe24eb47c720037f797d5e5b5503334dcd3fdf3cfa024fda00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e7130858c3b2fe24eb47c720037f797d5e5b5503334dcd3fdf3cfa024fda00->leave($__internal_e5e7130858c3b2fe24eb47c720037f797d5e5b5503334dcd3fdf3cfa024fda00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b237af2421dd780a55a862d59f519545230efe7e00ff0cc3b565dd8ef2eb035a = $this->env->getExtension("native_profiler");
        $__internal_b237af2421dd780a55a862d59f519545230efe7e00ff0cc3b565dd8ef2eb035a->enter($__internal_b237af2421dd780a55a862d59f519545230efe7e00ff0cc3b565dd8ef2eb035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Computers</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("person_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_b237af2421dd780a55a862d59f519545230efe7e00ff0cc3b565dd8ef2eb035a->leave($__internal_b237af2421dd780a55a862d59f519545230efe7e00ff0cc3b565dd8ef2eb035a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  97 => 34,  85 => 28,  79 => 25,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Computers</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('person_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.firstName }}</td>*/
/*                 <td>{{ entity.lastName }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('person_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('person_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('person_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
