<script>
export default {

}
</script>

<template>
    <footer class="footer-desktop footer">
        <div class="footer-row">
            <div class="footer-blok">
                <div class="footer-logo">
                    <img src="../../../../storage/img/logo.png" alt="">
                </div>
                <div class="footer-tekst">
                    <div class="footer-socials">
                        <h2>Rijschool vierkante wielen</h2>
                        <p>Volg ons</p>
                        <div class="footer-icons">
                            <img src="../../../../storage/img/twitter.png" alt="twitter">
                            <img src="../../../../storage/img/instagram.png" alt="instagram">
                            <img src="../../../../storage/img/facebook.png" alt="facebook">
                            <img src="../../../../storage/img/linkedin.png" alt="linkedin">
                        </div>
                    </div>

                    <div class="footer-contact">
                        <h2>vragen?</h2>
                        <h2> neem contact op!</h2>
                        <div class="knop-container">
                            <router-link to="/contact" class="knop knop-default" href="/contact">
                                <span class="knop-tekst"> Contact</span>
                            </router-link>
                        </div>
                    </div>
                    <div class="footer-disclaimer">
                        <li>Privacy policy</li>
                        <li>Disclaimer</li>
                        <li>Copyright</li>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style>
/* footer styling */
.footer {
    user-select: none;
}


.footer-row {
    padding-top: 1.5rem;
}

.footer-blok {
    width: 95%;
    max-width: 1400px;
    margin: auto;
    display: flex;
    flex-direction: row;
    gap: 1rem;
}


.footer-tekst {
    display: flex;
    flex-direction: row;
    gap: 2rem;
    margin-top: auto;
    justify-content: space-around;
    width: 100%;
}

.footer-tekst::before {
    content: "";
    background-color: var(--background-grey);
    position: absolute;
    height: 25%;
    width: 100%;
    z-index: -1;
    left: 0; 
}



.footer-logo img {
    max-height: 200px;
}

.footer-disclaimer {
    height: fit-content;
    margin: auto 0 auto 0;
}

.footer-icons {
    justify-content: space-around;
  display: flex;
}

.footer-icons img{
 width: 25px;
}   

.footer-contact .knop-container{
    display: flex;
    justify-content: center;
}

@media (max-width: 992px) {
    .footer-blok {
        display: flex;
        flex-direction: column;
    }

    .footer-logo {
        margin: auto;
    }

    .footer-tekst {
        margin: auto;
        flex-wrap: wrap;
    }

    .footer-disclaimer {
        display: flex;
        gap: 1.3rem;
        width: fit-content;
        margin: auto;
    }

    .footer-tekst::before {
        height: unset;
    }

    .footer-contact {
        width: fit-content;
        margin: auto;
        text-align: center;
    }

    .footer-socials {
        text-align: center;
        width: fit-content;
        margin: auto;
    }

    .footer-logo img {
        max-height: 125px;
    }

    .footer-row {
        background-color: var(--background-grey);
        padding-bottom: 1.2rem;
    }
}
</style>