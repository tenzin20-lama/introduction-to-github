<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
    
        p {
            font-style: normal; /* Makes the text italic */
            color: black; /* Sets the font color to black */
            font-size: 15px; /* Adjust the size of the font */
            line-height: 1.6; /* Optional: Adjusts line spacing for better readability */
        }
        
        </style>
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>               
                <li><a href="registar.php">Registar</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="feedback.php">feedback</a></li>
                <li><a href="search.php">search</a></li>
                <li><a href="contact.php">Contact</a></li>
                
                
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="about-head" class="section-p1">
        <div>
            <h2>A little about us</h2>
            <p>A online shopping site where users can browse, compare, and purchase a wide range of products or services.
                 These websites are designed to replicate the experience of shopping in a physical store, offering categories, search functions, and 
                 filters to help users find specific items. Examples of shopping sites include Amazon, eBay, and local e-commerce platforms, which 
                 cater to diverse customer needs by showcasing products ranging from electronics and clothing to groceries and handmade crafts.

                Shopping sites serve multiple purposes for both buyers and sellers. For customers, they provide convenience by allowing purchases from the comfort of their homes, often with delivery options to further ease the process. Additionally, many sites offer reviews, ratings, and detailed descriptions, helping users make informed decisions. 
                For sellers, these platforms provide a global marketplace, enabling them to reach a broader audience, showcase their inventory, and expand their businesses without needing a physical storefront.
                
                These platforms are helpful because they save time, often offer competitive prices, and provide access to a wider variety of products than a typical local store might. Features like discounts, secure payment methods, and customer support enhance user trust and satisfaction. Furthermore, shopping sites empower small businesses to compete in a larger market, promoting economic growth and fostering innovation in various industries.

            </p>


            <br><br>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Adidas shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <button onclick="addToCart('Adidas shirt', 30)">Add to Cart</button>     
                   </div>

            <div class="pro">
                    <img src="img/products/f2.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Adidas jacket</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$60</h4>
                    </div>
                    <button onclick="addToCart('Adidas jacket', 60)">Add to Cart</button>     
                       </div>

                       <div class="pro">
                        <img src="img/products/f3.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Samba</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$100</h4>
                        </div>
                        <button onclick="addToCart('Samba', 100)">Add to Cart</button>     
                           </div>

                           <div class="pro">
                            <img src="img/products/f4.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Adidas pant</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$40</h4>
                            </div>
                            <button onclick="addToCart('Adidas pant', 40)">Add to Cart</button>     
                               </div>
        
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
       
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>aeropostale</span>
                    <h5>Jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$40</h4>
                </div>
                <button onclick="addToCart('Jeans', 40)">Add to Cart</button> 
            </div>
            
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Bomber jacket</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$40</h4>
                </div>
                <button onclick="addToCart('Bomber jacket', 50)">Add to Cart</button> 
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <button onclick="addToCart('Shirt', 20)">Add to Cart</button> 
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>timberland</span>
                    <h5>Boot</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$200</h4>
                </div>
                <button onclick="addToCart('Boot', 200)">Add to Cart</button> 
            </div>
       </div>     
    </section>

        <div class="copyright">
            <p>© Tenzin</p>
        </div>
    </footer>



    <script src="script.js"></script>
</body>

</html>