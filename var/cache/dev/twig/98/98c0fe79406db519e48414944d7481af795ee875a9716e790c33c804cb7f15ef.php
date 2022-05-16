<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__77409025e9f367108a2f3b148d7b6b89e2f8c3eeb031e82378ab16cb7df77c42 */
class __TwigTemplate_6e5962a5af3bb95ded339f53c7fe2ad2718ae591300c85f3828a0575d53aae1c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__77409025e9f367108a2f3b148d7b6b89e2f8c3eeb031e82378ab16cb7df77c42"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__77409025e9f367108a2f3b148d7b6b89e2f8c3eeb031e82378ab16cb7df77c42"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Rendimiento • prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.8.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '98fe408b59fc6b167d978800903b5ee6';
    var token_admin_orders = tokenAdminOrders = '7745b3d38952b97d8c83ea0ba101c777';
    var token_admin_customers = '08aaf3dbc4ba2ef2d8aa14125e13063b';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'd120f79b39d74cc178c2adeceeaa06b7';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '9ed565763d7f86d77607b20df5be5258';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin576auqsvk/index.php/improve/modules/catalog/recommended?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU';
    var admin_notification_get_link = '/prestashop/admin576auqsvk/index.php/common/notifications?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin576auqsvk/index.php/common/notifications/ack?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/prestashop/admin576auqsvk/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin576auqsvk/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin576auqsvk\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin576auqsvk\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin576auqsvk/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.8.5\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin576auqsvk/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.8.5\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin576auqsvk/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin576auqsvk/index.php/common/notifications?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/localhost\\/prestashop\\/admin576auqsvk\\/index.php?controller=AdminGamification&token=2a8b6d5245325773ddfd4d835932a9e5\";
            var current_id_tab = 105;
        </script>

";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminperformance\"
  data-base-url=\"/prestashop/admin576auqsvk/index.php\"  data-token=\"pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminDashboard&amp;token=838a964aa4436b64776f1bc7918b094f\"></a>
      <span id=\"shop_version\">1.7.8.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=2804b1e7a4d8a5b7c6be51bb73f76936\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin576auqsvk/index.php/improve/modules/manage?token=ac97a037d2453b4774e3b013a31a392b\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin576auqsvk/index.php/sell/catalog/categories/new?token=ac97a037d2453b4774e3b013a31a392b\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin576auqsvk/index.php/sell/catalog/products/new?token=ac97a037d2453b4774e3b013a31a392b\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=df9f9d7af78eec8d320b458d75183f76\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminOrders&amp;token=7745b3d38952b97d8c83ea0ba101c777\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"68\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminQuickAccesses&token=2d05ff8ccd213c2ca5a8cd2b290dbbf3\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Rendimiento - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminQuickAccesses&token=2d05ff8ccd213c2ca5a8cd2b290dbbf3\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin576auqsvk/index.php?controller=AdminSearch&amp;token=889e824782ebf48c1880e32920d3d095\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\"
             href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo depuración</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fdee58a6027a54df0fa7eb436f21c015\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Raul</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/employees/1/edit?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminLogin&amp;logout=1&amp;token=653b916f1aaf397f6bcf3bb3b1fa7857\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin576auqsvk/index.php/configure/advanced/employees/toggle-navigation?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminDashboard&amp;token=838a964aa4436b64776f1bc7918b094f\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/sell/orders/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/orders/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/orders/invoices/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/orders/credit-slips/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/orders/delivery-slips/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarts&amp;token=fdee58a6027a54df0fa7eb436f21c015\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/sell/catalog/products?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/catalog/products?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/catalog/categories?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/catalog/monitoring/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminAttributesGroups&amp;token=6e8419d2553c2f7c1539fc2411647cb0\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/catalog/brands/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/attachments/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCartRules&amp;token=df9f9d7af78eec8d320b458d75183f76\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/stocks/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/sell/customers/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/customers/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/addresses/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCustomerThreads&amp;token=d120f79b39d74cc178c2adeceeaa06b7\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCustomerThreads&amp;token=d120f79b39d74cc178c2adeceeaa06b7\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/sell/customer-service/order-messages/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminReturn&amp;token=ae11b7bb2bda8a8c6e1d5005e9c76b70\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/modules/metrics/legacy/stats?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/modules/metrics/legacy/stats?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/modules/metrics?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/improve/modules/manage?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/modules/manage?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Gestor de módulo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/modules/addons/modules/catalog?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Catálogo de Módulos
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/improve/design/themes/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/design/themes/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/modules/addons/themes/catalog?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/design/mail_theme/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/design/cms-pages/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/design/modules/positions/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminImages&amp;token=25e2a32e1b764cf4b6adc2c91ae186c5\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/modules/link-widget/list?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarriers&amp;token=e3c19a5a74139c5e42d9a12fca534f96\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarriers&amp;token=e3c19a5a74139c5e42d9a12fca534f96\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/shipping/preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/improve/payment/payment_methods?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/payment/payment_methods?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/payment/preferences?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/improve/international/localization/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/international/localization/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/international/zones/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/international/taxes/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/improve/international/translations/settings?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminPsfacebookModule&amp;token=ee032c18a907736d658d77f60ac8b3fd\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminPsfacebookModule&amp;token=ee032c18a907736d658d77f60ac8b3fd\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fc3d175286a44a14b41601e86e0ac6e8\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/configure/shop/preferences/preferences?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/shop/preferences/preferences?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/shop/order-preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Configuración de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/shop/product-preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/shop/customer-preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Ajustes sobre clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/shop/contacts/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/shop/seo-urls/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminSearchConf&amp;token=e2275d4445b6f49a7d6a166830d5aba6\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminGamification&amp;token=2a8b6d5245325773ddfd4d835932a9e5\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/system-information/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/system-information/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/administration/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/emails/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Dirección de correo electrónico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/import/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/employees/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/sql-requests/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/logs/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/webservice-keys/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/feature-flags/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" class=\"link\"> Características experimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      ¡Lanza tu tienda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resumen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Detener módulo Primeros pasos</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parámetros Avanzados</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\" aria-current=\"page\">Rendimiento</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Rendimiento          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/clear-cache?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\"                  title=\"Borrar la caché\"                >
                  <i class=\"material-icons\">delete</i>                  Borrar la caché
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin576auqsvk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.5%2526country%253Des/Ayuda?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/clear-cache?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\"              title=\"Borrar la caché\"            >
              Borrar la caché
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin576auqsvk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.5%2526country%253Des/Ayuda?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\WebImpacto\\Xampp\\htdocs\\prestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Módulos y Servicios recomendados',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/prestashop/admin576auqsvk/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\WebImpacto\\Xampp\\htdocs\\prestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u00a1Bienvenido a su tienda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u00a1Hola! Me llamo Presto y estoy aqu\\u00ed para ense\\u00f1arle todo esto.<\\/p>\\n    <p>Descubrir\\u00e1 algunos pasos esenciales antes de poder lanzar su tienda:\\n    Cree su primer producto, personalice su tienda, configure env\\u00edos y pagos...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u00a1Empecemos!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">M\\u00e1s tarde<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Empezar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/prestashop\\/admin576auqsvk\\/index.php?controller=AdminDashboard&token=838a964aa4436b64776f1bc7918b094f\"}]},{\"name\":\"product\",\"title\":\"Vamos a crear su primer producto\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 quiere contar sobre el producto? Piense en lo que sus clientes quieren saber.\",\"2\":\"A\\u00f1ada informaci\\u00f3n clara y atractiva. No se preocupe, podr\\u00e1 editarlo m\\u00e1s tarde :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dele a su producto un nombre atractivo.\",\"options\":[\"savepoint\"],\"page\":[\"\\/prestashop\\/admin576auqsvk\\/index.php\\/sell\\/catalog\\/products\\/new?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Complete los detalles esenciales en esta pesta\\u00f1a. Las otras pesta\\u00f1as son para informaci\\u00f3n m\\u00e1s avanzada.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1A\\u00f1ada una o m\\u00e1s im\\u00e1genes para que su producto atraiga la atenci\\u00f3n!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00bfA qu\\u00e9 precio quiere venderlo?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u00a1Genial! Acaba de crear su primer producto. Tiene buena pinta, \\u00bfverdad?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Dele a su tienda su propia identidad\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 aspecto quiere para su tienda? \\u00bfQu\\u00e9 la hace especial?\",\"2\":\"Personalice su tema o escoja el mejor dise\\u00f1o de nuestro cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u00a1Una buena manera de empezar es a\\u00f1adir su propio logotipo aqu\\u00ed!\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin576auqsvk\\/index.php\\/improve\\/design\\/themes\\/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si quiere algo realmente especial, \\u00a1eche un vistazo al cat\\u00e1logo de temas!\",\"page\":\"\\/prestashop\\/admin576auqsvk\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Prepara tu tienda para recibir pagos\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere que le paguen sus clientes?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estos m\\u00e9todos de pago ya est\\u00e1n disponibles para tus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin576auqsvk\\/index.php\\/improve\\/payment\\/payment_methods?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Elija sus soluciones de env\\u00edo\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere enviar sus productos?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqu\\u00ed est\\u00e1n los m\\u00e9todos de env\\u00edo disponibles en su tienda ahora mismo.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/localhost\\/prestashop\\/admin576auqsvk\\/index.php?controller=AdminCarriers&token=e3c19a5a74139c5e42d9a12fca534f96\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00a1Es su turno!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Ha visto lo esencial, pero hay mucho m\\u00e1s por explorar.<br \\/>\\n          Algunos recursos pueden ayudarle a profundizar aun m\\u00e1s:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Gu\\u00eda de principiante<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Foro<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Formaci\\u00f3n<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial en v\\u00eddeo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estoy listo<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/prestashop\\/admin576auqsvk\\/index.php?controller=AdminDashboard&token=838a964aa4436b64776f1bc7918b094f\"}]}]}, 1, \"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminWelcome&token=06cc2bcfd1c4d0a2e5a9bc81131d9920\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>¡Eh! ¿Se ha perdido?</p>    <p>Para continuar, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Si quiere detener el tutorial, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Salir del tutorial de bienvenida</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Paso <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Siguiente</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1290
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminDashboard&amp;token=838a964aa4436b64776f1bc7918b094f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=raulmartinluengo%40hotmail.com&amp;firstname=Raul&amp;lastname=Martin+Luengo&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin576auqsvk/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=raulmartinluengo%40hotmail.com&amp;firstname=Raul&amp;lastname=Martin+Luengo&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1398
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1290
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1398
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__77409025e9f367108a2f3b148d7b6b89e2f8c3eeb031e82378ab16cb7df77c42";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1568 => 1398,  1503 => 1290,  1470 => 106,  1455 => 1398,  1341 => 1290,  152 => 106,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\\\"es\\\">
<head>
  <meta charset=\\\"utf-8\\\">
<meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1\\\">
<meta name=\\\"apple-mobile-web-app-capable\\\" content=\\\"yes\\\">
<meta name=\\\"robots\\\" content=\\\"NOFOLLOW, NOINDEX\\\">

<link rel=\\\"icon\\\" type=\\\"image/x-icon\\\" href=\\\"/prestashop/img/favicon.ico\\\" />
<link rel=\\\"apple-touch-icon\\\" href=\\\"/prestashop/img/app_icon.png\\\" />

<title>Rendimiento • prestashop</title>

  <script type=\\\"text/javascript\\\">
    var help_class_name = \\'AdminPerformance\\';
    var iso_user = \\'es\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'es\\';
    var full_cldr_language_code = \\'es-ES\\';
    var country_iso_code = \\'ES\\';
    var _PS_VERSION_ = \\'1.7.8.5\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Se ha recibido un nuevo pedido en tu tienda.\\';
    var order_number_msg = \\'Número de pedido: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'Desde: \\';
    var see_order_msg = \\'Ver este pedido\\';
    var new_customer_msg = \\'Un nuevo cliente se ha registrado en tu tienda.\\';
    var customer_name_msg = \\'Nombre del cliente: \\';
    var new_msg = \\'Un nuevo mensaje ha sido publicado en tu tienda.\\';
    var see_msg = \\'Leer este mensaje\\';
    var token = \\'98fe408b59fc6b167d978800903b5ee6\\';
    var token_admin_orders = tokenAdminOrders = \\'7745b3d38952b97d8c83ea0ba101c777\\';
    var token_admin_customers = \\'08aaf3dbc4ba2ef2d8aa14125e13063b\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'d120f79b39d74cc178c2adeceeaa06b7\\';
    var currentIndex = \\'index.php?controller=AdminPerformance\\';
    var employee_token = \\'9ed565763d7f86d77607b20df5be5258\\';
    var choose_language_translate = \\'Selecciona el idioma:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/prestashop/admin576auqsvk/index.php/improve/modules/catalog/recommended?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\';
    var admin_notification_get_link = \\'/prestashop/admin576auqsvk/index.php/common/notifications?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/prestashop/admin576auqsvk/index.php/common/notifications/ack?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Actualización correcta\\';
    var errorLogin = \\'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.\\';
    var search_product_msg = \\'Buscar un producto\\';
  </script>

      <link href=\\\"/prestashop/admin576auqsvk/themes/new-theme/public/theme.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/modules/blockwishlist/public/backoffice.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/admin576auqsvk/themes/default/css/vendor/nv.d3.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/modules/gamification/views/css/gamification.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/modules/welcome/public/module.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
      <link href=\\\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\\\" rel=\\\"stylesheet\\\" type=\\\"text/css\\\"/>
  
  <script type=\\\"text/javascript\\\">
