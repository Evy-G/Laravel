<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <label for="songs_name">Naam van de single:</label><br>
        <input type="text" id="songs_name" name="songs_name" required><br><br>

        <label for="author">Naam van de artiest of band:</label><br>
        <input type="text" id="author" name="author" required><br><br>

        <label for="release_year">Jaar van release:</label><br>
        <input type="number" id="release_year" name="release_year" required><br><br>

        <input type="submit" value="Submit">
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    
</body>
</html>