<?php include 'header1.php';?>
<title>HFHMR</title>
<?php include 'header2.php';?>
<?php include 'menu.php';?>
    <main class="content">
      <div>
      <h1>Until further notice, the office will be open Monday-Friday, 12:30PM-4:00PM</h1>

      <div class="w3-content w3-display-container">
        <img class="mySlides fade" src="index_images/Hastings Group 2023.jpg" style="width:100%">
        <img class="mySlides fade" src="index_images/Hastings Windows 2023.jpg" style="width:100%">
        <img class="mySlides fade" src="index_images/Roof 2023 Hastings.jpg" style="width:100%">
        <!--<img class="mySlides fade" src="slides/img_forest.jpg" style="width:100%">-->

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095</button>

        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          <!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>-->

        </div>
      </div>
      </div>
      <div>
        <h2>Community Partnerships:<br>Building a Better Community Together</h2>
        <p>The Dickinson Area Community Foundation helped us to purchase a new tool trailer for our construction
          site. The trailer was wrapped in summer 2022, celebrating our partnership.
        </p>
        <p>Several organizations built with Habitat in 2022, below are volunteers from BOSS Snowplow (left) and 
          Maranatha Assembly of God Church (right), two of the many groups who volunteered their time and talent
          in 2022.
        </p>
        <div class="flex-parent">
          <div class="flex-child-element">
            <img src="index_images/BOSS Snowplow.jpg" alt="BOSS Snowplow">
          </div>
          <div class="flex-child-element">
            <img src="index_images/Maranatha Aug 2022.jpg" alt="Maranatha Aug 2022">
          </div>
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