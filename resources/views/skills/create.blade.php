<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{ route('skills.store') }}">
    @csrf

    <input type="text" name="name">
    <input type="submit">
</form>
</body>
</html>