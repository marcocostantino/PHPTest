<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fd9a0d0cf88e01818df9b1f7dec04355a40389b79c9f84bd7be225b1acb313e6 extends Twig_Template
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
        $__internal_9d108f26b2f7e6c9be362dc107eb3b106545a283c4905cc542d1fadee93af175 = $this->env->getExtension("native_profiler");
        $__internal_9d108f26b2f7e6c9be362dc107eb3b106545a283c4905cc542d1fadee93af175->enter($__internal_9d108f26b2f7e6c9be362dc107eb3b106545a283c4905cc542d1fadee93af175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9d108f26b2f7e6c9be362dc107eb3b106545a283c4905cc542d1fadee93af175->leave($__internal_9d108f26b2f7e6c9be362dc107eb3b106545a283c4905cc542d1fadee93af175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
