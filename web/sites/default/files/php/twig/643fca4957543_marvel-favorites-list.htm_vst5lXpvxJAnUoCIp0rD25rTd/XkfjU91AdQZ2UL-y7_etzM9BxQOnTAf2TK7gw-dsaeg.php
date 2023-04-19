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

/* modules/custom/marvel/templates/marvel-favorites-list.html.twig */
class __TwigTemplate_28faa526c3f3c6ffe359d1ce87744b81 extends Template
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
        echo "<nav> 
    <a href=\"https://prueba-drupal-marvel.ddev.site/marvel/favorites/characters\">Personajes</a>
    <a href=\"https://prueba-drupal-marvel.ddev.site/marvel/favorites/comics\">Comics</a>
</nav>

";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "category", [], "any", false, false, true, 6) == "characters")) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "response", [], "any", false, false, true, 7), "data", [], "any", false, false, true, 7), "results", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        ";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 8), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "favorites", [], "any", false, false, true, 8))) == true)) {
                    // line 9
                    echo "            <div>
                <img src=\"";
                    // line 10
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 10), "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo ".";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 10), "extension", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "\">
                <h3>";
                    // line 11
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "</h3>
                <p>Descripción: ";
                    // line 12
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "</p>
                <button onclick=\"removeFromFavorites(";
                    // line 13
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo ", '";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "favorites", [], "any", false, false, true, 13), "endpoint", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo "')\">Borrar de favoritos</button>
            </div>
        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "response", [], "any", false, false, true, 18), "data", [], "any", false, false, true, 18), "results", [], "any", false, false, true, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "        ";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 19), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "favorites", [], "any", false, false, true, 19))) == true)) {
                    echo "    
            <div>
                <img src=\"";
                    // line 21
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 21), "path", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo ".";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 21), "extension", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "\">
                <h3>";
                    // line 22
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "</h3>
                <p>Descripción: ";
                    // line 23
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "</p>
                <p>Número de páginas: ";
                    // line 24
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "pageCount", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                    echo "</p>
                <button onclick=\"removeFromFavorites(";
                    // line 25
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo ", '";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "favorites", [], "any", false, false, true, 25), "endpoint", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "')\">Borrar de favoritos</button>
            </div>
        ";
                }
                // line 28
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
";
        }
        // line 30
        echo "
";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("marvel/marvel.script"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/custom/marvel/templates/marvel-favorites-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 31,  134 => 30,  125 => 28,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  99 => 21,  93 => 19,  88 => 18,  81 => 16,  73 => 13,  69 => 12,  65 => 11,  59 => 10,  56 => 9,  53 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav> 
    <a href=\"https://prueba-drupal-marvel.ddev.site/marvel/favorites/characters\">Personajes</a>
    <a href=\"https://prueba-drupal-marvel.ddev.site/marvel/favorites/comics\">Comics</a>
</nav>

{% if data.category == 'characters' %}
    {% for item in data.response.data.results %}
        {% if item.id in data.favorites|keys == true %}
            <div>
                <img src=\"{{ item.thumbnail.path }}.{{ item.thumbnail.extension }}\">
                <h3>{{ item.name }}</h3>
                <p>Descripción: {{ item.description }}</p>
                <button onclick=\"removeFromFavorites({{ item.id }}, '{{ data.favorites.endpoint }}')\">Borrar de favoritos</button>
            </div>
        {% endif %}
    {% endfor %}
{% else %}
    {% for item in data.response.data.results %}
        {% if item.id in data.favorites|keys == true %}    
            <div>
                <img src=\"{{ item.thumbnail.path }}.{{ item.thumbnail.extension }}\">
                <h3>{{ item.title }}</h3>
                <p>Descripción: {{ item.description }}</p>
                <p>Número de páginas: {{ item.pageCount }}</p>
                <button onclick=\"removeFromFavorites({{ item.id }}, '{{ data.favorites.endpoint }}')\">Borrar de favoritos</button>
            </div>
        {% endif %}
    {% endfor %}    
{% endif %}

{{ attach_library('marvel/marvel.script') }}
", "modules/custom/marvel/templates/marvel-favorites-list.html.twig", "/var/www/html/web/modules/custom/marvel/templates/marvel-favorites-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 7);
        static $filters = array("keys" => 8, "escape" => 10);
        static $functions = array("attach_library" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['keys', 'escape'],
                ['attach_library']
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
