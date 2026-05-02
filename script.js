document.getElementById('burger').addEventListener('click', function() {
    document.getElementById('menu').classList.toggle('active');
    this.classList.toggle('active')
});