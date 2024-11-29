<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- Include Quill.js CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <style>
        label {
            font-weight: bold;
        }

        .my-form {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
        }

        .quill-editor {
            border: 1px solid #ccc;
            border-radius: 5px;
            min-height: 200px;
            padding: 10px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{ route('detail_trip.store') }}" enctype="multipart/form-data" class="my-form">
                    @csrf
                    <div class="mb-3">
                        <label for="programme" class="form-label">Programme :</label>
                        <!-- Quill Editor for Programme -->
                        <div id="programme-editor" class="quill-editor"></div>
                        <input type="hidden" id="programme" name="programme">
                    </div>
                    
                    <div class="mb-3">
                        <input type="hidden" name="id_admin" value="{{ $admin->id }}">
                        <label for="tarif" class="form-label">Tarif :</label>
                        <input type="file" name="tarif" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="servis_inclus" class="form-label">Services Inclus :</label>
                        <!-- Quill Editor for Services Inclus -->
                        <div id="servis-inclus-editor" class="quill-editor"></div>
                        <input type="hidden" id="servis_inclus" name="servis_inclus">
                    </div>
                    <button type="submit" class="my-1 form-control btn text-light" style="background-color:#C19A6B" onclick="saveEditorContent()">Ajouter</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Quill.js -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        // Initialize Quill editors
        var programmeEditor = new Quill('#programme-editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'align': [] }],
                    ['bold', 'italic', 'underline'],
                    [{ 'color': [] }, { 'background': [] }],
                ]
            }
        });

        var servisInclusEditor = new Quill('#servis-inclus-editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'align': [] }],
                    ['bold', 'italic', 'underline'],
                    [{ 'color': [] }, { 'background': [] }],
                ]
            }
        });

        function saveEditorContent() {
            // Get the HTML content from the Quill editor and store it in hidden inputs
            document.getElementById('programme').value = programmeEditor.root.innerHTML;
            document.getElementById('servis_inclus').value = servisInclusEditor.root.innerHTML;
        }
    </script>
</body>
</html>