<section>
    <nav class="redes">
         <div class="cubes-grid">
            <a href="https://www.x.com">
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
         <!-- <div style="margin-top: 20px;"></div> -->
         <div class="cubes-grid">
            <a href="https://www.x.com">
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
         <div class="cubes-grid">
            <a href="https://www.x.com">
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
         /* 	Set cube size */
         --w: 40px;
         --h: 40px;
         /* 	Other variables */
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
      /* a{
        pointer-events: none;
      } */

      .cube {
        /* margin-top: 50%; */
        margin-block: 50%;
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transform: scale(0.9) var(--start-pos);
        transition: transform var(--anim-duration);
        
        

         /* 	background-color: rgba(40, 40, 40, 0.1); */
      }

      .item:hover .cube {
         transform: var(--end-pos) scale(1);
      }

      .cube-face {
         position: absolute;
         width: 100%;
         height: 100%;
      }

      .front {
         transform: rotateY(0deg) translateZ(var(--half-w));
         background-color: gainsboro;
         /* background: linear-gradient( 122deg, rgba(232, 232, 237, 0.9) 0%, rgba(218, 218, 226, 0.9) 100%); */
      }

      .right {
         transform: rotateY(90deg) translateZ(var(--half-w));
         background-color: gainsboro;
         /* background: linear-gradient( 122deg, rgba(202, 204, 212, 0.9) 0%, rgba(199, 202, 213, 0.9) 100%); */
      }

      .back {
         transform: rotateY(180deg) translateZ(var(--half-w));
         background-color: gainsboro;
         /* background: linear-gradient( 122deg, rgba(199, 202, 213, 0.9) 0%, rgba(202, 204, 212, 0.9) 100%); */
      }

      .left {
         transform: rotateY(-90deg) translateZ(var(--half-w));
         background-color: gainsboro;
         /* background: linear-gradient( 122deg, rgba(218, 218, 226, 0.9) 0%, rgba(232, 232, 237, 0.9) 100%); */
      }

      .top {
         width: var(--w);
         height: var(--w);
         transform: rotateX(90deg) translateZ(var(--half-w));
         background-color: gainsboro;
         /* background: linear-gradient( 122deg, rgba(238, 239, 242, 0.9) 0%, rgba(231, 232, 236, 0.9) 100%); */
      }
      .ig{
        background-image: url('ig.png');
        background-color: white;
        
      }
      .x{
        background-image: url('x.png');
        background-color: black;
        /* display: none; */
        
        
      }
      .fb{
        background-image: url('fb.png');
        background-color: white;
      }
    </style>
</section>