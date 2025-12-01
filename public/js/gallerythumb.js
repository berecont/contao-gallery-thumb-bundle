document.addEventListener('DOMContentLoaded', function () {
  // Alle Galerien mit dieser Klasse behandeln
  document.querySelectorAll('.js-gallery').forEach(function (gallery) {
    var visibleCount = parseInt(gallery.dataset.visibleCount || '4', 10);
    var items = Array.from(gallery.querySelectorAll('li'));
    var total = items.length;

    // Ab dem visibleCount-Index (0-basiert) alle Items verstecken
    items.forEach(function (li, index) {
      if (index >= visibleCount) {
        li.classList.add('gallery-hidden');
      }
    });

    var remaining = total - visibleCount;

    if (remaining > 0 && items[visibleCount - 1]) {
      var lastVisible = items[visibleCount - 1];
      lastVisible.classList.add('gallery-more');

      var figure = lastVisible.querySelector('.gallery-item');
      if (figure) {
        var overlay = document.createElement('span');
        overlay.className = 'more-overlay';
        overlay.textContent = '+' + remaining;
        figure.appendChild(overlay);
      }
    }
  });

});
