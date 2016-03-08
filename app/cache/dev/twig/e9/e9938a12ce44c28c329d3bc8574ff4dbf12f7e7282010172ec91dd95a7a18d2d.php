<?php

/* FlobFoundationBundle:Menu:foundation_knp_menu.html.twig */
class __TwigTemplate_8a66dea294620382525203c078bd777bca33df8acf7f91ceed446d76832f58cd extends Twig_Template
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
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3323d6cae83e28e6cc74de63c53dbbedffb86de91ec64c49a9f1e6e85a036a0d = $this->env->getExtension("native_profiler");
        $__internal_3323d6cae83e28e6cc74de63c53dbbedffb86de91ec64c49a9f1e6e85a036a0d->enter($__internal_3323d6cae83e28e6cc74de63c53dbbedffb86de91ec64c49a9f1e6e85a036a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3323d6cae83e28e6cc74de63c53dbbedffb86de91ec64c49a9f1e6e85a036a0d->leave($__internal_3323d6cae83e28e6cc74de63c53dbbedffb86de91ec64c49a9f1e6e85a036a0d_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_340467ac2d0102c90fb11ece6d0b93fe8256369bcac9210980524d14d7b27ab6 = $this->env->getExtension("native_profiler");
        $__internal_340467ac2d0102c90fb11ece6d0b93fe8256369bcac9210980524d14d7b27ab6->enter($__internal_340467ac2d0102c90fb11ece6d0b93fe8256369bcac9210980524d14d7b27ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    ";
        $context["isTopBar"] = ("topbar" == $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "menu_type"), "method"));
        // line 5
        echo "    ";
        if ((isset($context["isTopBar"]) ? $context["isTopBar"] : $this->getContext($context, "isTopBar"))) {
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
        if ((isset($context["isTopBar"]) ? $context["isTopBar"] : $this->getContext($context, "isTopBar"))) {
            // line 15
            echo "            </section>
        </nav>
    ";
        }
        
        $__internal_340467ac2d0102c90fb11ece6d0b93fe8256369bcac9210980524d14d7b27ab6->leave($__internal_340467ac2d0102c90fb11ece6d0b93fe8256369bcac9210980524d14d7b27ab6_prof);

    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        $__internal_adf108820579bb660f1f839ddf35944d0427043e08a3d7471c89490112b1bbbc = $this->env->getExtension("native_profiler");
        $__internal_adf108820579bb660f1f839ddf35944d0427043e08a3d7471c89490112b1bbbc->enter($__internal_adf108820579bb660f1f839ddf35944d0427043e08a3d7471c89490112b1bbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 21
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 22
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 0)) {
                // line 23
                echo "            ";
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " dropdown"))));
                // line 24
                echo "        ";
            }
            // line 25
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "menu_type"), "method") == "sidebar")) {
                // line 26
                echo "            ";
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " side-nav"))));
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
        
        $__internal_adf108820579bb660f1f839ddf35944d0427043e08a3d7471c89490112b1bbbc->leave($__internal_adf108820579bb660f1f839ddf35944d0427043e08a3d7471c89490112b1bbbc_prof);

    }

    // line 32
    public function block_item($context, array $blocks = array())
    {
        $__internal_3d5c7679644696ef9ffdfe2b3bc561a0188bf028d58e38a82ba51ff5ffc09614 = $this->env->getExtension("native_profiler");
        $__internal_3d5c7679644696ef9ffdfe2b3bc561a0188bf028d58e38a82ba51ff5ffc09614->enter($__internal_3d5c7679644696ef9ffdfe2b3bc561a0188bf028d58e38a82ba51ff5ffc09614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 33
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 34
            echo "        ";
            // line 35
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 36
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 38
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 41
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 42
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 44
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 45
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 47
            echo "
        ";
            // line 49
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 50
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "has-dropdown"));
                // line 51
                echo "            ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 52
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "        ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 55
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 58
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 59
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 60
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 62
            echo "        ";
            // line 63
            echo "        ";
            $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig", 63);
            // line 64
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "divider_prepend"), "method")) {
                // line 65
                $this->displayBlock("divider", $context, $blocks);
            }
            // line 67
            echo "<li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">
            ";
            // line 68
            if ((twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()))) {
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
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 75
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 76
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 77
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </li>";
            // line 79
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "divider_append"), "method")) {
                // line 80
                $this->displayBlock("divider", $context, $blocks);
            }
            // line 82
            if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "form_append"), "method"))) {
                // line 83
                $this->displayBlock("form", $context, $blocks);
            }
        }
        
        $__internal_3d5c7679644696ef9ffdfe2b3bc561a0188bf028d58e38a82ba51ff5ffc09614->leave($__internal_3d5c7679644696ef9ffdfe2b3bc561a0188bf028d58e38a82ba51ff5ffc09614_prof);

    }

    // line 88
    public function block_label($context, array $blocks = array())
    {
        $__internal_41a76659a1878e7699f34121f0a854879c73eea03263633cbf371c81349b8002 = $this->env->getExtension("native_profiler");
        $__internal_41a76659a1878e7699f34121f0a854879c73eea03263633cbf371c81349b8002->enter($__internal_41a76659a1878e7699f34121f0a854879c73eea03263633cbf371c81349b8002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 89
        echo "    ";
        if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method")) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon_position", 1 => "before"), "method") != "after"))) {
            // line 90
            echo "<i class=\"fa ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon_position", 1 => "before"), "method") != "no-label")) {
                echo "&nbsp;";
            }
        }
        // line 92
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon_position", 1 => "before"), "method") != "no-label")) {
            // line 93
            $this->displayParentBlock("label", $context, $blocks);
        }
        // line 95
        if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method")) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon_position", 1 => "before"), "method") == "after"))) {
            // line 96
            echo "<i class=\"fa ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        
        $__internal_41a76659a1878e7699f34121f0a854879c73eea03263633cbf371c81349b8002->leave($__internal_41a76659a1878e7699f34121f0a854879c73eea03263633cbf371c81349b8002_prof);

    }

    // line 100
    public function block_labelElement($context, array $blocks = array())
    {
        $__internal_a2e668cb7b2042762dd0c7548db96e7679659b7e018a9650b492b36b8c425648 = $this->env->getExtension("native_profiler");
        $__internal_a2e668cb7b2042762dd0c7548db96e7679659b7e018a9650b492b36b8c425648->enter($__internal_a2e668cb7b2042762dd0c7548db96e7679659b7e018a9650b492b36b8c425648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "labelElement"));

        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig", 100);
        echo "<label";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</label>";
        
        $__internal_a2e668cb7b2042762dd0c7548db96e7679659b7e018a9650b492b36b8c425648->leave($__internal_a2e668cb7b2042762dd0c7548db96e7679659b7e018a9650b492b36b8c425648_prof);

    }

    // line 102
    public function block_divider($context, array $blocks = array())
    {
        $__internal_00f78d4568c6dd0c431f1b4cc007c7f79b0fc00140111863a7144e426710b177 = $this->env->getExtension("native_profiler");
        $__internal_00f78d4568c6dd0c431f1b4cc007c7f79b0fc00140111863a7144e426710b177->enter($__internal_00f78d4568c6dd0c431f1b4cc007c7f79b0fc00140111863a7144e426710b177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "divider"));

        echo "<li class=\"divider\"></li>";
        
        $__internal_00f78d4568c6dd0c431f1b4cc007c7f79b0fc00140111863a7144e426710b177->leave($__internal_00f78d4568c6dd0c431f1b4cc007c7f79b0fc00140111863a7144e426710b177_prof);

    }

    // line 104
    public function block_form($context, array $blocks = array())
    {
        $__internal_2682304d4edcd4b168a393bbb8d8f67ab1ed3059cfcfac154333c9d43a94a42d = $this->env->getExtension("native_profiler");
        $__internal_2682304d4edcd4b168a393bbb8d8f67ab1ed3059cfcfac154333c9d43a94a42d->enter($__internal_2682304d4edcd4b168a393bbb8d8f67ab1ed3059cfcfac154333c9d43a94a42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 105
        echo "<li class=\"has-form\">
  <div class=\"row collapse\">
    <form action=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("product_list");
        echo "\">
        <div class=\"large-8 small-9 columns\">
          <input type=\"text\" placeholder=\"Cerca per Nome o Tag...\" name=\"q\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "form_append"), "method"), "html", null, true);
        echo "\">
        </div>
        <div class=\"large-4 small-3 columns\">
          <input type=\"submit\" name=\"s\" value=\"Cerca\" class=\"alert button expand\">
        </div>
    </form>
  </div>
</li>
";
        
        $__internal_2682304d4edcd4b168a393bbb8d8f67ab1ed3059cfcfac154333c9d43a94a42d->leave($__internal_2682304d4edcd4b168a393bbb8d8f67ab1ed3059cfcfac154333c9d43a94a42d_prof);

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
        return array (  311 => 109,  306 => 107,  302 => 105,  296 => 104,  284 => 102,  267 => 100,  257 => 96,  255 => 95,  252 => 93,  250 => 92,  242 => 90,  239 => 89,  233 => 88,  224 => 83,  222 => 82,  219 => 80,  217 => 79,  212 => 77,  210 => 76,  208 => 75,  206 => 74,  204 => 73,  200 => 71,  196 => 69,  194 => 68,  189 => 67,  186 => 65,  184 => 64,  181 => 63,  179 => 62,  176 => 60,  174 => 59,  172 => 58,  169 => 55,  166 => 54,  163 => 53,  161 => 52,  158 => 51,  156 => 50,  153 => 49,  150 => 47,  147 => 45,  145 => 44,  142 => 42,  140 => 41,  137 => 39,  135 => 38,  133 => 37,  131 => 36,  129 => 35,  127 => 34,  124 => 33,  118 => 32,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  78 => 20,  68 => 15,  66 => 14,  61 => 13,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  11 => 1,);
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
/*         {%- if item.extra('form_append') is not empty -%}*/
/*             {{ block('form') }}*/
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
/* {% block form %}*/
/* <li class="has-form">*/
/*   <div class="row collapse">*/
/*     <form action="{{ path('product_list') }}">*/
/*         <div class="large-8 small-9 columns">*/
/*           <input type="text" placeholder="Cerca per Nome o Tag..." name="q" value="{{item.extra('form_append')}}">*/
/*         </div>*/
/*         <div class="large-4 small-3 columns">*/
/*           <input type="submit" name="s" value="Cerca" class="alert button expand">*/
/*         </div>*/
/*     </form>*/
/*   </div>*/
/* </li>*/
/* {% endblock %}*/
/* */
