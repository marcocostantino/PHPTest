<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b98a813d1e39f7a0aad322130f8bf25cb20a6effd74f4e25e0b2222c2a2b9e03 extends Twig_Template
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
        $__internal_7d937eb66ceab10155b009b149c5589e4d8099bcafa13222f6a93dbd234f0f42 = $this->env->getExtension("native_profiler");
        $__internal_7d937eb66ceab10155b009b149c5589e4d8099bcafa13222f6a93dbd234f0f42->enter($__internal_7d937eb66ceab10155b009b149c5589e4d8099bcafa13222f6a93dbd234f0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7d937eb66ceab10155b009b149c5589e4d8099bcafa13222f6a93dbd234f0f42->leave($__internal_7d937eb66ceab10155b009b149c5589e4d8099bcafa13222f6a93dbd234f0f42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
