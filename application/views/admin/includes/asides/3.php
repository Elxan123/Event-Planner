<!--Establisher's Panel-->
<li>
    <a class="active" href="<?php echo base_url("dashboard")?>">
        <i class="ion-ios-gear-outline"></i>Dashboard
    </a>
</li>



<li>
    <a href="<?php echo base_url("establishment/general-info")?>">
        <i class="ion-ios-copy-outline"></i>My Profile</a>
</li>


<li>
    <a href="db-messages.html">
    <i class="ion-ios-email-outline"></i>All Vendors</a>
    <span class="inbox-num pending">3</span>
</li>

<li>
    <a href="<?php echo base_url("establishment/gallery")?>">
        <i class="ion-images"></i>Gallery</a>
</li>

<li>
    <a href="<?php echo base_url("establishment/calendar")?>">
        <i class="ion-ios-calendar-outline"></i>Event Calendar</a>
</li>


<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="ion-ios-star-outline"></i>Reviews
    </a>
    <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="db-recieve-reviews.html">
                Recieved Reviews</a>
            <span class="inbox-num active">6</span>
        </li>
        <li>
            <a href="db-submit-reviews.html">
                Submitted reviews</a>
            <span class="inbox-num pending">8</span>
        </li>
    </ul>
</li>


<li>
    <a href="db-invoices.html">
        <i class="ion-ios-printer-outline"></i>Invoices</a>
</li>

