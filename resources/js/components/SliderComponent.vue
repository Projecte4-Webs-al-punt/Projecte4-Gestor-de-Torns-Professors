<template>
  <div class="about">
    <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
      <span class="icon"></span>
    </a>
    <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
      <span class="icon"></span>
    </a>
    <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
      <span class="icon"></span>
    </a>
    <a class="bg_links logo"></a>
  </div>
  <!-- end about -->

  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slider -->
      <!-- Slide1 -->
      <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1484242857719-4b9144542727?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9)">
        <div class="slide-text">
          <h1>This is some kind of headline</h1>
          <p>Here goes a little description to fill this tiny empty space.</p>
          <button class="btn">read more</button>
        </div>
      </div>
      <!-- END Slide1 -->
      <!-- Slide2 -->
      <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1485627941502-d2e6429a8af0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9)">
        <div class="slide-text">
          <h1>Here goes a second headline</h1>
          <p>And another little description.</p>

        </div>
      </div>
      <!-- END Slide2 -->
      <!-- Slide3 -->
      <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1492546643178-96d64f3fd824?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9)"></div>
      <!-- END Slide3 -->
      <!-- Slide4 -->
      <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1494506132334-19732cd53b32?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9)"></div>
      <!-- END Slide4 -->

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"><span></span></div>
    <div class="swiper-button-next"><span></span></div>

  </div>
</template>

