<?php

/* form_div_layout.html.twig */
class __TwigTemplate_8e3b0cea719390d14e7b9a130d4bccb49a7519436e2d60e1167a8dd37592947d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28f3e1397964add3ba3e9aa5b8bd3e3674aaac1737fda57d888974bc1ef3328f = $this->env->getExtension("native_profiler");
        $__internal_28f3e1397964add3ba3e9aa5b8bd3e3674aaac1737fda57d888974bc1ef3328f->enter($__internal_28f3e1397964add3ba3e9aa5b8bd3e3674aaac1737fda57d888974bc1ef3328f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('button_widget', $context, $blocks);
        // line 193
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 198
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 205
        $this->displayBlock('form_label', $context, $blocks);
        // line 227
        $this->displayBlock('button_label', $context, $blocks);
        // line 231
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 239
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 253
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 259
        $this->displayBlock('form', $context, $blocks);
        // line 265
        $this->displayBlock('form_start', $context, $blocks);
        // line 278
        $this->displayBlock('form_end', $context, $blocks);
        // line 285
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 289
        $this->displayBlock('form_errors', $context, $blocks);
        // line 299
        $this->displayBlock('form_rest', $context, $blocks);
        // line 306
        echo "
";
        // line 309
        $this->displayBlock('form_rows', $context, $blocks);
        // line 315
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_28f3e1397964add3ba3e9aa5b8bd3e3674aaac1737fda57d888974bc1ef3328f->leave($__internal_28f3e1397964add3ba3e9aa5b8bd3e3674aaac1737fda57d888974bc1ef3328f_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_0e6fa7d42342dedce9bcbf2f5d56e83e6b8ae785c8a59a9b63cacb5bbff82892 = $this->env->getExtension("native_profiler");
        $__internal_0e6fa7d42342dedce9bcbf2f5d56e83e6b8ae785c8a59a9b63cacb5bbff82892->enter($__internal_0e6fa7d42342dedce9bcbf2f5d56e83e6b8ae785c8a59a9b63cacb5bbff82892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_0e6fa7d42342dedce9bcbf2f5d56e83e6b8ae785c8a59a9b63cacb5bbff82892->leave($__internal_0e6fa7d42342dedce9bcbf2f5d56e83e6b8ae785c8a59a9b63cacb5bbff82892_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a0367d3386970a71d12791da4946e5e21915eecc5ef151830f3feaea10212e47 = $this->env->getExtension("native_profiler");
        $__internal_a0367d3386970a71d12791da4946e5e21915eecc5ef151830f3feaea10212e47->enter($__internal_a0367d3386970a71d12791da4946e5e21915eecc5ef151830f3feaea10212e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_a0367d3386970a71d12791da4946e5e21915eecc5ef151830f3feaea10212e47->leave($__internal_a0367d3386970a71d12791da4946e5e21915eecc5ef151830f3feaea10212e47_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_2da01cf824fb9351e85fbc2a6829851d9d7bb8e0fbea33917f69687e7cd351a6 = $this->env->getExtension("native_profiler");
        $__internal_2da01cf824fb9351e85fbc2a6829851d9d7bb8e0fbea33917f69687e7cd351a6->enter($__internal_2da01cf824fb9351e85fbc2a6829851d9d7bb8e0fbea33917f69687e7cd351a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_2da01cf824fb9351e85fbc2a6829851d9d7bb8e0fbea33917f69687e7cd351a6->leave($__internal_2da01cf824fb9351e85fbc2a6829851d9d7bb8e0fbea33917f69687e7cd351a6_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_bff82ba516d592ede6e0809b6cfd165daf36d0562b9c134c855acfdf15b61e60 = $this->env->getExtension("native_profiler");
        $__internal_bff82ba516d592ede6e0809b6cfd165daf36d0562b9c134c855acfdf15b61e60->enter($__internal_bff82ba516d592ede6e0809b6cfd165daf36d0562b9c134c855acfdf15b61e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_bff82ba516d592ede6e0809b6cfd165daf36d0562b9c134c855acfdf15b61e60->leave($__internal_bff82ba516d592ede6e0809b6cfd165daf36d0562b9c134c855acfdf15b61e60_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1a46e50c2f21aad5a5660abbf8b12d9d05721ac864b89102aac7bc14be0ffd0e = $this->env->getExtension("native_profiler");
        $__internal_1a46e50c2f21aad5a5660abbf8b12d9d05721ac864b89102aac7bc14be0ffd0e->enter($__internal_1a46e50c2f21aad5a5660abbf8b12d9d05721ac864b89102aac7bc14be0ffd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_1a46e50c2f21aad5a5660abbf8b12d9d05721ac864b89102aac7bc14be0ffd0e->leave($__internal_1a46e50c2f21aad5a5660abbf8b12d9d05721ac864b89102aac7bc14be0ffd0e_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_2ea5c356e9ac919e85a7e877da6792658664a6b56253bbf84dfc810b5abe9b1f = $this->env->getExtension("native_profiler");
        $__internal_2ea5c356e9ac919e85a7e877da6792658664a6b56253bbf84dfc810b5abe9b1f->enter($__internal_2ea5c356e9ac919e85a7e877da6792658664a6b56253bbf84dfc810b5abe9b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_2ea5c356e9ac919e85a7e877da6792658664a6b56253bbf84dfc810b5abe9b1f->leave($__internal_2ea5c356e9ac919e85a7e877da6792658664a6b56253bbf84dfc810b5abe9b1f_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bdddcce306800a3ef358d98138edd3e88c6953fdfacd8858a92cb22961f58f3c = $this->env->getExtension("native_profiler");
        $__internal_bdddcce306800a3ef358d98138edd3e88c6953fdfacd8858a92cb22961f58f3c->enter($__internal_bdddcce306800a3ef358d98138edd3e88c6953fdfacd8858a92cb22961f58f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_bdddcce306800a3ef358d98138edd3e88c6953fdfacd8858a92cb22961f58f3c->leave($__internal_bdddcce306800a3ef358d98138edd3e88c6953fdfacd8858a92cb22961f58f3c_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d187d24d45c1b8f62b0e91cab8a4166c37e067971363fc6a61712c182628e488 = $this->env->getExtension("native_profiler");
        $__internal_d187d24d45c1b8f62b0e91cab8a4166c37e067971363fc6a61712c182628e488->enter($__internal_d187d24d45c1b8f62b0e91cab8a4166c37e067971363fc6a61712c182628e488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_d187d24d45c1b8f62b0e91cab8a4166c37e067971363fc6a61712c182628e488->leave($__internal_d187d24d45c1b8f62b0e91cab8a4166c37e067971363fc6a61712c182628e488_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_243ed28a08ffe87c0ce30c58f9dcfcdc11fbce7fcbfcab32e3af4c227826f642 = $this->env->getExtension("native_profiler");
        $__internal_243ed28a08ffe87c0ce30c58f9dcfcdc11fbce7fcbfcab32e3af4c227826f642->enter($__internal_243ed28a08ffe87c0ce30c58f9dcfcdc11fbce7fcbfcab32e3af4c227826f642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_243ed28a08ffe87c0ce30c58f9dcfcdc11fbce7fcbfcab32e3af4c227826f642->leave($__internal_243ed28a08ffe87c0ce30c58f9dcfcdc11fbce7fcbfcab32e3af4c227826f642_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f56abe746878105a15b97e91fb585407e287966b2643dbc6e9bde2febe20c42b = $this->env->getExtension("native_profiler");
        $__internal_f56abe746878105a15b97e91fb585407e287966b2643dbc6e9bde2febe20c42b->enter($__internal_f56abe746878105a15b97e91fb585407e287966b2643dbc6e9bde2febe20c42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_f56abe746878105a15b97e91fb585407e287966b2643dbc6e9bde2febe20c42b->leave($__internal_f56abe746878105a15b97e91fb585407e287966b2643dbc6e9bde2febe20c42b_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_eece0dd5b5f0309eb885b0b59dcae6302d0f24320970f7981ffac0e2eee797c8 = $this->env->getExtension("native_profiler");
        $__internal_eece0dd5b5f0309eb885b0b59dcae6302d0f24320970f7981ffac0e2eee797c8->enter($__internal_eece0dd5b5f0309eb885b0b59dcae6302d0f24320970f7981ffac0e2eee797c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_eece0dd5b5f0309eb885b0b59dcae6302d0f24320970f7981ffac0e2eee797c8->leave($__internal_eece0dd5b5f0309eb885b0b59dcae6302d0f24320970f7981ffac0e2eee797c8_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8576d0a930ae9921bb69a458132865eec87962a9e7470d2fc1b0e49e3f9d042a = $this->env->getExtension("native_profiler");
        $__internal_8576d0a930ae9921bb69a458132865eec87962a9e7470d2fc1b0e49e3f9d042a->enter($__internal_8576d0a930ae9921bb69a458132865eec87962a9e7470d2fc1b0e49e3f9d042a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_8576d0a930ae9921bb69a458132865eec87962a9e7470d2fc1b0e49e3f9d042a->leave($__internal_8576d0a930ae9921bb69a458132865eec87962a9e7470d2fc1b0e49e3f9d042a_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5c8644bbd0caef71f758251f03f70b35c45ad16cff95c382b75957ae6498063a = $this->env->getExtension("native_profiler");
        $__internal_5c8644bbd0caef71f758251f03f70b35c45ad16cff95c382b75957ae6498063a->enter($__internal_5c8644bbd0caef71f758251f03f70b35c45ad16cff95c382b75957ae6498063a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_5c8644bbd0caef71f758251f03f70b35c45ad16cff95c382b75957ae6498063a->leave($__internal_5c8644bbd0caef71f758251f03f70b35c45ad16cff95c382b75957ae6498063a_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_eccaa5950411d7c8c194bc0c5b1138114c5ed679b39962799881ce0df08676ff = $this->env->getExtension("native_profiler");
        $__internal_eccaa5950411d7c8c194bc0c5b1138114c5ed679b39962799881ce0df08676ff->enter($__internal_eccaa5950411d7c8c194bc0c5b1138114c5ed679b39962799881ce0df08676ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_eccaa5950411d7c8c194bc0c5b1138114c5ed679b39962799881ce0df08676ff->leave($__internal_eccaa5950411d7c8c194bc0c5b1138114c5ed679b39962799881ce0df08676ff_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_0873bfe431a66a75cbe5eb64f8aea7c6b0ae29fb44409f5a57fc6143287c4b64 = $this->env->getExtension("native_profiler");
        $__internal_0873bfe431a66a75cbe5eb64f8aea7c6b0ae29fb44409f5a57fc6143287c4b64->enter($__internal_0873bfe431a66a75cbe5eb64f8aea7c6b0ae29fb44409f5a57fc6143287c4b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0873bfe431a66a75cbe5eb64f8aea7c6b0ae29fb44409f5a57fc6143287c4b64->leave($__internal_0873bfe431a66a75cbe5eb64f8aea7c6b0ae29fb44409f5a57fc6143287c4b64_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_c8e1777677b3901754a0ed3319d1bfda854da15900247d8f7bf2a5b2b7f4807e = $this->env->getExtension("native_profiler");
        $__internal_c8e1777677b3901754a0ed3319d1bfda854da15900247d8f7bf2a5b2b7f4807e->enter($__internal_c8e1777677b3901754a0ed3319d1bfda854da15900247d8f7bf2a5b2b7f4807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c8e1777677b3901754a0ed3319d1bfda854da15900247d8f7bf2a5b2b7f4807e->leave($__internal_c8e1777677b3901754a0ed3319d1bfda854da15900247d8f7bf2a5b2b7f4807e_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9451072ae1671d193bb4c9d6335be083ff7aad9ceec726cf11dcf46478264c24 = $this->env->getExtension("native_profiler");
        $__internal_9451072ae1671d193bb4c9d6335be083ff7aad9ceec726cf11dcf46478264c24->enter($__internal_9451072ae1671d193bb4c9d6335be083ff7aad9ceec726cf11dcf46478264c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_9451072ae1671d193bb4c9d6335be083ff7aad9ceec726cf11dcf46478264c24->leave($__internal_9451072ae1671d193bb4c9d6335be083ff7aad9ceec726cf11dcf46478264c24_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_3ddd4d9dafe80c9b2e0bb92f4c01f9bde4e6a9a9059b391dbcc5a123fc32f985 = $this->env->getExtension("native_profiler");
        $__internal_3ddd4d9dafe80c9b2e0bb92f4c01f9bde4e6a9a9059b391dbcc5a123fc32f985->enter($__internal_3ddd4d9dafe80c9b2e0bb92f4c01f9bde4e6a9a9059b391dbcc5a123fc32f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3ddd4d9dafe80c9b2e0bb92f4c01f9bde4e6a9a9059b391dbcc5a123fc32f985->leave($__internal_3ddd4d9dafe80c9b2e0bb92f4c01f9bde4e6a9a9059b391dbcc5a123fc32f985_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_cfaa01bb87cc68a28ba975652a2c199cb45902b0fb085d058bfeb8b431ab6d3d = $this->env->getExtension("native_profiler");
        $__internal_cfaa01bb87cc68a28ba975652a2c199cb45902b0fb085d058bfeb8b431ab6d3d->enter($__internal_cfaa01bb87cc68a28ba975652a2c199cb45902b0fb085d058bfeb8b431ab6d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cfaa01bb87cc68a28ba975652a2c199cb45902b0fb085d058bfeb8b431ab6d3d->leave($__internal_cfaa01bb87cc68a28ba975652a2c199cb45902b0fb085d058bfeb8b431ab6d3d_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f5f1d8028c01f013c6fe8e9731a95ea0ee07633df37934d950829574a0693a09 = $this->env->getExtension("native_profiler");
        $__internal_f5f1d8028c01f013c6fe8e9731a95ea0ee07633df37934d950829574a0693a09->enter($__internal_f5f1d8028c01f013c6fe8e9731a95ea0ee07633df37934d950829574a0693a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_f5f1d8028c01f013c6fe8e9731a95ea0ee07633df37934d950829574a0693a09->leave($__internal_f5f1d8028c01f013c6fe8e9731a95ea0ee07633df37934d950829574a0693a09_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_6d277adde13a35ff1abd0c76b6e2f3be82101ffb513870640e8fe724a7bf3f23 = $this->env->getExtension("native_profiler");
        $__internal_6d277adde13a35ff1abd0c76b6e2f3be82101ffb513870640e8fe724a7bf3f23->enter($__internal_6d277adde13a35ff1abd0c76b6e2f3be82101ffb513870640e8fe724a7bf3f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6d277adde13a35ff1abd0c76b6e2f3be82101ffb513870640e8fe724a7bf3f23->leave($__internal_6d277adde13a35ff1abd0c76b6e2f3be82101ffb513870640e8fe724a7bf3f23_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_e2df4ea5f4e93b31b5f2b9f7c46588c4e59e423ea94f8037c166c7c9d2e45509 = $this->env->getExtension("native_profiler");
        $__internal_e2df4ea5f4e93b31b5f2b9f7c46588c4e59e423ea94f8037c166c7c9d2e45509->enter($__internal_e2df4ea5f4e93b31b5f2b9f7c46588c4e59e423ea94f8037c166c7c9d2e45509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e2df4ea5f4e93b31b5f2b9f7c46588c4e59e423ea94f8037c166c7c9d2e45509->leave($__internal_e2df4ea5f4e93b31b5f2b9f7c46588c4e59e423ea94f8037c166c7c9d2e45509_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_5324e0c550f6ea4ea50e661d3c2e74b4cd4df679aa406e8357c4f09ca3ecfdbf = $this->env->getExtension("native_profiler");
        $__internal_5324e0c550f6ea4ea50e661d3c2e74b4cd4df679aa406e8357c4f09ca3ecfdbf->enter($__internal_5324e0c550f6ea4ea50e661d3c2e74b4cd4df679aa406e8357c4f09ca3ecfdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5324e0c550f6ea4ea50e661d3c2e74b4cd4df679aa406e8357c4f09ca3ecfdbf->leave($__internal_5324e0c550f6ea4ea50e661d3c2e74b4cd4df679aa406e8357c4f09ca3ecfdbf_prof);

    }

    // line 179
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bdbc6148449ff4329e591728bc4f8b3260ce6994767eca4b8bfacece065717f5 = $this->env->getExtension("native_profiler");
        $__internal_bdbc6148449ff4329e591728bc4f8b3260ce6994767eca4b8bfacece065717f5->enter($__internal_bdbc6148449ff4329e591728bc4f8b3260ce6994767eca4b8bfacece065717f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 180
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 181
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 182
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 183
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 184
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 187
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 190
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_bdbc6148449ff4329e591728bc4f8b3260ce6994767eca4b8bfacece065717f5->leave($__internal_bdbc6148449ff4329e591728bc4f8b3260ce6994767eca4b8bfacece065717f5_prof);

    }

    // line 193
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_3d228c66699966771fefc815cab10c9a18be6d4196c298c0e609becd5dc18589 = $this->env->getExtension("native_profiler");
        $__internal_3d228c66699966771fefc815cab10c9a18be6d4196c298c0e609becd5dc18589->enter($__internal_3d228c66699966771fefc815cab10c9a18be6d4196c298c0e609becd5dc18589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 195
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_3d228c66699966771fefc815cab10c9a18be6d4196c298c0e609becd5dc18589->leave($__internal_3d228c66699966771fefc815cab10c9a18be6d4196c298c0e609becd5dc18589_prof);

    }

    // line 198
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_9e5f7f0b8680842d09f027634416c650945e26dd2346fec2b027a5335852daf8 = $this->env->getExtension("native_profiler");
        $__internal_9e5f7f0b8680842d09f027634416c650945e26dd2346fec2b027a5335852daf8->enter($__internal_9e5f7f0b8680842d09f027634416c650945e26dd2346fec2b027a5335852daf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_9e5f7f0b8680842d09f027634416c650945e26dd2346fec2b027a5335852daf8->leave($__internal_9e5f7f0b8680842d09f027634416c650945e26dd2346fec2b027a5335852daf8_prof);

    }

    // line 205
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_82658f14c9f8f9f415122958fb63d5ee905e8e3341fc3c426f612611b7946b1d = $this->env->getExtension("native_profiler");
        $__internal_82658f14c9f8f9f415122958fb63d5ee905e8e3341fc3c426f612611b7946b1d->enter($__internal_82658f14c9f8f9f415122958fb63d5ee905e8e3341fc3c426f612611b7946b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 206
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 207
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 208
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 210
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 211
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 213
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 214
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 215
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 216
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 217
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 220
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 223
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_82658f14c9f8f9f415122958fb63d5ee905e8e3341fc3c426f612611b7946b1d->leave($__internal_82658f14c9f8f9f415122958fb63d5ee905e8e3341fc3c426f612611b7946b1d_prof);

    }

    // line 227
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_4dd812524470cb3ab685c1e7f3625fbab73709d02b6dfa9878dba6cd053a21e1 = $this->env->getExtension("native_profiler");
        $__internal_4dd812524470cb3ab685c1e7f3625fbab73709d02b6dfa9878dba6cd053a21e1->enter($__internal_4dd812524470cb3ab685c1e7f3625fbab73709d02b6dfa9878dba6cd053a21e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_4dd812524470cb3ab685c1e7f3625fbab73709d02b6dfa9878dba6cd053a21e1->leave($__internal_4dd812524470cb3ab685c1e7f3625fbab73709d02b6dfa9878dba6cd053a21e1_prof);

    }

    // line 231
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_096e9e828b061cc7913facc914b47bafcd7c94a99a6267379644a0c277920a90 = $this->env->getExtension("native_profiler");
        $__internal_096e9e828b061cc7913facc914b47bafcd7c94a99a6267379644a0c277920a90->enter($__internal_096e9e828b061cc7913facc914b47bafcd7c94a99a6267379644a0c277920a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 236
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_096e9e828b061cc7913facc914b47bafcd7c94a99a6267379644a0c277920a90->leave($__internal_096e9e828b061cc7913facc914b47bafcd7c94a99a6267379644a0c277920a90_prof);

    }

    // line 239
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9feec54b48fadae691681324b6670e3b672deacbbdd674bdd35909fa26e7a595 = $this->env->getExtension("native_profiler");
        $__internal_9feec54b48fadae691681324b6670e3b672deacbbdd674bdd35909fa26e7a595->enter($__internal_9feec54b48fadae691681324b6670e3b672deacbbdd674bdd35909fa26e7a595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 240
        echo "<div>";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 244
        echo "</div>";
        
        $__internal_9feec54b48fadae691681324b6670e3b672deacbbdd674bdd35909fa26e7a595->leave($__internal_9feec54b48fadae691681324b6670e3b672deacbbdd674bdd35909fa26e7a595_prof);

    }

    // line 247
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7263101e74f66f76e93cb670bfe53c37eae4a4ff242a8bd74cf94445a995e60c = $this->env->getExtension("native_profiler");
        $__internal_7263101e74f66f76e93cb670bfe53c37eae4a4ff242a8bd74cf94445a995e60c->enter($__internal_7263101e74f66f76e93cb670bfe53c37eae4a4ff242a8bd74cf94445a995e60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 248
        echo "<div>";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 250
        echo "</div>";
        
        $__internal_7263101e74f66f76e93cb670bfe53c37eae4a4ff242a8bd74cf94445a995e60c->leave($__internal_7263101e74f66f76e93cb670bfe53c37eae4a4ff242a8bd74cf94445a995e60c_prof);

    }

    // line 253
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_01540903133ded7aa317c3dbac9b81b42f5a64e4857ac09d619e4d25d2219763 = $this->env->getExtension("native_profiler");
        $__internal_01540903133ded7aa317c3dbac9b81b42f5a64e4857ac09d619e4d25d2219763->enter($__internal_01540903133ded7aa317c3dbac9b81b42f5a64e4857ac09d619e4d25d2219763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_01540903133ded7aa317c3dbac9b81b42f5a64e4857ac09d619e4d25d2219763->leave($__internal_01540903133ded7aa317c3dbac9b81b42f5a64e4857ac09d619e4d25d2219763_prof);

    }

    // line 259
    public function block_form($context, array $blocks = array())
    {
        $__internal_514742799369fc505217accf19323955a331e107ff7c58002de5dbf12773e72f = $this->env->getExtension("native_profiler");
        $__internal_514742799369fc505217accf19323955a331e107ff7c58002de5dbf12773e72f->enter($__internal_514742799369fc505217accf19323955a331e107ff7c58002de5dbf12773e72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 262
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_514742799369fc505217accf19323955a331e107ff7c58002de5dbf12773e72f->leave($__internal_514742799369fc505217accf19323955a331e107ff7c58002de5dbf12773e72f_prof);

    }

    // line 265
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2b44fd19d15b72f5895b686ae1d782773eb64d49acd4e94f7541a17c8467b999 = $this->env->getExtension("native_profiler");
        $__internal_2b44fd19d15b72f5895b686ae1d782773eb64d49acd4e94f7541a17c8467b999->enter($__internal_2b44fd19d15b72f5895b686ae1d782773eb64d49acd4e94f7541a17c8467b999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 266
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 267
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 268
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 270
            $context["form_method"] = "POST";
        }
        // line 272
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 273
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 274
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_2b44fd19d15b72f5895b686ae1d782773eb64d49acd4e94f7541a17c8467b999->leave($__internal_2b44fd19d15b72f5895b686ae1d782773eb64d49acd4e94f7541a17c8467b999_prof);

    }

    // line 278
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_1d016c1f81696e3ae8637c0ce0c6c83991b0d96146ecb524db231b2945d849f7 = $this->env->getExtension("native_profiler");
        $__internal_1d016c1f81696e3ae8637c0ce0c6c83991b0d96146ecb524db231b2945d849f7->enter($__internal_1d016c1f81696e3ae8637c0ce0c6c83991b0d96146ecb524db231b2945d849f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 279
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 280
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 282
        echo "</form>";
        
        $__internal_1d016c1f81696e3ae8637c0ce0c6c83991b0d96146ecb524db231b2945d849f7->leave($__internal_1d016c1f81696e3ae8637c0ce0c6c83991b0d96146ecb524db231b2945d849f7_prof);

    }

    // line 285
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_327fd74e1a5b036c99a5282afcd9e7e140c9ddb9f73cc7ff8726f4e3fe3327f4 = $this->env->getExtension("native_profiler");
        $__internal_327fd74e1a5b036c99a5282afcd9e7e140c9ddb9f73cc7ff8726f4e3fe3327f4->enter($__internal_327fd74e1a5b036c99a5282afcd9e7e140c9ddb9f73cc7ff8726f4e3fe3327f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 286
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_327fd74e1a5b036c99a5282afcd9e7e140c9ddb9f73cc7ff8726f4e3fe3327f4->leave($__internal_327fd74e1a5b036c99a5282afcd9e7e140c9ddb9f73cc7ff8726f4e3fe3327f4_prof);

    }

    // line 289
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cd25828d007bc1472fe39071ee054f9118afdfd73002e701ba129980653442fe = $this->env->getExtension("native_profiler");
        $__internal_cd25828d007bc1472fe39071ee054f9118afdfd73002e701ba129980653442fe->enter($__internal_cd25828d007bc1472fe39071ee054f9118afdfd73002e701ba129980653442fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 290
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 291
            echo "<ul>";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 293
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "</ul>";
        }
        
        $__internal_cd25828d007bc1472fe39071ee054f9118afdfd73002e701ba129980653442fe->leave($__internal_cd25828d007bc1472fe39071ee054f9118afdfd73002e701ba129980653442fe_prof);

    }

    // line 299
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_fc09ba863880246792148a0d892191cff7f7ceb4576f76a620554428977f606e = $this->env->getExtension("native_profiler");
        $__internal_fc09ba863880246792148a0d892191cff7f7ceb4576f76a620554428977f606e->enter($__internal_fc09ba863880246792148a0d892191cff7f7ceb4576f76a620554428977f606e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 302
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fc09ba863880246792148a0d892191cff7f7ceb4576f76a620554428977f606e->leave($__internal_fc09ba863880246792148a0d892191cff7f7ceb4576f76a620554428977f606e_prof);

    }

    // line 309
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_f3ef31456518407809a2685dfdf152ad1f319591173b6dd8787198ef38ee1175 = $this->env->getExtension("native_profiler");
        $__internal_f3ef31456518407809a2685dfdf152ad1f319591173b6dd8787198ef38ee1175->enter($__internal_f3ef31456518407809a2685dfdf152ad1f319591173b6dd8787198ef38ee1175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 311
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f3ef31456518407809a2685dfdf152ad1f319591173b6dd8787198ef38ee1175->leave($__internal_f3ef31456518407809a2685dfdf152ad1f319591173b6dd8787198ef38ee1175_prof);

    }

    // line 315
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_4b2c5f99172ee621a09e26c192bb188bea3b8f9b77c3032e00a663c24748d5df = $this->env->getExtension("native_profiler");
        $__internal_4b2c5f99172ee621a09e26c192bb188bea3b8f9b77c3032e00a663c24748d5df->enter($__internal_4b2c5f99172ee621a09e26c192bb188bea3b8f9b77c3032e00a663c24748d5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 316
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 317
        if (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")) &&  !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4b2c5f99172ee621a09e26c192bb188bea3b8f9b77c3032e00a663c24748d5df->leave($__internal_4b2c5f99172ee621a09e26c192bb188bea3b8f9b77c3032e00a663c24748d5df_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_2c5b3c085e84ea306cbac58a387b35bbfbe7bcf0d2ed365f8d54a1ab746dfafe = $this->env->getExtension("native_profiler");
        $__internal_2c5b3c085e84ea306cbac58a387b35bbfbe7bcf0d2ed365f8d54a1ab746dfafe->enter($__internal_2c5b3c085e84ea306cbac58a387b35bbfbe7bcf0d2ed365f8d54a1ab746dfafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2c5b3c085e84ea306cbac58a387b35bbfbe7bcf0d2ed365f8d54a1ab746dfafe->leave($__internal_2c5b3c085e84ea306cbac58a387b35bbfbe7bcf0d2ed365f8d54a1ab746dfafe_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_814a6122e8b287046dede266eb0fb5f950416959ab6c756cc42f8ae6cc68b3ff = $this->env->getExtension("native_profiler");
        $__internal_814a6122e8b287046dede266eb0fb5f950416959ab6c756cc42f8ae6cc68b3ff->enter($__internal_814a6122e8b287046dede266eb0fb5f950416959ab6c756cc42f8ae6cc68b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_814a6122e8b287046dede266eb0fb5f950416959ab6c756cc42f8ae6cc68b3ff->leave($__internal_814a6122e8b287046dede266eb0fb5f950416959ab6c756cc42f8ae6cc68b3ff_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_e48c5a02afa6e5c17b50bc3ceef8a3bde1562e7cc427798c90f75bde28a3cb72 = $this->env->getExtension("native_profiler");
        $__internal_e48c5a02afa6e5c17b50bc3ceef8a3bde1562e7cc427798c90f75bde28a3cb72->enter($__internal_e48c5a02afa6e5c17b50bc3ceef8a3bde1562e7cc427798c90f75bde28a3cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e48c5a02afa6e5c17b50bc3ceef8a3bde1562e7cc427798c90f75bde28a3cb72->leave($__internal_e48c5a02afa6e5c17b50bc3ceef8a3bde1562e7cc427798c90f75bde28a3cb72_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1267 => 368,  1265 => 367,  1260 => 366,  1258 => 365,  1253 => 364,  1251 => 363,  1249 => 362,  1245 => 361,  1239 => 360,  1224 => 355,  1222 => 354,  1217 => 353,  1215 => 352,  1210 => 351,  1208 => 350,  1206 => 349,  1202 => 348,  1193 => 347,  1187 => 346,  1172 => 341,  1170 => 340,  1165 => 339,  1163 => 338,  1158 => 337,  1156 => 336,  1154 => 335,  1150 => 334,  1144 => 333,  1138 => 332,  1123 => 327,  1121 => 326,  1116 => 325,  1114 => 324,  1109 => 323,  1107 => 322,  1105 => 321,  1101 => 320,  1097 => 319,  1093 => 318,  1089 => 317,  1083 => 316,  1077 => 315,  1066 => 311,  1062 => 310,  1056 => 309,  1044 => 302,  1042 => 301,  1038 => 300,  1032 => 299,  1024 => 295,  1016 => 293,  1012 => 292,  1010 => 291,  1008 => 290,  1002 => 289,  993 => 286,  987 => 285,  980 => 282,  977 => 280,  975 => 279,  969 => 278,  959 => 274,  957 => 273,  933 => 272,  930 => 270,  927 => 268,  925 => 267,  923 => 266,  917 => 265,  910 => 262,  908 => 261,  906 => 260,  900 => 259,  893 => 254,  887 => 253,  880 => 250,  878 => 249,  876 => 248,  870 => 247,  863 => 244,  861 => 243,  859 => 242,  857 => 241,  855 => 240,  849 => 239,  842 => 236,  836 => 231,  825 => 227,  802 => 223,  798 => 220,  795 => 217,  794 => 216,  793 => 215,  791 => 214,  789 => 213,  786 => 211,  784 => 210,  781 => 208,  779 => 207,  777 => 206,  771 => 205,  764 => 200,  762 => 199,  756 => 198,  749 => 195,  747 => 194,  741 => 193,  728 => 190,  724 => 187,  721 => 184,  720 => 183,  719 => 182,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 315,  144 => 309,  141 => 306,  139 => 299,  137 => 289,  135 => 285,  133 => 278,  131 => 265,  129 => 259,  127 => 253,  125 => 247,  123 => 239,  121 => 231,  119 => 227,  117 => 205,  115 => 198,  113 => 193,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_enctype -%}*/
/*     {% if multipart %}enctype="multipart/form-data"{% endif %}*/
/* {%- endblock form_enctype -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if read_only and attr.readonly is not defined %} readonly="readonly"{% endif -%}*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
