@extends('layouts.otherLayouts')

@section('title')
    JIT LANKA GALLERY
@endsection


@section('content')

    <body>
        <div class="container pt-5">
            <div data-aos="fade-up" data-aos-duration="1000" class="pt-5">
                <h1 class="textfive">OUR <strong class="textSix">GALLERY</strong> </h1>
                <p class="text-muted"></p>
            </div>
        </div>
        <div class="container">
            <div class="main-wrapper">
                <div class="row" id="GalleryMainBody">
                    {{-- <div class="col-md-3 align-self-center">
                        <div class="img-wrapper">
                            <div class="img-item text-center">
                                <img src="https://images.pexels.com/photos/269923/pexels-photo-269923.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                    alt="" class="img-fluid">
                                <div>
                                    <p class=" nameText">Guest Name</p>
                                    <p class="locationtext">COuntry</p>
                                    <p class="yearText">year</p>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                    <img id="testIMG" src="" alt="">
                </div>
            </div>
        </div>

        <div class="gallary-bg"> </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
            integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
        </script>



    </body>
@endsection


@section('scripts')
    <script>
        function magnify(imgID, zoom) {
            var img, glass, w, h, bw;
            img = document.getElementById(imgID);

            /*create magnifier glass:*/
            glass = document.createElement("DIV");
            glass.setAttribute("class", "img-magnifier-glass");

            /*insert magnifier glass:*/
            img.parentElement.insertBefore(glass, img);

            /*set background properties for the magnifier glass:*/
            glass.style.backgroundImage = "url('" + img.src + "')";
            glass.style.backgroundRepeat = "no-repeat";
            glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
            bw = 3;
            w = glass.offsetWidth / 2;
            h = glass.offsetHeight / 2;

            /*execute a function when someone moves the magnifier glass over the image:*/
            glass.addEventListener("mousemove", moveMagnifier);
            img.addEventListener("mousemove", moveMagnifier);

            /*and also for touch screens:*/
            glass.addEventListener("touchmove", moveMagnifier);
            img.addEventListener("touchmove", moveMagnifier);

            function moveMagnifier(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                x = pos.x;
                y = pos.y;
                /*prevent the magnifier glass from being positioned outside the image:*/
                if (x > img.width - (w / zoom)) {
                    x = img.width - (w / zoom);
                }
                if (x < w / zoom) {
                    x = w / zoom;
                }
                if (y > img.height - (h / zoom)) {
                    y = img.height - (h / zoom);
                }
                if (y < h / zoom) {
                    y = h / zoom;
                }
                /*set the position of the magnifier glass:*/
                glass.style.left = (x - w) + "px";
                glass.style.top = (y - h) + "px";
                /*display what the magnifier glass "sees":*/
                glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
            }

            function getCursorPos(e) {
                var a, x = 0,
                    y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {
                    x: x,
                    y: y
                };
            }
        }


        $("img").click(function() {
            const imgClone = $(this).parent();
            $(".gallary-bg").addClass("gallary-bg-block")
            $(".gallary-bg").append(imgClone.clone());
            $(".gallary-bg .img-item img").addClass("animated fadeIn");
            $(".gallary-bg").removeClass("animated fadeOut");
            $('.gallary-bg .img-item img').attr('id', 'myimage');

            magnify("myimage", 2);

        });

        $(".gallary-bg").click(function() {
            $(this).addClass("animated fadeOut");
            $(this).children().children().addClass("fadeLeft");
            $(this).children().remove();
            var rmBg = $(this);
            setTimeout(() => {
                rmBg.removeClass("gallary-bg-block");
            }, 400);
        });
    </script>

    <script>
        $(document).ready(function() {

            getImages();

            function getImages() {

                $.ajax({
                    type: "get",
                    url: "/getGalleryImage",
                    success: function(res) {
                        $.each(res, function(key, item) {
                            console.log(item);
                            let img = item.GalleryPicture;
                            let imageURL = '{{ asset("jitImage/Gallery") }}/' + img;
                            
                            $('#GalleryMainBody').append('<div class="col-md-4 align-self-center">\
                            <div class="img-wrapper">\
                                <div class="img-item text-center">\
                                    <img src="'+imageURL+'" alt="" class="img-fluid">\
                                    <div>\
                                        <p class=" nameText">'+item.GuestName+'</p>\
                                        <p class="locationtext">'+item.Country+'</p>\
                                        <p class="yearText">'+item.Year+'</p>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>');
                        });
                    }
                });

            }

        });
    </script>
@endsection
