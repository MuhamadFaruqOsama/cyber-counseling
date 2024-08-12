const back = () => {
    window.history.back();
}

if(document.querySelector('.submit-form')) {
    document.querySelector('.submit-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const btn = document.querySelector('.btn-submit-form')
        const text = btn.dataset.text
        btn.innerHTML = `<div class="loader me-1"></div> ${text}`
        this.submit()
    })
}

function hideLoader() {
    document.getElementById('loader').classList.add('hidden')
}