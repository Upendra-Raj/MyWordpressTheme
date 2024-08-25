<?php
    // Add a wrapper around the main content
    get_header(); 
?>

<div class="site-wrapper">
    <div class="content-area">
        <!-- Your main content here -->
        <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    // Your loop content here
                endwhile;
            else :
                echo '<p>No content found</p>';
            endif;
        ?>
    </div>
    
    <footer class="site-footer">
        <div class="footer-section footer-summary">
            <h2>About Us</h2>
            <p>Welcome to our travel website, where we offer the best deals and insights for your next adventure. Explore destinations, book hotels, and enjoy your journey with us!</p>
        </div>

        <div class="footer-section footer-contact">
            <h2>Contact Us</h2>
            <p>Random Address<br>City, State, ZIP</p>
            <p>Email: info@yourwebsite.com</p>
            <p>Phone: +1 (234) 567-8901</p>
        </div>

        <div class="footer-section footer-links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
                <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                <li><a href="<?php echo esc_url(home_url('/gallery')); ?>">Gallery</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></li>
            </ul>
        </div>

        <div class="site-footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
