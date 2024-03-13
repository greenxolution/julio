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

/* themes/gavias_castron/templates/node/node--team.html.twig */
class __TwigTemplate_112d9f6dff33787c12f32801a71c2c37 extends Template
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
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 

<div";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo ">
  <div class=\"team-block team-v1\">
    <div class=\"team-image\">
      ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
      <div class=\"socials-team\">
        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21)) {
                // line 22
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 23
            echo " 
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24)) {
                // line 25
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 26
            echo " 
        ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27)) {
                // line 28
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 29
            echo " 
        ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30)) {
                // line 31
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 32
            echo " 
      </div>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 36, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36), 36, $this->source));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), 37, $this->source));
            echo "</div>
    </div>
    <div class=\"team-skills\">
      ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 41), 41, $this->source), "--");
                // line 42
                echo "            ";
                if (((($__internal_compile_0 = ($context["skill"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["0"] ?? null) : null) && (($__internal_compile_1 = ($context["skill"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["1"] ?? null) : null))) {
                    // line 43
                    echo "              <div class=\"team-skill\">
                <div class=\"progress-label\">";
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["skill"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["0"] ?? null) : null), 44, $this->source), "html", null, true);
                    echo "</div>
                 <div class=\"progress\">
                   <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["skill"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["1"] ?? null) : null), 46, $this->source), "html", null, true);
                    echo "%\"><span></span></div>
                   <span class=\"percentage\"><span></span>";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["skill"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["1"] ?? null) : null), 47, $this->source), "html", null, true);
                    echo "%</span>
                </div>
              </div>
            ";
                }
                // line 50
                echo "  
         
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo " 
    </div>
  </div>
</div>  

";
        } elseif ((        // line 57
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 58
            echo "
<div";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
            echo ">
  <div class=\"team-block team-v2\">
    <div class=\"team-image\">
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"team-content\">
      <div class=\"socials-team\">
        ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66)) {
                // line 67
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 68
            echo " 
        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69)) {
                // line 70
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 71
            echo " 
        ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72)) {
                // line 73
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 74
            echo " 
        ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75)) {
                // line 76
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 77
            echo " 
      </div>
      <div class=\"team-name\"><a href=\"";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 79, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79), 79, $this->source));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 80), "value", [], "any", false, false, true, 80), 80, $this->source));
            echo "</div>
    </div>
    <div class=\"team-skills\">
      ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 84
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 84), 84, $this->source), "--");
                // line 85
                echo "            ";
                if (((($__internal_compile_5 = ($context["skill"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["0"] ?? null) : null) && (($__internal_compile_6 = ($context["skill"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["1"] ?? null) : null))) {
                    // line 86
                    echo "              <div class=\"team-skill\">
                <div class=\"progress-label\">";
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["skill"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["0"] ?? null) : null), 87, $this->source), "html", null, true);
                    echo "</div>
                 <div class=\"progress\">
                   <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 89
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = ($context["skill"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["1"] ?? null) : null), 89, $this->source), "html", null, true);
                    echo "%\"><span></span></div>
                   <span class=\"percentage\"><span></span>";
                    // line 90
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = ($context["skill"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["1"] ?? null) : null), 90, $this->source), "html", null, true);
                    echo "%</span>
                </div>
              </div>
            ";
                }
                // line 93
                echo "  
         
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo " 
    </div>
  </div>
</div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 102
            echo "<!-- Start Display article for detail page -->

<article";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 104), "addClass", ["node-detail"], "method", false, false, true, 104), 104, $this->source), "html", null, true);
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), 108, $this->source));
            echo "</div>
      <div class=\"job\">";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 109), "value", [], "any", false, false, true, 109), 109, $this->source));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_description", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Info"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_contact", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "</div>
            <div class=\"socials\">
              ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_social", [], "any", false, false, true, 123));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 124
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 124), "field_team_social_link", [], "any", false, false, true, 124), "value", [], "any", false, false, true, 124), 124, $this->source));
                echo "\">
                  <i class=\"";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 125), "field_team_social_icon", [], "any", false, false, true, 125), "value", [], "any", false, false, true, 125), 125, $this->source));
                echo "\"></i>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Education"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_education", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "</div>
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 138), 138, $this->source), "html", null, true);
            echo ">
      ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 139, $this->source), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_quote", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo " </div>

    ";
            // line 144
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 144)) {
                // line 145
                echo "      <div id=\"node-single-comment\">
        ";
                // line 146
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 148
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 155
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "url", "content_attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/node/node--team.html.twig";
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
        return array (  406 => 155,  397 => 148,  391 => 146,  388 => 145,  386 => 144,  381 => 142,  375 => 139,  371 => 138,  362 => 132,  358 => 131,  352 => 127,  343 => 125,  338 => 124,  334 => 123,  329 => 121,  325 => 120,  318 => 116,  311 => 112,  305 => 109,  301 => 108,  294 => 104,  290 => 102,  281 => 95,  273 => 93,  266 => 90,  262 => 89,  257 => 87,  254 => 86,  251 => 85,  248 => 84,  244 => 83,  238 => 80,  232 => 79,  228 => 77,  222 => 76,  220 => 75,  217 => 74,  211 => 73,  209 => 72,  206 => 71,  200 => 70,  198 => 69,  195 => 68,  189 => 67,  187 => 66,  180 => 62,  174 => 59,  171 => 58,  169 => 57,  162 => 52,  154 => 50,  147 => 47,  143 => 46,  138 => 44,  135 => 43,  132 => 42,  129 => 41,  125 => 40,  119 => 37,  113 => 36,  107 => 32,  101 => 31,  99 => 30,  96 => 29,  90 => 28,  88 => 27,  85 => 26,  79 => 25,  77 => 24,  74 => 23,  68 => 22,  66 => 21,  61 => 19,  55 => 16,  50 => 14,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_castron/templates/node/node--team.html.twig", "/var/www/html/hbmsusa/themes/gavias_castron/templates/node/node--team.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14, "for" => 40);
        static $filters = array("clean_class" => 4, "escape" => 16, "e" => 36, "split" => 41, "t" => 120, "without" => 139);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'e', 'split', 't', 'without'],
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
