@extends('layouts.main')

@section('css')

<link rel="stylesheet" href="{{asset('template/css/style.css')}}">
<link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">

@endsection

@section('content')

<!-- Home Section Start -->
<section class="home" id="home">

    <div class="content">
        <h3>fresh coffee in the morning</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae repellendus minus, maxime error tenetur cupiditate.</p>
        <a href="#" class="btn">get yours now</a>
    </div>
    
</section>
<!-- Home Section End -->

<!-- About Section Start -->
<section class="about" id="about">
    <h1 class="heading"><span>about </span>us</h1>
    <div class="row">

        <div class="image">
            <img src="{{asset('template/images/about-img.jpeg')}}" alt="">
        </div>

        <div class="content">
            <h3>what makes our coffee special?</h3>
            <p>Voluptatibus minus fugiat veritatis? Voluptatem laboriosam temporibus hic alias beatae, molestiae obcaecati maxime similique, optio soluta delectus architecto, repellat dicta deserunt facilis. Consequuntur, facilis animi labore quis repellat dolorum corrupti optio nemo.</p>
            <p>Temporibus sunt quae itaque obcaecati commodi nihil expedita eum aspernatur cum. Autem, optio dolorum! Deserunt, hic est quaerat voluptatibus exercitationem ab maiores.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>
</section>
<!-- About Section End -->

<!-- Menu Section Start -->
<section class="menu" id="menu">
    <h1 class="heading">out <span>menu</span></h1>
    <div class="box-container">

        <!-- Menu Item Start -->

        <div class="box">
            <img src="{{asset('template/images/menu-1.png')}}" alt="">
            <h3>testy and healty</h3>
            <div class="price">$15.99 <span>$20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="{{asset('template/images/menu-2.png')}}" alt="">
            <h3>testy and healty</h3>
            <div class="price">$35.99 <span>$40.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="{{asset('template/images/menu-3.png')}}" alt="">
            <h3>testy and healty</h3>
            <div class="price">$25.99 <span>$30.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="{{asset('template/images/menu-4.png')}}" alt="">
            <h3>testy and healty</h3>
            <div class="price">$10.99 <span>$15.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="{{asset('template/images/menu-5.png')}}" alt="">
            <h3>testy and healty</h3>
            <div class="price">$18.99 <span>$20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="{{asset('template/images/menu-6.png')}}" alt="">
            <h3>testy and healty</h3>
            <div class="price">$40.99 <span>$60.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <!-- Menu Item End -->
    </div>
</section>
<!-- Menu Section End -->

<!-- products Section Start -->
<section class="products" id="products">
    <h1 class="heading">Our <span>Products</span></h1>
    <div class="box-container">

        <!-- Products Item Start -->

        <div class="box"> <!-- Products Item 1 Start -->
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>

            <div class="image">
                <img src="{{asset('template/images/product-1.png')}}" alt="">
            </div>
            <div class="content">
                <h3>fresh coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box"> <!-- Products Item 2 Start -->
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>

            <div class="image">
                <img src="{{asset('template/images/product-2.png')}}" alt="">
            </div>
            <div class="content">
                <h3>fresh coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box"> <!-- Products Item 3 Start -->
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>

            <div class="image">
                <img src="{{asset('template/images/product-2.png')}}" alt="">
            </div>
            <div class="content">
                <h3>fresh coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <!-- Products Item End -->
    </div>
</section>
<!-- products Section End -->

<!-- Review Section Start -->
<section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>
    <div class="box-container">

        <!-- User Review Start -->

        <div class="box"> <!-- User Review 1 Start -->
            <img src="{{asset('template/images/quote-img.png')}}" alt="" class="quote">
            <p>Repellat error sint ut vero quibusdam fugit at expedita consectetur eos cum laudantium libero iure tempora, ex ducimus mollitia in, consequuntur eligendi quaerat inventore. Dicta inventore nihil in nulla aut quis aperiam!</p>
            <img src="{{asset('template/images/pic-1.png')}}" alt="" class="user">
            <h3>Jhon doe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box"> <!-- User Review 2 Start -->
            <img src="{{asset('template/images/quote-img.png')}}" alt="" class="quote">
            <p>Repellat error sint ut vero quibusdam fugit at expedita consectetur eos cum laudantium libero iure tempora, ex ducimus mollitia in, consequuntur eligendi quaerat inventore. Dicta inventore nihil in nulla aut quis aperiam!</p>
            <img src="{{asset('template/images/pic-2.png')}}" alt="" class="user">
            <h3>Jhon doe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box"> <!-- User Review 3 Start -->
            <img src="{{asset('template/images/quote-img.png')}}" alt="" class="quote">
            <p>Repellat error sint ut vero quibusdam fugit at expedita consectetur eos cum laudantium libero iure tempora, ex ducimus mollitia in, consequuntur eligendi quaerat inventore. Dicta inventore nihil in nulla aut quis aperiam!</p>
            <img src="{{asset('template/images/pic-3.png')}}" alt="" class="user">
            <h3>Jhon doe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <!-- User Review Start -->
    </div>
</section>
<!-- Review Section End -->

<!-- Blog Section Start -->
<section class="blogs" id="blogs">
    <h1 class="heading">Our<span> Blogs</span></h1>
    <div class="box-container">

        <!-- Blogs Item Start -->
        <div class="box"> <!-- Blogs Item 1 Start -->
            <div class="image">
                <img src="{{asset('template/images/blog-1.jpeg')}}" alt="">
            </div>
            <div class="content">
                <a class="title" href="#">testy and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Quia rem accusamus hic non in ullam repellat animi quibusdam.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box"> <!-- Blogs Item 2 Start -->
            <div class="image">
                <img src="{{asset('template/images/blog-2.jpeg')}}" alt="">
            </div>
            <div class="content">
                <a class="title" href="#">testy and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Quia rem accusamus hic non in ullam repellat animi quibusdam.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box"> <!-- Blogs Item 3 Start -->
            <div class="image">
                <img src="{{asset('template/images/blog-3.jpeg')}}" alt="">
            </div>
            <div class="content">
                <a class="title" href="#">testy and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Quia rem accusamus hic non in ullam repellat animi quibusdam.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>


    </div>
</section>
<!-- Blog Section End -->

<!-- Contact Section Start -->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3453867361704!2d90.34906611483312!3d23.770712193917333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1057143a1a9%3A0x78dee797bba36bc2!2sTrust%20IT%20Service%20(SEO%20%26%20Freelancing%20Training%20Center)!5e0!3m2!1sen!2sbd!4v1639503660466!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        <form action="" method="">
            <h3>get in touch</h3>
            <div class="inputbox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Enter Full Name">
            </div>
            <div class="grid">
                <div class="inputbox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Enter Email">
                </div>
                <div class="inputbox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Enter Phone Number">
                </div>
            </div>
            <div class="inputbox">
                <textarea name="" id="" placeholder="Enter Massage"></textarea>
            </div>
            <input type="submit" class="btn" value="contact now">
        </form>
    </div>
</section>
<!-- Contact Section End -->

@endsection