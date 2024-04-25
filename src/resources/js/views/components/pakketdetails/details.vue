<script>
export default {
  data() {
    return {
      id: "",
      pakket: [{}],
    };
  },
  mounted() {
    this.id = this.$route.params.id;
    // Make an API call to retrieve pakket details by id
    axios
      .get(`/api/pakket/show/${this.id}`)
      .then(({ data }) => {
        this.pakket = data;
      })
      .catch((error) => {
        console.error("Error fetching pakket details:", error);
      });
  },
};
</script>

<template>
  <div class="content-row">
    <div class="content-blok">
      <div class="pakket">
        <h1>{{ pakket.title }}</h1>
        <p>
          Bij rijschool Vierkante Wielen hebben we een uniek lesprogramma
          genaamd het <strong>{{ pakket.title }}</strong> pakket. Met dit pakket bieden we een
          flexibel aantal lessen, aangepast aan jouw behoeften en leerstijl. Of
          je nu een beginner bent of al enige ervaring hebt, ons ervaren team
          van instructeurs staat klaar om jou te begeleiden op jouw weg naar
          rijvaardigheid. Het <strong>{{ pakket.title }}</strong> pakket omvat <strong>{{ pakket.aantal_lessen }}</strong>  lessen,
          die zorgvuldig zijn ontworpen om jou de nodige vaardigheden en
          zelfvertrouwen te geven op de weg. Of je nu wilt leren manoeuvreren in
          druk stadsverkeer of snelwegen wilt trotseren, ons lesprogramma is op
          maat gemaakt om aan jouw specifieke leerdoelen te voldoen. Ons pakket
          wordt aangeboden tegen een aantrekkelijke pakketprijs van
          <strong>{{ pakket.prijs }}</strong> , waardoor het niet alleen een effectieve, maar ook een
          betaalbare optie is voor rijlessen. Voor degenen die meer
          flexibiliteit wensen, bieden we ook losse lessen aan tegen een prijs
          van   <strong>{{ pakket.prijs_los }}</strong> per les. Bij rijschool "Vierkante Wielen"
          geloven we in het leveren van comfort en veiligheid tijdens jouw
          rijervaring. Daarom maken we gebruik van moderne lesauto's die
          regelmatig worden onderhouden en voorzien zijn van de nieuwste
          technologische functies om jou een plezierige en veilige rit te
          garanderen. Onze lesauto's zijn van het type <strong>{{ pakket.auto }}</strong> , die bekend staat
          om hun betrouwbaarheid en comfortabel rijgedrag. Ongeacht jouw niveau
          van ervaring of leerbehoeften, het <strong>{{ pakket.title }}</strong> pakket van rijschool
          "Vierkante Wielen" is de perfecte keuze om jouw rijvaardigheden naar
          een hoger niveau te tillen. Neem vandaag nog contact met ons op om
          jouw rijavontuur te beginnen!
        </p>
<!-- 
        <h2>{{ pakket.title }}</h2>
        <p><strong>Aantal lessen:</strong> {{ pakket.aantal_lessen }}</p>
        <p><strong>Auto:</strong> {{ pakket.auto }}</p>
        <p><strong>Pakketprijs:</strong> {{ pakket.prijs }}</p>
        <p><strong>Prijs per losse les:</strong> {{ pakket.prijs_los }}</p> -->
      </div>
    </div>
  </div>
</template>

<style>
.pakket {
  width: fit-content;
  margin: auto;
  max-width: 900px;
}
</style>
