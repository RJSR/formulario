<!DOCTYPE html>

<html>
<!-- TODO@RJSR Añadir cuadro por encima del resto de elementos -->

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="images/favicon.png" type="">
   <title>Escapate - Tu mejor agencia de viajes</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="home/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="home/css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="home/css/responsive.css" rel="stylesheet" />
</head>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      @include('home.header')
      @foreach($colors as $color)
      <div class="barracolor" style="left: 100px;">
         <div class="colores">
            <div class="box1"></div>
            <div class="box2"></div>
            <div class="box3"></div>
            <div class="box4"></div>
            <div class="box5"></div>
         </div>
      </div>

      <!-- @foreach($redes as $red) -->
      @include('home.redes')
      <!-- @endforeach -->
      @endforeach
      <!-- end header section -->
      <!-- slider section -->
      @include('home.slider')
      <!-- end slider section -->
   </div>
   <!-- services section -->
   @include('home.services')
   <!-- end services section -->

   <!-- arrival section -->
   <!-- <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/arrival-bg.png" alt="">
               </div>
               <div class="row">
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           #NewArrivals
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
                        Vitae fugiat laboriosam officia perferendis provident aliquid voluptatibus dolorem, fugit ullam sit earum id eaque nisi hic? Tenetur commodi, nisi rem vel, ea eaque ab ipsa, autem similique ex unde!
                     </p>
                     <a href="">
                     Shop Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
   <!-- end arrival section -->

   <!-- product section -->
   <!-- <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Men's Shirt
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Men's Shirt
                        </h5>
                        <h6>
                           $75
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p2.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Men's Shirt
                        </h5>
                        <h6>
                           $80
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p3.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Women's Dress
                        </h5>
                        <h6>
                           $68
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p4.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Women's Dress
                        </h5>
                        <h6>
                           $70
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p5.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Women's Dress
                        </h5>
                        <h6>
                           $75
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p6.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Women's Dress
                        </h5>
                        <h6>
                           $58
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p7.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Women's Dress
                        </h5>
                        <h6>
                           $80
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p8.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Men's Shirt
                        </h5>
                        <h6>
                           $65
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p9.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Men's Shirt
                        </h5>
                        <h6>
                           $65
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p10.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Men's Shirt
                        </h5>
                        <h6>
                           $65
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p11.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Men's Shirt
                        </h5>
                        <h6>
                           $65
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p12.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Women's Dress
                        </h5>
                        <h6>
                           $65
                        </h6>
                     </div>
                  </div>
               </div>
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section> -->
   <!-- end product section -->

   <!-- subscribe section -->
   <!-- <section class="subscribe_section">
         <div class="container-fuild">
            <div class="box">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                           <h3>Subscribe To Get Discount Offers</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <form action="">
                           <input type="email" placeholder="Enter your email">
                           <button>
                           subscribe
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
   <!-- end subscribe section -->
   <!-- client section -->
   <!-- <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Customer's Testimonial
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section> -->
   <!-- end client section -->
   <!-- footer start -->
   @include('home.footer')
   <!-- footer end -->
   <style>
      .barracolor {
         background-color: {{$color->bgcolor}};
         box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2);
      }

      .colores {
         float: right;
         position: relative;
         right: 9%;
         border: 2px solid;
         border-radius: 4px;
         margin-top: 5px;
         margin-bottom: 5px;
         overflow: hidden;
         width: 20%;
         display: flex;
      }

      .box1 {
         width: 100%;
         min-height: 42px;
         position: relative;
         display: flex;
         background-color: {{$color->maincolor}};

      }

      .box2 {
         width: 100%;
         min-height: 42px;
         position: relative;
         display: flex;
         background-color: {{$color->seccolor}};

      }

      .box3 {
         width: 100%;
         min-height: 42px;
         position: relative;
         display: flex;
         background-color: {{$color->thirdcolor}};

      }

      .box4 {
         width: 100%;
         min-height: 42px;
         position: relative;
         display: flex;
         background-color: {{$color->bgcolor}};

      }

      .box5 {
         width: 100%;
         min-height: 42px;
         position: relative;
         display: flex;
         background-color: {{$color->fontcolor}};

      }


   </style>
   <div class="cpy_">


      </p>
   </div>
   <!-- jQery -->
   <script src="home/js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="home/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="home/js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="home/js/custom.js"></script>
</body>

</html>