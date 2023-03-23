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

/* @zuvi/template-parts/header.html.twig */
class __TwigTemplate_832d0cb24d54993b6080978673eb8fb3 extends \Twig\Template
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
        echo "<!-- Start: Header -->
<header class=\"header\">
  <div class=\"header-circle header-circle1\"></div>
  <div class=\"header-circle header-circle2\"></div>
  <div class=\"header-circle header-circle3\"></div>
  <div class=\"header-circle header-circle4\"></div>
  <div class=\"header-circle header-circle5\"></div>
  <div class=\"header-circle header-circle6\"></div>
  <div class=\"container\">
    <div class=\"header-main\">
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 11)) {
            // line 12
            echo "      <div class=\"site-brand\">
        ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 16
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 16) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 16))) {
            // line 17
            echo "      <div class=\"header-main-right\">
        ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 18)) {
                // line 19
                echo "          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> ";
                // line 20
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 27
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 27)) {
                // line 28
                echo "          ";
                $this->loadTemplate("@zuvi/template-parts/search.html.twig", "@zuvi/template-parts/header.html.twig", 28)->display($context);
                // line 29
                echo "        ";
            }
            // line 30
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 32
        echo "    </div> <!-- /.header-main -->
  </div> <!-- /.container -->
  ";
        // line 34
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 35
            echo "    ";
            $this->loadTemplate("@zuvi/template-parts/slider.html.twig", "@zuvi/template-parts/header.html.twig", 35)->display($context);
            // line 36
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 37
            echo "    ";
            $this->loadTemplate("@zuvi/template-parts/page_header.html.twig", "@zuvi/template-parts/header.html.twig", 37)->display($context);
            // line 38
            echo "  ";
        }
        // line 39
        echo "</header>
";
        // line 40
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 41
            echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 160\"><path fill=\"#020312\" fill-opacity=\"1\" d=\"M0,32L60,26.7C120,21,240,11,360,42.7C480,75,600,149,720,154.7C840,160,960,96,1080,74.7C1200,53,1320,75,1380,85.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z\"></path></svg>
";
        }
        // line 43
        echo "<!-- End: Header -->
";
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  120 => 41,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  106 => 36,  103 => 35,  101 => 34,  97 => 32,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  77 => 23,  72 => 20,  70 => 19,  68 => 18,  65 => 17,  62 => 16,  56 => 13,  53 => 12,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/header.html.twig", "/home/user/public_html/compass-e-mobility/themes/custom/zuvi/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "include" => 28);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
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
