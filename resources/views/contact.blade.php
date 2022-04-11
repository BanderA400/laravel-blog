
@extends('layouts.app')
@section('title', 'contact')
@section('content')


    <!-- Contact Form Start -->
    <div class="row margin-top-30">
        <div class="col-md-12">   

        <div class="row">
         <form action="post">

          <div class="col-sm-6">
            <div class="form-group">
             <input type="text" id="name" class="form-control" placeholder="Your Name">
            </div>
           </div>
      
          <div class="col-sm-6">
            <div class="form-group">
             <input type="email" id="email" class="form-control" placeholder="Your Email">
            </div>
           </div>

          <div class="col-sm-6">
            <div class="form-group">
             <input type="text" id="website" class="form-control" placeholder="Your Website">
            </div>
           </div>

          <div class="col-sm-6">
            <div class="form-group">
             <input type="text" id="address" class="form-control" placeholder="Where are You From?">
            </div>
           </div>
      
          <div class="col-sm-12">
            <select id="subject" class="form-group form-control">
               <option value="" selected disabled>Subject</option>
               <option>Website Design & Development</option>
               <option>Wordpress Development</option>
               <option>Search Engine Optimization</option>
               <option>Mobile Website</option>
               <option>I Want to General Talk</option>
               <option>Other</option>
             </select>
           </div>
      
          <div class="col-sm-12">
            <div class="textarea-message form-group">
              <textarea id="message" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
          </div>
         </div>


      <div class="text-center">      
        <button type="submit" class="load-more-button">Send</button>
       </div>

       </form>
      </div>
    </div>
   </div>
   <!-- Contact Form End -->

@endsection


