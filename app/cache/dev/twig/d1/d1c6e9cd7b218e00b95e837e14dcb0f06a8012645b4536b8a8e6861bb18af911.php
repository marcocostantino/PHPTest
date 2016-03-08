<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_23b3da1e1b89e1305ba7d7d375336e9edaf27723fdc4dcd540e83b47f279210e extends Twig_Template
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
        $__internal_1b6ab4a28e364c15a1b49c3a87cad8268974b55ecb5a3af2d7a7d0d1af157be9 = $this->env->getExtension("native_profiler");
        $__internal_1b6ab4a28e364c15a1b49c3a87cad8268974b55ecb5a3af2d7a7d0d1af157be9->enter($__internal_1b6ab4a28e364c15a1b49c3a87cad8268974b55ecb5a3af2d7a7d0d1af157be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1b6ab4a28e364c15a1b49c3a87cad8268974b55ecb5a3af2d7a7d0d1af157be9->leave($__internal_1b6ab4a28e364c15a1b49c3a87cad8268974b55ecb5a3af2d7a7d0d1af157be9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
