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

        <style>
            html {
                height: 100%;
            }

            body {
                min-height: 100%;
                display: flex;
                flex-direction: column;
            }

            /*
            Color Palette
            - FFFFFF (white)
            - F1DBE8 (very light purple)
            - B8537B (light purple)
            - B5375B (pink)
            - 733657 (dark purple)
            */

            .blog-section {
                font-family: 'Raleway', sans-serif;
                font-size: 18px;
                font-weight: 500;
                color: black;
                line-height: 0.7cm;
            }

            .header-line-left {
                border: 1.5px solid white;
                width: 50px;
            }

            .header-line-right {
                border: 1.5px solid #733657;
                width: 50px;
            }

            .law-updates {
                background-color: #733657;

                color: white;
                font-weight: 300;
            }

            .everyday-law {
                background-color: #F1DBE8;

                color: #733657;
            }

            .law-updates-header, .everyday-law-header {
                font-family: 'Libre Baskerville', serif;
                font-size: 24px;
                font-weight: 700;
            }

            .img-law-updates, .img-everyday-law {
            }

            .law-updates-blog-title, .everyday-law-blog-title {
                font-size: 24px;
                font-weight: 700;
            }

            .btn-law-updates, .btn-everyday-law {
                background-color: #B5375B;
                border-radius: 10px;
                width: 200px;
                height: 50px;

                color: white;

                margin-top: auto;
            }

        </style>
    </head>

    <body>
        <div class="blog-section row">
            <div class="law-updates col-lg-6 pb-3">
                <div class="card-body px-5">
                    <hr class="header-line-left border-1 mx-auto">
                    <div class="law-updates-header card-title text-center">LAW UPDATES</div>

                    <div class="law-updates-picture py-3 text-center container-fluid">
                        <img src="{{ URL::to('/') }}/feminine-image/law-update.jpeg" class="img-law-updates img-fluid rounded mx-auto d-block" alt="Featured Law Update">
                    </div>

                    <div class="law-updates-blog-title py-4">Can your text message or e-mail message be used as evidence in court? </div>

                    <div class="law-updates-blog-content">
                        Before the advent of computer age, we have been familiar with the use of documentary evidence in court such as contracts, agreements, letters and other writings. <br>
                        <br>
                        These writings printed in papers or paper-based documents are popularly known then as our documentary evidence. <br>
                        <br>
                        At that time, text message or e-mail message, as it was not yet widely used and known in the Philippines, are not considered as documentary evidence by our courts of law. <br>
                        <br>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn-law-updates btn" type="button">LEARN MORE</button>
                    </div>
                </div>
            </div>

            <div class="everyday-law col-lg-6 pb-5 position-relative">
                <div class="card-body px-5">
                    <hr class="header-line-right border-1 mx-auto">
                    <div class="everyday-law-header card-title text-center">EVERYDAY LAW</div>

                    <div class="everyday-law-picture py-3 text-center container-fluid">
                        <img src="{{ URL::to('/') }}/feminine-image/everyday-law-sample-pic.jpg" class="img-everyday-law img-fluid rounded mx-auto d-block" alt="Featured Everyday Law">
                    </div>

                    <div class="everyday-law-blog-title py-4">Co-maker ng 'di nagbayad sa utang, tama ba na ikaw ang singilin? </div>

                    <div class="everyday-law-blog-content">
                        Nakapirma ka na ba sa loan agreement bilang co-maker? <br>
                        <br>
                        Ano ang panganib kung ikaw ay pipirma bilang co-maker sa isang loan? <br>
                        <br>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn-everyday-law btn position-absolute bottom-0" type="button">LEARN MORE</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
