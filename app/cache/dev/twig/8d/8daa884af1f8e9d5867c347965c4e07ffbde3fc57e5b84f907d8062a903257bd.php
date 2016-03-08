<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_314e9835f070590a7c59463e81df219dccaf2381e4f08eb62fb11352535e1bdb extends Twig_Template
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
        $__internal_02ddf3a1b6e062352f14dd49db511f2320c43b4f85f3db1eb454de8ce69f57bf = $this->env->getExtension("native_profiler");
        $__internal_02ddf3a1b6e062352f14dd49db511f2320c43b4f85f3db1eb454de8ce69f57bf->enter($__internal_02ddf3a1b6e062352f14dd49db511f2320c43b4f85f3db1eb454de8ce69f57bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_02ddf3a1b6e062352f14dd49db511f2320c43b4f85f3db1eb454de8ce69f57bf->leave($__internal_02ddf3a1b6e062352f14dd49db511f2320c43b4f85f3db1eb454de8ce69f57bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
