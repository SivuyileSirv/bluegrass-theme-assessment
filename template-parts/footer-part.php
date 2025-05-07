<div class="study-online__pattern study-online__pattern--top">
  <img src="<?php echo THEME_DIR_URI . '/assets/imgs/pattern-dark.png'; ?>" alt="Pattern" />
</div>

<footer class="footer">
  <div class="container">
    <!-- Top Section: Logo + Footer Columns -->
    <div class="footer__columns">
      <!-- Logo Column -->
      <div class="footer__column footer__column--logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo THEME_DIR_URI . '/assets/imgs/Rectangle.png'; ?>" alt="Rosebank College Logo" />
        </a>
      </div>

      <!-- Find a Qualification Column -->
      <div class="footer__column">
        <h5 class="footer__heading js-footer-toggle">Find a Qualification</h5>
        <hr class="footer__heading-divider" />
        <ul class="footer__list">
          <li><a class="footer__link" href="#">IIE Qualification</a></li>
          <li><a class="footer__link" href="#">Commerce</a></li>
          <li><a class="footer__link" href="#">Finance & Accounting</a></li>
          <li><a class="footer__link" href="#">Education</a></li>
          <li><a class="footer__link" href="#">Humanities & Social Science</a></li>
          <li><a class="footer__link" href="#">Communications Technology</a></li>
        </ul>
      </div>

      <!-- Admissions Column -->
      <div class="footer__column">
        <h5 class="footer__heading js-footer-toggle">Admissions</h5>
        <hr class="footer__heading-divider" />
        <ul class="footer__list">
          <li><a class="footer__link" href="#">Payment & Fees</a></li>
          <li><a class="footer__link" href="#">Application & Registration</a></li>
          <li><a class="footer__link" href="#">FAQ</a></li>
          <li><a class="footer__link" href="#">Information For Parents</a></li>
          <li><a class="footer__link" href="#">International Students</a></li>
        </ul>
      </div>

      <!-- Quick Links Column -->
      <div class="footer__column">
        <h5 class="footer__heading js-footer-toggle">Quick Links</h5>
        <hr class="footer__heading-divider" />
        <ul class="footer__list">
          <li><a class="footer__link" href="#">Study Online</a></li>
          <li><a class="footer__link" href="#">Why Choose Rosebank</a></li>
          <li><a class="footer__link" href="#">Meet The Faculty</a></li>
          <li><a class="footer__link" href="#">Careers</a></li>
          <li><a class="footer__link" href="#">Life at Rosebank College</a></li>
          <li><a class="footer__link" href="#">Blog</a></li>
          <li><a class="footer__link" href="#">Locations</a></li>
          <li><a class="footer__link" href="#">Accommodation</a></li>
        </ul>
      </div>

      <!-- Talk To Us Column -->
      <div class="footer__column">
        <h5 class="footer__heading js-footer-toggle">Talk To Us</h5>
        <hr class="footer__heading-divider" />
        <ul class="footer__list">
          <li><a class="footer__link" href="#">Contact Us</a></li>
          <li><a class="footer__link" href="#">Help Centre</a></li>
          <li><a class="footer__link" href="#">Tel: <span> 0861 253 276</span></a></li>
          <li><a class="footer__link" href="#">WhatsApp: <span> 087 240 6457</span></a></li>
          <li><a class="footer__link" href="#"><span>info@rosebankcollege.co.za</span></a></li>
        </ul>

        <!-- Tablet and Mobile Only Column -->
        <div class="footer__column footer__column--mobile-only">
          <ul class="footer__list">
            <li><a class="footer__link" href="#">Payment & Fees</a></li>
            <li><a class="footer__link" href="#">Student Portal</a></li>
            <li>
              <a class="footer__link" href="#">
                Study Online
                <?php include get_template_directory() . '/assets/icons/desk-top-icon.svg'; ?>
              </a>
            </li>
          </ul>

          <div class="footer__column--buttons">
            <a href="#" class="button button--alt">RC Assist</a>
            <a href="#" class="button">Enquire</a>
          </div>
        </div>

        <!-- Social Media Icons -->
        <div class="footer__socials">
          <a href="#" class="footer__social" aria-label="Facebook">
            <?php include get_template_directory() . '/assets/icons/facebook.svg'; ?>
          </a>
          <a href="#" class="footer__social" aria-label="Instagram">
            <?php include get_template_directory() . '/assets/icons/instagram.svg'; ?>
          </a>
          <a href="#" class="footer__social" aria-label="Twitter">
            <?php include get_template_directory() . '/assets/icons/twitter.svg'; ?>
          </a>
          <a href="#" class="footer__social" aria-label="TikTok">
            <?php include get_template_directory() . '/assets/icons/tiktok.svg'; ?>
          </a>
          <a href="#" class="footer__social" aria-label="LinkedIn">
            <?php include get_template_directory() . '/assets/icons/linkedin.svg'; ?>
          </a>
          <a href="#" class="footer__social" aria-label="YouTube">
            <?php include get_template_directory() . '/assets/icons/youtube.svg'; ?>
          </a>
          <a href="#" class="footer__social" aria-label="WhatsApp">
            <?php include get_template_directory() . '/assets/icons/whatsapp.svg'; ?>
          </a>
        </div>

      </div>
    </div>

    <!-- Divider -->
    <hr class="footer__divider" />

    <!-- Middle Section: Disclaimer -->
    <div class="footer__disclaimers">
      <div class="footer__disclaimer">
        <p>
          Rosebank College is an educational brand of The Independent Institute of Education (Pty) Ltd which is
          registered with the Department of Higher Education and Training as a private higher education institution
          under the Higher Education Act, 1997 (reg. no. 2007/HE07/0022). Company registration number: 1987/004754/07.
        </p>
      </div>
      <div class="footer__disclaimer">
        <p>
          The Independent Institute of Education’s official prospectus is available on <span><a class="footer__link"
              href="#">www.iie.ac.za</a></span> and on the library webpage. Information in this prospectus takes precedence over other programme and qualification information provided.
        </p>
      </div>
    </div>

    <!-- Bottom Section: Copyright -->
    <div class="footer__bottom container">
      <p>
        <span class="copyright-text">&copy; <?php echo date('Y'); ?> IIE Rosebank College.</span>
        <a class="footer__link" href="#">Terms &amp; Conditions</a>
        <a class="footer__link" href="#">Privacy Policy</a>
        <a class="footer__link" href="#">PAIA</a>
      </p>
    </div>

  </div>
</footer>