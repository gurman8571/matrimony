
<style>
    .iti{
        width:100%
    }
</style>


<div class="col-lg-4">

    <div class="widget-area" style="position: -webkit-sticky;position: sticky;top: 100px; m-4">


<br>
        <div class="contact widget-item p-4  ">
            <br>
            <h3 class="border-left font-weight-bold" >Get Instant Advice</h3>
            <hr>
            <br>
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
                    <input type="tel" id="phone" name="phone" class="form-control"
                        placeholder="phone" required />
                        <span id="error" class="hide"></span>
                        <span id="valid" class="hide"></span>
                </div>
                <div class="form-group">
                    <textarea id="contact_message" name="message" class="form-control" rows="6"
                        placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary tm-btn-primary">Send Message Now</button>
            </form>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/js/intlTelInput.min.js" integrity="sha512-1NlRc/n6l/Gl7K7u9g6Z9kxZsKqcJV5uWM/Tv/WCjxDBqUSlxlgHgQI4Z17RW7BdNJjgLj0l6x0kGd0DOvu4AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    var input=document.getElementById('phone');
    var error=document.getElementById('error');
    var valid=document.getElementById('valid');
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
    var iti=window.intlTelInput(input,{
        utilsScript:'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/js/utils.js',
        initialCountry: 'in',
        hiddenInput: "phone",
        separateDialCode: true,
        formatOnDisplay: false,

    })

    var reset = function () {
            input.classList.remove("error");
            error.innerHTML=""
              error.classList.add("hide")
        valid.classList.add("hide")
        };

        input.addEventListener("blur",()=>{

          reset();
          if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    valid.classList.remove("hide")
                }
                 else {
                    input.classList.add("error")
                    //console.log(errorMap[errorCode]);
                    var errorCode = iti.getValidationError();
                    //console.log(errorCode);
                    error.innerHTML=errorMap[errorCode];
                    error.classList.remove("hide");
                }
            }
            return false;
        })

    </script>
