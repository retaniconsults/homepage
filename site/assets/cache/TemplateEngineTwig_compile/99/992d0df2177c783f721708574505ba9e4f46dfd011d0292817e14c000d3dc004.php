<?php

/* home.twig */
class __TwigTemplate_162312191197f12117eb7a8c561cd36603d719f307912d420cbb98fbcc54c51d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/ui-home.twig", "home.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/ui-home.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <body>
    <div id=\"loading\">
        <div class=\"load-circle\"><span class=\"one\"></span></div>
    </div>
    <div class=\"site-wrapper overflow-hidden \">
        <!-- Header Area -->
        <header class=\"site-header header-5 sticky-header\">
            <div class=\"container-fluid pr-lg--30 pl-lg--30\">
                <nav class=\"navbar site-navbar offcanvas-active navbar-expand-lg navbar-light\">
                    <!-- Brand Logo-->
                    <div class=\"brand-logo mr--30\"><a href=\"javascript:\"><img src=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/logo-white.png\" alt=\"\"></a></div>
                    <div class=\"collapse navbar-collapse\" id=\"mobile-menu\">
                        <div class=\"navbar-nav mr--10 ml-lg-auto\">
                            <ul class=\"navbar-nav main-menu\">
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#features\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Demos</a>
                                    <ul class=\"menu-dropdown dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-1.html\">
                                                Landing 01
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-2.html\">
                                                Landing 02
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-3.html\">
                                                Landing 03
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-4.html\">
                                                Landing 04
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-5.html\">
                                                Landing 05
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-6.html\">
                                                Landing 06
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-7.html\">
                                                Landing 07
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item\">
                                            <a href=\"landing-8.html\">
                                                Landing 08
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown2\" href=\"#features\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                    <ul class=\"menu-dropdown dropdown-menu\" aria-labelledby=\"navbarDropdown2\">
                                        <li class=\"drop-menu-item\">
                                            <a href=\"about.html\">
                                                About us
                                            </a>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown21\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Career
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown21\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"career-page.html\">
                                                        Career
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"careerdetails.html\">
                                                        Career Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown22\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Case Study
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown22\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"case-study.html\">
                                                        Case Study
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"case-study-details.html\">
                                                        Case Study Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown23\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Blog
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown23\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"blog-regular.html\">
                                                        Blog Regular
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"blog-left-sidebar.html\">
                                                        Blog Left Sidebar
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"blog-right-sidebar.html\">
                                                        Blog Right Sidebar
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"blog-details.html\">
                                                        Blog Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown24\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Pricing
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown24\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"pricing-1.html\">
                                                        Pricing 01
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"pricing-2.html\">
                                                        Pricing 02
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown25\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Contact
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown25\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"contact-1.html\">
                                                        Contact 01
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"contact-2.html\">
                                                        Contact 02
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"contact-3.html\">
                                                        Contact 03
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown26\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Account
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown26\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"sign-in.html\">
                                                        Sign In 01
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"sign-in-img.html\">
                                                        Sign In 02
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"sign-up.html\">
                                                        Sign Up 01
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"sign-up-img.html\">
                                                        Sign Up 02
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"forget-pass.html\">
                                                        Reset Password 01
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"forget-pass-img.html\">
                                                        Reset Password 02
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown27\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Utitlity
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown27\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"404.html\">
                                                        404 Page
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"thank-you.html\">
                                                        Thank You
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"terms-page.html\">
                                                        Terms & Conditions
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"coming-soon.html\">
                                                        Coming soon
                                                    </a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"coming-soon-2.html\">
                                                        Coming soon 2
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"drop-menu-item dropdown\">
                                            <a class=\"dropdown-toggle\" id=\"navbarDropdown27\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Essential
                                            </a>
                                            <ul class=\"menu-dropdown dropdown-menu dropdown-right\" aria-labelledby=\"navbarDropdown27\">
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"./faq.html\">FAQ</a>
                                                </li>
                                                <li class=\"drop-menu-item\">
                                                    <a href=\"./review.html\">Reviews</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\" https://grayic.com/html-support/\" role=\"button\" aria-expanded=\"false\">Support</a>
                                </li>
                            </ul>
                            <button class=\"btn-close navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-menu\" aria-controls=\"mobile-menu\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
                                <i class=\"icon icon-simple-remove\"></i>
                            </button>
                        </div>
                    </div>
                    <div class=\"header-button ml-auto mr-3\">
                        <a href=\"#\" class=\"btn--primary btn-header\">Get Started</a>
                    </div>
                    <button class=\"navbar-toggler btn-close-off-canvas toggler-white\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-menu\" aria-controls=\"mobile-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <i class=\"icon icon-simple-remove icon-close\"></i>
                        <i class=\"icon icon-menu-34 icon-burger\"></i>
                    </button>
                </nav>
            </div>
        </header>
        <!-- Hero Area -->
        <div class=\"omga-05__hero-area \">
            <div class=\"container\">
                <div class=\"row position-relative\">
                    <div class=\"col-md-5 order-md-2 position-static\">
                        <div class=\"omga-05__hero-image\">
                            <img src=\"";
        // line 280
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/l5-hero-image.png\" alt=\"\" data-aos=\"fade-left\" data-aos-duration=\"500\" data-aos-delay=\"2200\" data-aos-once=\"true\">
                        </div>
                    </div>
                    <div class=\"col-md-7 order-md-1\">
                        <div class=\"omga-05__hero-content py-lg--50\">
                            <h1 class=\"title\">";
        // line 285
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog_headline", array());
        echo " </h1>
                            <p>Create custom landing pages with Omega that convert more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                            <div class=\"omga-05__hero-btn\">
                                <a href=\"\" class=\"btn--primary\">Start 14 Days Free Trial</a>
                                <span class=\"button-bottom-text\">No credit card required</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature section -->
        <div class=\"omga-05__feature-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-5 col-sm-6 mb--30\">
                        <div class=\"feature-widget--5\">
                            <div class=\"widget-icon\">
                                <img src=\"";
        // line 303
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/icon-layout.png\" alt=\"\">
                            </div>
                            <div class=\"widget-texts\">
                                <h3 class=\"title\">Multiple Modern Layouts</h3>
                                <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-5 col-sm-6 offset-md-1 offset-lg-0 mb--30\">
                        <div class=\"feature-widget--5\">
                            <div class=\"widget-icon\">
                                <img src=\"";
        // line 314
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/icon-layers.png\" alt=\"\">
                            </div>
                            <div class=\"widget-texts\">
                                <h3 class=\"title\">Built with Bootstrap 4</h3>
                                <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-5 col-sm-6 mb--30\">
                        <div class=\"feature-widget--5\">
                            <div class=\"widget-icon\">
                                <img src=\"";
        // line 325
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/icon-responsive.png\" alt=\"\">
                            </div>
                            <div class=\"widget-texts\">
                                <h3 class=\"title\">Fully Responsive</h3>
                                <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand section -->
        <div class=\"omga-05__brand-section\">
            <div class=\"container\">
                <div class=\"brand-logos\">
                    <div class=\"single-brand\">
                        <img src=\"";
        // line 341
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/brand-logo-l5-1.png\" alt=\"\">
                    </div>
                    <div class=\"single-brand\">
                        <img src=\"";
        // line 344
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/brand-logo-l5-2.png\" alt=\"\">
                    </div>
                    <div class=\"single-brand\">
                        <img src=\"";
        // line 347
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/brand-logo-l5-3.png\" alt=\"\">
                    </div>
                    <div class=\"single-brand\">
                        <img src=\"";
        // line 350
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/brand-logo-l5-4.png\" alt=\"\">
                    </div>
                    <div class=\"single-brand\">
                        <img src=\"";
        // line 353
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/brand-logo-l5-5.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <!-- Content section -->
        <div class=\"omga-05__content-section position-relative\">
            <div class=\"container\">
                <div class=\"row justify-content-center align-items-center justify-content-md-left\">
                    <div class=\"col-xl-6 col-lg-6\">
                        <div class=\"omga-05__content-text\">
                            <h2 class=\"title\">Make beautiful <br class=\"d-none d-sm-block d-md-none d-lg-block\"> landing pages easily.</h2>
                            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                            <ul class=\"omga-05__content-list\">
                                <li>50+ HTML Elements</li>
                                <li>6 Month Support</li>
                                <li>Bootstrap 4 Framework</li>
                                <li>Lifetime Updates</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-5 position-static\">
                        <div class=\"omga-05__content-image\">
                            <img src=\"";
        // line 376
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/l5-content-image.png\" alt=\"\" data-aos=\"fade-left\" data-aos-duration=\"600\" data-aos-once=\"true\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content section -->
        <div class=\"omga-05__content-section-2\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 mb--30 mb--lg-0\">
                        <div class=\"omga-05__content-image-2\" data-aos=\"fade-right\" data-aos-duration=\"500\" data-aos-delay=\"200\" data-aos-once=\"true\">
                            <img src=\"";
        // line 388
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/mobile.png\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-9\">
                        <div class=\"omga-05__content-text pt-xl--30\">
                            <h2 class=\"title\">Fits everything on <br class=\"d-none d-sm-block d-md-none d-xl-block\"> all your devices.</h2>
                            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                            <div class=\"content-widget-wrapper\">
                                <div class=\"content-widget--5\">
                                    <div class=\"widget-icon\">
                                        <img src=\"";
        // line 398
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/icon-3d-model.png\" alt=\"\">
                                    </div>
                                    <div class=\"widget-text\">
                                        <h3 class=\"widget-title\">Faster Development UI Kits</h3>
                                        <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                                    </div>
                                </div>
                                <div class=\"content-widget--5\">
                                    <div class=\"widget-icon\">
                                        <img src=\"";
        // line 407
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/icon-layot-25.png\" alt=\"\">
                                    </div>
                                    <div class=\"widget-text\">
                                        <h3 class=\"widget-title\">Faster Development UI Kits</h3>
                                        <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section -->



        <!-- Faq section -->
        <div class=\"omga-05__faq-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 mb--50\">
                        <div class=\"single-faq with-icon\">
                            <div class=\"faq-text\">
                                <h3 class=\"faq-title\">
                                    Can I use Omega for my clients?
                                </h3>
                                <p>Absolutely. The Envato Theme license allows you to build a websites for personal use or for a client. User Omega for your clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 mb--50\">
                        <div class=\"single-faq with-icon\">
                            <div class=\"faq-text\">
                                <h3 class=\"faq-title\">
                                    Do I get free updates?
                                </h3>
                                <p>Yes. We update all of our themes regularly, plus are constantly adding new components, pages, and features to our themes. Purchase once and get lifetime updates.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 mb--50\">
                        <div class=\"single-faq with-icon\">
                            <div class=\"faq-text\">
                                <h3 class=\"faq-title\">
                                    Does it work with WordPress?
                                </h3>
                                <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding. </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 mb--50\">
                        <div class=\"single-faq with-icon\">
                            <div class=\"faq-text\">
                                <h3 class=\"faq-title\">
                                    Will you provide support?
                                </h3>
                                <p>With lots of unique blocks, you can easily build a page without any design or custom coding. with Omega that converts more visitors than any website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA section -->

        <!-- Footer section -->
        <!-- Footer section -->
        <div class=\"footer-section footer-2 section-padding\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-3 col-md-4 mb--50 mb-lg--0\">
                        <div class=\"pr-lg--50\">
                            <div class=\"footer-logo mb--20\">
                                <img src=\"";
        // line 481
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "image/png/l1-logo.png\" alt=\"\">
                            </div>
                            <p>With lots of unique blocks, you can easily build a page without coding.</p>
                            <ul class=\"social-icons round-social\">
                                <li><a href=\"\"><i class=\"icon icon-logo-twitter\"></i></a></li>
                                <li><a href=\"\"><i class=\"icon icon-logo-instagram\"></i></a></li>
                                <li><a href=\"\"><i class=\"icon icon-logo-dribbble\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-6 col-lg-3\">
                                <div class=\"single-footer mb--50 mb-lg--30\">
                                    <h5 class=\"footer-title\">About</h5>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"\">Our mission</a></li>
                                        <li><a href=\"\">Our story</a></li>
                                        <li><a href=\"\">Team Members</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-6 col-lg-3\">
                                <div class=\"single-footer mb--50 mb-lg--30\">
                                    <h5 class=\"footer-title\">Learn</h5>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"\">Tutorials</a></li>
                                        <li><a href=\"\">How it works</a></li>
                                        <li><a href=\"\">F.A.Q</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-6 col-lg-3\">
                                <div class=\"single-footer mb--50 mb-lg--30\">
                                    <h5 class=\"footer-title\">Stories</h5>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"\">Blog</a></li>
                                        <li><a href=\"\">Tech stories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-6 col-lg-3\">
                                <div class=\"single-footer mb--50 mb-lg--30\">
                                    <h5 class=\"footer-title\">Contact us</h5>
                                    <ul class=\"footer-list contact-list\">
                                        <li><a href=\"\">support@uxtheme.net
                                            </a></li>
                                        <li><a href=\"\">+133-394-3439-1435</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 481,  478 => 407,  466 => 398,  453 => 388,  438 => 376,  412 => 353,  406 => 350,  400 => 347,  394 => 344,  388 => 341,  369 => 325,  355 => 314,  341 => 303,  320 => 285,  312 => 280,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layout/ui-home.twig' %}*/
