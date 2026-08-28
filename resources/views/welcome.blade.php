<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EksaComercial</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <img src="{{ url('img/eksa.png') }}" class="margin: 0 auto;" style="width: 300px; heigth: 300px;" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col fs-2 justify-content-center text-center">
                Gases Industriales y Medicinales
            </div>
        </div>
        <br><br>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-8" style="padding: 10px 15px">
                <span class="h5 font-weight-bold">Santiago</span><br>
                <span class="fst-italic">Teléfono : +56 9 7275 7988<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+56 9 7884 0118<br>
                Dirección : Las Araucarias 9080, Quilicura</span>
            </div>
            <div class="col-md-4 col-sm-8" style="padding: 10px 15px">
                <span class="h5 font-weight-bold">San Antonio</span><br>
                <span class="fst-italic" style="font-size: 16px">Teléfono : +56 9 5010 8297</span>
            </div>
            <div class="col-md-4 col-sm-8" style="padding: 10px 15px">
                <span class="h5 font-weight-bold">San Felipe</span><br>
                <span class="fst-italic">Teléfono : +56 9 7175 2830</span>
            </div>
        </div>

        <div class="row fw-bold">
            <div class="col justify-content-center text-center fs-5 fst-italic lh-base" style="margin-top: 50px;">
                Sentimos nuestra ausencia, estamos cambiandonos de casa y renovando el nuevo diseño para ustedes, estaremos muy pronto de regreso.
            </div>
        </div>
        <br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
