<?php include 'header1.php';?>
<title>Donate</title>
<?php include 'header2.php';?>
<?php include 'menu.php';?>

<main class="content">
    <div>
        <h1>Donating to HFHMR</h1>
        <p>Donations are critical in funding our mission of eliminating sub standard housing in our community. Every
            donation is used to help construct or repair houses for those in need.
        </p>
        <h2>Ways to Donate</h2>
    </div>
    <div class="grid-container">
        
        <div class="grid1">
            <h3>Sponsor an Event</h3>
            <p>Sponsoring our golf outing is both a great way to have your business advertised, as well as giving
                back to your community and helping our repair program to reach even more families. Click below to 
                learn more about how you can sponsor.
            </p>
            <a href="sponsor.php">Learn more...</a>
        </div>
        <div class="grid2">
            <h3>Give Online</h3>
            <p>We accept donations of all types and denominations. Every dollar donated goes directly to building a home,
                constructing a wheel chair ramp, or repairing a roof. You will change lives and improve our 
                community.
            </p>
            <form id="donate-form" action="https://www.paypal.com/cgi-ibn/webscr" method="post" target="_blank">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="HMVUHMS2RVLJL">
                <button id="donation-button" type="submit">Donate</button>
            </form>

        </div>
        <div class="grid3">
            <h3>Cars for Homes</h3>
            <p>We accept old vehicles as donations, as they can be used to create or repair a bathroom, a basement, 
                or a roof.
            </p>
            <a href="cars.php">Learn more...</a>

        </div>
        <div class="grid4">
            <h3>Many More!</h3>
            <p>We accept cards, cash, checks, and so much more. Click the button below to learn more about the 
                different ways you can donate.
            </p>
            <a href="other_donations.php">Learn more...</a>

        </div>
    </div>
</main>

<?php include 'footer.php';?>
<?php include 'closing.php';?>