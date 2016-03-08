<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d5cd488e9b5563cd4c3120a04936c75348db8168509623dfc9c53f0d31a4a408 extends Twig_Template
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
        $__internal_b35f46990f0d0ff3e24253c6ea28b386864a54be576f8d560993d6b4714084d9 = $this->env->getExtension("native_profiler");
        $__internal_b35f46990f0d0ff3e24253c6ea28b386864a54be576f8d560993d6b4714084d9->enter($__internal_b35f46990f0d0ff3e24253c6ea28b386864a54be576f8d560993d6b4714084d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b35f46990f0d0ff3e24253c6ea28b386864a54be576f8d560993d6b4714084d9->leave($__internal_b35f46990f0d0ff3e24253c6ea28b386864a54be576f8d560993d6b4714084d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
