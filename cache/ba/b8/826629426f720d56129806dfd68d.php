<?php

/* hello.html */
class __TwigTemplate_bab8826629426f720d56129806dfd68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
\t<body>
\t\t<h1>";
        // line 4
        if (isset($context["greeting"])) { $_greeting_ = $context["greeting"]; } else { $_greeting_ = null; }
        echo twig_escape_filter($this->env, $_greeting_, "html", null, true);
        echo "</h1>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "hello.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 4,  17 => 1,);
    }
}
