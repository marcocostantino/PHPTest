<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e3432087fffe5bd7512b48a4d091b49bf082830189e8b5067bf53952d0e56f53 extends Twig_Template
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
        $__internal_9f0108beac63d70cf25e5a0ea2efc54a276b51daa8eaa4451313b8a000a1b7b6 = $this->env->getExtension("native_profiler");
        $__internal_9f0108beac63d70cf25e5a0ea2efc54a276b51daa8eaa4451313b8a000a1b7b6->enter($__internal_9f0108beac63d70cf25e5a0ea2efc54a276b51daa8eaa4451313b8a000a1b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9f0108beac63d70cf25e5a0ea2efc54a276b51daa8eaa4451313b8a000a1b7b6->leave($__internal_9f0108beac63d70cf25e5a0ea2efc54a276b51daa8eaa4451313b8a000a1b7b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
