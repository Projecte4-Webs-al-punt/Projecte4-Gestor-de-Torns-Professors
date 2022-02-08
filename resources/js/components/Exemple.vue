<template>
    <button v-on:click="addTask">{{ msg }}</button>
</template>

<script>
export default {
    name: "Exemple", 
    data() {
        return {
            msg: 'prova'
        }
    }, 
    methods: {
        addTask() {
            console.log(1);
        }
    }
}
</script>