<?php

/* layout/ui-home.twig */
class __TwigTemplate_c6746c5d6422203c68b0da3080a386ac8f412ab6e2336046b713ef5b084e4be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "layout/elements/header.twig");
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/ui-home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  24 => 3,  22 => 2,  20 => 1,);
    }
}
/* {{include("layout/elements/header.twig")}}*/
/*    {% block content %} {% endblock %}*/
/* {{include("layout/elements/footer.twig")}}*/
/* */
