<section class="contact-area section-padding" id="contact-page">
    <div class="container">
            <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title" style="margin-top:3px">
                    <h3 class="title">{{ $contactTitle ? $contactTitle->title: '' }}</h3>
                    <div class="desc">
                        <p>{{ $contactTitle ? $contactTitle->sub_title: '' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="contact-form" id="contact-form" method="POST" action="{{ route('contact') }}" novalidate>
                    @csrf 
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="name" id="form-name" class="input-box"
                                    placeholder="Nom Complet">
                                <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                                <div class="error-container">
                                    <i class="fal fa-exclamation-circle error-icon"></i>
                                    <span class="error-message" id="name-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="email" id="form-email" class="input-box"
                                    placeholder="Email">
                                <label for="form-email" class="icon lb-email"><i class="fal fa-envelope"></i></label>
                                <div class="error-container">
                                    <i class="fal fa-exclamation-circle error-icon"></i>
                                    <span class="error-message" id="email-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="subject" id="form-subject" class="input-box"
                                    placeholder="Objet">
                                <label for="form-subject" class="icon lb-subject"><i class="fal fa-check-square"></i></label>
                                <div class="error-container">
                                    <i class="fal fa-exclamation-circle error-icon"></i>
                                    <span class="error-message" id="subject-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <textarea class="input-box" id="form-message" placeholder="Message" cols="30"
                                    rows="4" name="message"></textarea>
                                <label for="form-message" class="icon lb-message"><i class="fal fa-edit"></i></label>
                                <div class="error-container">
                                    <i class="fal fa-exclamation-circle error-icon"></i>
                                    <span class="error-message" id="message-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <button class="button-primary mouse-dir" type="submit" id="submit_btn">Envoyer maintenant <span
                                        class="dir-part"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
.form-box {
    position: relative;
    margin-bottom: 20px;
}

.input-box {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: border-color 0.3s ease;
}

.input-box.has-error {
    border-color: #ff0000;
}

.error-container {
    display: none;
    align-items: center;
    color: #ff0000;
    margin-top: 5px;
    padding: 8px 12px;
    background-color: #fff0f0;
    border-radius: 4px;
    font-size: 14px;
    animation: fadeIn 0.3s ease;
}

.error-container.visible {
    display: flex;
}

.error-icon {
    margin-right: 8px;
    font-size: 16px;
}

.error-message {
    color: #ff0000;
    font-weight: 500;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

.input-box:invalid:not(:focus),
.input-box.has-error {
    border-color: #ff0000;
    background-color: #fff0f0;
}
</style>

@push('scripts')
<script>
$(document).ready(function(){
    // Configuration CSRF
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function isValidEmail(email) {
        const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return emailRegex.test(email.toLowerCase());
    }

    $('#form-email').on('blur', function() {
        const email = $(this).val().trim();
        validateEmail(email);
    });

    function validateEmail(email) {
        if (!email) {
            showError('form-email', 'L\'email est obligatoire');
            return false;
        } else if (!isValidEmail(email)) {
            showError('form-email', 'Format d\'email invalide');
            return false;
        } else {
            clearError('form-email');
            return true;
        }
    }

    function showError(fieldId, message) {
        const field = $(`#${fieldId}`);
        const errorContainer = field.siblings('.error-container');
        const errorMessage = errorContainer.find('.error-message');
        
        field.addClass('has-error');
        errorMessage.text(message);
        errorContainer.addClass('visible');
    }

    function clearError(fieldId) {
        const field = $(`#${fieldId}`);
        field.removeClass('has-error');
        field.siblings('.error-container').removeClass('visible');
    }

    function clearErrors() {
        $('.error-container').removeClass('visible');
        $('.input-box').removeClass('has-error');
        $('.error-message').text('');
    }

    function validateForm() {
        let isValid = true;
        clearErrors();

        const name = $('#form-name').val().trim();
        const email = $('#form-email').val().trim();
        const subject = $('#form-subject').val().trim();
        const message = $('#form-message').val().trim();

        if (!name) {
            showError('form-name', 'Le nom est obligatoire');
            isValid = false;
        }

        if (!validateEmail(email)) {
            isValid = false;
        }

        if (!subject) {
            showError('form-subject', 'L\'objet est obligatoire');
            isValid = false;
        }

        if (!message) {
            showError('form-message', 'Le message est obligatoire');
            isValid = false;
        }

        return isValid;
    }

    $('#contact-form').on('submit', function(e){
        e.preventDefault();
        
        if (!validateForm()) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: "{{route('contact')}}",
            data: $(this).serialize(),
            beforeSend: function(){
                $('#submit_btn').prop("disabled", true);
                $('#submit_btn').text('Loading...');
            },
            success: function(response){
                if(response.status == 'success'){
                    toastr.success(response.message);
                    $('#contact-form').trigger('reset');
                    clearErrors();
                } else {
                    toastr.error(response.message);
                }
                $('#submit_btn').prop("disabled", false);
                $('#submit_btn').text('Envoyer maintenant');
            },
            error: function(response){
                if(response.status === 422){
                    let errors = $.parseJSON(response.responseText);
                    $.each(errors.errors, function(key, val){
                        showError(`form-${key}`, val[0]);
                    });
                } else {
                    toastr.error('Une erreur est survenue');
                }
                $('#submit_btn').prop("disabled", false);
                $('#submit_btn').text('Envoyer maintenant');
            }
        });
    });
});
</script>
@endpush