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
    <div class="footerbg hidden-xs hidden-sm">
        <div class="footbg">&nbsp;</div>
    </div>

    <div class="container contactUs">

        <div class="row">



            <div class="footer-form contact-form col-xs-12 col-sm-6 col-md-3">
                <h3>Contact us</h3>
                <form>
                    <input type="text" placeholder="fullname" name="fullName">
                    <input type="phone" placeholder="phone number" name="phone">
                    <input type="email" placeholder="email address" name="email">
                    <select>
                        <option value="" disabled selected>Type of enquiry</option>
                        <option value="Enquiry1">Enquiry 1</option>
                        <option value="Enquiry2">Enquiry 2</option>
                    </select>
                    <button type="submit">Submit</button>
                </form>

            </div>
            <div class="footer-form newsletter-form col-xs-12 col-sm-6 col-md-3">
                <h3>Newsletter</h3>
                <p>Lorum ipsum dolor sit consectertur adispising</p>
                <form>
                    <input type="text" placeholder="fullname" name="fullName">
                    <input type="email" placeholder="email address" name="email">
                    <button type="submit">Submit</button>
                </form>


            </div>


            <div class="col-xs-12 col-md-6">
                <div class="address col-xs-12 col-sm-4 col-md-4">
                    <h3>Europe</h3>
                    <p>GPR Dehler Limited<br />
                        78 Pall Mall<br />
                        London SW1Y 5ES<br />
                        United Kingdom</p>

                    <a class="tel" href="tel:+4402035444688">+44 (0)20 35444688</a>
                    <a class="email" href="mailto:info.uk@gprdehler.com">info.uk@gprdehler.com</a>


                </div>
                <div class="address col-xs-12 col-sm-4 col-md-4">
                    <h3>Australasia</h3>
                    <p>GPR Dehler Pty Ltd<br />
                        3 Spring Street<br />
                        Sydney NSW 2000<br />
                        Australia</p>

                    <a class="tel" href="tel:+610282494577">+61 (0)2 8249 4577</a>
                    <a class="email" href="mailto:nfo.au@gprdehler.com">info.au@gprdehler.com</a>

                </div>
                <div class="address col-xs-12 col-sm-4 col-md-4">
                    <h3>North America</h3>
                    <p>3333 Camino del Rio <br />
                        South, Suite 110<br />
                        San Diego CA 92108<br />
                        United States of America </p>

                    <a class="tel" href="tel:+4402035444688">+44(0)20 35444688</a>
                    <a class="email" href="mailto:info.us@gprdehler.com">info.us@gprdehler.com</a>

                </div>

            </div>
        </div>


    </div>
    <div class="finalBar">

        <div class="container">
            <?php

            $menu = array(
                'menu' => 'FooterMenu',
                'container' => 'div',
                'container_class' => 'footer-menu',
                'container_id' => 'footer-menu'
            );

            wp_nav_menu( $menu ); ?>


            <div class="copyright">
                &copy; <?php echo date('Y')?> GPR Dehler Pty Ltd
            </div>

        </div>


    </div>




</footer><!-- .site-footer -->

<script type="text/javascript" src="http://icarus.somethingbig.co.uk/s/7b377566a0817fde45d549e01b3c53b2-T/en_GB8ttp39/70119/b6b48b2829824b869586ac216d119363/2.0.8/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-GB&collectorId=83187286"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/site.js"></script>
<?php wp_footer(); ?>

</body>
</html>