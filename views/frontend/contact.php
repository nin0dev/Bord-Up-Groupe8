<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bord'Up</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=ABeeZee&display=swap%22");
        </style>
        <link rel="stylesheet" href="./style contact/style.css" />
    </head>


    <body>
        <div class="container">
            <div class="row"> 
                <div class="col-10">
                    <h1>Contactez-nous</h1>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-3">
                            <label for="validationCustom01" class="form-label"
                                >Votre prénom</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="validationCustom01"
                                value=""
                                required
                            />
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label"
                                >Votre nom</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="validationCustom02"
                                value=""
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="form-control"
                                id="exampleFormControlInput1"
                                placeholder="name@example.com"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlTextarea1"
                                class="form-label"
                                >Votre message</label
                            >
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="5"
                                maxlength="1500"
                            ></textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="submit">
                                Envoyer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <p>Mentions légales</p>
            <p>Conditions générales</p>
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        ></script>
    </body>
</html>