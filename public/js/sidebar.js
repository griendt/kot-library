$(document).ready(function () {
// Remove active for all items.
    $('.page-sidebar-menu li').removeClass('active');

// highlight submenu item
    $('li a[href="' + this.location.pathname + '"]').parent().addClass('active');

// Highlight parent menu item.
    $('li a[href="' + this.location.pathname + '"]').parents('li').addClass('active');

    $('li a[href="' + this.location.pathname + '"]').removeClass('collapsed');

    $('ul a[href="' + this.location.pathname + '"]').parent().addClass('show');
    $('li a[href="' + this.location.pathname + '"]').parents('li').parent().removeClass('collapsed');
    // $('li a[href="' + this.location.pathname + '"]').parents('li').parent().setAttribute('aria-expanded', 'true');
});
