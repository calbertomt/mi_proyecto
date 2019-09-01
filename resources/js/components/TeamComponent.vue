<template>
    <div class="row">
        <spinner></spinner>
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
    </div>
</template>

<script>
	export default {
        data() {
            return{
                teams: []
            }
        },
        mounted() {
            axios.get('http://localhost/mi_proyecto/public/teams').then(response => (this.teams = response.data))
        }
    }
</script>