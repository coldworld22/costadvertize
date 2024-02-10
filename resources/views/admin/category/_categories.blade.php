{{-- resources/views/admin/category/_categories.blade.php --}}
@foreach ($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $indentation . $category->name }}</td>
        <td>{{ $category->parent ? $category->parent->name : '- ' }}</td>
        <td>{{ $category->store ? $category->store->name : '-' }}</td>
        <td>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @if ($category->children->isNotEmpty())
        @include('admin.category._categories', ['categories' => $category->children, 'indentation' => $indentation . '--'])
    @endif
@endforeach
