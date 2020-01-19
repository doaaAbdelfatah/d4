<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Laravel Page</title>
</head>
<body>
    <a href="/about">About Us</a>
    <a href="/home">Home</a>
    <h1>Welcome to Blade</h1>
    <?php echo htmlspecialchars( $name)?>

    <h2>Welcome {{$name}} you age is {{$age}}</h2>

    @if ($age < 20)
        <h3>Hello You are under 20</h3>
    @elseif($age <= 40)
        <h3>Hello You are between 20 and 40</h3>
    @else
        <h3>Hello You are agrow up</h3>
    @endif

    <hr>

    @for($i = 1 ; $i <= ($age / 10) ;$i++)
        <h3>Welcome</h3>
    @endfor

    @php
        // php code
        // any code you want her
    @endphp

</body>
</html>
