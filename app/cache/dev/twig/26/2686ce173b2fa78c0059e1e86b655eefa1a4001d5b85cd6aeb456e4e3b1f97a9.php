<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c29f6c2c650d24252dac13e5c607f0f39faab489cf92f1e3df3a31653e298349 extends Twig_Template
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
        $__internal_b9abf012f11efeabe6e2fd7e1725e2c7f6fe72f8a739b3fbfe784f3efdd885ff = $this->env->getExtension("native_profiler");
        $__internal_b9abf012f11efeabe6e2fd7e1725e2c7f6fe72f8a739b3fbfe784f3efdd885ff->enter($__internal_b9abf012f11efeabe6e2fd7e1725e2c7f6fe72f8a739b3fbfe784f3efdd885ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b9abf012f11efeabe6e2fd7e1725e2c7f6fe72f8a739b3fbfe784f3efdd885ff->leave($__internal_b9abf012f11efeabe6e2fd7e1725e2c7f6fe72f8a739b3fbfe784f3efdd885ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
