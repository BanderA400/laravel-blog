@csrf

<div class="form-group">
    <label for="title">Title</label>
<input type="text" name="title" class="form-control" @isset($article)
    
 value="{{$article->title}}"> @endisset
</div>

    <div class="form-group">
    @foreach($categories as $category)
    
    <input id="category_{{$category->id}}" type="checkbox" name="categories[]" value="{{$category->id}}" >
    
    
    {{$category->title}}
@endforeach
</div>

<div class="form-group">
    <label for="content"> Content</label>
<textarea class="form-control" name="content" id="" cols="30" rows="10">@isset($article) {{$article->content}} @endisset</textarea></div>

<div>
    <br>
<button class="btn btn-info"> {{$submetText}}</button>
</div>