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

/* themes/custom/workiy/templates/block/block--banner--featuredcontent.html.twig */
class __TwigTemplate_3525e1bea9c9a52909ea8542822479a6 extends \Twig\Template
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
        // line 69
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
                <div class=\"wky-col-sm-12\">
                    <div class=\"fc-label\">Featured Content</div>
                    ";
        // line 44
        if (($context["label"] ?? null)) {
            // line 45
            echo "                        <h2 class=\"heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 45, $this->source), "html", null, true);
            echo "</h2>
                    ";
        }
        // line 47
        echo "                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-right\">
                        <img src=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 50)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 50), "entity", [], "any", false, false, true, 50), "uri", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
        echo "\" alt=\"ebook-banner\" >
                    </div>
                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-left\">
                        ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 55)) {
            // line 56
            echo "                        <!-- hide by vidya<p class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 56), 56, $this->source)))), "html", null, true);
            echo "</p>-->
\t\t\t<p class=\"description\">";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</p>
                        ";
        }
        // line 59
        echo "                        <div class=\"btns\">
                            ";
        // line 60
        if ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null)) {
            // line 61
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 61), 0, [], "any", false, false, true, 61)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#url"] ?? null) : null), 61, $this->source), "html", null, true);
            echo "\" class=\"btn primary-btn down-arrow\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 61), 0, [], "any", false, false, true, 61)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 61, $this->source), "html", null, true);
            echo "</a>
                            ";
        }
        // line 63
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/block/block--banner--featuredcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 63,  114 => 61,  112 => 60,  109 => 59,  104 => 57,  99 => 56,  97 => 55,  89 => 50,  84 => 47,  78 => 45,  76 => 44,  70 => 40,  66 => 39,  61 => 69,  59 => 39,  55 => 38,  51 => 37,  47 => 36,  44 => 35,  42 => 32,  41 => 31,  40 => 29,);
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
                <div class=\"wky-col-sm-12\">
                    <div class=\"fc-label\">Featured Content</div>
                    {% if label %}
                        <h2 class=\"heading\">{{ label }}</h2>
                    {% endif %}
                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-right\">
                        <img src=\"{{ file_url(content.field_image[0]['#media'].field_media_image.entity.uri.value) }}\" alt=\"ebook-banner\" >
                    </div>
                </div>
                <div class=\"wky-col-sm-12 wky-col-lg-6\">
                    <div class=\"ebook-banner-left\">
                        {% if content.body %}
                        <!-- hide by vidya<p class=\"description\">{{ content.body|render|striptags|trim }}</p>-->
\t\t\t<p class=\"description\">{{ content.body }}</p>
                        {% endif %}
                        <div class=\"btns\">
                            {% if content.field_link.0['#url'] %}
                            <a href=\"{{ content.field_link.0['#url'] }}\" class=\"btn primary-btn down-arrow\">{{ content.field_link.0['#title'] }}</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
    </div>
</section>", "themes/custom/workiy/templates/block/block--banner--featuredcontent.html.twig", "/var/www/html/web/themes/custom/workiy/templates/block/block--banner--featuredcontent.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "block" => 39, "if" => 44);
        static $filters = array("clean_class" => 31, "escape" => 36, "trim" => 56, "striptags" => 56, "render" => 56);
        static $functions = array("file_url" => 50);

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
