<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2d167634fde812f0e8101f8f0ecc4b582d5c17cd076ea28aaacd84a9968d7d50 extends Twig_Template
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
        $__internal_92c273ddf45b662258a182269028debb5fd863060bfcd1b2fac8c21588c8597f = $this->env->getExtension("native_profiler");
        $__internal_92c273ddf45b662258a182269028debb5fd863060bfcd1b2fac8c21588c8597f->enter($__internal_92c273ddf45b662258a182269028debb5fd863060bfcd1b2fac8c21588c8597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_92c273ddf45b662258a182269028debb5fd863060bfcd1b2fac8c21588c8597f->leave($__internal_92c273ddf45b662258a182269028debb5fd863060bfcd1b2fac8c21588c8597f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
