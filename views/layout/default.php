<script type="text/javascript" >    <?php echo $config['plugin_name']?>.load_main_menu();    <?php echo $config['plugin_name']?>.load_side_menu();</script><br clear="both" /><div id="stcontainer">    <div id="loading">Please Wait...</div>    <div id="page_margins">        <div id="page">            <div class="w98p mc b1px mh500">                <div class="bg_header_dash">                    <div class="float_left p10l p40t">                        <h1 class="upcase red_color"><b><?php echo $config['plugin_title'] ?></b></h1>                    </div>                    <div class="float_right">                        <div class="sub_tabs">                            <ul>                                <?php                                $functions = new stfunctions_3_0($config);                                $functions->generateSubTabs($config);                                ?>                            </ul>                        </div>                        <br clear="both" />                        <div align="right" style="float:right;width: 583px; padding-right: 10px; padding-top: 10px;">                            <div onclick="<?php echo $config['plugin_name'] ?>.toggleScreen()" class="togglescreen"></div>                            <p style="margin: 0"><?php echo $config['plugin_version_text']; ?></p>                        </div>                    </div>                    <div class="cb"></div>                </div>                <div id="tabs">                    <ul>                        <?php                        //var_dump($tabmenus);                        $child_menu = array();                        foreach ($tabmenus as $tabmenu_key => $tabmenu) {                            $have_child = '';                            $menu_child_key = array();                            if(is_array($tabmenu)){                                $menu_child_key = array_keys($tabmenu);                                unset ($menu_child_key[0]);                            }                            if ($current_action == $tabmenu_key || in_array($current_action, $menu_child_key)) {                                $current = 'class=\'current\'';                            }else                                $current = '';                            if (count($tabmenu) > 1) {                                $child_menu[$tabmenu_key] = $tabmenu;                                $tabmenu = $tabmenu['title'];                                $have_child = 'have_child';                            }                            echo "<li $current>                        <a class='$have_child' action=\"$tabmenu_key\" href=\"javascript:\" title=\"$tabmenu\"><span>$tabmenu</span></a>                        </li>"                            ;                        }                        ?>                    </ul>                </div>                <div class="w98p mc p20t p20b">                    <div id="side-nav" style="display: none" >                        <div class="w15p float_left bg_col_right1">                            <div class="w100p po">                                <div class="cham_left1"></div>                                <div class="cham_right1"></div>                            </div>                            <div class="w100p bgl">                                <div class="w100p bgr">                                    <div class="left_menu mc">                                        <?php                                        if (count($child_menu) > 0) {                                            foreach ($child_menu as $tabmenu_key => $tabmenu) {                                                echo "<ul id='$tabmenu_key' >";                                                foreach ($tabmenu as $key => $value) {                                                    if ($current_action == $key) {                                                    ?>                                                        <script type="text/javascript">                                                            <?php echo $config['plugin_name']?>.showSideMenu('<?php echo $current_action ?>');                                                        </script>                                                    <?php                                                    }                                                    $plugin_name = $config['plugin_name'];                                                    if(is_array($value)){                                                        $plugin_name = $value['plugin_name'];                                                        $value = $value['title'];                                                    }                                                    if ($current_action == $key) {                                                        $current = 'class=\'current\'';                                                    }else                                                        $current = '';                                                    if ($key != 'title')                                                        echo "<li $current>                                                            <a plugin_name=\"$plugin_name\" action=\"$key\" href=\"javascript:\" title=\"$value\">$value</a>                                                            </li>"                                                        ;                                                }                                                echo '</ul>';                                            }                                        }                                        ?>                                    </div>                                </div>                            </div>                            <div class="w100p bg_col_right_bot po">                                <div class="cham_left_bot"></div>                                <div class="cham_right_bot"></div>                            </div>                        </div>                    </div>                    <div id="inner_content" class="bg_col_right">                        <?php echo $content; ?>                        <input type="hidden" value="<?php echo $current_action?>" id="current_action" />                    </div>                    <div class="notification notification_success">                        <span></span>                        <div class="text">                            <p><strong></strong>                                 <span></span>                            </p>                        </div>                    </div>                    <div class="cb"></div>                </div>            </div>        </div>    </div>    <div id="dialog-confirm" style="display: none" ></div>    <div id="stExtra"> </div></div>