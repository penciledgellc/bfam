<div class="all_msg_bg">
    @if(count($students) > 0)
        @foreach($students as $student)
    <div class="channel_my item all__noti5">
        <div class="profile_link">
            <img src="{{$student->user->userImage}}" alt="">
            <div class="pd_content">
                <h6>{{$student->user->last_name. '  '. $student->user->first_name}}</h6>
                <p class="noti__text5"><strong>Email:</strong>  <span class="nm_time">{{$student->user->email}}</span>  <strong>Phone:</strong>  <span class="nm_time">{{$student->user->phone}}</span></p>
                <p class="noti__text5"> <strong>Country:</strong>  <span class="nm_time">{{$student->user->country}}</span> <strong>Joined:</strong>  <span class="nm_time">{{$student->user->created_at->diffForHumans()}}</span></p>

            </div>
        </div>
    </div>
        @endforeach
    @else
        <h1 class="cr1fot" style="color: white; text-align: center; font-size: 170%;width: 100%; " >No course is currently available on this platform</h1>
    @endif

</div>
