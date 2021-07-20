<?php

/* layout/elements/footer.twig */
class __TwigTemplate_9a5ecfcce4e49b1a6f8599f8c40cc1821c58d135474f7600650f106a983ffd2b extends Twig_Template
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
        echo "<!-- Vendor Scripts -->
<script src=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/jquery/jquery.min.js\"></script>
<script src=\"";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/jquery/jquery-migrate.min.js\"></script>
<script src=\"";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- Plugin's Scripts -->
<script src=\"";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/fancybox/jquery.fancybox.min.js\"></script>
<script src=\"";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/nice-select/jquery.nice-select.min.js\"></script>
<script src=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/aos/aos.min.js\"></script>
<script src=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "plugins/slick/slick.min.js\"></script>
<!-- Activation Script -->
<script src=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "js/custom.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "layout/elements/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- Vendor Scripts -->*/
/* <script src="{{ config.urls.templates }}plugins/jquery/jquery.min.js"></script>*/
/* <script src="{{ config.urls.templates }}plugins/jquery/jquery-migrate.min.js"></script>*/
/* <script src="{{ config.urls.templates }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>*/
/* <!-- Plugin's Scripts -->*/
/* <script src="{{ config.urls.templates }}plugins/fancybox/jquery.fancybox.min.js"></script>*/
/* <script src="{{ config.urls.templates }}plugins/nice-select/jquery.nice-select.min.js"></script>*/
/* <script src="{{ config.urls.templates }}plugins/aos/aos.min.js"></script>*/
/* <script src="{{ config.urls.templates }}plugins/slick/slick.min.js"></script>*/
/* <!-- Activation Script -->*/
/* <script src="{{ config.urls.templates }}js/custom.js"></script>*/
/* </body>*/
/* */
/* </html>*/
