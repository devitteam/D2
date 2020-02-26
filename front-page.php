<?php
/**
 *
 * @package d2interier
 */

get_header();
?>

<div class="container firstscreen" >
  <!--первый экран fluid col-lg-5 col-xl-5 col-lg-7 col-xl-7 -->
  <div class="row head-index">
    <div class="col-12">
      <h1>Магазин дизайнерской мебели и декора</h1>
    </div>
    <div class="col-12 col-md-12 index-img-a">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators main-box-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active one"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="two"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="three"></li>
          <li class="figure"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-6 head-index-text first-text">
                <h2 class="hed">Создайте пространство, которое вас вдохновит и сделает счастливым.</h2>
                <h2 class="desctopver">Более 3 000 предметов дизайнерской мебели и аксессуаров по разумным ценам. </h2>
                <div class="row desctopver">
                <div class="col-8 col-lg-8">
                  <span>Подобрать Вам идеальное </span><br><span> интерьерное решение?</span>
                </div>
                <div class="col-4 col-lg-4">
                  <p class="select">
                    <a href="#connection" class="selection">подобрать</a>
                  </p>
                </div>
              </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6 index-img-a">
                <div class="index-img index-img-one d-block w-100" ></div>
              </div>
            </div>
            <div class="row ">
              <div class="col-8 col-lg-8">
                <span>Подобрать Вам идеальное </span><br><span> интерьерное решение?</span>
              </div>
              <div class="col-4 col-lg-4">
                <p class="select">
                  <a href="#connection" class="selection">подобрать</a>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-6 head-index-text next-text">
                <h2 class="hed">Оперативно и профессионально подберем мебель и декор для вашего дома, офиса, заведения.</h2>
                <h2 class="desctopver">Просто пришлите нам фото комнаты или мебели, которая Вам нравится, и мы подберем для Вас идеальное решение. </h2>
                <div class="row desctopver">
                  <div class="col-8 col-lg-8">
                    <span>Подобрать Вам идеальное </span><br><span> интерьерное решение?</span>
                  </div>
                  <div class="col-4 col-lg-4">
                    <p class="select">
                      <a href="#connection" class="selection">подобрать</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6 index-img-a">
                <div class="index-img index-img-two d-block w-100" ></div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-6 head-index-text last-text">
                <h2 class="hed hed2">Одень свой дом модно. </h2>
                <h2 class="desctopver">Мы тщательно отбираем самые оригинальные вещи, что бы сделать стильным и уютным Ваш дом. </h2>
                <div class="row desctopver">
                  <div class="col-8 col-lg-8 ">
                    <span>Подобрать Вам идеальное </span><br><span> интерьерное решение?</span>
                  </div>
                  <div class="col-4 col-lg-4">
                    <p class="select">
                      <a href="#connection" class="selection">подобрать</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6 index-img-a">
                <div class="index-img index-img-three d-block w-100" ></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mobilever mobileselect">
    <div class="col-12 col-md-6">
      <p class="select-text">Подобрать Вам идеальное интерьерное решение?</p>
    </div>
    <div class="col-12 col-md-6">
      <p class="select">
        <a href="#connection" class="selection">подобрать</a>
      </p>
    </div>
  </div>
</div>
<div class="container menu-img">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4 room1" >
      <a href="<?php echo site_url(); ?>/category/blog/">
        <h2 id="blog_o_meb">Блог о мебели и дизайне</h2>
        <div class="blog_o_meb"></div>
      </a>
    </div>
    <div class="col-6 col-md-6  col-lg-3 room1" >
      <a href="<?php echo site_url(); ?>/product-category/styles/">
        <h2 id="style-int">Стиль интерьера</h2>
        <div class="style-int"></div>
      </a>
    </div>
    <div class="col-6 col-md-6  col-lg-2 room1" >
      <a href="<?php echo site_url(); ?>/product-tag/new/">
        <h2 id="news-int">Новинки</h2>
        <div class="news-int"></div>
      </a>
    </div>
    <div class="col-12 col-md-6  col-lg-3 room1" >
      <a href="<?php echo site_url(); ?>/product-category/colors/">
        <h2 id="color-int">Цветовое решение</h2>
        <div class="color-int"></div>
      </a>
    </div>
  </div>
