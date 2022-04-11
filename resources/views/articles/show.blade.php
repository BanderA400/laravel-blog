
@extends('layouts.app')
@section('title', $article->title)

@section('content')

<!-- Post Headline Start -->
<div class="post-title">
   <h2>{{$article->title}}</h2> 
  </div>
  <!-- Post Headline End -->
<p>
    {!! nl2br($article->content) !!}
</p>

<!-- Post Detail Start -->
<div class="post-info">
  <span>Category :
    @foreach($article->categories as $category)
    {{$category->title}}
@endforeach  
  </span>
  <br>
   <span>Created At : {{$article->created_at}}</span>
   
   <div>
   Updated At : {{$article->updated_at}} 
  </div>
   <div>
      Author :{{$article->user->name}} 
   </div>
   
  </div>
  <!-- Post Detail End -->


<!-- Post Comment Start -->
<div id="commentForm" class="comment">
   <h3>Comment Your Thoughts</h3>
    
     <div class="post-comments">
<ul>
       
 <li>
        <div  class="thumb">
            
          </div>
      @forelse ($article->comments as $comment)
      <div id="comments" class="text">
            <h4>Name: {{$comment->user->name}}</h4>
            <p>{{$comment->content}}</p>
         </div>
     </div>
 </li>
</ul>
</div>

      @empty
          {{'No Comments yet'}}
      @endforelse    

<!-- Post Comment end -->

<!-- Post Form Start -->
<div class="col-md-12" id="comentForm">
 <div class="row"> 
         <form action="{{route('generated::pyVfnFt2naWIiVOZ', $article->id)}}" method="post">
            @csrf
             <div class="col-sm-4">
         
              </div>
 
             <div class="col-sm-12">
          <div class="textarea-message form-group">
            <textarea name="content" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
       </div>
            </div>


         <div class="text-center">      
         <button type="submit" class="load-more-button">Send</button>
         </div>

          </form>
  </div>
      </div>
      <!-- Post Form End-->

    </div>
    <!-- Post Comment End -->
@endsection

