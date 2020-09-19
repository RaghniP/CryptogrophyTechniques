<html>
<body>
<?php
include "head.php";
?>
    
    <div class="owl-carousel slide-one-item">
      
      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/cry.jpg'); " >
      
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">Welcome to cryptography</h1>  
              
            </div>
          </div>
        </div>

      </div>


    </div>
    
    <div class="site-section">
      <div class="block__73694 mb-2" id="services-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422" style="background-image: url('images/cry8.jpg');" data-aos="fade-right" data-aos-delay="">
            </div>

            

            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
              <h2 class="mb-3 text-black">INTRODUCTION</h2>
              <p>Cryptography or cryptology is the practice and study of techniques for secure communication in the presence of third parties called adversaries.</p>

              <p>Features Of Cryptography are as follows:</p>

              <ul class="ul-check primary list-unstyled mt-5">
                <li>Confidentiality</li>
                <li>Integrity</li>
                <li>Non-repudiation</li>
                <li>Authentication</li>
              </ul>

              
            </div>

          </div>
        </div>      
      </div>


      <div class="block__73694">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/cry0.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>

            

            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-3 text-black">TYPES</h2>
              <p>Cryptography is technique of securing information and communications through use of codes so that only those person for whom the information is intended can understand it and process it. Thus preventing unauthorized access to information. The prefix “crypt” means “hidden” and suffix graphy means “writing”.</p>

              <p>In general there are three types Of cryptography:</p>

              <ul class="ul-check primary list-unstyled mt-5">
                <li>Symmetric Key Cryptography</li>
                <li>Hash Functions</li>
                <li>Asymmetric Key Cryptography</li>
              
              </ul>

            </div>

          </div>
        </div>      
      </div>
    </div>

   

    <section class="site-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
            
            </div>
          </div> 
        </div>
        
        <div class="row site-section" id="about-section">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">About</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">what is Caesar cipher?</h3>
            <p>The Caesar cipher is one of the earliest known and simplest ciphers. It is a type of substitution cipher in which each letter in the plaintext is 'shifted' a certain number of places down the alphabet.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What is vigenere cipher?</h3>
              <p>Vigenere Cipher is a method of encrypting alphabetic text. It uses a simple form of polyalphabetic substitution. A polyalphabetic cipher is any cipher based on substitution, using multiple substitution alphabets .</p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">what is hill cipher?</h3>
            <p>Hill cipher is a polygraphic substitution cipher based on linear algebra.Each letter is represented by a number modulo 26.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What is one time padding?</h3>
              <p>In cryptography, the one-time pad (OTP) is an encryption technique that cannot be cracked, but requires the use of a one-time pre-shared key the same size as, or longer than, the message being sent. In this technique, a plaintext is paired with a random secret key.</p>
            </div>
          </div>
          <div class="col-lg-6">

            
          </div>
        </div>
      </div>
    </section>



    <!-- one -->

    <section class="site-section bg-light" >
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
            
            </div>
          </div> 
        </div>
        
        <div class="row site-section" id="ceasar">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">Ceaser Cipher</h2>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-lg-6"> -->
          <!-- <a href="1.php" class="nav-link">ceaser cipher</a> -->
          <form onsubmit="return false;"  method="post">
    
    <label for="plain">TEXT:</label><br>
    <input type="text" oninput="this.value = this.value.toLowerCase()" id="c_plain" name="plain" /><br>
    <label for="key" >KEY:</label><br>
    <input type="text" id="c_key" name="key" /><br>
    <!-- <label for="key">Cipher text:</label><br> -->
    <!-- <input type="text" id="key" name="key" value=<?php?> /><br> -->
    <input type="submit" onclick="c_encrypt()" id="encrypt" name="cipher" value="encrypt" />
    <input type="submit" onclick="c_decrypt()" id="decrypt" name="cipher" value="decrypt" />
    <br>

    <h3 id="c_cry" style="text-transform: lowercase;"></h3>
</form>
           
        <!-- </div> -->
      </div>
    </section>


    <!-- two -->
    <section class="site-section bg-light" >
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
            
            </div>
          </div> 
        </div>
        
        <div class="row site-section" id="veginere">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">veginere cipher</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
          <form onsubmit="return false;"  method="post">
    
    <label for="plain">TEXT:</label><br>
    <input type="text" oninput="this.value = this.value.toLowerCase()" id="v_plain" name="plain" /><br>
    <label for="key" >KEY:</label><br>
    <input type="text" oninput="this.value = this.value.toLowerCase()" id="v_key" name="key" /><br>
    <!-- <label for="key">Cipher text:</label><br> -->
    <!-- <input type="text" id="key" name="key" value=<?php?> /><br> -->
    <input type="submit" onclick="v_encrypt()" id="encrypt" name="cipher" value="encrypt" />
    <input type="submit" onclick="v_decrypt()" id="decrypt" name="cipher" value="decrypt" />
    <br>

    <h3 id="v_cry" style="text-transform: lowercase;"></h3>
