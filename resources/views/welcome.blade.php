@extends('common.layout')

@section('title')
    <title>Home • Portfolio Theo</title>
@endsection

@section('content')
    {{-- Image dropdown area--}}
    <label class="form-label fw-bold" for="image">Afbeelding Dropzone</label>
    {{-- Dropzone--}}
    <form method="POST" action="{{route('dropzone-store')}}" enctype="multipart/form-data"
          class="dropzone dz-clickable" id="image-upload">
        @csrf
        <div class="dz-default dz-message"><span>Klik hier om de gewenste afbeelding te selecteren of sleep het in deze box</span></div>
    </form>
    <button onclick="myDropzone.processQueue()">Toevoegen</button>
@endsection

@section('script')
    {{--Dropzone JS--}}
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        let myDropzone = new Dropzone(".dropzone", {
            acceptedFiles: ".jpeg,.jpg,.png",
            maxFiles: 1,
            maxFilesize: 5, // 5 mb
            addRemoveLinks: true,
            autoProcessQueue: false, // Upload of image is delayed until user pressed 'toevoegen'
            init: function () {
                // Error if uploading more than one file
                this.on("maxfilesexceeded", function () {
                    alert("Je kan niet meer dan één afbeelding gebruiken.");
                });
                this.on("error", function (file) {
                    let fileExtension = file.name.split('.').pop();
                    if (fileExtension !== 'jpg' && fileExtension !== 'jpeg' && fileExtension !== 'png') {
                        alert("Dit bestandstype is niet toegestaan.");
                    } else if (file.size > 5) {
                        alert("Deze afbeelding is te groot.");
                    }
                    this.removeFile(file);
                });
            },
        })
    </script>
@endsection
