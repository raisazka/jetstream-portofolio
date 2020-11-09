<div class="main">
   <div class="text-section">
        <h1 class="user-name">{{Auth::user()->name}}</h1>
        <hr class="red-line">
        <h3 class="user-desc">{{Auth::user()->description}}</h3>
   </div>
   <div class="image-section">
        <img class="image-user" src="{{Auth::user()->profile_photo_url}}" alt="" height="200" width="200">
   </div>
</div>
