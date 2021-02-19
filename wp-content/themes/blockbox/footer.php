<?php
global $redux_demo;
?>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-6">
                <ul class="footer__items justify-content-between">
                    <li data-micromodal-trigger="modal-2" class="footer__link">Information disclosure</li>
                    <li data-micromodal-trigger="modal-3" class="footer__link">legal information</li>
                    <li data-micromodal-trigger="modal-4" class="footer__link">Privacy Policy</li>
                </ul>
            </div>
            <div class="col-sm-8 col-md-3 offset-sm-2 offset-md-0 col-lg-3 offset-lg-3 ">
                <ul class="footer__social-network-icons justify-content-between">
                    <li class="footer__social-network-icon">
                        <?php if ($redux_demo['instlink']) { ?><a target="_blank"
                                                                  href="<?php echo $redux_demo['instlink'] ?>>"><i
                                        class="fa fa-instagram"></i></a> <?php } ?>
                    </li>
                    <li class="footer__social-network-icon">
                        <?php if ($redux_demo['twlink']) { ?><a target="_blank"
                                                                href="<?php echo $redux_demo['twlink'] ?>"><i
                                        class="fa fa-twitter"></i></a> <?php } ?>
                    </li>
                    <li class="footer__social-network-icon">
                        <?php if ($redux_demo['youlink']) { ?><a target="_blank"
                                                                 href="<?php echo $redux_demo['youlink'] ?>"><i
                                        class="fa fa-youtube"></i></a> <?php } ?>
                    </li>
                    <li class="footer__social-network-icon">
                        <?php if ($redux_demo['vklink']) { ?><a target="_blank"
                                                                href="<?php echo $redux_demo['vklink'] ?>"><i
                                        class="fa fa-vk"></i></a> <?php } ?>
                    </li>
                    <li class="footer__social-network-icon">
                        <?php if ($redux_demo['fblink']) { ?><a target="_blank"
                                                                href="<?php echo $redux_demo['fblink'] ?>"><i
                                        class="fa fa-facebook"></i></a> <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="develop row">
            <div class="col-sm-12 col-md-7 col-lg-6 text-md-left text-center">
                <h6><?php echo $redux_demo['copyright'] ?></h6>

            </div>
            <div class="col-sm-12 col-md-5 col-lg-6 text-md-right text-center">
                <p>Bank site development - New Site</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
             aria-describedby="modal-1-content">
            <div role="document">
                <header class="modal__header">
                    <h3 class="modal__title" id="modal-1-title">
                        log In
                    </h3>
                    <button class="modal__close" aria-label="Close modal" aria-controls="modal__container1"
                            data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    <input class='signUp-login' placeholder="login" type="text">
                    <input class='signUp-password' placeholder="password" type="text">
                    <input class='signUp-checkbox' type="checkbox"> remember Me
                </main>
                <footer class="modal__footer">
                    <button class="modal__btn modal__btn-primary">logIn</button>
                    <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Register
                    </button>
                </footer>
            </div>
        </div>
    </div>
</div>
<div class="modal micromodal-slide" id="modal-5" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
             aria-describedby="modal-1-content">
            <div role="document">
                <header class="modal__header">
                    <h3 class="modal__title" id="modal-1-title">
                        Early access
                    </h3>
                    <button class="modal__close" aria-label="Close modal" aria-controls="modal__container1"
                            data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    PLEASE TRY AGAIN LETTER
                    <footer class="modal__footer">
                        <button aria-label="Close modal" class="modal__btn modal__btn-primary">continue</button>
                        <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">close
                        </button>
                    </footer>
            </div>
        </div>
    </div>
</div>
<div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-2-title"
             aria-describedby="modal-2-content">
            <div role="document">
                <header class="modal__header">
                    <h3 class="modal__title" id="modal-2-title">
                        Information disclosure
                    </h3>
                    <button class="modal__close" aria-label="Close modal" aria-controls="modal__container1"
                            data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-2-content">
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                </main>
                <footer class="modal__footer">
                    <button aria-label="Close modal" class="modal__btn modal__btn-primary">continue</button>
                    <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">close
                    </button>
                </footer>
            </div>
        </div>
    </div>
</div>
<div class="modal micromodal-slide" id="modal-3" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
             aria-describedby="modal-1-content">
            <div role="document">
                <header class="modal__header">
                    <h3 class="modal__title" id="modal-1-title">
                        Legal information
                    </h3>
                    <button class="modal__close" aria-label="Close modal" aria-controls="modal__container1"
                            data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                </main>
                <footer class="modal__footer">
                    <button aria-label="Close modal" class="modal__btn modal__btn-primary">continue</button>
                    <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">close
                    </button>
                </footer>
            </div>
        </div>
    </div>
</div>
<div class="modal micromodal-slide" id="modal-4" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
             aria-describedby="modal-1-content">
            <div role="document">
                <header class="modal__header">
                    <h3 class="modal__title" id="modal-1-title">
                        Privacy Policy
                    </h3>
                    <button class="modal__close" aria-label="Close modal" aria-controls="modal__container1"
                            data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    Information disclosure is when an application fails to properly protect sensitive and confidential
                    information from parties that are not supposed to have access to the subject matter in normal
                    circumstances.
                    <footer class="modal__footer">
                        <button aria-label="Close modal" class="modal__btn modal__btn-primary">continue</button>
                        <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">close
                        </button>
                    </footer>
            </div>
        </div>
    </div>
</div>
<div class="menu-burger d-block d-lg-none">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'menuBurger',
        'menu_id' => 'burgerMenu',
        'container' => '',
        'menu_class'      => 'menu-burger__list'
    ));

    ?>
    <i type="checkbox" id="switch" name="theme1" class="changeTheme1 d-block d-lg-none fa fa-adjust"></i>

    <!--    <ul class="menu-burger__list">-->
<!--        <li class="menu-burger__item">-->
<!--            <i type="checkbox" id="switch" name="theme1" class="changeTheme1 d-block d-lg-none fa fa-adjust"></i>-->
<!--        </li>-->
<!--        <li class="menu-burger__item"><a href="blog.html">Why BlockBox</a></li>-->
<!--        <li class="menu-burger__item"><a href="blog.html">Solutions</a></li>-->
<!--        <li class="menu-burger__item"><a href="blog.html">Blog</a></li>-->
<!--        <li class="menu-burger__item"><a href="blog.html">Enterprise</a></li>-->
<!--        <li class="menu-burger__item"><a href="blog.html">Pricing</a></li>-->
<!--        <li class="menu-burger__item">-->
<!--            <button data-micromodal-trigger="modal-1">Sign up</button>-->
<!--        </li>-->
<!--    </ul>-->
</div>
<?php wp_footer(); ?>

</body>
</html>
