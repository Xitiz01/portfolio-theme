jQuery(document).ready(function($){
    // Add new item
    $('.my-portfolio-repeater-add').on('click', function(e){
        e.preventDefault();
        var $list = $(this).siblings('.my-portfolio-repeater-list');
        var $template = $list.find('.my-portfolio-repeater-template').clone();
        $template.removeClass('my-portfolio-repeater-template').show();
        $list.append($template);
    });

    // Remove item
    $('.my-portfolio-repeater-list').on('click', '.my-portfolio-repeater-remove', function(e){
        e.preventDefault();
        var $item = $(this).closest('.my-portfolio-repeater-item');
        if ($item.siblings('.my-portfolio-repeater-item').length > 0) {
            $item.remove();
        } else {
            // If it's the last item, just clear the selection instead of removing
            $item.find('select').val('');
        }
    });
}); 