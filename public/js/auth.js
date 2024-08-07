const btn_show_password = document.getElementById('show-password')
const password_input    = document.getElementById('password-input')
const register_form     = document.getElementById('register-form')

btn_show_password.addEventListener('click', function() {
    const type_password_input = password_input.getAttribute('type')
    if(type_password_input == "password") {
        password_input.setAttribute('type', 'text')
        btn_show_password.innerHTML = `<i class="fa-regular fa-eye-slash"></i>`
    } else {
        password_input.setAttribute('type', 'password')
        btn_show_password.innerHTML = `<i class="fa-regular fa-eye"></i>    `
    }
})

if(document.getElementById('show-confirm-password')) {
    const btn_show_password = document.getElementById('show-confirm-password')
    const password_input    = document.getElementById('confirm-password-input')

    btn_show_password.addEventListener('click', function() {
    const type_password_input = password_input.getAttribute('type')
    if(type_password_input == "password") {
        password_input.setAttribute('type', 'text')
        btn_show_password.innerHTML = `<i class="fa-regular fa-eye-slash"></i>`
    } else {
        password_input.setAttribute('type', 'password')
        btn_show_password.innerHTML = `<i class="fa-regular fa-eye"></i>    `
    }
    })
}

if(document.getElementById('btn-register')) {
    const btn_register  = document.getElementById('btn-register')
    const aggrement     = document.getElementById('remember')

    aggrement.addEventListener('click', function() {
        if(aggrement.checked) {
            btn_register.removeAttribute('disabled')
        } else {
            btn_register.setAttribute('disabled', '')
        }
    })
}
