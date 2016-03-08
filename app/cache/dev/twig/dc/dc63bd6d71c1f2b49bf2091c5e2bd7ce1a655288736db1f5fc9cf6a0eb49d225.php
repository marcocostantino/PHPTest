<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c733bfbf49aeb200edec9243cf4ebc89400d4d4d7e144a8eeb851a4306114869 extends Twig_Template
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
        $__internal_d26167792ca3407910c4d75e771fe53a3e4d3cc98df16a9781fafb36374d4d3a = $this->env->getExtension("native_profiler");
        $__internal_d26167792ca3407910c4d75e771fe53a3e4d3cc98df16a9781fafb36374d4d3a->enter($__internal_d26167792ca3407910c4d75e771fe53a3e4d3cc98df16a9781fafb36374d4d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d26167792ca3407910c4d75e771fe53a3e4d3cc98df16a9781fafb36374d4d3a->leave($__internal_d26167792ca3407910c4d75e771fe53a3e4d3cc98df16a9781fafb36374d4d3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
