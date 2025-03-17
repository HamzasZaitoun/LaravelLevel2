<form action="{{ $href }}" method="post" class="d-inline"
    onsubmit="return confirm('{{ __('keywords.are_you_sure') }}')">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-sm btn-danger btn-sm p-.5">
        <i class="fe fe-trash-2 fa-2x"></i>
    </button>
</form>
