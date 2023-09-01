<style>
    #GPictureView{
        height: 150px;
        width: 170px;
    }
    .ImageInTable{
        width: 100px;
        height: 90px;
    }
</style>

@extends('layouts.dash')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="container">
        <div class="alert alert-danger alert-dismissible fade show d-none" role="alert"id="error-alert">
            <i class="bi bi-exclamation-octagon me-1"></i><span id="error-message"></span>
        </div>
        <div class="alert alert-success alert-dismissible fade show d-none" role="alert" id="success-alert">
            <i class="bi bi-check-circle me-1"></i><span id="success-message"></span>
        </div>
        <div class="card">
            <div class="container mb-4" id="AddGaleryPicDiv">
                <h4 class="mt-2" style="margin-left: 10px;">Add Images</h4>
                <img src="../jitImage/Gallery/default-avatar.png" id="GPictureView" class="mb-3" alt=""><br>
                <div id="imageSelect">
                    <input type="file" accept="image/jpeg,image/jpg,image/png,image/PNG" maxlength="10000000" class="form-control mb-2" name="GPicture" id="GPicture" required>
                    <input type="text" placeholder="Guest Name" class="form-control mb-2" id="PictureGuestName" required>
                    <input type="text" placeholder="Country" class="form-control mb-2" id="PictureCountry" required>
                    <input type="text" placeholder="Year" class="form-control mb-2" id="PictureYear" required>
                    <button type="button" id="GalleryPicAdd" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover mb-10" id="ImageTable">
                    <thead style="text-align: center">
                        <tr class="table-primary">
                            <th>Image</th>
                            <th>Guest</th>
                            <th>Country</th>
                            <th>Year</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 " id="ImageTableTbody" style="text-align: center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {

            var inputElement = document.getElementById('PictureYear');

            inputElement.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
            if (this.value.length > 4) {
                this.value = this.value.slice(0, 4); // Truncate input to 4 characters
            }
            });


            $(document).on('click','#GalleryPicAdd',function (e) {
                e.preventDefault();
                let country = $('#PictureCountry').val();
                let Year = $('#PictureYear').val();
                let Guest = $('#PictureGuestName').val();

                var formData = new FormData();
                var file = $('#GPicture')[0].files[0];

                formData.append('GalleryPicture', file);
                formData.append('Country', country);
                formData.append('Year', Year);
                formData.append('GuestName', Guest);

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

                if (!file) {
                    var errorPopup = document.getElementById("error-alert");
                    var errorMsg = document.getElementById("error-message");
                        errorMsg.innerHTML = 'Choose an Image';
                            errorPopup.classList.remove("d-none");
                            setTimeout(function() {
                            errorPopup.classList.add("d-none");
                    }, 3000);
                }else{
                    $.ajax({
                        type: "post",
                        url: "/AddImageToGallery",
                        data:formData,
                        contentType: false,
                        processData: false,
                        success: function (res) {
                            // console.log(res);
                            if (res.status == 200) {
                                var successPopup = document.getElementById("success-alert");
                                var successMsg = document.getElementById("success-message");
                                successMsg.innerHTML = res.message;
                                successPopup.classList.remove("d-none");
                                setTimeout(function() {
                                    successPopup.classList.add("d-none");
                                }, 3000);
                                $('#PictureCountry').val('');
                                $('#PictureYear').val('');
                                $('#PictureGuestName').val('');
                                $('#GPicture').val('');
					            $('#GPictureView').attr('src', '../jitImage/Gallery/default-avatar.png');
                                ImageTble();                    
                            }else if (res.status == 400) {
                                var errorPopup = document.getElementById("error-alert");
                                var errorMsg = document.getElementById("error-message");
                                errorMsg.innerHTML = 'Error occurred';
                                errorPopup.classList.remove("d-none");
                                setTimeout(function() {
                                errorPopup.classList.add("d-none");
                                }, 3000); 
                            }
                        }
                    });
                }

            });

            // View
            $(document).on('change', '#GPicture' ,function (e) {
                e.preventDefault();
                var input = this;
                if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#GPictureView').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}

            });

            ImageTble();
            function ImageTble(){
                $.ajax({
                    type: "get",
                    url: "/getGalleryImage",
                    success: function (res) {
                        $('#ImageTableTbody').html("");
                            $.each(res, function (key, item) { 
                                let img = item.GalleryPicture;
                                let imageURL = '{{ asset("jitImage/Gallery") }}/' + img;
                                $('#ImageTableTbody').append('<tr>\
                                <td><img class="ImageInTable" src="'+imageURL+'" alt=""></td>\
                                <td>'+item.GuestName+'</td>\
                                <td>'+item.Country+'</td>\
                                <td>'+item.Year+'</td>\
                                <td>\
                                    <button class="btn btn-outline-danger" id="dltImage" value="' +item.id +'"">Delete</button>\
                                </td>\
                            </tr>');

                            });
                    }
                });
            }

            $(document).on('click','#dltImage',function (e) {
                e.preventDefault();
                let id = $(this).val();

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

                $.ajax({
                    type: "delete",
                    url: "/DeleteImage/"+id,
                    success: function (res) {
                        console.log(res);
                        if (res.success) {
                            var successPopup = document.getElementById("success-alert");
                                var successMsg = document.getElementById("success-message");
                                successMsg.innerHTML = res.success;
                                successPopup.classList.remove("d-none");
                                setTimeout(function() {
                                    successPopup.classList.add("d-none");
                                }, 5000);
                                ImageTble();
                                $(window).scrollTop(0);
                        }else{
                            var errorPopup = document.getElementById("error-alert");
                                var errorMsg = document.getElementById("error-message");
                                errorMsg.innerHTML = 'Error occurred';
                                errorPopup.classList.remove("d-none");
                                setTimeout(function() {
                                errorPopup.classList.add("d-none");
                                }, 5000); 
                                $(window).scrollTop(0);
                        }
                    }
                });
            });

        });
    </script>
@endsection
