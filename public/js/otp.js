const otpInputs = document.querySelectorAll('[id^="otp-"]');

// input otmatis
otpInputs.forEach((input, index) => {
    input.addEventListener('input', function() {
        if (this.value.length > 1) {
            this.value = this.value.slice(0, 1);
        }
        
        if (this.value.length === 1 && index < otpInputs.length - 1) {
            otpInputs[index + 1].focus();
        }
                
        if (this.value.length === 0 && index > 0) {
            otpInputs[index - 1].focus();
        }
    });
});

const otpForm = document.getElementById('form-otp')

// input otp (penggabungan 5 digit)
otpForm.addEventListener('submit', function(event) {
    event.preventDefault();

    let otp = '';
    let otpInputs = document.querySelectorAll('[id^="otp-"]');
    otpInputs.forEach(function(input) {
        otp += input.value;
    });

    document.getElementById('final-otp').value = otp;

    this.submit();
});