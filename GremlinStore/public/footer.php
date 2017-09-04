<div class="footer-w3l">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>About </h4>
                <p>We are a store specialized in selling clothes, jewelry, wallets, backpacks and other items for the geek community of the country.</p>
                <div class="social-icon">
                    <a href="https://www.facebook.com/miragecostarica/" target="_blank"><i class="icon"></i></a>
                    <a href="https://twitter.com/idkirina/status/904216132877512704" target="_blank"><i class="icon1"></i></a>
                    <a href="https://plus.google.com/100599157910818238425" target="_blank"><i class="icon2"></i></a>
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>My Account</h4>
                <ul>
                    <?php
                        if (!(session_status() != 2)) {
                            if (isset($_SESSION['UserEmail'])) {
                                echo '<li><a href="?controlador=Client&accion=logOut">Log out</a></li>';
                                echo '<li><a href="?controlador=Default&accion=updateClient">Update data</a></li>';
                            } else {
                                echo '<li><a href="?controlador=Default&accion=login">Log in</a></li>';
                                echo '<li><a href="?controlador=Default&accion=register">Sign in</a></li>';
                            }//Si existe la session, pone solo log out.
                        } else {
                            echo '<li><a href="?controlador=Default&accion=login">Log in</a></li>';
                            echo '<li><a href="?controlador=Default&accion=register">Sign in</a></li>';
                        }//Verifica si la session existe o no.
                    ?>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><a href="?controlador=Default&accion=index">Home</a></li>
                    <li><a href="?controlador=Product&accion=getProducts&type=All">Products</a></li>
                    <?php
                        if (!(session_status() != 2)) {
                            if (isset($_SESSION['UserEmail'])) {
                                echo '<li><a href="?controlador=Default&accion=mail">Mail Us</a></li>';
                            }
                        }//Verifica si la session existe o no.
                    ?>
                    
                </ul>
            </div>
            <div class="col-md-3 footer-grid foot">
                <h4>Contacts</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">MultiPlaza del Este, San José, Costa Rica.</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">+(506) 8805-35-58</a></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> gremlin_store2017@gmail.com</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; 2017 Gremlin Shop . All rights reserved |</a></p>
        </div>
        <div class="copy-right">
            <img src="public/images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="modal fade" id="popUpInfo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="public/images/notice.png" class="img-modal" alt="">                        
                    </div>
                    <div class="col-md-7 new-grid">
                        <p>Datos ingresados incorrectamente. Intente de nuevo!</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popUpError" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="public/images/error.png" class="img-modal" alt="">                        
                    </div>
                    <div class="col-md-7 new-grid">
                        <p>Se ha producido un error!<br>Intente de nuevo</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popUpExito" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="public/images/success.png" class="img-modal" alt="">                        
                    </div>
                    <div class="col-md-7 new-grid">
                        <p>Datos ingresados con éxito!</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popUpAdvertencia" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="public/images/warning.png" class="img-modal" alt="">                        
                    </div>
                    <div class="col-md-7 new-grid">
                        <p>Usuario ya existente!</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
