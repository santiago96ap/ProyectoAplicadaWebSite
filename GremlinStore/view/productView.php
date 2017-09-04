<?php
include_once 'public/header.php';
?>

<div class="banner1">
    <div class="container">
        <h3><a href="index.html">Home</a> / <span>Single</span></h3>
    </div>
</div>
<div class="content">
    <div class="single-wl3">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-9 single-grid">
                    <div clas="single-top">
                        <div class="single-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php
                                        if (isset($vars)) {
                                            echo '<li data-thumb="public/images/p' . $vars . 'jpg">';
                                            echo '<div class="thumb-image"> <img src="public/images/p' . $vars . '.jpg" data-imagezoom="true" class="img-responsive"> </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="single-right simpleCart_shelfItem">';
                                                echo '<h4>Producto ' . $vars . '</h4>';
                                        }
                                    ?>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <p class="price item_price">$ 14.00</p>
                            <div class="description">
                                <p><span>Quick Overview : </span> In cursus faucibus tortor eu vestibulum. Ut eget turpis ac justo porta varius. Donec vel felis ante, ac vehicula ipsum. Quisque sed diam metus. Quisque eget leo sit amet erat varius rutrum vitae dapibus lectus. Vivamus et sapien ante. Suspendisse potenti. Fusce in tellus est, ac consequat.</p>
                            </div>
                            <div class="color-quality">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="women">
                                <span class="size">XL / XXL / S </span>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'public/footer.php';
?>

