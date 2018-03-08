  <div class="section" id="sec-social">                                               <!-- Start social -->
    <h4 class="white">Stay connected</h4>
    <button class="soc-icon" id="soc-facebook">Facebook</button>
    <button class="soc-icon" id="soc-twitter">Twitter</button>
    <button class="soc-icon" id="soc-youtube">YouTube</button>
    <button class="soc-icon" id="soc-instagram">Instagram</button>
  </div>                                                                              <!-- End social-->
  <!-- Footer section, contains languages, logo, support links, trademarks,
       and ESRB rating compliance. -->
  <div class="section" id="sec-footer">
    <select class="languages" id="foot-languages">
      <option value="german">Deutsch</option>
      <option selected = "selected" value="english-us">English (US)</option>
      <option value="english-eu">English (EU)</option>
      <option value="spanish-eu">Espa&ntilde;ol (EU)</option>
      <option value="spanish-al">Espa&ntilde;ol (AL)</option>
    </select>
    <div class="logo" id="foot-logo">BLIZZARD</div>
    <div class="bot-navigation">
      <div class="nav-item" id="foot-careers">Careers</div>
      <div class="nav-item" id="foot-about">About</div>
      <div class="nav-item support" id="foot-support">Support</div>
      <div class="nav-item" id="foot-press">Press</div>
      <div class="nav-item" id="foot-api">API</div>
    </div>
    <div class="legal" id="foot-copyright">
      ©2018 BLIZZARD ENTERTAINMENT, INC. ALL RIGHTS RESERVED. <br/>
      All trademarks referenced herein are the properties of their respective owners.
    </div>
    <div class="bot-navigation legal">
      <div class="nav-item" id="privacy">Privacy</div>
      <div class="nav-item" id="terms">Terms</div>
    </div>
    <div class="esrb">
      <img class="nav-item" id="esrb-privacy" src="<?= get_template_directory_uri() . "/assets/images/foot-esrb-privacy.jpg"?>" alt"ESRB Privacy Certification"/>
      <img class="nav-item" id="esrb-rating" src="<?= get_template_directory_uri() . "/assets/images/foot-esrb-rating.png"?>" alt="ESRB Rated T for Teen"/>
      <div class="nav-item" id="esrb-conditions">
        <div class="contains" id="blood" title="Depictions of blood.">Blood</div>
        <div class="contains" id="violence" title="Scenes invloving aggressive conflict. May contain bloodless dismemberment.">Violence</div>
        <div class="contains" id="tobacco" title="The consumption of tobacco products">Use of Tobacco</div>
        <div class="contains" id="interactions">Online Interactions Not <br/>Rated by the ESRB</div>
      </div>      <!-- End esrb conditions -->
    </div>      <!-- End esrb -->
  </div>                                                                              <!-- End footer -->
  <script src="<?= get_template_directory_uri()?>/assets/js/scripts.js"?>"></script>
</body>
</html>