<template>
    <!-- <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-sm" v-for="team in teams">
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
              <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px" 
              src="images/" 
              alt="" class="card-img-top rounded-circle mx-auto d-block">
              <div class="card-body">
                <h5 class="card-title">{{team.name}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Ver más.....</a>
              </div>
            </div>
        </div> 
    </div> -->
    <div class="row top-space">
        <spinner v-show="loading"></spinner>
        <div class="card-columns animar alentrar"> <!-- aqui estamos usando la clase para animar -->
          <div class="card" v-for="team in teams">
            <img class="card-img-top" src="/images/">
            <div class="card-body">
              <h5 class="card-title">{{team.name}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/trainers/" class="btn btn-outline-primary btn-block">Ver detalles</a>
            </div>
          </div>
        </div>
    </div>
</template>
<script>
	export default {
        data() {
            return{
                teams: [],
                loading: true
            }
        },
        mounted() {
            axios
                .get('http://localhost/mi_proyecto/public/teams')
                .then((res) => {
                    this.teams = res.data
                    this.loading = false
                })
        }
    }
</script>
<style>
    /*---- animaciones ----*/
    .animar {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    .despacio {
      -webkit-animation-duration: 1.4s;
      animation-duration: 1.4s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    .rapido {
      -webkit-animation-duration: 0.4s;
      animation-duration: 0.4s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @keyframes alentrar {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .alentrar {
      animation-name: alentrar;
    }
    .top-space{
        margin-top: 20px
    }
</style>