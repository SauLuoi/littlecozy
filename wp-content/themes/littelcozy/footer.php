<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<div class="l-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 border-left border-bottom py-5">
                <div class="f-logo">
                    <a href="">Little Cozy</a>
                    <div class="f-form">
                        <form action="#">
                            <input type="email" placeholder="your email">
                            <button class="btn btn-primary btn-send" type="submit">send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 border-left border-bottom py-5">
                <div class="f-contact">
                    <h2 class="heading-arvo">Little Cozy</h2>
                    <p>dohuonggiang1507@gmail.com</p>
                    <p>0352956182</p>
                </div>
            </div>
            <div class="col-md-6 line-container"></div>
            <div class="col-md-6 py-6 border-left">
                <div class="d-flex align-items-center justify-content-center f-text">
                    <h2 class="heading-arvo">dESIGN BY lITTLE cOZY</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    littlecozy.tk
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--slick-->
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
