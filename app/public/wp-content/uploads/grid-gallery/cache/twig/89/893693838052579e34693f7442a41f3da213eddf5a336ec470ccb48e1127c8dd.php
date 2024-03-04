<?php

/* @settings/index.twig */
class __TwigTemplate_f617b5891ddb003fa24d9e8ab7d4ff9fc4d98b1d65113cd650048f7d1546b984 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@settings/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'beforeSettingsList' => array($this, 'block_beforeSettingsList'),
            'beforeSettings' => array($this, 'block_beforeSettings'),
            'afterSettings' => array($this, 'block_afterSettings'),
            'afterSettingsList' => array($this, 'block_afterSettingsList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $context["h"] = $this->loadTemplate("@core/helpers.twig", "@settings/index.twig", 5);
        // line 6
        echo "
    <form action=\"";
        // line 7
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "settings", 1 => "saveSettings", 2 => array("_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), "html", null, true);
        echo "\" method=\"POST\">";
        // line 8
        $this->displayBlock('beforeSettingsList', $context, $blocks);
        // line 14
        echo "        <div class=\"settings-list\">";
        // line 15
        $this->displayBlock('beforeSettings', $context, $blocks);
        // line 16
        echo "            <div class=\"settings\">
                <div class=\"setting\">
                    <div class=\"setting-description\">
                        <label>";
        // line 19
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Image Preprocessor"), "method"), "html", null, true);
        echo "</label>";
        // line 20
        echo $context["h"]->getshowTooltip("Choose the preprocessor for image transformations (cropping, resizing etc.) Note: Changing the default settings may affect image quality. If you are not sure about how to use this option, please leave the settings by default.", "top", true);
        echo "
                    </div>
                    <div class=\"setting-control\">
                        <select name=\"settings[image_editor]\">";
        // line 24
        $context["editors"] = array("auto" => "Auto", "gd" => "GD", "imagic" => "Imagick");
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["editors"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 30
            echo "                                <option value=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"";
            // line 31
            if (($context["name"] == $this->getAttribute(($context["settings"] ?? null), "image_editor", array()))) {
                // line 32
                echo "                                    selected=\"selected\"";
            }
            // line 34
            echo "                                >";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["title"], "html", null, true);
            echo "
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </select>
                    </div>
                </div>
                                    <div class=\"setting\">
                                        <div class=\"setting-description\">
                                            <label>";
        // line 42
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Show promo link"), "method"), "html", null, true);
        echo "</label>";
        // line 43
        echo $context["h"]->getshowTooltip($this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "To promote our plugin, you can show the promo link below the table, if you don't want to show the promo link you can also hide it. You can completely remove the link under the table by purchasing the PRO version of the plugin. Thank you for cooperation!"), "method"), "top", true);
        echo " </label>
                                        </div>
                                        <div class=\"setting-control\">
                                            <input type=\"checkbox\"  name=\"settings[add_love_link]\"";
        // line 46
        if (($this->getAttribute(($context["settings"] ?? null), "add_love_link", array()) == "on")) {
            echo " checked";
        }
        echo ">
                                        </div>
                                    </div>


                                    <div class=\"setting\">
                                        <div class=\"setting-description\">
                                            <label>";
        // line 53
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Remove promo link"), "method"), "html", null, true);
        echo "</label>";
        // line 54
        echo $context["h"]->getshowTooltip($this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "If you want to delete promo link below the table from HTML just check this box. Only for PRO users."), "method"), "top", true);
        echo " </label>";
        // line 55
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 56
            echo "                                                <a target=\"_blank\" href=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('build_pro_url')->getCallable(), array(array("utm_medium" => "load_by_ajax_enabled"))), "html", null, true);
            echo "\">";
            // line 57
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "PRO option"), "method"), "html", null, true);
            echo "
                                                </a>";
        }
        // line 60
        echo "                                        </div>
                                        <div class=\"setting-control\">";
        // line 62
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 63
            echo "                                                <input type=\"checkbox\" disabled value=\"\"/>";
        } else {
            // line 65
            echo "                                                <input type=\"checkbox\"  name=\"settings[remove_love_link]\"";
            if (($this->getAttribute(($context["settings"] ?? null), "remove_love_link", array()) == "on")) {
                echo " checked";
            }
            echo ">";
        }
        // line 67
        echo "                                        </div>
                                    </div>

                <div class=\"setting\">
                    <div class=\"setting-description\">

                        <label>";
        // line 73
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Roles"), "method"), "html", null, true);
        echo "</label>";
        // line 74
        echo $context["h"]->getshowTooltip("Here you may assign the roles of the persons, that are allowed to use the plugin. This feature is useful when you need to depute your site management to someone else. Administrator is included by default.", "top", true);
        // line 76
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 77
            echo "                            <a target=\"_blank\" href=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('build_pro_url')->getCallable(), array(array("utm_medium" => "manage_roles"))), "html", null, true);
            echo "\">";
            // line 78
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "PRO option"), "method"), "html", null, true);
            echo "
                            </a>";
        }
        // line 81
        echo "                    </div>
                    <div class=\"setting-control\">
                        <select multiple=\"multiple\" name=\"settings[access_roles][]\" class=\"chosen-select\" data-placeholder=\"";
        // line 83
        echo "Select avalilable roles to use tables.";
        echo "\">
                            <option value=\"administrator\" disabled selected>Administrator</option>";
        // line 85
        $context["roles"] = array("editor" => "Editor", "author" => "Author", "contributor" => "Contributor", "subscriber" => "Subscriber");
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["role"] => $context["title"]) {
            // line 92
            echo "                                <option value=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["role"], "html", null, true);
            echo "\"";
            // line 93
            if (Twig_SupTwgSgg_in_filter($context["role"], $this->getAttribute(($context["settings"] ?? null), "access_roles", array()))) {
                // line 94
                echo "                                    selected=\"selected\"";
            }
            // line 96
            echo "                                >";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["title"], "html", null, true);
            echo "
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                        </select>
                    </div>
                </div>
            </div>";
        // line 103
        $this->displayBlock('afterSettings', $context, $blocks);
        // line 104
        echo "        </div>";
        // line 105
        $this->displayBlock('afterSettingsList', $context, $blocks);
        // line 106
        echo "    </form>";
    }

    // line 8
    public function block_beforeSettingsList($context, array $blocks = array())
    {
        // line 9
        echo "            <button class=\"button\">
                <i class=\"fa fa-fw fa-save\"></i>";
        // line 11
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Save"), "method"), "html", null, true);
        echo "
            </button>";
    }

    // line 15
    public function block_beforeSettings($context, array $blocks = array())
    {
    }

    // line 103
    public function block_afterSettings($context, array $blocks = array())
    {
    }

    // line 105
    public function block_afterSettingsList($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@settings/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 105,  235 => 103,  230 => 15,  224 => 11,  221 => 9,  218 => 8,  214 => 106,  212 => 105,  210 => 104,  208 => 103,  203 => 99,  194 => 96,  191 => 94,  189 => 93,  185 => 92,  181 => 91,  179 => 85,  175 => 83,  171 => 81,  166 => 78,  162 => 77,  160 => 76,  158 => 74,  155 => 73,  147 => 67,  140 => 65,  137 => 63,  135 => 62,  132 => 60,  127 => 57,  123 => 56,  121 => 55,  118 => 54,  115 => 53,  103 => 46,  97 => 43,  94 => 42,  87 => 37,  78 => 34,  75 => 32,  73 => 31,  69 => 30,  65 => 29,  63 => 24,  57 => 20,  54 => 19,  49 => 16,  47 => 15,  45 => 14,  43 => 8,  40 => 7,  37 => 6,  35 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@settings/index.twig", "/Users/Max/Local Sites/setina/app/public/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Settings/views/index.twig");
    }
}
