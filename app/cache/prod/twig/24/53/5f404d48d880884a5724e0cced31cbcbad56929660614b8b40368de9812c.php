<?php

/* CoreBundle:Subindustry:show.html.twig */
class __TwigTemplate_24535f404d48d880884a5724e0cced31cbcbad56929660614b8b40368de9812c extends Twig_Template
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
        // line 4
        echo "<h1>SubIndustry</h1>

    <div class=\"table-responsive\">
        <table class=\"table\">
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>

    </div>
    <div id=\"featured\" class=\"left\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("subindustry");
        echo "\" class=\"btn btn-default\"><span class=\"fa fa-reply\"></span> Back to the list</a>
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subindustry_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\"><span class=\"fa fa-edit\"></span> Edit</a>
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn-danger")));
        echo "
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Subindustry:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  54 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
