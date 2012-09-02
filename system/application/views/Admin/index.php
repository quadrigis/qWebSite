
<input type="hidden" id="url" value="<?php echo base_url(); ?>"/>
<div class="topContainer">
    <a id="logout">Wyloguj</a> |
    <a id="view">Podgląd</a>
</div>
<div class="bodyContainer adminContainer container">
    <div class="message"></div>
    <div class="accordion">
        <h3><a>Słowniki</a></h3>
        <div id="dictionary"></div>
        <h3><a>Pracownicy</a></h3>
        <div id="employee"></div>
        <h3><a>Stanowiska</a></h3>
        <div id="job"></div>
        <h3><a>Aktualności</a></h3>
        <div id="news"></div>
    </div>
</div>

<div id="dialog"></div>

<div class="banerContainer container"></div>
<div class="footerContainer container"></div>

<script src="<?php echo base_url(); ?>system/js/Views/Admin.index.js" type="text/javascript"></script>

