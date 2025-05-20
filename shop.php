<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    

    <link rel="stylesheet" href="style.css">
</head>

<body>
<style>

.cart-container {
    text-align: center; 
    margin: 20px auto; 
    max-width: 6000px; 
    padding: 20px;
    border: 1px solid #ddd; 
    border-radius: 8px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
}

#cartTable {
    width: 100%; 
    border-collapse: collapse; 
    margin-bottom: 20px; 
}

#cartTable th, #cartTable td {
    padding: 10px; 
    text-align: center; 
    border: 1px solid #ddd; 
}

#total {
    font-size: 1.2em; 
    font-weight: bold; 
    color: #333; 
}

</style>
<script>

    let cart = [];
    
    function addToCart(item, price) {
        var existingProduct = cart.find(function (product) {
            return product.item === item;
        });
    
        if (existingProduct) {
            existingProduct.quantity += 1;
            existingProduct.price += price; 
        } else {
        
            cart.push({ item: item, price: price, quantity: 1 });
        }
    
        updateCart();
    }
    
    function updateCart() {
        const cartItems = document.getElementById("cartItems");
        cartItems.innerHTML = "";
    
        let total = 0;
    
        for (let i = 0; i < cart.length; i++) { 
            const product = cart[i];
            const row = document.createElement("tr");
    
            const itemCell = document.createElement("td");
            itemCell.textContent = product.item;
            row.appendChild(itemCell);
    
            const priceCell = document.createElement("td");
            priceCell.textContent = `$${product.price.toFixed(2)}`;
            row.appendChild(priceCell);
    
            const actionsCell = document.createElement("td");
            const removeButton = document.createElement("button");
            removeButton.textContent = "Remove";
    
            removeButton.onclick = function() {
                removeFromCart(i);
            };
    
            actionsCell.appendChild(removeButton);
            
            row.appendChild(actionsCell);
    
            cartItems.appendChild(row);
    
            total += product.price;
        }
    
        document.getElementById("total").textContent = `Total: $${total.toFixed(2)}`;
    }
    
    function removeFromCart(index) {
        cart.splice(index, 1);
        updateCart();
    }
    </script>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="shop.html">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <section id="product1" class="section-p1">
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

            <div class="pro">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>nike</span>
                    <h5>Blazer</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <button onclick="addToCart(' Blazer', 100)">Add to Cart</button>  
            </div>

            <div class="pro">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>nike</span>
                    <h5>Nike pant</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$40</h4>
                </div>
                <button onclick="addToCart('Nike pant', 40)">Add to Cart</button>  
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>nike</span>
                    <h5>Nike shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <button onclick="addToCart('Nike shirt', 30)">Add to Cart</button> 
            </div>

            <div class="pro">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>nike</span>
                    <h5>Nike jacket</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$80</h4>
                </div>
                <button onclick="addToCart('Nike jacket', 80)">Add to Cart</button> 
            </div>

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
                    <h4>$50</h4>
                </div>
                <button onclick="addToCart('Bomber jacket', 50)">Add to Cart</button> 
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5> Shirt</h5>
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
            <div class="pro">
                <img src="img/products/n5.jpg" alt="">
                <div class="des">
                    <span>aeropostale</span>
                    <h5> Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$25</h4>
                </div>
                <button onclick="addToCart('Shirt', 25)">Add to Cart</button> 
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="">
                <div class="des">
                    <span>gap</span>
                    <h5>Short</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <button onclick="addToCart('Short', 20)">Add to Cart</button> 
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="">
                <div class="des">
                    <span>lids</span>
                    <h5>Cap</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <button onclick="addToCart('Cap', 30)">Add to Cart</button> 
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="">
                <div class="des">
                    <span>suede</span>
                    <h5>Loafer</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <button onclick="addToCart('Loafer', 50)">Add to Cart</button> 
            </div>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <div class="cart-container">
            <h2>Shopping Cart</h2>
            <table id="cartTable">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="cartItems"></tbody>
            </table>
            <div id="total">Total: $0.00</div>
        </div>
        
            <div class="copyright">
                <p>© Tenzin</p>
            </div>
        </div>
    </section>

   
    </footer>

</body>

</html>