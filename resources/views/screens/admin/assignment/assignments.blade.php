@extends('layouts.admin.app')
@section('content')
    <style>
        /* ... ALL SHARED CSS FROM ANY VIEW (no changes needed) ... */
    </style>

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <x-assignment-tab />
                @if (session('csv_errors'))
                    <div class="alert alert-danger">
                        {{ session('csv_errors') }} <a href="{{ session('error_csv') }}" class="error-btn">Download error file</a>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="board-area">
                    @forelse ($assignments as $assignment)
                        <div class="assign-card">
                            <div class="card-id-wrapper">
                                <h3>{{ $assignment->id }}</h3>
                                <div class="toggler-btn-wrapper">
                                    {{-- Conditionally show agent select if needed --}}
                                    @if($showAgentSelect ?? false)
                                        <select name="" data-id="{{ $assignment->id }}" class="selectpicker agent">
                                            <option value="" selected disabled>Select agent</option>
                                            @forelse ($users as $user)
                                                <option value="{{ $user->id }}" {{ $user->id == $assignment->user_id ? 'selected' : '' }}>
                                                    {{ $user->first_name . ' ' . $user->last_name }}
                                                </option>
                                            @empty
                                            @endforelse
                                        </select>
                                    @endif
                                    <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i> 3</button>
                                    <button type="button" class="toggler-btn"><i class="fa-solid fa-caret-down rotate-icon"></i></button>
                                </div>
                            </div>
                            <div class="insurance-wrapper">
                                <div>
                                    <p><span>Insurance:</span> {{ $assignment->company }}</p>
                                    <div class="other-desc-area hidden-class">
                                        {{-- ... ALL SHARED OTHER-DESC-AREA CONTENT ... --}}
                                    </div>
                                </div>
                                <div>
                                    <p class="text-end m-0" data-created-at="{{ $assignment->created_at }}">20 hours, 27 mins</p>
                                    <div class="pending-btn-wrapper hidden-class">
                                        <button>Quick Updates</button>
                                        @if ($assignment->status == 'pending')
                                            <button style="background:#d3c501 !important;">Pending</button>
                                        @else
                                            <button style="background:#00A84C !important;">Completed</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    </div>

    {{-- ... ALL SHARED MODALS (Add, Search, Import) ... NO CHANGES NEEDED ... --}}

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

        {{-- ... SHARED JS FOR ADD MODAL, TIME ELAPSED, SEARCH, IMPORT ... --}}

        {{-- Conditionally include agent assignment JS if needed --}}
        @if($showAgentSelect ?? false)
            <script>
                $(document).ready(function() {
                    // ... JS FOR AGENT ASSIGNMENT (from index/task views) ...
                    $('.agent').on('change', function() {
                        const selectedAgent = $(this);
                        const assignmentId = selectedAgent.data('id');
                        const agentId = selectedAgent.val();

                        if (agentId) {
                            $.LoadingOverlay("show");
                            $.ajax({
                                type: "POST",
                                url: "{{ route('admin.assign.agent') }}",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    assignment: assignmentId,
                                    agent: agentId
                                },
                                success: function(response) {
                                    $.LoadingOverlay("hide");
                                    Swal.fire(
                                        'Assigned!',
                                        'The agent has been changed successfully.',
                                        'success'
                                    );
                                },
                                // ... error handling ...
                            });
                        } else {
                            selectedAgent.val('');
                        }
                    });
                });
            </script>
        @endif
    @endpush
@endsection
