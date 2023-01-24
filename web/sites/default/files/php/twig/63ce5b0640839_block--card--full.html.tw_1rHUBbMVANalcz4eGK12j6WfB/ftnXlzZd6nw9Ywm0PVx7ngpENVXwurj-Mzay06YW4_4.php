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

/* themes/custom/workiy/templates/block/block--card--full.html.twig */
class __TwigTemplate_9b089ecf359eabecbac43d9dbe4b5338 extends \Twig\Template
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
        // line 30
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 32), 32, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["plugin_id"] ?? null), 33, $this->source)))];
        // line 35
        echo "\t


<section class=\"insight-featured\">
    <div class=\"wky-container\">
        <div";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">
            ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 41, $this->source), "html", null, true);
        echo "
            ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 42, $this->source), "html", null, true);
        echo "
            ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 109
        echo "        </div>
    </div>
</section>
";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                <div class=\"wky-row wky-wrap\">
                 ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card", [], "any", false, false, true, 45)) {
            // line 46
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card", [], "any", false, false, true, 46)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 47
                echo "                        <div class=\"wky-col-sm-12 wky-col-lg-6\">
                            ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 48)) {
                    // line 49
                    echo "                                <div class=\"featured left\">
                                    <div class=\"left-content\">
                                        <h3 class=\"heading medium\">
                                            ";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 52), "field_title", [], "any", false, false, true, 52)) {
                        // line 53
                        echo "                                                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 53), "field_title", [], "any", false, false, true, 53), 0, [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 55
                    echo "                                        </h3>
                                        <p class=\"description\">
                                            ";
                    // line 57
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 57), "field_description1", [], "any", false, false, true, 57)) {
                        // line 58
                        echo "                                                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 58), "field_description1", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58), 58, $this->source));
                        echo "
                                            ";
                    }
                    // line 60
                    echo "                                        </p>
                                    </div>
                                    <div class=\"left-img\">
                                         <img src=\"";
                    // line 63
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_media", [], "any", false, false, true, 63)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 63), "entity", [], "any", false, false, true, 63), "uri", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source)), "html", null, true);
                    echo "\" alt=\"about-us-card\">
                                    </div>
                                </div>
                            ";
                }
                // line 67
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 67) && ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 67) % 2) == 0))) {
                    // line 68
                    echo "                                <div class=\"featured right reverse\">
                                    <div class=\"right-content\">
                                        <h3 class=\"heading medium\">
                                            ";
                    // line 71
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 71), "field_title", [], "any", false, false, true, 71)) {
                        // line 72
                        echo "                                                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 72), "field_title", [], "any", false, false, true, 72), 0, [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 74
                    echo "                                        </h3>
                                        <p class=\"description\">
                                            ";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 76), "field_description1", [], "any", false, false, true, 76)) {
                        // line 77
                        echo "                                                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 77), "field_description1", [], "any", false, false, true, 77), 0, [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source));
                        echo "
                                            ";
                    }
                    // line 79
                    echo "                                        </p>
                                    </div>
                                    <div class=\"right-img\">
                                         <img src=\"";
                    // line 82
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_media", [], "any", false, false, true, 82)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 82), "entity", [], "any", false, false, true, 82), "uri", [], "any", false, false, true, 82), "value", [], "any", false, false, true, 82), 82, $this->source)), "html", null, true);
                    echo "\" alt=\"about-us-card\">
                                    </div>
                                </div>
                            ";
                } elseif (( !twig_get_attribute($this->env, $this->source,                 // line 85
$context["loop"], "first", [], "any", false, false, true, 85) && ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 85) % 2) != 0))) {
                    // line 86
                    echo "                                <div class=\"featured left\">
                                    <div class=\"left-content\">
                                        <h3 class=\"heading medium\">
                                            ";
                    // line 89
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 89), "field_title", [], "any", false, false, true, 89)) {
                        // line 90
                        echo "                                                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 90), "field_title", [], "any", false, false, true, 90), 0, [], "any", false, false, true, 90), "value", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 92
                    echo "                                        </h3>
                                        <p class=\"description\">
                                            ";
                    // line 94
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 94), "field_description1", [], "any", false, false, true, 94)) {
                        // line 95
                        echo "                                                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 95), "field_description1", [], "any", false, false, true, 95), 0, [], "any", false, false, true, 95), "value", [], "any", false, false, true, 95), 95, $this->source));
                        echo "
                                            ";
                    }
                    // line 97
                    echo "                                        </p>
                                    </div>
                                    <div class=\"left-img\">
                                         <img src=\"";
                    // line 100
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_media", [], "any", false, false, true, 100)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 100), "entity", [], "any", false, false, true, 100), "uri", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100), 100, $this->source)), "html", null, true);
                    echo "\" alt=\"about-us-card\">
                                    </div>
                                </div>
                            ";
                }
                // line 104
                echo "                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                ";
        }
        // line 107
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/block/block--card--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 107,  234 => 106,  219 => 104,  212 => 100,  207 => 97,  201 => 95,  199 => 94,  195 => 92,  189 => 90,  187 => 89,  182 => 86,  180 => 85,  174 => 82,  169 => 79,  163 => 77,  161 => 76,  157 => 74,  151 => 72,  149 => 71,  144 => 68,  141 => 67,  134 => 63,  129 => 60,  123 => 58,  121 => 57,  117 => 55,  111 => 53,  109 => 52,  104 => 49,  102 => 48,  99 => 47,  81 => 46,  79 => 45,  76 => 44,  72 => 43,  65 => 109,  63 => 43,  59 => 42,  55 => 41,  51 => 40,  44 => 35,  42 => 33,  41 => 32,  40 => 30,);
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
{# {{ attach_library('workiy/slick-slider') }} #}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}\t


<section class=\"insight-featured\">
    <div class=\"wky-container\">
        <div{{ attributes.addClass(classes) }}>
            {{ title_prefix }}
            {{ title_suffix }}
            {% block content %}
                <div class=\"wky-row wky-wrap\">
                 {% if content.field_card %}
                    {% for key, item in content.field_card['#items'] %}
                        <div class=\"wky-col-sm-12 wky-col-lg-6\">
                            {% if loop.first %}
                                <div class=\"featured left\">
                                    <div class=\"left-content\">
                                        <h3 class=\"heading medium\">
                                            {% if item.entity.field_title %}
                                                {{ item.entity.field_title.0.value }}
                                            {% endif %}
                                        </h3>
                                        <p class=\"description\">
                                            {% if item.entity.field_description1 %}
                                                {{ item.entity.field_description1.0.value|raw }}
                                            {% endif %}
                                        </p>
                                    </div>
                                    <div class=\"left-img\">
                                         <img src=\"{{ file_url(content.field_paragraph_media[key]['#media'].field_media_image.entity.uri.value) }}\" alt=\"about-us-card\">
                                    </div>
                                </div>
                            {% endif %}
                            {% if not loop.first and loop.index % 2 == 0 %}
                                <div class=\"featured right reverse\">
                                    <div class=\"right-content\">
                                        <h3 class=\"heading medium\">
                                            {% if item.entity.field_title %}
                                                {{ item.entity.field_title.0.value }}
                                            {% endif %}
                                        </h3>
                                        <p class=\"description\">
                                            {% if item.entity.field_description1 %}
                                                {{ item.entity.field_description1.0.value|raw }}
                                            {% endif %}
                                        </p>
                                    </div>
                                    <div class=\"right-img\">
                                         <img src=\"{{ file_url(content.field_paragraph_media[key]['#media'].field_media_image.entity.uri.value) }}\" alt=\"about-us-card\">
                                    </div>
                                </div>
                            {% elseif not loop.first and loop.index % 2 != 0 %}
                                <div class=\"featured left\">
                                    <div class=\"left-content\">
                                        <h3 class=\"heading medium\">
                                            {% if item.entity.field_title %}
                                                {{ item.entity.field_title.0.value }}
                                            {% endif %}
                                        </h3>
                                        <p class=\"description\">
                                            {% if item.entity.field_description1 %}
                                                {{ item.entity.field_description1.0.value|raw }}
                                            {% endif %}
                                        </p>
                                    </div>
                                    <div class=\"left-img\">
                                         <img src=\"{{ file_url(content.field_paragraph_media[key]['#media'].field_media_image.entity.uri.value) }}\" alt=\"about-us-card\">
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% endfor %}
                {% endif %}
                </div>
            {% endblock %}
        </div>
    </div>
</section>
", "themes/custom/workiy/templates/block/block--card--full.html.twig", "/var/www/html/web/themes/custom/workiy/templates/block/block--card--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "block" => 43, "if" => 45, "for" => 46);
        static $filters = array("clean_class" => 32, "escape" => 40, "raw" => 58);
        static $functions = array("file_url" => 63);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape', 'raw'],
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
