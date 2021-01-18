<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <div class="btn-group-vertical ml-auto" role="group" aria-label="">
                <div class="btn-group mr-3" role="group">
                    <a id="dropdownId" type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false"><i class="fas fa-user mr-2"></i><?php echo explode(" ",$admin[0]['name_a'])[count(explode(" ",$admin[0]['name_a']))-1];?></a>
                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="<?php echo constant("URL")."/server/page_item/profile.php"?>"><i class="fas fa-address-card mr-2"></i>Profile</a>
                        <a class="dropdown-item" href="<?php echo constant("URL")."/server/config/logout.php" ?>"><i class="fas fa-sign-out-alt mr-2"></i>LogOut</a>
                    </div>
                </div>
            </div>
</nav>