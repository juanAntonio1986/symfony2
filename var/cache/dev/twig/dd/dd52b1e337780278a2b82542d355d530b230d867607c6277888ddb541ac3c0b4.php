<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39774cd69373ac6752d5cbafa9cdf4638f8fd14bc1fc6b7caeb202ef1f60434a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39774cd69373ac6752d5cbafa9cdf4638f8fd14bc1fc6b7caeb202ef1f60434a->enter($__internal_39774cd69373ac6752d5cbafa9cdf4638f8fd14bc1fc6b7caeb202ef1f60434a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f93a8234b1348781539b29557ea475ad445f103950bb8503fcd052e79833be72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93a8234b1348781539b29557ea475ad445f103950bb8503fcd052e79833be72->enter($__internal_f93a8234b1348781539b29557ea475ad445f103950bb8503fcd052e79833be72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_39774cd69373ac6752d5cbafa9cdf4638f8fd14bc1fc6b7caeb202ef1f60434a->leave($__internal_39774cd69373ac6752d5cbafa9cdf4638f8fd14bc1fc6b7caeb202ef1f60434a_prof);

        
        $__internal_f93a8234b1348781539b29557ea475ad445f103950bb8503fcd052e79833be72->leave($__internal_f93a8234b1348781539b29557ea475ad445f103950bb8503fcd052e79833be72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bcf46d27888e0d52b0c1e4aaa2a034e91215b374cddc6b18e74308387bbfa86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcf46d27888e0d52b0c1e4aaa2a034e91215b374cddc6b18e74308387bbfa86->enter($__internal_6bcf46d27888e0d52b0c1e4aaa2a034e91215b374cddc6b18e74308387bbfa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81c0881c592d6fab45c428c81da0e646e99185e5dda436fc496be5260d425b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c0881c592d6fab45c428c81da0e646e99185e5dda436fc496be5260d425b1b->enter($__internal_81c0881c592d6fab45c428c81da0e646e99185e5dda436fc496be5260d425b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_81c0881c592d6fab45c428c81da0e646e99185e5dda436fc496be5260d425b1b->leave($__internal_81c0881c592d6fab45c428c81da0e646e99185e5dda436fc496be5260d425b1b_prof);

        
        $__internal_6bcf46d27888e0d52b0c1e4aaa2a034e91215b374cddc6b18e74308387bbfa86->leave($__internal_6bcf46d27888e0d52b0c1e4aaa2a034e91215b374cddc6b18e74308387bbfa86_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d740c2daa49e8ba5b6f2dd3cb005e6bd971606c6613d950098a3d8fac293bedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d740c2daa49e8ba5b6f2dd3cb005e6bd971606c6613d950098a3d8fac293bedd->enter($__internal_d740c2daa49e8ba5b6f2dd3cb005e6bd971606c6613d950098a3d8fac293bedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9621da0aa40e99a89c45ea601774bcddc9e10c5c5a996d73fe5d9ee0f750c234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9621da0aa40e99a89c45ea601774bcddc9e10c5c5a996d73fe5d9ee0f750c234->enter($__internal_9621da0aa40e99a89c45ea601774bcddc9e10c5c5a996d73fe5d9ee0f750c234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9621da0aa40e99a89c45ea601774bcddc9e10c5c5a996d73fe5d9ee0f750c234->leave($__internal_9621da0aa40e99a89c45ea601774bcddc9e10c5c5a996d73fe5d9ee0f750c234_prof);

        
        $__internal_d740c2daa49e8ba5b6f2dd3cb005e6bd971606c6613d950098a3d8fac293bedd->leave($__internal_d740c2daa49e8ba5b6f2dd3cb005e6bd971606c6613d950098a3d8fac293bedd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa0b2b01ac093ac614552bdc9fb03217c669d9f3c53df539b922c12f335fa233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0b2b01ac093ac614552bdc9fb03217c669d9f3c53df539b922c12f335fa233->enter($__internal_aa0b2b01ac093ac614552bdc9fb03217c669d9f3c53df539b922c12f335fa233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9987ad5bfbedf3a93b88ebdf6bea5d672158b768317052d1c5ef018bcdb1626d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9987ad5bfbedf3a93b88ebdf6bea5d672158b768317052d1c5ef018bcdb1626d->enter($__internal_9987ad5bfbedf3a93b88ebdf6bea5d672158b768317052d1c5ef018bcdb1626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9987ad5bfbedf3a93b88ebdf6bea5d672158b768317052d1c5ef018bcdb1626d->leave($__internal_9987ad5bfbedf3a93b88ebdf6bea5d672158b768317052d1c5ef018bcdb1626d_prof);

        
        $__internal_aa0b2b01ac093ac614552bdc9fb03217c669d9f3c53df539b922c12f335fa233->leave($__internal_aa0b2b01ac093ac614552bdc9fb03217c669d9f3c53df539b922c12f335fa233_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/juanantonio/NetBeansProjects/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
