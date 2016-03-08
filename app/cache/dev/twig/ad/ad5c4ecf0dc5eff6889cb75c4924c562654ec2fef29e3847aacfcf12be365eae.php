<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_59ad6ae50cdd2c999929712ad8fc4335f5e71e561adc259895ce49a900263b92 extends Twig_Template
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
        $__internal_6c3f6005c0892f4e38fb5333720e4becfc6a5e289759a34f82ca9df338403a3f = $this->env->getExtension("native_profiler");
        $__internal_6c3f6005c0892f4e38fb5333720e4becfc6a5e289759a34f82ca9df338403a3f->enter($__internal_6c3f6005c0892f4e38fb5333720e4becfc6a5e289759a34f82ca9df338403a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6c3f6005c0892f4e38fb5333720e4becfc6a5e289759a34f82ca9df338403a3f->leave($__internal_6c3f6005c0892f4e38fb5333720e4becfc6a5e289759a34f82ca9df338403a3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
