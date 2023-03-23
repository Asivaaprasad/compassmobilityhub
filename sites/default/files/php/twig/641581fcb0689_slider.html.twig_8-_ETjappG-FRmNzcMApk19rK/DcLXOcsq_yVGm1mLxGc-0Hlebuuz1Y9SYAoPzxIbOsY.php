<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @zuvi/template-parts/slider.html.twig */
class __TwigTemplate_6165905deba101f84e3c4528da8a5b58 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"slider\">
  <div class=\"container\">
  <div class=\"slider-container\">
    <div class=\"slider-text\">
      <ul class=\"js-rotating\">
        ";
        // line 6
        if ((($context["slider_code"] ?? null) != "")) {
            // line 7
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 7, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>,<hr>"));
            echo "
        ";
        } else {
            // line 9
            echo "        <li>
  \t\t\t\t<h1>Zuvi is <em>Multipurpose</em> Drupal theme</h1>
  \t\t\t\t<p>Zuvi Theme is packed full of all the amazing features and options for you to create a successful website</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Welcome To <em>Drupar</em> Design Studio</h1>
  \t\t\t\t<p>We present you material design. We put our hearts and soul into making every project.</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>We Create <em>Awesome</em> Drupal Themes!</h1>
  \t\t\t\t<p>Our themes are of high quality, flexible and beautifully crafted that stand out of crowd.</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
        ";
        }
        // line 25
        echo "      </ul> <!--/.home-slider -->
    </div><!-- /slider-text -->
    <div class=\"slider-image\">
      ";
        // line 28
        if ((($context["slider_image_path"] ?? null) != "")) {
            // line 29
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image_path"] ?? null), 29, $this->source), "html", null, true);
            echo "\" alt=\"slider image\" />
      ";
        } else {
            // line 31
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source), "html", null, true);
            echo "/images/slider.svg\" alt=\"slider image\" />
      ";
        }
        // line 33
        echo "    </div><!-- /slider-image -->
  </div> <!--/.slider-container -->
  </div> <!--/.container -->
</section>
";
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  85 => 31,  79 => 29,  77 => 28,  72 => 25,  54 => 9,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/slider.html.twig", "/home/user/public_html/compass-e-mobility/themes/custom/zuvi/templates/template-parts/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("raw" => 7, "striptags" => 7, "escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
