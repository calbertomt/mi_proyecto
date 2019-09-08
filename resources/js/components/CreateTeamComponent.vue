<template>
  <div class="modal fade" id="addTeam" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Jugador</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form @submit.prevent="saveTeam">
  	        <div class="form-group">
    			    <label>Jugador</label>
    			    <input type="text" class="form-control" placeholder="Ingresa el nombre del jugador" v-model="name">
    		  	</div>
            <div class="form-group">
              <label>Posición</label>
              <input type="text" class="form-control" placeholder="Ingresa la posición del jugador" v-model="position">
            </div>
    		  	<div class="form-group">
    			    <label>Foto</label>
    			    <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model="picture">
    		  	</div>
    		  	<button type="submit" class="btn btn-primary">Guardar</button>
    	  	</form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default{
    data(){
      return{
        name: null,
        position: null,
        picture: null
      }
    },
    methods: {
      saveTeam: function(){
        console.log(this.name)
        console.log(this.position)
        console.log(this.picture)
      }
    }
  }
</script>