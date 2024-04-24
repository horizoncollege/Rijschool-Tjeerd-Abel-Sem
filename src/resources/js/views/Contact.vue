<script>
import headerdesktop from "./components/header.vue";
import headermobile from "./components/header-mobile.vue";
<<<<<<< HEAD
import banner from "./components/banner.vue";
import paragraaf from "./components/paragraaf.vue";
import review from "./components/review.vue";
import footerdesktop from "./components/footer.vue";
import pakketen from "./components/pakketen.vue";
import team from "./components/team.vue"

export default {
  components: {
    headerdesktop,
    headermobile,
    banner,
    footerdesktop
  }
=======
import footerdesktop from "./components/footer.vue";

export default {
    components: {
        headerdesktop,
        headermobile,
        footerdesktop
    }
>>>>>>> 45e166c3665edf96c2d8b8e9f2c4008412809a1a
}
</script>

<template>
    <headerdesktop></headerdesktop>
    <headermobile></headermobile>
<<<<<<< HEAD
    <div class="main">
        <div class="main_inner">
            <h2>U kunt op verschillende manieren contact met ons op nemen:</h2>
            <br>
            <a href="tel:0612345678">
                telefoon
            </a><br>
            <a href="mailto:support@rijschool.nl">
                email
            </a>
        </div>
    </div>
=======
>>>>>>> 45e166c3665edf96c2d8b8e9f2c4008412809a1a
    <footerdesktop></footerdesktop>
</template>

<style>
<<<<<<< HEAD
.main {
    width: 450px; 
    height:600px; 
    position:relative;
    display: flex;
    flex-direction: columns;
    justify-content: center;
    align-items: center;
}
.main_inner {
    padding: 10px;
    border: solid;
    border-color: black;
    border-width: 2px;
    border-radius: 8px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
=======

>>>>>>> 45e166c3665edf96c2d8b8e9f2c4008412809a1a
</style>