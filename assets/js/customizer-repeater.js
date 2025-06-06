(function($){
    var MAX_PROJECTS = 6;

    function updateRepeaterHidden($container) {
        var values = [];
        $container.find('.my-portfolio-project-select').each(function(){
            var val = $(this).val();
            if(val) values.push(parseInt(val));
        });
        $container.closest('.customize-control').find('.my-portfolio-repeater-hidden').val(JSON.stringify(values)).trigger('change');
    }

    function updateAddButton($control) {
        var $list = $control.find('.my-portfolio-repeater-list');
        var $addBtn = $control.find('.my-portfolio-repeater-add');
        if ($list.children('.my-portfolio-repeater-item').length >= MAX_PROJECTS) {
            $addBtn.prop('disabled', true);
        } else {
            $addBtn.prop('disabled', false);
        }
    }

    $(document).on('click', '.my-portfolio-repeater-add', function(){
        var $control = $(this).closest('.customize-control');
        var $list = $control.find('.my-portfolio-repeater-list');
        if ($list.children('.my-portfolio-repeater-item').length >= MAX_PROJECTS) return;
        var $last = $list.children('.my-portfolio-repeater-item:last');
        var $new = $last.length ? $last.clone() : $list.closest('.customize-control').find('.my-portfolio-repeater-item:first').clone();
        $new.find('select').val('');
        $list.append($new);
        updateRepeaterHidden($list);
        updateAddButton($control);
    });

    $(document).on('click', '.my-portfolio-repeater-remove', function(){
        var $control = $(this).closest('.customize-control');
        var $item = $(this).closest('.my-portfolio-repeater-item');
        var $list = $item.parent();
        $item.remove();
        if ($list.children('.my-portfolio-repeater-item').length === 0) {
            var $new = $('<div class="my-portfolio-repeater-item">' + $item.html() + '</div>');
            $new.find('select').val('');
            $list.append($new);
        }
        updateRepeaterHidden($list);
        updateAddButton($control);
    });

    $(document).on('change', '.my-portfolio-project-select', function(){
        updateRepeaterHidden($(this).closest('.my-portfolio-repeater-list'));
    });

    // On Customizer load, update the add button state
    $(document).ready(function(){
        $('.customize-control-projects_repeater').each(function(){
            updateAddButton($(this));
        });
    });
})(jQuery); 