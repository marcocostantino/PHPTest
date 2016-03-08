<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c2055294105ec69ea970426159ec31dc7f5d5aa7a9bdb0c95d420d9822c36a27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1165288412d926637eec87b344fa4c19d1af2d726a495c252602162407706a3c = $this->env->getExtension("native_profiler");
        $__internal_1165288412d926637eec87b344fa4c19d1af2d726a495c252602162407706a3c->enter($__internal_1165288412d926637eec87b344fa4c19d1af2d726a495c252602162407706a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1165288412d926637eec87b344fa4c19d1af2d726a495c252602162407706a3c->leave($__internal_1165288412d926637eec87b344fa4c19d1af2d726a495c252602162407706a3c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1249dc3020e2d7d856f9f7988c24100d75853aca957aa0e80a0322659fd7c03 = $this->env->getExtension("native_profiler");
        $__internal_c1249dc3020e2d7d856f9f7988c24100d75853aca957aa0e80a0322659fd7c03->enter($__internal_c1249dc3020e2d7d856f9f7988c24100d75853aca957aa0e80a0322659fd7c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c1249dc3020e2d7d856f9f7988c24100d75853aca957aa0e80a0322659fd7c03->leave($__internal_c1249dc3020e2d7d856f9f7988c24100d75853aca957aa0e80a0322659fd7c03_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
