
@php
$len_1 = strlen($page_views_count);
@endphp
<div class="page-views">
    <div>
              <a href="{{ url('/profile/' . $owner->id) }}#page-top">
                    @if(!empty($owner->profile150x150))
                <img class="img-profile-pic mb-5" src="{{$owner->profile150x150??url('assets/img/profile-update-pic.jpg')}}" alt="{{$owner->business_name??''}}" />
                @else
                <img class="img-profile-pic mb-5" src="{{$owner->profile150x150??url('assets/img/profile-pic.jpg')}}" alt="{{$owner->business_name??''}}" />
                @endif
        </a>
    </div>
    Page Views
    @for ($j = 0; $j < $len_1; $j++)
    @php
   $img = substr($page_views_count, $j, 1)
    @endphp
    <img loading="lazy" src="{{url('/assets/img/hitcounter/'.$img.'.gif')}}" alt="" />
    @endfor
    </div>