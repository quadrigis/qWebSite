<div class="topContainer">
    <div class="language">
        <?php
            if($lang == "pl"){
                echo '<img id="en" src="'.base_url().'system/img/flags/en2.png" alt="English" />';
                echo '<img id="pl" src="'.base_url().'system/img/flags/pl.png" alt="Polish" />';
            }else{
                echo '<img id="en" src="'.base_url().'system/img/flags/en.png" alt="English" />';
                echo '<img id="pl" src="'.base_url().'system/img/flags/pl2.png" alt="Polish" />';
            }
        ?>
    </div>
</div>

<div class="bodyContainer container">
    <div id="tabs">
        <ul class="topMenu">
            <?php
                foreach ($tabs as $tab){
                    echo  '<li><a href="#'.$tab->klucz.'">'.$tab->wartosc.'</a></li>';
                }
            ?>
        </ul>
        <?php
            foreach ($tabs as $tab){
                echo  '<div class="tabs" id="'.$tab->klucz.'" ></div>';
            }
        ?>
    </div>
</div>

<div class="banerContainer container">
    <? echo $struct['banerContainer']->wartosc; ?>
</div>
<div class="footerContainer container">
    <? echo $struct['footerContainer']->wartosc; ?> 
    <a id="policy">
        <? echo $struct['policy']->wartosc; ?>
    </a></div>

<div id="dialog" title="<? echo $struct['policy']->wartosc; ?>">
    <p><? echo $struct['policyText']->wartosc; ?></p>
</div>


<script src="<?php echo base_url(); ?>system/js/layout.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
    <?php
        echo 'language = "'.$lang.'";';
        foreach ($tabs as $tab){
            echo 'LoadTab("#'.$tab->klucz.'","'.base_url().'index.php/'.$tab->url.'");';
        }
        echo '$("#tabs").tabs("select", '.$sel.');';
    ?>
    });
</script>