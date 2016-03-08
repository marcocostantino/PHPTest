<?php

/* FlobFoundationBundle:Pagination:foundation_sliding.html.twig */
class __TwigTemplate_45065ec7a02ceeb654ac604566cbf48cca924b475ce7909a9f2512a1ab6b3e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 2
            echo "<ul class=\"pagination\">

    ";
            // line 4
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["first"]) ? $context["first"] : null)))) {
                // line 5
                echo "        <li class=\"first arrow\">
            <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["first"]) ? $context["first"] : null)))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-left\"></i></a>
        </li>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (array_key_exists("previous", $context)) {
                // line 11
                echo "        <li class=\"previous arrow\">
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-left\"></i></a>
        </li>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "        <li class=\"";
                if (($context["page"] == (isset($context["current"]) ? $context["current"] : null))) {
                    echo "current";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
    ";
            // line 20
            if (array_key_exists("next", $context)) {
                // line 21
                echo "        <li class=\"next arrow\">
            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-right\"></i></a>
        </li>
    ";
            }
            // line 25
            echo "
    ";
            // line 26
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["last"]) ? $context["last"] : null)))) {
                // line 27
                echo "        <li class=\"last arrow\">
            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["last"]) ? $context["last"] : null)))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
        </li>
    ";
            }
            // line 31
            echo "
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "FlobFoundationBundle:Pagination:foundation_sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  94 => 28,  91 => 27,  89 => 26,  86 => 25,  80 => 22,  77 => 21,  75 => 20,  72 => 19,  57 => 17,  53 => 16,  50 => 15,  44 => 12,  41 => 11,  39 => 10,  36 => 9,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if pageCount > 1 %}*/
/* <ul class="pagination">*/
/* */
/*     {% if first is defined and current != first %}*/
/*         <li class="first arrow">*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): first})) }}"><i class="fa fa-angle-double-left"></i></a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if previous is defined %}*/
/*         <li class="previous arrow">*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): previous})) }}"><i class="fa fa-angle-left"></i></a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% for page in pagesInRange %}*/
/*         <li class="{% if page == current %}current{% endif %}"><a href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a></li>*/
/*     {% endfor %}*/
/* */
/*     {% if next is defined %}*/
/*         <li class="next arrow">*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): next})) }}"><i class="fa fa-angle-right"></i></a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if last is defined and current != last %}*/
/*         <li class="last arrow">*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): last})) }}"><i class="fa fa-angle-double-right"></i></a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* </ul>*/
/* {% endif %}*/
/* */
