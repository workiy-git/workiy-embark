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

/* themes/custom/workiy/templates/block/block--banner--halfwidth.html.twig */
class __TwigTemplate_d2945a3f89a75641856d8d3bac4d16fa extends \Twig\Template
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
        // line 29
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31), 31, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null), 32, $this->source)))];
        // line 35
        echo "<section id=\"ebook-banner\">
    <div";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
        ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 37, $this->source), "html", null, true);
        echo "
        ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 38, $this->source), "html", null, true);
        echo "
        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "    </div>
</section>";
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        <div class=\"wky-container\">
            <div class=\"wky-row wky-wrap\">
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-right\">
                        <img src=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 44)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "uri", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source)), "html", null, true);
        echo "\" alt=\"ebook-banner\" >
                    </div>
                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-left\">
                        ";
        // line 49
        if (($context["label"] ?? null)) {
            // line 50
            echo "                        <h2 class=\"heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 50, $this->source), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 52
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 52)) {
            // line 53
            echo "                        <h2 class=\"heading medium\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 53), 0, [], "any", false, false, true, 53), 53, $this->source)))), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 55
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 55)) {
            // line 56
            echo "                        <p class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 56), 56, $this->source)))), "html", null, true);
            echo "</p>
                        ";
        }
        // line 58
        echo "                        <div class=\"btns\">
                            ";
        // line 59
        if ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 59), 0, [], "any", false, false, true, 59)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null)) {
            // line 60
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#url"] ?? null) : null), 60, $this->source), "html", null, true);
            echo "\" class=\"btn primary-btn down-arrow\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 60, $this->source), "html", null, true);
            echo "</a>
                            ";
        }
        // line 62
        echo "                            ";
        if ((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 62), 0, [], "any", false, false, true, 62)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#url"] ?? null) : null)) {
            // line 63
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 63), 0, [], "any", false, false, true, 63)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#url"] ?? null) : null), 63, $this->source), "html", null, true);
            echo "\" class=\"btn eye bg-white\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 63), 0, [], "any", false, false, true, 63)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#title"] ?? null) : null), 63, $this->source), "html", null, true);
            echo "</a>
                            ";
        }
        // line 65
        echo "                        </div>
                        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bottom_text", [], "any", false, false, true, 66)) {
            // line 67
            echo "                        <p class=\"note-word\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bottom_text", [], "any", false, false, true, 67), 0, [], "any", false, false, true, 67), 67, $this->source)))), "html", null, true);
            echo "</p>
                        ";
        }
        // line 69
        echo "                    </div>
                </div>
            </div>
        </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/block/block--banner--halfwidth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 69,  139 => 67,  137 => 66,  134 => 65,  126 => 63,  123 => 62,  115 => 60,  113 => 59,  110 => 58,  104 => 56,  101 => 55,  95 => 53,  92 => 52,  86 => 50,  84 => 49,  76 => 44,  70 => 40,  66 => 39,  61 => 74,  59 => 39,  55 => 38,  51 => 37,  47 => 36,  44 => 35,  42 => 32,  41 => 31,  40 => 29,);
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
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<section id=\"ebook-banner\">
    <div{{ attributes.addClass(classes) }}>
        {{ title_prefix }}
        {{ title_suffix }}
        {% block content %}
        <div class=\"wky-container\">
            <div class=\"wky-row wky-wrap\">
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-right\">
                        <img src=\"{{ file_url(content.field_image[0]['#media'].field_media_image.entity.uri.value) }}\" alt=\"ebook-banner\" >
                    </div>
                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-left\">
                        {% if label %}
                        <h2 class=\"heading\">{{ label }}</h2>
                        {% endif %}
                        {% if content.field_subtitle %}
                        <h2 class=\"heading medium\">{{ content.field_subtitle.0|render|striptags|trim }}</h2>
                        {% endif %}
                        {% if content.body %}
                        <p class=\"description\">{{ content.body|render|striptags|trim }}</p>
                        {% endif %}
                        <div class=\"btns\">
                            {% if content.field_link.0['#url'] %}
                            <a href=\"{{ content.field_link.0['#url'] }}\" class=\"btn primary-btn down-arrow\">{{ content.field_link.0['#title'] }}</a>
                            {% endif %}
                            {% if content.field_link2.0['#url'] %}
                            <a href=\"{{ content.field_link2.0['#url'] }}\" class=\"btn eye bg-white\">{{ content.field_link2.0['#title'] }}</a>
                            {% endif %}
                        </div>
                        {% if content.field_bottom_text %}
                        <p class=\"note-word\">{{ content.field_bottom_text.0|render|striptags|trim }}</p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
    </div>
</section>", "themes/custom/workiy/templates/block/block--banner--halfwidth.html.twig", "/var/www/html/web/themes/custom/workiy/templates/block/block--banner--halfwidth.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "block" => 39, "if" => 49);
        static $filters = array("clean_class" => 31, "escape" => 36, "trim" => 53, "striptags" => 53, "render" => 53);
        static $functions = array("file_url" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render'],
                ['file_url']
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
