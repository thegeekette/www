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
        $__internal_820128240cee466f4901a70fa3c2e5cddff6caefed19f32e336e394d94aa14ac = $this->env->getExtension("native_profiler");
        $__internal_820128240cee466f4901a70fa3c2e5cddff6caefed19f32e336e394d94aa14ac->enter($__internal_820128240cee466f4901a70fa3c2e5cddff6caefed19f32e336e394d94aa14ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_820128240cee466f4901a70fa3c2e5cddff6caefed19f32e336e394d94aa14ac->leave($__internal_820128240cee466f4901a70fa3c2e5cddff6caefed19f32e336e394d94aa14ac_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d58107c4ab11295b187f9c6ee3fe15dcda4bb429109297b2bf477bc128bae708 = $this->env->getExtension("native_profiler");
        $__internal_d58107c4ab11295b187f9c6ee3fe15dcda4bb429109297b2bf477bc128bae708->enter($__internal_d58107c4ab11295b187f9c6ee3fe15dcda4bb429109297b2bf477bc128bae708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formation Symfony";
        
        $__internal_d58107c4ab11295b187f9c6ee3fe15dcda4bb429109297b2bf477bc128bae708->leave($__internal_d58107c4ab11295b187f9c6ee3fe15dcda4bb429109297b2bf477bc128bae708_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa91b2cd93abf0d2ec76738977e6952d11e56bb74af955e3a8066f9e4bd64943 = $this->env->getExtension("native_profiler");
        $__internal_aa91b2cd93abf0d2ec76738977e6952d11e56bb74af955e3a8066f9e4bd64943->enter($__internal_aa91b2cd93abf0d2ec76738977e6952d11e56bb74af955e3a8066f9e4bd64943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aa91b2cd93abf0d2ec76738977e6952d11e56bb74af955e3a8066f9e4bd64943->leave($__internal_aa91b2cd93abf0d2ec76738977e6952d11e56bb74af955e3a8066f9e4bd64943_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8da71241355a6a7e1fe25b4b5a44032eefafc0eda7437d99f4b66bce05c60467 = $this->env->getExtension("native_profiler");
        $__internal_8da71241355a6a7e1fe25b4b5a44032eefafc0eda7437d99f4b66bce05c60467->enter($__internal_8da71241355a6a7e1fe25b4b5a44032eefafc0eda7437d99f4b66bce05c60467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 54
        echo "                        ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 54)->display($context);
        // line 55
        echo "                    ";
        
        $__internal_8da71241355a6a7e1fe25b4b5a44032eefafc0eda7437d99f4b66bce05c60467->leave($__internal_8da71241355a6a7e1fe25b4b5a44032eefafc0eda7437d99f4b66bce05c60467_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c1db81b14a73577a7bf387343c1bd83bb7f75c8be67045f889dc372d06ea5f = $this->env->getExtension("native_profiler");
        $__internal_22c1db81b14a73577a7bf387343c1bd83bb7f75c8be67045f889dc372d06ea5f->enter($__internal_22c1db81b14a73577a7bf387343c1bd83bb7f75c8be67045f889dc372d06ea5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22c1db81b14a73577a7bf387343c1bd83bb7f75c8be67045f889dc372d06ea5f->leave($__internal_22c1db81b14a73577a7bf387343c1bd83bb7f75c8be67045f889dc372d06ea5f_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f3fcc99a73c16763ed3f6d05c5f9a93b774ef89b86aa2a97b8fa90274bc5c0a = $this->env->getExtension("native_profiler");
        $__internal_9f3fcc99a73c16763ed3f6d05c5f9a93b774ef89b86aa2a97b8fa90274bc5c0a->enter($__internal_9f3fcc99a73c16763ed3f6d05c5f9a93b774ef89b86aa2a97b8fa90274bc5c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9f3fcc99a73c16763ed3f6d05c5f9a93b774ef89b86aa2a97b8fa90274bc5c0a->leave($__internal_9f3fcc99a73c16763ed3f6d05c5f9a93b774ef89b86aa2a97b8fa90274bc5c0a_prof);

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