</div>
  <!--карусель новинок-->
<div class="container">
  <div class="row index-carousel">
    <div class="col-md-12">
      <h2 class="head-carousel"><span>Новые поступления</span> </h2>
      <p><a href="#" id="js-prev" class="prev-next"></a>
        <a href="#" id="js-next" class="prev-next"></a></p>
      <div id="news-slider" class="owl-carousel news-slider">
        <?php 
          // Define Query Arguments
          $args_new = array( 
                'post_type'    => 'product', 
                'posts_per_page' => -1, 
                'product_tag'    => 'new' 
                );
          
          // Create the new query
          $loop = new WP_Query( $args_new );
          
          // Get products number
          $product_count = $loop->post_count;
          
          // If results
          if( $product_count > 0 ) :

              // Start the loop
              while ( $loop->have_posts() ) : $loop->the_post(); global $product;
              
                global $post;

                echo '<div class="post-slide">';
                // echo "<p>" . $thePostID = $post->post_title. " </p>";
                
                // if (has_post_thumbnail( $loop->post->ID )) 
                //   echo  get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                // else 
                //   echo '<img src="'.$woocommerce->plugin_url().'/assets/images/placeholder.png" alt="" width="'.$woocommerce->get_image_size('shop_catalog_image_width').'px" height="'.$woocommerce->get_image_size('shop_catalog_image_height').'px" />';

                wc_get_template_part( 'content', 'product' );

                echo '</div><!--/.products-->';

              endwhile;

          else :
          
            _e('No product matching your criteria.');
          
          endif; // endif $product_count > 0

         ?>
      </div>
    </div>
  </div>
</div>
<!--</div>-->
  <!--tab по стилям-->
<div class="container">
  <div class="row" id="style">
      <div class="col-12" >
        <h2>Стили интерьера</h2>
        <div id="tabs">
          <?php 
            $styles = get_terms( array(
              'taxonomy' => 'product_cat',
              'parent' => 17,
              'hide_empty' => false,
              'include' => '22,73,21,23',
            ) );
           ?>
          <ul>
            <?php 
              foreach( $styles as $k => $term ){ ?>
                <li>
                  <a href="#tabs-<?php echo $k+1; ?>1"><?php echo $term->name; ?></a>
                </li>
              <?php }
             ?>
          </ul>
          <?php 
            foreach ($styles as $key => $style) {

              $image_id = get_term_meta( $style->term_id, '_thumbnail_id', 1 );
              $image_url = wp_get_attachment_image_url( $image_id, 'full' );
             ?>
              
              <div id="tabs-<?php echo $key+1; ?>1">
                <div class="row">
                  <div class="col-12 col-lg-6 style-img-div">
                    <div class="style-img" style="background: url('<?php echo $image_url; ?>') no-repeat;background-size:cover;"></div>
                  </div>
                  <div class="col-12 col-lg-6 style-text">
                    <h2>Стиль <?php echo $style->name; ?></h2>
                    <p><?php echo $style->description; ?></p>
                    <h3>Товары в <?php switch ($style->name) {
                      case 'Лофт':
                        echo "стиле Лофт";
                        break;
                      case 'Минимализм':
                        echo "стиле Минимализм";
                        break;
                      case 'Скандинавский':
                        echo "Скандинавском стиле";
                        break;
                      case 'Современный':
                        echo "Современном стиле";
                        break;
                    } ?></h3>
                    <!-- <p >
                      <a href="#" id="js-prev-style-tabs-<?php echo $key+1; ?>" class="prev-next"></a>
                      <a href="#" id="js-next-style-tabs-<?php echo $key+1; ?>" class="prev-next"></a>
                    </p> -->
                    <div class="styles_colors-slider-wrap">
                      <a href="#" id="js-prev-style-tabs-<?php echo $key+1; ?>" class="prev-next"></a>
                      <a href="#" id="js-next-style-tabs-<?php echo $key+1; ?>" class="prev-next"></a>
                      <div id="index-slider-tabs-<?php echo $key+1; ?>" class="owl-carousel">
                      
                        <?php 
                          
                          $cur_style_posts = get_posts(array(
                            'post_type'      =>'product',
                            'posts_per_page' => 10,
                            'product_cat'    => $style->slug,
                          ));
                          // printer($cur_style_posts);
                          // echo $style->slug;
                          foreach ($cur_style_posts as $key => $post) { ?>
                            <div class="post-slide">
                              <div class="card-product" >
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="">
                                <h4><?php echo $post->post_title; ?></h4>
                              </div>
                            </div>
                          <?php }
                         ?>
                        
                      </div>
                      
                    </div>
                    <div class="row style-selection">
                      <div class="col-12 col-md-8 col-lg-8 style-desctop">
                        <span>Посмотреть интерьерные решения в <?php switch ($style->name) {
                          case 'Лофт':
                            echo "стиле Лофт";
                            break;
                          case 'Минимализм':
                            echo "стиле Минимализм";
                            break;
                          case 'Скандинавский':
                            echo "Скандинавском стиле";
                            break;
                          case 'Современный':
                            echo "Современном стиле";
                            break;
                        } ?></span>
                      </div>
                      <div class="col-12 col-md-3 col-lg-3">
                        <p class="select">
                          <a href="<?php echo get_category_link($style->term_id); ?>" class="selection">посмотреть</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php }
           ?>

        </div>
      </div>
  </div>
