<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_e00f0a97928191228c25b61d91171cac5c5e8d1e9c6d00d087a091600425fd4c extends Twig_Template
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
        $__internal_b81ae844dddd5a422f38895db593ca08044c9e71773c35f8b5a7eda8e40201c4 = $this->env->getExtension("native_profiler");
        $__internal_b81ae844dddd5a422f38895db593ca08044c9e71773c35f8b5a7eda8e40201c4->enter($__internal_b81ae844dddd5a422f38895db593ca08044c9e71773c35f8b5a7eda8e40201c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_b81ae844dddd5a422f38895db593ca08044c9e71773c35f8b5a7eda8e40201c4->leave($__internal_b81ae844dddd5a422f38895db593ca08044c9e71773c35f8b5a7eda8e40201c4_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
