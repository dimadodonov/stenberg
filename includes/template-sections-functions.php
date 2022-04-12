<?php

if ( ! defined( 'ABSPATH')) {
    exit;
}

if ( ! function_exists( 'hook_header' ) ) {
    /**
     * Display Hooks Header
     */
    function hook_header() { ?>
    <header class="header" id="header">
        <div class="header__wrap">
            <div class="header__logo">
                <div class="logo">

                <?php if(is_home()) : else: ?>
                    <a href="<?php echo get_home_url(); ?>">
                <?php endif; ?>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/files/icons/svg/logo.svg" alt="<?php echo get_bloginfo( 'title' ); ?>">
                    
                <?php if(is_home()) : else: ?>
                    </a>
                <?php endif; ?>
                
                </div>
                <div class="header__desc">Стеновые панели и интерьерные решения</div>
            </div>
            <div class="header__block header__adress">
                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--adress"/></svg>
                <span>г. Москва, Шоссе Энтузиастов, <br>д. 31, стр. 39, 2 этаж, офис 5</span>
            </div>
            <div class="header__block header__border header__mess">
                <div class="messenger">
                    <span>Быстрый ответ <br>в мессенджерах</span>
                    <div class="messenger__wrap">
                        <a class="messenger__item whatsapp" href="" title="Напишите нам в Whatsapp">
                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-whatsapp"/></svg>
                        </a>
                        <a class="messenger__item viber" href="" title="Напишите нам в Viber">
                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-viber"/></svg>
                        </a>
                        <a class="messenger__item telegram" href="" title="Напишите нам в Telegram">
                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-telegram"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-phone header__block header__border">
                <div class="header-phone__btn"><span class="btn btn-border initpopup" data-popup="callback">Заказать звонок</span></div>
                <div class="header-phone__num">8 (800) 301-46-32</div>
            </div>
        </div>
    </header>
    <?php }
}

if ( ! function_exists( 'hook_nav' ) ) {
    /**
     * Display Hooks Nav
     */
    function hook_nav() {
        header_menu_primary();
    }
}

if ( ! function_exists( 'hook_footer' ) ) {
    /**
     * Display Hooks Footer
     */
    function hook_footer() { ?>
        <footer id="footer" class="footer">
            <div class="footer__top">
                <div class="container">
                    <div class="footer__row">
                        <div class="footer-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/files/icons/svg/logo.svg" alt="<?php echo get_bloginfo( 'title' ); ?>">
                            <div class="footer-logo__desc">Стеновые панели и интерьерные решения</div>
                        </div>
                        <div class="footer-nav">
                            <div class="footer-nav__col">
                               <div class="footer-nav__title">Меню сайта:</div>
                               <?php footer_nav_site(); ?>
                            </div>
                            <div class="footer-nav__col">
                               <div class="footer-nav__title">Каталог продукции:</div> 
                               <?php footer_nav_cat(); ?>
                            </div>
                            <div class="footer-nav__col">
                               <div class="footer-nav__title">Информация:</div> 
                               <?php footer_nav_info(); ?>
                            </div>
                        </div>
                        <div class="footer-contacts">
                            <div class="footer-contacts__item">
                                <div class="footer-contacts__callback initpopup" data-popup="callback">Заказать звонок</div>
                                <div class="footer-contacts__phone">8 (495) 125-25-79</div>
                                <div class="footer-contacts__phone">8 (800) 301-46-32</div>
                            </div>
                            <div class="footer-contacts__item">
                                <div class="footer-contacts__adress">г. Москва, Шоссе Энтузиастов, д. 31, стр. 39, 2 этаж, офис 5</div>
                            </div>
                            <div class="footer-contacts__item">
                                <div class="messenger">
                                    <span>Быстрый ответ <br>в мессенджерах</span>
                                    <div class="messenger__wrap">
                                        <a class="messenger__item whatsapp" href="" title="Напишите нам в Whatsapp">
                                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-whatsapp"/></svg>
                                        </a>
                                        <a class="messenger__item viber" href="" title="Напишите нам в Viber">
                                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-viber"/></svg>
                                        </a>
                                        <a class="messenger__item telegram" href="" title="Напишите нам в Telegram">
                                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-telegram"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="footer__row">
                        <div class="footer__col footer__col3">
                            <div class="footer__copy">© Все права защищены. Москва 2022 <br>www.stenbergpro.ru</div>
                        </div>
                        <div class="footer__col footer__col3">
                            <div class="footer__privacy">Вся информация, размещённая на сайте, носит ознакомительный
                    характер и может отличаться от действительности</div>
                        </div>
                        <div class="footer__col footer__col3">
                            <div class="footer__dev">
                                <a href="">Политика конфиденциальности</a>
                                <a href="" class="dev">Разработано в <strong>Mitroliti</strong>.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <?php }
}