</div>
  <!--подобрать интерьер-->
<div class="container-fluid container-fluid-select">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 news-one-one new-desctop">
        <h2 class="head-selection">Подобрать Вам идеальное интерьерное решение?</h2>
        <p class="text-selection">Оставьте свой контакт и наш профессиональный консультант с вами свяжется.</p>
        <p class="select">
          <a href="#connection" class="selection">подобрать</a>
        </p>
      </div>
      <div class="col-12 col-lg-6 news-img-a">
        <div class="news-img img-selection"></div>
      </div>
      <div class="col-12 col-lg-6 news-one-one new-mobile">
        <h2 class="head-selection">Подобрать Вам идеальное интерьерное решение?</h2>
        <p class="select">
          <a href="#connection" class="selection">подобрать</a>
        </p>
      </div>
    </div>
</div>
</div>
  <!--по функционалу-->
<div class="container functionality" id="functionality">
  <h2>Популярные разделы</h2>
        <div class="row">
          <div class="col-12 col-lg-6" >
            <div class="row">
              <div class="col-6 col-lg-6 room room-kitchen" >
                <a href="<?php echo get_term_link(24); ?>">
                  <h3 id="kitchen">Кухня</h3>
                  <div class="kitchen"></div>
                </a>
              </div>
              <div class="col-6 col-lg-6" >
                <div class="row">
                  <div class="col-12 col-lg-12 room" >
                    <a href="<?php echo get_term_link(25); ?>">
                      <h3 id="bedroom">Спальня</h3>
                      <div class="bedroom"></div>
                    </a>
                  </div>
                  <div class="col-12 col-lg-12 room" >
                    <a href="<?php echo get_term_link(26); ?>">
                      <h3 id="livingroom">Гостиная</h3>
                      <div class="livingroom"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 room desctopver" >
            <a href="<?php echo get_term_link(64); ?>">
              <h3 id="cabare">HoReCa</h3>
              <div class="cabare"></div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 room" >
            <a href="<?php echo get_term_link(28); ?>">
              <h3 id="office">Офис</h3>
              <div class="office"></div>
            </a>
          </div>
          <div class="col-12 col-lg-6" >
            <div class="row">
              <div class="col-6 col-lg-6" >
                <div class="row">
                  <div class="col-12 col-lg-12 room" >
                    <a href="<?php echo get_term_link(29); ?>">
                      <h3 id="entrancehall">Прихожая</h3>
                      <div class="entrancehall"></div>
                    </a>
                  </div>
                  <div class="col-12 col-lg-12 room" >
                    <a href="<?php echo get_term_link(31); ?>">
                      <h3 id="salon">Салон</h3>
                      <div class="salon"></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-6" >
                <div class="row">
                  <div class="col-12 col-lg-12 room" >
                    <a href="<?php echo get_term_link(30); ?>">
                      <h3 id="cabinet">Кабинет</h3>
                      <div class="cabinet"></div>
                    </a>
                  </div>
                  <div class="col-12 col-lg-12 room" >
                    <a href="<?php echo get_term_link(27); ?>">
                      <h3 id="children">Детская</h3>
                      <div class="children"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 room mobilever" >
            <a href="<?php echo get_term_link(64); ?>">
              <h3 id="cabare">HoReCa</h3>
              <div class="cabare"></div>
            </a>
          </div>
        </div>
