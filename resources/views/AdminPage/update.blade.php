<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
</head>
<body>
    <div class="wrapper">
        @include('UserPage.Layouts.admin')
    </div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Form</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Judul</label>
                <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Sub Judul</label>
                <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image File</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>    
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Link Video</label>
                <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <div id="editor"></div>
                <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                        </script>
            </div>
            <div class="mb-3">
                <label>Tampilkan ?</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                    </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Create</button>        
            </div>
        </section>
    <!-- /.content -->
    
    </div>
</body>
</html>