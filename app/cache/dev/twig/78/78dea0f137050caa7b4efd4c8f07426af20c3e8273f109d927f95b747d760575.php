<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bb4bceb7025ebf8a088904947e49a9cb74573ddf7ee24cb88ebe3b64548db036 extends Twig_Template
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
        $__internal_ff1bdc74f5d49a46b4c11f33f6766654b5cf7b3de3d2695daa234e8b620f7e0b = $this->env->getExtension("native_profiler");
        $__internal_ff1bdc74f5d49a46b4c11f33f6766654b5cf7b3de3d2695daa234e8b620f7e0b->enter($__internal_ff1bdc74f5d49a46b4c11f33f6766654b5cf7b3de3d2695daa234e8b620f7e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ff1bdc74f5d49a46b4c11f33f6766654b5cf7b3de3d2695daa234e8b620f7e0b->leave($__internal_ff1bdc74f5d49a46b4c11f33f6766654b5cf7b3de3d2695daa234e8b620f7e0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
