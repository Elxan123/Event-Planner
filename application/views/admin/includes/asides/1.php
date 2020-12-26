<!--   Admin's Panel-->
    <li>
        <a href="<?php echo base_url('dashboard')?>">
            <i class="ion-ios-gear-outline"></i>Dashboard
        </a>
    </li>
<li class="has-sub">
        <a class="js-arrow" href="#">
            <i class="ion-ios-home"></i>Cities
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="<?php echo base_url('cities')?>">Show Cities</a>
            </li>
            <li>
                <a href="<?php echo base_url('city_add')?>">Add</a>
            </li>
        </ul>
    </li>
<li class="has-sub">
        <a class="js-arrow" href="#">
            <i class="ion-ios-box"></i>Event Categories
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="<?php echo base_url('categories')?>">Show Categories</a>
            </li>
            <li>
                <a href="<?php echo base_url('category_add')?>">Add</a>
            </li>
        </ul>
    </li>
<li class="has-sub">
        <a class="js-arrow" href="#">
            <i class="ion-ios-toggle"></i>Services
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="<?php echo base_url('services')?>">Show Services</a>
            </li>
            <li>
                <a href="<?php echo base_url('service_add')?>">Add</a>
            </li>
        </ul>
    </li>
    <li class="has-sub">
        <a class="js-arrow" href="#">
            <i class="ion-ios-toggle"></i>Appeals
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="<?php echo base_url('estab_approve')?>">Establishers</a>
            </li>
            <li>
                <a href="<?php echo base_url('provider_approve')?>">Providers</a>
            </li>
        </ul>
    </li>

