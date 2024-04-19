<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Head sectie, inclusief meta tags, titel, stijlbladen, enzovoort -->
</head>
<body>
    <!-- Hier komt de body inhoud -->

    <!-- $slot geeft de content van de views weer -->
    {{ $slot }}

    <!-- Footer sectie -->
    @include('footer')
</body>
</html>
