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

/* themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig */
class __TwigTemplate_f4e03ea07e323b5c943364d8a46aa6ce extends Template
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
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "   
";
        // line 5
        if (($context["header"] ?? null)) {
            // line 6
            echo "  <header>
    ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 7, $this->source), "html", null, true);
            echo "
  </header>
";
        }
        // line 10
        echo "
";
        // line 11
        if (($context["title"] ?? null)) {
            // line 12
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 12, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 14
        echo "  
  <div class=\"uk-slideset-init\" data-uk-slideset=\"{animation: 'scale',xlarge:";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column"] ?? null), 15, $this->source), "html", null, true);
        echo ", large:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column"] ?? null), 15, $this->source), "html", null, true);
        echo ", medium:2, small:1}\">
    <div class=\"portfolio-filter clearfix\">
      <ul class=\"uk-subnav uk-subnav-pill nav nav-tabs\">
        ";
        // line 18
        if (($context["show_all"] ?? null)) {
            // line 19
            echo "          <li data-uk-filter=\"\" class=\"uk-active\"><a data-uk-filter='' href=\"#\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All"));
            echo "</a></li>
        ";
        }
        // line 20
        echo "  
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 22
            echo "          <li data-uk-filter=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "tid", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\"><a href=\"#\" class=\"btn-filter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pid"] ?? null), 22, $this->source), "html", null, true);
            echo "\" data-filter=\".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "tid", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\"><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</span></a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </ul> 
    </div>  
    <div class=\"uk-slidenav-position uk-margin\">
      <ul class=\"uk-grid uk-slideset\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 29
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29), 29, $this->source));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      </ul>
      <a href=\"#\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\"></a>
      <a href=\"#\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\"></a>
      <ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\"></ul>
    </div>  
  </div> 
   
";
        // line 38
        if (($context["attributes"] ?? null)) {
            // line 39
            echo "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "header", "title", "column", "show_all", "terms", "pid", "rows"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig";
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
        return array (  143 => 39,  141 => 38,  132 => 31,  123 => 29,  119 => 28,  113 => 24,  98 => 22,  94 => 21,  91 => 20,  85 => 19,  83 => 18,  75 => 15,  72 => 14,  66 => 12,  64 => 11,  61 => 10,  55 => 7,  52 => 6,  50 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig", "/var/www/html/hbmsusa/themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 21);
        static $filters = array("escape" => 2, "t" => 19, "raw" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'raw'],
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
