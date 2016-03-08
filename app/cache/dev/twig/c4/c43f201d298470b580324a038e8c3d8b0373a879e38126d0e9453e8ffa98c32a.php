<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_56f71fc680a552d23e90126907137aaed0a9a72ce43a6ed26561b766a0664003 extends Twig_Template
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
        $__internal_7383912483e44a50681acd94f24d16ee20f6bcf8b84a7afcba6c90680bc0be2d = $this->env->getExtension("native_profiler");
        $__internal_7383912483e44a50681acd94f24d16ee20f6bcf8b84a7afcba6c90680bc0be2d->enter($__internal_7383912483e44a50681acd94f24d16ee20f6bcf8b84a7afcba6c90680bc0be2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7383912483e44a50681acd94f24d16ee20f6bcf8b84a7afcba6c90680bc0be2d->leave($__internal_7383912483e44a50681acd94f24d16ee20f6bcf8b84a7afcba6c90680bc0be2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
