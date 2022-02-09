<template>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header text-center">
            <h3>Vue example</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center">
                <thead>
                <tr>
                  <th>ID</th>
                </tr>
                </thead>
                <tbody v-if="doubt && doubt.data.length > 0">
                <tr v-for="(doubt,index) in doubt.data" :key="index">
                  <td>{{ doubt.id }}</td>
                </tr>
                </tbody>
                <tbody v-else>
                <tr>
                  <td align="center" colspan="3">No record found.</td>
                </tr>
                </tbody>
              </table>
            </div>
            <pagination align="center" :data="doubt" @pagination-change-page="list"></pagination>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import pagination from 'laravel-vue-pagination'
import axios from "axios";
export default {
  name:"doubts",
  components:{
    pagination
  },
  data(){
    return {
      doubts:{
        type:Object,
        default:null
      }
    }
  },
  mounted(){
    this.list()
  },
  methods:{
    async list(page=1){
      await axios.get(`/api/doubts?page=${page}`).then(({data})=>{
        this.doubts = data
      }).catch(({ response })=>{
        console.error(response)
      })
    }
  }
}
</script>

<style scoped>
.pagination{
  margin-bottom: 0;
}
</style>