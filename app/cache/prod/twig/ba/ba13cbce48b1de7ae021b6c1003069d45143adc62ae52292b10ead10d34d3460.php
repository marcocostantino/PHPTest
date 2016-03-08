<?php

/* FlobFoundationBundle:Form:foundation_form_div_layout.html.twig */
class __TwigTemplate_21f27d9260cdc8f2089f8de1f3fa856579201e0197229b3c569f99f035369548 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        // line 6
        $context["prefix"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null), 0, 2));
        // line 7
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 8
            echo "<div class=\"small-1 columns\">
            <span class=\"prefix\">";
            // line 9
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        </div>";
        }
        // line 12
        echo "<div class=\"small-11 columns\">";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>";
        // line 13
        if ( !(isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 14
            echo "<div class=\"small-1 columns\">
            <span class=\"postfix\">";
            // line 15
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        </div>";
        }
    }

    // line 20
    public function block_url_widget($context, array $blocks = array())
    {
        // line 21
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 22
        echo "<div class=\"small-1 columns\"><span class=\"prefix\">http://</span></div>
    <div class=\"small-11 columns\">";
        // line 23
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>";
    }

    // line 26
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 27
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 28
        echo "<div class=\"small-11 columns\">";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>
    <div class=\"small-1 columns\"><span class=\"postfix\">%</span></div>";
    }

    // line 32
    public function block_search_widget($context, array $blocks = array())
    {
        // line 33
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "search")) : ("search"));
        // line 34
        echo "<div class=\"small-11 columns\">";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "</div>
    <div class=\"small-1 columns\"><span class=\"postfix\"><i class=\"fa fa-search\"></i></span></div>";
    }

    // line 38
    public function block_date_widget($context, array $blocks = array())
    {
        // line 39
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 40
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 42
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(("row " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
            // line 43
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 44
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" => (("<div class=\"small-4 medium-2 columns\">" .             // line 45
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"small-4 medium-2 columns\">" .             // line 46
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"small-4 medium-2 columns\">" .             // line 47
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')) . "</div>")));
            // line 49
            echo "<div class=\"columns end\"></div>
        </div>";
        }
    }

    // line 54
    public function block_time_widget($context, array $blocks = array())
    {
        // line 55
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 56
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 58
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(("row " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
            // line 60
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"small-2 columns\">";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            echo "</div>
            ";
            // line 62
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                // line 63
                echo "<div class=\"small-2 columns\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
                echo "</div>";
            }
            // line 65
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                // line 66
                echo "<div class=\"small-2 columns\">: ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
                echo "</div>";
            }
            // line 68
            echo "            <div class=\"columns end\"></div>
        </div>";
        }
    }

    // line 73
    public function block_slider_widget($context, array $blocks = array())
    {
        // line 74
        $context["slideClass"] = "range-slider";
        // line 75
        echo "    ";
        if (array_key_exists("vertical", $context)) {
            // line 76
            echo "        ";
            $context["slideClass"] = ((isset($context["slideClass"]) ? $context["slideClass"] : null) . " vertical-range");
            // line 77
            echo "    ";
        }
        // line 78
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((isset($context["slideClass"]) ? $context["slideClass"] : null) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
        // line 79
        echo "    <div data-slider=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" data-options=\"start: ";
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : null), "html", null, true);
        echo "; end: ";
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : null), "html", null, true);
        echo "; step: ";
        echo twig_escape_filter($this->env, (isset($context["step"]) ? $context["step"] : null), "html", null, true);
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
    }

    // line 86
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 87
        $context["is_switch"] = true;
        // line 88
        echo "    ";
        $this->displayBlock("choice_widget_expanded", $context, $blocks);
    }

    // line 91
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 92
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
    }

    // line 111
    public function block_button_group_widget($context, array $blocks = array())
    {
        // line 112
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(("button-group " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
        // line 113
        echo "    <ul";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
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
    }

    // line 120
    public function block_button_bar_widget($context, array $blocks = array())
    {
        // line 121
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(("button-bar " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
        // line 122
        echo "    <div";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button_group"]) {
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button_group"], 'widget');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </div>";
    }

    // line 131
    public function block_form_label($context, array $blocks = array())
    {
        // line 132
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 133
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(("error " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))))));
            // line 134
            echo "    ";
        }
        // line 135
        echo "    ";
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 138
    public function block_button_group_label($context, array $blocks = array())
    {
    }

    // line 140
    public function block_button_bar_label($context, array $blocks = array())
    {
    }

    // line 144
    public function block_form_row($context, array $blocks = array())
    {
        // line 145
        $context["class_row"] = twig_array_merge(array(0 => "row"), ((array_key_exists("class_row", $context)) ? (_twig_default_filter((isset($context["class_row"]) ? $context["class_row"] : null), array())) : (array())));
        // line 146
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 147
            $context["class_row"] = twig_array_merge(array(0 => "error"), (isset($context["class_row"]) ? $context["class_row"] : null));
            // line 148
            echo "    ";
        }
        // line 149
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["class_row"]) ? $context["class_row"] : null), " "), "html", null, true);
        echo "\">
        <div class=\"small-12 columns\">";
        // line 151
        if (array_key_exists("collapse_row", $context)) {
            echo "<div class=\"row collapse\">";
        }
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 155
        if (array_key_exists("collapse_row", $context)) {
            echo "</div>";
        }
        // line 156
        echo "</div>
    </div>";
    }

    // line 160
    public function block_money_row($context, array $blocks = array())
    {
        // line 161
        $context["collapse_row"] = true;
        // line 162
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 165
    public function block_url_row($context, array $blocks = array())
    {
        // line 166
        $context["collapse_row"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 170
    public function block_percent_row($context, array $blocks = array())
    {
        // line 171
        $context["collapse_row"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 175
    public function block_search_row($context, array $blocks = array())
    {
        // line 176
        $context["collapse_row"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 180
    public function block_form_errors($context, array $blocks = array())
    {
        // line 181
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 182
            if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
                // line 183
                echo "<div data-alert class=\"alert-box alert form-global-error\">
                <ul>";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
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
        return array (  515 => 196,  499 => 194,  495 => 193,  478 => 192,  476 => 191,  471 => 188,  463 => 186,  459 => 185,  456 => 183,  454 => 182,  452 => 181,  449 => 180,  445 => 177,  443 => 176,  440 => 175,  436 => 172,  434 => 171,  431 => 170,  427 => 167,  425 => 166,  422 => 165,  418 => 162,  416 => 161,  413 => 160,  408 => 156,  404 => 155,  402 => 154,  400 => 153,  398 => 152,  394 => 151,  389 => 149,  386 => 148,  384 => 147,  381 => 146,  379 => 145,  376 => 144,  371 => 140,  366 => 138,  361 => 135,  358 => 134,  356 => 133,  354 => 132,  351 => 131,  347 => 126,  341 => 124,  337 => 123,  321 => 122,  319 => 121,  316 => 120,  312 => 117,  303 => 115,  299 => 114,  283 => 113,  281 => 112,  278 => 111,  273 => 108,  266 => 105,  264 => 104,  260 => 101,  258 => 100,  253 => 98,  251 => 97,  248 => 95,  246 => 94,  242 => 93,  238 => 92,  235 => 91,  230 => 88,  228 => 87,  225 => 86,  219 => 82,  200 => 79,  197 => 78,  194 => 77,  191 => 76,  188 => 75,  186 => 74,  183 => 73,  177 => 68,  172 => 66,  169 => 65,  164 => 63,  162 => 62,  158 => 61,  153 => 60,  150 => 59,  148 => 58,  145 => 56,  143 => 55,  140 => 54,  134 => 49,  132 => 47,  131 => 46,  130 => 45,  129 => 44,  125 => 43,  123 => 42,  120 => 40,  118 => 39,  115 => 38,  108 => 34,  106 => 33,  103 => 32,  96 => 28,  94 => 27,  91 => 26,  86 => 23,  83 => 22,  81 => 21,  78 => 20,  71 => 15,  68 => 14,  66 => 13,  62 => 12,  57 => 9,  54 => 8,  52 => 7,  50 => 6,  47 => 5,  11 => 1,);
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
