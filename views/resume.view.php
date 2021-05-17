<?php require 'views/partials/header.view.php' ?>

<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <div class="main">


        <div id="headerimg" style="height: 150px;">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7">
                    <header>
                        <h1 class="display-1 text-center user-select-none animate__animated animate__flipInX">NINA
                            AURORA</h1>
                        <h2 class="text-center user-select-none d-none d-md-block">creative <span
                                class="spandivide">|</span> entrepreneur
                            <span class="spandivide">|</span> developer</h2>
                        <hr>
                    </header>
                </div>
            </div>
        </div>

        <!-- NAVBAR -->




        <nav id "navbar" class="navbar navbar-expand-lg nav-nav sticky-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#info">INFO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">EXPERIENCE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#education">EDUCATION & SKILLS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">PROJECTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>




        <section class="container">
            <!-- WHO AM I SECTION-->
            <div class="row justify-content-content">
                <div id="info" class="col-4" data-spy="scroll" data-target="navbar">
                    <h3>WHO AM I?</h3>

                    <hr>

                    I'm a high-school drop-out turned high fashion model,
                    turned entrepreneur, turned web developer in training. Lots of turning, one might say.
                    That's because, unlike Zoolander, I'm an ambiturner.
                    <br>
                    I enjoy making things, computer things, and also making computer things.
                </div>


                <!-- FACE SECTION-->
                <div class="col-4 text-center">
                    <h3> MY FACE </h3>
                    <hr>
                    <img src="/public/img/selfportrait1.jpg" style="width: 200px" alt="Self Portrait">
                </div>

                <!-- BIO SECTION-->
                <div class="col-4">
                    <h3>INFO</h3>
                    <hr>
                    <?php foreach($vars["bio"]["ninabio"] as $nina): ?>
                    <div><?= $nina["label"]?>: <?= $nina["value"]?></div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>


        <!-- 
        WORK EXPERIENCE SECTION -->
        <div id="experience" class="container" data-spy="scroll" data-target="navbar">
            <h3>Experience</h3>
            <hr>

            <span class="spandetail">2011-2021</span> Self Employed E-Commerce
            <br><br>

            <span class="spandetail"> Tasks:</span> Market research, product design, prototyping,
            production, import, marketing, SEO, copywriting, product photography and more.
            <p>

                Up until 2021 I've ran my own e-commerce business, unfortunately due to the COVID-19 pandemic
                it was no longer sustainable. Over the past 10 years it's known several iterations, each time
                focussing on selling different and unique products that I have designed and developed myself.
                Aside from production, I've taken care of every other aspect of my business during these years,
                which have resulted in ample experience on all fronts of running an e-commerce business.

                <br><br> In 2019 and 2020 I have succesfully ran 2 Kickstarter projects raising
                over &euro;60.000,- in total.

                <br><br>
                While I am skilled in the marketing and social aspect of e-commerce, I prefer the creative and
                technical side.

                <br><br>
                <!-- **I WILL ADD A GALLERY HERE WHEN I GET THE PICS** -->
            </p>

            <span class="spandetail"> 2008-2013</span> Full-time International Model
            <br><br>

            <span class="spandetail">Agencies:</span> Ulla Models Amsterdam, Joy Models Milano, FM Models
            London,
            Metropolitan Paris, Seeds
            Berlin <br>
            <span class="spandetail">Published in: </span>Vogue, Cosmopolitan, Avant Garde, Marie Claire, Madame
            Figaro, Elle, Glamour, Grazia, IO Donna


        </div>

        <!-- RELEVANT EXPERIENCE SECTION-->
        <div class="container">
            <h3>Relevant Experience</h3>
            <hr>

        </div>
        <br>

        <section class="container">
            <div class="row justify-content-content">

                <!-- EDUCATION SECTION-->
                <div class="col-3" id="education" class="container" data-spy="scroll" data-target="navbar">
                    <h3><i class="bi bi-pencil-fill"></i> Education</h3>
                    <hr>
                    <?php foreach ($vars['education']['ninaeducation'] as $edu) : ?>
                    <li><?= $edu['label'] ?>: <?= $edu['value'] ?></li>
                    <?php endforeach ?>
                </div>


                <!-- TOOLS SECTION-->
                <div class="col-3">
                    <h3><i class="bi bi-tools"></i> Tools</h3>
                    <hr>
                    <?php foreach ($vars['tools']['ninatools'] as $tool) : ?>
                    <li><?= $tool['label'] ?></li>
                    <?php endforeach ?>
                </div>

                <!-- SKILLS SECTION-->
                <div class="col-3">
                    <h3><i class="bi bi-palette-fill"></i> Skills</h3>
                    <hr>
                    <?php foreach ($vars['skills']['ninaskills'] as $skill) : ?>
                    <li><?= $skill['label'] ?>: <?= $skill['value'] ?></li>
                    <?php endforeach ?>
                </div>

                <!-- LANGUAGES SECTION-->
                <div class="col-3">
                    <h3><i class="bi bi-chat-text-fill"></i> Languages</h3>
                    <hr>
                    <?php foreach ($vars['languages']['ninalanguages'] as $language) : ?>
                    <li><?= $language['label'] ?>: <?= $language['value'] ?></li>
                    <?php endforeach ?>
                </div>

        </section>

        <!-- Projects SECTION-->
        <div class="container">
            <div id="projects" class="container" data-spy="scroll" data-target="navbar">
                <h3>Projects</h3>
                <hr>

                <div class="card-group">
                    <div class="card">
                        <img src="/public/img/bg1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project #1</h5>
                            <p class="card-text">My very first project utilizing only HTML & CSS.</p>
                            <a href="#" class="card-link d-flex justify-content-center">Card link</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/public/img/bg1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project #2</h5>
                            <p class="card-text">Collaboration with Femke Petter. I took care of the front-end,
                                utilizing HTML, CSS & JQuery</p>
                            <a href="#" class="card-link d-flex justify-content-center">Card link</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/public/img/bg1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project #3</h5>
                            <p class="card-text">It's this one!</p>
                            <a href="#" class="card-link d-flex justify-content-center">Card link</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/public/img/bg1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project #4</h5>
                            <p class="card-text">Not made yet :D</p>
                            <a href="#" class="card-link d-flex justify-content-center">Card link</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>



    </div>

    <?php require 'views/partials/footer.view.php' ?>