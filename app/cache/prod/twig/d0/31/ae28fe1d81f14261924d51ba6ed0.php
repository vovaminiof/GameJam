<?php

/* AcmeJamGameBundle:JamGame:index.html.twig */
class __TwigTemplate_d031ae28fe1d81f14261924d51ba6ed0 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "str"), 0, array(), "array"), "html", null, true);
        echo "\">Home</a>
<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "str"), 1, array(), "array"), "html", null, true);
        echo "\">Games</a>
<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "str"), 2, array(), "array"), "html", null, true);
        echo "\">Info</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeJamGameBundle:JamGame:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  17 => 1,);
    }
}
