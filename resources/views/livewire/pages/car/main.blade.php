<div class="popular section " id="popular">
        <div class="flex justify-between items-center ">
            <h2 class=" text-3xl text-black font-bold pt-15 mr-10 pb-20">انواع السيارات</h2>
        </div>
        <div class="popular__container container swiper  "data-aos="fade-left">
            <div class="swiper-wrapper">
              
                    <div class="swiper-slide  ss">
                        <article class=" popular__card bg-gray px-6 py-6  overflow-hidden relative w-64 bg-gray ">
                            <div class="shape shape__smaller"></div>
                            <img src="{{ asset('img/cars/car1.jpg') }}" alt="" class="popular__img ">
                            <div class="content">
                    <h3 class="new flex justify-center">new model</h3>
                    <div class="stars flex justify-center  text-orange">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price flex justify-center"> /-$55,000</div>
                    <a href="#" class="btn flex justify-center  ">check out</a>
                </div>
                        </article>
                    </div>
                    
                    <div class="swiper-slide  ss">
                        <article class=" popular__card bg-gray px-6 py-6  overflow-hidden relative w-64 bg-gray">
                            <div class="shape shape__smaller"></div>
                            <img src="{{ asset('img/cars/car4.jpg') }}" alt="" class="popular__img">
                            <div class="content">
                    <h3 class="flex justify-center">new model</h3>
                    <div class="stars flex justify-center  text-orange">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price flex justify-center"> /-$55,000</div>
                    <a href="#" class="btn flex justify-center">check out</a>
                </div>
                        </article>
                    </div>
                    <div class="swiper-slide  ss">
                        <article class=" popular__card bg-gray px-6 py-6  overflow-hidden relative w-64 bg-gray">
                            <div class="shape shape__smaller"></div>
                            <img src="{{ asset('img/cars/car2.jpg') }}" alt="" class="popular__img">
                            <div class="content">
                    <h3 class="new flex justify-center">new model</h3>
                    <div class="stars flex justify-center  text-orange">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price flex justify-center"> /-$55,000</div>
                    <a href="#" class="btn flex justify-center">check out</a>
                </div>
                        </article>
                    </div> <div class="swiper-slide  ss">
                        <article class=" popular__card bg-gray px-6 py-6  overflow-hidden relative w-64 bg-gray">
                            <div class="shape shape__smaller"></div>
                            <img src="{{ asset('img/cars/car3.jpg') }}" alt="" class="popular__img">
                            <div class="content">
                    <h3 class="nwe flex justify-center">new model</h3>
                    <div class="stars flex justify-center  text-orange">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price flex justify-center"> /-$55,000</div>
                    <a href="#" class="btn flex justify-center">check out</a>
                </div>
                        </article>
                    </div>
               
            </div>
            <div class="swiper-pagination mb-3 pb-3"></div>
        </div>
    </div>
<style scoped>
  .featured .featured-slider{
    padding:1rem;
    padding-bottom: 4rem;
    

}

.featured .featured-slider .box{
    text-align: center;
    padding:2rem;
    box-shadow:var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
    
    
    
    
}

.featured .featured-slider .box img{
    height: 13rem;
    margin-right: 400px;

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
    color:#000;
}
.popular section h2{
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