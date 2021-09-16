<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Font Style -->
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Title -->
        <title>Law Updates</title>

        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="update-everyday-section row m-0 position-relative" data-bs-custom-class="beautifier">
            <!-- Contact Us -->
            <div class="update-everyday-contact-us text-center flex-row px-5">
                <div class="update-everyday-contact-content py-4">
                    <span class="h5">Got a legal question? Get in touch with us! &nbsp</span>

                    <span class="justify-content-md-center float">
                        <button class="btn-contact-us py-1 px-4 rounded-3" type="button">Contact Us</button>
                    </span>
                </div>
            </div>

            <!-- Law Updates -->
            <div class="law-updates col-lg-6 pb-5 position-relative">
                <div class="card-body px-5 py-5">
                    <hr class="header-line-left border-1 mx-auto">
                    <div class="law-updates-header card-title text-center h2 mt-4">LAW UPDATES</div>

                    <div class="law-updates-picture text-center container-fluid py-5">
                        <img src="{{ URL::to('/') }}/images/law-update.jpeg" class="img-law-updates img-fluid rounded mx-auto d-block" alt="Featured Law Update">
                    </div>

                    <div class="law-updates-blog-title h4 pb-4">Can your text message or e-mail message be used as evidence in court? </div>

                    <div class="law-updates-blog-content mb-4">
                        Before the advent of computer age, we have been familiar with the use of documentary evidence in court such as contracts, agreements, letters and other writings. <br>
                        <br>
                        These writings printed in papers or paper-based documents are popularly known then as our documentary evidence. <br>
                        <br>
                        At that time, text message or e-mail message, as it was not yet widely used and known in the Philippines, are not considered as documentary evidence by our courts of law. <br>
                        <br>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center align-items-end">
                        <button class="btn-law-updates position-absolute py-1 px-4 rounded-3" type="button">LEARN MORE</button>
                    </div>
                </div>
            </div>

            <!-- Everyday Law -->
            <div class="everyday-law col-lg-6 pb-5 position-relative">
                <div class="card-body px-5 py-5">
                    <hr class="header-line-right border-1 mx-auto">
                    <div class="everyday-law-header card-title text-center h2 mt-4">EVERYDAY LAW</div>

                    <div class="everyday-law-picture text-center container-fluid py-5">
                        <img src="{{ URL::to('/') }}/images/everyday-law-sample-pic.jpg" class="img-everyday-law img-fluid rounded mx-auto d-block" alt="Featured Everyday Law">
                    </div>

                    <div class="everyday-law-blog-title h4 pb-4">Co-maker ng 'di nagbayad sa utang, tama ba na ikaw ang singilin? </div>

                    <div class="everyday-law-blog-content mb-5">
                        Nakapirma ka na ba sa loan agreement bilang co-maker? <br>
                        <br>
                        Ano ang panganib kung ikaw ay pipirma bilang co-maker sa isang loan? <br>
                        <br>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center align-items-end">
                        <button class="btn-everyday-law position-absolute py-1 px-4 rounded-3" type="button">LEARN MORE</button>
                    </div>
                </div>
            </div>

            <!-- Blank Space -->
            <div class="update-everyday-blank p-4"></div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