/* */
/* {% block content %}*/
/*     <body>*/
/*     <div id="loading">*/
/*         <div class="load-circle"><span class="one"></span></div>*/
/*     </div>*/
/*     <div class="site-wrapper overflow-hidden ">*/
/*         <!-- Header Area -->*/
/*         <header class="site-header header-5 sticky-header">*/
/*             <div class="container-fluid pr-lg--30 pl-lg--30">*/
/*                 <nav class="navbar site-navbar offcanvas-active navbar-expand-lg navbar-light">*/
/*                     <!-- Brand Logo-->*/
/*                     <div class="brand-logo mr--30"><a href="javascript:"><img src="{{ config.urls.templates }}image/png/logo-white.png" alt=""></a></div>*/
/*                     <div class="collapse navbar-collapse" id="mobile-menu">*/
/*                         <div class="navbar-nav mr--10 ml-lg-auto">*/
/*                             <ul class="navbar-nav main-menu">*/
/*                                 <li class="nav-item dropdown">*/
/*                                     <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>*/
/*                                     <ul class="menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-1.html">*/
/*                                                 Landing 01*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-2.html">*/
/*                                                 Landing 02*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-3.html">*/
/*                                                 Landing 03*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-4.html">*/
/*                                                 Landing 04*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-5.html">*/
/*                                                 Landing 05*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-6.html">*/
/*                                                 Landing 06*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-7.html">*/
/*                                                 Landing 07*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="landing-8.html">*/
/*                                                 Landing 08*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li class="nav-item dropdown">*/
/*                                     <a class="nav-link dropdown-toggle" id="navbarDropdown2" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>*/
/*                                     <ul class="menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">*/
/*                                         <li class="drop-menu-item">*/
/*                                             <a href="about.html">*/
/*                                                 About us*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown21" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Career*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown21">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="career-page.html">*/
/*                                                         Career*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="careerdetails.html">*/
/*                                                         Career Details*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown22" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Case Study*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown22">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="case-study.html">*/
/*                                                         Case Study*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="case-study-details.html">*/
/*                                                         Case Study Details*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown23" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Blog*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown23">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="blog-regular.html">*/
/*                                                         Blog Regular*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="blog-left-sidebar.html">*/
/*                                                         Blog Left Sidebar*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="blog-right-sidebar.html">*/
/*                                                         Blog Right Sidebar*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="blog-details.html">*/
/*                                                         Blog Details*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown24" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Pricing*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown24">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="pricing-1.html">*/
/*                                                         Pricing 01*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="pricing-2.html">*/
/*                                                         Pricing 02*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown25" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Contact*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown25">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="contact-1.html">*/
/*                                                         Contact 01*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="contact-2.html">*/
/*                                                         Contact 02*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="contact-3.html">*/
/*                                                         Contact 03*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown26" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Account*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown26">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="sign-in.html">*/
/*                                                         Sign In 01*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="sign-in-img.html">*/
/*                                                         Sign In 02*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="sign-up.html">*/
/*                                                         Sign Up 01*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="sign-up-img.html">*/
/*                                                         Sign Up 02*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="forget-pass.html">*/
/*                                                         Reset Password 01*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="forget-pass-img.html">*/
/*                                                         Reset Password 02*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown27" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Utitlity*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown27">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="404.html">*/
/*                                                         404 Page*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="thank-you.html">*/
/*                                                         Thank You*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="terms-page.html">*/
/*                                                         Terms & Conditions*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="coming-soon.html">*/
/*                                                         Coming soon*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="coming-soon-2.html">*/
/*                                                         Coming soon 2*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="drop-menu-item dropdown">*/
/*                                             <a class="dropdown-toggle" id="navbarDropdown27" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                                 Essential*/
/*                                             </a>*/
/*                                             <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown27">*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="./faq.html">FAQ</a>*/
/*                                                 </li>*/
/*                                                 <li class="drop-menu-item">*/
/*                                                     <a href="./review.html">Reviews</a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li class="nav-item">*/
/*                                     <a class="nav-link" href=" https://grayic.com/html-support/" role="button" aria-expanded="false">Support</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <button class="btn-close navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">*/
/*                                 <i class="icon icon-simple-remove"></i>*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="header-button ml-auto mr-3">*/
/*                         <a href="#" class="btn--primary btn-header">Get Started</a>*/
/*                     </div>*/
/*                     <button class="navbar-toggler btn-close-off-canvas toggler-white" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">*/
/*                         <i class="icon icon-simple-remove icon-close"></i>*/
/*                         <i class="icon icon-menu-34 icon-burger"></i>*/
/*                     </button>*/
/*                 </nav>*/
/*             </div>*/
/*         </header>*/
/*         <!-- Hero Area -->*/
/*         <div class="omga-05__hero-area ">*/
/*             <div class="container">*/
/*                 <div class="row position-relative">*/
/*                     <div class="col-md-5 order-md-2 position-static">*/
/*                         <div class="omga-05__hero-image">*/
/*                             <img src="{{ config.urls.templates }}image/png/l5-hero-image.png" alt="" data-aos="fade-left" data-aos-duration="500" data-aos-delay="2200" data-aos-once="true">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-7 order-md-1">*/
/*                         <div class="omga-05__hero-content py-lg--50">*/
/*                             <h1 class="title"> {{ page.blog_headline }} </h1>*/
/*                             <p>Create custom landing pages with Omega that convert more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>*/
/*                             <div class="omga-05__hero-btn">*/
/*                                 <a href="" class="btn--primary">Start 14 Days Free Trial</a>*/
/*                                 <span class="button-bottom-text">No credit card required</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- Feature section -->*/
/*         <div class="omga-05__feature-section">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4 col-md-5 col-sm-6 mb--30">*/
/*                         <div class="feature-widget--5">*/
/*                             <div class="widget-icon">*/
/*                                 <img src="{{ config.urls.templates }}image/png/icon-layout.png" alt="">*/
/*                             </div>*/
/*                             <div class="widget-texts">*/
/*                                 <h3 class="title">Multiple Modern Layouts</h3>*/
/*                                 <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-5 col-sm-6 offset-md-1 offset-lg-0 mb--30">*/
/*                         <div class="feature-widget--5">*/
/*                             <div class="widget-icon">*/
/*                                 <img src="{{ config.urls.templates }}image/png/icon-layers.png" alt="">*/
/*                             </div>*/
/*                             <div class="widget-texts">*/
/*                                 <h3 class="title">Built with Bootstrap 4</h3>*/
/*                                 <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-5 col-sm-6 mb--30">*/
/*                         <div class="feature-widget--5">*/
/*                             <div class="widget-icon">*/
/*                                 <img src="{{ config.urls.templates }}image/png/icon-responsive.png" alt="">*/
/*                             </div>*/
/*                             <div class="widget-texts">*/
/*                                 <h3 class="title">Fully Responsive</h3>*/
/*                                 <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- Brand section -->*/
/*         <div class="omga-05__brand-section">*/
/*             <div class="container">*/
/*                 <div class="brand-logos">*/
/*                     <div class="single-brand">*/
/*                         <img src="{{ config.urls.templates }}image/png/brand-logo-l5-1.png" alt="">*/
/*                     </div>*/
/*                     <div class="single-brand">*/
/*                         <img src="{{ config.urls.templates }}image/png/brand-logo-l5-2.png" alt="">*/
/*                     </div>*/
/*                     <div class="single-brand">*/
/*                         <img src="{{ config.urls.templates }}image/png/brand-logo-l5-3.png" alt="">*/
/*                     </div>*/
/*                     <div class="single-brand">*/
/*                         <img src="{{ config.urls.templates }}image/png/brand-logo-l5-4.png" alt="">*/
/*                     </div>*/
/*                     <div class="single-brand">*/
/*                         <img src="{{ config.urls.templates }}image/png/brand-logo-l5-5.png" alt="">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- Content section -->*/
/*         <div class="omga-05__content-section position-relative">*/
/*             <div class="container">*/
/*                 <div class="row justify-content-center align-items-center justify-content-md-left">*/
/*                     <div class="col-xl-6 col-lg-6">*/
/*                         <div class="omga-05__content-text">*/
/*                             <h2 class="title">Make beautiful <br class="d-none d-sm-block d-md-none d-lg-block"> landing pages easily.</h2>*/
/*                             <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>*/
/*                             <ul class="omga-05__content-list">*/
/*                                 <li>50+ HTML Elements</li>*/
/*                                 <li>6 Month Support</li>*/
/*                                 <li>Bootstrap 4 Framework</li>*/
/*                                 <li>Lifetime Updates</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xl-6 col-lg-5 position-static">*/
/*                         <div class="omga-05__content-image">*/
/*                             <img src="{{ config.urls.templates }}image/png/l5-content-image.png" alt="" data-aos="fade-left" data-aos-duration="600" data-aos-once="true">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- Content section -->*/
/*         <div class="omga-05__content-section-2">*/
/*             <div class="container">*/
/*                 <div class="row align-items-center">*/
/*                     <div class="col-lg-6 mb--30 mb--lg-0">*/
/*                         <div class="omga-05__content-image-2" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">*/
/*                             <img src="{{ config.urls.templates }}image/png/mobile.png" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-6 col-md-9">*/
/*                         <div class="omga-05__content-text pt-xl--30">*/
/*                             <h2 class="title">Fits everything on <br class="d-none d-sm-block d-md-none d-xl-block"> all your devices.</h2>*/
/*                             <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>*/
/*                             <div class="content-widget-wrapper">*/
/*                                 <div class="content-widget--5">*/
/*                                     <div class="widget-icon">*/
/*                                         <img src="{{ config.urls.templates }}image/png/icon-3d-model.png" alt="">*/
/*                                     </div>*/
/*                                     <div class="widget-text">*/
/*                                         <h3 class="widget-title">Faster Development UI Kits</h3>*/
/*                                         <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="content-widget--5">*/
/*                                     <div class="widget-icon">*/
/*                                         <img src="{{ config.urls.templates }}image/png/icon-layot-25.png" alt="">*/
/*                                     </div>*/
/*                                     <div class="widget-text">*/
/*                                         <h3 class="widget-title">Faster Development UI Kits</h3>*/
/*                                         <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- Testimonial Section -->*/
/* */
/* */
/* */
/*         <!-- Faq section -->*/
/*         <div class="omga-05__faq-section">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-6 mb--50">*/
/*                         <div class="single-faq with-icon">*/
/*                             <div class="faq-text">*/
/*                                 <h3 class="faq-title">*/
/*                                     Can I use Omega for my clients?*/
/*                                 </h3>*/
/*                                 <p>Absolutely. The Envato Theme license allows you to build a websites for personal use or for a client. User Omega for your clients.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-6 mb--50">*/
/*                         <div class="single-faq with-icon">*/
/*                             <div class="faq-text">*/
/*                                 <h3 class="faq-title">*/
/*                                     Do I get free updates?*/
/*                                 </h3>*/
/*                                 <p>Yes. We update all of our themes regularly, plus are constantly adding new components, pages, and features to our themes. Purchase once and get lifetime updates.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-6 mb--50">*/
/*                         <div class="single-faq with-icon">*/
/*                             <div class="faq-text">*/
/*                                 <h3 class="faq-title">*/
/*                                     Does it work with WordPress?*/
/*                                 </h3>*/
/*                                 <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding. </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-6 mb--50">*/
/*                         <div class="single-faq with-icon">*/
/*                             <div class="faq-text">*/
/*                                 <h3 class="faq-title">*/
/*                                     Will you provide support?*/
/*                                 </h3>*/
/*                                 <p>With lots of unique blocks, you can easily build a page without any design or custom coding. with Omega that converts more visitors than any website.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- CTA section -->*/
/* */
/*         <!-- Footer section -->*/
/*         <!-- Footer section -->*/
/*         <div class="footer-section footer-2 section-padding">*/
/*             <div class="container">*/
/*                 <div class="row justify-content-center">*/
/*                     <div class="col-lg-3 col-md-4 mb--50 mb-lg--0">*/
/*                         <div class="pr-lg--50">*/
/*                             <div class="footer-logo mb--20">*/
/*                                 <img src="{{ config.urls.templates }}image/png/l1-logo.png" alt="">*/
/*                             </div>*/
/*                             <p>With lots of unique blocks, you can easily build a page without coding.</p>*/
/*                             <ul class="social-icons round-social">*/
/*                                 <li><a href=""><i class="icon icon-logo-twitter"></i></a></li>*/
/*                                 <li><a href=""><i class="icon icon-logo-instagram"></i></a></li>*/
/*                                 <li><a href=""><i class="icon icon-logo-dribbble"></i></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-9 col-md-8">*/
/*                         <div class="row">*/
/*                             <div class="col-6 col-lg-3">*/
/*                                 <div class="single-footer mb--50 mb-lg--30">*/
/*                                     <h5 class="footer-title">About</h5>*/
/*                                     <ul class="footer-list">*/
/*                                         <li><a href="">Our mission</a></li>*/
/*                                         <li><a href="">Our story</a></li>*/
/*                                         <li><a href="">Team Members</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-6 col-lg-3">*/
/*                                 <div class="single-footer mb--50 mb-lg--30">*/
/*                                     <h5 class="footer-title">Learn</h5>*/
/*                                     <ul class="footer-list">*/
/*                                         <li><a href="">Tutorials</a></li>*/
/*                                         <li><a href="">How it works</a></li>*/
/*                                         <li><a href="">F.A.Q</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-6 col-lg-3">*/
/*                                 <div class="single-footer mb--50 mb-lg--30">*/
/*                                     <h5 class="footer-title">Stories</h5>*/
/*                                     <ul class="footer-list">*/
/*                                         <li><a href="">Blog</a></li>*/
/*                                         <li><a href="">Tech stories</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-6 col-lg-3">*/
/*                                 <div class="single-footer mb--50 mb-lg--30">*/
/*                                     <h5 class="footer-title">Contact us</h5>*/
/*                                     <ul class="footer-list contact-list">*/
/*                                         <li><a href="">support@uxtheme.net*/
/*                                             </a></li>*/
/*                                         <li><a href="">+133-394-3439-1435</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     </body>*/
/* {% endblock %}*/
