<div class="featured" id="featured">

    <h1 class="heading"> <span>أنواع</span> السيارات</h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="{{ asset('img/cars/popular4.png') }}" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price"> /-$55,000</div>
                    <a href="#" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                <img src="{{ asset('img/cars/popular4.png') }}" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">/-$55,000</div>
                    <a href="#" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                <img src="{{ asset('img/cars/popular4.png') }}" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">/-$55,000</div>
                    <a href="#" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                <img src="{{ asset('img/cars/popular4.png') }}" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">/-$55,000</div>
                    <a href="#" class="btn">check out</a>
                </div>
               
            </div>
            <div class="swiper-pagination"></div>
            </div>
            <div class="swiper featured-slider">

<div class="swiper-wrapper">

     <div class="swiper-slide box">
         <img src="{{ asset('img/cars/popular4.png') }}" alt="">
         <div class="content">
             <h3>new model</h3>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <div class="price">/-$55,000</div>
             <a href="#" class="btn">check out</a>
         </div>
         <div class="swiper-slide box">
         <img src="{{ asset('img/cars/popular4.png') }}" alt="">
         <div class="content">
             <h3>new model</h3>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <div class="price">/-$55,000</div>
             <a href="#" class="btn">check out</a>
         </div>
         <div class="swiper-slide box">
         <img src="{{ asset('img/cars/popular4.png') }}" alt="">
         <div class="content">
             <h3>new model</h3>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <div class="price">/-$55,000</div>
             <a href="#" class="btn">check out</a>
         </div>
         <div class="swiper-slide box">
         <img src="{{ asset('img/cars/popular4.png') }}" alt="">
         <div class="content">
             <h3>new model</h3>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <div class="price"> /-$55,000</div>
             <a href="#" class="btn">check out</a>
         </div>
        
     </div>
     <div class="swiper-pagination"></div>
     </div>
</div>

           
<style scoped>
  .featured .featured-slider{
    padding:1rem;
    padding-bottom: 4rem;

}

.featured .featured-slider .box{
    padding:2rem;
    text-align: center;
    box-shadow: var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
    
    
}

.featured .featured-slider .box img{
    height: 13rem;
    margin-right: 310px;
}

.featured .featured-slider .box:hover img{
    transform: scale(.9);
}

.featured .featured-slider .box .content h3{
    font-size: 2.2rem;
    color:var(--black);
    
}

.featured .featured-slider .box .content .stars{
    padding:1rem 0;
    color:  #df3a1d;

}

.featured .featured-slider .box .content .stars i {
    font-size: 1.7rem;
    color: #d3543e;
}

.featured .featured-slider .box .content .price{
    font-size: 2.5rem;
    color:var(--black);
}
.featured h1{
    font-size: 1.5rem;
    margin-right:10px;
    padding-top: 15px;

}
  </style>
  <script>
    var swiper = new Swiper(".featured-slider", {
  slidesPerView:1,
  spaceBetween:20,
  loop:true,
  grabCursor: true,
  centeredSlides: true,  
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
});
  </script>