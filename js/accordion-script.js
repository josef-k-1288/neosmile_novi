var accordionItems = document.querySelectorAll('.accordion li');

accordionItems.forEach(function(item) {
    var title = item.querySelector('h3');
    var content = item.querySelector('div');

    title.addEventListener('click', function() {
        if (content.style.display === 'none') {
            content.style.display = 'block';
        } else {
            content.style.display = 'none';
        }
    });
});