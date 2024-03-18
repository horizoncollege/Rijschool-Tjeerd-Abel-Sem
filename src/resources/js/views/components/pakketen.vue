<script>
export default {

    mounted() {
        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js')
        document.head.appendChild(recaptchaScript)

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
}
</script>

<template>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <div class="content-row">
        <div class="content-blok">
            <div class="multicolumn-heading">
                <div class="paragraaf-subheader multicolumn">
                    <h2>subheader</h2>
                </div>
                <div class="paragraaf-header multicolumn">
                    <h2>header</h2>
                </div>
            </div>
            <swiper class="mySwiper" loop="true" space-between="0" centered-slides="true"
                autoplay-delay="5000" autoplay-disable-on-interaction="false">
                <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 1</swiper-slide>

                <div class="swiper-pagination"></div>
            </swiper>

        </div>
    </div>
</template>

<style>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>