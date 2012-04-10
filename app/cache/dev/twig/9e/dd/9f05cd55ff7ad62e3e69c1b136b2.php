<?php

/* AcmeHelloBundle:Default:test.html.twig */
class __TwigTemplate_9edd9f05cd55ff7ad62e3e69c1b136b2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
