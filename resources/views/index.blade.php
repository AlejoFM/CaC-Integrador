<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Codo a Codo Project</title>
</head>
<body class="w-full">
<div>
    <header class="w-100">
        <x-nav></x-nav>
    </header>


    <main class="text-center">
        <div id="hero" class="text-white text-xl">
            <div class="row">
                <img id="hero-header-img" src="images/ba1.jpg" alt="hero-image" class="img-fluid w-100" style="filter: brightness(0.55);">
                <div>
                    <div class="col position-relative container-fluid">
                        <div id="hero-header-content" class="position-absolute d-flex flex-column justify-content-center align-items-center " style=" right: 2rem; bottom: 6rem; margin-bottom: 0.5rem;">
                            <header >
                                <h1> Conf Bs As </h1>
                                <p class="text-xl-start"> Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad<br>
                                    el conocimiento y experiencia de los expertos que están creando el futuro de Internet.</p>
                                <div id="hero-buttons">
                                    <button class="btn btn-outline-secondary text-white" style="border-color: whitesmoke"> Quiero ser orador </button>
                                    <button class="btn btn-primary " style="background-color: #59a744; border-color: #59a744"> Compra tu ticket </button>
                                </div>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="people" class="mt-4">
            <div class="container text-center">
                <span>CONOCE A LOS</span>
                <h1> ORADORES </h1>
                <div class="row " id="cards">
                    <x-card :imagePath="asset('images/steve.jpg')" :cardCategory="'Javascript'" :cardCategory2="'React'" :cardTitle="'Steve Jobs'" :cardDescription="'Descripción de Steve Jobs'"/>
                    <x-card :imagePath="asset('images/bill.jpg')" :cardCategory="'Javascript'" :cardCategory2="'React'" :cardTitle="'Bill Gates'" :cardDescription="'Descripción de Bill Gates'"/>
                    <x-card :imagePath="asset('images/ada.jpeg')" :cardCategory="'Negocios'" :cardCategory2="'Startups'" :cardTitle="'Ada Lovelace'" :cardDescription="'Descripción de Ada Lovelace'"/>

                </div>
            </div>
        </section>
        <section class=" text-center" id="place">
            <x-place></x-place>
        </section>

        <section id="contact">
            <div class="container text-center mt-4">
                <p style="margin-bottom: 0px">CONVIERTETE EN UN</p>
                <h1>ORADOR</h1>
                <p>Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</p>
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
                        </div>
                    </div>
                    <div class="col">
                        <textarea type="text" class="form-control mt-4" style="height: 8rem" placeholder="Sobre qué quieres hablar" aria-label="Message"></textarea>
                    </div>
                    <span>*Recuerda incluir un título para tu charla</span>
                    <div>
                        <button class="btn btn-primary mt-4" style="width: 100%; background:#59a744; border-color: #59a744">Enviar</button>
                    </div>
                </form>
            </div>
        </section>

    </main>
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">Preguntas frecuentes</li>
                        <li class="list-inline-item">Contáctanos</li>
                        <li class="list-inline-item">Prensa</li>
                        <li class="list-inline-item">Conferencias</li>
                        <li class="list-inline-item">Términos y condiciones</li>
                        <li class="list-inline-item">Privacidad</li>
                        <li class="list-inline-item">Estudiantes</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
    @media (width <= 768px) {
        .position-absolute {
            right: 0!important;
            left: 0;
        }
        #hero-header-img{
            padding: 0px;
        }
        #hero-header-content{

        }
    }
    @media(width <= 540px){
        .position-absolute{
            bottom: 0!important;
        }
    }
</style>
</body>
</html>
