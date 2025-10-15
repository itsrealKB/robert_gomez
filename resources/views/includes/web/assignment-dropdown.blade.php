@if (is_string($assignments) && $assignments === 'No Results Found')
    <div class="container">No Results found</div>
@else
    @forelse ($assignments as $assignment)
        <div class="assign-card" data-url="{{ route('admin.assign.detail', $assignment->id) }}">
            <div class="card-id-wrapper">
                <h3>{{ $assignment->id }}</h3>
                <div class="toggler-btn-wrapper">
                    <select name="agent" data-id="{{ $assignment->id }}" data-user-id="" class="selectpicker agent">
                        <option value="" selected disabled>Select agent </option>
                        @forelse ($users as $user)
                            <option value="{{ $user->id }}"
                                {{ $assignment->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->first_name . ' ' . $user->last_name }}</option>
                        @empty
                        @endforelse

                    </select>
                    <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i> 3</button>
                    <button type="button" class="toggler-btn"><i
                            class="fa-solid fa-caret-down rotate-icon"></i></button>
                </div>
            </div>
            <div class="insurance-wrapper">
                <div>
                    <p><span>Insurance:</span> {{ $assignment->company }}</p>
                    <div class="other-desc-area hidden-class">
                        <p><span>Owner: </span>{{ $assignment->owner }} </p>
                        <p><span>Owner Phone: </span> {{ $assignment->owner_phone }} </p>
                        <p><span>Owner Email: </span> {{ $assignment->owner_email }} </p>
                        <p><span>Claim#: </span> {{ $assignment->claim }} </p>
                        <p><span>Type of Claim: </span> {{ $assignment->claim_type }}</p>
                        <p><span>Loss Type:</span> {{ $assignment->loss_type }}</p>
                        <p><span>Vehicle Location: </span> {{ $assignment->vehicle_location }}</p>
                        <p><span>Appointment:</span> {{ $assignment->appointment_date }} </p>
                    </div>
                </div>
                <div>
                    @php
                        $d = $assignment->created_at->diff(now());
                        $parts = [];    
                        if ($d->d > 0) {
                            $parts[] = "{$d->d} days";
                        }
                        if ($d->h > 0) {
                            $parts[] = "{$d->h} hours";
                        }
                        if ($d->i > 0) {
                            $parts[] = "{$d->i} mins";
                        }
                    @endphp

                    <p class="text-end m-0">{{ $parts ? join(', ', $parts) : 'just now' }} </p>
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
        No Results Found
    @endforelse

    <script>
        const timeAgo = timestamp => {
            const d = Math.floor((new Date() - new Date(timestamp)) / (1000 * 60 * 60 * 24));
            const h = Math.floor((new Date() - new Date(timestampp)) / (1000 * 60 * 60)) % 24;
            return d ? `${d}d ${h ? h + 'h' : ''} ago` : h ? `${h}h ago` : 'Just now';
        };
    </script>

@endif
