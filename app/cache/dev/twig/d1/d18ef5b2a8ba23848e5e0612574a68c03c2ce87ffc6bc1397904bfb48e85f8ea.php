<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_84e35917e1b704d85e37d0390cba069372d89c225c7bfa94ecb1add39348c02d extends Twig_Template
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
        $__internal_1f1e5db5830f1ffa06f12ef30d9c20f3d6a3541ee909f0b1de814bb96bcf3fb2 = $this->env->getExtension("native_profiler");
        $__internal_1f1e5db5830f1ffa06f12ef30d9c20f3d6a3541ee909f0b1de814bb96bcf3fb2->enter($__internal_1f1e5db5830f1ffa06f12ef30d9c20f3d6a3541ee909f0b1de814bb96bcf3fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1f1e5db5830f1ffa06f12ef30d9c20f3d6a3541ee909f0b1de814bb96bcf3fb2->leave($__internal_1f1e5db5830f1ffa06f12ef30d9c20f3d6a3541ee909f0b1de814bb96bcf3fb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