var baseAdminDir = \\\"\\\\/prestashop\\\\/admin576auqsvk\\\\/\\\";
var baseDir = \\\"\\\\/prestashop\\\\/\\\";
var changeFormLanguageUrl = \\\"\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\";
var currency = {\\\"iso_code\\\":\\\"EUR\\\",\\\"sign\\\":\\\"\\\\u20ac\\\",\\\"name\\\":\\\"Euro\\\",\\\"format\\\":null};
var currency_specifications = {\\\"symbol\\\":[\\\",\\\",\\\".\\\",\\\";\\\",\\\"%\\\",\\\"-\\\",\\\"+\\\",\\\"E\\\",\\\"\\\\u00d7\\\",\\\"\\\\u2030\\\",\\\"\\\\u221e\\\",\\\"NaN\\\"],\\\"currencyCode\\\":\\\"EUR\\\",\\\"currencySymbol\\\":\\\"\\\\u20ac\\\",\\\"numberSymbols\\\":[\\\",\\\",\\\".\\\",\\\";\\\",\\\"%\\\",\\\"-\\\",\\\"+\\\",\\\"E\\\",\\\"\\\\u00d7\\\",\\\"\\\\u2030\\\",\\\"\\\\u221e\\\",\\\"NaN\\\"],\\\"positivePattern\\\":\\\"#,##0.00\\\\u00a0\\\\u00a4\\\",\\\"negativePattern\\\":\\\"-#,##0.00\\\\u00a0\\\\u00a4\\\",\\\"maxFractionDigits\\\":2,\\\"minFractionDigits\\\":2,\\\"groupingUsed\\\":true,\\\"primaryGroupSize\\\":3,\\\"secondaryGroupSize\\\":3};
var host_mode = false;
var number_specifications = {\\\"symbol\\\":[\\\",\\\",\\\".\\\",\\\";\\\",\\\"%\\\",\\\"-\\\",\\\"+\\\",\\\"E\\\",\\\"\\\\u00d7\\\",\\\"\\\\u2030\\\",\\\"\\\\u221e\\\",\\\"NaN\\\"],\\\"numberSymbols\\\":[\\\",\\\",\\\".\\\",\\\";\\\",\\\"%\\\",\\\"-\\\",\\\"+\\\",\\\"E\\\",\\\"\\\\u00d7\\\",\\\"\\\\u2030\\\",\\\"\\\\u221e\\\",\\\"NaN\\\"],\\\"positivePattern\\\":\\\"#,##0.###\\\",\\\"negativePattern\\\":\\\"-#,##0.###\\\",\\\"maxFractionDigits\\\":3,\\\"minFractionDigits\\\":0,\\\"groupingUsed\\\":true,\\\"primaryGroupSize\\\":3,\\\"secondaryGroupSize\\\":3};
var prestashop = {\\\"debug\\\":true};
var show_new_customers = \\\"1\\\";
var show_new_messages = \\\"1\\\";
var show_new_orders = \\\"1\\\";
</script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/admin576auqsvk/themes/new-theme/public/main.bundle.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/js/jquery/plugins/jquery.chosen.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/js/admin.js?v=1.7.8.5\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/admin576auqsvk/themes/new-theme/public/cldr.bundle.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/js/tools.js?v=1.7.8.5\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/js/vendor/d3.v3.min.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/admin576auqsvk/themes/default/js/vendor/nv.d3.min.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/modules/gamification/views/js/gamification_bt.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\\\"></script>
<script type=\\\"text/javascript\\\" src=\\\"/prestashop/modules/welcome/public/module.js\\\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/prestashop/admin576auqsvk/index.php/common/notifications?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \\\"https:\\\\/\\\\/localhost\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php?controller=AdminGamification&token=2a8b6d5245325773ddfd4d835932a9e5\\\";
            var current_id_tab = 105;
        </script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\\\"lang-es adminperformance\\\"
  data-base-url=\\\"/prestashop/admin576auqsvk/index.php\\\"  data-token=\\\"pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\">

  <header id=\\\"header\\\" class=\\\"d-print-none\\\">

    <nav id=\\\"header_infos\\\" class=\\\"main-header\\\">
      <button class=\\\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\\\"></button>

            <i class=\\\"material-icons js-mobile-menu\\\">menu</i>
      <a id=\\\"header_logo\\\" class=\\\"logo float-left\\\" href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminDashboard&amp;token=838a964aa4436b64776f1bc7918b094f\\\"></a>
      <span id=\\\"shop_version\\\">1.7.8.5</span>

      <div class=\\\"component\\\" id=\\\"quick-access-container\\\">
        <div class=\\\"dropdown quick-accesses\\\">
  <button class=\\\"btn btn-link btn-sm dropdown-toggle\\\" type=\\\"button\\\" data-toggle=\\\"dropdown\\\" aria-haspopup=\\\"true\\\" aria-expanded=\\\"false\\\" id=\\\"quick_select\\\">
    Acceso rápido
  </button>
  <div class=\\\"dropdown-menu\\\">
          <a class=\\\"dropdown-item quick-row-link\\\"
         href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=2804b1e7a4d8a5b7c6be51bb73f76936\\\"
                 data-item=\\\"Evaluación del catálogo\\\"
      >Evaluación del catálogo</a>
          <a class=\\\"dropdown-item quick-row-link\\\"
         href=\\\"https://localhost/prestashop/admin576auqsvk/index.php/improve/modules/manage?token=ac97a037d2453b4774e3b013a31a392b\\\"
                 data-item=\\\"Módulos instalados\\\"
      >Módulos instalados</a>
          <a class=\\\"dropdown-item quick-row-link\\\"
         href=\\\"https://localhost/prestashop/admin576auqsvk/index.php/sell/catalog/categories/new?token=ac97a037d2453b4774e3b013a31a392b\\\"
                 data-item=\\\"Nueva categoría\\\"
      >Nueva categoría</a>
          <a class=\\\"dropdown-item quick-row-link\\\"
         href=\\\"https://localhost/prestashop/admin576auqsvk/index.php/sell/catalog/products/new?token=ac97a037d2453b4774e3b013a31a392b\\\"
                 data-item=\\\"Nuevo\\\"
      >Nuevo</a>
          <a class=\\\"dropdown-item quick-row-link\\\"
         href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=df9f9d7af78eec8d320b458d75183f76\\\"
                 data-item=\\\"Nuevo cupón de descuento\\\"
      >Nuevo cupón de descuento</a>
          <a class=\\\"dropdown-item quick-row-link\\\"
         href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminOrders&amp;token=7745b3d38952b97d8c83ea0ba101c777\\\"
                 data-item=\\\"Pedidos\\\"
      >Pedidos</a>
        <div class=\\\"dropdown-divider\\\"></div>
          <a id=\\\"quick-add-link\\\"
        class=\\\"dropdown-item js-quick-link\\\"
        href=\\\"#\\\"
        data-rand=\\\"68\\\"
        data-icon=\\\"icon-AdminAdvancedParameters\\\"
        data-method=\\\"add\\\"
        data-url=\\\"index.php/configure/advanced/performance\\\"
        data-post-link=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminQuickAccesses&token=2d05ff8ccd213c2ca5a8cd2b290dbbf3\\\"
        data-prompt-text=\\\"Por favor, renombre este acceso rápido:\\\"
        data-link=\\\"Rendimiento - Lista\\\"
      >
        <i class=\\\"material-icons\\\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\\\"quick-manage-link\\\" class=\\\"dropdown-item\\\" href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminQuickAccesses&token=2d05ff8ccd213c2ca5a8cd2b290dbbf3\\\">
      <i class=\\\"material-icons\\\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\\\"component\\\" id=\\\"header-search-container\\\">
        <form id=\\\"header_search\\\"
      class=\\\"bo_search_form dropdown-form js-dropdown-form collapsed\\\"
      method=\\\"post\\\"
      action=\\\"/prestashop/admin576auqsvk/index.php?controller=AdminSearch&amp;token=889e824782ebf48c1880e32920d3d095\\\"
      role=\\\"search\\\">
  <input type=\\\"hidden\\\" name=\\\"bo_search_type\\\" id=\\\"bo_search_type\\\" class=\\\"js-search-type\\\" />
    <div class=\\\"input-group\\\">
    <input type=\\\"text\\\" class=\\\"form-control js-form-search\\\" id=\\\"bo_query\\\" name=\\\"bo_query\\\" value=\\\"\\\" placeholder=\\\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\\\" aria-label=\\\"Barra de búsqueda\\\">
    <div class=\\\"input-group-append\\\">
      <button type=\\\"button\\\" class=\\\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\\\" data-toggle=\\\"dropdown\\\" aria-haspopup=\\\"true\\\" aria-expanded=\\\"false\\\">
        toda la tienda
      </button>
      <div class=\\\"dropdown-menu js-items-list\\\">
        <a class=\\\"dropdown-item\\\" data-item=\\\"toda la tienda\\\" href=\\\"#\\\" data-value=\\\"0\\\" data-placeholder=\\\"¿Qué estás buscando?\\\" data-icon=\\\"icon-search\\\"><i class=\\\"material-icons\\\">search</i> toda la tienda</a>
        <div class=\\\"dropdown-divider\\\"></div>
        <a class=\\\"dropdown-item\\\" data-item=\\\"Catálogo\\\" href=\\\"#\\\" data-value=\\\"1\\\" data-placeholder=\\\"Nombre del producto, referencia, etc.\\\" data-icon=\\\"icon-book\\\"><i class=\\\"material-icons\\\">store_mall_directory</i> Catálogo</a>
        <a class=\\\"dropdown-item\\\" data-item=\\\"Clientes por nombre\\\" href=\\\"#\\\" data-value=\\\"2\\\" data-placeholder=\\\"Nombre\\\" data-icon=\\\"icon-group\\\"><i class=\\\"material-icons\\\">group</i> Clientes por nombre</a>
        <a class=\\\"dropdown-item\\\" data-item=\\\"Clientes por dirección IP\\\" href=\\\"#\\\" data-value=\\\"6\\\" data-placeholder=\\\"123.45.67.89\\\" data-icon=\\\"icon-desktop\\\"><i class=\\\"material-icons\\\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\\\"dropdown-item\\\" data-item=\\\"Pedidos\\\" href=\\\"#\\\" data-value=\\\"3\\\" data-placeholder=\\\"ID del pedido\\\" data-icon=\\\"icon-credit-card\\\"><i class=\\\"material-icons\\\">shopping_basket</i> Pedidos</a>
        <a class=\\\"dropdown-item\\\" data-item=\\\"Facturas\\\" href=\\\"#\\\" data-value=\\\"4\\\" data-placeholder=\\\"Numero de Factura\\\" data-icon=\\\"icon-book\\\"><i class=\\\"material-icons\\\">book</i> Facturas</a>
        <a class=\\\"dropdown-item\\\" data-item=\\\"Carritos\\\" href=\\\"#\\\" data-value=\\\"5\\\" data-placeholder=\\\"ID carrito\\\" data-icon=\\\"icon-shopping-cart\\\"><i class=\\\"material-icons\\\">shopping_cart</i> Carritos</a>
        <a class=\\\"dropdown-item\\\" data-item=\\\"Módulos\\\" href=\\\"#\\\" data-value=\\\"7\\\" data-placeholder=\\\"Nombre del módulo\\\" data-icon=\\\"icon-puzzle-piece\\\"><i class=\\\"material-icons\\\">extension</i> Módulos</a>
      </div>
      <button class=\\\"btn btn-primary\\\" type=\\\"submit\\\"><span class=\\\"d-none\\\">BÚSQUEDA</span><i class=\\\"material-icons\\\">search</i></button>
    </div>
  </div>
</form>

<script type=\\\"text/javascript\\\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\\\"component hide-mobile-sm\\\" id=\\\"header-debug-mode-container\\\">
          <a class=\\\"link shop-state\\\"
             id=\\\"debug-mode\\\"
             data-toggle=\\\"pstooltip\\\"
             data-placement=\\\"bottom\\\"
             data-html=\\\"true\\\"
             title=\\\"<p class=\\'text-left\\'><strong>Tu tienda está en modo debug.</strong></p><p class=\\'text-left\\'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\\\"
             href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\"
          >
            <i class=\\\"material-icons\\\">bug_report</i>
            <span>Modo depuración</span>
          </a>
        </div>
      
      
              <div class=\\\"component\\\" id=\\\"header-shop-list-container\\\">
            <div class=\\\"shop-list\\\">
    <a class=\\\"link\\\" id=\\\"header_shopname\\\" href=\\\"https://localhost/prestashop/\\\" target= \\\"_blank\\\">
      <i class=\\\"material-icons\\\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
        </div>
                    <div class=\\\"component header-right-component\\\" id=\\\"header-notifications-container\\\">
          <div id=\\\"notif\\\" class=\\\"notification-center dropdown dropdown-clickable\\\">
  <button class=\\\"btn notification js-notification dropdown-toggle\\\" data-toggle=\\\"dropdown\\\">
    <i class=\\\"material-icons\\\">notifications_none</i>
    <span id=\\\"notifications-total\\\" class=\\\"count hide\\\">0</span>
  </button>
  <div class=\\\"dropdown-menu dropdown-menu-right js-notifs_dropdown\\\">
    <div class=\\\"notifications\\\">
      <ul class=\\\"nav nav-tabs\\\" role=\\\"tablist\\\">
                          <li class=\\\"nav-item\\\">
            <a
              class=\\\"nav-link active\\\"
              id=\\\"orders-tab\\\"
              data-toggle=\\\"tab\\\"
              data-type=\\\"order\\\"
              href=\\\"#orders-notifications\\\"
              role=\\\"tab\\\"
            >
              Pedidos<span id=\\\"_nb_new_orders_\\\"></span>
            </a>
          </li>
                                    <li class=\\\"nav-item\\\">
            <a
              class=\\\"nav-link \\\"
              id=\\\"customers-tab\\\"
              data-toggle=\\\"tab\\\"
              data-type=\\\"customer\\\"
              href=\\\"#customers-notifications\\\"
              role=\\\"tab\\\"
            >
              Clientes<span id=\\\"_nb_new_customers_\\\"></span>
            </a>
          </li>
                                    <li class=\\\"nav-item\\\">
            <a
              class=\\\"nav-link \\\"
              id=\\\"messages-tab\\\"
              data-toggle=\\\"tab\\\"
              data-type=\\\"customer_message\\\"
              href=\\\"#messages-notifications\\\"
              role=\\\"tab\\\"
            >
              Mensajes<span id=\\\"_nb_new_messages_\\\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\\\"tab-content\\\">
                          <div class=\\\"tab-pane active empty\\\" id=\\\"orders-notifications\\\" role=\\\"tabpanel\\\">
            <p class=\\\"no-notification\\\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fdee58a6027a54df0fa7eb436f21c015\\\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\\\"notification-elements\\\"></div>
          </div>
                                    <div class=\\\"tab-pane  empty\\\" id=\\\"customers-notifications\\\" role=\\\"tabpanel\\\">
            <p class=\\\"no-notification\\\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\\\"notification-elements\\\"></div>
          </div>
                                    <div class=\\\"tab-pane  empty\\\" id=\\\"messages-notifications\\\" role=\\\"tabpanel\\\">
            <p class=\\\"no-notification\\\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\\\"notification-elements\\\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\\\"text/html\\\" id=\\\"order-notification-template\\\">
    <a class=\\\"notif\\\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\\\"float-sm-right\\\">_total_paid_</strong>
    </a>
  </script>

  <script type=\\\"text/html\\\" id=\\\"customer-notification-template\\\">
    <a class=\\\"notif\\\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\\\"text/html\\\" id=\\\"message-notification-template\\\">
    <a class=\\\"notif\\\" href=\\'message_url\\'>
    <span class=\\\"message-notification-status _status_\\\">
      <i class=\\\"material-icons\\\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\\\"material-icons\\\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\\\"component\\\" id=\\\"header-employee-container\\\">
        <div class=\\\"dropdown employee-dropdown\\\">
  <div class=\\\"rounded-circle person\\\" data-toggle=\\\"dropdown\\\">
    <i class=\\\"material-icons\\\">account_circle</i>
  </div>
  <div class=\\\"dropdown-menu dropdown-menu-right\\\">
    <div class=\\\"employee-wrapper-avatar\\\">

      <span class=\\\"employee-avatar\\\"><img class=\\\"avatar rounded-circle\\\" src=\\\"https://localhost/prestashop/img/pr/default.jpg\\\" /></span>
      <span class=\\\"employee_profile\\\">Bienvenido de nuevo, Raul</span>
      <a class=\\\"dropdown-item employee-link profile-link\\\" href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/employees/1/edit?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\">
      <i class=\\\"material-icons\\\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\\\"divider\\\"></p>
    <a class=\\\"dropdown-item\\\" href=\\\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\\\" target=\\\"_blank\\\" rel=\\\"noreferrer\\\"><i class=\\\"material-icons\\\">book</i> Recursos</a>
    <a class=\\\"dropdown-item\\\" href=\\\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\\\" target=\\\"_blank\\\" rel=\\\"noreferrer\\\"><i class=\\\"material-icons\\\">school</i> Formación</a>
    <a class=\\\"dropdown-item\\\" href=\\\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\\\" target=\\\"_blank\\\" rel=\\\"noreferrer\\\"><i class=\\\"material-icons\\\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\\\"dropdown-item\\\" href=\\\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\\\" target=\\\"_blank\\\" rel=\\\"noreferrer\\\"><i class=\\\"material-icons\\\">extension</i> Marketplace de PrestaShop</a>
    <a class=\\\"dropdown-item\\\" href=\\\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\\\" target=\\\"_blank\\\" rel=\\\"noreferrer\\\"><i class=\\\"material-icons\\\">help</i> Centro de ayuda</a>
    <p class=\\\"divider\\\"></p>
    <a class=\\\"dropdown-item employee-link text-center\\\" id=\\\"header_logout\\\" href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminLogin&amp;logout=1&amp;token=653b916f1aaf397f6bcf3bb3b1fa7857\\\">
      <i class=\\\"material-icons d-lg-none\\\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\\\"nav-bar d-none d-print-none d-md-block\\\">
  <span class=\\\"menu-collapse\\\" data-toggle-url=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/employees/toggle-navigation?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\">
    <i class=\\\"material-icons\\\">chevron_left</i>
    <i class=\\\"material-icons\\\">chevron_left</i>
  </span>

  <div class=\\\"nav-bar-overflow\\\">
      <ul class=\\\"main-menu\\\">
              
                    
                    
          
            <li class=\\\"link-levelone\\\" data-submenu=\\\"1\\\" id=\\\"tab-AdminDashboard\\\">
              <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminDashboard&amp;token=838a964aa4436b64776f1bc7918b094f\\\" class=\\\"link\\\" >
                <i class=\\\"material-icons\\\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\\\"category-title\\\" data-submenu=\\\"2\\\" id=\\\"tab-SELL\\\">
                <span class=\\\"title\\\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"3\\\" id=\\\"subtab-AdminParentOrders\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/orders/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-shopping_basket\\\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-3\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"4\\\" id=\\\"subtab-AdminOrders\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/orders/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"5\\\" id=\\\"subtab-AdminInvoices\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/orders/invoices/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"6\\\" id=\\\"subtab-AdminSlip\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/orders/credit-slips/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"7\\\" id=\\\"subtab-AdminDeliverySlip\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/orders/delivery-slips/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"8\\\" id=\\\"subtab-AdminCarts\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarts&amp;token=fdee58a6027a54df0fa7eb436f21c015\\\" class=\\\"link\\\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"9\\\" id=\\\"subtab-AdminCatalog\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/catalog/products?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-store\\\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-9\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"10\\\" id=\\\"subtab-AdminProducts\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/catalog/products?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"11\\\" id=\\\"subtab-AdminCategories\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/catalog/categories?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"12\\\" id=\\\"subtab-AdminTracking\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/catalog/monitoring/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"13\\\" id=\\\"subtab-AdminParentAttributesGroups\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminAttributesGroups&amp;token=6e8419d2553c2f7c1539fc2411647cb0\\\" class=\\\"link\\\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"16\\\" id=\\\"subtab-AdminParentManufacturers\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/catalog/brands/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"19\\\" id=\\\"subtab-AdminAttachments\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/attachments/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"20\\\" id=\\\"subtab-AdminParentCartRules\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCartRules&amp;token=df9f9d7af78eec8d320b458d75183f76\\\" class=\\\"link\\\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"23\\\" id=\\\"subtab-AdminStockManagement\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/stocks/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"24\\\" id=\\\"subtab-AdminParentCustomer\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/customers/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-account_circle\\\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-24\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"25\\\" id=\\\"subtab-AdminCustomers\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/customers/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"26\\\" id=\\\"subtab-AdminAddresses\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/addresses/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"28\\\" id=\\\"subtab-AdminParentCustomerThreads\\\">
                    <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCustomerThreads&amp;token=d120f79b39d74cc178c2adeceeaa06b7\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-chat\\\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-28\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"29\\\" id=\\\"subtab-AdminCustomerThreads\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCustomerThreads&amp;token=d120f79b39d74cc178c2adeceeaa06b7\\\" class=\\\"link\\\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"30\\\" id=\\\"subtab-AdminOrderMessage\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/sell/customer-service/order-messages/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"31\\\" id=\\\"subtab-AdminReturn\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminReturn&amp;token=ae11b7bb2bda8a8c6e1d5005e9c76b70\\\" class=\\\"link\\\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"32\\\" id=\\\"subtab-AdminStats\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/modules/metrics/legacy/stats?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-assessment\\\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-32\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"144\\\" id=\\\"subtab-AdminMetricsLegacyStatsController\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/modules/metrics/legacy/stats?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"145\\\" id=\\\"subtab-AdminMetricsController\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/modules/metrics?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\\\"category-title\\\" data-submenu=\\\"42\\\" id=\\\"tab-IMPROVE\\\">
                <span class=\\\"title\\\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"43\\\" id=\\\"subtab-AdminParentModulesSf\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/modules/manage?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-extension\\\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-43\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"44\\\" id=\\\"subtab-AdminModulesSf\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/modules/manage?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Gestor de módulo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"48\\\" id=\\\"subtab-AdminParentModulesCatalog\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/modules/addons/modules/catalog?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Catálogo de Módulos
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"52\\\" id=\\\"subtab-AdminParentThemes\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/design/themes/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-desktop_mac\\\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-52\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"130\\\" id=\\\"subtab-AdminThemesParent\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/design/themes/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Tema y logotipo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"140\\\" id=\\\"subtab-AdminPsMboTheme\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/modules/addons/themes/catalog?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"55\\\" id=\\\"subtab-AdminParentMailTheme\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/design/mail_theme/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"57\\\" id=\\\"subtab-AdminCmsContent\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/design/cms-pages/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"58\\\" id=\\\"subtab-AdminModulesPositions\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/design/modules/positions/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"59\\\" id=\\\"subtab-AdminImages\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminImages&amp;token=25e2a32e1b764cf4b6adc2c91ae186c5\\\" class=\\\"link\\\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"129\\\" id=\\\"subtab-AdminLinkWidget\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/modules/link-widget/list?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"60\\\" id=\\\"subtab-AdminParentShipping\\\">
                    <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarriers&amp;token=e3c19a5a74139c5e42d9a12fca534f96\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-local_shipping\\\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-60\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"61\\\" id=\\\"subtab-AdminCarriers\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminCarriers&amp;token=e3c19a5a74139c5e42d9a12fca534f96\\\" class=\\\"link\\\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"62\\\" id=\\\"subtab-AdminShipping\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/shipping/preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"63\\\" id=\\\"subtab-AdminParentPayment\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/payment/payment_methods?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-payment\\\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-63\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"64\\\" id=\\\"subtab-AdminPayment\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/payment/payment_methods?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"65\\\" id=\\\"subtab-AdminPaymentPreferences\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/payment/preferences?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"66\\\" id=\\\"subtab-AdminInternational\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/international/localization/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-language\\\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-66\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"67\\\" id=\\\"subtab-AdminParentLocalization\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/international/localization/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"72\\\" id=\\\"subtab-AdminParentCountries\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/international/zones/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"76\\\" id=\\\"subtab-AdminParentTaxes\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/international/taxes/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"79\\\" id=\\\"subtab-AdminTranslations\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/improve/international/translations/settings?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"146\\\" id=\\\"subtab-Marketing\\\">
                    <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminPsfacebookModule&amp;token=ee032c18a907736d658d77f60ac8b3fd\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-campaign\\\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-146\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"147\\\" id=\\\"subtab-AdminPsfacebookModule\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminPsfacebookModule&amp;token=ee032c18a907736d658d77f60ac8b3fd\\\" class=\\\"link\\\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"149\\\" id=\\\"subtab-AdminPsxMktgWithGoogleModule\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fc3d175286a44a14b41601e86e0ac6e8\\\" class=\\\"link\\\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\\\"category-title link-active\\\" data-submenu=\\\"80\\\" id=\\\"tab-CONFIGURE\\\">
                <span class=\\\"title\\\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\\\"link-levelone has_submenu\\\" data-submenu=\\\"81\\\" id=\\\"subtab-ShopParameters\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/shop/preferences/preferences?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-settings\\\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-81\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"82\\\" id=\\\"subtab-AdminParentPreferences\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/shop/preferences/preferences?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"85\\\" id=\\\"subtab-AdminParentOrderPreferences\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/shop/order-preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Configuración de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"88\\\" id=\\\"subtab-AdminPPreferences\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/shop/product-preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"89\\\" id=\\\"subtab-AdminParentCustomerPreferences\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/shop/customer-preferences/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Ajustes sobre clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"93\\\" id=\\\"subtab-AdminParentStores\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/shop/contacts/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"96\\\" id=\\\"subtab-AdminParentMeta\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/shop/seo-urls/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"100\\\" id=\\\"subtab-AdminParentSearchConf\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminSearchConf&amp;token=e2275d4445b6f49a7d6a166830d5aba6\\\" class=\\\"link\\\"> Buscar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"134\\\" id=\\\"subtab-AdminGamification\\\">
                                <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminGamification&amp;token=2a8b6d5245325773ddfd4d835932a9e5\\\" class=\\\"link\\\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\\\"link-levelone has_submenu link-active open ul-open\\\" data-submenu=\\\"103\\\" id=\\\"subtab-AdminAdvancedParameters\\\">
                    <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/system-information/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\">
                      <i class=\\\"material-icons mi-settings_applications\\\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\\\"material-icons sub-tabs-arrow\\\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\\\"collapse-103\\\" class=\\\"submenu panel-collapse\\\">
                                                      
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"104\\\" id=\\\"subtab-AdminInformation\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/system-information/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo link-active\\\" data-submenu=\\\"105\\\" id=\\\"subtab-AdminPerformance\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"106\\\" id=\\\"subtab-AdminAdminPreferences\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/administration/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"107\\\" id=\\\"subtab-AdminEmails\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/emails/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Dirección de correo electrónico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"108\\\" id=\\\"subtab-AdminImport\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/import/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"109\\\" id=\\\"subtab-AdminParentEmployees\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/employees/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"113\\\" id=\\\"subtab-AdminParentRequestSql\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/sql-requests/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"116\\\" id=\\\"subtab-AdminLogs\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/logs/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"117\\\" id=\\\"subtab-AdminWebservice\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/webservice-keys/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\\\"link-leveltwo\\\" data-submenu=\\\"120\\\" id=\\\"subtab-AdminFeatureFlag\\\">
                                <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/feature-flags/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" class=\\\"link\\\"> Características experimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\\\"onboarding-navbar bootstrap\\\">
  <div class=\\\"row text\\\">
    <div class=\\\"col-md-8\\\">
      ¡Lanza tu tienda!
    </div>
    <div class=\\\"col-md-4 text-right text-md-right\\\">0%</div>
  </div>
  <div class=\\\"progress\\\">
    <div class=\\\"bar\\\" role=\\\"progressbar\\\" style=\\\"width:0%;\\\"></div>
  </div>
  <div>
    <button class=\\\"btn btn-main btn-sm onboarding-button-resume\\\">Resumen</button>
  </div>
  <div>
    <a class=\\\"btn -small btn-main btn-sm onboarding-button-stop\\\">Detener módulo Primeros pasos</a>
  </div>
</div>

</nav>


<div class=\\\"header-toolbar d-print-none\\\">
    
  <div class=\\\"container-fluid\\\">

    
      <nav aria-label=\\\"Breadcrumb\\\">
        <ol class=\\\"breadcrumb\\\">
                      <li class=\\\"breadcrumb-item\\\">Parámetros Avanzados</li>
          
                      <li class=\\\"breadcrumb-item active\\\">
              <a href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\" aria-current=\\\"page\\\">Rendimiento</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\\\"title-row\\\">
      
          <h1 class=\\\"title\\\">
            Rendimiento          </h1>
      

      
        <div class=\\\"toolbar-icons\\\">
          <div class=\\\"wrapper\\\">
            
                                                          <a
                  class=\\\"btn btn-primary pointer\\\"                  id=\\\"page-header-desc-configuration-clear_cache\\\"
                  href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/clear-cache?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\"                  title=\\\"Borrar la caché\\\"                >
                  <i class=\\\"material-icons\\\">delete</i>                  Borrar la caché
                </a>
                                      
            
                              <a class=\\\"btn btn-outline-secondary btn-help btn-sidebar\\\" href=\\\"#\\\"
                   title=\\\"Ayuda\\\"
                   data-toggle=\\\"sidebar\\\"
                   data-target=\\\"#right-sidebar\\\"
                   data-url=\\\"/prestashop/admin576auqsvk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.5%2526country%253Des/Ayuda?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\"
                   id=\\\"product_form_open_help\\\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\\\"btn-floating\\\">
    <button class=\\\"btn btn-primary collapsed\\\" data-toggle=\\\"collapse\\\" data-target=\\\".btn-floating-container\\\" aria-expanded=\\\"false\\\">
      <i class=\\\"material-icons\\\">add</i>
    </button>
    <div class=\\\"btn-floating-container collapse\\\">
      <div class=\\\"btn-floating-menu\\\">
        
                              <a
              class=\\\"btn btn-floating-item  pointer\\\"              id=\\\"page-header-desc-floating-configuration-clear_cache\\\"
              href=\\\"/prestashop/admin576auqsvk/index.php/configure/advanced/performance/clear-cache?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\"              title=\\\"Borrar la caché\\\"            >
              Borrar la caché
              <i class=\\\"material-icons\\\">delete</i>            </a>
                  
                              <a class=\\\"btn btn-floating-item btn-help btn-sidebar\\\" href=\\\"#\\\"
               title=\\\"Ayuda\\\"
               data-toggle=\\\"sidebar\\\"
               data-target=\\\"#right-sidebar\\\"
               data-url=\\\"/prestashop/admin576auqsvk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.5%2526country%253Des/Ayuda?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\\\WebImpacto\\\\Xampp\\\\htdocs\\\\prestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Módulos y Servicios recomendados\\',
        \\'Close\\': \\'Cerrar\\',
      },
      recommendedModulesUrl: \\'/prestashop/admin576auqsvk/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\\\WebImpacto\\\\Xampp\\\\htdocs\\\\prestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\\\"main-div\\\">
          
      <div class=\\\"content-div  \\\">

        
<div class=\\\"onboarding-advancement\\\" style=\\\"display: none\\\">
  <div class=\\\"advancement-groups\\\">
          <div class=\\\"group group-0\\\" style=\\\"width: 9.0909090909091%;\\\">
        <div class=\\\"advancement\\\" style=\\\"width: 0%;\\\"></div>
        <div class=\\\"id\\\">1</div>
      </div>
          <div class=\\\"group group-1\\\" style=\\\"width: 45.454545454545%;\\\">
        <div class=\\\"advancement\\\" style=\\\"width: 0%;\\\"></div>
        <div class=\\\"id\\\">2</div>
      </div>
          <div class=\\\"group group-2\\\" style=\\\"width: 18.181818181818%;\\\">
        <div class=\\\"advancement\\\" style=\\\"width: 0%;\\\"></div>
        <div class=\\\"id\\\">3</div>
      </div>
          <div class=\\\"group group-3\\\" style=\\\"width: 9.0909090909091%;\\\">
        <div class=\\\"advancement\\\" style=\\\"width: 0%;\\\"></div>
        <div class=\\\"id\\\">4</div>
      </div>
          <div class=\\\"group group-4\\\" style=\\\"width: 18.181818181818%;\\\">
        <div class=\\\"advancement\\\" style=\\\"width: 0%;\\\"></div>
        <div class=\\\"id\\\">5</div>
      </div>
      </div>
  <div class=\\\"col-md-8\\\">
    <h4 class=\\\"group-title\\\"></h4>
    <div class=\\\"step-title step-title-1\\\"></div>
    <div class=\\\"step-title step-title-2\\\"></div>
  </div>
  <button class=\\\"btn btn-primary onboarding-button-next\\\">Continuar</button>
  <a class=\\\"onboarding-button-shut-down\\\">Saltar este tutorial</a>
</div>

<script type=\\\"text/javascript\\\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\\\"groups\\\":[{\\\"name\\\":\\\"dashboard\\\",\\\"steps\\\":[{\\\"type\\\":\\\"popup\\\",\\\"text\\\":\\\"<div class=\\\\\\\"onboarding-welcome\\\\\\\">\\\\n  <i class=\\\\\\\"material-icons onboarding-button-shut-down\\\\\\\">close<\\\\/i>\\\\n  <p class=\\\\\\\"welcome\\\\\\\">\\\\u00a1Bienvenido a su tienda!<\\\\/p>\\\\n  <div class=\\\\\\\"content\\\\\\\">\\\\n    <p>\\\\u00a1Hola! Me llamo Presto y estoy aqu\\\\u00ed para ense\\\\u00f1arle todo esto.<\\\\/p>\\\\n    <p>Descubrir\\\\u00e1 algunos pasos esenciales antes de poder lanzar su tienda:\\\\n    Cree su primer producto, personalice su tienda, configure env\\\\u00edos y pagos...<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\\\"started\\\\\\\">\\\\n    <p>\\\\u00a1Empecemos!<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\\\"buttons\\\\\\\">\\\\n    <button class=\\\\\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\\\\\">M\\\\u00e1s tarde<\\\\/button>\\\\n    <button class=\\\\\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\\\\\">Empezar<\\\\/button>\\\\n  <\\\\/div>\\\\n<\\\\/div>\\\\n\\\",\\\"options\\\":[\\\"savepoint\\\",\\\"hideFooter\\\"],\\\"page\\\":\\\"https:\\\\/\\\\/localhost\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php?controller=AdminDashboard&token=838a964aa4436b64776f1bc7918b094f\\\"}]},{\\\"name\\\":\\\"product\\\",\\\"title\\\":\\\"Vamos a crear su primer producto\\\",\\\"subtitle\\\":{\\\"1\\\":\\\"\\\\u00bfQu\\\\u00e9 quiere contar sobre el producto? Piense en lo que sus clientes quieren saber.\\\",\\\"2\\\":\\\"A\\\\u00f1ada informaci\\\\u00f3n clara y atractiva. No se preocupe, podr\\\\u00e1 editarlo m\\\\u00e1s tarde :)\\\"},\\\"steps\\\":[{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"Dele a su producto un nombre atractivo.\\\",\\\"options\\\":[\\\"savepoint\\\"],\\\"page\\\":[\\\"\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/new?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\",\\\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\\\"],\\\"selector\\\":\\\"#form_step1_name_1\\\",\\\"position\\\":\\\"right\\\"},{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"Complete los detalles esenciales en esta pesta\\\\u00f1a. Las otras pesta\\\\u00f1as son para informaci\\\\u00f3n m\\\\u00e1s avanzada.\\\",\\\"page\\\":\\\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\\\",\\\"selector\\\":\\\"#tab_step1\\\",\\\"position\\\":\\\"right\\\"},{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"\\\\u00a1A\\\\u00f1ada una o m\\\\u00e1s im\\\\u00e1genes para que su producto atraiga la atenci\\\\u00f3n!\\\",\\\"page\\\":\\\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\\\",\\\"selector\\\":\\\"#product-images-dropzone\\\",\\\"position\\\":\\\"right\\\"},{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"\\\\u00bfA qu\\\\u00e9 precio quiere venderlo?\\\",\\\"page\\\":\\\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\\\",\\\"selector\\\":\\\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\\\",\\\"position\\\":\\\"left\\\",\\\"action\\\":{\\\"selector\\\":\\\"#product_form_save_go_to_catalog_btn\\\",\\\"action\\\":\\\"click\\\"}},{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"\\\\u00a1Genial! Acaba de crear su primer producto. Tiene buena pinta, \\\\u00bfverdad?\\\",\\\"page\\\":\\\"index.php\\\\/sell\\\\/catalog\\\\/products\\\",\\\"selector\\\":\\\"#product_catalog_list table tr:first-child td:nth-child(3)\\\",\\\"position\\\":\\\"left\\\"}]},{\\\"name\\\":\\\"theme\\\",\\\"title\\\":\\\"Dele a su tienda su propia identidad\\\",\\\"subtitle\\\":{\\\"1\\\":\\\"\\\\u00bfQu\\\\u00e9 aspecto quiere para su tienda? \\\\u00bfQu\\\\u00e9 la hace especial?\\\",\\\"2\\\":\\\"Personalice su tema o escoja el mejor dise\\\\u00f1o de nuestro cat\\\\u00e1logo de temas.\\\"},\\\"steps\\\":[{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"\\\\u00a1Una buena manera de empezar es a\\\\u00f1adir su propio logotipo aqu\\\\u00ed!\\\",\\\"options\\\":[\\\"savepoint\\\"],\\\"page\\\":\\\"\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php\\\\/improve\\\\/design\\\\/themes\\\\/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\",\\\"selector\\\":\\\"#form_shop_logos_header_logo, #form_header_logo\\\",\\\"position\\\":\\\"right\\\"},{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"Si quiere algo realmente especial, \\\\u00a1eche un vistazo al cat\\\\u00e1logo de temas!\\\",\\\"page\\\":\\\"\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php\\\\/improve\\\\/design\\\\/themes-catalog\\\\/?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\",\\\"selector\\\":\\\".addons-theme-one:first-child\\\",\\\"position\\\":\\\"right\\\"}]},{\\\"name\\\":\\\"payment\\\",\\\"title\\\":\\\"Prepara tu tienda para recibir pagos\\\",\\\"subtitle\\\":{\\\"1\\\":\\\"\\\\u00bfC\\\\u00f3mo quiere que le paguen sus clientes?\\\"},\\\"steps\\\":[{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"Estos m\\\\u00e9todos de pago ya est\\\\u00e1n disponibles para tus clientes.\\\",\\\"options\\\":[\\\"savepoint\\\"],\\\"page\\\":\\\"\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php\\\\/improve\\\\/payment\\\\/payment_methods?_token=pXfyvv0azIB_ZER_yCDyIkK0VJH6sGOfq30mJzsMHbU\\\",\\\"selector\\\":\\\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\\\",\\\"position\\\":\\\"right\\\"}]},{\\\"name\\\":\\\"shipping\\\",\\\"title\\\":\\\"Elija sus soluciones de env\\\\u00edo\\\",\\\"subtitle\\\":{\\\"1\\\":\\\"\\\\u00bfC\\\\u00f3mo quiere enviar sus productos?\\\"},\\\"steps\\\":[{\\\"type\\\":\\\"tooltip\\\",\\\"text\\\":\\\"Aqu\\\\u00ed est\\\\u00e1n los m\\\\u00e9todos de env\\\\u00edo disponibles en su tienda ahora mismo.\\\",\\\"options\\\":[\\\"savepoint\\\"],\\\"page\\\":\\\"https:\\\\/\\\\/localhost\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php?controller=AdminCarriers&token=e3c19a5a74139c5e42d9a12fca534f96\\\",\\\"selector\\\":\\\"#table-carrier tr:eq(2) td:eq(3)\\\",\\\"position\\\":\\\"right\\\"},{\\\"type\\\":\\\"popup\\\",\\\"text\\\":\\\"<div id=\\\\\\\"onboarding-welcome\\\\\\\" class=\\\\\\\"modal-body\\\\\\\">\\\\n    <div class=\\\\\\\"col-12\\\\\\\">\\\\n        <button class=\\\\\\\"onboarding-button-next pull-right close\\\\\\\" type=\\\\\\\"button\\\\\\\">&times;<\\\\/button>\\\\n        <h2 class=\\\\\\\"text-center text-md-center\\\\\\\">\\\\u00a1Es su turno!<\\\\/h2>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\\\"col-12\\\\\\\">\\\\n        <p class=\\\\\\\"text-center text-md-center\\\\\\\">\\\\n          Ha visto lo esencial, pero hay mucho m\\\\u00e1s por explorar.<br \\\\/>\\\\n          Algunos recursos pueden ayudarle a profundizar aun m\\\\u00e1s:\\\\n        <\\\\/p>\\\\n        <div class=\\\\\\\"container-fluid\\\\\\\">\\\\n          <div class=\\\\\\\"row\\\\\\\">\\\\n            <div class=\\\\\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\\\\\">\\\\n              <a class=\\\\\\\"final-link\\\\\\\" href=\\\\\\\"http:\\\\/\\\\/doc.prestashop.com\\\\/display\\\\/PS17\\\\/Getting+Started\\\\\\\" target=\\\\\\\"_blank\\\\\\\">\\\\n                <div class=\\\\\\\"starter-guide\\\\\\\"><\\\\/div>\\\\n                <span class=\\\\\\\"link\\\\\\\">Gu\\\\u00eda de principiante<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\\\"col-md-6 text-center text-md-center link-container\\\\\\\">\\\\n              <a class=\\\\\\\"final-link\\\\\\\" href=\\\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/forums\\\\/\\\\\\\" target=\\\\\\\"_blank\\\\\\\">\\\\n                <div class=\\\\\\\"forum\\\\\\\"><\\\\/div>\\\\n                <span class=\\\\\\\"link\\\\\\\">Foro<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n          <div class=\\\\\\\"row\\\\\\\">\\\\n            <div class=\\\\\\\"col-md-6 text-center text-md-center link-container\\\\\\\">\\\\n              <a class=\\\\\\\"final-link\\\\\\\" href=\\\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/en\\\\/training-prestashop\\\\\\\" target=\\\\\\\"_blank\\\\\\\">\\\\n                <div class=\\\\\\\"training\\\\\\\"><\\\\/div>\\\\n                <span class=\\\\\\\"link\\\\\\\">Formaci\\\\u00f3n<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\\\"col-md-6 text-center text-md-center link-container\\\\\\\">\\\\n              <a class=\\\\\\\"final-link\\\\\\\" href=\\\\\\\"https:\\\\/\\\\/www.youtube.com\\\\/user\\\\/prestashop\\\\\\\" target=\\\\\\\"_blank\\\\\\\">\\\\n                <div class=\\\\\\\"video-tutorial\\\\\\\"><\\\\/div>\\\\n                <span class=\\\\\\\"link\\\\\\\">Tutorial en v\\\\u00eddeo<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\\\"modal-footer\\\\\\\">\\\\n        <div class=\\\\\\\"col-12\\\\\\\">\\\\n            <div class=\\\\\\\"text-center text-md-center\\\\\\\">\\\\n                <button class=\\\\\\\"btn btn-primary onboarding-button-next\\\\\\\">Estoy listo<\\\\/button>\\\\n            <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n<\\\\/div>\\\\n\\\",\\\"options\\\":[\\\"savepoint\\\",\\\"hideFooter\\\"],\\\"page\\\":\\\"https:\\\\/\\\\/localhost\\\\/prestashop\\\\/admin576auqsvk\\\\/index.php?controller=AdminDashboard&token=838a964aa4436b64776f1bc7918b094f\\\"}]}]}, 1, \\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminWelcome&token=06cc2bcfd1c4d0a2e5a9bc81131d9920\\\", baseAdminDir);

          onBoarding.addTemplate(\\'lost\\', \\'<div class=\\\"onboarding onboarding-popup bootstrap\\\">  <div class=\\\"content\\\">    <p>¡Eh! ¿Se ha perdido?</p>    <p>Para continuar, haga clic aquí:</p>    <div class=\\\"text-center\\\">      <button class=\\\"btn btn-primary onboarding-button-goto-current\\\">Continuar</button>    </div>    <p>Si quiere detener el tutorial, haga clic aquí:</p>    <div class=\\\"text-center\\\">      <button class=\\\"btn btn-alert onboarding-button-stop\\\">Salir del tutorial de bienvenida</button>    </div>  </div></div>\\');
          onBoarding.addTemplate(\\'popup\\', \\'<div class=\\\"onboarding-popup bootstrap\\\">  <div class=\\\"content\\\"></div></div>\\');
          onBoarding.addTemplate(\\'tooltip\\', \\'<div class=\\\"onboarding-tooltip\\\">  <div class=\\\"content\\\"></div>  <div class=\\\"onboarding-tooltipsteps\\\">    <div class=\\\"total\\\">Paso <span class=\\\"count\\\">1/5</span></div>    <div class=\\\"bulls\\\">    </div>  </div>  <button class=\\\"btn btn-primary btn-xs onboarding-button-next\\\">Siguiente</button></div>\\');
    
    onBoarding.showCurrentStep();

    var body = \$(\\\"body\\\");

    body.delegate(\\\".onboarding-button-next\\\", \\\"click\\\", function(){
      if (\$(this).is(\\'.with-spinner\\')) {
        if (!\$(this).is(\\'.animated\\')) {
          \$(this).addClass(\\'animated\\');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\\\".onboarding-button-shut-down\\\", \\\"click\\\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\\\".onboarding-button-resume\\\", \\\"click\\\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\\\".onboarding-button-goto-current\\\", \\\"click\\\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\\\".onboarding-button-stop\\\", \\\"click\\\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\\\"row \\\">
          <div class=\\\"col-sm-12\\\">
            <div id=\\\"ajax_confirmation\\\" class=\\\"alert alert-success\\\" style=\\\"display: none;\\\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\\\"non-responsive\\\" class=\\\"js-non-responsive\\\">
  <h1>¡Oh no!</h1>
  <p class=\\\"mt-3\\\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\\\"mt-2\\\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\\\"mt-2\\\">
    Gracias.
  </p>
  <a href=\\\"https://localhost/prestashop/admin576auqsvk/index.php?controller=AdminDashboard&amp;token=838a964aa4436b64776f1bc7918b094f\\\" class=\\\"btn btn-primary py-1 mt-3\\\">
    <i class=\\\"material-icons\\\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\\\"mobile-layer\\\"></div>

      <div id=\\\"footer\\\" class=\\\"bootstrap\\\">
    
</div>
  

      <div class=\\\"bootstrap\\\">
      <div class=\\\"modal fade\\\" id=\\\"modal_addons_connect\\\" tabindex=\\\"-1\\\">
\t<div class=\\\"modal-dialog modal-md\\\">
\t\t<div class=\\\"modal-content\\\">
\t\t\t\t\t\t<div class=\\\"modal-header\\\">
\t\t\t\t<button type=\\\"button\\\" class=\\\"close\\\" data-dismiss=\\\"modal\\\">&times;</button>
\t\t\t\t<h4 class=\\\"modal-title\\\"><i class=\\\"icon-puzzle-piece\\\"></i> <a target=\\\"_blank\\\" href=\\\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\\\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\\\"modal-body\\\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\\\"addons_login_form\\\" method=\\\"post\\\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\\\"https://addons.prestashop.com/es/login?email=raulmartinluengo%40hotmail.com&amp;firstname=Raul&amp;lastname=Martin+Luengo&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\\\"><img class=\\\"img-responsive center-block\\\" src=\\\"/prestashop/admin576auqsvk/themes/default/img/prestashop-addons-logo.png\\\" alt=\\\"Logo PrestaShop Addons\\\"/></a>
\t\t\t\t\t<h3 class=\\\"text-center\\\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\\\"row\\\">
\t\t\t\t\t<div class=\\\"col-md-6\\\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\\\"col-md-6\\\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\\\"form-group\\\">
\t\t\t\t\t\t\t<div class=\\\"input-group\\\">
\t\t\t\t\t\t\t\t<div class=\\\"input-group-prepend\\\">
\t\t\t\t\t\t\t\t\t<span class=\\\"input-group-text\\\"><i class=\\\"icon-user\\\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\\\"username_addons\\\" name=\\\"username_addons\\\" type=\\\"text\\\" value=\\\"\\\" autocomplete=\\\"off\\\" class=\\\"form-control ac_input\\\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\\\"form-group\\\">
\t\t\t\t\t\t\t<div class=\\\"input-group\\\">
\t\t\t\t\t\t\t\t<div class=\\\"input-group-prepend\\\">
\t\t\t\t\t\t\t\t\t<span class=\\\"input-group-text\\\"><i class=\\\"icon-key\\\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\\\"password_addons\\\" name=\\\"password_addons\\\" type=\\\"password\\\" value=\\\"\\\" autocomplete=\\\"off\\\" class=\\\"form-control ac_input\\\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\\\"btn btn-link float-right _blank\\\" href=\\\"//addons.prestashop.com/es/forgot-your-password\\\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\\\"row row-padding-top\\\">
\t\t\t\t\t<div class=\\\"col-md-6\\\">
\t\t\t\t\t\t<div class=\\\"form-group\\\">
\t\t\t\t\t\t\t<a class=\\\"btn btn-default btn-block btn-lg _blank\\\" href=\\\"https://addons.prestashop.com/es/login?email=raulmartinluengo%40hotmail.com&amp;firstname=Raul&amp;lastname=Martin+Luengo&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\\\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\\\"icon-external-link\\\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\\\"col-md-6\\\">
\t\t\t\t\t\t<div class=\\\"form-group\\\">
\t\t\t\t\t\t\t<button id=\\\"addons_login_button\\\" class=\\\"btn btn-primary btn-block btn-lg\\\" type=\\\"submit\\\">
\t\t\t\t\t\t\t\t<i class=\\\"icon-unlock\\\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\\\"addons_loading\\\" class=\\\"help-block\\\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__77409025e9f367108a2f3b148d7b6b89e2f8c3eeb031e82378ab16cb7df77c42", "");
    }
}
