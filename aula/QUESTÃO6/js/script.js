document.querySelectorAll('.like-button').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        fetch('', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ action: 'like', id })
        }).then(() => location.reload());
    });
});

document.querySelectorAll('.delete-button').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        fetch('', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ action: 'delete', id })
        }).then(() => location.reload());
    });
});