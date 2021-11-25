<template>
<q-page class="q-pa-lg">
  <form action="" @submit.prevent="registrarauto">
  <select name="" id="" v-model="auto.cliente_id">
    <option v-for="cliente in clientes" :key="cliente.id" :value="cliente.id">{{cliente.nombre}}</option>
  </select>
  <input type="text" placeholder="marca"  v-model="auto.placa">
  <input type="text" placeholder="modelo"  v-model="auto.marca">
    <input type="submit">
  </form>
  <hr>
  <table border="1" style="width: 100%">
    <tr>
      <th>#</th>
      <th>Placa</th>
      <th>Marca</th>
      <th>Cliente</th>
    </tr>
    <tr v-for="l in logs" :key="l.id">
      <td>{{l.id}}</td>
      <td>{{l.placa}}</td>
      <td>{{l.marca}} Bs.</td>
      <td>{{l.cliente.nombre}}</td>
    </tr>
  </table>
</q-page>
</template>

<script>
export default {
  data(){
    return{
      clientes:[],
      autos:[],
      auto:{placa:'',marca:''}
    }
  },
  created(){
    this.$axios.get(process.env.API+'/cliente').then(res=>{
      this.clientes=res.data
    })
    this.misdatos()
  },
  methods:{
    registrarauto(){
      this.$axios.post(process.env.API+'/auto',this.auto).then(res=>{
        console.log(res.data)
        this.misdatos()
      })
    },
    misdatos(){
      this.$axios.get(process.env.API+'/auto').then(res=>{
        console.log(res.data)
        this.autos=res.data
      })
    }
  },
}
</script>
<style scoped>
</style>