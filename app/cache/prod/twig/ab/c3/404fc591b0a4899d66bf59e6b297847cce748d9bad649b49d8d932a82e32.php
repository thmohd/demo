<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_abc3404fc591b0a4899d66bf59e6b297847cce748d9bad649b49d8d932a82e32 extends Twig_Template
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
        // line 3
        return $this->env->resolveTemplate((($this->getAttribute(        // line 1
(isset($context["app"]) ? $context["app"] : null), "user", array())) ? ("::base.html.twig") : ("FOSUserBundle::layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <div id=\"pageErrors\">
        <p><strong>Oops! Something went wrong</strong></p>

        ";
        // line 11
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 404)) {
            // line 12
            echo "            <p>We are sorry, but the page you are trying to reach is not exist!</p>
        ";
        } elseif ((        // line 13
(isset($context["status_code"]) ? $context["status_code"] : null) == 403)) {
            // line 14
            echo "            <p>We are sorry, but you are not authorized to access this area!</p>
        ";
        } else {
            // line 16
            echo "            <p>We are sorry for that, please try again or contact us on <a href=\"mailto:mohammad@althayabeh.com\" class=\"btn-link\">mohammad@althayabeh.com</a></p>
        ";
        }
        // line 18
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  49 => 16,  45 => 14,  43 => 13,  40 => 12,  38 => 11,  32 => 7,  29 => 6,  25 => 3,  19 => 1,  18 => 3,);
    }
}
