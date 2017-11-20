<?php

/* player.html.twig */
class __TwigTemplate_8b56fc34bfd3bd8ffdd908d21b8372e67273467ca91c5511f31b0668fa4a5c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "player.html.twig", 1);
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
        echo "Video Player";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class='container-fluid'>

        <div class='row'>
            <div class='col-md-2'>
                <div class='page-header' style='margin-top: 0;'>
                    <h3>Categories</h3>
                </div>
                <div class='vid-sidebar-list'>            
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-home'></span>Home</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-cogs'></span>Support</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-car'></span>How to</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-flask'></span>Contact Us</a>
                </div>
                <div class='page-header' style='margin-top: 10px;'>
                    <h3>My Account</h3>
                </div>
                <div class='vid-sidebar-list'>            
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-desktop'></span>My Channel</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-list-alt'></span>My Playlist</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-heart'></span>My Liked Videos</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-plus-square'></span>My Channels</a>
                </div>
            </div>
            <div class='container-fluid'>              
                <div class='row'>                 
                    <div class='col-md-10'>
                        <div class=\"row\">                          
                            <div class=\"container-fluid\">                             
                                <div class=\"col-md-12\">                                   
                                    <h1>Video Player</h1>      
                                </div>
                            </div>
                            <div class=\"container-fluid\"style='background: silver;'>
                                <div class=\"row\">
                                    <div class='col-md-8' style='background: white;'>

                                        <div class='player-container'>
                                            <video width='100%' controls>
                                                <source src='uploads/vid1.mov' type='video/mp4'>  
                                            </video>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-8'><h3>Best videos of 90's - Alternative</h3></div>
                                            <div class='col-md-3' text-right><span class='label label-default'>2 views</span></div>
                                            <div class='col-md-3'><a href='#' class='btn btn-primary btn-sm btn-square'>Subscribe</a></div>
                                            <div><span class='fa fa-thumbs-up fa-2x'></span></div>
                                            <div><span class='fa fa-thumbs-down fa-2x'></span></div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-3' class='user-image-container'>
                                                <p>More Info</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
 
                            <div class=\"video-details\">
                                <div class='col-md-3' class='user-image-container'>
                                    <br><p><img src='../images/aa.png' height='100' width='100'></p>
                                </div>
                            </div> 
                        </div>

                        <div class='well well-lg'><strong>http://video.ipd10.com/uploads/vid1.mov</strong></div>
                        <div class='pull-right'>
                            <div class='text-center'>
                                <a href='#'><span style='color: #3b5998;' class='fa fa-facebook-official fa-3x'></a>
                                <a href='#'><span style='color: #3b5998;' class='fa fa-vimeo fa-3x'></a>
                                <a href='#'><span style='color: red;' class='fa fa-youtube-play fa-3x'></a>

                            </div>
                        </div>

                        <h1><br>Comments</h1>
                        <form>
                            <textarea class='form-control'></textarea><br>
                            <button class='btn btn-primary pull-right'>Reply</button>
                        </form>
                        <h3>Name of the User 1</h3>  
                        <p class=\"lead\">Comment: latin professor at Hscure Latin words, consectetur, from a Lorem Ipsum passage, and going </p>
                        <div class=\"meta small-text\"><a href=\"#\">Reply</a>
                        </div>
                        <div class='col-md-3' class='user-image-container'>
                            <br><p><img src='../images/aa.png' height='100' width='100'></p>
                        </div>

                        <h3>Name of the User 2</h3>  
                        <p class=\"lead\">Comment: latin professor at Hscure Latin words, consectetur, from a Lorem Ipsum passage, and going </p>
                        <div class=\"meta small-text\"><a href=\"#\">Reply</a>

                        </div>
                        <div class='col-md-3' class='user-image-container'>
                            <br><p><img src='../images/aa.png' height='100' width='100'></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <div class=\"paginationContainer\">
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 118
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
        // line 120
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 120,  155 => 118,  151 => 117,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Video Player{% endblock %}

