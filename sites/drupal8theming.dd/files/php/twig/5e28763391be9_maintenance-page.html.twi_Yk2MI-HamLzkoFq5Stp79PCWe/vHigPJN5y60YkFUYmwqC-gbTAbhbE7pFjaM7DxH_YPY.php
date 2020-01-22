<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/layout/maintenance-page.html.twig */
class __TwigTemplate_30a82e2b8876fccd5043077aa51025a2c0c313642f39b05c1c2a4fbf8bb21460 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 13];
        $filters = ["escape" => 14, "t" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        echo "<header role=\"banner\">
  ";
        // line 13
        if (($context["logo"] ?? null)) {
            // line 14
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\"/>
    </a>
  ";
        }
        // line 18
        echo "
  ";
        // line 19
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 20
            echo "    ";
            if (($context["site_name"] ?? null)) {
                // line 21
                echo "      <h1>
        <a href=\"";
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
      </h1>
    ";
            }
            // line 25
            echo "
    ";
            // line 26
            if (($context["site_slogan"] ?? null)) {
                // line 27
                echo "      <div>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</header>

<main role=\"main\">
  ";
        // line 33
        if (($context["title"] ?? null)) {
            // line 34
            echo "    <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

  ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
</main>

";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 43
            echo "  <aside role=\"complementary\">
    ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
  </aside>
";
        }
        // line 47
        echo "
";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 49
            echo "  <aside role=\"complementary\">
    ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
  </aside>
";
        }
        // line 53
        echo "
";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 55
            echo "  <footer role=\"contentinfo\">
    ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/layout/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  167 => 55,  165 => 54,  162 => 53,  156 => 50,  153 => 49,  151 => 48,  148 => 47,  142 => 44,  139 => 43,  137 => 42,  131 => 39,  126 => 37,  123 => 36,  117 => 34,  115 => 33,  110 => 30,  107 => 29,  101 => 27,  99 => 26,  96 => 25,  86 => 22,  83 => 21,  80 => 20,  78 => 19,  75 => 18,  67 => 15,  60 => 14,  58 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single Drupal page while offline.
 *
 * All available variables are mirrored in page.html.twig.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess_maintenance_page()
 */
#}
<header role=\"banner\">
  {% if logo %}
    <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <img src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\"/>
    </a>
  {% endif %}

  {% if site_name or site_slogan %}
    {% if site_name %}
      <h1>
        <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
      </h1>
    {% endif %}

    {% if site_slogan %}
      <div>{{ site_slogan }}</div>
    {% endif %}
  {% endif %}
</header>

<main role=\"main\">
  {% if title %}
    <h1>{{ title }}</h1>
  {% endif %}

  {{ page.highlighted }}

  {{ page.content }}
</main>

{% if page.sidebar_first %}
  <aside role=\"complementary\">
    {{ page.sidebar_first }}
  </aside>
{% endif %}

{% if page.sidebar_second %}
  <aside role=\"complementary\">
    {{ page.sidebar_second }}
  </aside>
{% endif %}

{% if page.footer %}
  <footer role=\"contentinfo\">
    {{ page.footer }}
  </footer>
{% endif %}
", "core/themes/stable/templates/layout/maintenance-page.html.twig", "/Users/joe/Sites/devdesktop/drupal8theming/core/themes/stable/templates/layout/maintenance-page.html.twig");
    }
}
