document.getElementById('phone').addEventListener('focus', function(e) {
    if (this.value === '') {
        this.value = '+7';
    }
});




