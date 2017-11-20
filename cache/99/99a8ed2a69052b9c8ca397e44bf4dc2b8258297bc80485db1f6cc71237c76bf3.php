<?php

/* playlist.html.twig */
class __TwigTemplate_63e64689f0ae54482e81366b05c9ea7726d080147f8979cc13659f0f102d83f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "playlist.html.twig", 1);
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
        echo "Home";
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
                        <div class='col-md-3'></div><span class='fa fa-car'></span>How to/Guides</a>
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
                        <div class='col-md-3'></div><span class='fa fa-plus-square'></span>Comming Soon</a>

                </div>
            </div>

            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-10'>
                        <div class=\"row\">
                            <div class=\"container-fluid\">
                                <div class=\"col-md-12\">
                                    <div class=\"home-video\">
                                        <h1>My Playlist</h1>
                                        <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">User :</a>
                                            <a href=\"#\">Arturo Alvarado</a>
                                            <p class=\"lead\">Personal notes from the user</p>
                                            <p class=\"lead\">User's Videos</p>
                                            <a class=\"label label-default\">Video 1</a>
                                            <a class=\"label label-default\">Video 2</a>
                                            <a class=\"label label-default\">Video 3</a>
                                            <a class=\"label label-default\">Video 4</a>
                                            <a class=\"label label-default\">Video 5</a>
                                            <a class=\"label label-default\">Video 6</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 1</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 2</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 3</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 4</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 5</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 6</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"container-fluid\">
                                <div class=\"col-md-12\">
                                    <div class=\"home-video\">
                                        <h1>Guide: How to Upload your videos</h1>
                                        <div class=\"meta small-text\"><a href=\"#\">Support</a>

                                            <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                                                through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                                                (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                                                \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                                            <a class=\"label label-default\">Guide 1</a>
                                            <a class=\"label label-default\">Guide 2</a>
                                            <a class=\"label label-default\">Guide 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"paginationContainer\">
        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 155
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
        // line 157
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "playlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 157,  192 => 155,  188 => 154,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Home{% endblock %}

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
                        <div class='col-md-3'></div><span class='fa fa-car'></span>How to/Guides</a>
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
                        <div class='col-md-3'></div><span class='fa fa-plus-square'></span>Comming Soon</a>

                </div>
            </div>

            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-10'>
                        <div class=\"row\">
                            <div class=\"container-fluid\">
                                <div class=\"col-md-12\">
                                    <div class=\"home-video\">
                                        <h1>My Playlist</h1>
                                        <div class=\"meta small-text\"><a href=\"#\">11-11-2017</a> | <a href=\"#\">User :</a>
                                            <a href=\"#\">Arturo Alvarado</a>
                                            <p class=\"lead\">Personal notes from the user</p>
                                            <p class=\"lead\">User's Videos</p>
                                            <a class=\"label label-default\">Video 1</a>
                                            <a class=\"label label-default\">Video 2</a>
                                            <a class=\"label label-default\">Video 3</a>
                                            <a class=\"label label-default\">Video 4</a>
                                            <a class=\"label label-default\">Video 5</a>
                                            <a class=\"label label-default\">Video 6</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 1</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 2</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 3</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 4</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 5</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"col-md-6\"><br>
                                <div class=\"featured-video\">
                                    <a href=\"#\" class=\"play-button\"></a>
                                    <img src=\"../images/header.jpg\" class=\"img-responsive\">
                                </div> 
                                <div class=\"video-details\">
                                    <h3 class=\"\">Video 6</h3>
                                    <div>By: <strong>User</strong></div>
                                </div>
                            </div>

                            <div class=\"container-fluid\">
                                <div class=\"col-md-12\">
                                    <div class=\"home-video\">
                                        <h1>Guide: How to Upload your videos</h1>
                                        <div class=\"meta small-text\"><a href=\"#\">Support</a>

                                            <p class=\"lead\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
                                                through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
                                                (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                                                \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
                                            <a class=\"label label-default\">Guide 1</a>
                                            <a class=\"label label-default\">Guide 2</a>
                                            <a class=\"label label-default\">Guide 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

{% endblock %}", "playlist.html.twig", "C:\\xampp\\htdocs\\video\\templates\\playlist.html.twig");
    }
}
