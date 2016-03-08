<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_08daebd9da387a3da86df20bc8f8e48519a07806c0a0de8fd8ab1a0f6eeb71bb extends Twig_Template
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
        $__internal_f8a3e0c40749b295c72903c12e723d9319005edff9649db39082e2413203fb1d = $this->env->getExtension("native_profiler");
        $__internal_f8a3e0c40749b295c72903c12e723d9319005edff9649db39082e2413203fb1d->enter($__internal_f8a3e0c40749b295c72903c12e723d9319005edff9649db39082e2413203fb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f8a3e0c40749b295c72903c12e723d9319005edff9649db39082e2413203fb1d->leave($__internal_f8a3e0c40749b295c72903c12e723d9319005edff9649db39082e2413203fb1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
