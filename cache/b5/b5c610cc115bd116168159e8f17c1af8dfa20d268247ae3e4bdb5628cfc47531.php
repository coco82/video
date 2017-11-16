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
        echo "Videos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "  
<html>
<head>
<script type='text/javascript' src='jwplayer.js'></script>
<title>Video Uploader</title>
</head>
<body>
<h1>Video Uploader</h1>
<form method='post' enctype='multipart/form-data'>
Name:<input type='text' name='vid_name'><br />
Video: <input type='video' name='vid'><br />
<input type='submit'>
<hr />
<h3>View Videos</h3>
<?php
\$result = mysql_query(\"SELECT * FROM vid_detail\");
while(\$row = mysql_fetch_array(\$result)){
\$name = \$row['name'];
\$vid_code = \$row['code'];
echo'<h3>' . \$name . '</h3><br />' . \$vid_code . '<br />';
}
</body>
</html>
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
        return array (  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Videos{% endblock %}

{% block content %}  
<html>
<head>
<script type='text/javascript' src='jwplayer.js'></script>
<title>Video Uploader</title>
</head>
<body>
<h1>Video Uploader</h1>
<form method='post' enctype='multipart/form-data'>
Name:<input type='text' name='vid_name'><br />
Video: <input type='video' name='vid'><br />
<input type='submit'>
<hr />
<h3>View Videos</h3>
<?php
\$result = mysql_query(\"SELECT * FROM vid_detail\");
while(\$row = mysql_fetch_array(\$result)){
\$name = \$row['name'];
\$vid_code = \$row['code'];
echo'<h3>' . \$name . '</h3><br />' . \$vid_code . '<br />';
}
</body>
</html>
{% endblock %}


", "videos.html.twig", "C:\\xampp\\htdocs\\video\\templates\\videos.html.twig");
    }
}
