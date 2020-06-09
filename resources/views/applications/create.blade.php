<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{ route('applications.store') }}">
    @csrf

    <select name="company_id" id="company">
    @foreach($companies as $company)
        <option value="{{$company->id}}">{{$company->name}}</option>
    @endforeach
    </select>
    <select name="job_id" id="job">
    @foreach($jobs as $job)
        <option value="{{$job->id}}">{{$job->title}}</option>
    @endforeach
    </select>
    <select name="student_id" id="student">
    @foreach($students as $student)
        <option value="{{$student->id}}">{{$student->regno}}</option>
    @endforeach
    </select>
    <input type="submit">
</form>
</body>
</html>