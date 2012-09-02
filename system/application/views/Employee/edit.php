<div style="width: 600px; height: 400px;">
    <form action="">
        <div class="row">
            <?=  form_hidden("id",$model->id)?>
            <span class="span3 right">Login</span>
            <span class="span6">
                <?=form_input("login",$model->login, 'data-val-required="Login jest polem wymaganym" data-val="true"')?>
                <?=form_validationMessage("login")?>
            </span>
        </div>
        <div class="row">
            <span class="span3 right">Hasło</span>
            <span class="span6"><?=  form_password("password",$model->password
              , 'data-val-required="Hasło jest polem wymaganym" data-val="true"')?></span>
                <?=form_validationMessage("password")?>
        </div>
        <div class="row">
            <span class="span3 right">Imię</span>
            <span class="span6"><?=  form_input("firstName",$model->firstName)?></span>
        </div>
        <div class="row">
            <span class="span3 right">Nazwisko</span>
            <span class="span6"><?=form_input("lastName",$model->lastName)?></span>
        </div>
        <div class="row">
            <span class="span3 right">E-mail</span>
            <span class="span6"><?=form_input("email",$model->email, 'data-val-required="Email jest polem wymaganym" data-val="true"'
                .'data-val-regex-pattern="^[-!#$%&amp;&#39;*+/0-9=?A-Z^_a-z{|}~](\.?[-!#$%&amp;&#39;*+/0-9=?A-Z^_a-z{|}~])*@[a-zA-Z](-?[a-zA-Z0-9])*(\.[a-zA-Z](-?[a-zA-Z0-9])*)+$"'
                 .'data-val-regex="To nie jest adres e-mail" ')?></span>
                <?=form_validationMessage("email")?>
        </div>
        <div class="row">
            <span class="span3 right">Telefon</span>
            <span class="span6"><?=form_input("phone",$model->phone)?></span>
        </div>
        <div class="row">
            <span class="span3 right">Adres</span>
            <span class="span6"><?=form_input("adress",$model->adress)?></span>
        </div>
        <div class="row">
            <span class="span3 right">Administrator</span>
            <span class="span6"><?= form_dropdown("isAdmin",$yesNo,$model->isAdmin)?></span>
        </div>
    </form>
</div>