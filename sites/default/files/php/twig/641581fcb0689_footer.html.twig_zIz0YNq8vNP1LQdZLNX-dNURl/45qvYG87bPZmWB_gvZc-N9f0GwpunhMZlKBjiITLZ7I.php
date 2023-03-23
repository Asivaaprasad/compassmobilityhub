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

/* @zuvi/template-parts/footer.html.twig */
class __TwigTemplate_456ad956d4bbf5a1c852388607537aaa extends \Twig\Template
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
        echo "<!-- Start: Footer -->
<footer class=\"footer\">
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <section id=\"footer-top\">
      <div class=\"container\">
        <div class=\"footer-top\">";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</div>
      </div>
    </section>
  ";
        }
        // line 9
        echo "<!-- /footer-top -->

  ";
        // line 11
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 11) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 11))) {
            // line 12
            echo "    <section id=\"footer-blocks\">
      <div class=\"container\">
      <div class=\"footer-container\">
        <div class=\"footer-block\">
          ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 16)) {
                // line 17
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 19
            echo "        </div> <!--/footer-first -->

        <div class=\"footer-block\">
          ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 22)) {
                // line 23
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 25
            echo "        </div> <!--/footer-second -->

        <div class=\"footer-block\">
          ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 28)) {
                // line 29
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 31
            echo "        </div> <!--/footer-three -->

        <div class=\"footer-block last-footer-block\">
          ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 34)) {
                // line 35
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 37
            echo "        </div> <!--/footer-fourth -->
      </div> <!--/footer-container -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 41
        echo " ";
        // line 42
        echo "
  ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 43)) {
            // line 44
            echo "    <section id=\"footer-bottom\">
      <div class=\"container\">
        <div class=\"footer-bottom\">";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</div>
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 49
        echo "<!-- /footer-bottom -->

 ";
        // line 51
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 52
            echo "  <section id=\"footer-bottom-last\">
    <div class=\"container\">
    <div class=\"footer-bottom-last\">
      ";
            // line 55
            if (($context["copyright_text"] ?? null)) {
                // line 56
                echo "          <div class=\"copyright\">
            &copy; ";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 57, $this->source), "html", null, true);
                echo ", All rights reserved.
          </div>
      ";
            }
            // line 60
            echo "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 61
                echo "        <div class=\"footer-social-icons\">
          ";
                // line 62
                $this->loadTemplate("@zuvi/template-parts/social-icons.html.twig", "@zuvi/template-parts/footer.html.twig", 62)->display($context);
                // line 63
                echo "        </div>
      ";
            }
            // line 65
            echo "      </div> <!--/.text_right -->
    </div> <!-- /.footer-bottom-last -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 69
        echo " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 71
        if (($context["scrolltotop_on"] ?? null)) {
            // line 72
            echo "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 74
        echo "<!-- End: Footer -->
";
        // line 75
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvi/fontawesome"), "html", null, true);
            echo "
";
        }
        // line 78
        if (($context["font_icon_material"] ?? null)) {
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvi/material"), "html", null, true);
            echo "
";
        }
        // line 81
        if ((($context["circle_type"] ?? null) == "circle_solid")) {
            // line 82
            echo "<style>
.header-circle {
  background: var(--circle-color);
}
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 82,  210 => 81,  205 => 79,  203 => 78,  198 => 76,  196 => 75,  193 => 74,  189 => 72,  187 => 71,  183 => 69,  176 => 65,  172 => 63,  170 => 62,  167 => 61,  164 => 60,  156 => 57,  153 => 56,  151 => 55,  146 => 52,  144 => 51,  140 => 49,  133 => 46,  129 => 44,  127 => 43,  124 => 42,  122 => 41,  115 => 37,  109 => 35,  107 => 34,  102 => 31,  96 => 29,  94 => 28,  89 => 25,  83 => 23,  81 => 22,  76 => 19,  70 => 17,  68 => 16,  62 => 12,  60 => 11,  56 => 9,  49 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/footer.html.twig", "/home/user/public_html/compass-e-mobility/themes/custom/zuvi/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 62);
        static $filters = array("escape" => 6, "date" => 57);
        static $functions = array("attach_library" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
                ['attach_library']
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
