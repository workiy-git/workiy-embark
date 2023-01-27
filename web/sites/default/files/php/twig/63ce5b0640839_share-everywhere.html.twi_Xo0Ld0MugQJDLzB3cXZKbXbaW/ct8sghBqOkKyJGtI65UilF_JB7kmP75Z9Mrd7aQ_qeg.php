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

/* modules/contrib/share_everywhere/templates/share-everywhere.html.twig */
class __TwigTemplate_c933f2bc4a1bd31a3351a089a78364ae extends \Twig\Template
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
        // line 22
        echo "<div class=\"se-block ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 22, $this->source), "html", null, true);
        echo ">
  ";
        // line 23
        if (($context["title"] ?? null)) {
            // line 24
            echo "    <h3 class=\"block-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 24, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 26
        echo "  <div class=\"block-content\">
    <div class=\"se-container\">
      <div id=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["share_icon"] ?? null), "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\" class=\"se-trigger ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["share_icon"] ?? null), "class", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">
        <img src=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["share_icon"] ?? null), "src", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["share_icon"] ?? null), "alt", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\">
      </div>
      <div class=\"se-links-container\">
        <ul id=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["se_links_id"] ?? null), 32, $this->source), "html", null, true);
        echo "\" class=\"se-links ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_active"] ?? null), 32, $this->source), "html", null, true);
        echo "\">
          ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["button"]) {
            // line 34
            echo "            <li class=\"se-link ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 34, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["button"], 34, $this->source), "html", null, true);
            echo " </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </ul>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/share_everywhere/templates/share-everywhere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  82 => 34,  78 => 33,  72 => 32,  64 => 29,  58 => 28,  54 => 26,  48 => 24,  46 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for Share Everywhere module.
 *
 * Available variables:
 *  - attributes: Remaining HTML attributes for the element, including:
 *    - class: HTML classes that can be used to style contextually through CSS.
 *  - title: The title of the module.
 *  - facebook_like: The rendered Facebook like button if enabled in the settings.
 *  - share_icon: Universal share icon.
 *    - id: Unique id.
 *    - class: Additional classes.
 *    - src: Path to the share icon.
 *    - alt: Alt text of the image.
 *  - se_links_id: Unique id.
 *  - is_active: Gives se-active class to the ul element if it is setup to be non-collapsible or gives se-inactive by default.
 *  - buttons: The social buttons to be rendered.
 *
 */
#}
<div class=\"se-block {{ attributes.class }}\" {{ attributes }}>
  {% if title %}
    <h3 class=\"block-title\">{{ title }}</h3>
  {% endif %}
  <div class=\"block-content\">
    <div class=\"se-container\">
      <div id=\"{{ share_icon.id }}\" class=\"se-trigger {{ share_icon.class }}\">
        <img src=\"{{ share_icon.src }}\" alt=\"{{ share_icon.alt }}\">
      </div>
      <div class=\"se-links-container\">
        <ul id=\"{{ se_links_id }}\" class=\"se-links {{ is_active }}\">
          {% for key, button in buttons %}
            <li class=\"se-link {{ key }}\"> {{ button }} </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
</div>
", "modules/contrib/share_everywhere/templates/share-everywhere.html.twig", "/var/www/html/web/modules/contrib/share_everywhere/templates/share-everywhere.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "for" => 33);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
