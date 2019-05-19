<?php

/* __string_template__171326399468cba61474f99bfaf6ed7249c82a5d6a755492bd3768fd1f6830f2 */
class __TwigTemplate_dd4aab79c9227ab549b6e0cc9abbc140180f6096c7d1a365e9274e9b7ca6bd49 extends Twig_Template
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
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produk • Pradiste Indonesia</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.4.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = '74da898e4c1823cb43a27dc9009bdb66';
    var token_admin_orders = '0ee5aabbc23f9041aef9ac03e97c89b9';
    var token_admin_customers = 'b229a23d2837dd36e9c3cce995a2a810';
    var token_admin_customer_threads = 'cd95e40c1b7ac1670ff76170ba7f6992';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '924a019e7daa5332c424d4ac066ca103';
    var choose_language_translate = 'Pilih bahasa';
    var default_language = '1';
    var admin_modules_link = '/admin756gqwhqa/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin756gqwhqa/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin756gqwhqa/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin756gqwhqa\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin756gqwhqa/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/admin756gqwhqa/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin756gqwhqa/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'https://pradiste.com/admin756gqwhqa/index.php?controller=AdminGamification&token=924d50765901a3a469420c73ca763c61';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-id adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminDashboard&amp;token=7bc618a71544705e1f8778398a18f455\"></a>
    <span id=\"shop_version\">1.7.4.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=48e87d070e6ba5820207dfde205ee3ac\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item\"
         href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCategories&amp;addcategory&amp;token=d334b0355561c0c66d0b6076077b1943\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item\"
         href=\"https://pradiste.com/admin756gqwhqa/index.php/module/manage?token=b0082fe3d0340d2d3b4c706ed80d7a59\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item\"
         href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminOrders&amp;token=0ee5aabbc23f9041aef9ac03e97c89b9\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item\"
         href=\"https://pradiste.com/admin756gqwhqa/index.php/product/new?token=b0082fe3d0340d2d3b4c706ed80d7a59\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item\"
         href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=38adf24dc7d76d6e83c5fc16945cd15c\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"127\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog\"
        data-post-link=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminQuickAccesses&token=6a85c3eb5bc68eabb16a8d594e0d0113\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Produk - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Tambahkan halaman ini ke QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminQuickAccesses&token=6a85c3eb5bc68eabb16a8d594e0d0113\">
      <i class=\"material-icons\">settings</i>
      Kelola akses cepat
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin756gqwhqa/index.php?controller=AdminSearch&amp;token=68ed5a743a069f464962887da0973c7d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nama produk, SKU, referensi...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nama...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor faktur\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
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

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://pradiste.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Lihat toko
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
              Pesanan<span id=\"_nb_new_orders_\"></span>
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
              Pelanggan<span id=\"_nb_new_customers_\"></span>
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
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Apakah Anda memeriksa rasio konversi baru-baru ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Sudahkah Anda mempertimbangkan penjualan di pasar?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tidak ada kabar adalah kabar baik, bukan?
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
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
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
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/vizzlearn%40gmail.com.jpg\" />
      <span>Hasan Setiawan</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminEmployees&amp;token=924a019e7daa5332c424d4ac066ca103&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Profile Anda
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminLogin&amp;token=67ca8794dfb064e2686d536a1c7996b4&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminDashboard&amp;token=7bc618a71544705e1f8778398a18f455\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Jual</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminOrders&amp;token=0ee5aabbc23f9041aef9ac03e97c89b9\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Penjualan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminOrders&amp;token=0ee5aabbc23f9041aef9ac03e97c89b9\" class=\"link\"> Penjualan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminInvoices&amp;token=86343d587608bfe2279bef5e42518c74\" class=\"link\"> Invoice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminSlip&amp;token=7f5e66354402ccdfcb2530c0cdd0456a\" class=\"link\"> Nota kredit
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminDeliverySlip&amp;token=11f6ffe3ecd96fdcc1b432b7fae281dd\" class=\"link\"> Nota pengiriman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCarts&amp;token=580e129bcf25a5975425616aaa4d7cb7\" class=\"link\"> Daftar belanja
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin756gqwhqa/index.php/product/catalog?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin756gqwhqa/index.php/product/catalog?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCategories&amp;token=d334b0355561c0c66d0b6076077b1943\" class=\"link\"> Kategori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminTracking&amp;token=9ecdcb4b0c538e0377aa93f93ee6cda2\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminAttributesGroups&amp;token=c883eca20b7767cd36eaa6f9c83b9a5a\" class=\"link\"> Atribut dan Fitur
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminManufacturers&amp;token=cfb4578b12c5074c29dab3454228249f\" class=\"link\"> Brand dan Supplier
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminAttachments&amp;token=ce0c8c1fb017d9bbb0373fe12f9dd522\" class=\"link\"> File
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCartRules&amp;token=38adf24dc7d76d6e83c5fc16945cd15c\" class=\"link\"> Diskon
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin756gqwhqa/index.php/stock/?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCustomers&amp;token=b229a23d2837dd36e9c3cce995a2a810\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Pelanggan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCustomers&amp;token=b229a23d2837dd36e9c3cce995a2a810\" class=\"link\"> Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminAddresses&amp;token=2b1b7766c62e32eaafff47a19d6fb20d\" class=\"link\"> Alamat
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCustomerThreads&amp;token=cd95e40c1b7ac1670ff76170ba7f6992\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Layanan Pelanggan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCustomerThreads&amp;token=cd95e40c1b7ac1670ff76170ba7f6992\" class=\"link\"> Layanan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminOrderMessage&amp;token=14cd818f3c598fddb057f133ed13b01c\" class=\"link\"> Pesan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminReturn&amp;token=5e967b19b579730c6de8caf977a9f13e\" class=\"link\"> Retur barang
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminStats&amp;token=48e87d070e6ba5820207dfde205ee3ac\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistik
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Peningkatan</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin756gqwhqa/index.php/module/manage?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modul
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin756gqwhqa/index.php/module/manage?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Modul &amp; Layanan
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin756gqwhqa/index.php/module/addons-store?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Katalog Modul
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminThemes&amp;token=c9dedb6b7268b9be0a7cfe376ffc34cc\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Desain
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminThemes&amp;token=c9dedb6b7268b9be0a7cfe376ffc34cc\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminThemesCatalog&amp;token=722bd5c5a4ae464e312e9204ed2529e8\" class=\"link\"> Kumpulan Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCmsContent&amp;token=5b5581b664ccf7bfb9740e1f2333af99\" class=\"link\"> Halaman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminModulesPositions&amp;token=688e16b2c3eaaf24e6404ef7f121632e\" class=\"link\"> Posisi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminImages&amp;token=5877580b58630c9860b05f8340a12079\" class=\"link\"> Pengaturan Gambar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminLinkWidget&amp;token=f398ef8045921ad95279e324b6fbe0ad\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCarriers&amp;token=4e0b032e2dfa39472e819cfc2b852f7d\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Pengiriman
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminCarriers&amp;token=4e0b032e2dfa39472e819cfc2b852f7d\" class=\"link\"> Kurir
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminShipping&amp;token=76de5a84082e8e10f4df167749e10a65\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminPayment&amp;token=dfd4a8237c8d48c001d2b9a2e529ac0a\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pembayaran
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminPayment&amp;token=dfd4a8237c8d48c001d2b9a2e529ac0a\" class=\"link\"> Cara Pembayaran
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminPaymentPreferences&amp;token=021f82d20a104800a3e095f1caf650e7\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminLocalization&amp;token=a0311b7fcc0c9ba7904c7271299cd04b\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internasional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminLocalization&amp;token=a0311b7fcc0c9ba7904c7271299cd04b\" class=\"link\"> Lokalisasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminZones&amp;token=629f875c32a6980c9ce04c458e29d136\" class=\"link\"> Lokasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminTaxes&amp;token=078640c22ae2beb2cdaf853eee2e0c5a\" class=\"link\"> Pajak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminTranslations&amp;token=fa0afc979554bc880a83e2b3fff89834\" class=\"link\"> Terjemahan
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfigurasi</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin756gqwhqa/index.php/configure/shop/preferences?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parameter Toko
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin756gqwhqa/index.php/configure/shop/preferences?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Umum
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminOrderPreferences&amp;token=011f72414407eb3098491bf4393b39a0\" class=\"link\"> Pengaturan Order
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin756gqwhqa/index.php/configure/shop/product_preferences?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin756gqwhqa/index.php/configure/shop/customer_preferences?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Pengaturan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminContacts&amp;token=8f258af70cc8616949d8472565dcfbb5\" class=\"link\"> Kontak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminMeta&amp;token=dce6d2bb692abb88722da2bb2b8df97a\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminSearchConf&amp;token=adadcbdfb4b90e585b8bffbf897f1b5d\" class=\"link\"> Cari
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminGamification&amp;token=924d50765901a3a469420c73ca763c61\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin756gqwhqa/index.php/configure/advanced/system_information?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parameter lanjutan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin756gqwhqa/index.php/configure/advanced/system_information?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Informasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin756gqwhqa/index.php/configure/advanced/performance?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Kinerja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin756gqwhqa/index.php/configure/advanced/administration?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Administrasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminEmails&amp;token=0b957cc94cc72a2414ba6b0bd2cdd3d8\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/admin756gqwhqa/index.php/configure/advanced/import?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" class=\"link\"> Impor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminEmployees&amp;token=924a019e7daa5332c424d4ac066ca103\" class=\"link\"> Karyawan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminRequestSql&amp;token=b8a29737047b990ee4909ab00c82a2db\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminLogs&amp;token=9f989632dec47591fd488dd48b61b3c6\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminWebservice&amp;token=ef09463d836030cf356ae4728dd1a081\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Luncurkan toko Anda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Lanjutkan</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Hentikan Pengenalan</a>
  </div>
