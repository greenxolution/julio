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

/* themes/gavias_castron/templates/views/services/views-view-unformatted--service-tab.html.twig */
class __TwigTemplate_18ca31a920874c27e4a8dfc8847ba673 extends Template
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
        echo "<div class=\"gsc-carousel-content\"> 
   <div class=\"carousel-nav\">
      <div class=\"tab-carousel-nav slick-slider\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "          ";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            $context["tmp_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 6
            echo "          <div class=\"slick-slide\">
            <a class=\"link-service\">
              ";
            // line 8
            ob_start(function () { return ''; });
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tmp_content"] ?? null), 8, $this->source), "<div class=\"sp-info\">")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[3] ?? null) : null), 8, $this->source))));
            echo " ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            echo "              ";
            if (($context["icon"] ?? null)) {
                echo "<i class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 9, $this->source), "html", null, true);
                echo "\"></i>";
            }
            // line 10
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tmp_content"] ?? null), 10, $this->source), "<div class=\"sp-info\">")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), 10, $this->source))));
            echo "
            </a>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </div>
   </div>

   <div class=\"tab-lists-content\">
      <div class=\"tab-carousel-list-here slick-slider\"> 
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            echo "            <div class=\"slick-slide\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </div>
   </div>      
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/views/services/views-view-unformatted--service-tab.html.twig";
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
        return array (  101 => 22,  92 => 20,  88 => 19,  81 => 14,  70 => 10,  63 => 9,  57 => 8,  53 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_castron/templates/views/services/views-view-unformatted--service-tab.html.twig", "/var/www/html/hbmsusa/themes/gavias_castron/templates/views/services/views-view-unformatted--service-tab.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "set" => 5, "if" => 9);
        static $filters = array("escape" => 5, "raw" => 8, "trim" => 8, "striptags" => 8, "split" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'raw', 'trim', 'striptags', 'split'],
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
