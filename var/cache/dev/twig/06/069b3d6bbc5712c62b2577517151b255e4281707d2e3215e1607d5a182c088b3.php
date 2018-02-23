<?php

/* VallbonawebBundle:Default:index.html.twig */
class __TwigTemplate_8eee843ce754adecc0c80dc3b3e0fa2cba69d33b324a8b64509e6060d2f416a1 extends Twig_Template
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
        $__internal_3c01cc79677a54d06c2ae7c22e2d740943b26663572054b84c1e9aec0f160c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c01cc79677a54d06c2ae7c22e2d740943b26663572054b84c1e9aec0f160c11->enter($__internal_3c01cc79677a54d06c2ae7c22e2d740943b26663572054b84c1e9aec0f160c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:index.html.twig"));

        $__internal_5b15e62d770c3c63df64f5c031dfd06109c75cddd05e661a046b37c06d1c3535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b15e62d770c3c63df64f5c031dfd06109c75cddd05e661a046b37c06d1c3535->enter($__internal_5b15e62d770c3c63df64f5c031dfd06109c75cddd05e661a046b37c06d1c3535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3c01cc79677a54d06c2ae7c22e2d740943b26663572054b84c1e9aec0f160c11->leave($__internal_3c01cc79677a54d06c2ae7c22e2d740943b26663572054b84c1e9aec0f160c11_prof);

        
        $__internal_5b15e62d770c3c63df64f5c031dfd06109c75cddd05e661a046b37c06d1c3535->leave($__internal_5b15e62d770c3c63df64f5c031dfd06109c75cddd05e661a046b37c06d1c3535_prof);

    }

    public function getTemplateName()
    {
        return "VallbonawebBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "VallbonawebBundle:Default:index.html.twig", "/home/juanantonio/NetBeansProjects/Symfony/src/Vallbona/webBundle/Resources/views/Default/index.html.twig");
    }
}
