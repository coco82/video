<?php

/* products.html.twig */
class __TwigTemplate_c4786c589c54f383881d40ab49df806869629b6894cc445d664e4455411eb46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Product list";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "  
    <table border=\"1\">
        <tr><th>id</th><th>name</th><th>description</th><th>image</th><th>operations</th></tr>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productList"]) ? $context["productList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</td>
                <td><img src=\"/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "imagePath", array()), "html", null, true);
            echo "\" width=\"40\"></td>
                <td><a href=\"/admin/product/edit/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">edit</a>
                    <a href=\"/admin/product/delete/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">delete</a>
                </td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </table>

    <div class=\"paginationContainer\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "            <a href=\"/products/";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  85 => 21,  81 => 20,  76 => 17,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  46 => 9,  42 => 8,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block title %}Product list{% endblock %}

{% block content %}  
    <table border=\"1\">
        <tr><th>id</th><th>name</th><th>description</th><th>image</th><th>operations</th></tr>
                {% for p in productList %}
            <tr><td>{{p.id}}</td>
                <td>{{p.name}}</td>
                <td>{{p.description}}</td>
                <td><img src=\"/{{p.imagePath}}\" width=\"40\"></td>
                <td><a href=\"/admin/product/edit/{{p.id}}\">edit</a>
                    <a href=\"/admin/product/delete/{{p.id}}\">delete</a>
                </td></tr>
            {% endfor %}
    </table>

    <div class=\"paginationContainer\">
        {% for page in range(1,maxPages) %}
            <a href=\"/products/{{page}}\">{{page}}</a> 
        {% endfor %}
    </div>


{% endblock %}", "products.html.twig", "C:\\xampp\\htdocs\\video\\templates\\products.html.twig");
    }
}
