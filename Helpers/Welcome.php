<section class="welcome-section">
    <div class="container-fluid p-0">
        <!-- Background Image Section -->
        <div class="welcome-background" style="background-image: url('Afbeelding/Sel.afbeelding3.jpg');">
            <div class="overlay"></div>
            <div class="text-center content">
                <h1>Welkom bij Selssevents</h1>
                <p>Onze luxe cateringservices brengen de rijke smaken en tradities van Marokkaanse bruiloften naar uw evenement.</p>
            </div>
        </div>
    </div>
</section>

<style>
    /* Algemene opmaak */
    .welcome-section {
        position: relative;
        padding: 50px 0;
    }

    .welcome-background {
        background-size: cover;
        background-position: center;
        height: 60vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-align: center;
    }

    .welcome-background .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Donkere overlay voor contrast */
    }

    .welcome-background .content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        padding: 0 20px;
    }

    .welcome-background h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #fff;
    }

    .welcome-background p {
        font-size: 1.25rem;
        line-height: 1.6;
        color: #fff;
        margin-bottom: 30px;
        font-weight: 300;
    }

    /* Styling voor het tekstcontainer */
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
</style>
