@extends('layouts.admin.master')
@section('title', 'All Pages Sections')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0 text-capitalize font-weight-bold "> Pages Sections({{ $pages->total() }})</h3>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('pages.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if (!$pages->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($pages as $key => $page)
                            <tr>
                                <td><strong>{{ $key + $pages->firstItem() }}</strong></td>
                                <td><strong>{{ $page->name ?? '' }}</strong></td>
                                <td><strong>{{ $page->order ?? '' }}</strong></td>
                                <td><span
                                        class="badge rounded-pill bg-label-{{ $page->status == 1 ? 'success' : 'danger' }}">{{ $page->status == 1 ? 'Publish' : 'Draft' }}</span>
                                </td>
                                <td>{{ $page->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-dark" href="{{ route('pages.items.index', $page->id) }}"
                                        style="float: left; margin-right: 5px; font-size:15px">
                                        <i class="fa fa-align-justify"></i> Pages
                                    </a>
                                    <a class="btn btn-sm btn-primary" href="{{ route('pages.edit', $page->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form" action="{{ route('pages.destroy', $page->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_pages mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pages->links() }}
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
