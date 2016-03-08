<?php

/* FlobFoundationBundle:Form:foundation_form_div_layout.html.twig */
class __TwigTemplate_7250500dd989245170e916ebf2096ee4bd8c81a79aae6613c3a1de23ce6f9086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "FlobFoundationBundle:Form:foundation_form_div_layout.html.twig", 1);
        $this->blocks = array(
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'slider_widget' => array($this, 'block_slider_widget'),
            'switch_widget' => array($this, 'block_switch_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'button_group_widget' => array($this, 'block_button_group_widget'),
            'button_bar_widget' => array($this, 'block_button_bar_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_group_label' => array($this, 'block_button_group_label'),
            'button_bar_label' => array($this, 'block_button_bar_label'),
            'form_row' => array($this, 'block_form_row'),
            'money_row' => array($this, 'block_money_row'),
            'url_row' => array($this, 'block_url_row'),
            'percent_row' => array($this, 'block_percent_row'),
            'search_row' => array($this, 'block_search_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea618904befb644c293b0669377ade4d85929253ea4199e4426f429cedca7718 = $this->env->getExtension("native_profiler");
        $__internal_ea618904befb644c293b0669377ade4d85929253ea4199e4426f429cedca7718->enter($__internal_ea618904befb644c293b0669377ade4d85929253ea4199e4426f429cedca7718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FlobFoundationBundle:Form:foundation_form_div_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea618904befb644c293b0669377ade4d85929253ea4199e4426f429cedca7718->leave($__internal_ea618904befb644c293b0669377ade4d85929253ea4199e4426f429cedca7718_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_50b52c670230042b82144336b2b2ffe01ad8489649fd0c31b169f770069eceb0 = $this->env->getExtension("native_profiler");
        $__internal_50b52c670230042b82144336b2b2ffe01ad8489649fd0c31b169f770069eceb0->enter($__internal_50b52c670230042b82144336b2b2ffe01ad8489649fd0c31b169f770069eceb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        $context["prefix"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 7
        if ((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix"))) {
            // line 8
            echo "<div class=\"small-1 columns\">
            <span class=\"prefix\">";
            // line 9
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        </div>";
        }
        // line 12
        echo "<div class=\"small-11 columns\">";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>";
        // line 13
        if ( !(isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix"))) {
            // line 14
            echo "<div class=\"small-1 columns\">
            <span class=\"postfix\">";
            // line 15
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        </div>";
        }
        
        $__internal_50b52c670230042b82144336b2b2ffe01ad8489649fd0c31b169f770069eceb0->leave($__internal_50b52c670230042b82144336b2b2ffe01ad8489649fd0c31b169f770069eceb0_prof);

    }

    // line 20
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_4c16c1fd8df2e1ab8215edddeb3229ef977013a94bcaca7e46f07ac4ed2b722d = $this->env->getExtension("native_profiler");
        $__internal_4c16c1fd8df2e1ab8215edddeb3229ef977013a94bcaca7e46f07ac4ed2b722d->enter($__internal_4c16c1fd8df2e1ab8215edddeb3229ef977013a94bcaca7e46f07ac4ed2b722d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 21
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 22
        echo "<div class=\"small-1 columns\"><span class=\"prefix\">http://</span></div>
    <div class=\"small-11 columns\">";
        // line 23
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>";
        
        $__internal_4c16c1fd8df2e1ab8215edddeb3229ef977013a94bcaca7e46f07ac4ed2b722d->leave($__internal_4c16c1fd8df2e1ab8215edddeb3229ef977013a94bcaca7e46f07ac4ed2b722d_prof);

    }

    // line 26
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_44574e00b86939e0ad07faa671dad21fc0efd6587a931c63724df06efb7086f9 = $this->env->getExtension("native_profiler");
        $__internal_44574e00b86939e0ad07faa671dad21fc0efd6587a931c63724df06efb7086f9->enter($__internal_44574e00b86939e0ad07faa671dad21fc0efd6587a931c63724df06efb7086f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 27
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 28
        echo "<div class=\"small-11 columns\">";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>
    <div class=\"small-1 columns\"><span class=\"postfix\">%</span></div>";
        
        $__internal_44574e00b86939e0ad07faa671dad21fc0efd6587a931c63724df06efb7086f9->leave($__internal_44574e00b86939e0ad07faa671dad21fc0efd6587a931c63724df06efb7086f9_prof);

    }

    // line 32
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_567e28d5ec426cf85354324f05253f948c99f74333a9ee60b416e0fb327762c4 = $this->env->getExtension("native_profiler");
        $__internal_567e28d5ec426cf85354324f05253f948c99f74333a9ee60b416e0fb327762c4->enter($__internal_567e28d5ec426cf85354324f05253f948c99f74333a9ee60b416e0fb327762c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 33
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 34
        echo "<div class=\"small-11 columns\">";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>
    <div class=\"small-1 columns\"><span class=\"postfix\"><i class=\"fa fa-search\"></i></span></div>";
        
        $__internal_567e28d5ec426cf85354324f05253f948c99f74333a9ee60b416e0fb327762c4->leave($__internal_567e28d5ec426cf85354324f05253f948c99f74333a9ee60b416e0fb327762c4_prof);

    }

    // line 38
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_670c90413cfa93767894ae2e2e7e80eed3033dbea50041f88f3d37ea30b7e107 = $this->env->getExtension("native_profiler");
        $__internal_670c90413cfa93767894ae2e2e7e80eed3033dbea50041f88f3d37ea30b7e107->enter($__internal_670c90413cfa93767894ae2e2e7e80eed3033dbea50041f88f3d37ea30b7e107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 39
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 40
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 42
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(("row " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
            // line 43
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 44
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"small-4 medium-2 columns\">" .             // line 45
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"small-4 medium-2 columns\">" .             // line 46
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"small-4 medium-2 columns\">" .             // line 47
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 49
            echo "<div class=\"columns end\"></div>
        </div>";
        }
        
        $__internal_670c90413cfa93767894ae2e2e7e80eed3033dbea50041f88f3d37ea30b7e107->leave($__internal_670c90413cfa93767894ae2e2e7e80eed3033dbea50041f88f3d37ea30b7e107_prof);

    }

    // line 54
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_02af20b35af56ae7a6c4afcf518db932bc4c8bbc97641c6b2c351ed221cda7df = $this->env->getExtension("native_profiler");
        $__internal_02af20b35af56ae7a6c4afcf518db932bc4c8bbc97641c6b2c351ed221cda7df->enter($__internal_02af20b35af56ae7a6c4afcf518db932bc4c8bbc97641c6b2c351ed221cda7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 55
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 56
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 58
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(("row " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
            // line 60
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"small-2 columns\">";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            echo "</div>
            ";
            // line 62
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 63
                echo "<div class=\"small-2 columns\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "</div>";
            }
            // line 65
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 66
                echo "<div class=\"small-2 columns\">: ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "</div>";
            }
            // line 68
            echo "            <div class=\"columns end\"></div>
        </div>";
        }
        
        $__internal_02af20b35af56ae7a6c4afcf518db932bc4c8bbc97641c6b2c351ed221cda7df->leave($__internal_02af20b35af56ae7a6c4afcf518db932bc4c8bbc97641c6b2c351ed221cda7df_prof);

    }

    // line 73
    public function block_slider_widget($context, array $blocks = array())
    {
        $__internal_673f41f94ea1693527395529c684de4d2133b62623ff3ab6b19ce641008713f1 = $this->env->getExtension("native_profiler");
        $__internal_673f41f94ea1693527395529c684de4d2133b62623ff3ab6b19ce641008713f1->enter($__internal_673f41f94ea1693527395529c684de4d2133b62623ff3ab6b19ce641008713f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider_widget"));

        // line 74
        $context["slideClass"] = "range-slider";
        // line 75
        echo "    ";
        if (array_key_exists("vertical", $context)) {
            // line 76
            echo "        ";
            $context["slideClass"] = ((isset($context["slideClass"]) ? $context["slideClass"] : $this->getContext($context, "slideClass")) . " vertical-range");
            // line 77
            echo "    ";
        }
        // line 78
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((((isset($context["slideClass"]) ? $context["slideClass"] : $this->getContext($context, "slideClass")) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
        // line 79
        echo "    <div data-slider=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" data-options=\"start: ";
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "; end: ";
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "; step: ";
        echo twig_escape_filter($this->env, (isset($context["step"]) ? $context["step"] : $this->getContext($context, "step")), "html", null, true);
        echo ";";
        if (array_key_exists("vertical", $context)) {
            echo " vertical: true;";
        }
        echo "\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <span class=\"range-slider-handle\"></span>
        <span class=\"range-slider-active-segment\"></span>
        <input type=\"hidden\" ";
        // line 82
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
    </div>";
        
        $__internal_673f41f94ea1693527395529c684de4d2133b62623ff3ab6b19ce641008713f1->leave($__internal_673f41f94ea1693527395529c684de4d2133b62623ff3ab6b19ce641008713f1_prof);

    }

    // line 86
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_16a49efd9a533a685ccf3b035eee11c0bf5ab99d538b9b51ebb068c10237b00b = $this->env->getExtension("native_profiler");
        $__internal_16a49efd9a533a685ccf3b035eee11c0bf5ab99d538b9b51ebb068c10237b00b->enter($__internal_16a49efd9a533a685ccf3b035eee11c0bf5ab99d538b9b51ebb068c10237b00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 87
        $context["is_switch"] = true;
        // line 88
        echo "    ";
        $this->displayBlock("choice_widget_expanded", $context, $blocks);
        
        $__internal_16a49efd9a533a685ccf3b035eee11c0bf5ab99d538b9b51ebb068c10237b00b->leave($__internal_16a49efd9a533a685ccf3b035eee11c0bf5ab99d538b9b51ebb068c10237b00b_prof);

    }

    // line 91
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_94c235903354503c1cf37a0da9da9a614a0ede91c61bd731d593119aeda4d9c8 = $this->env->getExtension("native_profiler");
        $__internal_94c235903354503c1cf37a0da9da9a614a0ede91c61bd731d593119aeda4d9c8->enter($__internal_94c235903354503c1cf37a0da9da9a614a0ede91c61bd731d593119aeda4d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 92
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 94
            if (array_key_exists("is_switch", $context)) {
                // line 95
                echo "<div class=\"switch-wrapper\">
                    <div class=\"switch left\">";
                // line 97
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                // line 98
                echo "<label for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "id", array()), "html", null, true);
                echo "\"></label>
                    </div>";
                // line 100
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
                // line 101
                echo "<div class=\"clearfix\"></div>
                </div>";
            } else {
                // line 104
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                // line 105
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "</div>
";
        
        $__internal_94c235903354503c1cf37a0da9da9a614a0ede91c61bd731d593119aeda4d9c8->leave($__internal_94c235903354503c1cf37a0da9da9a614a0ede91c61bd731d593119aeda4d9c8_prof);

    }

    // line 111
    public function block_button_group_widget($context, array $blocks = array())
    {
        $__internal_8cb0eb3f6cad6e835cffe7ab67c471ce5747a7f64a4f96834c4a76cc96b6e77e = $this->env->getExtension("native_profiler");
        $__internal_8cb0eb3f6cad6e835cffe7ab67c471ce5747a7f64a4f96834c4a76cc96b6e77e->enter($__internal_8cb0eb3f6cad6e835cffe7ab67c471ce5747a7f64a4f96834c4a76cc96b6e77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_group_widget"));

        // line 112
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(("button-group " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
        // line 113
        echo "    <ul";
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
        echo ">
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 115
            echo "            <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "    </ul>";
        
        $__internal_8cb0eb3f6cad6e835cffe7ab67c471ce5747a7f64a4f96834c4a76cc96b6e77e->leave($__internal_8cb0eb3f6cad6e835cffe7ab67c471ce5747a7f64a4f96834c4a76cc96b6e77e_prof);

    }

    // line 120
    public function block_button_bar_widget($context, array $blocks = array())
    {
        $__internal_856588ea2e291724db98f355d2da540d440a75925a9ceb096b8a02fec3d879c9 = $this->env->getExtension("native_profiler");
        $__internal_856588ea2e291724db98f355d2da540d440a75925a9ceb096b8a02fec3d879c9->enter($__internal_856588ea2e291724db98f355d2da540d440a75925a9ceb096b8a02fec3d879c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_bar_widget"));

        // line 121
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(("button-bar " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
        // line 122
        echo "    <div";
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
        echo ">
        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button_group"]) {
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button_group"], 'widget');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </div>";
        
        $__internal_856588ea2e291724db98f355d2da540d440a75925a9ceb096b8a02fec3d879c9->leave($__internal_856588ea2e291724db98f355d2da540d440a75925a9ceb096b8a02fec3d879c9_prof);

    }

    // line 131
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_44de38a789233ee45f4374c5759095beded79c8aa1f2dd7ef0482f6c0198ec24 = $this->env->getExtension("native_profiler");
        $__internal_44de38a789233ee45f4374c5759095beded79c8aa1f2dd7ef0482f6c0198ec24->enter($__internal_44de38a789233ee45f4374c5759095beded79c8aa1f2dd7ef0482f6c0198ec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 132
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 133
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(("error " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))))));
            // line 134
            echo "    ";
        }
        // line 135
        echo "    ";
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_44de38a789233ee45f4374c5759095beded79c8aa1f2dd7ef0482f6c0198ec24->leave($__internal_44de38a789233ee45f4374c5759095beded79c8aa1f2dd7ef0482f6c0198ec24_prof);

    }

    // line 138
    public function block_button_group_label($context, array $blocks = array())
    {
        $__internal_58fab2586f7ef9e8ed35467afecdacaec6cd896ca7d86cabbdb4c9b207f069cc = $this->env->getExtension("native_profiler");
        $__internal_58fab2586f7ef9e8ed35467afecdacaec6cd896ca7d86cabbdb4c9b207f069cc->enter($__internal_58fab2586f7ef9e8ed35467afecdacaec6cd896ca7d86cabbdb4c9b207f069cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_group_label"));

        
        $__internal_58fab2586f7ef9e8ed35467afecdacaec6cd896ca7d86cabbdb4c9b207f069cc->leave($__internal_58fab2586f7ef9e8ed35467afecdacaec6cd896ca7d86cabbdb4c9b207f069cc_prof);

    }

    // line 140
    public function block_button_bar_label($context, array $blocks = array())
    {
        $__internal_470ee5aa07e111551d3e8c7029953ce5e3efc0bca8b942c03e8f069b91bb0b35 = $this->env->getExtension("native_profiler");
        $__internal_470ee5aa07e111551d3e8c7029953ce5e3efc0bca8b942c03e8f069b91bb0b35->enter($__internal_470ee5aa07e111551d3e8c7029953ce5e3efc0bca8b942c03e8f069b91bb0b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_bar_label"));

        
        $__internal_470ee5aa07e111551d3e8c7029953ce5e3efc0bca8b942c03e8f069b91bb0b35->leave($__internal_470ee5aa07e111551d3e8c7029953ce5e3efc0bca8b942c03e8f069b91bb0b35_prof);

    }

    // line 144
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a3cf5348899e6e479ae796d0925407854c0cf8112ef85a96628ddbafea05f30e = $this->env->getExtension("native_profiler");
        $__internal_a3cf5348899e6e479ae796d0925407854c0cf8112ef85a96628ddbafea05f30e->enter($__internal_a3cf5348899e6e479ae796d0925407854c0cf8112ef85a96628ddbafea05f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 145
        $context["class_row"] = twig_array_merge(array(0 => "row"), ((array_key_exists("class_row", $context)) ? (_twig_default_filter((isset($context["class_row"]) ? $context["class_row"] : $this->getContext($context, "class_row")), array())) : (array())));
        // line 146
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 147
            $context["class_row"] = twig_array_merge(array(0 => "error"), (isset($context["class_row"]) ? $context["class_row"] : $this->getContext($context, "class_row")));
            // line 148
            echo "    ";
        }
        // line 149
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["class_row"]) ? $context["class_row"] : $this->getContext($context, "class_row")), " "), "html", null, true);
        echo "\">
        <div class=\"small-12 columns\">";
        // line 151
        if (array_key_exists("collapse_row", $context)) {
            echo "<div class=\"row collapse\">";
        }
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 155
        if (array_key_exists("collapse_row", $context)) {
            echo "</div>";
        }
        // line 156
        echo "</div>
    </div>";
        
        $__internal_a3cf5348899e6e479ae796d0925407854c0cf8112ef85a96628ddbafea05f30e->leave($__internal_a3cf5348899e6e479ae796d0925407854c0cf8112ef85a96628ddbafea05f30e_prof);

    }

    // line 160
    public function block_money_row($context, array $blocks = array())
    {
        $__internal_a55cb991a6e000ea804d6b35ff94b95139cbd0322f4d448b9fecf4fa5c257edc = $this->env->getExtension("native_profiler");
        $__internal_a55cb991a6e000ea804d6b35ff94b95139cbd0322f4d448b9fecf4fa5c257edc->enter($__internal_a55cb991a6e000ea804d6b35ff94b95139cbd0322f4d448b9fecf4fa5c257edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_row"));

        // line 161
        $context["collapse_row"] = true;
        // line 162
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a55cb991a6e000ea804d6b35ff94b95139cbd0322f4d448b9fecf4fa5c257edc->leave($__internal_a55cb991a6e000ea804d6b35ff94b95139cbd0322f4d448b9fecf4fa5c257edc_prof);

    }

    // line 165
    public function block_url_row($context, array $blocks = array())
    {
        $__internal_5c84579eacd723a0f9f3d2390314e4432220123451875fbecc253b5affcba452 = $this->env->getExtension("native_profiler");
        $__internal_5c84579eacd723a0f9f3d2390314e4432220123451875fbecc253b5affcba452->enter($__internal_5c84579eacd723a0f9f3d2390314e4432220123451875fbecc253b5affcba452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_row"));

        // line 166
        $context["collapse_row"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5c84579eacd723a0f9f3d2390314e4432220123451875fbecc253b5affcba452->leave($__internal_5c84579eacd723a0f9f3d2390314e4432220123451875fbecc253b5affcba452_prof);

    }

    // line 170
    public function block_percent_row($context, array $blocks = array())
    {
        $__internal_a2dc48a72058f601cac7c26f1664bacab3ea61a0d6f77700eef27cdd962a95b8 = $this->env->getExtension("native_profiler");
        $__internal_a2dc48a72058f601cac7c26f1664bacab3ea61a0d6f77700eef27cdd962a95b8->enter($__internal_a2dc48a72058f601cac7c26f1664bacab3ea61a0d6f77700eef27cdd962a95b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_row"));

        // line 171
        $context["collapse_row"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a2dc48a72058f601cac7c26f1664bacab3ea61a0d6f77700eef27cdd962a95b8->leave($__internal_a2dc48a72058f601cac7c26f1664bacab3ea61a0d6f77700eef27cdd962a95b8_prof);

    }

    // line 175
    public function block_search_row($context, array $blocks = array())
    {
        $__internal_47ee822b8844027bbe3102fb35ba9c560ced96abd24490c2367d61cba151a0d2 = $this->env->getExtension("native_profiler");
        $__internal_47ee822b8844027bbe3102fb35ba9c560ced96abd24490c2367d61cba151a0d2->enter($__internal_47ee822b8844027bbe3102fb35ba9c560ced96abd24490c2367d61cba151a0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_row"));

        // line 176
        $context["collapse_row"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_47ee822b8844027bbe3102fb35ba9c560ced96abd24490c2367d61cba151a0d2->leave($__internal_47ee822b8844027bbe3102fb35ba9c560ced96abd24490c2367d61cba151a0d2_prof);

    }

    // line 180
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ccc433e3c5b82895335c5cf761dd549093c08d5b7206d9b6d98ae9bd59e8cc0e = $this->env->getExtension("native_profiler");
        $__internal_ccc433e3c5b82895335c5cf761dd549093c08d5b7206d9b6d98ae9bd59e8cc0e->enter($__internal_ccc433e3c5b82895335c5cf761dd549093c08d5b7206d9b6d98ae9bd59e8cc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 181
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 182
            if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
                // line 183
                echo "<div data-alert class=\"alert-box alert form-global-error\">
                <ul>";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 186
                    echo "<li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "</ul>
            </div>
        ";
            } else {
                // line 191
                echo "            <small class=\"error\">";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "
                    ";
                    // line 194
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "</small>";
            }
        }
        
        $__internal_ccc433e3c5b82895335c5cf761dd549093c08d5b7206d9b6d98ae9bd59e8cc0e->leave($__internal_ccc433e3c5b82895335c5cf761dd549093c08d5b7206d9b6d98ae9bd59e8cc0e_prof);

    }

    public function getTemplateName()
    {
        return "FlobFoundationBundle:Form:foundation_form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 196,  622 => 194,  618 => 193,  601 => 192,  599 => 191,  594 => 188,  586 => 186,  582 => 185,  579 => 183,  577 => 182,  575 => 181,  569 => 180,  562 => 177,  560 => 176,  554 => 175,  547 => 172,  545 => 171,  539 => 170,  532 => 167,  530 => 166,  524 => 165,  517 => 162,  515 => 161,  509 => 160,  501 => 156,  497 => 155,  495 => 154,  493 => 153,  491 => 152,  487 => 151,  482 => 149,  479 => 148,  477 => 147,  474 => 146,  472 => 145,  466 => 144,  455 => 140,  444 => 138,  436 => 135,  433 => 134,  431 => 133,  429 => 132,  423 => 131,  416 => 126,  410 => 124,  406 => 123,  390 => 122,  388 => 121,  382 => 120,  375 => 117,  366 => 115,  362 => 114,  346 => 113,  344 => 112,  338 => 111,  330 => 108,  323 => 105,  321 => 104,  317 => 101,  315 => 100,  310 => 98,  308 => 97,  305 => 95,  303 => 94,  299 => 93,  295 => 92,  289 => 91,  281 => 88,  279 => 87,  273 => 86,  264 => 82,  245 => 79,  242 => 78,  239 => 77,  236 => 76,  233 => 75,  231 => 74,  225 => 73,  216 => 68,  211 => 66,  208 => 65,  203 => 63,  201 => 62,  197 => 61,  192 => 60,  189 => 59,  187 => 58,  184 => 56,  182 => 55,  176 => 54,  167 => 49,  165 => 47,  164 => 46,  163 => 45,  162 => 44,  158 => 43,  156 => 42,  153 => 40,  151 => 39,  145 => 38,  135 => 34,  133 => 33,  127 => 32,  117 => 28,  115 => 27,  109 => 26,  101 => 23,  98 => 22,  96 => 21,  90 => 20,  80 => 15,  77 => 14,  75 => 13,  71 => 12,  66 => 9,  63 => 8,  61 => 7,  59 => 6,  53 => 5,  11 => 1,);
    }
}
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block money_widget -%}*/
/*     {%- set prefix = '{{' == money_pattern[0:2] -%}*/
/*     {%- if prefix -%}*/
/*         <div class="small-1 columns">*/
/*             <span class="prefix">{{ money_pattern|replace({'{{ widget }}':''}) }}</span>*/
/*         </div>*/
/*     {%- endif -%}*/
/*     <div class="small-11 columns">{{ block('form_widget_simple') }}</div>*/
/*     {%- if not prefix -%}*/
/*         <div class="small-1 columns">*/
/*             <span class="postfix">{{ money_pattern|replace({'{{ widget }}':''}) }}</span>*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock money_widget %}*/
/* */
/* {% block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     <div class="small-1 columns"><span class="prefix">http://</span></div>*/
/*     <div class="small-11 columns">{{ block('form_widget_simple') }}</div>*/
/* {%- endblock url_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <div class="small-11 columns">{{ block('form_widget_simple') }}</div>*/
/*     <div class="small-1 columns"><span class="postfix">%</span></div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     <div class="small-11 columns">{{ block('form_widget_simple') }}</div>*/
/*     <div class="small-1 columns"><span class="postfix"><i class="fa fa-search"></i></span></div>*/
/* {%- endblock search_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({'class': ('row ' ~ attr.class|default(''))|trim }) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  '<div class="small-4 medium-2 columns">' ~ form_widget(form.year) ~ '</div>',*/
/*                 '{{ month }}': '<div class="small-4 medium-2 columns">' ~ form_widget(form.month) ~ '</div>',*/
/*                 '{{ day }}':   '<div class="small-4 medium-2 columns">' ~ form_widget(form.day) ~ '</div>',*/
/*             })|raw -}}*/
/*             <div class="columns end"></div>*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} %}*/
/*         {% set attr = attr|merge({'class': ('row ' ~ attr.class|default(''))|trim }) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             <div class="small-2 columns">{{ form_widget(form.hour, vars) }}</div>*/
/*             {% if with_minutes -%}*/
/*                 <div class="small-2 columns">{{ form_widget(form.minute, vars) }}</div>*/
/*             {%- endif %}*/
/*             {% if with_seconds -%}*/
/*                 <div class="small-2 columns">: {{ form_widget(form.second, vars) }}</div>*/
/*             {%- endif %}*/
/*             <div class="columns end"></div>*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block slider_widget -%}*/
/*     {% set slideClass = 'range-slider' %}*/
/*     {% if vertical is defined %}*/
/*         {% set slideClass = slideClass ~ ' vertical-range' %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (slideClass ~ ' ' ~ attr.class|default(''))|trim }) %}*/
/*     <div data-slider="{{ value }}" data-options="start: {{ start }}; end: {{ end }}; step: {{ step }};{% if vertical is defined %} vertical: true;{% endif %}" {{ block('widget_container_attributes') }}>*/
/*         <span class="range-slider-handle"></span>*/
/*         <span class="range-slider-active-segment"></span>*/
/*         <input type="hidden" {{ block('widget_attributes') }}/>*/
/*     </div>*/
/* {%- endblock slider_widget %}*/
/* */
/* {% block switch_widget -%}*/
/*     {% set is_switch = true %}*/
/*     {{ block('choice_widget_expanded') }}*/
/* {%- endblock switch_widget %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- for child in form %}*/
/*             {%- if is_switch is defined -%}*/
/*                 <div class="switch-wrapper">*/
/*                     <div class="switch left">*/
/*                         {{- form_widget(child) -}}*/
/*                         <label for="{{ child.vars.id }}"></label>*/
/*                     </div>*/
/*                     {{- form_label(child) -}}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             {%- else -%}*/
/*                 {{- form_widget(child) -}}*/
/*                 {{- form_label(child) -}}*/
/*             {%- endif -%}*/
/*         {% endfor -%}*/
/*     </div>*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block button_group_widget -%}*/
/*     {% set attr = attr|merge({'class': ('button-group ' ~ attr.class|default(''))|trim }) %}*/
/*     <ul{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*         {% for button in form.children %}*/
/*             <li>{{- form_widget(button) -}}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {%- endblock %}*/
/* */
/* {% block button_bar_widget -%}*/
/*     {% set attr = attr|merge({'class': ('button-bar ' ~ attr.class|default(''))|trim }) %}*/
/*     <div{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*         {% for button_group in form.children %}*/
/*             {{- form_widget(button_group) -}}*/
/*         {% endfor %}*/
/*     </div>*/
/* {%- endblock %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set label_attr = label_attr|merge({'class': ('error ' ~ label_attr.class|default(''))|trim}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {%- endblock form_label %}*/
/* */
/* {% block button_group_label -%}{%- endblock %}*/
/* */
/* {% block button_bar_label -%}{%- endblock %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     {% set class_row = ['row']|merge(class_row|default([])) %}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set class_row = ['error']|merge(class_row) %}*/
/*     {% endif %}*/
/*     <div class="{{ class_row|join(' ') }}">*/
/*         <div class="small-12 columns">*/
/*             {%- if collapse_row is defined %}<div class="row collapse">{% endif -%}*/
/*             {{- form_label(form) -}}*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*             {%- if collapse_row is defined %}</div>{% endif -%}*/
/*         </div>*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block money_row -%}*/
/*     {%- set collapse_row = true -%}*/
/*     {{ block('form_row') }}*/
/* {%- endblock money_row %}*/
/* */
/* {% block url_row -%}*/
/*     {%- set collapse_row = true -%}*/
/*     {{ block('form_row') }}*/
/* {%- endblock url_row %}*/
/* */
/* {% block percent_row -%}*/
/*     {%- set collapse_row = true -%}*/
/*     {{ block('form_row') }}*/
/* {%- endblock percent_row %}*/
/* */
/* {% block search_row -%}*/
/*     {%- set collapse_row = true -%}*/
/*     {{ block('form_row') }}*/
/* {%- endblock search_row %}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {%- if form.parent is empty -%}*/
/*             <div data-alert class="alert-box alert form-global-error">*/
/*                 <ul>*/
/*                     {%- for error in errors -%}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {%- endfor -%}*/
/*                 </ul>*/
/*             </div>*/
/*         {% else %}*/
/*             <small class="error">*/
/*                 {%- for error in errors -%}*/
/*                     {{ error.message }}*/
/*                     {% if not loop.last %}, {% endif %}*/
/*                 {%- endfor -%}*/
/*             </small>*/
/*         {%- endif %}*/
/*     {%- endif %}*/
/* {%- endblock form_errors %}*/
/* */
