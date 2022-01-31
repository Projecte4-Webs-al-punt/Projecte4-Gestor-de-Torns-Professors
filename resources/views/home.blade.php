@extends('layouts.app')

@section('content')


    <body>
    <div class="main-content">
        <div class="section-light about-me">
            <div class="container">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">Sobre nosaltres</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                            class="column is-6 has-vertically-aligned-content"
                            data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong
                            >erit vitae id felis. Nulla ac erat aliquet, hendrerit turpis quis, suscipit tellus. Suspendisse potenti. Morbi dapibus diam vulputate pharetra lobortis. Etiam tincidunt, nibh non malesuada iaculis, lectus eros volutpat quam, ornare tempus purus magna nec quam.</strong
                            >
                        </p>
                        <br />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et nisi sagittis, feugiat nulla nec, vestibulum odio. Curabitur dapibus metus et dignissim fringilla. Etiam vel sapien eu nunc feugiat hendrerit vitae id felis. Nulla ac erat aliquet, hendrerit turpis quis, suscipit tellus. Suspendisse potenti. Morbi dapibus diam vulputate pharetra lobortis. Etiam tincidunt, nibh non malesuada iaculis, lectus eros volutpat quam, ornare tempus purus magna nec quam.
                        </p>
                        <br />
                        <div class="is-divider"></div>
                        <div class="columns about-links">
                            <div class="column">
                                <p class="heading">
                                    <strong>Give me a ring</strong>
                                </p>
                                <p class="subheading">
                                    123-456-7890
                                </p>
                            </div>
                            <div class="column">
                                <p class="heading">
                                    <strong>Email Me</strong>
                                </p>
                                <p class="subheading">
                                    hello@example.com
                                </p>
                            </div>
                            <div class="column">
                                <p class="heading">
                                    <strong>View my portfolio</strong>
                                </p>
                                <p class="subheading">
                                    example.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                                class="is-rounded"
                                src="https://picsum.photos/id/366/600/375"
                                alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Me Content -->
        <div class="section-dark resume">
            <div class="container">
                <div
                        class="columns is-multiline"
                        data-aos="fade-in"
                        data-aos-easing="linear"
                >
                    <div class="column is-12 about-me">
                        <h1 class="title has-text-centered section-title">
                            View My Resume
                        </h1>
                    </div>
                    <div class="column is-10 has-text-centered is-offset-1">
                        <h2 class="subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et doloremagna aliqua
                        </h2>
                        <form action="">
                            <button class="button">
                                Download Resume&emsp;<i class="fad fa-download fa-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-color services">
            <div class="container">
                <div class="columns is-multiline">
                    <div
                            class="column is-12 about-me"
                            data-aos="fade-in"
                            data-aos-easing="linear"
                    >
                        <h1 class="title has-text-centered section-title">Services</h1>

                        <h2 class="subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </h2>
                        <br />
                    </div>
                    <div class="columns is-12">
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fad fa-meteor fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-paint-brush fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-rocket fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                    </div>
                    <hr />
                    <div class="columns is-12">
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-upload fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-bus fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-code fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-dark my-work" id="my-work">
            <div class="container">
                <div
                        class="columns is-multiline"
                        data-aos="fade-in"
                        data-aos-easing="linear"
                >
                    <div class="column is-12">
                        <h1 class="title has-text-centered section-title">Proves</h1>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=0');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=10');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=20');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=30');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=40');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=50');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=60');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=70');"
                            ></figure>
                        </a>
                    </div>
                </div>
            </div>

    <section class="hero is-medium has-text-centered">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div data-aos="zoom-in-up" class="column is-8">
                        <h1 class="title titled is-1 mb-6">
                            Primary bold title <span id="typewriter"></span>
                        </h1>
                        <h2 class="subtitle subtitled">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum cupiditate dolorum vitae dolores
                            nesciunt totam magni quas.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
        </div>
@endsection