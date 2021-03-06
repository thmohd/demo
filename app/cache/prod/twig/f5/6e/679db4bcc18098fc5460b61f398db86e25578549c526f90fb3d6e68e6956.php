<?php

/* CoreBundle:Subindustry:index.html.twig */
class __TwigTemplate_f56e679db4bcc18098fc5460b61f398db86e25578549c526f90fb3d6e68e6956 extends Twig_Template
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
        echo "<h1>SubIndustry list</h1>

    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "    <tr>
        <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subindustry_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
        <td>
            <a  class=\"btn btn-sm btn-info\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subindustry_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
            <a class=\"btn btn-sm btn-success\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subindustry_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>
    </div>
    <div id=\"featured\" class=\"right\">
        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("subindustry_new");
        echo "\" class=\"btn btn-primary\"> Create a new Category </a>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Subindustry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  85 => 26,  75 => 22,  71 => 21,  66 => 19,  60 => 18,  57 => 17,  53 => 16,  39 => 4,  36 => 3,  11 => 1,);
    }
}