</div>
  <!--tab по цветовой стилистике-->
<div class="container">
  <div class="row">
    <div class="col-12" id="stylecolor">
      <h2>Цвет в интерьере</h2>
      <div id="tabs-color">
        <ul>
          <?php 
            $colors = get_terms( array(
              'taxonomy' => 'product_cat',
              'parent' => 19,
              'hide_empty' => false,
              'orderby' => 'id',
              'include' => '34,38,74,36,37,33,35',
            ) );
           
            foreach( $colors as $k => $term ){ ?>
              <li class="<?php echo $term->slug; ?>">
                <a href="#tabs-<?php echo $k+1; ?>">
                  <p class="color-img"></p>
                  <?php echo $term->name; ?>
                </a>
              </li>
            <?php 
            }
             ?>
        </ul>
        <?php 
          foreach ($colors as $key => $color) {

            $image_id = get_term_meta( $color->term_id, '_thumbnail_id', 1 );
            $image_url = wp_get_attachment_image_url( $image_id, 'full' );
          ?>
            <div id="tabs-<?php echo $key+1; ?>">
                <div class="row">
                  <div class="col-12 col-xl-6">
                    <div class="style-img" style="background: url('<?php echo $image_url; ?>') no-repeat;background-position: bottom;"></div>
                  </div>
                  <div class="col-12 col-xl-6 stylecolor-text">
                    <h2 class="trend-color"><?php echo $color->name; ?></h2>
                    <p><?php echo $color->description; ?></p>
                    <h3>Товары в <?php switch ($color->name) {
                      case 'Тренд':
                        echo "Трендовом";
                        break;
                      case 'Белый':
                        echo "Белом";
                        break;
                      case 'Черный':
                        echo "Черном";
                        break;
                      case 'Розовый':
                        echo "Розовом";
                        break;
                      case 'Синий':
                        echo "Синем";
                        break;
                      case 'Зеленый':
                        echo "Зеленом";
                        break;
                      case 'Разноцветный':
                        echo "Разноцветном";
                        break;
                    } ?> цвете</h3>
                    <div class="styles_colors-slider-wrap">
                      <a href="#" id="js-prev-stylecolor-tabs-<?php echo $key+1; ?>" class="prev-next"></a>
                      <a href="#" id="js-next-stylecolor-tabs-<?php echo $key+1; ?>" class="prev-next"></a>
                      <div id="stylecolor-slider-tabs-<?php echo $key+1; ?>" class="stylecolor-slider owl-carousel">
                        <?php 
                          
                          $cur_color_posts = get_posts(array(
                            'post_type'      =>'product',
                            'posts_per_page' => 10,
                            'product_cat'    => $color->slug,
                          ));
                          // printer($cur_style_posts);
                          // echo $style->slug;
                          foreach ($cur_color_posts as $key => $post) { ?>
                            <div class="post-slide">
                              <div class="card-product" >
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="">
                                <h4><?php echo $post->post_title; ?></h4>
                              </div>
                            </div>
                          <?php }
                         ?>
                      </div>
                    </div>
                    <div class="row style-selection">
                      <div class="col-12 col-md-8 col-lg-8 style-desctop">
                        <span>Посмотреть интерьерные </span><br><span> решения в этом цвете</span>
                      </div>
                      <div class="col-12 col-md-4 col-lg-4">
                        <p class="select">
                          <a href="<?php echo get_category_link($color->term_id); ?>" class="selection">посмотреть</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          <?php 
          }
           ?>
      </div>
    </div>
  </div>
