<?php
    include_once 'public/header.php';
?>

<div class="content">
    <div class="products-agileinfo">
        <?php
            echo '<h2 class="tittle">'.$_GET['type'].' Products</h2>';
        ?>
        <div class="container">
            <div class="product-agileinfo-grids w3l">
                <div class="col-md-9 product-agileinfon-grid1 w3l">								
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
                            <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="public/images/menu1.png"></a></li>
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="public/images/menu.png"></a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div class="product-tab">
                                        <?php
                                            $i = 0;
                                            if(isset($vars)){
                                                for($i = 0; $i < count($vars); $i++){
                                                if($_GET['type'] != 'All'){
                                                    if (strpos($vars[$i]['category'], $_GET['type']) !== false){
                                                        echo '<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                                                        <div class="grid-arr">
                                                            <div class="grid-arrival">
                                                                <figure>		
                                                                    <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                        <div class="grid-img">
                                                                            <img src="'.$vars[$i]['path'].'" class="img-responsive" alt="">
                                                                        </div>		
                                                                    </a>		
                                                                </figure>	
                                                            </div>
                                                            <div class="block">
                                                                <div class="starbox small ghosting"> </div>
                                                            </div>
                                                            <div class="women">
                                                                <h6><a href="?controlador=Default&accion=product&product=5">'.$vars[$i]['name'].'</a></h6>
                                                                <p><em class="item_price">$'.$vars[$i]['priceS'].'</em></p>
                                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                        }//if strpos
                                                    }else{
                                                        echo '<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                                                        <div class="grid-arr">
                                                            <div class="grid-arrival">
                                                                <figure>		
                                                                    <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                        <div class="grid-img">
                                                                            <img src="'.$vars[$i]['path'].'" class="img-responsive" alt="">
                                                                        </div>		
                                                                    </a>		
                                                                </figure>	
                                                            </div>
                                                            <div class="block">
                                                                <div class="starbox small ghosting"> </div>
                                                            </div>
                                                            <div class="women">
                                                                <h6><a href="?controlador=Default&accion=product&product=5">'.$vars[$i]['name'].'</a></h6>
                                                                <p><em class="item_price">$'.$vars[$i]['priceS'].'</em></p>
                                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    }//else
                                                }//for                                                
                                            }//if isset
                                        ?>
                                </div>
                            </div>
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
