<?php include 'header1.php';?>
<title>HFHMR</title>
<?php include 'header2.php';?>
<?php include 'menu.php';?>
    <main class="content">
      <div>
          <div class="w3-content w3-display-container">
            <img src="index_images/Flip it Forward Poster.jpg" style="width:100%">
            <img src="index_images/Flip it Forward Auction.jpg" style="width:100%">
        </div>
      
        

      <!--<div class="container">
        <h1>Interested in applying for a home?</h1>
        <h3>October 22, 2025<br>
        We will be holding a meeting at our office at 6:00 PM for families interested in learning more about our homeownership
          program.<br>
          113 S Milwaukee Avenue, Kingsford, MI 49802</h3>
      </div>-->

      <div class="container">
        <h2>ReStore Donation Dock Hours</h2>
        <h3>Tuesday: 10 AM &mdash; 3 PM</h3>
        <h3>Thursday: 10 AM &mdash; 3 PM</h3>
        <h3>Saturday: 10 AM &mdash; 1 PM</h3>
      </div>

      <!--<div class="container">
      <img src="index_images/Golfer Putting Small.jpg">
           <h1>23rd Annual "Raise the Roof" Golf Outing</h1>
           <h2>May 29, 2025 </h2>
           <h3>Our biggest fundraiser of the year is fast approaching! The golf outing will be held at
             TimberStone Golf Course again on Thursday May 29th. Each golfer will receive food and drink tickets
             for the TimberStone bar, drinks cart, and grill.  The registration fee also covers cart and 
             green fees, entry into a door prize raffle, and access to on-course games, including a Hole in One contest
             sponsored by Edwards Automotive. Click below to learn more, and to register for this great event. We can't 
             wait to see you on the course!
           </h3>
      </div>-->
            
      <h1>Habitat Home #52 Construction</h1>
      <div class="w3-content w3-display-container">
        <img class="mySlides fade" src="index_images/House 52 Groundbreaking Resize.jpg" style="width:100%">
        <img class="mySlides fade" src="index_images/House 52 Walls Resize.jpg" style="width:100%">
        <img class="mySlides fade" src="index_images/House 52 Construction Resize.jpg" style="width:100%">
        <img class="mySlides fade" src="index_images/Habitat Trailer Resize.jpg" style="width:100%">
        <!--<img class="mySlides fade" src="index_images/Roof 2023 Hastings.jpg" style="width:100%">-->

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095</button>

        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
          <!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>-->

        </div>
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