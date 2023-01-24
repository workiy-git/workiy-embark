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

/* __string_template__6191fba1a95fe5cd6cbdffb4372af7e7 */
class __TwigTemplate_2f3bf1489a25bb63d74c8d9308a2a7de extends \Twig\Template
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
        echo "<div class=\"service-main-content\">
        <div class=\"wky-row wky-wrap\">
          <div class=\"wky-col-sm-12 wky-col-lg-12\">
            <div class=\"service-heading\">
              <h2 class=\"heading\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 5, $this->source), "html", null, true);
        echo "</h2>              
              ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 6, $this->source), "html", null, true);
        echo " 
              <p class=\"description\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description__value"] ?? null), 7, $this->source), "html", null, true);
        echo "</p>
              <a href=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_taxonomy_term"] ?? null), 8, $this->source), "html", null, true);
        echo "\" class=\"primary-btn btn right-arrow\"> Read more </a>
            </div>
          </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__6191fba1a95fe5cd6cbdffb4372af7e7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"service-main-content\">
        <div class=\"wky-row wky-wrap\">
          <div class=\"wky-col-sm-12 wky-col-lg-12\">
            <div class=\"service-heading\">
              <h2 class=\"heading\">{{ name }}</h2>              
              {{ field_image }} 
              <p class=\"description\">{{ description__value }}</p>
              <a href=\"{{ view_taxonomy_term }}\" class=\"primary-btn btn right-arrow\"> Read more </a>
            </div>
          </div>
        </div>
</div>", "__string_template__6191fba1a95fe5cd6cbdffb4372af7e7", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
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
