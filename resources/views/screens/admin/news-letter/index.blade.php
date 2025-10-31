@extends('layouts.admin.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
@endpush

@section('content')
    <section class="content" style="min-height: 100vh;">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        <div class="dashboard-content">
                            <table id="feedbacks">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($newsLetters as $newsLetter)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $newsLetter->email }}</td>
                                            <td>{{ $newsLetter->created_at }}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {

            var table = $("#feedbacks").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [
                    {
                        data: "#",
                    },
                    {
                        data: "Email",
                    },
                    {
                        data: "Created At",
                    },
                ],
            });


            function setOriginalValues() {
                $('.status').each(function () {
                    var $this = $(this);

                    if (typeof $this.data('original-value') === 'undefined') {
                        $this.data('original-value', $this.val() || 'active');
                    }
                });
            }
            setOriginalValues();
            table.on('draw.dt', setOriginalValues);
        });
    </script>
@endpush
