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
                    </div>
                    <div class="footer-contact">
                        <h2>vragen?</h2>
                        <h2> neem contact op!</h2>
                        <div class="knop-container">
                            <a class="knop knop-default" href="#">
                                <span class="knop-tekst"> Contact</span>
                            </a>
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
    height: 20%;
    width: 200vw;
    z-index: -1;
    left: -100vw;
}


.footer-logo img {
    max-height: 200px;
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
        height: 20%;
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
}

@media (max-width: 540px) {
    .footer-tekst::before {
        height: 27%;    }
}


</style>