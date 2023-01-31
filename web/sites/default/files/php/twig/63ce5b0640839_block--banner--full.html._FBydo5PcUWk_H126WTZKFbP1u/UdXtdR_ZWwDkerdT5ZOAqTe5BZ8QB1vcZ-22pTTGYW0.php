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

/* themes/custom/workiy/templates/block/block--banner--full.html.twig */
class __TwigTemplate_c720dd11f8e6cce0ace576ff8f2419b5 extends \Twig\Template
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
        // line 75
        echo "    </div>
</section>";
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        <div class=\"wky-container\">
            <div class=\"wky-row wky-wrap mobile-reverse\">
                <div class=\"wky-col-sm-12 wky-col-lg-7\">
                    <div class=\"ebook-banner-left\">
                        ";
        // line 44
        if (($context["label"] ?? null)) {
            // line 45
            echo "                        <h1 class=\"heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 45, $this->source), "html", null, true);
            echo "</h1>
                        ";
        }
        // line 47
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 47)) {
            // line 48
            echo "                        <h2 class=\"heading medium\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 48), 0, [], "any", false, false, true, 48), 48, $this->source)))), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 50
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 50)) {
            // line 51
            echo "                        <p class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 51), 51, $this->source)))), "html", null, true);
            echo "</p>
                        ";
        }
        // line 53
        echo "                        <div class=\"btns\">
                            ";
        // line 54
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 54), 0, [], "any", false, false, true, 54)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null)) {
            // line 55
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 55), 0, [], "any", false, false, true, 55)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null), 55, $this->source), "html", null, true);
            echo "\" class=\"btn primary-btn down-arrow\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 55), 0, [], "any", false, false, true, 55)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 55, $this->source), "html", null, true);
            echo "</a>
                            ";
        }
        // line 57
        echo "                            ";
        if ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 57), 0, [], "any", false, false, true, 57)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#url"] ?? null) : null)) {
            // line 58
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url"] ?? null) : null), 58, $this->source), "html", null, true);
            echo "\" class=\"btn eye secondary-btn bg-white\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#title"] ?? null) : null), 58, $this->source), "html", null, true);
            echo "</a>
                            ";
        }
        // line 60
        echo "                        </div>
                        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bottom_text", [], "any", false, false, true, 61)) {
            // line 62
            echo "                        <p class=\"note-word\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bottom_text", [], "any", false, false, true, 62), 0, [], "any", false, false, true, 62), 62, $this->source)))), "html", null, true);
            echo "</p>
                        ";
        }
        // line 64
        echo "                    </div>
                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-5\">
                    <div class=\"ebook-banner-right\">
                        <img src=\"";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 68)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "uri", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
        echo "\" alt=\"ebook-banner\" class=\"mobile-hidden\" >
                        <div class=\"ebook-mobile-icon desktop-hidden\"></div>
                    </div>
                </div>
            </div>
        </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/block/block--banner--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 68,  137 => 64,  131 => 62,  129 => 61,  126 => 60,  118 => 58,  115 => 57,  107 => 55,  105 => 54,  102 => 53,  96 => 51,  93 => 50,  87 => 48,  84 => 47,  78 => 45,  76 => 44,  70 => 40,  66 => 39,  61 => 75,  59 => 39,  55 => 38,  51 => 37,  47 => 36,  44 => 35,  42 => 32,  41 => 31,  40 => 29,);
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
            <div class=\"wky-row wky-wrap mobile-reverse\">
                <div class=\"wky-col-sm-12 wky-col-lg-7\">
                    <div class=\"ebook-banner-left\">
                        {% if label %}
                        <h1 class=\"heading\">{{ label }}</h1>
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
                            <a href=\"{{ content.field_link2.0['#url'] }}\" class=\"btn eye secondary-btn bg-white\">{{ content.field_link2.0['#title'] }}</a>
                            {% endif %}
                        </div>
                        {% if content.field_bottom_text %}
                        <p class=\"note-word\">{{ content.field_bottom_text.0|render|striptags|trim }}</p>
                        {% endif %}
                    </div>
                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-5\">
                    <div class=\"ebook-banner-right\">
                        <img src=\"{{ file_url(content.field_image[0]['#media'].field_media_image.entity.uri.value) }}\" alt=\"ebook-banner\" class=\"mobile-hidden\" >
                        <div class=\"ebook-mobile-icon desktop-hidden\"></div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
    </div>
</section>", "themes/custom/workiy/templates/block/block--banner--full.html.twig", "/var/www/html/web/themes/custom/workiy/templates/block/block--banner--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "block" => 39, "if" => 44);
        static $filters = array("clean_class" => 31, "escape" => 36, "trim" => 48, "striptags" => 48, "render" => 48);
        static $functions = array("file_url" => 68);

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
