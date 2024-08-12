document.addEventListener('DOMContentLoaded', function() {
    const countdown = document.getElementById('countdown');

    if(document.getElementById('resend')) {

        const btnResend = document.getElementById('resend');

        btnResend.addEventListener('click', function() {

            btnResend.innerHTML = 'Sending OTP...'

            fetch('/resend-otp', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data) {
                    startCountdown('resend');

                    iziToast.success({
                        title: 'Success',
                        message: `OTP has been sent to your email`,
                        position: 'topRight',
                        icon: 'fa-solid fa-check'
                    })
                } else {
                    iziToast.error({
                        title: "Error",
                        message: `Error sending OTP`,
                        position: 'topRight',
                        icon: 'fa-solid fa-ban'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

    if(document.getElementById('resend-forgot')) {

        const btnResendForgot = document.getElementById('resend-forgot');

        btnResendForgot.addEventListener('click', function() {

            btnResendForgot.innerHTML = 'Sending OTP...'

            fetch('/resend-otp-forgot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data) {
                    startCountdown('resend-forgot');

                    iziToast.success({
                        title: 'Success',
                        message: `OTP has been sent to your email`,
                        position: 'topRight',
                        icon: 'fa-solid fa-check'
                    })
                } else {
                    iziToast.error({
                        title: "Error",
                        message: `Error sending OTP`,
                        position: 'topRight',
                        icon: 'fa-solid fa-ban'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }
    
    function startCountdown(type) {
        let time = 60 * 1000;

        // Perbarui countdown setiap 1 detik
        const x = setInterval(() => {

            // Kurangi waktu sebesar 1 detik (1000 milidetik)
            time -= 1000;

            // Hitung menit dan detik yang tersisa
            const minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((time % (1000 * 60)) / 1000);

            // Tampilkan hasil di elemen dengan id="countdown"
            countdown.innerHTML = `resend it again after ${minutes} : ${seconds}`;

            // Jika countdown selesai, tulis teks
            if (time == 0) {
                clearInterval(x);

                countdown.innerHTML = `<a id="${type}" class="text-custom-blue">Resend OTP</a>`
            }
        }, 1000)

    }

});
