<?php /*%%SmartyHeaderCode:311515874fb117abad3-10966221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1484042665,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '311515874fb117abad3-10966221',
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5874fb1181f4a1_17832526',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874fb1181f4a1_17832526')) {function content_5874fb1181f4a1_17832526($_smarty_tpl) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide hidden-sm-down" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active">
          <figure>
            <img src="http://localhost/my-site/prestashop/modules/ps_imageslider/images/0677d5fd2ecdd89b80d8131952034b170ff1d08b_smartphone-wallpaper-1920x600.jpg" alt="">
                          <figcaption class="caption">
                <h2 class="display-1 text-uppercase"></h2>
                <div class="caption-description"><h2></h2></div>
              </figcaption>
                      </figure>
        </li>
              <li class="carousel-item ">
          <figure>
            <img src="http://localhost/my-site/prestashop/modules/ps_imageslider/images/73f6dbc9256b3f90624701c344efc7aaade9b784_htc-desire-630-KSP_4-custom.jpg" alt="">
                      </figure>
        </li>
              <li class="carousel-item ">
          <figure>
            <img src="http://localhost/my-site/prestashop/modules/ps_imageslider/images/1a0ddeaa50bf7d4333da8a54e56860871d623523_slide-3.jpg" alt="">
                      </figure>
        </li>
          </ul>
    <div class="direction">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php }} ?>
