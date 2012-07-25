<?php

/* AcmeJamGameBundle:JamGame:page.html.twig */
class __TwigTemplate_a357b0dd05824b0b05beba7bc55c62d9 extends Twig_Template
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
        // line 4
        if (($this->getContext($context, "content") == "games")) {
            // line 5
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("game", array("id" => "1")), "html", null, true);
            echo "\">
    1 game
  </a>
";
        }
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "content"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AcmeJamGameBundle:JamGame:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  32 => 5,  30 => 4,  26 => 3,  22 => 2,  17 => 1,);
    }
}
