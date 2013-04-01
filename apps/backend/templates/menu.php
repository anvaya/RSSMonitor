<div class="slim" id="blueBarHolder">
        <div id="blueBar" class=" fixed_elem slimHeader">
            <div id="headNav">
                <?php if($sf_user->isAuthenticated()):?>
                <ul id="pageNav" role="navigation">
                    <?php 
                            $menu_items = array(
                                                    "Home"=>array("@default","default","index"),
                                                    "Songs"=>array("@scan_song","scan_song","index"),                                                    
                                                    "Preferences"=>array("@setting","setting","index"),
                                                    "Logout"=>array("@sf_guard_signout","sf_guard_auth","signout")
                                                );
                    ?>  
                    <?php foreach($menu_items as $key=>$item):?>                        
                        <li class="topNavLink  middleLink">                        
                            <?php echo link_to(__($key), $item[0]); ?>
                        </li>
                    <?php endforeach;?>
                </ul>
                <?php endif;?>
            </div>
        </div>        
    </div>