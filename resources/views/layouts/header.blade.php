<!-- Header Section Start -->
<header class="header">
    <a href="#" class="logo">
        <img src="{{asset('template/images/logo.png')}}" alt="logo">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icon">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" name="search" id="search-box" placeholder="search here">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-item-container">

        <!-- Cart Item Start -->

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="{{asset('template/images/cart-item-1.png')}}" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="{{asset('template/images/cart-item-2.png')}}" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$35.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="{{asset('template/images/cart-item-2.png')}}" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$19.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="{{asset('template/images/cart-item-4.png')}}" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$30.99/-</div>
            </div>
        </div>

        <!-- Cart Item End -->

        <a href="#" class="btn">checkout now</a>
    </div>
</header>
<!-- Header Section End -->