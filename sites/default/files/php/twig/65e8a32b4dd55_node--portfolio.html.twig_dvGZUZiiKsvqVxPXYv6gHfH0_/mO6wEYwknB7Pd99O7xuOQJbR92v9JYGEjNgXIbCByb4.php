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

/* themes/gavias_castron/templates/node/node--portfolio.html.twig */
class __TwigTemplate_d3937d05de3e655209b42aa5c8b1beda extends Template
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
        // line 2
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), "clearfix"];
        // line 12
        echo "
<!-- Start Display article for teaser page -->

";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 16
            echo "
  <div class=\"portfolio-v1\">      
    <div class=\"portfolio-content\">
      <div class=\"images lightGallery\">
        ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
        <a class=\"link\" href=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 21, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <div class=\"title\"> <a href=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 25, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 25, $this->source), "html", null, true);
            echo "</a> </div>
          <div class=\"category\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</div>
        </div>    
      </div>
    </div>
  </div>

";
        } elseif ((        // line 32
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 33
            echo "  <div class=\"portfolio-v2\">      
    <div class=\"portfolio-content\">
      <div class=\"images lightGallery\">
        ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
        <a class=\"link\" href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 37, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
      </div>
      <div class=\"content-inner\"> <div class=\"title\"> <a href=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 39, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 39, $this->source), "html", null, true);
            echo "</a> </div><div class=\"category\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "</div></div>    
    </div>
  </div>
";
        } else {
            // line 43
            echo "
<!-- Start Display article for detail page -->
";
            // line 45
            $context["xcol"] = "col-md-12 col-sm-12 col-xs-12";
            // line 46
            if (($context["informations"] ?? null)) {
                // line 47
                echo "  ";
                $context["xcol"] = "col-md-6 col-sm-12 col-xs-12";
            }
            // line 48
            echo " 

<article";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 50), "addClass", ["node-detail"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
            echo ">
  <div class=\"post-block portfolio-single\">
    
    <div class=\"row\">
      <div class=\"";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["xcol"] ?? null), 54, $this->source), "html", null, true);
            echo "\"> 
        <div class=\"post-thumbnail\">
          ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 56)) {
                // line 57
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo " 
          ";
            }
            // line 59
            echo "        </div>
      </div>
      ";
            // line 61
            if (($context["informations"] ?? null)) {
                // line 62
                echo "      <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["xcol"] ?? null), 62, $this->source), "html", null, true);
                echo "\">
        <div class=\"portfolio-informations\">
          ";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["informations"] ?? null), 64, $this->source));
                echo "
        </div>
      </div>  
      ";
            }
            // line 68
            echo "    </div> 
     
    <div class=\"post-content\">
      
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 72, $this->source), "html", null, true);
            echo "
         <h1";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["post-title"], "method", false, false, true, 73), 73, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 73, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 74, $this->source), "html", null, true);
            echo "         
      <div class=\"post-meta\">
        <span class=\"post-categories\">";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</span><span class=\"line\"></span><span class=\"post-created\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 76, $this->source), "html", null, true);
            echo " </span>
      </div>
      
      <div";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo ">
        ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 80, $this->source), "field_portfolio_images", "field_portfolio_tags", "field_portfolio_information", "comment"), "html", null, true);
            echo "
      </div>

      ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 83)) {
                // line 84
                echo "        <div id=\"node-single-comment\">
          ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 88
            echo "
    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "url", "label", "informations", "attributes", "title_prefix", "title_attributes", "title_suffix", "date", "content_attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/node/node--portfolio.html.twig";
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
        return array (  217 => 88,  211 => 85,  208 => 84,  206 => 83,  200 => 80,  196 => 79,  188 => 76,  183 => 74,  177 => 73,  173 => 72,  167 => 68,  160 => 64,  154 => 62,  152 => 61,  148 => 59,  142 => 57,  140 => 56,  135 => 54,  128 => 50,  124 => 48,  120 => 47,  118 => 46,  116 => 45,  112 => 43,  101 => 39,  96 => 37,  92 => 36,  87 => 33,  85 => 32,  76 => 26,  70 => 25,  63 => 21,  59 => 20,  53 => 16,  51 => 15,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_castron/templates/node/node--portfolio.html.twig", "/var/www/html/hbmsusa/themes/gavias_castron/templates/node/node--portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 15);
        static $filters = array("clean_class" => 4, "escape" => 20, "raw" => 64, "without" => 80);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'without'],
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
