<template>
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <a class="tile is-child box accent" href="users">
            <article >
                <p class="title">{{ this.countStudent }}</p>
                <p class="subtitle"><i class="fas fa-user"></i> Total Alumnes</p>
            </article>
            </a>
        </div>
        <div class="tile is-parent">
            <a class="tile is-child box warning" href="doubts">
            <article>
                <p class="title">{{ this.countDoubt }}</p>
                <p class="subtitle"><i class="far fa-question-circles"></i> Total Dubtes</p>
            </article>
            </a>
        </div>
        <div class="tile is-parent">
          <a class="tile is-child box danger" href="/doubts?status=pendent">
          <article class="tile is-child box danger">
                <p class="title">{{ this.countDoubtP }}</p>
                <p class="subtitle"><i class="fas fa-exclamation-circle"></i> Dubtes no Resolts</p>
            </article>
          </a>
        </div>

      <div class="tile is-parent">
        <a class="tile is-child box success" href="/doubts?status=resolt">
        <article>
                <p class="title">{{ this.countDoubtR }}</p>
                <p class="subtitle"> <i class="fas fa-check-circle"></i> Dubtes Resolts</p>
            </article>
        </a>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: 'Dashboard', 
    data() {
        return {
            countStudent: 0, 
            countDoubt: 0,
            countDoubtP: 0, 
            countDoubtR: 0 
        }
    }, 
    mounted() {
        this.setCountStudent();
        this.setCountDoubts();
        this.setCountDoubtsP();
        this.setCountDoubtsR();
    }, 
    methods: {
        setCountStudent() {
            axios.get('/api/countstudent')
            .then((response) => {
                this.countStudent = response.data;
            })
            .catch(error => {
                //console.log(error);
            });
        }, 
        setCountDoubts() {
            axios.get('/api/countdoubts')
            .then((response) => {
                this.countDoubt = response.data;
            })
            .catch(error => {
                //console.log(error);
            });
        }, 
        setCountDoubtsP() {
            axios.get('/api/countdoubtsp')
            .then((response) => {
                this.countDoubtP = response.data;
            })
            .catch(error => {
                //console.log(error);
            });
        }, 
        setCountDoubtsR() {
            axios.get('/api/countdoubtsr')
            .then((response) => {
                this.countDoubtR = response.data;
            })
            .catch(error => {
                //console.log(error);
            });
        }
    }
}
</script>