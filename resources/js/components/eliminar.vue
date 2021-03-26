<template>
     <input type="submit" class="btn btn-danger d-block w-100" value="Eliminar" v-on:click="eliminarPedido"> 
</template>

<script>
export default {
    props:['idPedido'],
    methods:{
        eliminarPedido(){
                    this.$swal({
  title: 'Desea eliminar el pedido',
  text: "Este pedido ya no se podra recuperar",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si',
}).then((result) => {
  if (result.isConfirmed) {
      const params={
          id:this.idPedido
      }
      axios.post(`/pedidos/${this.idPedido}`, {params, _method:'delete'})
      .then(respuesta=>{

          this.$swal({
            title: "eliminado",
            text: "se ha eliminado su pedido",
            icon: 'listo',
            confirmButtonText: 'aceptar'
      })
      this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
      })
        .catch(error=>{
            console.log(error);
        })
    
    
  }
})

        }
    }
}
</script>