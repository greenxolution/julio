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

/* themes/gavias_castron/templates/page/header.html.twig */
class __TwigTemplate_e7ef9567287500ba012b586a6bb5fa0e extends Template
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
        echo "<header id=\"header\" class=\"header-default\">
  
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"content\">";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</div> 
        </div>
      </div>
    </div>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        $context["class_sticky"] = "";
        // line 14
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 15
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 16
            echo "  ";
        }
        echo "  

  <div class=\"header-main\">
    <div class=\"container\">
      <div class=\"header-inner clearfix\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-4 col-xs-4 branding\">
            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 23)) {
            // line 24
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "          </div>
          <div class=\"col-md-9 col-sm-8 col-xs-8 right-header\">
            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 28)) {
            // line 29
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 31
        echo "          </div>
        </div>  
      </div>
    </div>  
  </div>

  <div class=\"main-menu ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 37, $this->source), "html", null, true);
        echo "\">
    <div class=\"container header-content-layout\">
      <div class=\"header-main-inner p-relative\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12 p-static\">
            <div class=\"area-main-menu\">
              <div class=\"area-inner\">
                <div class=\"gva-offcanvas-mobile\">
                  <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                  ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 46)) {
            // line 47
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
                  
                  ";
        }
        // line 49
        echo "  
                  ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 50)) {
            // line 51
            echo "                    <div class=\"after-offcanvas hidden\">
                      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
                    </div>
                 ";
        }
        // line 55
        echo "                </div>
                  
                <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                  <span class=\"one\"></span>
                  <span class=\"two\"></span>
                  <span class=\"three\"></span>
                </div>
                
                ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_side", [], "any", false, false, true, 63)) {
            // line 64
            echo "                  <div class=\"quick-side-icon hidden-xs hidden-sm\">
                    <div class=\"icon\"><a href=\"#\"><span class=\"qicon fa fa-bars\"></span></a></div>
                  </div>
                ";
        }
        // line 68
        echo "
                ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 69)) {
            // line 70
            echo "                  <div class=\"gva-search-region search-region\">
                    <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                    <div class=\"search-content\">  
                      ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
                    </div>  
                  </div>
                ";
        }
        // line 77
        echo "              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</header>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "sticky_menu"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/page/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  178 => 77,  171 => 73,  166 => 70,  164 => 69,  161 => 68,  155 => 64,  153 => 63,  143 => 55,  137 => 52,  134 => 51,  132 => 50,  129 => 49,  122 => 47,  120 => 46,  108 => 37,  100 => 31,  94 => 29,  92 => 28,  88 => 26,  82 => 24,  80 => 23,  69 => 16,  66 => 15,  63 => 14,  61 => 13,  58 => 12,  50 => 7,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_castron/templates/page/header.html.twig", "/var/www/html/hbmsusa/themes/gavias_castron/templates/page/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 13);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
