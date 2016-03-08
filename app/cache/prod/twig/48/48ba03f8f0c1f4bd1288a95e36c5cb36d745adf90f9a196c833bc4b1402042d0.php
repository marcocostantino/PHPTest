<?php

/* FlobFoundationBundle:Menu:foundation_knp_menu.html.twig */
class __TwigTemplate_cca6f3705ead4df2b36d37bc9d132571ee7a5f0f5b74ec90f06dfe35b0b4adb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'label' => array($this, 'block_label'),
            'labelElement' => array($this, 'block_labelElement'),
            'divider' => array($this, 'block_divider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["isTopBar"] = ("topbar" == $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "menu_type"), "method"));
        // line 5
        echo "    ";
        if ((isset($context["isTopBar"]) ? $context["isTopBar"] : null)) {
            // line 6
            echo "        <nav class=\"top-bar\" data-topbar>
            <ul class=\"title-area\">
                <li class=\"name\"></li>
                <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
            </ul>
            <section class=\"top-bar-section\">
    ";
        }
        // line 13
        echo "    ";
        $this->displayParentBlock("root", $context, $blocks);
        echo "
    ";
        // line 14
        if ((isset($context["isTopBar"]) ? $context["isTopBar"] : null)) {
            // line 15
            echo "            </section>
        </nav>
    ";
        }
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 22
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) > 0)) {
                // line 23
                echo "            ";
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " dropdown"))));
                // line 24
                echo "        ";
            }
            // line 25
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "menu_type"), "method") == "sidebar")) {
                // line 26
                echo "            ";
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " side-nav"))));
                // line 27
                echo "        ";
            }
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        $this->displayParentBlock("list", $context, $blocks);
        echo "
