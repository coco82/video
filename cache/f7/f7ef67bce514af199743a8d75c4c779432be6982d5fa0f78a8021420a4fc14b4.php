<?php

/* uploadImages.html.twig */
class __TwigTemplate_abfb78704d907e1f75f1444048cf7ef366ae9ddcf880a182906cbebfcf880855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 4
            echo "    <ul>
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
";
        }
        // line 10
        echo "
<form method=\"post\">
    Name: <input type=\"text\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "name", array()), "html", null, true);
        echo "\"><br>
    Age: <input type=\"number\" name=\"age\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "age", array()), "html", null, true);
        echo "\"><br>
    <input type=\"submit\" value=\"Add Person\">
</form>
";
    }

    public function getTemplateName()
    {
        return "uploadImages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  44 => 10,  40 => 8,  31 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}

{% if errorList %}
    <ul>
        {% for error in errorList %}
            <li>{{error}}</li>
        {% endfor %}
    </ul>
{% endif %}

<form method=\"post\">
    Name: <input type=\"text\" name=\"name\" value=\"{{v.name}}\"><br>
    Age: <input type=\"number\" name=\"age\" value=\"{{v.age}}\"><br>
    <input type=\"submit\" value=\"Add Person\">
</form>
", "uploadImages.html.twig", "C:\\xampp\\htdocs\\video\\templates\\uploadImages.html.twig");
    }
}
