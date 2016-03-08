<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_95481f4fdc4f1f9e15365838c038b15b233c16e85ba1efaac2925bc825400397 extends Twig_Template
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
        $__internal_48337fc5bac9ed8c47e095b5c21f5a1154093a30259810cf206de5c7dfb0906e = $this->env->getExtension("native_profiler");
        $__internal_48337fc5bac9ed8c47e095b5c21f5a1154093a30259810cf206de5c7dfb0906e->enter($__internal_48337fc5bac9ed8c47e095b5c21f5a1154093a30259810cf206de5c7dfb0906e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_48337fc5bac9ed8c47e095b5c21f5a1154093a30259810cf206de5c7dfb0906e->leave($__internal_48337fc5bac9ed8c47e095b5c21f5a1154093a30259810cf206de5c7dfb0906e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
