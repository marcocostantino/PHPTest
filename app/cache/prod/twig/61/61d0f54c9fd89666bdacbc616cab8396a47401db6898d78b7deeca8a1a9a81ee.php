<?php

/* FlobFoundationBundle:Content:alert.html.twig */
class __TwigTemplate_44362a640a7a6ddcb0ceeaacbe01e2a1250c8e8be5356f9f25b8c1f7b75fd24d extends Twig_Template
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
        // line 1
        $context["class"] = trim(("alert-box " . ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : (""))));
        // line 2
        echo "<div data-alert class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">
    ";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 4
        echo "    <a href=\"#\" class=\"close\">&times;</a>
</div>
";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        return array (  35 => 3,  29 => 4,  27 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% set class = ('alert-box ' ~ (class|default('')))|trim %}*/
/* <div data-alert class="{{ class }}">*/
/*     {% block body %}{% endblock %}*/
/*     <a href="#" class="close">&times;</a>*/
/* </div>*/
/* */
