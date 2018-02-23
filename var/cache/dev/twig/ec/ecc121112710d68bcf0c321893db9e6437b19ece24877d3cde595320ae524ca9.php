<?php

/* VallbonawebBundle:Default:articles.html.twig */
class __TwigTemplate_f9b99c1cec2ff2976baf98e0783b17b1c518d53648563d757133acd6b12517e3 extends Twig_Template
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
        $__internal_3f0dc27d9979d1dd2f52d0da30b3647cacccb64a564f28e069b55e98abaf7c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0dc27d9979d1dd2f52d0da30b3647cacccb64a564f28e069b55e98abaf7c73->enter($__internal_3f0dc27d9979d1dd2f52d0da30b3647cacccb64a564f28e069b55e98abaf7c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:articles.html.twig"));

        $__internal_1f80cc428e102be3321beed19ab0196954b1e059e6a2aace6fd0741c347e10d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f80cc428e102be3321beed19ab0196954b1e059e6a2aace6fd0741c347e10d9->enter($__internal_1f80cc428e102be3321beed19ab0196954b1e059e6a2aace6fd0741c347e10d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:articles.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<body>

<h2>A Nested List</h2>

<ul>
  <li>Coffee</li>
  <li>Tea
    <ul>
    <li>Black tea</li>
    <li>Green tea</li>
    </ul>
  </li>
  <li>Milk</li>
</ul>

</body>
</html>
";
        
        $__internal_3f0dc27d9979d1dd2f52d0da30b3647cacccb64a564f28e069b55e98abaf7c73->leave($__internal_3f0dc27d9979d1dd2f52d0da30b3647cacccb64a564f28e069b55e98abaf7c73_prof);

        
        $__internal_1f80cc428e102be3321beed19ab0196954b1e059e6a2aace6fd0741c347e10d9->leave($__internal_1f80cc428e102be3321beed19ab0196954b1e059e6a2aace6fd0741c347e10d9_prof);

    }

    public function getTemplateName()
    {
        return "VallbonawebBundle:Default:articles.html.twig";
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
        return new Twig_Source("<!DOCTYPE html>
<html>
<body>

<h2>A Nested List</h2>

<ul>
  <li>Coffee</li>
  <li>Tea
    <ul>
    <li>Black tea</li>
    <li>Green tea</li>
    </ul>
  </li>
  <li>Milk</li>
</ul>

</body>
</html>
", "VallbonawebBundle:Default:articles.html.twig", "/home/juanantonio/NetBeansProjects/Symfony/src/Vallbona/webBundle/Resources/views/Default/articles.html.twig");
    }
}
