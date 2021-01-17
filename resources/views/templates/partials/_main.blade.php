<!-- PARTIAL MAIN  -->

<section class="ftco-section ftco-degree-bg">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 ftco-animate">
         <div class="container">
           <div class="row d-flex">
             @yield('content')
           </div>
           <div class="row mt-5">
             <div class="col text-center">
               <div class="block-27">
                 <ul>
                   <li><a href="#">+</a></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>

       @include('templates.partials._sidebar')

     </div>
   </div>
 </section> <!-- .section -->
