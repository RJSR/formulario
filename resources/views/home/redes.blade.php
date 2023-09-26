
<section >
   
   <nav class="redes" >
         <div class="cubes-grid">
            <a href="{{$red -> twitter}}" id="cube_tw">
               <div class="item">

                  <div class="cube">
                     
                     <div class="cube-face front x"></div>
                     <div class="cube-face back x"></div>
                     <div class="cube-face right x"></div>
                     <div class="cube-face left x"></div>
                     <div class="cube-face top x"></div>
                     
                  </div>
               </div>
            </a>
         </div>

         <div class="cubes-grid" id="cube_ig">
            <a href="{{$red -> ig}}">
               <div class="item">

                  <div class="cube">
                     
                     <div class="cube-face front ig"></div>
                     <div class="cube-face back ig"></div>
                     <div class="cube-face right ig"></div>
                     <div class="cube-face left ig"></div>
                     <div class="cube-face top ig"></div>
                     
                  </div>
               </div>
            </a>
         </div>
         <div class="cubes-grid" id="cube_fb">
            <a href="{{$red -> fb}}">
               <div class="item">

                  <div class="cube">
                     
                     <div class="cube-face front fb"></div>
                     <div class="cube-face back fb"></div>
                     <div class="cube-face right fb"></div>
                     <div class="cube-face left fb"></div>
                     <div class="cube-face top fb"></div>
                     
                  </div>
               </div>
            </a>
         </div>
    </nav>

    <style>
    .redes {
         width: 80px;
         z-index: 100;
         position: fixed;
         top: 40%;
         right: 0px;
         padding-bottom: 2%;
         border-radius: 4px 0 0 4px;
         display: flex;
         align-items: center;
         flex-direction: column;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
         background-color: {{$color->thirdcolor}};
         

      }

      :root {
         --w: 40px;
         --h: 40px;
         --start-pos: translateZ(-8rem) rotateX(330deg) rotateY(-45deg);
         --end-pos: translateZ(-8rem) rotateX(330deg) rotateY(855deg);
         --anim-duration: 350ms;
         --half-w: calc(var(--w) / 2);
         --half-h: calc(var(--h) / 2);
      }

      .item {
         width: var(--w);
         height: var(--h);
         
      }

      .cube {
        /* margin-top: 50%; */
        margin-block: 50%;
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transform: scale(0.9) var(--start-pos);
        transition: transform var(--anim-duration);

      }

      .item:hover .cube {
         transform: var(--end-pos) scale(1);
         
         
      }
      .item:hover .ig{
         background-color: #E1306C;
      }

      .cube-face {
         position: absolute;
         width: 100%;
         height: 100%;
         
         
      }

      .front {
         transform: rotateY(0deg) translateZ(var(--half-w));
         background-color: gainsboro;
         
      }

      .right {
         transform: rotateY(90deg) translateZ(var(--half-w));
         background-color: gainsboro;
      }

      .back {
         transform: rotateY(180deg) translateZ(var(--half-w));
         background-color: gainsboro;
      }

      .left {
         transform: rotateY(-90deg) translateZ(var(--half-w));
         background-color: gainsboro;
      }

      .top {
         width: var(--w);
         height: var(--w);
         transform: rotateX(90deg) translateZ(var(--half-w));
         background-color: gainsboro;
      }

      .front.ig, .right.ig, .left.ig, .back.ig{
         background-image: url('ig.png');
        
      }

      .ig{
        
        background-color: #C13584;
        
        
      }
      .front.x, .right.x, .left.x, .back.x{
        background-image: url('x.png');
        
        
      }
      .x{
         background-color: black;
      }
      
      .front.fb, .right.fb, .left.fb, .back.fb{
         background-image: url('fb.png');
        
      }

      .fb{
        
        background-color: #4267B2;
      }

   </style>

   <script>

      function vaciofb(x) {

         if (x === "") {
            document.getElementById("cube_fb").style.display = "none";
         } else {
            document.getElementById('cube_fb').style.display = 'block';
         }
      }
      vaciofb("{{$red->fb}}" );

      function vaciotw(x) {

         if (x === "") {
            document.getElementById("cube_tw").style.display = "none";
         } else {
            document.getElementById('cube_tw').style.display = 'block';
         }
      }
      vaciotw("{{$red->twitter}}" );

      function vacioig(x) {

         if (x === "") {
            document.getElementById("cube_ig").style.display = "none";
         } else {
            document.getElementById('cube_ig').style.display = 'block';
         }
      }
      vacioig("{{$red->ig}}" );

   </script>


</section>
