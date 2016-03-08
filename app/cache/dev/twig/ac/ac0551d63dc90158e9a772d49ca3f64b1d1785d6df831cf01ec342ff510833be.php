<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_eb6ad03df2aae4b24fad3bac6c58c65a004d0dd0b3f646980f818ce68f76ae32 extends Twig_Template
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
        $__internal_4c76c12f48407be2344443270da2ee71f209d5aaee07c28f08645ea45cd834c9 = $this->env->getExtension("native_profiler");
        $__internal_4c76c12f48407be2344443270da2ee71f209d5aaee07c28f08645ea45cd834c9->enter($__internal_4c76c12f48407be2344443270da2ee71f209d5aaee07c28f08645ea45cd834c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4c76c12f48407be2344443270da2ee71f209d5aaee07c28f08645ea45cd834c9->leave($__internal_4c76c12f48407be2344443270da2ee71f209d5aaee07c28f08645ea45cd834c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
