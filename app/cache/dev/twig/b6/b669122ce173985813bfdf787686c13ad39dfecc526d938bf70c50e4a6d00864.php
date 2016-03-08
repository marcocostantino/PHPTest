<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5ecf2cfdf9d6a22c33bec7e0f256818728b8051a41facca78557d8c3a9afaa7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_099a304140fcea50c0aac71af1bed72748180f1b490d84306e5642b6ef002340 = $this->env->getExtension("native_profiler");
        $__internal_099a304140fcea50c0aac71af1bed72748180f1b490d84306e5642b6ef002340->enter($__internal_099a304140fcea50c0aac71af1bed72748180f1b490d84306e5642b6ef002340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099a304140fcea50c0aac71af1bed72748180f1b490d84306e5642b6ef002340->leave($__internal_099a304140fcea50c0aac71af1bed72748180f1b490d84306e5642b6ef002340_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d836a7be7adad0387b44b71cc274c464b7e7272aa03f867a8d0c9b23442eae6 = $this->env->getExtension("native_profiler");
        $__internal_3d836a7be7adad0387b44b71cc274c464b7e7272aa03f867a8d0c9b23442eae6->enter($__internal_3d836a7be7adad0387b44b71cc274c464b7e7272aa03f867a8d0c9b23442eae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3d836a7be7adad0387b44b71cc274c464b7e7272aa03f867a8d0c9b23442eae6->leave($__internal_3d836a7be7adad0387b44b71cc274c464b7e7272aa03f867a8d0c9b23442eae6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6433edc3f6453c2ca3be19d6d8be73a0d0f5815666903f4bb29b8d75d0a8025a = $this->env->getExtension("native_profiler");
        $__internal_6433edc3f6453c2ca3be19d6d8be73a0d0f5815666903f4bb29b8d75d0a8025a->enter($__internal_6433edc3f6453c2ca3be19d6d8be73a0d0f5815666903f4bb29b8d75d0a8025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6433edc3f6453c2ca3be19d6d8be73a0d0f5815666903f4bb29b8d75d0a8025a->leave($__internal_6433edc3f6453c2ca3be19d6d8be73a0d0f5815666903f4bb29b8d75d0a8025a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
