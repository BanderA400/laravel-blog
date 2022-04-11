
 <!-- Blog Post Start -->
 <div class="col-md-12 blog-post">
  <div class="post-title">
    <a href="{{route('articles.show',$article->id)}}"><h2>{{$article->title}}</h2></a>
  </div>  
  <div class="post-info">
    <span>Created At : {{$article->created_at}}</span>
    <br>
    <span>Category : @foreach($article->categories as $category)
      {{$category->title}}
  @endforeach</span>
    <div>
      <span>Auther:{{$article->user->name}} </span>
    </div>
  </div>  
<p>{{$article->content}}</p>  <a href="{{route('articles.show',$article->id)}}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
</div>
<!-- Blog Post End -->
 