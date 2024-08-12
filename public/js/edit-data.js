const tabs = [
    { button: document.getElementById('personal'), content: document.getElementById('data-diri') },
    { button: document.getElementById('ayah'), content: document.getElementById('data-ayah') },
    { button: document.getElementById('ibu'), content: document.getElementById('data-ibu') },
    { button: document.getElementById('btn-keluhan-harapan'), content: document.getElementById('keluhan-harapan') },
];

function handleTabClick(clickedTab) {
    tabs.forEach(tab => {
        if (tab === clickedTab) {
            tab.button.classList.add('bg-custom-blue-30', 'text-custom-blue');
            tab.button.classList.remove('bg-gray-300', 'text-gray-500');
            tab.content.classList.add('block');
            tab.content.classList.remove('hidden');
        } else {
            tab.button.classList.add('bg-gray-300', 'text-gray-500');
            tab.button.classList.remove('bg-custom-blue-30', 'text-custom-blue');
            tab.content.classList.add('hidden');
            tab.content.classList.remove('block');
        }
    });
}

tabs.forEach(tab => {
    tab.button.addEventListener('click', function() {
        handleTabClick(tab);
    });
});

const form = document.querySelector('.submit-form-edit')

form.addEventListener('submit', function(e) {
    e.preventDefault()
    document.querySelector('.submit-btn-edit').innerHTML = `<div class="loader"></div>`
    this.submit()
})