<?php

/* @galleries/lovelink/showhidden.twig */
class __TwigTemplate_c8875dec071c62ce4f2efeafb5eab04b19115f3f26614f170cc70a2557e8f054 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a title=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["linkTitle"] ?? null), "html", null, true);
        echo "\" style=\"display:none;\" href=\"https://supsystic.com/plugins/photo-gallery/?utm_medium=love_link\" target=\"_blank\">";
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["linkTitle"] ?? null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@galleries/lovelink/showhidden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@galleries/lovelink/showhidden.twig", "/Users/Max/Local Sites/setina/app/public/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/lovelink/showhidden.twig");
    }
}
