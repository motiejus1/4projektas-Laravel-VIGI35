<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detailed student info</title>
</head>
<body>

     {{-- \n - terminaline nauja eilute --}}
     {{-- <br> - HTML tagas --}}

     
    {{$student->id}};
                {{$student->name}}<br>
                {{$student->surname}}<br>
                {{$student->email}}<br>
                {{$student->phone}}<br>
                {{$student->project}}<br>
</body>
</html>