@section('css_link')
    <style>
        .error {
            color: red;
        }

        .alert-error {
            color: red;
        }
    </style>
@endsection
<div id="contact" class="contact-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.8690599650324!2d73.09430814333295!3d33.52359494108848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfedbbd397b177%3A0xef34955c9950c2e7!2sThe%20Educational%20Network!5e0!3m2!1sen!2s!4v1654497708690!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-5 contact-forms">
                <h2 class="area-title">We’d love to hear from <br> you anytime</h2>
                <form method="POST" action="{{ route('contact.store') }}" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <i class="fas fa-phone"></i>
                                <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group comments">
                                <i class="fas fa-edit"></i>
                                <textarea class="form-control" id="comments" name="description" placeholder="Tell Us About Project *"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" id="submit">
                                Send Message <i class="fa fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Alert Message -->
                    <div class="col-lg-12 alert-notification">
                        <div id="message" class="alert-msg"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('js_link')
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>
        if ($("#contact-form").length > 0) {
            $("#contact-form").validate({

                rules: {
                    name: {
                        required: true,
                    },

                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                },
                messages: {

                    name: {
                        required: "Please enter name",
                    },
                    email: {
                        required: "Please enter email",
                        email: "Please enter valid email"
                    },
                    phone: {
                        required: "Please enter phone number",
                    },
                    description: {
                        required: "Please enter description",
                    },
                },
            })
        }
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> --}}
@endsection
