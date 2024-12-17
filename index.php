<?php include 'header1.php';?>
<title>HFHMR</title>
<?php include 'header2.php';?>
<?php include 'menu.php';?>
    <main class="content">
      <div>
        <div class="box-border">
          <h2>Please do not park in the center of the dirt lot across from the ReStore</h2>
          <p>CJ Graphics owns the lot and kindly allows ReStore patrons to park on the edges of their lot,
            and have requested no parking in the center to allow for semi trucks to travel through.
          </p>
          <h3>Thank you for your understanding!</h3>
        </div>

      <div class="container">
        <h1>Interested in applying for a home?</h1>
        <h3>January 22nd, 2025<br>
        We will be holding a meeting at our office for families interested in learning more about our homeownership
          program.<br>
          113 S Milwaukee Avenue, Kingsford, MI 49802</h3>
        
      </div>
        

      <h1>Brownson Family House Dedication</h1>
      <div class="w3-content w3-display-container">
        <img class="mySlides fade" src="index_images/Brownson Dedication 1 Resize.jpg">
        <img class="mySlides fade" src="index_images/Brownson Dedication 2 Resize.jpg">
        <img class="mySlides fade" src="index_images/Brownson Dedication 3 Resize.jpg">
        <!--<img class="mySlides fade" src="index_images/Hastings Windows 2023.jpg" style="width:100%">
        <img class="mySlides fade" src="index_images/Roof 2023 Hastings.jpg" style="width:100%">-->

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095</button>

        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          <!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>-->

        </div>
      </div>
      <div class="container">
        <p class="body-font">We recently had a small dedication party for the Brownson family as they received a fully finished
          home. This is our 51st completed house and we are thrilled to have partnered with the Brownsons on this project,
          and we look forward to getting our next house completed.
        </p>
      </div>
      </div>
      <div style="padding-top: 3em; padding-bottom: 3em;">
        <h2>Community Partnerships:<br>Building a Better Community Together</h2>
        <p>The Dickinson Area Community Foundation helped us to purchase a new tool trailer for our construction
          site. The trailer was wrapped in summer 2022, celebrating our partnership.
        </p>
        <div style="text-align: center;"> 
          <img src="index_images/Tool trailer.jpg" style="width: 50%;">
        </div>
      </div>
    </main>
    <?php include 'footer.php';?> 
    <script>
      function openSearch() {
        var x = document.getElementById("mySearch");
        if (x.className === "search-container") {
          x.className += " responsive";
        } else {
          x.className = "search-container"
        }
      }
    </script>
      <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function currentDiv(n) {
          showDivs(slideIndex = n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          for (i=0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
          }
          x[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " w3-white";
        }
        </script>
  </body>

</html>