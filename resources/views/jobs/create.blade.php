<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{ route('jobs.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Enter your job title">

    <select name="company_id" id="company">
    @foreach($companies as $company)
        <option value="{{$company->id}}">{{$company->name}}</option>
    @endforeach
    </select>
    <input type="submit">
</form>
</body>
</html>