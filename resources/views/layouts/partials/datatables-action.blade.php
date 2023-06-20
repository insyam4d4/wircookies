<div class="text-center">
    @if ($show)
        <a href="{{ $showRoute ?? route($routePath . '.show', $key) }}" title="Detail"
            class="btn btn-info text-white btn-sm"><i class="mdi mdi-eye"></i></a>
    @endif

    @if ($edit)
        <a href="{{ $editRoute ?? route($routePath . '.edit', $key) }}" title="Edit"
            class="btn btn-warning text-white btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
    @endif

    @if ($delete)
        <button onclick="deleteData('{{ route($routePath . '.destroy', $key) }}')"
            class="btn btn-danger text-white btn-sm"><i class="mdi mdi-delete"></i></button>
    @endif
</div>
