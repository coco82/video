<?php

/* home.html.twig */
class __TwigTemplate_614ab7a4593a5845e70ab067fef195319f2f71eff5a708399ce431005ac0c684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "home.html.twig", 1);
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

    <div class=\"container-fluid\">
        <div class=\"col-md-12\">
            <div class=\"home-video\">
                <h1>Home Page</h1>
                <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a>
                    <a href=\"#\">Arturo Alvarado</a>
                    <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                        through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                        (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                        \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                    <a class=\"label label-default\">Video 1</a>
                    <a class=\"label label-default\">Video 2</a>
                    <a class=\"label label-default\">Video 3</a>
                </div> 
                </div>
                <div class=\"home-video\">
                    <h1>Video 1</h1>
                    <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a>
                        <a href=\"#\">Arturo Alvarado</a>
                        <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                            through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                            (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                            \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                        <a class=\"label label-default\">Video 1</a>
                        <a class=\"label label-default\">Video 2</a>
                        <a class=\"label label-default\">Video 3</a>
                    </div>
                    </div>
                    <div class=\"home-video\">
                        <h1>Video 2</h1>
                        <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a>
                            <a href=\"#\">Arturo Alvarado</a>
                            <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                                through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                                (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                                \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                            <a class=\"label label-default\">Video 1</a>
                            <a class=\"label label-default\">Video 2</a>
                            <a class=\"label label-default\">Video 3</a>
                        </div> 
                    </div>
                </div>
            </div>
    <div class=\"paginationContainer\">
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 67
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
        // line 69
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 69,  131 => 67,  127 => 66,  76 => 17,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  46 => 9,  42 => 8,  35 => 5,  29 => 3,  11 => 1,);
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

    <div class=\"container-fluid\">
        <div class=\"col-md-12\">
            <div class=\"home-video\">
                <h1>Home Page</h1>
                <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a>
                    <a href=\"#\">Arturo Alvarado</a>
                    <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                        through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                        (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                        \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                    <a class=\"label label-default\">Video 1</a>
                    <a class=\"label label-default\">Video 2</a>
                    <a class=\"label label-default\">Video 3</a>
                </div> 
                </div>
                <div class=\"home-video\">
                    <h1>Video 1</h1>
                    <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a>
                        <a href=\"#\">Arturo Alvarado</a>
                        <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                            through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                            (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                            \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                        <a class=\"label label-default\">Video 1</a>
                        <a class=\"label label-default\">Video 2</a>
                        <a class=\"label label-default\">Video 3</a>
                    </div>
                    </div>
                    <div class=\"home-video\">
                        <h1>Video 2</h1>
                        <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a>
                            <a href=\"#\">Arturo Alvarado</a>
                            <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                                through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                                (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                                \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                            <a class=\"label label-default\">Video 1</a>
                            <a class=\"label label-default\">Video 2</a>
                            <a class=\"label label-default\">Video 3</a>
                        </div> 
                    </div>
                </div>
            </div>
    <div class=\"paginationContainer\">
        {% for page in range(1,maxPages) %}
            <a href=\"/products/{{page}}\">{{page}}</a> 
        {% endfor %}
    </div>


{% endblock %}", "home.html.twig", "C:\\xampp\\htdocs\\video\\templates\\home.html.twig");
    }
}
