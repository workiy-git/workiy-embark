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

/* __string_template__6c5ffd9368c3b2cb9c0fb5ff4772cc49 */
class __TwigTemplate_228313c231f6d42385da6747e6a6a4d0 extends \Twig\Template
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
        echo "<div class=\"details-page-banner\" background-color=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_color_"] ?? null), 1, $this->source), "html", null, true);
        echo "\" data-color=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_color_1"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
\t<div class=\"wky-container\">
\t\t<div class=\"wky-row wky-wrap\">
\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-12 details-page-banner-wrapper\">
\t\t\t\t";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_client_image"] ?? null), 5, $this->source), "html", null, true);
        echo "
\t\t\t\t<p class=\"logo-text\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_4"] ?? null), 6, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t<h1 class=\"heading\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__6c5ffd9368c3b2cb9c0fb5ff4772cc49";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  49 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"details-page-banner\" background-color=\"{{ field_color_ }}\" data-color=\"{{ field_color_1 }}\">
\t<div class=\"wky-container\">
\t\t<div class=\"wky-row wky-wrap\">
\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-12 details-page-banner-wrapper\">
\t\t\t\t{{ field_client_image }}
\t\t\t\t<p class=\"logo-text\">{{ title_4 }}</p>
\t\t\t\t<h1 class=\"heading\">{{ title }}</h1>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "__string_template__6c5ffd9368c3b2cb9c0fb5ff4772cc49", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
