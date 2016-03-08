<?php

/* FlobFoundationBundle:Menu:foundation_breadcrumb.html.twig */
class __TwigTemplate_e666a7b6e7b3b3b398e4576e99663896bf213aa71357c6ea2449bd5ec595d891 extends Twig_Template
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
        $__internal_ceb2538c5e8f8494f314e9591f313e2d3d91297ac725b04e36f90baf21d13321 = $this->env->getExtension("native_profiler");
        $__internal_ceb2538c5e8f8494f314e9591f313e2d3d91297ac725b04e36f90baf21d13321->enter($__internal_ceb2538c5e8f8494f314e9591f313e2d3d91297ac725b04e36f90baf21d13321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FlobFoundationBundle:Menu:foundation_breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('root', $context, $blocks);
        
        $__internal_ceb2538c5e8f8494f314e9591f313e2d3d91297ac725b04e36f90baf21d13321->leave($__internal_ceb2538c5e8f8494f314e9591f313e2d3d91297ac725b04e36f90baf21d13321_prof);

    }

    public function block_root($context, array $blocks = array())
    {
        $__internal_53a43ef32357c777010fd9a6aa9b969ae9bede335b134adbc94eacdc19a94203 = $this->env->getExtension("native_profiler");
        $__internal_53a43ef32357c777010fd9a6aa9b969ae9bede335b134adbc94eacdc19a94203->enter($__internal_53a43ef32357c777010fd9a6aa9b969ae9bede335b134adbc94eacdc19a94203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 2
        if ((twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs"))) > 0)) {
            // line 3
            echo "<ul class=\"breadcrumbs\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
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
        
        $__internal_53a43ef32357c777010fd9a6aa9b969ae9bede335b134adbc94eacdc19a94203->leave($__internal_53a43ef32357c777010fd9a6aa9b969ae9bede335b134adbc94eacdc19a94203_prof);

    }

    public function getTemplateName()
    {
        return "FlobFoundationBundle:Menu:foundation_breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  43 => 5,  39 => 4,  37 => 3,  35 => 2,  23 => 1,);
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
