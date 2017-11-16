<?php

/* master.html.twig */
class __TwigTemplate_87a86df006dd2202e643b264156f3e573238b8b43873d898258852522591c01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">    
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <link href=\"/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link href=\"/css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
        ";
        // line 11
        $this->displayBlock('headextra', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-custom\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a href=\"#\" class=\"navbar-brand\">Video Project</a>
                </div>
                <div class=\"form-inline nav navbar-nav navbar-right\" style=\"padding: 12px;\">
                    <div class=\"input-group\">
                        <input type=\"search\" placeholder=\"Search...\" class=\"form-control\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span></button>
                        </div>
                    </div>
                </div>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Video 1</a></li>
                    <li><a href=\"#\">Video 2</a></li>
                    <li><a href=\"#\">Video 3</a></li>                    
                </ul>                                                
            </div>
        </nav>
        <header>
            <div class=\"text-center\">
                <h1>VIDEO ARTURO ALVARADO</h1>
                <p>Lorem ipsum dolores erratum</p>
            </div>
        </header>
        ";
        // line 42
        echo "
        <div id=\"centeredContent\">
        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    </div>
    <footer>
        <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>© Copyright Arturo Alvarado, 2017. All rights reserved.</small></p>
    </footer>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 11
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  93 => 11,  87 => 6,  76 => 45,  74 => 44,  70 => 42,  39 => 12,  37 => 11,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">    
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Default{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <link href=\"/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link href=\"/css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
        {% block headextra %} {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-custom\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a href=\"#\" class=\"navbar-brand\">Video Project</a>
                </div>
                <div class=\"form-inline nav navbar-nav navbar-right\" style=\"padding: 12px;\">
                    <div class=\"input-group\">
                        <input type=\"search\" placeholder=\"Search...\" class=\"form-control\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span></button>
                        </div>
                    </div>
                </div>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Video 1</a></li>
                    <li><a href=\"#\">Video 2</a></li>
                    <li><a href=\"#\">Video 3</a></li>                    
                </ul>                                                
            </div>
        </nav>
        <header>
            <div class=\"text-center\">
                <h1>VIDEO ARTURO ALVARADO</h1>
                <p>Lorem ipsum dolores erratum</p>
            </div>
        </header>
        {#=========================   ================================== #}

        <div id=\"centeredContent\">
        {% block content %}{% endblock %}
    </div>
    <footer>
        <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>© Copyright Arturo Alvarado, 2017. All rights reserved.</small></p>
    </footer>
</body>
</html>
", "master.html.twig", "C:\\xampp\\htdocs\\video\\templates\\master.html.twig");
    }
}
