<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer>
    <div class=diamonds></div>
    <div class="contactUs">
        <div class="footer-form contact-form">
            <h3>Contact us</h3>
            <form>
                <input type="text" placeholder="fullname" name="fullName">
                <input type="email" placeholder="email address" name="email">
                <select>
                    <option value="" disabled selected>Type of enqury</option>
                    <option value="TEST">Test</option>
                </select>
                <button type="submit">Submit</button>
            </form>

        </div>
        <div class="footer-form newsletter-form">
            <h3>Newsletter</h3>
            <p>Lorum ipsum dolor sit consectertur adispising</p>
            <form>
                <input type="text" placeholder="fullname" name="fullName">
                <input type="email" placeholder="email address" name="email">
                <button type="submit">Submit</button>
            </form>


        </div>

        <div class="clearfix"></div>
        <div class="address">
            London
        </div>
        <div class="address">
            Sydney
        </div>
        <div class="address">
            San Diego
        </div>


    </div>



</footer><!-- .site-footer -->


<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/site.js"></script>
<?php wp_footer(); ?>

</body>
</html>