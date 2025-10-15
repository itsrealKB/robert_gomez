@extends('layouts.admin.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
    <style>
        #summernote .note-editor.note-frame {
            background-color: #ffffff;
            /* Light background */
            color: #000000;
            /* Black text */
            border: 1px solid #e0e0e0;
            /* Subtle border */
        }

        #summernote .note-toolbar {
            background-color: #f8f9fa;
            /* Light toolbar background */
            border-bottom: 1px solid #e0e0e0;
        }

        #summernote .note-editable {
            background-color: #ffffff;
            /* Light editable area */
            color: #000000;
            /* Black text */
        }

        /* Custom CSS to force light mode on the editor content area */
        body.dark-mode .note-editable {
            background-color: #ffffff !important;
            /* White background */
            color: #000000 !important;
            /* Black text */
        }

        /* You might also want to fix the toolbar and other elements */
        body.dark-mode .note-toolbar,
        body.dark-mode .note-statusbar,
        body.dark-mode .note-editor {
            background-color: #f8f9fa !important;
            /* Light gray for toolbar */
            color: #000000 !important;
            /* Black text */
            border-color: #ced4da !important;
            /* Light border */
        }

        #summernote .note-editable ul {
            list-style-type: disc;
            /* Bullet points for unordered lists */
            margin-left: 20px;
        }

        #summernote .note-editable ol {
            list-style-type: decimal;
            /* Numbered lists */
            margin-left: 20px;
        }

        #summernote .note-editable li {
            margin-bottom: 5px;
            /* Spacing between list items */
        }

        #summernote .note-btn {
            background-color: #f8f9fa;
            /* Light button background */
            color: #000000;
            /* Black button text */
            border: 1px solid #e0e0e0;
        }

        #summernote .note-btn:hover {
            background-color: #e9ecef;
            /* Hover state */
        }

        .word-count {
            margin-top: 10px;
            font-size: 16px;
            /* Increased font size */
            color: #333;
            /* Darker text color */
            font-weight: bold;
            /* Added boldness */
            background-color: #f0f0f0;
            /* Light background */
            padding: 5px 10px;
            /* Added padding */
            border-radius: 5px;
            /* Rounded corners */
            display: inline-block;
            /* Ensure it stays inline */
        }

        .word-count.error {
            color: #dc3545;
            /* Red color for error state */
            background-color: #ffebee;
            /* Light red background for error */
            font-weight: bold;
        }
    </style>

    <div class="content-wrapper">
        <section class="content" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <x-settings-tab />
                </div>

                <div id="summernote">{!! $guideline->content !!}</div>
                <div class="word-count" id="wordCount">Characters: 0 / 5000</div>
                <button class="save-btn" id="saveBtn">Save</button>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function() {
            $("#companyAdmins").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
                        data: "ID",
                    },
                    {
                        data: "User Name",
                    },
                    {
                        data: "First Name",
                    },
                    {
                        data: "Role"
                    },
                    {
                        data: "Last Name",
                    },
                    {
                        data: "Active",
                    },
                    {
                        data: "Division",
                    },
                ],
            });
        });
    </script>
    <script>
        $(function() {
            const maxChars = 5000;
            let lastValidContent = '';

            function updateWordCount() {
                const content = $('#summernote').summernote('code');
                const charCount = content.replace(/<[^>]*>/g, '').length; // Strip HTML tags for counting
                const wordCountDisplay = $('#wordCount');
                wordCountDisplay.text(`Characters: ${charCount} / ${maxChars}`);

                if (charCount > maxChars) {
                    wordCountDisplay.addClass('error');
                    $('#summernote').summernote('code', lastValidContent); // Revert to last valid content
                    Swal.fire({
                        icon: 'error',
                        title: 'Character Limit Exceeded',
                        text: `You have reached the maximum limit of ${maxChars} characters.`,
                        confirmButtonText: 'OK'
                    });
                } else {
                    wordCountDisplay.removeClass('error');
                    lastValidContent = content; // Update last valid content
                }
            }

            $('#summernote').summernote({
                placeholder: 'Write something......',
                tabsize: 2,
                height: 100,
                codemirror: {
                    theme: 'default' // Light mode
                },
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['paragraph']],
                    ['height', ['height']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ],
                callbacks: {
                    onInit: function() {
                        updateWordCount(); // Initial word count
                    },
                    onKeyup: function() {
                        updateWordCount();
                    },
                    onPaste: function(e) {
                        // Handle paste events to prevent exceeding limit
                        setTimeout(updateWordCount, 100);
                    },
                    onChange: function() {
                        updateWordCount();
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#saveBtn').on("click", function() {
                var content = $('#summernote').summernote('code');

                $.ajax({
                    url: '{{ route('admin.settings.guidelines.store') }}',
                    type: 'POST',
                    data: {
                        content: content,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Error saving guideline. Please try again.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = Object.values(errors).join('\n');
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                text: errorMessage,
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while saving the guideline.',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
