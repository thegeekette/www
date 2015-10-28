<?php

/* AppBundle:Computer:index.html.twig */
class __TwigTemplate_b31e8899c15d9361c32bcafc3413fd032ad2ceb0fc20901e7606d75cf0648f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Computer:index.html.twig", 1);
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
        $__internal_d0867e912ae99e937918c0a155f7bcfaf40b9bdad66c8e982b627c95302b8e0c = $this->env->getExtension("native_profiler");
        $__internal_d0867e912ae99e937918c0a155f7bcfaf40b9bdad66c8e982b627c95302b8e0c->enter($__internal_d0867e912ae99e937918c0a155f7bcfaf40b9bdad66c8e982b627c95302b8e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Computer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0867e912ae99e937918c0a155f7bcfaf40b9bdad66c8e982b627c95302b8e0c->leave($__internal_d0867e912ae99e937918c0a155f7bcfaf40b9bdad66c8e982b627c95302b8e0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bc4b363502f41ebbf297e41925db20098926c15af4f12f7ca592bcdb3ecd351 = $this->env->getExtension("native_profiler");
        $__internal_6bc4b363502f41ebbf297e41925db20098926c15af4f12f7ca592bcdb3ecd351->enter($__internal_6bc4b363502f41ebbf297e41925db20098926c15af4f12f7ca592bcdb3ecd351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"computer_list\">
    <h1>Computer list</h1>

    <table class=\"records_list\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Ip</th>
                <th>Enabled</th>
                <th>Person</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("computer_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "enabled", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "person", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "person", array()), "personne")) : ("personne")), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("computer_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("computer_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 38
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("computer_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    </div>
    ";
        
        $__internal_6bc4b363502f41ebbf297e41925db20098926c15af4f12f7ca592bcdb3ecd351->leave($__internal_6bc4b363502f41ebbf297e41925db20098926c15af4f12f7ca592bcdb3ecd351_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Computer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  107 => 38,  95 => 32,  89 => 29,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div id="computer_list">*/
/*     <h1>Computer list</h1>*/
/* */
/*     <table class="records_list" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Ip</th>*/
/*                 <th>Enabled</th>*/
/*                 <th>Person</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('computer_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.name }}</td>*/
/*                 <td>{{ entity.ip }}</td>*/
/*                 <td>{{ entity.enabled }}</td>*/
/*                 <td>{{ entity.person |default('personne')}}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('computer_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('computer_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('computer_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
