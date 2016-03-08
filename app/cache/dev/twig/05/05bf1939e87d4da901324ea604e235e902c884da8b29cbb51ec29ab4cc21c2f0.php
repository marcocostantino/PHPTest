<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e1b44d5f58aaf1964277fbbede5375437cad89d8e1e00f2f4fdb4052b06fd51c extends Twig_Template
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
        $__internal_704059259152ad34d04523b968bd466a538aaea775b59b6a17c4cfb66c549af9 = $this->env->getExtension("native_profiler");
        $__internal_704059259152ad34d04523b968bd466a538aaea775b59b6a17c4cfb66c549af9->enter($__internal_704059259152ad34d04523b968bd466a538aaea775b59b6a17c4cfb66c549af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_704059259152ad34d04523b968bd466a538aaea775b59b6a17c4cfb66c549af9->leave($__internal_704059259152ad34d04523b968bd466a538aaea775b59b6a17c4cfb66c549af9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
