<?php

/* video3.html.twig */
class __TwigTemplate_f2a860d079eb8b0b8f6d101846443696203afc5b046e695044daecffd2b21791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "video3.html.twig", 1);
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
    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3><a href='#'> Second Post</a></h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"list-group-item\">
            <a href=\"#\" class=\" list-group-item\">Video 1</a>
            <a href=\"#\" class=\" list-group-item\">Video 2</a>
            <a href=\"#\" class=\" list-group-item\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"list-group-item\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <br>
            <img src=\"../images/me.jpg\" class='img-rounded'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"list-group-item\">
            <a href=\"#\" class=\" list-group-item\">Video 1</a>
            <a href=\"#\" class=\" list-group-item\">Video 2</a>
            <a href=\"#\" class=\" list-group-item\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"list-group-item\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <br>
            <img src=\"../images/me.jpg\" class='img-rounded'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"list-group-item\">
            <a href=\"#\" class=\" list-group-item\">Video 1</a>
            <a href=\"#\" class=\" list-group-item\">Video 2</a>
            <a href=\"#\" class=\" list-group-item\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"list-group-item\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <br>
            <img src=\"../images/me.jpg\" class='img-rounded'>
        </div>
    </div>

        <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
    
        <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
    
        <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "video3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3><a href='#'> Second Post</a></h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"list-group-item\">
            <a href=\"#\" class=\" list-group-item\">Video 1</a>
            <a href=\"#\" class=\" list-group-item\">Video 2</a>
            <a href=\"#\" class=\" list-group-item\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"list-group-item\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <br>
            <img src=\"../images/me.jpg\" class='img-rounded'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"list-group-item\">
            <a href=\"#\" class=\" list-group-item\">Video 1</a>
            <a href=\"#\" class=\" list-group-item\">Video 2</a>
            <a href=\"#\" class=\" list-group-item\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"list-group-item\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <br>
            <img src=\"../images/me.jpg\" class='img-rounded'>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"list-group-item\">
            <a href=\"#\" class=\" list-group-item\">Video 1</a>
            <a href=\"#\" class=\" list-group-item\">Video 2</a>
            <a href=\"#\" class=\" list-group-item\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"list-group-item\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <br>
            <img src=\"../images/me.jpg\" class='img-rounded'>
        </div>
    </div>

        <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
    
        <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
    
        <div class=\"col-md-4\">
        <div class=\"page-header\">
            <h2>Latest Posts</h2>
        </div>
        <div class=\"custom-sidebar-list\">
            <a href=\"#\" class=\" custom-sidebar-list\">Video 1</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 2</a>
            <a href=\"#\" class=\" custom-sidebar-list\">Video 3</a>
        </div>
        <div class=\"page-header\">
            <h2>Post of the Day</h2>
        </div>
        <div class=\"day-post\">
            <h3>T Second Post</h3>
            <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">Home Page</a> |
                <a href=\"#\">Arturo Alvarado</a>       
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                    Richard McClintock,</p>
                <a href=\"#\" class=\"label label-default\">Video 1</a>
                <a href=\"#\" class=\"list-group-item\">Video 2</a>
                <a href=\"#\" class=\"list-group-item\">Video 3</a>
            </div>
            <img src=\"../images/me.jpg\" class='img-circle'>
        </div>
    </div>
{% endblock %}", "video3.html.twig", "C:\\xampp\\htdocs\\video\\templates\\Video3.html.twig");
    }
}
