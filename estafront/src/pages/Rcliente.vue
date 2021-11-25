<template>
<q-page class="q-pa-lg">
  <form action="" @submit.prevent="registrarcliente">
  <input type="text" placeholder="ci"  v-model="cliente.ci">
  <input type="text" placeholder="nombre"  v-model="cliente.nombre">
    <input type="submit">
  </form>
  <hr>
  <table border="1" style="width: 100%">
    <tr>
      <th>#</th>
      <th>CI</th>
      <th>NOMBRE</th>
    </tr>
    <tr v-for="l in logs" :key="l.id">
      <td>{{l.id}}</td>
      <td>{{l.ci}}</td>
      <td>{{l.nombre}} Bs.</td>
    </tr>
  </table>
</q-page>
</template>

<script>
export default {
  data(){
    return{
      
      clientes:[],
      cliente:{ci:'',nombre:''}
    }
  },
 
  methods:{
    registrarcliente(){
      this.$axios.post(process.env.API+'/cliente',this.cliente).then(res=>{
        console.log(res.data)
        this.misdatos()
      })
    },
    misdatos(){
      this.$axios.get(process.env.API+'/cliente').then(res=>{
        console.log(res.data)
        this.clientes=res.data
      })
    }
  },
}
</script>
<style scoped>
</style>