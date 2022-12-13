<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package light
 */

get_header();
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <main id="primary" class="site-main">
        <div class="wrapper">
            <section id="main">
                <div class="container">
                    <div class="main-block">
                           <?php echo get_field("main_title")?>
                       <div class="under-light">
                           <?php echo get_field("main_subtitle")?>
                       </div>
                       <div class="photo">
                           <img src="<?php echo get_field("circle_img")?>">
                       </div>
                       <div class="black">
                            <img src="<?php echo get_field("black_circle_application")?>">
                        </div>
                        <div class="txt-krug">
                            <?php echo get_field("txt_application")?>
                        </div>
                        <div class="phone">
                            <img src="<?php echo get_field("phone_application")?>">
                        </div>
                        <div class="zapis">
                            <?php echo get_field("txt_phone")?>
                        </div>
                        <hr>
                        <div class="btn">
                            <a href ="#" class="cons">Получить консультацию</a>
                        </div>
                    </div>
                    <div class="main-block_img ibg">
                           <img src="<?php echo get_field("fon_img")?>">
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="container">
                    <div class="about">
                        <div class="left">
                            <div class="top">
                                <img src="<?php echo get_field("top_slider")?>">
                            </div>
                            <div class="bottom">
                                <img src="<?php echo get_field("bottom_slider")?>">
                            </div>
                            <div class="middle">
                                <img src="<?php echo get_field("middle_slider")?>">
                            </div>
                            <div class="sliders">
                                <div class="slider1"></div>
                                <div class="slider2"></div>
                                <div class="slider3"></div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="right-title">
                                <?php echo get_field("project_title")?>
                            </div>
                            <div class="right-subtitle">
                                <?php echo get_field("project_subtitle")?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="project">
                <div class="container">
                    <div class="project-1">
                        <div class="project-main">
                            <?php echo get_field("project_main")?>
                        </div>
                        <div class="blur-circle">
                        </div>
                        <div class="images">
                            <img src="<?php echo get_field("kart_first")?>">
                            <img src="<?php echo get_field("kart_second")?>">
                            <img src="<?php echo get_field("kart_third")?>">
                        </div>
                        <div class="all-project">
                            <div class="all-project-text">
                                <?php echo get_field("all_project")?>
                                <div class="all-project-circle-1">
                                    <div class="all-project-circle-2">
                                        <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.162354 2.5H6.83758M6.83758 2.5L5.40717 1.03979M6.83758 2.5L5.40717 3.96021" stroke="white"/>
                                        </svg>
                                    </div>  
                                </div> 
                            </div>           
                        </div>
                    </div>
                    <div class="project-2">
                        <div class="project-2-main">
                            <?php echo get_field("project2_main")?>
                        </div>
                        <div class="images_klient_right">
                            <img src="<?php echo get_field("klient_right")?>">
                        </div>
                        <div class="images_klient_left">
                            <img src="<?php echo get_field("klient_left")?>">
                        </div>
                        <div class="cards">
                            <div class="card_title">
                                <?php echo get_field("card_title")?>
                                <div class="card_subtitle">
                                    <?php echo get_field("card_subtitle")?>
                                </div>
                            </div>
                            <div class="card_title-2">
                                <?php echo get_field("card2_title")?>
                                    <div class="card_subtitle-2">
                                        <?php echo get_field("card2_subtitle")?>
                                    </div>
                            </div>
                            
                            <div class="card_title-3">
                                <?php echo get_field("card3_title")?>
                                    <div class="card_subtitle-3">
                                        <?php echo get_field("card3_subtitle")?>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="zayavka">
                <div class="zayavka">
                    <div class="container">
                        <div class="zayvka-title">
                            <?php echo get_field("zayavka_title")?>
                            <div class="zayavka-subtitle"> 
                                <?php echo get_field("zayavka_subtitle")?>
                            </div>
                        </div>
                        <img src="<?php echo get_field("img_zayavka")?>">
                        <div class="zayavka-block">
                            <div class="zayavka-photo">
                                <img src="<?php echo get_field("circle_img")?>">
                            </div>
                            <div class="zayavka-black">
                                <img src="<?php echo get_field("black_circle_application")?>">
                            </div>
                            <div class="zayavka-txt-krug">
                                <?php echo get_field("txt_application")?>
                            </div>
                            <div class="zayavka-phone">
                                <img src="<?php echo get_field("phone_application")?>">
                            </div>
                            <div class="zayavka-zapis">
                                <?php echo get_field("txt_phone")?>
                            </div>
                            <hr class="zayavka-hr">
                            <div class="zayavka-btn">
                                <a href ="#" class="zayavka-cons">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="steps">
                <div class="container">
                    <div class="steps-block">
                        <div class="steps-main">
                            <?php echo get_field("steps_title")?>
                        </div>
                        <div class="steps_left_img">
                            <img src="<?php echo get_field("steps_left_img")?>">
                        </div>
                        <div class="steps_right_img">
                            <img src="<?php echo get_field("steps_right_img")?>">
                        </div>
                        <div class="steps-cards">
                            <div class="steps-cards-1-title">
                                <h1>1</h1>
                                <div class="steps-cards-1-subtitle">
                                    <p class="steps-cards-txt">Оставьте заявку на сайте</p>
                                </div>
                                <div class="steps-blur-circle-1"></div>
                            </div>
                            <div class="steps-cards-2-title">
                                <h1>2</h1>
                                <div class="steps-cards-2-subtitle">
                                    <p class="steps-cards-txt">Получите квалифицированную консультацию от специалиста</p>
                                </div>
                                <div class="steps-blur-circle-2"></div>
                            </div>
                            <div class="steps-cards-3-title">
                                <h1>3</h1>
                                <div class="steps-cards-3-subtitle">
                                    <p class="steps-cards-txt">Выезжаем на объект для обсуждения нюансов</p>
                                </div>
                                <div class="steps-blur-circle-3"></div>
                            </div>
                            <div class="steps-cards-4-title">
                                <h1>4</h1>
                                <div class="steps-cards-4-subtitle">
                                    <p class="steps-cards-txt">Показываем визуализацию вашего проекта</p>
                                </div>
                                <div class="steps-blur-circle-4"></div>
                            </div>
                            <div class="steps-cards-5-title">
                                <h1>5</h1>
                                <div class="steps-cards-5-subtitle">
                                    <p class="steps-cards-txt">Выполняем работу</p>
                                </div>
                                <div class="steps-blur-circle-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="container">
                    <div class="contact">
                        <img src="<?php echo get_field("karta")?>">
                        <div class="contact-block">
                            <div class="contact-photo">
                                <img src="<?php echo get_field("circle_img")?>">
                            </div>
                            <div class="contact-black">
                                <img src="<?php echo get_field("black_circle_application")?>">
                            </div>
                            <div class="contact-txt-krug">
                                <?php echo get_field("txt_application")?>
                            </div>
                            <div class="contact-phone">
                                <img src="<?php echo get_field("phone_application")?>">
                            </div>
                            <div class="contact-zapis">
                                <?php echo get_field("txt_phone")?>
                            </div>
                            <hr class="contact-hr">
                            <div class="contact-btn">
                                <a href ="#" class="contact-cons">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                    <div class="metka">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M48.75 24.375C48.75 41.25 30 54.375 30 54.375C30 54.375 11.25 41.25 11.25 24.375C11.25 19.4022 13.2254 14.6331 16.7417 11.1167C20.2581 7.60044 25.0272 5.625 30 5.625C34.9728 5.625 39.7419 7.60044 43.2583 11.1167C46.7746 14.6331 48.75 19.4022 48.75 24.375V24.375Z" stroke="#FFA83E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M30 31.875C34.1421 31.875 37.5 28.5171 37.5 24.375C37.5 20.2329 34.1421 16.875 30 16.875C25.8579 16.875 22.5 20.2329 22.5 24.375C22.5 28.5171 25.8579 31.875 30 31.875Z" stroke="#FFA83E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                </div>
            </section>
        </div>
    </main><!-- #main -->

<?php
get_sidebar();
get_footer();