@extends('layouts.admin.master')
@section('title', 'All Pages')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ $page->name ?? '' }} ({{ $pagesItem->total() }})</h5>
            <div class="d-flex justify-content-end align-items-center gap-2">
                <a class="btn btn-secondary" href="{{ route('pages.index') }}">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <a class="btn btn-primary" href="{{ route('pages.items.create', $page) }}">
                    <i class="fa-solid fa-plus"></i> Create
                </a>
            </div>

        </div>

        <div class="table-responsive text-nowrap">
            @if (!$pagesItem->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($pagesItem as $key => $item)
                            <tr>
                                <td><strong>{{ $key + $pagesItem->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo" href="{{ $item->image }}">
                                        <img src="{{ $item->image }}" alt="{{ $item->name ?? '' }}" width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $item->name ?? '' }}</strong></td>
                                <td>
                                    <span
                                        class="badge rounded-pill bg-label-{{ $item->status == 1 ? 'success' : 'danger' }}">
                                        {{ $item->status == 1 ? 'Publish' : 'Draft' }}
                                    </span>
                                </td>
                                <td>{{ $item->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('pages.items.edit', [$page, $item->id]) }}"
                                        style="float: left;margin-right: 5px;">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>

                                    <form class="delete-form"
                                        action="{{ route('pages.items.destroy', [$page, $item->id]) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_pages" type="submit" title="Delete">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $pagesItem->links() }}
            @else
                <div class="card-body">
                    <h6>No Data Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.delete_pages').click(function(e) {
            e.preventDefault();
            swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $(this).closest("form").submit();
                    }
                });

        });
    </script>
@endsection
