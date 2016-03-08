<?php

/* FlobFoundationBundle:Pagination:foundation_sliding.html.twig */
class __TwigTemplate_f652cfb050e426fe0233fe98dec2e1187b7adf32bfbaf17661a2d711772163db extends Twig_Template
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
        $__internal_b393b0acbf895d1a4ad07a8b275991527cd34b9e3d61dbd6218ea0c9ba503297 = $this->env->getExtension("native_profiler");
        $__internal_b393b0acbf895d1a4ad07a8b275991527cd34b9e3d61dbd6218ea0c9ba503297->enter($__internal_b393b0acbf895d1a4ad07a8b275991527cd34b9e3d61dbd6218ea0c9ba503297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FlobFoundationBundle:Pagination:foundation_sliding.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "<ul class=\"pagination\">

    ";
            // line 4
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 5
                echo "        <li class=\"first arrow\">
            <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-left\"></i></a>
        </li>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "        <li class=\"";
                if (($context["page"] == (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    echo "current";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-right\"></i></a>
        </li>
    ";
            }
            // line 25
            echo "
    ";
            // line 26
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 27
                echo "        <li class=\"last arrow\">
            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
        </li>
    ";
            }
            // line 31
            echo "
</ul>
";
        }
        
        $__internal_b393b0acbf895d1a4ad07a8b275991527cd34b9e3d61dbd6218ea0c9ba503297->leave($__internal_b393b0acbf895d1a4ad07a8b275991527cd34b9e3d61dbd6218ea0c9ba503297_prof);

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
        return array (  103 => 31,  97 => 28,  94 => 27,  92 => 26,  89 => 25,  83 => 22,  80 => 21,  78 => 20,  75 => 19,  60 => 17,  56 => 16,  53 => 15,  47 => 12,  44 => 11,  42 => 10,  39 => 9,  33 => 6,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
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
