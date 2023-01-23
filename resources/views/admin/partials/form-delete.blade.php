<form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
    onsubmit="return confirm('confermi l\'eliminazione di {{ $project->title }}')">
    @csrf
    @method('DELETE')

    <button title="Delete" type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>
    </button>
</form>
