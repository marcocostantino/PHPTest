<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9f2904ee5ce20ae6868890d420e5ace3e0b3480533897b3d88b3d391248c45cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7dfdc346a7aa35219427bb7ccff97c54a367b2df577b1d5a11e30648e0e9785 = $this->env->getExtension("native_profiler");
        $__internal_d7dfdc346a7aa35219427bb7ccff97c54a367b2df577b1d5a11e30648e0e9785->enter($__internal_d7dfdc346a7aa35219427bb7ccff97c54a367b2df577b1d5a11e30648e0e9785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7dfdc346a7aa35219427bb7ccff97c54a367b2df577b1d5a11e30648e0e9785->leave($__internal_d7dfdc346a7aa35219427bb7ccff97c54a367b2df577b1d5a11e30648e0e9785_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0d6ef3c4f8d9d6032fe0dc2e55fdec718e0297af14d7721781a63f047a1ac26 = $this->env->getExtension("native_profiler");
        $__internal_a0d6ef3c4f8d9d6032fe0dc2e55fdec718e0297af14d7721781a63f047a1ac26->enter($__internal_a0d6ef3c4f8d9d6032fe0dc2e55fdec718e0297af14d7721781a63f047a1ac26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a0d6ef3c4f8d9d6032fe0dc2e55fdec718e0297af14d7721781a63f047a1ac26->leave($__internal_a0d6ef3c4f8d9d6032fe0dc2e55fdec718e0297af14d7721781a63f047a1ac26_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccf54dd27f0f5abf3202e162d699a0704bfe69ef3c6199afb8e390b00967bd87 = $this->env->getExtension("native_profiler");
        $__internal_ccf54dd27f0f5abf3202e162d699a0704bfe69ef3c6199afb8e390b00967bd87->enter($__internal_ccf54dd27f0f5abf3202e162d699a0704bfe69ef3c6199afb8e390b00967bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ccf54dd27f0f5abf3202e162d699a0704bfe69ef3c6199afb8e390b00967bd87->leave($__internal_ccf54dd27f0f5abf3202e162d699a0704bfe69ef3c6199afb8e390b00967bd87_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54abf1177f34e908032cfdb1fc8ba68faef2bde9d4b263df0088c18a08562bee = $this->env->getExtension("native_profiler");
        $__internal_54abf1177f34e908032cfdb1fc8ba68faef2bde9d4b263df0088c18a08562bee->enter($__internal_54abf1177f34e908032cfdb1fc8ba68faef2bde9d4b263df0088c18a08562bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_54abf1177f34e908032cfdb1fc8ba68faef2bde9d4b263df0088c18a08562bee->leave($__internal_54abf1177f34e908032cfdb1fc8ba68faef2bde9d4b263df0088c18a08562bee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
