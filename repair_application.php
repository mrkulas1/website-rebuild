<?php include 'header.php';?>
<?php include 'menu.php';?>

<main class="content">
    <form id="repair_form" action="/repair_application.php" method="post">
        <label for="military">Has anyone in the household served in the military?</label>
        <input type="radio" id="mil_yes" name="is_military" value="Yes" required>
        <label for="mil_yes">Yes</label>
        <input type="radio" id="mil_no" name="is_military" value="No" required>
        <label for="mil_no">No</label><br>

        <label for="app_name">Applicant Name</label>
        <input type="text" id="app_name" name="app_name" required>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" required><br>

        <label for="co-app_name">Co-Applicant Name</label>
        <input type="text" id="co-app_name" name="co-app_name"><br>

        <label for="address">Applicant's Street Address</label>
        <input type="text" id="address" name="address" required><br>

        <label for="city">City</label>
        <input type="text" id="city" name="city" required><br>

        <label for="home-phone">Telephone (Home)</label>
        <input type="tel" id="home-phone" name="home-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        <label for="cell-phone">(Cell)</label>
        <input type="tel" id="cell-phone" name="cell-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>

        <label for="time-at-residence">How long have you lived at the above address?</label>
        <input type="text" id="time-at-residence" name="time-at-residence" required><br>
        
        <label for="ownership">Do you own your own home?</label>
        <input type="radio" id="own_yes" name="ownership" value="Yes" required>
        <label for="own_yes">Yes</label>
        <input type="radio" id="own_no" name="ownership" value="No" required>
        <label for="own_no">No</label><br>
        <label for="insurance">Do you have home insurance?</label>
        <input type="radio" id="ins_yes" name="insurance" value="Yes" required>
        <label for="ins_yes">Yes</label>
        <input type="radio" id="ins_no" name="insurance" value="No" required>
        <label for="ins_no">No</label><br>

        <label for="front-steps">Number of steps to main door</label>
        <input type="number" id="front-steps" name="front-steps" required><br>

          
        

    </form>
</main>
<?php include 'footer.php';?>