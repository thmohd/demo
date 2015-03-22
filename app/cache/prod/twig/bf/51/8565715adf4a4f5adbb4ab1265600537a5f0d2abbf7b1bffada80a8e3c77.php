<?php

/* CoreBundle:User:email.html.twig */
class __TwigTemplate_bf518565715adf4a4f5adbb4ab1265600537a5f0d2abbf7b1bffada80a8e3c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>

    <style>
        .panel{
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            border-color: #d6e9c6;
        }
        .panel-heading{
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .panel-body{
            padding: 15px;
        }
    </style>
</head>
<body>

</body>
</html>

";
        // line 29
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"panel\">
        <div class=\"panel-heading\">New User Registration</div>
        <div class=\"panel-body\">
            <p><strong>Name: </strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstName", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastName", array()), "html", null, true);
        echo "</p>
            <p><strong>Title: </strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userTitle", array()), "html", null, true);
        echo "</p>
            <p><strong>Phone: </strong> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "phone", array()), "html", null, true);
        echo "</p>
            <p><strong>Email: </strong> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userEmail", array()), "html", null, true);
        echo "</p>
            <p><strong>Company: </strong> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company", array()), "html", null, true);
        echo "</p>
            <p><strong>Occupation: </strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "occupation", array()), "html", null, true);
        echo "</p>
            <p><strong>Industry: </strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "industry", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subindustry", array()), "html", null, true);
        echo "</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CoreBundle:User:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  82 => 38,  78 => 37,  74 => 36,  70 => 35,  66 => 34,  61 => 33,  56 => 30,  50 => 29,  20 => 1,);
    }
}
