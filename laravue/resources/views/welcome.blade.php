<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   
    <body>
        <div>
            <div id="app">
                <home formulario = "{{ $formulario }}" teste = "{{$teste}}"></home>
            </div>
        </div>
        <script src="{{asset('/js/app.js')}}"></script>
    </body>
</html>
