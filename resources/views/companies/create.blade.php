<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{ route('companies.store') }}">
    @csrf

    <input type="text" name="name" placeholder="name">
    <input type="text" name="address" placeholder="address">
    <input type="number" name="contact" placeholder="contact">
    <select name="category_id" id="category">
    @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
    </select>
    <input type="submit">
</form>
</body>
</html>