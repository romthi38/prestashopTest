<?php

/* __string_template__cff933af6e944e390658a15baa17aef34b3ee33d1f6bd7d66977ab1e5e2c5204 */
class __TwigTemplate_a422d4cda738a7967d306f67ea170d4132ed90b6d23844ba57c3df04faea761a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/my-site/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/my-site/prestashop/img/app_icon.png\" />

<title>Produits • miw_thibault</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.0.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '6c1e26bc83659bdac2dcceeda959a5c5';
    var token_admin_orders = 'a01a0eea4b8c80c801bd9a47f28316f4';
    var token_admin_customers = '5c1b419f503b5c7882d635db1ebc5807';
    var token_admin_customer_threads = 'ca2c19d30845dc6c76abd56250c49897';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '7d162521e2085b9290b530c4feebcc22';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/my-site/prestashop/admin324wehdw1/index.php/module/catalog/recommended?_token=XI6xmRzMOhdM0UrGhSScYjagfYxaMsohf4snMLkuwqU';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/my-site/prestashop/admin324wehdw1/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/my-site/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/my-site/prestashop/admin324wehdw1/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/my-site\\/prestashop\\/admin324wehdw1\\/\";
var baseDir = \"\\/my-site\\/prestashop\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/admin324wehdw1/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/js/admin.js?v=1.7.0.3\"></script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/js/tools.js?v=1.7.0.3\"></script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/admin324wehdw1/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/my-site/prestashop/admin324wehdw1/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 69
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminDashboard&amp;token=3b923d61a46a8f77f109a4e5d52ab911\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminOrders&amp;token=a01a0eea4b8c80c801bd9a47f28316f4\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3283ab2fbe20bb3c7be02a941f031541\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php/product/new?token=16ee30aafe2d02c501589ed87428a020\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCategories&amp;addcategory&amp;token=eb48f25bad7e0e0f866901759fa29321\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"184\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/product/form/1\"
      data-post-link=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminQuickAccesses&token=7207191020a771de16887e72504a450d\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Ajouter cette page à l'Accès Rapide
    </a>
    <a class=\"dropdown-item\" href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminQuickAccesses&token=7207191020a771de16887e72504a450d\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/my-site/prestashop/admin324wehdw1/index.php?controller=AdminSearch&amp;token=4c287382cf0a3cc1a43da415d14d5f62\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/thibault.romanin%40gmail.com.jpg\" /><br>
      Thibault Romanin
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminEmployees&amp;token=7d162521e2085b9290b530c4feebcc22&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminLogin&amp;token=5aca859b801b0abc6d5e395bb83f899d&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-md-right\"><div class=\"notification-center dropdown\">
  <div class=\"notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous regardé vos <strong><a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCarts&token=d0ce886ff904e4d64ed2c8832cf6d084&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br>
              Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous fait une campagne d'acquisition par e-mail récemment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
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
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - inscrit <strong>_date_add_</strong>
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
        <div class=\"component pull-md-right\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/my-site/prestashop/\" target= \"_blank\">miw_thibault</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminDashboard&amp;token=3b923d61a46a8f77f109a4e5d52ab911\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de Bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminOrders&amp;token=a01a0eea4b8c80c801bd9a47f28316f4\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Commandes</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminOrders&amp;token=a01a0eea4b8c80c801bd9a47f28316f4\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminInvoices&amp;token=4cf011c6937a2dc8d0ba172df764de25\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminSlip&amp;token=acb1f4bfa74397c8650e1758633ab64c\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminDeliverySlip&amp;token=e53bae63c434f0fab6c5df5b920ec264\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCarts&amp;token=d0ce886ff904e4d64ed2c8832cf6d084\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/my-site/prestashop/admin324wehdw1/index.php/product/catalog?_token=XI6xmRzMOhdM0UrGhSScYjagfYxaMsohf4snMLkuwqU\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Catalogue</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/my-site/prestashop/admin324wehdw1/index.php/product/catalog?_token=XI6xmRzMOhdM0UrGhSScYjagfYxaMsohf4snMLkuwqU\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCategories&amp;token=eb48f25bad7e0e0f866901759fa29321\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminTracking&amp;token=ef1205d49c45c5eb8323e6175d9868bc\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminAttributesGroups&amp;token=b092c42a86fe91decf45386064daf613\" class=\"link\"> Attributs &amp; Caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminManufacturers&amp;token=fa55b97740d47dc94a891b678d27e5d1\" class=\"link\"> Marques &amp; Fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminAttachments&amp;token=4ad7ad2f8e8547434e0cb2939a275d1a\" class=\"link\"> Documents joints
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCartRules&amp;token=3283ab2fbe20bb3c7be02a941f031541\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCustomers&amp;token=5c1b419f503b5c7882d635db1ebc5807\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Clients</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCustomers&amp;token=5c1b419f503b5c7882d635db1ebc5807\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminAddresses&amp;token=5ceb5cb62e4e9cd517e8303a16661daf\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCustomerThreads&amp;token=ca2c19d30845dc6c76abd56250c49897\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Service client</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCustomerThreads&amp;token=ca2c19d30845dc6c76abd56250c49897\" class=\"link\"> Service client
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminOrderMessage&amp;token=97f5224ef82cf31d7a405b164bf186e5\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminReturn&amp;token=c903ebefddfec5fc8474cd1e88df7435\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminStats&amp;token=769ad4ce8762087f378e28b216f4225b\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Statistiques</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"41\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/my-site/prestashop/admin324wehdw1/index.php/module/catalog?_token=XI6xmRzMOhdM0UrGhSScYjagfYxaMsohf4snMLkuwqU\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/my-site/prestashop/admin324wehdw1/index.php/module/catalog?_token=XI6xmRzMOhdM0UrGhSScYjagfYxaMsohf4snMLkuwqU\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminAddonsCatalog&amp;token=46bb14a4acbb4aeb89fa85c8e6cc4e4c\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminThemes&amp;token=0bb0d09f372e231df5af6628931cb8f5\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Apparence</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminThemes&amp;token=0bb0d09f372e231df5af6628931cb8f5\" class=\"link\"> Thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminThemesCatalog&amp;token=707e580eef86be37eca0e4350c0f992e\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCmsContent&amp;token=39ece40f11f526c303fa53176c65178d\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminModulesPositions&amp;token=6ff1903dbfb5fc2736b4b9711a319fc2\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminImages&amp;token=4b36cdbf4a5418849e73dbc3ab57a67e\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminLinkWidget&amp;token=8f31051d8f934c7903ad7119bd5accde\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCarriers&amp;token=ffbe41455843629da04303e1b2ffa8c2\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Transport</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCarriers&amp;token=ffbe41455843629da04303e1b2ffa8c2\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminShipping&amp;token=f5ffc38a852dfeb62fe70a1997c7f7d0\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminPayment&amp;token=e0f70702772005a6d0f05fbea1b4efd7\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Paiement</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminPayment&amp;token=e0f70702772005a6d0f05fbea1b4efd7\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminPaymentPreferences&amp;token=5c57d6a6d12274c8d43713ea2c895769\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminLocalization&amp;token=8ac89589fc64c2c384aec948f66bbc2d\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminLocalization&amp;token=8ac89589fc64c2c384aec948f66bbc2d\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCountries&amp;token=5c42d89b28d9be8979025c151dbdfd0c\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminTaxes&amp;token=73ddeacab52d69c1b4fbd0456bf6398b\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminTranslations&amp;token=36326c6246034263aabacf76f83de90e\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminPreferences&amp;token=f1ec58ef4552ca028f92a065486b43ff\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Paramètres de la boutique</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminPreferences&amp;token=f1ec58ef4552ca028f92a065486b43ff\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminOrderPreferences&amp;token=183ea2f5cf624ef59d5b3a294d247077\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminPPreferences&amp;token=5a911515f68e0eb55153296c3e732ec5\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminCustomerPreferences&amp;token=dfc0349e09969bd9b235a51dfc176b0b\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminContacts&amp;token=021e93321dc04feb60d3cff99822cf1d\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminMeta&amp;token=1cf7baaab8923fb74fdd17b8d022148d\" class=\"link\"> Trafic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminSearchConf&amp;token=6207c4041496748477a2ae472ea71ea2\" class=\"link\"> Recherche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminInformation&amp;token=a7ea0b046974750248ccf9e1429f0abf\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Paramètres avancés</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminInformation&amp;token=a7ea0b046974750248ccf9e1429f0abf\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminPerformance&amp;token=a80894100b9794262e815366cb941a67\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminAdminPreferences&amp;token=c946afeed859c7dea7d80c800a86e1da\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminEmails&amp;token=def6fba247fdd37548b51979e9a8ea8a\" class=\"link\"> Emails
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminImport&amp;token=f26c4484c86fe2d648bd413a87dc6e13\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminEmployees&amp;token=7d162521e2085b9290b530c4feebcc22\" class=\"link\"> Employés
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminRequestSql&amp;token=637e6913177367bb7c74bb631ad99537\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminLogs&amp;token=7463d85103d4cc7baef29607265b3d44\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/my-site/prestashop/admin324wehdw1/index.php?controller=AdminWebservice&amp;token=04612f41fba766372ce37706a8b0456f\" class=\"link\"> Service web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  

</nav>


<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar\">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 917
        $this->displayBlock('content_header', $context, $blocks);
        // line 918
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 919
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 920
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 921
        echo "
        </div>
      </div>

    </div>

  
</div>


  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 4.271s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=thibault.romanin%40gmail.com&amp;firstname=Thibault&amp;lastname=Romanin&amp;website=http%3A%2F%2Flocalhost%2Fmy-site%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/my-site/prestashop/admin324wehdw1/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=thibault.romanin%40gmail.com&amp;firstname=Thibault&amp;lastname=Romanin&amp;website=http%3A%2F%2Flocalhost%2Fmy-site%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
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
        // line 1069
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 69
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 917
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 918
    public function block_content($context, array $blocks = array())
    {
    }

    // line 919
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 920
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1069
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__cff933af6e944e390658a15baa17aef34b3ee33d1f6bd7d66977ab1e5e2c5204";
    }

    public function getDebugInfo()
    {
        return array (  1148 => 1069,  1143 => 920,  1138 => 919,  1133 => 918,  1128 => 917,  1119 => 69,  1111 => 1069,  961 => 921,  958 => 920,  955 => 919,  952 => 918,  950 => 917,  98 => 69,  28 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
