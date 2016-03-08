<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_989f2eeef264f05acd7f02899053ece7517a9ffd5d4893131e62b635c957ef03 extends Twig_Template
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
        $__internal_549e655d7e76dcf3f884d12a352116db499928f9f42cad6ea7b92ea7a7b375d8 = $this->env->getExtension("native_profiler");
        $__internal_549e655d7e76dcf3f884d12a352116db499928f9f42cad6ea7b92ea7a7b375d8->enter($__internal_549e655d7e76dcf3f884d12a352116db499928f9f42cad6ea7b92ea7a7b375d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_549e655d7e76dcf3f884d12a352116db499928f9f42cad6ea7b92ea7a7b375d8->leave($__internal_549e655d7e76dcf3f884d12a352116db499928f9f42cad6ea7b92ea7a7b375d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