if ( ! function_exists( 'hook_page_before' ) ) {
    /**
     * Display Hooks PAge Before
     */
    function hook_page_before() {
        ?>
        <div class="page__wrapper">
          <main class="main">
        <?php
    }
}

if ( ! function_exists( 'hook_page_after' ) ) {
    /**
     * Display Hooks Page after
     */
    function hook_page_after() {
        ?>
          </main>
        </div>
        <?php
    }
}

if ( ! function_exists( 'hook_intro' ) ) {
    /**
     * Display Hooks intro
     */
    function hook_intro() { ?>
        <div class="section section-intro">
            <div class="section-intro__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/intro/intro.jpg" alt="">
            </div>
            <div class="section-intro__wrap">
                <div class="section-intro__title">
                    <h1>Стеновые панели</h1>
                </div>
                <div class="section-intro__subtitle">
                    <span>По-настоящему уникальный, оригинальный и универсальный отделочный материал дает широкие возможности для оформления разных пространств.</span>
                </div>
                <div class="section-intro__btn">
                    <span class="btn btn-border btn-border-large btn-border-white">Смотреть каталог</span>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_home_category' ) ) {
    /**
     * Display Hooks Home Category
     */
    function hook_home_category() { ?>
        <div class="section section-category category-row">
            <div class="container">
                <div class="category-row-row__wrap">
                <div class="category-row__inner">

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card__two.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card__two.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                </div>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_section_category' ) ) {
    /**
     * Display Hooks Section Category
     */
    function hook_section_category() { ?>
        <div class="section section-category category-row">
            <div class="container">
                <div class="section__title">
                    <h2>Каталог продукции</h2>
                </div>
                <div class="category-row-row__wrap">
                <div class="category-row__inner">

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card__two.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                    <a class="category-row-card" href="#">
                        <div class="category-row-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/category/category-card__two.jpg" alt="">
                        </div>
                        <div class="category-row-card__wrap">
                            <div class="category-row-card__title">Негорючие и огнестойкие панели</div>
                            <div class="category-row-card__link">
                                <span>Подробнее</span>
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                            </div>
                        </div>
                    </a>

                </div>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_home_siteinfo' ) ) {
    /**
     * Display Hooks Home Siteinfo
     */
    function hook_home_siteinfo() { ?>
        <div class="section section-siteinfo siteinfo">
            <div class="container">
                <div class="siteinfo__row">
                    <div class="siteinfo__col">
                        <div class="siteinfo__text">
                            <h2>Стеновые панели</h2>
                            <p>По-настоящему уникальный, оригинальный и универсальный отделочный материал дает широкие возможности для оформления разных пространств.</p>
                            <p>Банки и учебные заведения, отели и концертные залы, офисы и бизнес-центры - <strong>купить стеновые панели</strong> сегодня можно практически для любого помещения и на любой вкус, учитывая его площадь и функциональное назначение.</p>
                            <p>В каталоге нашего сайта представлено несколько десятков образцов, среди которых, в частности, есть <a href="<?php echo site_url( '/product-category/akusticheskie-paneli' ); ?>">акустические панели</a>, обладающие звукопоглощающими свойствами, и <a href="<?php echo site_url( '/product-category/shponirovannye-paneli' ); ?>">шпонированные панели</a>, отлично имитирующие дорогие породы древесины.</p>
                        </div>
                    </div>
                    <div class="siteinfo__col">
                        <div class="siteinfo__gallery">
                            <div class="siteinfo__icon">
                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--siteinfo"/></svg>
                            </div>
                            <div class="swiper siteinfo__slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="siteinfo__slide">
                                            <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="siteinfo__slide">
                                            <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="siteinfo__slide">
                                            <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="dd-slider-btn dd-slider-next"></div>
                                <div class="dd-slider-btn dd-slider-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_section_projects' ) ) {
    /**
     * Display Hooks Section Projects
     */
    function hook_section_projects() { 
		
		$args = array(
            'post_type' => 'projects',
            'post_status' => 'publish',
            'posts_per_page' => 6,
        );

		$projects_query = new WP_Query( $args );
 
		// если посты, удовлетворяющие нашим условиям, найдены
		if( $projects_query->have_posts() ) : ?>
        
        <div class="section section-projects section-pixel">
            <div class="section__title center">
                <h2>Наши проекты</h2>
            </div>
            <div class="projects projects__loop">
                <div class="projects__wrap">
                    <div class="swiper projectsSwiper dd-slider-nooverflow">
                        <div class="swiper-wrapper">

							<?php // запускаем цикл
							while( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
					
								<div class="swiper-slide">
									<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="projects-card">
										<div class="projects-card__image">
											<?php if ( has_post_thumbnail()) { ?>
												<?php the_post_thumbnail('large'); ?>
											<?php } else { ?>
												<img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
											<?php } ?>
										</div>
										<div class="projects-card-desc">
											<div class="projects-card-desc__inner">
												<div class="projects-card-desc__icon">
													<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--play"/></svg>
												</div>
												<div class="projects-card-desc__title"><?php echo get_the_title(); ?></div>
											</div>
											<div class="projects-card-desc__link"><span>Подробнее</span>
												<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
											</div>
										</div>
									</a>
								</div>

							<?php endwhile; ?>

                        </div>
                        <div class="dd-slider-btn dd-slider-next"></div>
                        <div class="dd-slider-btn dd-slider-prev"></div>
                    </div>
                </div>
            </div>
            <div class="section-projects__btn">
                <a class="btn btn-border btn-border-large" href="<?php echo site_url( '/projects' ); ?>">Смотреть все</a>
            </div>
        </div>
        
        <?php endif;
		
		// не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
		wp_reset_postdata();
	
    }
}

if ( ! function_exists( 'hook_section_edge' ) ) {
    /**
     * Display Hooks Section Edge
     */
    function hook_section_edge() { ?>
        <div class="section section-edge">
            <div class="section__title center">
                <h2>Преимущества</h2>
            </div>
            
            <div class="container">
                <div class="edge">
                    <div class="edge__wrap">
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--consultation"/></svg></div>
                            <div class="edge__title">Консультация</div>
                            <div class="edge__desc"><span>Звоните и задавайте вопросы, которые вас интересуют, и получайте на них ответы прямо сейчас.</span></div>
                        </div>
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--experience"/></svg></div>
                            <div class="edge__title">Опыт</div>
                            <div class="edge__desc"><span>Используйте наш опыт в реализованных проектах и не только.</span></div>
                        </div>
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--solution"/></svg></div>
                            <div class="edge__title">Решение</div>
                            <div class="edge__desc"><span>Согласитесь, что хорошо, когда помимо качественного товара, Вам предложат техническое решение.</span></div>
                        </div>
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--analysis"/></svg></div>
                            <div class="edge__title">Планирование</div>
                            <div class="edge__desc"><span>Для нас важно, чтобы Вы получили свой заказ в срок, поэтому в момент запуска в производство мы уже планируем дату отгрузки.</span></div>
                        </div>
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--library"/></svg></div>
                            <div class="edge__title">Выбор</div>
                            <div class="edge__desc"><span>Наши специалисты подберут Вам тот материал, который действительно нужен. Более 400 разновидностей декоративных, акустических, рельефных, шпонированных панелей.</span></div>
                        </div>
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--award"/></svg></div>
                            <div class="edge__title">Качество</div>
                            <div class="edge__desc"><span>Вы получаете только сертифицированные материалы.</span></div>
                        </div>
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--certificate"/></svg></div>
                            <div class="edge__title">Гарантия</div>
                            <div class="edge__desc"><span>На всю нашу продукцию и услуги мы даем гарантию до 2-х лет.</span></div>
                        </div>
                        <div class="edge__item">
                            <div class="edge__icon"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--service"/></svg></div>
                            <div class="edge__title">Услуги</div>
                            <div class="edge__desc"><span>На часть нашей продукции мы оказываем услуги «ПОД КЛЮЧ», а также мы предосталяем услуги по установке, доставке, консультированию, замерам, разработке рабочих четртежей и так далее.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_section_clients' ) ) {
    /**
     * Display Hooks Section clients
     */
    function hook_section_clients() { ?>
        <div class="section section-clients">
            <div class="container">
                <div class="clients__wrap">
                    <div class="clients__title"><h2>Наши клиенты</h2></div>
                    <div class="clients__slider">
                        <div class="swiper clientsSwiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/files/icons/svg/clients--sberbank.svg'; ?>" alt="sberbank">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/files/icons/svg/clients--metro.svg'; ?>" alt="metro">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/files/icons/svg/clients--anzhi.svg'; ?>" alt="anzhi">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/files/icons/svg/clients--kfc.svg'; ?>" alt="kfc">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/files/icons/svg/clients--alpari.svg'; ?>" alt="alpari">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/files/icons/svg/clients--fridays.svg'; ?>" alt="fridays">
                                </div>

                            </div>
                            <div class="dd-slider-btn dd-slider-next"></div>
                            <div class="dd-slider-btn dd-slider-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_section_articles' ) ) {
    /**
     * Display Hooks Section Articles
     */
    function hook_section_articles() { ?>
        <div class="section section-articles">
            <div class="container">
                <div class="articles-tabs tabs">
                    <ul class="tabs-nav">
                        <li class="tab-nav tab-nav--active">Новости</li>
                        <li class="tab-nav">Статьи</li>
                    </ul>
                    
                    <div class="tabs-content">
                        <div class="tab-content tab-content--active">
                            <div class="article__loop">
                                
                                <article class="article-card">
                                    <a href="">
                                        <div class="article-card__date">
                                            <strong>21</strong>
                                            <span>Август</span>
                                        </div>
                                        <div class="article-card__image">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/section/article/article-item.jpg'; ?>" alt="">
                                        </div>
                                        <div class="article-card__desc">
                                            <h3>Мы с Вами 8 лет</h3>
                                            <p>Дорогие друзья! 21 июля нашей компании исполнилось 8 лет. Мы благодарим наших клиентов за доверие, а коллектив за активную и слаженную работу.</p>
                                        </div>
                                    </a>
                                </article>
                                
                                <article class="article-card">
                                    <a href="">
                                        <div class="article-card__date">
                                            <strong>21</strong>
                                            <span>Август</span>
                                        </div>
                                        <div class="article-card__image">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/section/article/article-item.jpg'; ?>" alt="">
                                        </div>
                                        <div class="article-card__desc">
                                            <h3>Мы с Вами 8 лет</h3>
                                            <p>Дорогие друзья! 21 июля нашей компании исполнилось 8 лет. Мы благодарим наших клиентов за доверие, а коллектив за активную и слаженную работу.</p>
                                        </div>
                                    </a>
                                </article>
                                
                                <article class="article-card">
                                    <a href="">
                                        <div class="article-card__date">
                                            <strong>21</strong>
                                            <span>Август</span>
                                        </div>
                                        <div class="article-card__image">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/section/article/article-item.jpg'; ?>" alt="">
                                        </div>
                                        <div class="article-card__desc">
                                            <h3>Мы с Вами 8 лет</h3>
                                            <p>Дорогие друзья! 21 июля нашей компании исполнилось 8 лет. Мы благодарим наших клиентов за доверие, а коллектив за активную и слаженную работу.</p>
                                        </div>
                                    </a>
                                </article>
                            
                            </div>
                        </div> 
                        <div class="tab-content">
                            <div class="article__loop">
                                
                                <article class="article-card">
                                    <a href="">
                                        <div class="article-card__image">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/section/article/article-item-2.jpg'; ?>" alt="">
                                        </div>
                                        <div class="article-card__desc">
                                            <h3>Мы с Вами 8 лет</h3>
                                            <p>Дорогие друзья! 21 июля нашей компании исполнилось 8 лет. Мы благодарим наших клиентов за доверие, а коллектив за активную и слаженную работу.</p>
                                        </div>
                                    </a>
                                </article>
                                
                                <article class="article-card">
                                    <a href="">
                                        <div class="article-card__image">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/section/article/article-item-2.jpg'; ?>" alt="">
                                        </div>
                                        <div class="article-card__desc">
                                            <h3>Мы с Вами 8 лет</h3>
                                            <p>Дорогие друзья! 21 июля нашей компании исполнилось 8 лет. Мы благодарим наших клиентов за доверие, а коллектив за активную и слаженную работу.</p>
                                        </div>
                                    </a>
                                </article>
                                
                                <article class="article-card">
                                    <a href="">
                                        <div class="article-card__image">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/section/article/article-item-2.jpg'; ?>" alt="">
                                        </div>
                                        <div class="article-card__desc">
                                            <h3>Мы с Вами 8 лет</h3>
                                            <p>Дорогие друзья! 21 июля нашей компании исполнилось 8 лет. Мы благодарим наших клиентов за доверие, а коллектив за активную и слаженную работу.</p>
                                        </div>
                                    </a>
                                </article>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-articles__btn">
                    <a class="btn btn-border btn-border-large" href="<?php echo get_site_url('/news'); ?>">Смотреть все</a>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_section_seo' ) ) {
    /**
     * Display Hooks Section Articles
     */
    function hook_section_seo() { ?>
        <div class="section section-seo">
            <div class="container">
                <div class="section__title center">
                    <h2>Stenberg Pro</h2>
                </div>
                <div class="container">
                    <p>
                        <small>Добро пожаловать на сайт компании Стенберг. <br>Мы оказываем полный спектр услуг по поставке и монтажу всех видов стеновых и потолочных панелей: дизайнерских, акустических, 3d, шпонированных. Также в нашем ассортименте представлены негорючие и влагостойкие материалы для оформления стенового пространства. Мы сотрудничаем только с проверенными поставщиками, поэтому вся наша продукция имеет необходимый пакет документов и гигиенические сертификаты.</small>
                    <p>
                        <small>Основной принцип работы нашей команды индивидуальный подход к клиенту и соблюдение высоких стандартов качества выполненных работ. Нам хотелось бы, что бы вы стали нашими долгосрочными партнерами. Если вы цените честность, порядочность и четкость в выполнении взятых на себя обязательств - добро пожаловать к нам.</small>
                    </p>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'hook_callback' ) ) {
    add_filter('wp_footer', 'hook_callback');
    /**
     * Display Hooks gotop
     */
    function hook_callback() {
        ?>
            <div id="popup" class="popup popup-callback">
                <div class="popup__overlay"></div>
                <div class="popup__wrap">
                    <div class="popup__close"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--close"/></svg></div>
                    <div class="popup__header">
                        <div class="popup__title">Мы вам перезвоним!</div>
                        <div class="popup__subtitle">Просто оставьте телефон <br>и мы вам перезвоним</div>
                    </div>
                    <div class="popup__container">
                        <?php echo do_shortcode('[contact-form-7 id="6" title="Заказать обратный звонок"]'); ?>
                    </div>
                    <div class="popup__footer"><p class="popup-form__privacy"><span>Нажимая кнопку вы соглашаетесь с условиями <a href="#">Политика конфиденциальности</a></span></p></div>
                </div>
            </div>
        <?php
    }
}

if ( ! function_exists( 'hook_head_code' ) ) {

    add_filter('wp_body_open', 'hook_head_code');
    /**
     * Display Hooks Head Code
     */
    function hook_head_code() {}
}

if ( ! function_exists( 'google_analytics' ) ) {
    add_filter('wp_head', 'google_analytics');
    function google_analytics() {
        // echo get_field( 'google_analytics_solutions', 'option' );
    }
}
if ( ! function_exists( 'yandex_metrika' ) ) {
    add_filter('wp_footer', 'yandex_metrika');
    function yandex_metrika() {
        // echo get_field( 'yandex_metrika', 'option' );
    }
}