<?php

/* layout/elements/header.twig */
class __TwigTemplate_afa9a0022d8477550a60923249c2a72c18b8b97c24c01c2b51d59f6139452385 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</title>
    <link rel=\"shortcut icon\" href=\"image/png/favicon.png\" type=\"image/x-icon\">
    <!-- Bootstrap , fonts & icons  -->
    <!-- Bootstrap , fonts & icons  -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "fonts/icon-font/css/style.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "fonts/typography-font/typo.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "fonts/fontawesome-5/css/all.css\">
    <!-- Plugin'stylesheets  -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/aos/aos.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/fancybox/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/nice-select/nice-select.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/slick/slick.min.css\">
    <!-- Vendor stylesheets  -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "css/settings.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "css/main.css\">
    <!-- Custom stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "css/custom.css\">
</head>

";
    }

    public function getTemplateName()
    {
        return "layout/elements/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  72 => 22,  68 => 21,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta http-equiv="X-UA-Compatible" content="ie=edge">*/
/*     <title>{{ page.title }}</title>*/
/*     <link rel="shortcut icon" href="image/png/favicon.png" type="image/x-icon">*/
/*     <!-- Bootstrap , fonts & icons  -->*/
/*     <!-- Bootstrap , fonts & icons  -->*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}plugins/bootstrap/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}fonts/icon-font/css/style.css">*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}fonts/typography-font/typo.css">*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}fonts/fontawesome-5/css/all.css">*/
/*     <!-- Plugin'stylesheets  -->*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}plugins/aos/aos.min.css">*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}plugins/fancybox/jquery.fancybox.min.css">*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}plugins/nice-select/nice-select.min.css">*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}plugins/slick/slick.min.css">*/
/*     <!-- Vendor stylesheets  -->*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}css/settings.css">*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}css/main.css">*/
/*     <!-- Custom stylesheet -->*/
/*     <link rel="stylesheet" href="{{ config.urls.templates }}css/custom.css">*/
/* </head>*/
/* */
/* */
