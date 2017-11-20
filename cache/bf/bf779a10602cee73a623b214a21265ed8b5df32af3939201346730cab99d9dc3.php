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
        <link href=\"/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"/css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
        ";
        // line 13
        $this->displayBlock('headextra', $context, $blocks);
        // line 14
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
                            <button class=\"btn btn-default\"><span class='fa fa-search'></span></button>
                        </div>
                    </div>
                </div>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Player</a></li>
                    <li><a href=\"#\">Sign In</a></li>
                    <li><a href=\"#\">Register</a></li>                    
                </ul>                                                
            </div>
        </nav>

        <header>
            <div class=\"text-center\">
                <h1>VIDEO PROJECT</h1>
                <p>Lorem ipsum dolores erratum</p>
            </div>
        </header>

        <div id=\"centeredContent\">
        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "    </div>
    <div class='padding-65'></div>
    <div class='navbar navbar-inverse navbar-fixed-bottom'>
        <p class=\"text-center footer\"><small>© Copyright Arturo Alvarado, 2017. All rights reserved.</small></p>
    </div>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 13
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 47,  95 => 13,  89 => 6,  78 => 48,  76 => 47,  41 => 14,  39 => 13,  29 => 6,  22 => 1,);
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
        <link href=\"/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
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
                            <button class=\"btn btn-default\"><span class='fa fa-search'></span></button>
                        </div>
                    </div>
                </div>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Player</a></li>
                    <li><a href=\"#\">Sign In</a></li>
                    <li><a href=\"#\">Register</a></li>                    
                </ul>                                                
            </div>
        </nav>

        <header>
            <div class=\"text-center\">
                <h1>VIDEO PROJECT</h1>
                <p>Lorem ipsum dolores erratum</p>
            </div>
        </header>

        <div id=\"centeredContent\">
        {% block content %}{% endblock %}
    </div>
    <div class='padding-65'></div>
    <div class='navbar navbar-inverse navbar-fixed-bottom'>
        <p class=\"text-center footer\"><small>© Copyright Arturo Alvarado, 2017. All rights reserved.</small></p>
    </div>
</body>
</html>
", "master.html.twig", "C:\\xampp\\htdocs\\video\\templates\\master.html.twig");
    }
}
