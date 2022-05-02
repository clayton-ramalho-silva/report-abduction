<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Report Abduction</title>
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1>Aliens Abducted Me - Report an Abduction</h1>
        </header>
    </div>

    <div class="container mt-5">
        <h2>Share your of alien abduction:</h2>

        <form action="#" method="post" class="mt-3 mb-5">
            @csrf

            {{-- First Name --}}
            <div class="input-group mb-3 mt-3">
                <span for="first_name" class="input-group-text">Person:</span>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
            </div>

            {{-- Email --}}
            <div class="input-group mb-3 mt-3">
                <span for="last_name" class="input-group-text">E-mail:</span>
                <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
            </div>

            {{-- When did it happen --}}
            <div class="input-group mb-3 mt-3">
                <span for="when_it_happened" class="input-group-text">When did it happen?</span>
                <input type="text" name="when_it_happened" id="when_it_happened" class="form-control">
            </div>

            {{-- How long were you gone? --}}
            <div class="input-group mb-3 mt-3">
                <span for="how_long" class="input-group-text">How long were you gone?</span>
                <input type="text" name="how_long" id="how_long" class="form-control">
            </div>

            {{-- How many did you see? --}}
            <div class="input-group mb-3 mt-3">
                <span for="how_many" class="input-group-text">How many did you see?</span>
                <input type="text" name="how_many" id="how_many" class="form-control">
            </div>

            {{-- Describe them --}}
            <div class="input-group mb-3 mt-3">
                <span for="allien_description" class="input-group-text">Describe them:</span>
                <input type="text" name="allien_description" id="allien_description" class="form-control">
            </div>

            {{-- What did they do you? --}}
            <div class="input-group mb-3 mt-3">
                <span for="what_they_did" class="input-group-text">What did they do you?</span>
                <input type="text" name="what_they_did" id="what_they_did" class="form-control">
            </div>

            {{-- Have you seen my dog Fang? --}}
            <div class="input-group mb-3 mt-3">
                <span for="fang_spotted" class="input-group-text" style="margin-right: 10px">Have you seen my dog Fang?</span>
                <input type="radio" name="fang_spotted" id="fang_spotted" class="form-check-input" value="yes"> Yes
                <input type="radio" name="fang_spotted" id="fang_spotted" class="form-check-input" value="no"> No
            </div>
            <img src="{{asset('storage/img/dog.jpeg')}}" alt="">

            {{-- Anything else you want to add? --}}
            <div class="input-group mb-3 mt-3">
                <span for="other" class="input-group-text">Anything else you want to add?</span>
                <input type="text" name="other" id="other" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Report Abduction</button>
        </form>
    </div>


</body>
</html>