";
    }

    // line 32
    public function block_item($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", array())) {
            // line 34
            echo "        ";
            // line 35
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 36
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 38
(isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth", array())), "method")) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", array())));
            }
            // line 41
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", array())) {
                // line 42
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", array())));
            }
            // line 44
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", array())) {
                // line 45
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", array())));
            }
            // line 47
            echo "
        ";
            // line 49
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0))) {
                // line 50
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "has-dropdown"));
                // line 51
                echo "            ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
                    // line 52
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class", array())));
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "        ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class", array()))) {
                // line 55
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class", array())));
            }
            // line 58
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", array());
            // line 59
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 60
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 62
            echo "        ";
            // line 63
            echo "        ";
            $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig", 63);
            // line 64
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "divider_prepend"), "method")) {
                // line 65
                $this->displayBlock("divider", $context, $blocks);
            }
            // line 67
            echo "<li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
            ";
            // line 68
            if ((twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array())) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()))) {
                // line 69
                echo "                ";
                $this->displayBlock("labelElement", $context, $blocks);
            } else {
                // line 71
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            }
            // line 73
            echo "            ";
            // line 74
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 75
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()))));
            // line 76
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 77
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </li>";
            // line 79
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "divider_append"), "method")) {
                // line 80
                $this->displayBlock("divider", $context, $blocks);
            }
        }
    }

    // line 85
    public function block_label($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method")) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon_position", 1 => "before"), "method") != "after"))) {
            // line 87
            echo "<i class=\"fa ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon_position", 1 => "before"), "method") != "no-label")) {
                echo "&nbsp;";
            }
        }
        // line 89
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon_position", 1 => "before"), "method") != "no-label")) {
            // line 90
            $this->displayParentBlock("label", $context, $blocks);
        }
        // line 92
        if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method")) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon_position", 1 => "before"), "method") == "after"))) {
            // line 93
            echo "<i class=\"fa ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
    }

    // line 97
    public function block_labelElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig", 97);
        echo "<label";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</label>";
    }

    // line 99
    public function block_divider($context, array $blocks = array())
    {
        echo "<li class=\"divider\"></li>";
    }

    public function getTemplateName()
    {
        return "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 99,  231 => 97,  224 => 93,  222 => 92,  219 => 90,  217 => 89,  209 => 87,  206 => 86,  203 => 85,  197 => 80,  195 => 79,  190 => 77,  188 => 76,  186 => 75,  184 => 74,  182 => 73,  178 => 71,  174 => 69,  172 => 68,  167 => 67,  164 => 65,  162 => 64,  159 => 63,  157 => 62,  154 => 60,  152 => 59,  150 => 58,  147 => 55,  144 => 54,  141 => 53,  139 => 52,  136 => 51,  134 => 50,  131 => 49,  128 => 47,  125 => 45,  123 => 44,  120 => 42,  118 => 41,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  102 => 33,  99 => 32,  92 => 29,  89 => 28,  86 => 27,  83 => 26,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  58 => 15,  56 => 14,  51 => 13,  42 => 6,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block root %}*/
/*     {% set isTopBar = 'topbar' == item.extra('menu_type') %}*/
/*     {% if isTopBar %}*/
/*         <nav class="top-bar" data-topbar>*/
/*             <ul class="title-area">*/
/*                 <li class="name"></li>*/
/*                 <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>*/
/*             </ul>*/
/*             <section class="top-bar-section">*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/*     {% if isTopBar %}*/
/*             </section>*/
/*         </nav>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block list %}*/
/*     {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}*/
/*         {% if item.level > 0 %}*/
/*             {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' dropdown')|trim}) %}*/
/*         {% endif %}*/
/*         {% if item.extra('menu_type') == 'sidebar' %}*/
/*             {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' side-nav')|trim}) %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/*     {% if item.displayed %}*/
/*         {# Building the class of the item #}*/
/*         {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*         {%- if matcher.isCurrent(item) %}*/
/*             {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif matcher.isAncestor(item, options.matchingDepth) %}*/
/*             {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeFirst %}*/
/*             {%- set classes = classes|merge([options.firstClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeLast %}*/
/*             {%- set classes = classes|merge([options.lastClass]) %}*/
/*         {%- endif %}*/
/* */
/*         {# Mark item as "leaf" (no children) or as "branch" (has children that are displayed) #}*/
/*         {% if item.hasChildren and options.depth is not same as(0) %}*/
/*             {%- set classes = classes|merge(['has-dropdown']) %}*/
/*             {% if options.branch_class is not empty and item.displayChildren %}*/
/*                 {%- set classes = classes|merge([options.branch_class]) %}*/
/*             {% endif %}*/
/*         {% elseif options.leaf_class is not empty %}*/
/*             {%- set classes = classes|merge([options.leaf_class]) %}*/
/*         {%- endif %}*/
/* */
/*         {%- set attributes = item.attributes %}*/
/*         {%- if classes is not empty %}*/
/*             {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*         {%- endif %}*/
/*         {# Displaying the item #}*/
/*         {% import 'knp_menu.html.twig' as knp_menu %}*/
/*         {%- if item.extra('divider_prepend') -%}*/
/*             {{ block('divider') }}*/
/*         {%- endif -%}*/
/*         <li{{ knp_menu.attributes(attributes) }}>*/
/*             {% if item.uri is empty and not item.hasChildren %}*/
/*                 {{ block('labelElement') }}*/
/*             {%- else %}*/
/*                 {{ block('linkElement') }}*/
/*             {%- endif %}*/
/*             {# render the list of children #}*/
/*             {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*             {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/*             {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*             {{ block('list') }}*/
/*         </li>*/
/*         {%- if item.extra('divider_append') -%}*/
/*             {{ block('divider') }}*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block label %}*/
/*     {% if item.extra('icon') is not empty and item.extra('icon_position', 'before') != 'after' -%}*/
/*         <i class="fa {{ item.extra('icon') }}"></i>{%- if item.extra('icon_position', 'before') != 'no-label' -%}&nbsp;{%- endif -%}*/
/*     {%- endif -%}*/
/*     {%- if item.extra('icon_position', 'before') != 'no-label' -%}*/
/*     {{ parent() }}*/
/*     {%- endif -%}*/
/*     {%- if item.extra('icon') is not empty and item.extra('icon_position', 'before') == 'after' -%}*/
/*         <i class="fa {{ item.extra('icon') }}"></i>*/
/*     {%- endif %}*/
/* {% endblock %}*/
/* */
/* {% block labelElement %}{% import 'knp_menu.html.twig' as knp_menu %}<label{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</label>{% endblock %}*/
/* */
/* {% block divider %}<li class="divider"></li>{% endblock %}*/
/* */
