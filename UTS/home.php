<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hotel Malang Inn</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="price.html">Check Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h3 class="text-center">Welcome, <?php echo $_COOKIE['username']; ?></h3>

        <div id="slider" style="width: 50vw" class="mx-auto text-center border border-1 border-black p-3 rounded-3 pt-1">
            <div class="slidertitle fs-2" id="title1">Ruang 1</div>
            <img class="sliderImage w-100" id="sliderImage1" src="ruang.jpg" alt="Gambar 1">
            <div class="slidertitle fs-2" id="title2">Restaurant</div>
            <img class="sliderImage w-100" id="sliderImage2" src="restaurant.jpg" alt="Gambar 2">
            <div class="slidertitle fs-2" id="title3">Meeting room</div>
            <img class="sliderImage w-100" id="sliderImage3" src="meeting.jpg" alt="Gambar 3">
        </div>

        <div class="container">
            <h6>Hotel Profile</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consectetur consequatur cum dignissimos distinctio dolore, dolorem enim error expedita harum iste molestiae nam pariatur perspiciatis porro provident quae quam quas quisquam quod reprehenderit rerum voluptas voluptatum? Animi aperiam est expedita quibusdam! Accusamus, autem delectus ducimus ea earum est facere illo ipsam laudantium molestiae nesciunt, nisi numquam odio, omnis quos sapiente similique? A accusamus ad consequatur corporis culpa delectus, deleniti dignissimos dolor dolorem doloremque exercitationem illo in minus molestias necessitatibus, nisi nobis numquam officiis omnis quidem reprehenderit repudiandae rerum similique tempora tempore unde velit vero? Magni numquam quas repudiandae sed unde!</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>

            <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"
                    integrity="sha256-u0L8aA6Ev3bY2HI4y0CAyr9H8FRWgX4hZ9+K7C2nzdc=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                $.ajax(
                    {
                        url: "checkSession.php",
                        type: "POST",
                        data: {
                            email: $("#exampleInputEmail1").val(),
                            password: $("#exampleInputPassword1").val(),
                        },
                        success: function (data) {
                            if (data == "no") {
                                window.location = "index.html";
                            }
                        }
                    }
                );
                let i = 0;
                $('.sliderImage, .slidertitle').hide();
                setInterval(function () {
                    $('.sliderImage, .slidertitle').fadeOut(500);
                    $('#sliderImage' + ++i).fadeIn(1000);
                    $('#title' + i).fadeIn(1000);
                    if (i === 3) i = 0;
                }, 3000);
            });
        </script>
    </body>
</html>