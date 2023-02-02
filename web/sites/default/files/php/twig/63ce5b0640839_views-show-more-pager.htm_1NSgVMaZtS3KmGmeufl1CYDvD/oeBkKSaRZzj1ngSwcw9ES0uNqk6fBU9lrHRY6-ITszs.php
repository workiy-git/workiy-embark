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

/* modules/contrib/views_show_more/templates/views-show-more-pager.html.twig */
class __TwigTemplate_84c036427c60f0a7950b1dbb5975763b extends \Twig\Template
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
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 15)) {
            // line 16
            echo "  <nav role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 16, $this->source), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 17, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
      <ul";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true);
            echo ">
        <li class=\"pager__item\">
          ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, true, 20)) {
                // line 21
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</a>
          ";
            } else {
                // line 23
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 25
            echo "        </li>
      </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_show_more/templates/views-show-more-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 23,  59 => 21,  57 => 20,  52 => 18,  46 => 17,  41 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * The views show more pager template.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - item: Show more pager item.
 *
 * @see views_show_more_preprocess_views_show_more_pager()
 *
 * @ingroup themeable
 */
#}
{% if item.text %}
  <nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
      <ul{{ attributes }}>
        <li class=\"pager__item\">
          {% if item.href %}
            <a href=\"{{ item.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\">{{ item.text }}</a>
          {% else %}
            {{ item.text }}
          {% endif %}
        </li>
      </ul>
  </nav>
{% endif %}
", "modules/contrib/views_show_more/templates/views-show-more-pager.html.twig", "/var/www/html/web/modules/contrib/views_show_more/templates/views-show-more-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16, "t" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
