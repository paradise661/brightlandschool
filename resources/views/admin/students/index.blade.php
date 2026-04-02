@extends('layouts.admin.master')
@section('title', 'Admission')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Student Admission Records ({{ $student->total() ?? '' }})</h5>
        </div>

        <div class="table-responsive text-nowrap">
            @if (!$student->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Submitted at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($student as $key => $students)
                            <tr>
                                <td><strong>{{ $key + $student->firstItem() }}</strong></td>
                                <td><strong>{{ $students->name ?? '' }} </strong></td>
                                <td><strong>{{ $students->email ?? '' }}</strong></td>
                                <td><strong>{{ $students->father_phone ?? '' }}</strong></td>
                                @php
                                    $status = strtolower($students->payment_status);
                                @endphp

                                <td>
                                    <span
                                        class="badge rounded-pill bg-label-{{ $status === 'paid' ? 'success' : 'warning' }}">
                                        {{ ucfirst($status) }}
                                    </span>
                                </td>
                                <td><span
                                        class="badge rounded-pill bg-label-{{ $students->status == 1 ? 'success' : 'danger' }}">{{ $students->status == 1 ? 'Publish' : 'Draft' }}</span>
                                </td>
                                <td>{{ $students->created_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('student.show', $students->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-eye"></i></a>

                                    <form class="delete-form" action="{{ route('student.destroy', $students->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_student mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $student->links() }}
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
        $('.delete_student').click(function(e) {
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
