<?php

/* FlobFoundationBundle:Content:alert.html.twig */
class __TwigTemplate_e05ea2a34850843cb0684cf8bc2589e4b11468c29244ba6bbc9897bda1b479b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e39170a78ffc03b3cc64e1f1679c66a84aecff66460f8acb7e6633cd56e71f2 = $this->env->getExtension("native_profiler");
        $__internal_3e39170a78ffc03b3cc64e1f1679c66a84aecff66460f8acb7e6633cd56e71f2->enter($__internal_3e39170a78ffc03b3cc64e1f1679c66a84aecff66460f8acb7e6633cd56e71f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FlobFoundationBundle:Content:alert.html.twig"));

        // line 1
        $context["class"] = trim(("alert-box " . ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : (""))));
        // line 2
        echo "<div data-alert class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
    ";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 4
        echo "    <a href=\"#\" class=\"close\">&times;</a>
</div>
";
        
        $__internal_3e39170a78ffc03b3cc64e1f1679c66a84aecff66460f8acb7e6633cd56e71f2->leave($__internal_3e39170a78ffc03b3cc64e1f1679c66a84aecff66460f8acb7e6633cd56e71f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7ff6b8b85885482131ccb3eb7568dae3069ad3b072789d7505a4bf4aeb86f41 = $this->env->getExtension("native_profiler");
        $__internal_a7ff6b8b85885482131ccb3eb7568dae3069ad3b072789d7505a4bf4aeb86f41->enter($__internal_a7ff6b8b85885482131ccb3eb7568dae3069ad3b072789d7505a4bf4aeb86f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7ff6b8b85885482131ccb3eb7568dae3069ad3b072789d7505a4bf4aeb86f41->leave($__internal_a7ff6b8b85885482131ccb3eb7568dae3069ad3b072789d7505a4bf4aeb86f41_prof);

    }

    public function getTemplateName()
    {
        return "FlobFoundationBundle:Content:alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  32 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% set class = ('alert-box ' ~ (class|default('')))|trim %}*/
/* <div data-alert class="{{ class }}">*/
/*     {% block body %}{% endblock %}*/
/*     <a href="#" class="close">&times;</a>*/
/* </div>*/
/* */
