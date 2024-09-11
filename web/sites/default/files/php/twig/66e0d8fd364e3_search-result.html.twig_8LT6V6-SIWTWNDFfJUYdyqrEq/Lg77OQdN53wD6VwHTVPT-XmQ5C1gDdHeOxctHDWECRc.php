<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/olivero/templates/content/search-result.html.twig */
class __TwigTemplate_847edfd2fed4a6857ed5991fd18a62ab extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/search-results"), "html", null, true);
        yield "
";
        // line 59
        if (($context["info_split"] ?? null)) {
            // line 60
            yield "  <div class=\"search-result__meta\">
    ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["info_split"] ?? null), "user", [], "any", false, false, true, 61)) {
                // line 62
                yield "      <span>
        ";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
                yield " ";
                $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    yield "<span class=\"search-result__author\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["info_split"] ?? null), "user", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                    yield "</span>";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
                // line 64
                yield "      </span>
    ";
            }
            // line 66
            yield "    ";
            if (($context["info_date"] ?? null)) {
                // line 67
                yield "      <span  class=\"search-result__date\">, ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info_date"] ?? null), 67, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 69
            yield "  </div>
";
        }
        // line 71
        if (($context["title"] ?? null)) {
            // line 72
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 72, $this->source), "html", null, true);
            yield "
  <h3";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["search-result__title"], "method", false, false, true, 73), 73, $this->source), "html", null, true);
            yield ">
    <a href=\"";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 74, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 74, $this->source), "html", null, true);
            yield "</a>
  </h3>
  ";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 76, $this->source), "html", null, true);
            yield "
";
        }
        // line 78
        if (($context["snippet"] ?? null)) {
            // line 79
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["search-result__snippet", ($context["layout"] ?? null), "text-content"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["snippet"] ?? null), 79, $this->source), "html", null, true);
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["info_split", "info_date", "title", "title_prefix", "title_attributes", "url", "title_suffix", "snippet", "content_attributes", "layout"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/search-result.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  106 => 79,  104 => 78,  99 => 76,  92 => 74,  88 => 73,  83 => 72,  81 => 71,  77 => 69,  71 => 67,  68 => 66,  64 => 64,  54 => 63,  51 => 62,  49 => 61,  46 => 60,  44 => 59,  40 => 58,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/content/search-result.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/search-result.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "apply" => 63);
        static $filters = array("escape" => 58, "t" => 63, "spaceless" => 63);
        static $functions = array("attach_library" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 't', 'spaceless'],
                ['attach_library'],
                $this->source
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
