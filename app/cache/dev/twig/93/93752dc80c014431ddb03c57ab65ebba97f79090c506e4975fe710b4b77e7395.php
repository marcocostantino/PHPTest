<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_378015d939802c8187b5b03359e5574c911ef0c6720d7e275f9d7dc9742b089f extends Twig_Template
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
        $__internal_996dc68cfada3101ccdf2b922edc2c2d0e5e2c592558cf85bf2a8b38a7795200 = $this->env->getExtension("native_profiler");
        $__internal_996dc68cfada3101ccdf2b922edc2c2d0e5e2c592558cf85bf2a8b38a7795200->enter($__internal_996dc68cfada3101ccdf2b922edc2c2d0e5e2c592558cf85bf2a8b38a7795200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_996dc68cfada3101ccdf2b922edc2c2d0e5e2c592558cf85bf2a8b38a7795200->leave($__internal_996dc68cfada3101ccdf2b922edc2c2d0e5e2c592558cf85bf2a8b38a7795200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