</div>

</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Katalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin756gqwhqa/index.php/product/catalog?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\" aria-current=\"page\">Produk</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produk          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin756gqwhqa/index.php/product/new?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\"                  title=\"Membuat produk baru: CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add</i>
                  Produk baru
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin756gqwhqa/index.php/module/catalog?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\"                title=\"Modul yang direkomendasikan\"
                              >
                Modul yang direkomendasikan
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin756gqwhqa/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fid%252Fdoc%252FAdminProducts%253Fversion%253D1.7.4.2%2526country%253Did/Bantuan?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=vizzlearn%40gmail.com&amp;firstname=Hasan&amp;lastname=Setiawan&amp;website=http%3A%2F%2Fpradiste.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin756gqwhqa/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=vizzlearn%40gmail.com&amp;firstname=Hasan&amp;lastname=Setiawan&amp;website=http%3A%2F%2Fpradiste.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
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

    <div class=\"content-div  \">

      <div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 8.3333333333333%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 41.666666666667%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 16.666666666667%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 8.3333333333333%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 8.3333333333333%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 16.666666666667%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Lanjutkan</button>
  <a class=\"onboarding-button-shut-down\">Lewati tutorial ini</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Selamat datang ke toko Anda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hai! Nama saya Preston dan saya hadir untuk mengantar Anda berkeliling.<\\/p>\\n    <p>Anda akan menemukan beberapa langkah penting sebelum bisa meluncurkan toko:\\n    Buat produk pertama, ubah suaikan toko, konfigurasikan pengiriman dan pembayaran...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Ayo kita mulai!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Nanti<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Mulai<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/pradiste.com\\/admin756gqwhqa\\/index.php?controller=AdminDashboard&token=7bc618a71544705e1f8778398a18f455\"}]},{\"title\":\"Ayo buat produk pertama Anda\",\"subtitle\":{\"1\":\"Apakah yang Anda ingin katakan tentangnya? Pikirkan hal-hal yang pelanggan Anda ingin ketahui.\",\"2\":\"Tambahkan informasi yang jelas dan menarik. Jangan cemas, Anda bisa mengeditnya nanti :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Beri produk Anda nama yang memikat.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin756gqwhqa\\/index.php\\/product\\/new?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\",\"admin756gqwhqa\\/index.php\\/product\\/form\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Isilah rincian dasar di tab ini. Tab-tab lainnya disediakan untuk informasi yang lebih terinci.\",\"page\":\"admin756gqwhqa\\/index.php\\/product\\/form\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tambahkan satu gambar atau lebih sehingga produk terlihat memikat!\",\"page\":\"admin756gqwhqa\\/index.php\\/product\\/form\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Seharga berapakah Anda ingin menjualnya?\",\"page\":\"admin756gqwhqa\\/index.php\\/product\\/form\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yei! Anda baru saja menciptakan produk pertama. Tampak bagus, kan?\",\"page\":\"admin756gqwhqa\\/index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Beri toko Anda jati dirinya sendiri\",\"subtitle\":{\"1\":\"Seperti apakah Anda ingin toko terlihat? Apakah yang membuatnya begitu istimewa?\",\"2\":\"Ubah suaikan tema atau pilih desain terbaik dari katalog tema kami.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara memulai yang baik adalah menambahkan logo Anda sendiri di sini!\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/pradiste.com\\/admin756gqwhqa\\/index.php?controller=AdminThemes&token=c9dedb6b7268b9be0a7cfe376ffc34cc\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jika Anda ingin sesuatu yang benar-benar istimewa, tengoklah katalog tema!\",\"page\":\"https:\\/\\/pradiste.com\\/admin756gqwhqa\\/index.php?controller=AdminThemesCatalog&token=722bd5c5a4ae464e312e9204ed2529e8\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Menerima pembayaran di toko Anda\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk pelanggan membayar?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara-cara pembayaran ini sudah tersedia untuk pelanggan Anda.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/pradiste.com\\/admin756gqwhqa\\/index.php?controller=AdminPayment&token=dfd4a8237c8d48c001d2b9a2e529ac0a\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"}]},{\"title\":\"Pilih solusi pengiriman\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk mengantar produk?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Berikut adalah cara pengiriman yang tersedia di toko Anda hari ini.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/pradiste.com\\/admin756gqwhqa\\/index.php?controller=AdminCarriers&token=4e0b032e2dfa39472e819cfc2b852f7d\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"}]},{\"title\":\"Tingkatkan toko Anda dengan modul\",\"subtitle\":{\"1\":\"Tambahkan fitur baru dan kelola fitur yang ada berkat modul.\",\"2\":\"Beberapa modul sudah terinstal, modul yang lain mungkin gratis atau berbayar - jelajahi pilihan kami dan temukan apa saja yang tersedia!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Temukan pilihan modul kami di tab pertama. Kelola modul Anda di tab kedua dan periksa pemberitahuan di tab ketiga.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin756gqwhqa\\/index.php\\/module\\/catalog?_token=1tKG2t_g4R1N4Bl7Q9DjIxaVyf1u9nO20oGwHNB01_I\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Kembali ke Anda!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Anda telah melihat hal-hal dasar, tetapi ada banyak hal lain yang bisa dijelajahi.<br \\/>\\n          Beberapa sumber daya yang bisa membantu Anda melangkah lebih jauh:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Panduan Pemulai<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Pelatihan<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial video<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Saya siap<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"admin756gqwhqa\\/index.php\\/module\\/catalog\"}]}]}, 1, \"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminWelcome&token=3a50d1d8187d5c62f636e34c55de95dd\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hai! Anda tersesat?</p>    <p>Untuk melanjutkan, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Lanjutkan</button>    </div>    <p>Jika Anda ingin menghentikan tutorial sama sekali, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Keluar dari tutorial Sambutan</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Langkah <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Berikutnya</button></div>');
    
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
        // line 1218
        $this->displayBlock('content_header', $context, $blocks);
        // line 1219
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1220
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1221
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1222
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"https://pradiste.com/admin756gqwhqa/index.php?controller=AdminDashboard&amp;token=7bc618a71544705e1f8778398a18f455\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=vizzlearn%40gmail.com&amp;firstname=Hasan&amp;lastname=Setiawan&amp;website=http%3A%2F%2Fpradiste.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin756gqwhqa/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=vizzlearn%40gmail.com&amp;firstname=Hasan&amp;lastname=Setiawan&amp;website=http%3A%2F%2Fpradiste.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
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
        // line 1331
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1218
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1219
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1220
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1221
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1331
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
        return "__string_template__171326399468cba61474f99bfaf6ed7249c82a5d6a755492bd3768fd1f6830f2";
    }

    public function getDebugInfo()
    {
        return array (  1410 => 1331,  1405 => 1221,  1400 => 1220,  1395 => 1219,  1390 => 1218,  1381 => 84,  1373 => 1331,  1262 => 1222,  1259 => 1221,  1256 => 1220,  1253 => 1219,  1251 => 1218,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__171326399468cba61474f99bfaf6ed7249c82a5d6a755492bd3768fd1f6830f2", "");
    }
}
