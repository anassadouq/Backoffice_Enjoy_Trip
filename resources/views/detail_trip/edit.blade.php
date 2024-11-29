<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .my-form {
            width: 100%;
            max-width: 700px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 30px;
            background-color: white;
        }
        label {
            font-weight: bold;
        }

        input[type="file"], input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <form action="{{ route('detail_trip.update', $detail_trip) }}" class="my-form container" method="post" enctype="multipart/form-data" onsubmit="saveEditorContent()">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="tarif" class="form-label">Tarif</label>
            <input type="file" name="tarif" class="form-control" id="tarif">
        </div>

        <div class="mb-3">
            <label for="programme" class="form-label">Programme :</label>
            <div id="programme-editor" class="quill-editor"></div>
            <input type="hidden" id="programme" name="programme" value="{{ old('programme', $detail_trip->programme) }}">
        </div>

        <div class="mb-3">
            <label for="servis_inclus" class="form-label">Servis Inclus :</label>
            <div id="servis-inclus-editor" class="quill-editor"></div>
            <input type="hidden" id="servis_inclus" name="servis_inclus" value="{{ old('servis_inclus', $detail_trip->servis_inclus) }}">
        </div>

        <button type="submit" class="form-control btn btn-secondary">
            <span class="material-symbols-outlined">edit</span> Modifier
        </button>
    </form>

    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        // Initialize Quill editors
        var programmeEditor = new Quill('#programme-editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
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
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'align': [] }],
                    ['bold', 'italic', 'underline'],
                    [{ 'color': [] }, { 'background': [] }],
                ]
            }
        });

        // Inject the existing content into Quill editors
        document.addEventListener('DOMContentLoaded', function() {
            // Set Quill editor content from the hidden input field value
            programmeEditor.root.innerHTML = document.getElementById('programme').value;
            servisInclusEditor.root.innerHTML = document.getElementById('servis_inclus').value;
        });

        // Function to save the content from Quill editors to hidden inputs
        function saveEditorContent() {
            document.getElementById('programme').value = programmeEditor.root.innerHTML;
            document.getElementById('servis_inclus').value = servisInclusEditor.root.innerHTML;
        }
    </script>
</body>
</html>
