@if($errors->has())
    @foreach ($errors->all() as $error)
    <div class="text-danger">{{ $error }}</div>
    @endforeach
@endif