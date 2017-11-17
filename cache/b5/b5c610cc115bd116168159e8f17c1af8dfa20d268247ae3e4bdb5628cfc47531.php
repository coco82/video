<?php

/* videos.html.twig */
class __TwigTemplate_a1a4a7cb669e5cc626853b9e58bb073798ccb3ba1600776cbf7d466b6273dbd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "videos.html.twig", 1);
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
        // line 6
        echo "
    <div class=\"container-fluid\">
        <div class=\"col-md-12\">
            <nav class=\"navbar navbar-sub\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">Upload Video</a></li>
                    <li><a href=\"#\">Read Video</a></li>
                    <li><a href=\"#\">Update Video</a></li>
                    <li><a href=\"#\">Delete Video</a></li>
                </ul>                
            </nav>            
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"col-md-12\">
            <div class=\"home-video\">
                <h1>Video Page</h1>
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
        </div>
    </div>
    <div class=\"paginationContainer\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 54
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
        // line 56
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 56,  91 => 54,  87 => 53,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

    <div class=\"container-fluid\">
        <div class=\"col-md-12\">
            <nav class=\"navbar navbar-sub\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">Upload Video</a></li>
                    <li><a href=\"#\">Read Video</a></li>
                    <li><a href=\"#\">Update Video</a></li>
                    <li><a href=\"#\">Delete Video</a></li>
                </ul>                
            </nav>            
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"col-md-12\">
            <div class=\"home-video\">
                <h1>Video Page</h1>
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
        </div>
    </div>
    <div class=\"paginationContainer\">
        {% for page in range(1,maxPages) %}
            <a href=\"/products/{{page}}\">{{page}}</a> 
        {% endfor %}
    </div>


{% endblock %}

", "videos.html.twig", "C:\\xampp\\htdocs\\video\\templates\\videos.html.twig");
    }
}
