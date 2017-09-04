<?php
    include_once 'public/header.php';
?>

<script type="text/javascript">
    function registerClient(name, card, email, pass) {
        var parametros = {
            "name": name,
            "cardNumber": card,
            "email": email,
            "password": pass
        };
        $.ajax({
                    data: parametros,
                    url: '?controlador=Client&accion=registerClient',
                    type: 'POST',
                    beforeSend: function () {
                    },
                    success: function (response) {
                        $("#response").html(response);
                        if(response == 1){                            
                           $('#popUpExito').modal; 
                        }else{
                           $('#popUpAdvertencia').modal();
                        }
                    }
                });
    }//registerClientAjax
    
    function updateClientData(name, card, email, pass) {
        var parametros = {
            "name": name,
            "cardNumber": card,
            "email": email,
            "password": pass
        };
        $.ajax({
                    data: parametros,
                    url: '?controlador=Client&accion=updateClientData',
                    type: 'POST',
                    beforeSend: function () {
                    },
                    success: function (response) {
                        $("#response").html(response);
                        alert(response);
                    }
                });
    }//updateDataClient
</script>

<div class="content">
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <?php
                    if(isset($vars)){
                        if($vars == 1){
                            echo '<h3>Register</h3>';
                        }else{
                            echo '<h3>Change data</h3>';
                        }//$vars == ?
                    }//isset
                ?>
                <form method="post">
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input id="name" type="text" placeholder="Name" name="name" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="cardNumber" type="text" placeholder="Card Number" name="cardNumber" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input id="email" type="text" placeholder="Email" name="email" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="password" type="Password" placeholder="Password" name="password" required="">
                        <div class="clearfix"></div>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <?php
                        if(isset($vars)){
                            if($vars == 1){
                                $ajaxFunction = "registerClient($('#name').val(), $('#cardNumber').val(), $('#email').val(), $('#password').val());return false;";
                                echo '<input type="submit" href="javascript:;" value="Register" onclick="'.$ajaxFunction.'"/>';
                            }else{
                                $ajaxFunction = "updateClientData($('#name').val(), $('#cardNumber').val(), $('#email').val(), $('#password').val());return false;";
                                echo '<input type="submit" href="javascript:;" value="Register" onclick="'.$ajaxFunction.'"/>';
                            }//$vars == ?
                        }//isset
                    ?>
                    
                    </form>
            </div>
        </div>
    </div>
</div>

<?php
    include_once 'public/footer.php';
?>