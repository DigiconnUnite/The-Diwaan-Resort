<!-- Elegant Footer Section - The Diwaan Restaurant -->
<footer class="main-footer" role="contentinfo">

    <!-- Main Footer Content -->
    <div class="footer-main">
        <div class="auto-container">

            <!-- Footer Brand Section -->
            <div class="footer-brand-section">
                <div class="brand-content d-flex">
                    <div class="logo-container">
                        <img src="images/diwaan-logo.png" alt="The Diwaan Restaurant" class="footer-logo">
                    </div>
                    <div class="brand-text">
                        <h3>The Diwaan Restaurant</h3>
                        <p class="tagline">Royal Indian Heritage • Agra's Premier Dining Destination</p>
                    </div>
                </div>
            </div>

            <!-- Footer Content Grid - 4 Column Layout -->
            <div class="footer-content">

                <!-- About Section -->
                <div class="footer-column">
                    <h5 class="column-title">About The Diwaan</h5>
                    <p class="column-text">
                        Experience the finest authentic North Indian, South Indian, and Mughlai cuisine in an elegant
                        atmosphere where traditional recipes meet modern culinary artistry.
                    </p>
                    <div class="social-media">
                        <h6>Follow Us</h6>
                        <div class="social-links">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-column">
                    <h5 class="column-title">Quick Links</h5>
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="menu.php">Our Menu</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer-column">
                    <h5 class="column-title">Quick Links</h5>
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="book-table.php">Book Table</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                            <li><a href="terms.php">Terms of Service</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Contact Information -->
                <div class="footer-column">
                    <h5 class="column-title">Contact Info</h5>
                    <div class="contact-list">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Fatehabad Rd, Kalal Kheria, Agra, Uttar Pradesh 282006</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+91-7838886804">+91 7838886804</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:thediwaan9@gmail.com">thediwaan9@gmail.com</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-content">
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> <span><a href="#">The Diwaan Restaurant</a></span>. All rights
                        reserved.</p>
                </div>
                <div class="bottom-links">
                    <a href="">Developed By <span>Digiconn Unite Pvt. Ltd.</span> </a>
                </div>
                <div class="specialties">
                    <span class="specialty-tag">Privacy Policy</span>
                    <span class="specialty-tag">Terms of Service</span>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Fixed Icon -->
    <div class="whatsapp-fixed d-flex flex-column justify-content-center align-items-center ">
        <a href="https://wa.me/917838886804" target="_blank" aria-label="Contact us on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <!-- <span class=" ">Chat with us</span> -->
    </div>

</footer>

