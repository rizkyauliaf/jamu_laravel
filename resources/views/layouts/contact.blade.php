<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <span>Kontak</span>
            <h2>Kontak</h2>
            <p>Silakan Masukan Pesan Anda</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>Malang Raya</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>jamukita@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telp:</h4>
                        <p>08878983577</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form role="form" class="php-email-form">
                    {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name">


                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Subjek</label>
                        <input type="text" class="form-control" name="subject" id="subject">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Pesan</label>
                        <textarea class="form-control" name="message" id="message" rows="10"></textarea>
                    </div>
                    {{-- <div class="my-3">
                        <div class="loading">Proses</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Pesan Terkirim. Thank you!</div>
                    </div> --}}
                    <div class="text-center"><button name="submit" id="submit" type="submit"
                            onclick="showAlert()">Kirim</button></div>
                </form>
            </div>

        </div>

    </div>



</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/Javascript">
    function showAlert() {
        console.log("tes");


        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;

        if (name == '' || email == '' || subject == '' || message == '') {
            swal({
                title: "Fields Empty!!",
                text: "Please check the missing field!!",
                icon: "warning",
                button: "Ok",
            });
        } else {
            swal({
                title: "Successfully submitted",
                icon: "success",
                button: "Yes!!!",
                //synchronu -> then bermaksud ketika button telah di tekan.
            }).then(()=>{
                location.reload();
            });
        }
    }
</script>