</div>
<!--ценность-->
<div class="container">
  <div class="row worth">
    <div class="col-12 col-lg-6 worth-left">
      <p><span>Одна из наших главных ценностей</span> — это забота и внимание к клиентам</p>
    </div>
    <div class="col-12 col-lg-6 worth-right">
      <p>Именно поэтому 97% тех, кто пришли к нам впервые — возвращаются за повторными покупками. </p>
    </div>
  </div>
</div>
  <!--к нам приезжают-->
<div class="container">
  <div class="row" id="coming">
    <div class="col-12 head-coming" >
      <h2>Наши клиенты</h2>
    </div>
    <div class="col-12" >
      <div class="row">
        <div class="col-12 col-lg-3 coming" >
          <a href="/otzyvy/">
            <h3 id="family">Семья</h3>
            <div class="family"></div>
          </a>
        </div>
        <div class="col-12 col-lg-3 coming" >
          <a href="/otzyvy/">
            <h3 id="business">Дизайнеры</h3>
            <div class="business"></div>
          </a>
        </div>
        <div class="col-12 col-lg-3 coming" >
          <a href="/otzyvy/">
            <h3 id="designers">HoReCa</h3>
            <div class="designers"></div>
          </a>
        </div>
        <div class="col-12 col-lg-3 coming" >
          <a href="/otzyvy/">
            <h3 id="businessowners">Клиники и салоны красоты</h3>
            <div class="businessowners"></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  <!--почему мы-->
<div class="container-fluid container-fluid-white" >
  <div class="container white">
  <h2>Почему мы</h2>
  <div class="row" id="white">
    <div class="col-12 col-md-6" >
      <div class="row aboutas">
        <div class="col-3 col-md-3 aboutas-img" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/img5285.png" data-alt-src="<?php echo get_template_directory_uri(); ?>/img/img5285j.png" class="js-hover" alt="">
        </div>
        <div class="col-9 col-md-9" >
          <h3>Новинки каждую неделю</h3>
          <p>Каждую неделю добавляем в ассортимент новинки, которые вы не найдете у конкурентов. </p>
        </div>
      </div>
      <div class="row aboutas">
        <div class="col-3 col-md-3 aboutas-img" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/img5284.png" data-alt-src="<?php echo get_template_directory_uri(); ?>/img/img5284j.png" class="js-hover" alt="">
        </div>
        <div class="col-9 col-md-9" >
          <h3>Мебель «На примерку»</h3>
          <p>Вы можете взять домой сразу несколько предметов и на месте определиться, что лучше подходит. </p>
        </div>
      </div>
      <div class="row aboutas">
        <div class="col-3 col-md-3 aboutas-img" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/img5282.png" data-alt-src="<?php echo get_template_directory_uri(); ?>/img/img5282j.png" class="js-hover" alt="">
        </div>
        <div class="col-9 col-md-9" >
          <h3>Наш магазин</h3>
          <p class="white-text">Мы создали пространство в 200 квадратных метров, где можно комбинировать стулья, столы, кресла и пуфики и подбирать лучшие сочетания. </p>
          <a class="about aboutdesc" href="<?php echo site_url( $path = '/o-nas/', $scheme = null ); ?>">читать еще</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6" >
      <div class="row aboutas">
        <div class="col-3 col-md-3 aboutas-img" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/img5283.png" data-alt-src="<?php echo get_template_directory_uri(); ?>/img/img5283j.png" class="js-hover" alt="">
        </div>
        <div class="col-9 col-md-9" >
          <h3>Профессиональные консультанты</h3>
          <p>Консультанты со вкусом и понимаем дизайна помогут вам определиться с выбором. Вы можете показать фото комнаты или мебели, которая вам нравится, и мы подберем для вас максимально подходящее предложение.</p>
        </div>
      </div>
      <div class="row aboutas">
        <div class="col-3 col-md-3 aboutas-img" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/img528.png" data-alt-src="<?php echo get_template_directory_uri(); ?>/img/img528j.png" class="js-hover" alt="">
        </div>
        <div class="col-9 col-md-9" >
          <h3>Бережная доставка и сборка</h3>
          <p>Бережные и опытные курьеры доставят и соберут мебель, которую вы купите. Также вы можете попросить наших ребят расставить собранную мебель.</p>
        </div>
      </div>
      <div class="row aboutas">
        <div class="col-3 col-md-3 aboutas-img" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/img5281.png" data-alt-src="<?php echo get_template_directory_uri(); ?>/img/img5281j.png" class="js-hover" alt="">
        </div>
        <div class="col-9 col-md-9" >
          <h3>Гарантия и легкий возврат</h3>
          <p>Гарантия на купленную мебель — 12 месяцев. Легко решаем вопросы с рекламациями и возвратами.</p>
        </div>
      </div>

    </div>
    <a class="about aboutmobile" href="/o-nas/">читать еще</a>
  </div>
