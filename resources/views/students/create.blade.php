<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Create</title>
</head>
<body>



    {{-- method - POST  --}}
    {{--  veiksmas - kelias iki controller metodo store metodo --}}
    {{-- save.php --}}
    {{-- 1. POST/GET pasiimdavo duomenis $_POST['input_laukelio_vardas'] --}}
    {{-- 2. Sudedavome i uzklausa. INSERT INTO --}}
    {{-- 3. uzklausa isiusdavom i duombaz --}}
    <form method='POST' action='{{ route('students.store') }}'>
        
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Phone">
        <input type="text" name="project" placeholder="Project">
        <button type="submit">Save</button>
    </form>

</body>
</html>