{% block content %}

    <div class='container-fluid'>

        <div class='row'>
            <div class='col-md-2'>
                <div class='page-header' style='margin-top: 0;'>
                    <h3>Categories</h3>
                </div>
                <div class='vid-sidebar-list'>            
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-home'></span>Home</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-cogs'></span>Support</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-car'></span>How to</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-flask'></span>Contact Us</a>
                </div>
                <div class='page-header' style='margin-top: 10px;'>
                    <h3>My Account</h3>
                </div>
                <div class='vid-sidebar-list'>            
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-desktop'></span>My Channel</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-list-alt'></span>My Playlist</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-heart'></span>My Liked Videos</a>
                    <a href='#' class='vid-sidebar-list-item'>
                        <div class='col-md-3'></div><span class='fa fa-plus-square'></span>My Channels</a>
                </div>
            </div>
            <div class='container-fluid'>              
                <div class='row'>                 
                    <div class='col-md-10'>
                        <div class=\"row\">                          
                            <div class=\"container-fluid\">                             
                                <div class=\"col-md-12\">                                   
                                    <h1>Video Player</h1>      
                                </div>
                            </div>
                            <div class=\"container-fluid\"style='background: silver;'>
                                <div class=\"row\">
                                    <div class='col-md-8' style='background: white;'>

                                        <div class='player-container'>
                                            <video width='100%' controls>
                                                <source src='uploads/vid1.mov' type='video/mp4'>  
                                            </video>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-8'><h3>Best videos of 90's - Alternative</h3></div>
                                            <div class='col-md-3' text-right><span class='label label-default'>2 views</span></div>
                                            <div class='col-md-3'><a href='#' class='btn btn-primary btn-sm btn-square'>Subscribe</a></div>
                                            <div><span class='fa fa-thumbs-up fa-2x'></span></div>
                                            <div><span class='fa fa-thumbs-down fa-2x'></span></div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-3' class='user-image-container'>
                                                <p>More Info</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
 
                            <div class=\"video-details\">
                                <div class='col-md-3' class='user-image-container'>
                                    <br><p><img src='../images/aa.png' height='100' width='100'></p>
                                </div>
                            </div> 
                        </div>

                        <div class='well well-lg'><strong>http://video.ipd10.com/uploads/vid1.mov</strong></div>
                        <div class='pull-right'>
                            <div class='text-center'>
                                <a href='#'><span style='color: #3b5998;' class='fa fa-facebook-official fa-3x'></a>
                                <a href='#'><span style='color: #3b5998;' class='fa fa-vimeo fa-3x'></a>
                                <a href='#'><span style='color: red;' class='fa fa-youtube-play fa-3x'></a>

                            </div>
                        </div>

                        <h1><br>Comments</h1>
                        <form>
                            <textarea class='form-control'></textarea><br>
                            <button class='btn btn-primary pull-right'>Reply</button>
                        </form>
                        <h3>Name of the User 1</h3>  
                        <p class=\"lead\">Comment: latin professor at Hscure Latin words, consectetur, from a Lorem Ipsum passage, and going </p>
                        <div class=\"meta small-text\"><a href=\"#\">Reply</a>
                        </div>
                        <div class='col-md-3' class='user-image-container'>
                            <br><p><img src='../images/aa.png' height='100' width='100'></p>
                        </div>

                        <h3>Name of the User 2</h3>  
                        <p class=\"lead\">Comment: latin professor at Hscure Latin words, consectetur, from a Lorem Ipsum passage, and going </p>
                        <div class=\"meta small-text\"><a href=\"#\">Reply</a>

                        </div>
                        <div class='col-md-3' class='user-image-container'>
                            <br><p><img src='../images/aa.png' height='100' width='100'></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <div class=\"paginationContainer\">
        {% for page in range(1,maxPages) %}
            <a href=\"/products/{{page}}\">{{page}}</a> 
        {% endfor %}
    </div>

{% endblock %}", "player.html.twig", "C:\\xampp\\htdocs\\video\\templates\\player.html.twig");
    }
}
