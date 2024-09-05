<?php include 'header1.php';?>
<title>HFHMR</title>
<?php include 'header2.php';?>
<?php include 'menu.php';?>
    <main class="content">
      <div>
        <div class="container">
          <img src="index_images/Habitat Detour.png" style="width:50%">
          <p>Until further notice, there is a detour in effect on Thursday, September 5 that will
            allow vehicles to reach Habitat due to the intersection being closed for construction.
            The detour takes J street east and turns right onto South Milwaukee through a parking lot
            before coming out by Eagle Tool. If you have any questions please call the office at 906-779-5377.
            Thank you for your patience!
          </p>
        </div>
        <div class="container">
          <img src="index_images/Habitat Celebration Invite (5).png" style="width:50%">
        </div>

      <h1>Cancer Closet Re-siding Project</h1>
      <div class="w3-content w3-display-container">
        <img class="mySlides fade" src="index_images/cancer-closet-siding-1.jpg">
        <img class="mySlides fade" src="index_images/cancer-closet-siding-2.jpg">
        <img class="mySlides fade" src="index_images/cancer-closet-siding-3.jpg">
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
        <p class="body-font">We recently partnered with the Dickinson County Cancer Unit Loan Closet to provide our expert 
          volunteers to re-side the outside of their building. We are proud to partner with such an important
          and impactful organization in our community.
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