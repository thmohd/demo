<?php

/* ::base.html.twig */
class __TwigTemplate_529e5585ae80872a210a7f88e76576edd73a14932aed295f9be3c3d9e738b089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'coreModalTitle' => array($this, 'block_coreModalTitle'),
            'coreModalFooter' => array($this, 'block_coreModalFooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div id=\"pageContainer\" class=\"container\">
    <!-- #header -->
    <div id=\"header\" class=\"clearfix\">
        <div id=\"logo\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("core_homepage");
        echo "\">
                <img src=\"http://www.taxanalysts.com/www/website.nsf/tax-analysts.gif\" width=\"190\" height=\"80\">
            </a>
        </div>
        <div id=\"pageTitle\">
            <h1>Free Trial User Registration Form</h1>
        </div>
    </div>



    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"col-sm-2 sidebar-container\" data-example-id=\"default-navbar\">
        <nav class=\"navbar navbar-default\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-menu\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand visible-xs\" href=\"#\" >Menu</a>
            </div>
            <!-- nav -->
            <div class=\"collapse navbar-collapse\" id=\"sidebar-menu\">
                <div id=\"nav\">
                    ";
        // line 46
        $this->displayBlock('nav', $context, $blocks);
        // line 54
        echo "                </div>
            </div>
        </nav>
    </div>





        <!-- /#nav --><!-- #main -->
    <div id=\"main\" class=\"col-sm-8 col-sm-offset-1\">
        <div id='loading'><span class='fa fa-spinner fa-5x fa-spin'></span></div>
        <div id=\"errorsMsg\" class=\"alert-danger\"></div>
            ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "    </div>
    <!-- /#nav --><!-- #main -->
    <div id=\"footer\">

    </div>


    <!-- Modal -->
    <div class=\"modal fade\" id=\"coreModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"coreModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 81
        $this->displayBlock('coreModalTitle', $context, $blocks);
        // line 82
        echo "                    </h4>
                </div>
                <div class=\"modal-body\">
                    ...
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 88
        $this->displayBlock('coreModalFooter', $context, $blocks);
        // line 91
        echo "                </div>
            </div>
        </div>
    </div>
</div>


";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Free Trial User Registration Form";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6df880c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6df880c_0") : $this->env->getExtension('assets')->getAssetUrl("css/6df880c_part_1_bootstrap.min_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6df880c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6df880c_1") : $this->env->getExtension('assets')->getAssetUrl("css/6df880c_part_1_style_2.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "6df880c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6df880c") : $this->env->getExtension('assets')->getAssetUrl("css/6df880c.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    ";
    }

    // line 46
    public function block_nav($context, array $blocks = array())
    {
        // line 47
        echo "                            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" >Users</a></li>
                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("industry");
        echo "\" >Industries</a></li>
                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("subindustry");
        echo "\" >Sub Industries</a></li>
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("occupation");
        echo "\">Occupations</a></li>
                        </ul>

                    ";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
    }

    // line 81
    public function block_coreModalTitle($context, array $blocks = array())
    {
        echo " Tax Analysts ";
    }

    // line 88
    public function block_coreModalFooter($context, array $blocks = array())
    {
        // line 89
        echo "                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    ";
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "28ca083_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28ca083_0") : $this->env->getExtension('assets')->getAssetUrl("js/28ca083_bootstrap.min_1.js");
            // line 103
            echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "28ca083_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28ca083_1") : $this->env->getExtension('assets')->getAssetUrl("js/28ca083_script_2.js");
            // line 103
            echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "28ca083_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28ca083_2") : $this->env->getExtension('assets')->getAssetUrl("js/28ca083_autoformat_3.js");
            // line 103
            echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "28ca083"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28ca083") : $this->env->getExtension('assets')->getAssetUrl("js/28ca083.js");
            // line 103
            echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 104,  267 => 103,  260 => 104,  257 => 103,  251 => 104,  248 => 103,  242 => 104,  239 => 103,  234 => 99,  231 => 98,  226 => 89,  223 => 88,  217 => 81,  212 => 67,  204 => 50,  200 => 49,  196 => 48,  191 => 47,  188 => 46,  184 => 12,  178 => 10,  175 => 9,  168 => 10,  165 => 9,  159 => 10,  156 => 9,  151 => 8,  148 => 7,  142 => 6,  136 => 107,  134 => 98,  125 => 91,  123 => 88,  115 => 82,  113 => 81,  98 => 68,  96 => 67,  81 => 54,  79 => 46,  50 => 20,  39 => 13,  37 => 7,  33 => 6,  26 => 1,);
    }
}
