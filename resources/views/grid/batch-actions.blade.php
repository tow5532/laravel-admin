@if(!$holdAll)
<div class="btn-group grid-select-all-btn" style="display:none;margin-right: 5px;">
    <a class="btn btn-sm btn-default hidden-xs"><span class="selected" data-tpl="{{ trans('admin.grid_items_selected') }}"></span></a>
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    @if(!$actions->isEmpty())
    <ul class="dropdown-menu" role="menu">
        @foreach($actions as $action)
            @if($action instanceof \Encore\Admin\Actions\BatchAction)
                <li>{!! $action->render() !!}</li>
            @else
                <li><a href="#" class="{{ $action->getElementClass(false) }}">{!! $action->render() !!} </a></li>
            @endif
        @endforeach
    </ul>
    @endif
</div>
@endif

<script>
    $('.{{ $all }}').iCheck({checkboxClass:'icheckbox_minimal-blue'})
        .on('ifChanged', function(event) {
            {!!  $__table  !!}.toggleAll(this.checked);
        });
</script>
