@can($viewGate)
    <!-- <a class="btn btn-xs btn-primary" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
        {{ trans('global.view') }}
    </a> -->
    <form action="{{ route('admin.' . $crudRoutePart . '.update_status', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="status" value="1">
        <input type="hidden" name="id" value="{{$row->id}}">
        <input type="submit" class="btn btn-xs btn-success" value="{{ trans('global.approve') }}">
    </form>
@endcan
@can($editGate)
    <!-- <a class="btn btn-xs btn-info" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
        {{ trans('global.edit') }}
    </a> -->
@endcan
@can($deleteGate)
    <form action="{{ route('admin.' . $crudRoutePart . '.update_status', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="status" value="2">
        <input type="hidden" name="id" value="{{$row->id}}">
        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.reject') }}">
    </form>
@endcan