<?php

/* FlobFoundationBundle:Menu:foundation_breadcrumb.html.twig */
class __TwigTemplate_e2af420e0507c605ecc2d2d65eae1022aaae90c453f3809bfb6cc402ff049d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('root', $context, $blocks);
    }

    public function block_root($context, array $blocks = array())
    {
        // line 2
        if ((twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) > 0)) {
            // line 3
            echo "<ul class=\"breadcrumbs\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "uri", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "label", array()), "html", null, true);
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "FlobFoundationBundle:Menu:foundation_breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  34 => 5,  30 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block root -%}*/
/*     {% if breadcrumbs|length > 0 -%}*/
/*         <ul class="breadcrumbs">*/
/*             {%- for breadcrumb in breadcrumbs -%}*/
/*                 <li><a href="{{ breadcrumb.uri }}">{{ breadcrumb.label }}</a></li>*/
/*             {%- endfor -%}*/
/*         </ul>*/
/*     {%- endif %}*/
/* {%- endblock %}*/
/* */
