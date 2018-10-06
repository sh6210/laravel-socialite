@if($service == 'facebook')
    <div class="title m-b-md">
        Welcome {{ $details->user['name']}} ! <br> Your email is : {{
    $details->user['email'] }} <br>

        @isset($details->user['gender'])
            {{ $details->user['gender'] }}
        @endisset

    </div>
@endif

@if($service == 'google')
    <div class="title m-b-md">
        Welcome {{ $details->name }} ! <br>
        Your email is : {{  $details->email }} <br>

        @isset($details->user['gender'])
            You're : {{ $details->user['gender'] }}
        @endisset

    </div>
@endif

@if($service == 'twitter')
    <div class="title m-b-md">
        Welcome {{ $details->name }} !<br>
        Your email is : {{ $details->email }}<br>
        Total Follower: {{ $details->user['followers_count'] }}<br>
        Total Follower: {{ $details->user['friends_count'] }}<br>
        Total Follower: {{ $details->user['statuses_count'] }}<br>
    </div>
@endif

@if($service == 'github')
    <div class="title m-b-md">
        Welcome {{ $details->name }}!<br>
        Your email is : {{ $details->email }}<br>
        Your location: {{ $details->user['location'] }}<br>
        Your bio: {{ $details->user['bio'] }}<br>
    </div>
@endif