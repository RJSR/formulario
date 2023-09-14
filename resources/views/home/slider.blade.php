<section class="slider_section ">
@foreach($colors as $color)
            <div class="slider_bg_box" id="Sliderbg">
                <div class="box"></div>
               <!-- <img src="images/slider-b.jpg"> -->
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                       ¡Viaja con nosotros!
                                    </span>
                                    <br>
                                    
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Escapate
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    ¡Viaja con nosotros!
                                    </span>
                                    <br>
                                    
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Escapate
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    ¡Viaja con nosotros!
                                    </span>
                                    <br>
                                    
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Escapate
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
      <style>
         .slider_section{
            background-color: {{$color->maincolor}};
            color: {{$color->bgcolor}};
            
         }
         .slider_section .detail-box h1 span {
            color: {{$color->thirdcolor}};
         }
         .slider_section .detail-box h1 {
            
            color: {{$color->thirdcolor}};
            
         }
         .slider_section .detail-box a {
            background-color: {{$color->thirdcolor}};
            color: {{$color->fontcolor}};
            border: 1px solid {{$color->thirdcolor}};
         }
         .slider_section .detail-box a:hover {
            color: {{$color->thirdcolor}};
         }
         .slider_section .carousel-indicators li.active {
            background-color: {{$color->thirdcolor}};            
         }
    </style>

@endforeach
</section>