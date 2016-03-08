<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6efc2b7092fefbf753aa64c4e7530ecdac52d70e3ef24683b7c8b05b4e270e1d extends Twig_Template
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
        $__internal_94ae27f70a2b5ab59d74bb380d5cea59d97424d58d6c22339244eeaf6013be7d = $this->env->getExtension("native_profiler");
        $__internal_94ae27f70a2b5ab59d74bb380d5cea59d97424d58d6c22339244eeaf6013be7d->enter($__internal_94ae27f70a2b5ab59d74bb380d5cea59d97424d58d6c22339244eeaf6013be7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_94ae27f70a2b5ab59d74bb380d5cea59d97424d58d6c22339244eeaf6013be7d->leave($__internal_94ae27f70a2b5ab59d74bb380d5cea59d97424d58d6c22339244eeaf6013be7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
