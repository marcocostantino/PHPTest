<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4ae58e9cec7e4b03de77de9481db05335f7ded32c56fce357def4bd959e4e365 extends Twig_Template
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
        $__internal_cd07f0cbad5bb7d47a20ea6f6912b7c5067bf4dc1f16251e422a4f019823adb7 = $this->env->getExtension("native_profiler");
        $__internal_cd07f0cbad5bb7d47a20ea6f6912b7c5067bf4dc1f16251e422a4f019823adb7->enter($__internal_cd07f0cbad5bb7d47a20ea6f6912b7c5067bf4dc1f16251e422a4f019823adb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cd07f0cbad5bb7d47a20ea6f6912b7c5067bf4dc1f16251e422a4f019823adb7->leave($__internal_cd07f0cbad5bb7d47a20ea6f6912b7c5067bf4dc1f16251e422a4f019823adb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
