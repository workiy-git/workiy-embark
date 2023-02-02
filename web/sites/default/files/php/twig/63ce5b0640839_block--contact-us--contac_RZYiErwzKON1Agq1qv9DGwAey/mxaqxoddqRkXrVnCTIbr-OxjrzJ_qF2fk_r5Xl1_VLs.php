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

/* themes/custom/workiy/templates/block/block--contact-us--contactus.html.twig */
class __TwigTemplate_7150dc41a7b8374379cf2c6ca2ab284f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null), 38, $this->source)))];
        // line 41
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "<section class=\"get-contact\">
    <div";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
    ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 44, $this->source), "html", null, true);
        echo "
    ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 45, $this->source), "html", null, true);
        echo "
        <div class=\"wky-container\">
            <div class=\"wky-row wky-wrap\">
                    <div class=\"wky-col-sm-12 wky-col-lg-6 get-in-touch-wrapper\">
                        <div class=\"get-in-touch\">
                            ";
        // line 50
        if (($context["label"] ?? null)) {
            // line 51
            echo "                            <h3 class=\"heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 51, $this->source), "html", null, true);
            echo "</h3>
                            ";
        }
        // line 53
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 53)) {
            // line 54
            echo "                            <h3 class=\"heading light\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 54), 0, [], "any", false, false, true, 54), 54, $this->source)))), "html", null, true);
            echo "</h3>
                            ";
        }
        // line 56
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 56)) {
            // line 57
            echo "                            <p class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</p>
                            ";
        }
        // line 59
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 59)) {
            // line 60
            echo "                            <a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60), 60, $this->source)))), "html", null, true);
            echo "\" class=\"mail-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60), 60, $this->source)))), "html", null, true);
            echo "</a>
                            
                            ";
        }
        // line 63
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 63)) {
            // line 64
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 64), 0, [], "any", false, false, true, 64)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 64, $this->source), "html", null, true);
            echo "\" class=\"btn primary-btn right-arrow bg-blue\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 64), 0, [], "any", false, false, true, 64)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 64, $this->source), "html", null, true);
            echo "</a>
                            ";
        }
        // line 66
        echo "                        </div>
                    </div>
                    <div class=\"wky-col-sm-12 wky-col-lg-6 contact-wrapper\">
                        <div class=\"contact\">
                            <h3 class=\"heading\">Contact Us</h3>
                            ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "contact"), "html", null, true);
        echo "
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/block/block--contact-us--contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 71,  119 => 66,  111 => 64,  108 => 63,  99 => 60,  96 => 59,  90 => 57,  87 => 56,  81 => 54,  78 => 53,  72 => 51,  70 => 50,  62 => 45,  58 => 44,  54 => 43,  51 => 42,  44 => 41,  42 => 38,  41 => 37,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()

 <!--<div{{ attributes.addClass(classes) }}>
                {{ title_prefix }}
                {{ title_suffix }}
                {% block content %}
                {% endblock %}-->
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
{% block content %}
<section class=\"get-contact\">
    <div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {{ title_suffix }}
        <div class=\"wky-container\">
            <div class=\"wky-row wky-wrap\">
                    <div class=\"wky-col-sm-12 wky-col-lg-6 get-in-touch-wrapper\">
                        <div class=\"get-in-touch\">
                            {% if label %}
                            <h3 class=\"heading\">{{ label }}</h3>
                            {% endif %}
                            {% if content.field_subtitle %}
                            <h3 class=\"heading light\">{{ content.field_subtitle.0|render|striptags|trim }}</h3>
                            {% endif %}
                            {% if content.body %}
                            <p class=\"description\">{{ content.body }}</p>
                            {% endif %}
                            {% if content.field_email %}
                            <a href=\"mailto:{{ content.field_email.0|render|striptags|trim }}\" class=\"mail-link\">{{ content.field_email.0|render|striptags|trim }}</a>
                            
                            {% endif %}
                            {% if content.field_link %}
                            <a href=\"{{ content.field_link.0['#url'] }}\" class=\"btn primary-btn right-arrow bg-blue\">{{ content.field_link.0['#title'] }}</a>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"wky-col-sm-12 wky-col-lg-6 contact-wrapper\">
                        <div class=\"contact\">
                            <h3 class=\"heading\">Contact Us</h3>
                            {{ drupal_entity('webform', 'contact') }}
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "themes/custom/workiy/templates/block/block--contact-us--contactus.html.twig", "/var/www/html/web/themes/custom/workiy/templates/block/block--contact-us--contactus.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "block" => 41, "if" => 50);
        static $filters = array("clean_class" => 37, "escape" => 43, "trim" => 54, "striptags" => 54, "render" => 54);
        static $functions = array("drupal_entity" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render'],
                ['drupal_entity']
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
