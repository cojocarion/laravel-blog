@if ($errors->any())
                  
              
<div class="w-100 bg-red-600 py-2 my-2 rounded">
    <ul>
    @foreach ($errors->all() as $error)
<li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif