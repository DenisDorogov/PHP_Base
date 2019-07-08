<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
<!--    <script src="allPages.js"></script>-->
<!--    <script src="cart.js"></script>-->


</head>

<body>
<div class="container">
    <header class="header">
        <div class="container_header">
            <div class="header_l">
                <a class="header_l" href="index.html"><img src="img/logo.png" alt="Логотип"></a>
                <div class="header_l"><a href="index.html" class="textbrand">BRAN<span class="pink">D</span></a></div>
                <form class="header_l" action="#">
                    <div class="browse-button">
                        Browse&nbsp; <i class="fa fa-caret-down" aria-hidden="true"></i>
                        <div class="drop">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                            <div class="drop-title">MAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Tees/Tank tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Shirts/Polos</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweatshirts/Hoodies</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/vests</a></li>
                            </ul>
                        </div>
                    </div>
                    <input class="header_l" type="text" placeholder="Search for item...">
                    <button class="header_l"></button>
                </form>
            </div>
            <div class="header_r">
                <div class="cart-head">
                    <a class="header_r" href="cart.html"><img src="img/cart.svg" alt="Добавить в корзину"></a>
<!--------------------------------------------------------------------------------->
                    <div id="appcart">
                    <cartdrop class="drop-cart">
<!--                     <div class="drop-cart-item">
                            <img src="img/cart-item1.jpg" alt="item1">
                            <div class="item-about">
                                <h3 class="item-about-name">REBOX ZANE</h3>
                                <span class="item-about-span">
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true" style="color: #e4af48"></i>
                                    </span>
                                <p class="item-about-p">1 x $250</p>
                            </div>
                            <div class="cart-item-del"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                        </div>
                        <div class="drop-cart-item">
                            <div class="drop-cart-item">
                                <img src="img/cart-item2.jpg" alt="item2">
                                <div class="item-about">
                                    <h3 class="item-about-name">REBOX ZANE</h3>
                                    <span class="item-about-span">
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true" style="color: #e4af48"></i>
                                    </span>
                                    <p class="item-about-p">1 x $250</p>
                                </div>
                                <div class="cart-item-del"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="total-sum">
                            <div>TOTAL</div>
                            <div>$500.00</div>
                        </div>
                        <a href="checkout.html" class="button-checkout">CHECKOUT</a>
                        <a href="cart.html" class="button-checkout">GO TO CART</a> -->
                    
                    </div>
      </cartdrop>
<!--------------------------------------------------------------------------------->
                </div>
                <a href="account.html" class="header_r redbutton">My Account</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                <?php
                php include CONFIG_DIR . 'config.php';
                php include PUBLIC_DIR . 'account.php';
                
                
                ?>
            </div>
        </div>
    </header>
    <nav class="navigation">
        <div class="container_navigation">
            <ul class="menu">
                <li class="list-menu">
                    <a class="link-menu" href="index.html">HOME</a>
                    <div class="drop" style="top: 45px; left: -38px;">
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>
                </li>
                <li class="list-menu">
                    <a class="link-menu" href="catalog.html">MAN</a>
                    <div class="drop">
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>
                <li class="list-menu">
                    <a class="link-menu" href="catalog.html">WOMAN</a>
                    <div class="drop" style="top: 45px; left: -38px;">
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>
                <li class="list-menu">
                    <a class="link-menu" href="catalog.html">KIDS</a>
                    <div class="drop" style="top: 45px; left: -38px;">
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>
                <li class="list-menu">
                    <a class="link-menu" href="catalog.html">ACCOSERIESE</a>
                    <div class="drop" style="top: 45px; left: -38px;">
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>
                <li class="list-menu list-menu6">
                    <a class="link-menu" href="catalog.html">FEATURED</a>
                    <div class="drop" style="top: 45px; left: -38px;">
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>
                <li class="list-menu list-menu7">
                    <a class="link-menu" href="catalog.html">HOT DEALS</a>
                    <div class="drop">
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>
            </ul>
        </div>
    </nav>

    <nav class="arrivals">
        <div class="arrivals-cont">
            <h2 class="arrivals-name">NEW ARRIVALS</h2>
            <ul class="arrivals-menu">
                <li class="arrivals-crumbs"><a href="index.html">HOME</a></li>
                <li>/</li>
                <li class="arrivals-crumbs"><a href="catalog.html">MAN</a></li>
                <li>/</li>
                <li class="arrivals-crumbs"><a href="catalog.html">NEW ARRIVALS</a></li>
            </ul>
        </div>
    </nav>
    <div class="catalog-cont">
        <div class="panel-filter-side">
            <a href="catalog.html" class="filter-type">CATEGORY</a>
            <ul class="filter-list">
                <li><a href="single_page.html" class="filter-list">Accessories</a></li>
                <li><a href="single_page.html" class="filter-list">Bags</a></li>
                <li><a href="single_page.html" class="filter-list">Denim</a></li>
                <li><a href="single_page.html" class="filter-list">Hoodies & Sweatshirts</a></li>
                <li><a href="single_page.html" class="filter-list">Jackets & Coats</a></li>
                <li><a href="single_page.html" class="filter-list">Pants</a></li>
                <li><a href="single_page.html" class="filter-list">Polos</a></li>
                <li><a href="single_page.html" class="filter-list">Shirts</a></li>
                <li><a href="single_page.html" class="filter-list">Shoes</a></li>
                <li><a href="single_page.html" class="filter-list">Shorts</a></li>
                <li><a href="single_page.html" class="filter-list">Sweaters & Knits</a></li>
                <li><a href="single_page.html" class="filter-list">T-Shirts</a></li>
                <li><a href="single_page.html" class="filter-list">Tanks</a></li>
            </ul>
            <a href="catalog.html" class="filter-type">BRAND</a>
            <a href="catalog.html" class="filter-type">DESIGNER</a>
        </div>
        <div class="panel-catalog" id="app">
           
            
               <div class="panel-filter-top">
                <div class="trandingnow">
                    <h2>TRANDING NOW</h2>
                    <a href="#" class="filter-crumbs">Bohemian</a>
                    <p class="filter-crumbs">|</p>
                    <a href="#" class="filter-crumbs">Floral</a>
                    <p class="filter-crumbs">|</p>
                    <a href="#" class="filter-crumbs">Lace</a>
                    <p class="filter-crumbs">|</p>
                    <a href="#" class="filter-crumbs">Floral</a>
                    <p class="filter-crumbs">|</p>
                    <a href="#" class="filter-crumbs">Lace</a>
                    <p class="filter-crumbs">|</p>
                    <a href="#" class="filter-crumbs">Bohemial</a>
                    <p class="filter-crumbs">|</p>
                </div>
                <div class="filter-size">
                    <h2>SIZE</h2>
                    <input type="checkbox" id="size-XXS"><label for="size-XXS">XXS</label>
                    <input type="checkbox" id="size-XS"><label for="size-XS">XS</label>
                    <input type="checkbox" id="size-S"><label for="size-S">S</label>
                    <input type="checkbox" id="size-M"><label for="size-M">M</label>
                    <input type="checkbox" id="size-L"><label for="size-L">L</label>
                    <input type="checkbox" id="size-XL"><label for="size-XL">XL</label>
                    <input type="checkbox" id="size-XXL"><label for="size-XXL">XXL</label>
                </div>
                <div class="filter-price">
                    <h2>MAX PRICE</h2>
                    <form class="filter-form" oninput="pricemax.value=(filterPriceRange.value)" action="#">
                        <input id="filterPriceRange" type="range" min="0" max="200" step="5" value="200" v-model="priceRange"/>
                        <p>
                            <output name="pricemax" for="filter-Price-Range">200</output>
                        </p>
                    </form>
                </div>
                <form  method="get" class="panel-sort">
                    <label class="sortbye">Sort By
                        <select class="sortbye-select" v-model="sortBy">
                            <option value="title" >Name</option>
                            <option value="price">Price</option>
                        </select>
                    </label>
                    <label class="sortbye">Show
                        <select name="count" class="sortbye-select" v-model="countShowItems" value="<?=$count?>">
                            <option value="9">9</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                        </select>
                    </label>
                </form>
            </div>
      
      
           
           
            <div>
                <div class="items">
                   <?php 
                    include __DIR__.'/../public/goods.php'; 
                    foreach ($filteredGoods as $item): ?>
                    <div class="item">
                        <a href="<?=$item['urlSinglePage']?>"><img src="<?=$item['img']?>" alt="<?=$item['name']?>">
                            <div class="item-text">
                                <p><?=$item['name']?></p>
                                <h3><?=$item['price']?></h3>
                            </div>
                        </a><a href="#" class="add">Add to Card</a></div>
                        <?php endforeach ?>
                </div>       
                            
                                 
                                           
            
            </div>
          
            <div class="panel-catalog-lower">
                <div class="panel-catalog-pages">
                    <ul>
                        <li><a class="pages-num" href="#" @click.prevent=changePage(1)>1</a></li>
                        <li><a class="pages-num" href="#" @click.prevent=changePage(2)>2</a></li>
                        <li><a class="pages-num" href="#" @click.prevent=changePage(3)>3</a></li>
                        <li><a class="pages-num" href="#" @click.prevent=changePage(4)>4</a></li>
                        <li><a class="pages-num" href="#" @click.prevent=changePage(5)>5</a></li>
                        <li><a class="pages-num" href="#">6.....20</a></li>
                        <li><a class="pages-num" href="#"></a></li>
                    </ul>
                </div>
                <div class="panel-catalog-allButton"><p>View All</p></div>
            </div>
        </div>

    </div>

    <div class="banner2">

        <div class="banner2-cont">
            <div class="banner-block">
                <img src="img/Index-delivery.png" alt="Delivery" class="banner-index2">
                <div class="banner-text2">
                    <h3>Free Delivery</h3>
                    <p>Worldwide delivery on all. Autorit tively morph next-deneration innova tion with extensive
                        models.</p>
                </div>
            </div>
            <div class="banner-block">
                <img src="img/Index-Sales.png" alt="Sales" class="banner-index2">
                <div class="banner-text2">
                    <h3>Sales & Discounts</h3>
                    <p>Worldwide delivery on all. Autorit tively morph next-deneration innova tion with extensive
                        models.</p>
                </div>
            </div>
            <div class="banner-block">
                <img src="img/Index-Quality.png" alt="Quality" class="banner-index2">
                <div class="banner-text2">
                    <h3>Quality assurance</h3>
                    <p>Worldwide delivery on all. Autorit tively morph next-deneration innova tion with extensive
                        models.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="info-sbsr">
        <div class="info-sbsr-cont">
            <div class="info-sbsr-l">
                <aside><img class="face" src="img/face.png" alt="face"></aside>
                <div class="quotation">
                    <p>"Vestibilum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimetum a. Aliquam
                        condimentum mattis neque sed pretium"</p>
                    <h3>Bin Burhan</h3>
                    <h5>Dhaka, Bd</h5>
                    <img class="plank" src="img/plankwhite.jpg" alt="">
                    <img class="plank" src="img/plankpink.jpg" alt="">
                </div>

            </div>
            <div class="info-sbsr-r">
                <h2>subscribe</h2>
                <h3>for our newsletter and promoution</h3>
                <form action="#" class="sbsr-email">
                    <input class="sbsr-input" type="text" placeholder="Enter your E-mail">
                    <a href="#" class="sbsr-button">Subscribe</a>

                </form>
            </div>
        </div>
    </div>
    <div class="container-lower">
        <div class="about-brand">
            <div class="about-brand-logo">
                <a href="index.html"><img src="img/logo.png" alt="Логотип"></a>
                <div><a href="index.html" class="textbrand">BRAN<span class="pink">D</span></a></div>
            </div>
            <p>
                Objectively transition extencive data rather than cross functional solutions. Monotonectally syndicate
                multidisciplinary matherials before go&nbsp;forward benefits. Intrinsicly syndicate an&nbsp;explanded
                array of&nbsp;processes and cross-unit parthnerships.
            </p>
            <p>
                Efficiently plagiarize 24/365 action items and focuses infomediaries. Distinctively seize superior
                initiatives for wireless technologies. Dinamically optimize.
            </p>
        </div>
        <nav class="navi-bottom">
            <div>
                <h2>COMPANY</h2>
                <a href="index.html">Home</a>
                <a href="catalog.html">Shop</a>
                <a href="#">About</a>
                <a href="#">How it Works</a>
                <a href="#">Contact</a>
            </div>
            <div>
                <h2>INFORMATION</h2>
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">How to Bye</a>
                <a href="#">How to Sell</a>
                <a href="#">Promotion</a>
            </div>
            <div>
                <h2>SHOP CATEGORY</h2>
                <a href="catalog.html">Man</a>
                <a href="catalog.html">Women</a>
                <a href="catalog.html">Child</a>
                <a href="catalog.html">Apparel</a>
                <a href="catalog.html">Brows All</a>
            </div>
        </nav>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-left">&copy; 2019 Brand All Rights Reserved.</div>
            <div class="footer-right">
                <ul>
                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://www.pinterest.ru"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://plus.google.com/"><i class="fa fa-google-plus-square"
                                                              aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
      <script src="cart.js"></script>
    <script src="catalog.js"></script>  <!--  Подключили файл.-->
      
</div>


</body>

</html>