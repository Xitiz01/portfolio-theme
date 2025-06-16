jQuery(document).ready(function($){
    // Add new item
    $(document).on('click', '.my-portfolio-repeater-add', function(){
        var $list = $(this).siblings('.my-portfolio-repeater-list');
        var $template = $list.find('.my-portfolio-repeater-template').clone().removeClass('my-portfolio-repeater-template').show();
        $list.append($template);
    });
    // Remove item
    $(document).on('click', '.my-portfolio-repeater-remove', function(){
        $(this).closest('.my-portfolio-repeater-item').remove();
    });
}); 