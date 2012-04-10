<?php

/* AcmeHelloBundle:Hello:test.html.twig */
class __TwigTemplate_327e486ece8cb2dbff66d32c9a98243b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div style=\"margin-left:300px; color:red;\"> Hello!: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " !</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
