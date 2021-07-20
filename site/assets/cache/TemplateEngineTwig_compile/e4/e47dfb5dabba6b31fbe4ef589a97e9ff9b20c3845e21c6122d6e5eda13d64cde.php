<?php

/* layout/ui-base.twig */
class __TwigTemplate_eabd7c3bd39e39a1a43f3e10bad640da1bb58d342233935997a34b00e43018bb extends Twig_Template
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
        // line 1
        echo twig_include($this->env, $context, "layout/elements/header.twig");
        // line 4
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout/ui-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 4,  19 => 1,);
    }
}
/* {{include("layout/elements/header.twig")}}*/
/* */
/* */
/* {{include("layout/elements/footer.twig")}}*/
/* */
