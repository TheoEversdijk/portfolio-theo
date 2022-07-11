@extends('common.layout')

@section('title')
    <title>Home • Portfolio Theo</title>
@endsection

@section('content')
@endsection

@section('script')
    <script>
        window.addEventListener("load", init);

        function init() {
            displayData();
        }

        function displayData(){
            fetch("../controller.php").then(function(response){
                return response.json();
            }).then(function(data){
                console.log(data);
                document.write(data.quote);
            }).catch(function(error){
                console.log(error);
            })
        }
    </script>
@endsection
