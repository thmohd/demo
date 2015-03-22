<?php

/* CoreBundle:User:new.html.twig */
class __TwigTemplate_c3957541f8ae81071ae03565eed8554899ade16ee8ac774897bbbc2ef725f61c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "reg")));
        echo "



    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "


    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" required=\"required\" name=\"agreement\" id=\"agreement\">
            <a href=\"#\" class=\"jsClick\" data-toggle=\"modal\" data-target=\"#coreModal\" data-ptitle=\"Terms & Conditions\"
               data-route=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/agreement.html\">I agree to the Terms & Conditions</a>
        </label>
    </div>

    <button type=\"submit\" id=\"submitBtn\" data-loading-text=\"Loading...\" class=\"btn btn-primary pull-right\" autocomplete=\"off\">Create Account</button>
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  56 => 17,  46 => 10,  39 => 6,  36 => 3,  11 => 1,);
    }
}
