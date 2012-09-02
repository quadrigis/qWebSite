
<div id="loginForm">
    <h2>Logowanie</h2>
    <?php echo validation_errors('<p class="error">','</p>'); ?>
    <form id="form" action="">
        <input type="text" id="login" name="login" />
        <input type="password" id="password" name="password" />
        <input type="submit" id="btnLog" value="Zaloguj"/>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btnLog').button();
        $('#btnLog').click(function(){
            var data = $('#form').serialize();
            $.ajax({
                url: <?php echo "'".base_url()."index.php/Login/submit'"; ?>,
                type: "POST",
                data: data,
                success: function(data){
                    $('#bodyContainer').html(data);
                }
            });
            return false;
        });
    });
</script>