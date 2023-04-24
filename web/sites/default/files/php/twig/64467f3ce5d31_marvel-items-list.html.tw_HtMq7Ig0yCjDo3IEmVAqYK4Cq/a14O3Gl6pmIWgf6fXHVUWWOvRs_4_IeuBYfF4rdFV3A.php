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

/* modules/custom/marvel/templates/marvel-items-list.html.twig */
class __TwigTemplate_53cb5ceccd9e647e0a43de45c37349be extends Template
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
    <a href=\"#\" onclick=\"toggleVisibility('characters')\">Personajes</a>
    <a href=\"#\" onclick=\"toggleVisibility('comics')\">Comics</a>
</nav>

    <div id=\"character-container\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 7), "response", [], "any", false, false, true, 7), "data", [], "any", false, false, true, 7), "results", [], "any", false, false, true, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "        <div>
            <img src=\"";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 9), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo ".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 9), "extension", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
            <h3>";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</h3>
            <p>Descripción: ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</p>
            ";
            // line 12
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 12), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 12), "favorites", [], "any", false, false, true, 12))) == true)) {
                // line 13
                echo "            ";
                $context["isFavorite"] = "true";
                // line 14
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("YES");
                echo "
                ";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
                ";
                // line 16
                $context["buttonMessage"] = "Borrar de favoritos";
                // line 17
                echo "            ";
            } else {
                // line 18
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("NO");
                echo "
                ";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "
                ";
                // line 20
                $context["buttonMessage"] = "Añadir a favoritos";
                // line 21
                echo "            ";
            }
            // line 22
            echo "            <button id=\"button-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\" onclick=\"tiggerAction(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ", '";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 22), "favorites", [], "any", false, false, true, 22), "endpoint", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "')\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttonMessage"] ?? null), 22, $this->source), "html", null, true);
            echo "</button>           
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
    <div id=\"comic-container\" class=\"hide-content\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comics", [], "any", false, false, true, 27), "response", [], "any", false, false, true, 27), "data", [], "any", false, false, true, 27), "results", [], "any", false, false, true, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "        <div>
            <img src=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 29), "path", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo ".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 29), "extension", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\">
            <h3>";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</h3>
            <p>Descripción: ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</p>
            <p>Número de páginas: ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "pageCount", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</p>
            ";
            // line 33
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 33), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 33), "favorites", [], "any", false, false, true, 33))) == true)) {
                // line 34
                echo "                ";
                $context["buttonMessage"] = "Borrar de favoritos";
                // line 35
                echo "            ";
            } else {
                // line 36
                echo "                ";
                $context["buttonMessage"] = "Añadir a favoritos";
                // line 37
                echo "            ";
            }
            // line 38
            echo "            <button id=\"button-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" onclick=\"tiggerAction(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo ", '";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 38), "favorites", [], "any", false, false, true, 38), "endpoint", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "')\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttonMessage"] ?? null), 38, $this->source), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    
    </div>

";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("marvel/marvel"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/custom/marvel/templates/marvel-items-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 43,  176 => 40,  160 => 38,  157 => 37,  154 => 36,  151 => 35,  148 => 34,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  128 => 29,  125 => 28,  121 => 27,  117 => 25,  101 => 22,  98 => 21,  96 => 20,  92 => 19,  87 => 18,  84 => 17,  82 => 16,  78 => 15,  73 => 14,  70 => 13,  68 => 12,  64 => 11,  60 => 10,  54 => 9,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav> 
    <a href=\"#\" onclick=\"toggleVisibility('characters')\">Personajes</a>
    <a href=\"#\" onclick=\"toggleVisibility('comics')\">Comics</a>
</nav>

    <div id=\"character-container\">
    {% for item in data.characters.response.data.results %}
        <div>
            <img src=\"{{ item.thumbnail.path }}.{{ item.thumbnail.extension }}\">
            <h3>{{ item.name }}</h3>
            <p>Descripción: {{ item.description }}</p>
            {% if item.id in data.characters.favorites|keys == true %}
            {% set isFavorite = \"true\" %}
                {{'YES'}}
                {{item.id}}
                {% set buttonMessage = \"Borrar de favoritos\" %}
            {% else %}
                {{'NO'}}
                {{item.id}}
                {% set buttonMessage = \"Añadir a favoritos\" %}
            {% endif %}
            <button id=\"button-{{ item.id }}\" onclick=\"tiggerAction({{ item.id }}, '{{ data.characters.favorites.endpoint }}')\">{{ buttonMessage }}</button>           
        </div>
    {% endfor %}
    </div>
    <div id=\"comic-container\" class=\"hide-content\">
    {% for item in data.comics.response.data.results %}
        <div>
            <img src=\"{{ item.thumbnail.path }}.{{ item.thumbnail.extension }}\">
            <h3>{{ item.title }}</h3>
            <p>Descripción: {{ item.description }}</p>
            <p>Número de páginas: {{ item.pageCount }}</p>
            {% if item.id in data.characters.favorites|keys == true %}
                {% set buttonMessage = \"Borrar de favoritos\" %}
            {% else %}
                {% set buttonMessage = \"Añadir a favoritos\" %}
            {% endif %}
            <button id=\"button-{{ item.id }}\" onclick=\"tiggerAction({{ item.id }}, '{{ data.characters.favorites.endpoint }}')\">{{ buttonMessage }}</button>
        </div>
    {% endfor %}    
    </div>

{{ attach_library('marvel/marvel') }}
", "modules/custom/marvel/templates/marvel-items-list.html.twig", "/var/www/html/web/modules/custom/marvel/templates/marvel-items-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "if" => 12, "set" => 13);
        static $filters = array("escape" => 9, "keys" => 12);
        static $functions = array("attach_library" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'keys'],
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
