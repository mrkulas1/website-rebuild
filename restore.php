<?php include 'header.php';?>
<?php include 'menu.php';?>
<script type="text/javascript" src="openMenu.js"></script>
<main class="content">
    <h1 style="text-align: center;">ReStore</h1>
    <p>
        The ReStore works with volunteers and community residents to receive and resell 
        donations that generate funds to help the affiliate fulfill their mission of 
        improving neighborhoods and eliminating poverty housing in Dickinson County by 
        building simple decent homes and selling those homes to eligible families.
    </p>
    <div class="restore-grid-container">
      <div class="r1">
        <img src="restore_images/dressers.jpg" style="width: 100%;">
        </p>We sell inexpensive building and remodeling materials. Start here to learn what
            merchandise we have to offer.</p>
      </div>
      <div class="r2">
        <img src="restore_images/volunteerimage.gif" style="width: 100%;">
        <p>Volunteering is a great way to support Habitat's mission, meet interesting 
            people and learn new skills!</p>
      </div>
      <div class="r3">
        <img src="restore_images/restoretruck.jpg" style="width: 100%;">
        <p>The majority of the merchandise sold is from donations.
            Learn how you can help.</p>
      </div>
      <div class="r4">
        <a href="shop.php" target="_self">
          <button id="shop-button" type="button">
            <span>Shop</span>
          </button>
        </a>
      </div>
      <div class="r5">
        <a href="volunteer.php" target="_self">
          <button id="vol-button" type="button">
            <span>Volunteer</span>
          </button>
        </a>
      </div>
      <div class="r6">
        <a href="donate_restore.php" target="_self">
          <button id="donate-button" type="button">
            Donate
          </button>
        </a>
      </div>
    </div>

    <div id="location-container">
      <div id="location-text">
        Kingsford ReStore<br>
        113 S Milwaukee Ave<br>
        Kingsford, MI 49802<br>
        (906) 774-2867
      </div>
      <div id="location-map">
        <a href="https://www.google.com/maps/place/113+S+Milwaukee+Ave,+Kingsford,+MI+49802/@45.8082748,-88.066751,16z/data=!4m6!3m5!1s0x4d524c797106313f:0x5ce291963c1aec31!8m2!3d45.8077091!4d-88.0672824!16s%2Fg%2F11g9m2_pvp?entry=ttu" target="_blank">
          <img src="restore_images/kingsford-restore-map.png" style="height: 100%;">
        </a>
      </div>
    </div>
</main>

<?php include 'footer.php';?>

</body>

</html>