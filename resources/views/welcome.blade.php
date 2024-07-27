@extends('layouts.main')

@section('content')

    <div class="custom-scrollbar" id="customScrollbar"></div>

    <section class="hero d-flex justify-content-center flex-column" id="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="content" data-aos="fade-up" data-aos-delay="500">
                        <small class="text-light text-uppercase text-semibold">hello everyone, my name is</small>
                        <h1 class="text-light" style="font-size: 3.5em">Elang Atha <span class="txt-primary">Zahran</span>
                        </h1>
                        <p class="text-light fs-5">
                            As a <span class="typing"></span>
                        </p>
                        <button class="download-button mt-3" id="download-cv-button">
                            <div class="docs"><svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round"
                                    fill="none" stroke-width="2" stroke="currentColor" height="20" width="20"
                                    viewBox="0 0 24 24">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line y2="13" x2="8" y1="13" x1="16"></line>
                                    <line y2="17" x2="8" y1="17" x1="16"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg> Download My CV</div>
                            <div class="download">
                                <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                                    stroke-width="2" stroke="currentColor" height="24" width="24"
                                    viewBox="0 0 24 24">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line y2="3" x2="12" y1="15" x1="12"></line>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card-image-content" data-aos="fade-left">
                        <div class="overlay-card"></div>
                        <img src="{{ asset('images/me.png') }}" class="img-card rounded" alt="">
                        <h6 class="text-light follow text-uppercase">follow my socials media</h6>
                        <div class="icons d-flex gap-3">
                            <div class="icon github d-flex justify-content-center align-items-center">
                                <a href="https://github.com/athazahrane">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                            <div class="icon instagram d-flex justify-content-center align-items-center">
                                <a href="https://www.instagram.com/athazahrane/">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </div>
                            <div class="icon linkedin d-flex justify-content-center align-items-center">
                                <a href="https://www.linkedin.com/in/elang-atha-zahran-100459220/">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about" id="about">
        <div class="container">
            <h2 class="text-light text-uppercase title-prim mb-5" data-aos="fade-right">about me</h2>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center mb-3">
                    <div class="card-about" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('images/me-3.png') }}" class="rounded" alt="About Me">
                    </div>
                </div>
                <div class="col-md-6 text-start d-flex flex-column justify-content-center gap-3">
                    <h3 class="text-light" data-aos="fade-left" data-aos-delay="200">About Me</h3>
                    <p class="text-light" data-aos="fade-left" data-aos-delay="300">
                        Hello! My name is Elang Atha Zahran, a passionate Fullstack Developer. On the frontend, I specialize
                        in creating dynamic and responsive interfaces using React.js. For the backend, I leverage the power
                        and flexibility of Laravel to build robust and scalable applications. I thrive on the challenge of
                        turning complex problems into elegant solutions and am always eager to learn and grow in this
                        ever-evolving field.
                    </p>
                    <button class="download-button mt-3" style="max-width: max-content" id="download-cv-button">
                        <div class="docs"><svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round"
                                fill="none" stroke-width="2" stroke="currentColor" height="20" width="20"
                                viewBox="0 0 24 24">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line y2="13" x2="8" y1="13" x1="16"></line>
                                <line y2="17" x2="8" y1="17" x1="16"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg> Download My CV</div>
                        <div class="download">
                            <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                                stroke-width="2" stroke="currentColor" height="24" width="24"
                                viewBox="0 0 24 24">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line y2="3" x2="12" y1="15" x1="12"></line>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="resume" id="resume">
        <div class="container">
            <h2 class="text-light text-uppercase title-prim mb-5" data-aos="fade-right">My Resume</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-resume p-3 rounded shadow" data-aos="fade-up">
                        <h3 class="title-card text-capitalize mb-4 text-light">Expertise</h3>
                        <div class="card-content-resume text-light">
                            <h3 class="txt-primary">2022 - 2023</h3>
                            <p>Take an entership</p>
                            <br>
                            <p>I have completed my internship at PT Kreasi Sawala Nusantara for 6 months, I worked as a Web
                                Designer and Frontend Web Developer</p>
                        </div>
                        <hr class="hr">
                        <div class="card-content-resume text-light">
                            <h3 class="txt-primary">2024 Fabruary</h3>
                            <p>Gmetrix Sertification</p>
                            <br>
                            <p>in january 2024, i have taken and successfully completed the gmetrix certification exam in
                                html and css</p>
                        </div>
                        <hr class="hr">
                        <div class="card-content-resume text-light">
                            <h3 class="txt-primary">2024 Fabruary</h3>
                            <p>Certiport Sertification</p>
                            <br>
                            <p>in February 2023, I have taken and successfully completed the Certiport certification on HTML
                                and CSS</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-resume p-3 rounded shadow text-light" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="title-card text-light text-capitalize mb-4">education</h3>
                        <div class="card-content-resume">
                            <h3 class="txt-primary">2010 - 2018</h3>
                            <p>SDIT Permata Bunda</p>
                            <br>
                            <p>I have visited elementary schools and kindergartens at SDIT Permata Bunda School for 8 years
                            </p>
                        </div>
                        <hr class="hr">
                        <div class="card-content-resume">
                            <h3 class="txt-primary">2018 - 2021</h3>
                            <p>SMPIT Fathan Mubina</p>
                            <br>
                            <p>I have been attending junior high school at the Fathan Mubina Al - Islami Islamic Boarding
                                School for 3 years</p>
                        </div>
                        <hr class="hr">
                        <div class="card-content-resume">
                            <h3 class="txt-primary">2021 - 2024</h3>
                            <p>SMK Wikrama</p>
                            <br>
                            <p>I am currently studying at Wikrama Vocational School, Bogor. I majored in PPLG (Software and
                                Game Development) and I focused on the Frontend Web Development section because I really
                                like the page design of a website</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="multiple-cards p-3 rounded shadow mb-3" data-aos="fade-up" data-aos-delay="600">
                        <h3 class="text-light text-capitalize">skills</h3>
                        <br>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">HTML5 & CSS3</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">88%</label>
                            </div>
                        </div>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">Bootstrap 5</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">90%</label>
                            </div>
                        </div>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">React Js</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">70%</label>
                            </div>
                        </div>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">Vite</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">50%</label>
                            </div>
                        </div>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">Angular</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">50%</label>
                            </div>
                        </div>

                        <div class="content-multiple-card mb-5">
                            <h6 class="text-light mb-2">PHP & Laravel</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">78%</label>
                            </div>
                        </div>

                        <h3 class="text-light text-capitalize">language</h3>
                        <br>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">english</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">70%</label>
                            </div>
                        </div>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">arabic</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">75%</label>
                            </div>
                        </div>

                        <div class="content-multiple-card mb-3">
                            <h6 class="text-light mb-2">japanese</h6>
                            <div class="progresss d-flex justify-content-between align-items-center gap-3">
                                <div class="progress-content">
                                    <div class="value rounded-full"></div>
                                </div>
                                <label class="text-light fs-6">80%</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>


    <script>
        var typed = new Typed('.typing', {
            strings: ['Fullstack Developer', 'Web Designer'],
            typeSpeed: 50,
            backSpeed: 30,
            fadeOut: true,
            loop: true,
        });
    </script>

    {{-- tilt js --}}
    <script type="text/javascript" src="{{ asset('js/tilt.js') }}"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".card-image-content"), {
            max: 45,
            speed: 300,
            gyroscope: false,
            glare: true,
            reverse: false
        });
    </script>

    <script>
        document.getElementById('download-cv-button').addEventListener('click', function() {
            const link = document.createElement('a');
            link.href = 'https://drive.google.com/uc?export=download&id=1RYuEsNOj_eSy0BAIHzAqIEEqwBWBNxkM';
            link.download = 'Elang Atha Zahran CV.pdf';
            link.click();
        });
    </script>
@endsection
