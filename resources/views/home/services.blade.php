<section class="why_section layout_padding">
@foreach($colors as $color)
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Servicios
               </h2>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                        <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        </svg> -->
                     </div>
                     <div class="detail-box">
                        <h5>
                           Confiabilidad
                        </h5>
                        <p>
                           variations of passages of Lorem Ipsum available
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                        <!-- <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
                           
                        </svg> -->
                     </div>
                     <div class="detail-box">
                        <h5>
                           Seguridad
                        </h5>
                        <p>
                           variations of passages of Lorem Ipsum available
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <!-- <svg id="_30_Premium" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" data-name="30_Premium">
                        </svg> -->
                     </div>
                     <div class="detail-box">
                        <h5>
                           Rapidez
                        </h5>
                        <p>
                           variations of passages of Lorem Ipsum available
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <style>
         .why_section {
            background-color: {{$color->bgcolor}};
            color: {{$color->fontcolor}};
            
        }

         .heading_container heading_center{
            color: {{$color->seccolor}};
         }
         
         .why_section .box {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            background-color: {{$color->maincolor}};
            color: {{$color->bgcolor}};

         }

         
    </style>
@endforeach
      </section>