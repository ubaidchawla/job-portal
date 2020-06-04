<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{ route('categories.store') }}">
    @csrf

    <input type="text" name="name">
    <input type="submit">
</form>
</body>
</html>