</form>
           
        </div>
      </div>
    </section>

    <!-- three -->
 
    <section class="site-section bg-light" >
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
            
            </div>
          </div> 
        </div>
        
        <div class="row site-section" id="hill">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">hill cipher</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            
          <form onsubmit="return false;"  method="post">
    
            <label for="plain" >TEXT:</label><br>
            <input type="text" oninput="this.value = this.value.toLowerCase()" id="h_plain" name="plain" /><br>
            <label for="key">KEY:</label><br>
            <table>
              <tr>
              <td><input type="text" name="k1" id="k1" maxlength="2" size="1" value = ""></td>
              <td><input type="text" name="k2" id="k2" maxlength="2" size="1" value = ""></td>
              <td><input type="text" name="k3" id="k3" maxlength="2" size="1" value = ""></td></tr>
              <tr>
              <td><input type="text" name="k4" id="k4" maxlength="2" size="1" value = ""></td>
              <td><input type="text" name="k5" id="k5" maxlength="2" size="1" value = ""></td>
              <td><input type="text" name="k6" id="k6" maxlength="2" size="1" value = ""></td></tr>
              <tr>
              <td><input type="text" name="k7" id="k7" maxlength="2" size="1" value = ""></td>
              <td><input type="text" name="k8" id="k8" maxlength="2" size="1" value = ""></td>
              <td><input type="text" name="k9" id="k9" maxlength="2" size="1" value = ""></td>
              </tr>
            </table><br>
            <!-- <label for="key">Cipher text:</label><br> -->
            <!-- <input type="text" id="key" name="key" value=<?php?> /><br> -->
            <input type="submit" onclick="h_encrypt()" id="encrypt" name="cipher" value="encrypt" />
            <input type="submit" onclick="h_decrypt()" id="decrypt" name="cipher" value="decrypt" />
            <br>

            <h3 id="h_cry" style="text-transform: lowercase;"></h3>
        </form>

        </div>
      </div>
    </section>
    <!-- four -->
    <section class="site-section bg-light" >
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
            
            </div>
          </div> 
        </div>
        
        <div class="row site-section" id="otp">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">one time padding</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
          <form onsubmit="return false;"  method="post">
    
    <label for="plain">TEXT:</label><br>
    <input type="text" oninput="this.value = this.value.toUpperCase()" id="o_plain" name="plain" /><br>
    <label for="key">KEY:</label><br>
    <input type="text" oninput="this.value = this.value.toUpperCase()" id="o_key" name="key" /><br>
    <!-- <label for="key">Cipher text:</label><br> -->
    <!-- <input type="text" id="key" name="key" value=<?php?> /><br> -->
    <input type="submit" onclick="o_encrypt()" id="encrypt" name="cipher" value="encrypt" />
    <input type="submit" onclick="o_decrypt()" id="decrypt" name="cipher" value="decrypt" />
    <br>

    <h3 id="o_cry" style="text-transform: uppercase;"></h3>
</form>
           
           
        </div>
      </div>
    </section>



















    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Our Team</h2>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/raghni.jpeg" alt="Image" class="img-fluid rounded-circle"> 
              </figure>
              <h3 class="font-size-20 text-black">RAGHNI P DALASAGERE</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">1AY17IS065</span>
            
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/raksh1.jpeg" alt="Image" class="img-fluid rounded-circle">  
              </figure>
              <h3 class="font-size-20 text-black">RAKSHITHA M JOGI</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">1AY17IS070</span>
          
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
              <img src="images/sanju.jpeg" alt="Image" class="img-fluid rounded-circle">  
              </figure>
              <h3 class="font-size-20 text-black">SANJANA B M</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">1AY17IS080</span>
           
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
              <img src="images/teju1.jpeg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">TEJASHIWINI S</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">1AY17IS106</span>
             
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  
  <script src="js/main.js"></script>
    <script>

      function c_encrypt() {
        $.post('phpscrypts.php',{c_encrypt: 'true', c_pt: $('#c_plain').val(), c_key: $('#c_key').val()},function(data,status){
          $('#c_cry').html(data);
        });
      }

      function c_decrypt() {
        $.post('phpscrypts.php',{c_decrypt: 'true', c_pt: $('#c_plain').val(), c_key: $('#c_key').val()},function(data,status){
          $('#c_cry').html(data);
        });
      }

      function v_encrypt() {
        $.post('phpscrypts.php',{v_encrypt: 'true', v_pt: $('#v_plain').val(), v_key: $('#v_key').val()},function(data,status){
          $('#v_cry').html(data);
        });
      }

      function v_decrypt() {
        $.post('phpscrypts.php',{v_decrypt: 'true', v_pt: $('#v_plain').val(), v_key: $('#v_key').val()},function(data,status){
          $('#v_cry').html(data);
        });
      }

      function o_encrypt() {
        $.post('phpscrypts.php',{o_encrypt: 'true', o_pt: $('#o_plain').val(), o_key: $('#o_key').val()},function(data,status){
          $('#o_cry').html(data);
        });
      }

      function o_decrypt() {
        $.post('phpscrypts.php',{o_decrypt: 'true', o_pt: $('#o_plain').val(), o_key: $('#o_key').val()},function(data,status){
          $('#o_cry').html(data);
        });
      }

      function h_encrypt() {
        $key=[];
        $key.push([$('#k1').val(),$('#k2').val(),$('#k3').val()]);
        $key.push([$('#k4').val(),$('#k5').val(),$('#k6').val()]);
        $key.push([$('#k7').val(),$('#k8').val(),$('#k9').val()]);
        $.post('phpscrypts.php',{h_encryption: 'true', message: $('#h_plain').val(),key:$key},function(data,status){
          $('#h_cry').html(data);
        });
      }



      function h_decrypt() {
        $key=[];
        $key.push([$('#k1').val(),$('#k2').val(),$('#k3').val()]);
        $key.push([$('#k4').val(),$('#k5').val(),$('#k6').val()]);
        $key.push([$('#k7').val(),$('#k8').val(),$('#k9').val()]);
        $.post('phpscrypts.php',{h_decryption: 'true', message: $('#h_plain').val(),key:$key},function(data,status){
          $('#h_cry').html(data);
        });
      }

    </script>
  </body>
</html>