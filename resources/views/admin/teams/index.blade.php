@extends('layouts.admin.master')
@section('title', 'All Teams')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Teams ({{ $teams->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('teams.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>
        <div class="table-responsive text-nowrap">
            @if (!$teams->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($teams as $key => $team)
                            <tr>
                                <td><strong>{{ $key + $teams->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo" href="{{ asset($team->image) }}">
                                        <img src="{{ asset($team->image) }}" alt="{{ $team->name }}" width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $team->name ?? '' }}</strong></td>
                                <td><strong>{{ $team->position ?? '' }}</strong></td>
                                <td><strong>{{ $team->order }}</strong></td>
                                <td><span
                                        class="badge rounded-pill bg-label-{{ $team->status == 1 ? 'success' : 'danger' }}">{{ $team->status == 1 ? 'Publish' : 'Draft' }}</span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('teams.edit', $team->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form" action="{{ route('teams.destroy', $team->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_member mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $teams->links() }}
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
        $('.delete_member').click(function(e) {
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
