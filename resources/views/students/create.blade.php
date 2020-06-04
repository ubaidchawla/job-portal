<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{ route('students.store') }}">
    @csrf

    <input type="number" name="regno" placeholder="Enter Reg No:">
    <input type="text" name="fullname" placeholder="Enter Name">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="password">
    <input type="number" name="phone" placeholder="phone">
    <input type="text" name="workspace" placeholder="workspace">
    <input type="text" name="university" placeholder="University">
    <input type="submit">
</form>
</body>
</html>