<style>
    /* === THE DIWAAN RESTAURANT FOOTER - CLEAN & MODERN === */

    .main-footer {
        background: var(--color-one);
        position: relative;
        overflow: hidden;
        font-family: var(--font-family-Urbanist);
        border-top: 1px solid rgba(230, 177, 95, 0.5);
    }

    /* Subtle background pattern */
    .main-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 20%, rgba(230, 177, 95, 0.03) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(230, 177, 95, 0.03) 0%, transparent 50%);

        pointer-events: none;
        z-index: 1;
    }

    .main-footer>* {
        position: relative;
        z-index: 2;
    }

    /* Main Footer Section */
    .footer-main {
        padding: 0 0 50px 0;

        position: relative;
    }

    .footer-main::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 20%, rgba(63, 38, 0, 0.13) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(230, 177, 95, 0.03) 0%, transparent 50%);
        z-index: 1;
    }

    .footer-main .auto-container {
        position: relative;
        z-index: 2;
    }

    /* Brand Section */
    .footer-brand-section {
        text-align: center;
        margin-bottom: 50px;
        border-bottom: 1px solid rgba(230, 177, 95, 0.2);
    }

    .brand-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 20px;
    }

    .logo-container {
        position: relative;
        display: inline-block;
    }

    .footer-logo {
        height: 14rem;
        width: auto;
        filter: drop-shadow(0 0 15px rgba(230, 177, 95, 0.3));
        transition: all 0.3s ease;
    }

    .footer-logo:hover {
        transform: scale(1.05);
        filter: drop-shadow(0 0 25px rgba(230, 177, 95, 0.5));
    }

    .brand-text h3 {
        font-family: var(--font-family-Raunces);
        font-size: 2.2rem;
        text-align: start;
        font-weight: 700;
        color: var(--white-color);
        margin-bottom: 8px;
        background: linear-gradient(45deg, var(--white-color), var(--main-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .tagline {
        font-size: 0.95rem;
        color: var(--main-color);
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin: 0;
    }

    /* Footer Content Grid - 4 Column Layout */
    .footer-content {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 35px;
    }

    /* Footer Columns */
    .footer-column {
        text-align: left;
    }

    .column-title {
        color: var(--main-color);
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 8px;
    }

    .column-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 25px;
        height: 2px;
        background: var(--main-color);
    }

    .column-text {
        color: var(--color-three);
        line-height: 1.6;
        margin-bottom: 25px;
    }

    /* Social Media */
    .social-media h6 {
        color: var(--white-color);
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
    }

    .social-links {
        display: flex;
        gap: 12px;
    }

    .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(230, 177, 95, 0.3);
        border-radius: 50%;
        color: var(--white-color);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 15px;
    }

    .social-links a:hover {
        background: linear-gradient(135deg, var(--main-color), rgba(230, 177, 95, 0.8));
        color: var(--color-two);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(230, 177, 95, 0.4), 0 0 30px rgba(230, 177, 95, 0.6);
        border-color: var(--main-color);
    }

    /* Navigation */
    .footer-nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-nav li {
        margin-bottom: 10px;
    }

    .footer-nav a {
        color: var(--color-three);
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        padding-left: 0;
        display: inline-block;
    }

    .footer-nav a:hover {
        color: var(--main-color);
        padding-left: 15px;
    }

    .footer-nav a::before {
        content: '→';
        position: absolute;
        left: -12px;
        color: var(--main-color);
        opacity: 0;
        transition: all 0.3s ease;
        font-size: 10px;
    }

    .footer-nav a:hover::before {
        opacity: 1;
        left: 0;
    }

    /* Contact List */
    .contact-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .contact-item i {
        color: var(--main-color);
        font-size: 16px;
        width: 18px;
        margin-top: 2px;
        text-align: center;
    }

    .contact-item div {
        flex: 1;
    }

    .contact-item strong {
        color: var(--white-color);
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: block;
        margin-bottom: 3px;
    }

    .contact-item span,
    .contact-item a {
        color: var(--color-three);
        font-size: medium;
        line-height: 1.4;
        text-decoration: none;
        text-align: start;
        transition: color 0.3s ease;
    }

    .contact-item a:hover {
        color: var(--main-color);
    }

    /* Bottom Footer */
    .footer-bottom {
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.25) 0%, rgba(230, 177, 95, 0.05) 100%);
        padding: 25px 0;
        border-top: 1px solid rgba(230, 177, 95, 0.15);
        position: relative;
        overflow: hidden;
    }

    .footer-bottom::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 50% 50%, rgba(230, 177, 95, 0.05) 0%, transparent 60%);
        pointer-events: none;
    }

    .bottom-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .copyright p {
        color: var(--color-three);
        font-size: medium;
        margin: 0;
    }

    .copyright span {
        color: var(--main-color);
        font-weight: 600;
    }

    .copyright span a:hover {
        color: var(--main-color);
        font-weight: 600;
    }

    .bottom-links {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .bottom-links a {
        color: var(--color-three);
        text-decoration: none;
        font-size: medium;
        transition: color 0.3s ease;
    }

    .bottom-links span {
        color: var(--main-color);
        font-weight: 700;
    }

    .bottom-links span:hover {
        color: var(--main-color);
        font-weight: 700;
    }

    .bottom-links .separator {
        color: var(--main-color);
        font-size: 10px;
    }

    .specialties {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .specialty-tag {
        color: var(--color-three);
        font-size: smaller;
        font-weight: 500;
        padding: 4px 10px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(230, 177, 95, 0.2);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .specialty-tag:hover {
        color: var(--main-color);
        border-color: var(--main-color);
        background: linear-gradient(135deg, rgba(230, 177, 95, 0.1), rgba(230, 177, 95, 0.2));
        box-shadow: 0 0 15px rgba(230, 177, 95, 0.3);
    }

    /* === RESPONSIVE DESIGN === */

    @media (max-width: 1200px) {
        .footer-content {
            gap: 25px;
        }

        .newsletter-content {
            flex-direction: column;
            text-align: center;
            gap: 25px;
        }

        .newsletter-form .form-group {
            min-width: auto;
            width: 100%;
            max-width: 350px;
        }
    }

    @media (max-width: 992px) {
        .footer-content {
            grid-template-columns: repeat(2, 1fr);
            gap: 35px;
        }

        .footer-main {
            padding: 0 0 40px 0;
        }

        .bottom-content {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .specialties {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 35px;
        }

        .footer-brand-section {
            margin-bottom: 35px;
        }

        .brand-text h3 {
            font-size: 1.9rem;
        }

        .tagline {
            font-size: 0.85rem;
            text-align: center;
            padding-bottom: 4rem;
        }

        .newsletter-section {
            padding: 30px 0;
        }

        .newsletter-text h4 {
            font-size: 1.2rem;
        }

        .contact-item {
            flex-direction: column;
            text-align: center;
            gap: 8px;
        }

        .hour-item {
            flex-direction: column;
            gap: 4px;
            text-align: center;
        }

        .column-title {
            font-size: 1rem;
        }
    }

    /* === ACCESSIBILITY & PERFORMANCE === */

    @media (prefers-reduced-motion: reduce) {

        .footer-logo,
        .social-links a,
        .footer-nav a,
        .newsletter-btn,
        .newsletter-input,
        .specialty-tag {
            transition: none;
        }
    }

    /* Focus styles for keyboard navigation */
    .social-links a:focus,
    .footer-nav a:focus,
    .contact-item a:focus,
    .bottom-links a:focus,
    .newsletter-btn:focus,
    .newsletter-input:focus {
        outline: 2px solid var(--main-color);
        outline-offset: 2px;
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
        .main-footer {
            border: 1px solid var(--white-color);
        }

        .contact-item i,
        .specialty-tag {
            filter: brightness(1.5);
        }
    }

    /* WhatsApp Fixed Icon Styles */
    .whatsapp-fixed {
        position: fixed;
        bottom: 90px;
        /* Above scroll-to-top */
        right: 20px;
        z-index: 1000;
    }

    .whatsapp-fixed a {
        display: block;
        width: 60px;
        height: 60px;
        background: var(--main-color);
        border-radius: 50%;
        text-align: center;
        line-height: 60px;
        color: var(--color-two);
        font-size: 24px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .whatsapp-fixed a:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
    }

    .whatsapp-fixed a:focus {
        outline: 2px solid var(--main-color);
        outline-offset: 2px;
    }

    /* Responsive for mobile */
    @media (max-width: 768px) {
        .whatsapp-fixed {
            bottom: 80px;
            right: 15px;
        }

        .whatsapp-fixed a {
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 20px;
        }
    }
</style>