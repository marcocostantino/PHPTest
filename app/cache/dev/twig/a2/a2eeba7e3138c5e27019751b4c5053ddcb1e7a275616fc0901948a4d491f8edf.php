<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_942a7fa3d906cb2c41cec0a8510f43d338b5401722347fc143fe254ae80ff592 extends Twig_Template
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
        $__internal_e4e305aa84a1f4d8348312db2578f7356c890048070c3f60280b5e7c3590404f = $this->env->getExtension("native_profiler");
        $__internal_e4e305aa84a1f4d8348312db2578f7356c890048070c3f60280b5e7c3590404f->enter($__internal_e4e305aa84a1f4d8348312db2578f7356c890048070c3f60280b5e7c3590404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e4e305aa84a1f4d8348312db2578f7356c890048070c3f60280b5e7c3590404f->leave($__internal_e4e305aa84a1f4d8348312db2578f7356c890048070c3f60280b5e7c3590404f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
