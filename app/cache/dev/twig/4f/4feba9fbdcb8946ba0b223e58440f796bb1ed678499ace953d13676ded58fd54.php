<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c8a53c4188fee3a0671dc56f7060bb1573d8eea5553336f937ddc27a32e3786c extends Twig_Template
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
        $__internal_3770dd0843613bcbcb60684a89bcba8cf1393460f6da6882107ca76d685ebdb9 = $this->env->getExtension("native_profiler");
        $__internal_3770dd0843613bcbcb60684a89bcba8cf1393460f6da6882107ca76d685ebdb9->enter($__internal_3770dd0843613bcbcb60684a89bcba8cf1393460f6da6882107ca76d685ebdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3770dd0843613bcbcb60684a89bcba8cf1393460f6da6882107ca76d685ebdb9->leave($__internal_3770dd0843613bcbcb60684a89bcba8cf1393460f6da6882107ca76d685ebdb9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
