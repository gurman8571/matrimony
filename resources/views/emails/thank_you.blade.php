
<!-- Global site tag (gtag.js) - Google Ads: 375186783 -->

<x-navbar/>

<section>
    <div class="container mb-5">
        <div class="row thank-you-container" >
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <div>
                                <img src="{{ asset('img/thank-you.png') }}"
                                      alt=" Thanks">
                            </div>
                            <div>
                                <h3>Dear
                                    <b>{{ $data['name'] }}</b>,</h3>
                                    <h4>Enquiry received. Our representative will contact shortly.</h4>
                                <p>Thank you for your enquiry verification. It has been forwarded to the relevant
                                    department and will be dealt with as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer/>
