<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{ route('resumes.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Enter your job title">
    <input type="text" name="education" placeholder="Enter your job qualification">
    <input type="text" name="interests" placeholder="Enter your interests">
    <select name="student_id" id="student">
    @foreach($students as $student)
        <option value="{{$student->id}}">{{$student->regno}}</option>
    @endforeach
    </select>
    <input type="submit">
</form>
</body>
</html>