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
                <input type="phone" placeholder="phone number" name="phone">
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

        <div class="address">
            <h3>Europe</h3>
            <p>GPR Dehler Limited<br />
                78 Pall Mall<br />
                London SW1Y 5ES<br />
                United Kingdom</p>

            <a class="tel" href="tel:+4402035444688">+44 (0)20 35444688</a>
            <a class="email" href="mailto:info.uk@gprdehler.com">info.uk@gprdehler.com</a>


        </div>
        <div class="address">
            <h3>Australasia</h3>
            <p>GPR Dehler Pty Ltd<br />
                3 Spring Street<br />
                Sydney NSW 2000<br />
                Australia</p>

            <a class="tel" href="tel:+610282494577">+61 (0)2 8249 4577</a>
            <a class="email" href="mailto:nfo.au@gprdehler.com">info.au@gprdehler.com</a>



        </div>
        <div class="address">
            <h3>North America</h3>
            <p>3333 Camino del Rio <br />
                South, Suite 110<br />
                San Diego CA 92108<br />
                United States of America </p>

            <a class="tel" href="tel:+4402035444688">+44(0)20 35444688</a>
            <a class="email" href="mailto:info.us@gprdehler.com">info.us@gprdehler.com</a>



        </div>


    </div>



</footer><!-- .site-footer -->


<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/site.js"></script>
<?php wp_footer(); ?>

</body>
</html>