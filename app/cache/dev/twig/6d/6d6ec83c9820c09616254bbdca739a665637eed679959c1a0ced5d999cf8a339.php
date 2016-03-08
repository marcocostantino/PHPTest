<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_03cbe088f8ecddd285140ca8a63077a705d230450745dd0c05d38b6be405acf4 extends Twig_Template
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
        $__internal_f3dafdb06f4b375dedc8315e4bb45c725875c85ec0c86531f3bdb8f47cf5b52f = $this->env->getExtension("native_profiler");
        $__internal_f3dafdb06f4b375dedc8315e4bb45c725875c85ec0c86531f3bdb8f47cf5b52f->enter($__internal_f3dafdb06f4b375dedc8315e4bb45c725875c85ec0c86531f3bdb8f47cf5b52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f3dafdb06f4b375dedc8315e4bb45c725875c85ec0c86531f3bdb8f47cf5b52f->leave($__internal_f3dafdb06f4b375dedc8315e4bb45c725875c85ec0c86531f3bdb8f47cf5b52f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
