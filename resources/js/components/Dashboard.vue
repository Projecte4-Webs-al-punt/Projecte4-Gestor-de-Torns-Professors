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
            <article class="tile is-child box danger">
                <p class="title">{{ this.countDoubtP }}</p>
                <p class="subtitle"><i class="fas fa-exclamation-circle"></i> Dubtes no resolts</p>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box success">
                <p class="title">{{ this.countDoubtR }}</p>
                <p class="subtitle"> <i class="fas fa-check-circle"></i> Dubtes resolts</p>
            </article>
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
            });
        }, 
        setCountDoubts() {
            axios.get('/api/countdoubts')
            .then((response) => {
                this.countDoubt = response.data;
            });
        }, 
        setCountDoubtsP() {
            axios.get('/api/countdoubtsp')
            .then((response) => {
                this.countDoubtP = response.data;
            });
        }, 
        setCountDoubtsR() {
            axios.get('/api/countdoubtsr')
            .then((response) => {
                this.countDoubtR = response.data;
            });
        }
    }
}
</script>