<script>
export default {
  name: "SliderComponent"
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=IBM+Plex+Mono|IBM+Plex+Sans:100,700|IBM+Plex+Serif');
.about {
  position: fixed;
  z-index: 10;
  bottom: 10px;
  right: 10px;
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  transition: all 0.2s ease;
}
.about .bg_links {
  width: 40px;
  height: 40px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.2);
  border-radius: 100%;
  backdrop-filter: blur(5px);
  position: absolute;
}
.about .logo {
  width: 40px;
  height: 40px;
  z-index: 9;
  background-image: url(https://rafaelalucas91.github.io/assets/codepen/logo_white.svg);
  background-size: 50%;
  background-repeat: no-repeat;
  background-position: 10px 7px;
  opacity: 0.9;
  transition: all 1s 0.2s ease;
  bottom: 0;
  right: 0;
}
.about .social {
  opacity: 0;
  right: 0;
  bottom: 0;
}
.about .social .icon {
  width: 100%;
  height: 100%;
  background-size: 20px;
  background-repeat: no-repeat;
  background-position: center;
  background-color: transparent;
  display: flex;
  transition: all 0.2s ease, background-color 0.4s ease;
  opacity: 0;
  border-radius: 100%;
}
.about .social.portfolio {
  transition: all 0.8s ease;
}
.about .social.portfolio .icon {
  background-image: url(https://rafaelalucas91.github.io/assets/codepen/link.svg);
}
.about .social.dribbble {
  transition: all 0.3s ease;
}
.about .social.dribbble .icon {
  background-image: url(https://rafaelalucas91.github.io/assets/codepen/dribbble.svg);
}
.about .social.linkedin {
  transition: all 0.8s ease;
}
.about .social.linkedin .icon {
  background-image: url(https://rafaelalucas91.github.io/assets/codepen/linkedin.svg);
}
.about:hover {
  width: 105px;
  height: 105px;
  transition: all 0.6s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}
.about:hover .logo {
  opacity: 1;
  transition: all 0.6s ease;
}
.about:hover .social {
  opacity: 1;
}
.about:hover .social .icon {
  opacity: 0.9;
}
.about:hover .social:hover {
  background-size: 28px;
}
.about:hover .social:hover .icon {
  background-size: 65%;
  opacity: 1;
}
.about:hover .social.portfolio {
  right: 0;
  bottom: calc(100% - 40px);
  transition: all 0.3s 0s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}
.about:hover .social.portfolio .icon:hover {
  background-color: #698fb7;
}
.about:hover .social.dribbble {
  bottom: 45%;
  right: 45%;
  transition: all 0.3s 0.15s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}
.about:hover .social.dribbble .icon:hover {
  background-color: #ea4c89;
}
.about:hover .social.linkedin {
  bottom: 0;
  right: calc(100% - 40px);
  transition: all 0.3s 0.25s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}
.about:hover .social.linkedin .icon:hover {
  background-color: #0077b5;
}
body {
  font-family: 'IBM Plex Mono', monospace;
  font-family: 'IBM Plex Sans', sans-serif;
  font-family: 'IBM Plex Serif', serif;
  margin: 0;
}
/* swiper */
.swiper-container {
  padding: 0;
  height: 700px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
@media screen and (max-width: 768px) {
  .swiper-container {
    height: 500px;
  }
}
.swiper-slide {
  width: 100%;
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
.swiper-slide:after {
  content: '';
  background-image: linear-gradient(0deg, black, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.1));
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0;
  z-index: 1;
  opacity: 0.3;
}
.swiper-slide:before {
  content: '';
  background-color: rgba(69, 69, 78, 0.2);
  background-image: linear-gradient(180deg, rgba(255, 234, 213, 0.3), rgba(241, 244, 255, 0.3));
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0;
  z-index: 1;
}
/* swiper arrows */
.swiper-button-prev, .swiper-button-next {
  width: 50px;
  height: 50px;
  background-image: none;
  display: flex;
  align-items: center;
  justify-content: center;
}
.swiper-button-prev {
  left: 30px;
}
.swiper-button-next {
  right: 30px;
}
.swiper-button-prev span, .swiper-button-next span {
  width: 10px;
  height: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: transparent;
  position: absolute;
  border: solid 2px white;
  border-left: 0;
  border-bottom: 0;
  transition: all 0.3s ease;
}
.swiper-button-prev span {
  transform: rotate(-135deg);
  left: 50%;
}
.swiper-button-next span {
  transform: rotate(45deg);
  right: 50%;
}
.swiper-button-prev span:after, .swiper-button-next span:after {
  content: '';
  position: absolute;
  background-color: white;
  width: 0px;
  height: 2px;
  transition: all 0.3s ease;
  transform: rotate(-45deg);
}
.swiper-button-prev:hover span {
  left: 30%;
}
.swiper-button-next:hover span {
  right: 30%;
}
.swiper-button-prev:hover span:after, .swiper-button-next:hover span:after {
  width: calc(20px - 4px);
}
/* swiper arrows mobile */
@media screen and (max-width: 768px) {
  .swiper-button-prev {
    left: 0px;
  }
  .swiper-button-next {
    right: 0px;
  }
  .swiper-button-prev:hover span {
    left: 50%;
  }
  .swiper-button-next:hover span {
    right: 50%;
  }
  .swiper-button-prev:hover span:after, .swiper-button-next:hover span:after {
    display: none;
  }
}
/* swiper pagination */
.swiper-pagination {
  height: 40px;
}
.swiper-pagination-bullet {
  background-color: transparent;
  border: solid 1px white;
  opacity: 1;
  transition: all 0.3s ease-in-out;
}
.swiper-pagination-bullet:hover {
  background-color: white;
}
.swiper-pagination-bullet-active {
  width: 20px;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  left: 0;
  background-color: transparent;
  border: solid 1px white;
}
/* text content */
.slide-text {
  text-align: center;
  color: white;
  opacity: 1;
  z-index: 2;
  font-family: 'IBM Plex Sans', sans-serif;
  width: 80%;
  max-width: 500px;
}
.slide-text h1 {
  font-family: 'IBM Plex Sans', sans-serif;
  font-size: 30px;
  letter-spacing: 0.03em;
}
.slide-text p {
  font-size: 16px;
  font-family: 'IBM Plex Mono', monospace;
}
/* text mobile */
@media screen and (max-width: 768px) {
  .slide-text {
    width: 60%;
  }
  .slide-text h1 {
    font-size: 20px;
    letter-spacing: 0.02em;
  }
  .slide-text p {
    font-size: 14px;
  }
}
/* button */
.slide-text .btn {
  font-family: 'IBM Plex Mono', monospace;
  background-color: transparent;
  border: solid 1px white;
  padding: 15px 30px;
  min-width: 100px;
  width: fit-content;
  font-size: 14px;
  letter-spacing: 2px;
  color: white;
  position: relative;
  border-radius: 80px;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  margin-top: 20px;
}
.slide-text .btn:after {
  content: '';
  background-color: rgba(255, 255, 255, 0.1);
  width: 100%;
  height: 100%;
  display: block;
  position: absolute;
  z-index: 2;
  left: 0px;
  top: 0px;
  border-radius: inherit;
  transition: all 0.3s ease-in-out;
}
.slide-text .btn:hover::after {
  left: 4px;
  top: 5px;
  background-color: rgba(255, 255, 255, 0.3);
}
.slide-text .btn:hover {
  font-weight: 800;
}
@media screen and (max-width: 768px) {
  .slide-text .btn:hover::after {
    left: 0px;
    top: 0px;
    background-color: rgba(255, 255, 255, 0.1);
  }
}
button:focus {
  outline: 0;
}

</style>