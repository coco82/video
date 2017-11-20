<?php

/* upload.html.twig */
class __TwigTemplate_27cc7e51f347a28dcf748568e5120acb7de783705954b30668577681c2b90d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "upload.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
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
        echo "Upload";
    }

    // line 5
    public function block_headextra($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo "  

    <div class=\"row container-fluid\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-default\">
                <br>
                <div class=\"panel-heading\">Video Uploader</div>

                <div class=\"panel-body\">
                    <form action='upload' method=\"post\" enctype='multipart/form'>
                        
                        <div class='panel-body'>
                        <label>Title :</label>
                        <textarea class='form-control'></textarea><br>
                        </div>
                        
                        <div class='panel-body'>
                        <label>Description :</label>
                        <textarea class='form-control'></textarea><br>
                        </div>
                        
                        <div class='panel-body'>
                        <label>Select Playlist :</label>
                        <textarea class='form-control'></textarea><br>
                        </div>
                        
                                                <div class='panel-body'>
                        <label>Select File :</label>
                        <input type=\"file\" name=\"fileToUpload\" >
                        </div>
                        
                        <div class='panel-body'>
                        <label>Select File :</label>
                        <input type=\"submit\" value=\"Upload Video\" name=\"submit\">
                        </div>
                        
                        <div class='panel-body'>
                        <label>Status :</label>
                        <option selected>Public</option>
                        <option>Unlisted</option>
                        <option>Private</option>
                        </div>
                        
                    </form>

                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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

{% block title %}Upload{% endblock %}

{% block headextra %}

{% endblock %}

{% block content %}  

    <div class=\"row container-fluid\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-default\">
                <br>
                <div class=\"panel-heading\">Video Uploader</div>

                <div class=\"panel-body\">
                    <form action='upload' method=\"post\" enctype='multipart/form'>
                        
                        <div class='panel-body'>
                        <label>Title :</label>
                        <textarea class='form-control'></textarea><br>
                        </div>
                        
                        <div class='panel-body'>
                        <label>Description :</label>
                        <textarea class='form-control'></textarea><br>
                        </div>
                        
                        <div class='panel-body'>
                        <label>Select Playlist :</label>
                        <textarea class='form-control'></textarea><br>
                        </div>
                        
                                                <div class='panel-body'>
                        <label>Select File :</label>
                        <input type=\"file\" name=\"fileToUpload\" >
                        </div>
                        
                        <div class='panel-body'>
                        <label>Select File :</label>
                        <input type=\"submit\" value=\"Upload Video\" name=\"submit\">
                        </div>
                        
                        <div class='panel-body'>
                        <label>Status :</label>
                        <option selected>Public</option>
                        <option>Unlisted</option>
                        <option>Private</option>
                        </div>
                        
                    </form>

                    </div>
                {% endblock %}


", "upload.html.twig", "C:\\xampp\\htdocs\\video\\templates\\upload.html.twig");
    }
}
