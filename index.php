<?php include 'header1.php';?>
<title>HFHMR</title>
<?php include 'header2.php';?>
<?php include 'menu.php';?>
    <main class="content">
      <div>
        <div class="container">
          <img src="index_images/Golfer Putting Small.jpg" style="width:50%">
          <h1>22nd Annual "Raise the Roof" Golf Outing</h1>
          <h2>May 31, 2024</h2>
          <h3>This year was a great turnout from the community, and everyone involved helped to raise over $14,000
            that will go towards funding our repair program to help families in need complete critical home repair
            projects. A huge thank you goes to all of our wonderful sponsors and volunteers who help to make 
            this event possible, and to all those who participated in the outing.  Without their support and 
            the support of the community, this event would not exist. <br>
            <p>Next year's event will be held May 29 at TimberStone Golf Course. See you on the course!</p>
          </h3>
          

          <div class="sponsor-ribbon">
          <div><h1>Title Sponsor</h1></div>
              <img src="index_images/Zonta-Club.jpg">
          </div>
          <div class="sponsor-ribbon">
          <div><h2>Roof Truss Sponsors</h2></div>
             <img src="index_images/AMS_Logo-resized.png">
             <img src="index_images/fnbt-resized.png">
             <img src="index_images/Trident-Logo-resized.png">
             <img src="index_images/GFL_Logo.png">
             <img src="index_images/Marshfield-resized.png">
             <img src="index_images/Nicolet-Bank.png">
             <img src="index_images/First-Bank.png">
          </div>
          <div class="sponsor-ribbon">
          <div><h3>Floor Sponsors</h3></div>
            <img src="index_images/blagec-bros.png">
            <img src="index_images/logomj.png" style="background-color: black">
          </div>
          <div class="sponsor-ribbon">
            <div><h3>Hammer Sponsors</h3></div>
              <img src="index_images/ReStore.jpg">
              <img src="index_images/Sandlot.png">
              <!--<img src="index_images/Results-Broadcasting.png">-->
          </div>
          <div class="sponsor-ribbon">
          <div><h3>Hole Sponsors</h3></div>
            <img src="index_images/41-Lumber-resized.png">
            <img src="index_images/precision technology logo.png" style="background-color: black">
            <!--<img src="index_images/Chris-Hanley-Agency.png">-->
            <img src="index_images/Carrie-Toretta-Partello.png">
            <img src="index_images/Superior-Title.png">
            <img src="index_images/Mastercraft-Machine.jpg">
          </div>
          <br>
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