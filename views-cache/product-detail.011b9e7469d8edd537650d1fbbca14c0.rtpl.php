<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2><?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <?php if( $error !== '' ){ ?>

                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        <?php } ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">

                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name"><?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                                <div class="product-inner-price">
                                    <ins>R$<?php echo formatPrice($product["vlprice"]); ?></ins>
                                </div>    
                                
                                <form action="/cart/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="qtd" min="1" step="1">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Comprar</button>
                                    <?php if( $inlist === false ){ ?>

                                        <?php if( $user ){ ?>

                                    <button class="add_to_cart_button" type="submit" formaction="/wishlist/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/save"><i class="fa fa-heart-o"></i></button>
                                        <?php }else{ ?>

                                    <button class="add_to_cart_button" type="submit" formaction="/login"><i class="fa fa-heart-o"></i></button>
                                        <?php } ?>

                                    <?php }else{ ?>

                                        <?php if( $user ){ ?>

                                    <button class="add_to_cart_button" type="submit" formaction="/wishlist/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $list, ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove"><i class="fa fa-heart"></i></button>
                                        <?php }else{ ?>

                                    <button class="add_to_cart_button" type="submit" formaction="/login"><i class="fa fa-heart"></i></button>
                                        <?php } ?>

                                    <?php } ?>

                                </form>
                                
                                <div class="product-inner-category">
                                    <p>Categorias:<?php $counter1=-1;  if( isset($categories) && ( is_array($categories) || $categories instanceof Traversable ) && sizeof($categories) ) foreach( $categories as $key1 => $value1 ){ $counter1++; ?> <a href="/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>.<?php } ?>

                                </div> 
                                
                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descrição</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Avalie</a></li>
                                        <li role="presentation"><a href="#review" aria-controls="profile" role="tab" data-toggle="tab">Avaliações</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Descrição do Produto</h2>  
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

                                            <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                                        </div>
                                        <div style="overflow: scroll; height: 250px" role="tabpanel" class="tab-pane fade" id="review">
                                            <h2>Avaliações dos Usuários</h2>
                                        <?php if( $aval !== null && $aval !== '' ){ ?>

                                            <?php $counter1=-1;  if( isset($aval) && ( is_array($aval) || $aval instanceof Traversable ) && sizeof($aval) ) foreach( $aval as $key1 => $value1 ){ $counter1++; ?>

                                            <p><label>nome:</label> <?php echo utf8_decode($value1["nome"]); ?></p>
                                            <p><label>email:</label> <?php echo utf8_decode($value1["email"]); ?></p>
                                            <p><label>mensagem:</label></p>
                                            <p><?php echo utf8_decode($value1["review"]); ?></p>
                                            <hr>
                                            <?php } ?>

                                            <?php }else{ ?>

                                            <p>Nenhuma avaliação disponivél!</p>
                                        <?php } ?>


                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <form action="/avail/<?php echo htmlspecialchars( $product["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
                                            <h2>Reviews</h2>
                                            <div class="submit-review">
                                                <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                <div class="rating-chooser">
                                                    <p>Your rating</p>

                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><label for="review">Your review</label> <textarea name="review" id="review" cols="30" rows="10"></textarea></p>
                                                <p><input type="submit" value="Submit"></p>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>                    
            </div>
        </div>
    </div>
</div>