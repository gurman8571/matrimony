<div class="tm-section tm-section-pad tm-bg-img tm-position-relative" id="tm-section-6">
    <div class="container ie-h-align-center-fix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                <h2 class="align-self-start text-light pt-5 shadow font-weight-bold display-3">contact us </h2>
                <p class="text-light pl-3 h4 ">have some questions ask us?</p>
            </div>
            <div class=" display-flex col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 mt-3 mt-md-0">

                <div class="tm-bg-white tm-p-4">

                    <form action="{{route('EnquiryMail')}}" method="post" class="contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="contact_name" name="name" class="form-control"
                                placeholder="Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="email" class="form-control"
                                placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input type="text" id="contact_subject" name="subject" class="form-control"
                                placeholder="Subject" required />
                        </div>
                        <div class="form-group">
                            <textarea id="contact_message" name="message" class="form-control" rows="9"
                                placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary tm-btn-primary">Send Message Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="tm-bg-dark-blue">
    <div class="container">
        <div class="row">
            <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                Copyright &copy; <span class="tm-current-year">{{now()->year}}</span> Matrimony

                .com
            </p>
        </div>
    </div>
</footer>
</div>


</div>
<script>

    window.addEventListener("hashchange", function () {
    window.scrollTo(window.scrollX, window.scrollY - 125);
    })
</script>
