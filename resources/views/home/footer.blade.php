<footer class="foot">
@foreach($colors as $color)

    <div class="container">
  
        <div class="row" >

            <div class="col-md-10 fondo">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="80" src="images/logo.png" alt="#" /></a>
                    </div>
                    <div class="information_f"  >
                        @foreach($datos as $dato)
                        <p><strong>RIF:</strong> {{ $dato->rif }} </p>
                        <p><strong>DIRECCIÓN:</strong> {{ $dato->dirpais }}, Estado {{ $dato->diredo }} </p>
                        <p><strong>TELÉFONOS:</strong> {{ $dato->tlf1 }}, {{ $dato->tlf2 }} </p>
                        <p><strong>CORREOS:</strong> {{ $dato->correo1 }}, {{ $dato->correo2 }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- <div class="col-md-25">
                <div class="row">
                    <div class="col-md-15">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="widget_menu">
                                    <h3>Account</h3>
                                    <ul>
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">Shopping</a></li>
                                        <li><a href="#">Widget</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
        </div>
    </div>

    <style>
        .foot{
            background-color: {{$color->maincolor}};
            color: {{$color->fontcolor}}
            
        }
        .fondo{
            margin-left: 7%;
            display:inline-flex;
            justify-content: center;
            padding: 5%;
            background-color: {{$color->bgcolor}};
            
        }

    </style>
    @endforeach
</footer>