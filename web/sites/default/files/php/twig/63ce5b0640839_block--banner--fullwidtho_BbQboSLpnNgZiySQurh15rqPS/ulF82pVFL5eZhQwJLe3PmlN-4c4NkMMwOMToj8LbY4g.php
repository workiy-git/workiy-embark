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

/* themes/custom/workiy/templates/block/block--banner--fullwidthoverlay.html.twig */
class __TwigTemplate_3721279305f2b5453220b8dc907be153 extends \Twig\Template
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
        echo "<section class=\"about-banner-overlay\">
    <div class=\"w-container-fluid\">
        <div class=\"w-row\">
            <div class=\"w-col-12\">
                <div";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
                    ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 40, $this->source), "html", null, true);
        echo "
                    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
        echo "
                    ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                    <div class=\"about-wrapper\">
                        <div class=\"about-img\">
                            <picture>
                                <source srcset=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 46)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 46), "entity", [], "any", false, false, true, 46), "uri", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source), "wbanner"), "html", null, true);
        echo " 1x\" type=\"image/webp\">
                                <source srcset=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 47)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 47), "entity", [], "any", false, false, true, 47), "uri", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source), "banner"), "html", null, true);
        echo " 1x\" type=\"image/jpeg\">
                                <img src=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 48)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "uri", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), 48, $this->source), "banner"), "html", null, true);
        echo "\" alt=\"Home-page-banner\">
                            </picture>
                        </div>
                        <div class=\"about-caption-wrapper\">
                            <div class=\"wky-container\">
                                <div class=\"wky-row align-center\">
                                    <div class=\"wky-col-lg-6\">
                                        <div class=\"about-caption\">
                                            ";
        // line 56
        if (($context["label"] ?? null)) {
            // line 57
            echo "                                                <h1 class=\"heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 57, $this->source), "html", null, true);
            echo "</h1>
                                                ";
        }
        // line 59
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 59)) {
            // line 60
            echo "                                                <h2 class=\"heading light\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60), 60, $this->source)))), "html", null, true);
            echo "</h2>
                                            ";
        }
        // line 62
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 62)) {
            // line 63
            echo "                                                <p class=\"about description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 63), 63, $this->source)))), "html", null, true);
            echo "</p>
                                            ";
        }
        // line 65
        echo "                                            <div class=\"btns\">
                                                ";
        // line 66
        if ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 66), 0, [], "any", false, false, true, 66)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#url"] ?? null) : null)) {
            // line 67
            echo "                                                    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 67), 0, [], "any", false, false, true, 67)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#url"] ?? null) : null), 67, $this->source), "html", null, true);
            echo "\" class=\"btn primary-btn down-arrow\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 67), 0, [], "any", false, false, true, 67)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#title"] ?? null) : null), 67, $this->source), "html", null, true);
            echo "</a>
                                                ";
        }
        // line 69
        echo "                                                ";
        if ((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#url"] ?? null) : null)) {
            // line 70
            echo "                                                    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 70), 0, [], "any", false, false, true, 70)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#url"] ?? null) : null), 70, $this->source), "html", null, true);
            echo "\" class=\"btn eye bg-white\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link2", [], "any", false, false, true, 70), 0, [], "any", false, false, true, 70)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#title"] ?? null) : null), 70, $this->source), "html", null, true);
            echo "</a>
                                                ";
        }
        // line 72
        echo "                                            </div>
                                            ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bottom_text", [], "any", false, false, true, 73)) {
            // line 74
            echo "                                                <p class=\"note-word\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bottom_text", [], "any", false, false, true, 74), 0, [], "any", false, false, true, 74), 74, $this->source)))), "html", null, true);
            echo "</p>
                                            ";
        }
        // line 76
        echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/block/block--banner--fullwidthoverlay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 76,  155 => 74,  153 => 73,  150 => 72,  142 => 70,  139 => 69,  131 => 67,  129 => 66,  126 => 65,  120 => 63,  117 => 62,  111 => 60,  108 => 59,  102 => 57,  100 => 56,  89 => 48,  85 => 47,  81 => 46,  76 => 43,  72 => 42,  64 => 83,  62 => 42,  58 => 41,  54 => 40,  50 => 39,  44 => 35,  42 => 32,  41 => 31,  40 => 29,);
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
<section class=\"about-banner-overlay\">
    <div class=\"w-container-fluid\">
        <div class=\"w-row\">
            <div class=\"w-col-12\">
                <div{{ attributes.addClass(classes) }}>
                    {{ title_prefix }}
                    {{ title_suffix }}
                    {% block content %}
                    <div class=\"about-wrapper\">
                        <div class=\"about-img\">
                            <picture>
                                <source srcset=\"{{ content.field_image[0]['#media'].field_media_image.entity.uri.value| image_style('wbanner') }} 1x\" type=\"image/webp\">
                                <source srcset=\"{{ content.field_image[0]['#media'].field_media_image.entity.uri.value| image_style('banner') }} 1x\" type=\"image/jpeg\">
                                <img src=\"{{ content.field_image[0]['#media'].field_media_image.entity.uri.value| image_style('banner') }}\" alt=\"Home-page-banner\">
                            </picture>
                        </div>
                        <div class=\"about-caption-wrapper\">
                            <div class=\"wky-container\">
                                <div class=\"wky-row align-center\">
                                    <div class=\"wky-col-lg-6\">
                                        <div class=\"about-caption\">
                                            {% if label %}
                                                <h1 class=\"heading\">{{ label }}</h1>
                                                {% endif %}
                                            {% if content.field_subtitle %}
                                                <h2 class=\"heading light\">{{ content.field_subtitle.0|render|striptags|trim }}</h2>
                                            {% endif %}
                                            {% if content.body %}
                                                <p class=\"about description\">{{ content.body|render|striptags|trim }}</p>
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
                        </div>
                    </div>
                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
</section>", "themes/custom/workiy/templates/block/block--banner--fullwidthoverlay.html.twig", "/var/www/html/web/themes/custom/workiy/templates/block/block--banner--fullwidthoverlay.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "block" => 42, "if" => 56);
        static $filters = array("clean_class" => 31, "escape" => 39, "image_style" => 46, "trim" => 60, "striptags" => 60, "render" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'image_style', 'trim', 'striptags', 'render'],
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
