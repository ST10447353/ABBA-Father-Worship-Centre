<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php

$verses = [

"Philippians 4:13 - I can do all things through Christ.",

"Jeremiah 29:11 - For I know the plans I have for you.",

"Psalm 23:1 - The Lord is my shepherd.",

"Proverbs 3:5 - Trust in the Lord with all your heart."

];

?>

<section class="cards">

    <div class="card">

        <h3>Total Members</h3>

        <p>150</p>

    </div>

    <div class="card">

        <h3>Events</h3>

        <p>8 Active Events</p>

    </div>

    <div class="card">

        <h3>Prayer Requests</h3>

        <p>25 Requests</p>

    </div>

    <div class="card">

    <h3>Daily Bible Verse ✨</h3>

   <p style="color:black;">
<?php echo $verses[array_rand($verses)]; ?>
</p>

</div>

</section>
<footer>

    <div class="footer-content">

        <h2>ABBA Father Worship Centre</h2>

        <p>
            A place of worship, faith and transformation.
        </p>

        <div class="socials">

<a href="https://www.facebook.com/share/1EWrwMpKPV/?mibextid=wwXIfr" target="_blank">
Facebook
</a>

<a href="https://www.tiktok.com/@prophet_oscar_moerane?_r=1&_t=ZS-97NiyqQIWb2" target="_blank">
TikTok
</a>

</div>

        <p class="copyright">
            © 2026 ABBA Father Worship Centre.
            All Rights Reserved.
        </p>

    </div>

</footer>
</body>
</html>