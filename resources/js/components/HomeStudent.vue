<template>
    <section class="hero is-medium has-text-centered">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div data-aos="zoom-in-up" class="column is-8">
                        <h1 class="title is-1 mb-6">
                            Tutory.cat <span id="typewriter"></span>
                        </h1>
                        <div class="columns">
                            <div class="card column m-3" v-on:click="question">
                                <div class="card-content">
                                    <h2 class="subtitle has-text-dark is-4 mb-3">Preguntar un Dubte</h2>
                                    <div class="content">
                                        <span class="icon is-size-1 mt-5"><i class="fas fa-question-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card column m-3" v-on:click="listQuestion">
                                <div class="card-content">
                                    <h2 class="subtitle has-text-dark is-4 mb-3">Consultar els teus Dubtes</h2>
                                    <div class="content">
                                    <span class="icon is-size-1 mt-5"><i class="far fa-list-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'HomeStudent', 
    methods: {
        question() {
            window.location.assign("/question");
        }, 
        listQuestion() {
            window.location.assign("/question-list");
        }
    }
}
</script>