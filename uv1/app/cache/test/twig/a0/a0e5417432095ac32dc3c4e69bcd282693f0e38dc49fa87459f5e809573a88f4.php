<?php

/* ::base.html.twig */
class __TwigTemplate_8c2e4b1f7479c41475ff8552f5451084d14609814be7a8bf3b191cc15544937c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a2e14a688abc7e73e612d7ff8146fca08dadce909062d744a386fa1f0d0fa3f = $this->env->getExtension("native_profiler");
        $__internal_1a2e14a688abc7e73e612d7ff8146fca08dadce909062d744a386fa1f0d0fa3f->enter($__internal_1a2e14a688abc7e73e612d7ff8146fca08dadce909062d744a386fa1f0d0fa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>
        <meta charset=\"UTF-8\" />

        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>

        <nav class=\"navbar navbar-inverse navbar-fixed-top\">

            <div class=\"container\">

                <div class=\"navbar-header\">

                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                </div>

                <div id=\"navbar\" class=\"navbar-collapse collapse\">

                    <ul class=\"nav navbar-nav\">
                        <li class=\"download\">
                            <a href=\"package/uv1.zip\">
                                <span class=\"glyphicon glyphicon-download-alt\"></span>
                                Download sources
                            </a>
                        </li>
                    </ul>

                    ";
        // line 53
        $this->displayBlock('menu', $context, $blocks);
        // line 56
        echo "
                </div>

            </div>

        </nav>

        <div class=\"container theme-showcase\" role=\"main\">
            ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        </div>

        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "
    </body>

</html>";
        
        $__internal_1a2e14a688abc7e73e612d7ff8146fca08dadce909062d744a386fa1f0d0fa3f->leave($__internal_1a2e14a688abc7e73e612d7ff8146fca08dadce909062d744a386fa1f0d0fa3f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f5b8c4e8b222b26465e73ceb026dfa39f2925bdb430a2de1a121d86eb6fe562 = $this->env->getExtension("native_profiler");
        $__internal_9f5b8c4e8b222b26465e73ceb026dfa39f2925bdb430a2de1a121d86eb6fe562->enter($__internal_9f5b8c4e8b222b26465e73ceb026dfa39f2925bdb430a2de1a121d86eb6fe562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formation Symfony";
        
        $__internal_9f5b8c4e8b222b26465e73ceb026dfa39f2925bdb430a2de1a121d86eb6fe562->leave($__internal_9f5b8c4e8b222b26465e73ceb026dfa39f2925bdb430a2de1a121d86eb6fe562_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b146b1a62a9624e481087afdd65eee39fd292a6171c7c3fb5f000c28b40fa321 = $this->env->getExtension("native_profiler");
        $__internal_b146b1a62a9624e481087afdd65eee39fd292a6171c7c3fb5f000c28b40fa321->enter($__internal_b146b1a62a9624e481087afdd65eee39fd292a6171c7c3fb5f000c28b40fa321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18ee717_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18ee717_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/18ee717_part_1_main_1.css");
            // line 18
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "18ee717"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18ee717") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/18ee717.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "        ";
        
        $__internal_b146b1a62a9624e481087afdd65eee39fd292a6171c7c3fb5f000c28b40fa321->leave($__internal_b146b1a62a9624e481087afdd65eee39fd292a6171c7c3fb5f000c28b40fa321_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_014d7c40ce77c9df61ab3230a020685853077a0cde289a4ed4e206d065c4abc1 = $this->env->getExtension("native_profiler");
        $__internal_014d7c40ce77c9df61ab3230a020685853077a0cde289a4ed4e206d065c4abc1->enter($__internal_014d7c40ce77c9df61ab3230a020685853077a0cde289a4ed4e206d065c4abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 54
        echo "                        ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 54)->display($context);
        // line 55
        echo "                    ";
        
        $__internal_014d7c40ce77c9df61ab3230a020685853077a0cde289a4ed4e206d065c4abc1->leave($__internal_014d7c40ce77c9df61ab3230a020685853077a0cde289a4ed4e206d065c4abc1_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_28e9ea7fc29ba5ea2abdf4ab90b03e6b6ceea20f5ce4ff4043c9f396059aaccb = $this->env->getExtension("native_profiler");
        $__internal_28e9ea7fc29ba5ea2abdf4ab90b03e6b6ceea20f5ce4ff4043c9f396059aaccb->enter($__internal_28e9ea7fc29ba5ea2abdf4ab90b03e6b6ceea20f5ce4ff4043c9f396059aaccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28e9ea7fc29ba5ea2abdf4ab90b03e6b6ceea20f5ce4ff4043c9f396059aaccb->leave($__internal_28e9ea7fc29ba5ea2abdf4ab90b03e6b6ceea20f5ce4ff4043c9f396059aaccb_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0328785cf192a86f9b18298b64a0a81e1702341f7d356723f9e92c531d7e66ee = $this->env->getExtension("native_profiler");
        $__internal_0328785cf192a86f9b18298b64a0a81e1702341f7d356723f9e92c531d7e66ee->enter($__internal_0328785cf192a86f9b18298b64a0a81e1702341f7d356723f9e92c531d7e66ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
            ";
        // line 70
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "a2dc28e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a2dc28e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a2dc28e.js");
            // line 74
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 76
        echo "        ";
        
        $__internal_0328785cf192a86f9b18298b64a0a81e1702341f7d356723f9e92c531d7e66ee->leave($__internal_0328785cf192a86f9b18298b64a0a81e1702341f7d356723f9e92c531d7e66ee_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 76,  207 => 74,  202 => 70,  198 => 69,  193 => 68,  187 => 67,  176 => 64,  169 => 55,  166 => 54,  160 => 53,  153 => 20,  139 => 18,  135 => 14,  130 => 13,  124 => 12,  112 => 9,  102 => 77,  100 => 67,  96 => 65,  94 => 64,  84 => 56,  82 => 53,  48 => 22,  45 => 21,  43 => 12,  39 => 10,  37 => 9,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* */
/*         <title>*/
/*             {% block title %}Formation Symfony{% endblock %}*/
/*         </title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">*/
/*             {% stylesheets filter='lessphp, cssrewrite'*/
/*                 'bundles/app/less/*'*/
/*                 'bundles/park/less/*'*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/* */
/*             <div class="container">*/
/* */
/*                 <div class="navbar-header">*/
/* */
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/* */
/*                 </div>*/
/* */
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/* */
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="download">*/
/*                             <a href="package/uv1.zip">*/
/*                                 <span class="glyphicon glyphicon-download-alt"></span>*/
/*                                 Download sources*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     {% block menu %}*/
/*                         {% include '::menu.html.twig' %}*/
/*                     {% endblock %}*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </nav>*/
/* */
/*         <div class="container theme-showcase" role="main">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript" charset="utf-8"></script>*/
/*             {% javascripts*/
/*                 'bundles/app/js/*'*/
/*                 'bundles/park/js/*'*/
/*             %}*/
/*                 <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/* */
/* </html>*/
