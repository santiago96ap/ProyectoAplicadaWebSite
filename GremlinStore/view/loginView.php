<?php
    include_once 'public/header.php';
?>

<script type="text/javascript">
    function loginVerify(email, pass) {
        var parametros = {
            "email": email,
            "password": pass
        };
        $.ajax({
                    data: parametros,
                    url: '?controlador=Client&accion=loginVerify',
                    type: 'POST',
                    beforeSend: function () {
                    },
                    success: function (response) {
                        var url;
                        if(response == 1){
                            $('#popUpExito').modal();
                            window.location.href="http://127.0.0.1:8080/GremlinStore/index.php?controlador=Client&accion=successLogin&email=" + email;                            
                        }else{
                            $('#popUpInfo').modal();
                        }
                    }
                });
    }//verifyLogin
</script>

<div class="content">
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Login To Gremlin Shop</h3>
                <form method="post">
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input id="email" type="text" placeholder="Email" name="email" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="password" type="password" placeholder="Password" name="password" required="">
                        <div class="clearfix"></div>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" href="javascript:;" value="Submit" onclick="loginVerify($('#email').val(), $('#password').val());return false;"/>
                </form>
            </div>
            <div class="forg">
                <a href="?controlador=Default&accion=register" class="forg-right">Register</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once 'public/footer.php';
?>