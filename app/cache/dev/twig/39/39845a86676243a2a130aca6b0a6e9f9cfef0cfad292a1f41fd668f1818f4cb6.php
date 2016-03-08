<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8e2e0388ae72d535ab2b609041d8d1d4c51d8ed4c62c419bf5635dca556e0eea extends Twig_Template
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
        $__internal_e5808bba828da989bb2d8df0a0093a76592a7c7cd251c58084fcd36b8a652733 = $this->env->getExtension("native_profiler");
        $__internal_e5808bba828da989bb2d8df0a0093a76592a7c7cd251c58084fcd36b8a652733->enter($__internal_e5808bba828da989bb2d8df0a0093a76592a7c7cd251c58084fcd36b8a652733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e5808bba828da989bb2d8df0a0093a76592a7c7cd251c58084fcd36b8a652733->leave($__internal_e5808bba828da989bb2d8df0a0093a76592a7c7cd251c58084fcd36b8a652733_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
