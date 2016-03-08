<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_66e8f0938b701a69a3219ead99c9945798b7903cb82c8240e65450a9ca978326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4cf4027a52d34185250292b2fdce799120af14c3d440f4da4f62585110556bbc = $this->env->getExtension("native_profiler");
        $__internal_4cf4027a52d34185250292b2fdce799120af14c3d440f4da4f62585110556bbc->enter($__internal_4cf4027a52d34185250292b2fdce799120af14c3d440f4da4f62585110556bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf4027a52d34185250292b2fdce799120af14c3d440f4da4f62585110556bbc->leave($__internal_4cf4027a52d34185250292b2fdce799120af14c3d440f4da4f62585110556bbc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e36ab059a20b6243702310d88b298aad72b01b166aefa8bd4792ce688852387 = $this->env->getExtension("native_profiler");
        $__internal_6e36ab059a20b6243702310d88b298aad72b01b166aefa8bd4792ce688852387->enter($__internal_6e36ab059a20b6243702310d88b298aad72b01b166aefa8bd4792ce688852387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e36ab059a20b6243702310d88b298aad72b01b166aefa8bd4792ce688852387->leave($__internal_6e36ab059a20b6243702310d88b298aad72b01b166aefa8bd4792ce688852387_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_798b30d6b1a6424fc6bbc657a8e35a5f3e3c09bf598c8c2f32789fe326fdb73c = $this->env->getExtension("native_profiler");
        $__internal_798b30d6b1a6424fc6bbc657a8e35a5f3e3c09bf598c8c2f32789fe326fdb73c->enter($__internal_798b30d6b1a6424fc6bbc657a8e35a5f3e3c09bf598c8c2f32789fe326fdb73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_798b30d6b1a6424fc6bbc657a8e35a5f3e3c09bf598c8c2f32789fe326fdb73c->leave($__internal_798b30d6b1a6424fc6bbc657a8e35a5f3e3c09bf598c8c2f32789fe326fdb73c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b90fc3ba0b923a9aabcc9ab19d270b252d32b155816b67630d4c89952e1f526a = $this->env->getExtension("native_profiler");
        $__internal_b90fc3ba0b923a9aabcc9ab19d270b252d32b155816b67630d4c89952e1f526a->enter($__internal_b90fc3ba0b923a9aabcc9ab19d270b252d32b155816b67630d4c89952e1f526a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b90fc3ba0b923a9aabcc9ab19d270b252d32b155816b67630d4c89952e1f526a->leave($__internal_b90fc3ba0b923a9aabcc9ab19d270b252d32b155816b67630d4c89952e1f526a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
