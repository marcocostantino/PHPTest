<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3c7c0da139d3ac4b44d71da9b201153600a2449a70de806c95d0b5ebf02226da extends Twig_Template
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
        $__internal_3c7bc07bf8267f95887a497321b20abca54e781becee11dc336fc5abaf49bb6a = $this->env->getExtension("native_profiler");
        $__internal_3c7bc07bf8267f95887a497321b20abca54e781becee11dc336fc5abaf49bb6a->enter($__internal_3c7bc07bf8267f95887a497321b20abca54e781becee11dc336fc5abaf49bb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3c7bc07bf8267f95887a497321b20abca54e781becee11dc336fc5abaf49bb6a->leave($__internal_3c7bc07bf8267f95887a497321b20abca54e781becee11dc336fc5abaf49bb6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