</div>
</div>
 <!--seo-->
<div class="container" id="seo">
  <h2>Видеотур по магазину D2-интерьер</h2>
  <div class="row">
    <div class="col-12 col-lg-6">
      <iframe width="100%" height="460" src="https://www.youtube.com/embed/AC2Cu2a170Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-12 col-lg-6 seo">
      <?php global $wp_query; ?>
      <?php the_field('tekst_seo', $wp_query->post->ID); ?>
    </div>
  </div>
</div>
  <!--форма связи-->
<div class="container" id="connection">
  <div class="row">
    <div class="col-12 col-lg-7">
      <h2>Подобрать Вам идеальное интерьерное решение?</h2>
      <p>Оставьте свой контакт и наш консультант с вами свяжется, чтобы уточнить Ваши предпочтения.</p>
      <p>Вы пришлете фото вашего офиса или комнаты в доме и мы подберем для вас мебель и аксессуары, которые освежат интерьер.</p>
    </div>
    <div class="col-12 col-lg-5 connection-form">
      <?php echo do_shortcode( '[contact-form-7 id="273" title="Подобрать решение"]', $ignore_html = false ); ?>
    </div>
  </div>
</div>

<!--модальное окно подписаться-->
<!-- HTML-код модального окна -->
<!-- <div id="myModalBox" class="modal fade subscribe"> -->
  <!-- <div class="modal-dialog  modal-dialog-centered"> -->
    <!-- <div class="modal-content"> -->

      <!-- Основное содержимое модального окна -->
      <!-- <div class="container"> -->
        <!-- <div class="modal-body row"> -->
          <!-- <div class="col-12 col-md-6 subscribe-img"> -->
            <!-- <button type="button" class="close close-mobile" data-dismiss="modal" aria-hidden="true">×</button> -->
          <!-- </div> -->
          <!-- <div class="col-12 col-md-6 subscribe-text"> -->
            <!-- <button type="button" class="close close-desctop" data-dismiss="modal" aria-hidden="true">×</button> -->
            <!-- <h2>Освежим ваш интерьер </h2> -->
            <!-- <h3>Час дизайнера - подпишись и получи
              бесплатный час работы с дизайнером-декоратором</h3> -->
            <?php // echo do_shortcode( '[contact-form-7 id="283" title="Час дизайнера"]', $ignore_html = false ); ?>
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->

<?php
get_footer();