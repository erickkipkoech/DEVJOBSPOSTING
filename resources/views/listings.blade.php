<h1>
    {{$heading}}
</h1>
@unless(count($listings)==0)

@foreach ($listings as $listing)

<h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['job']}}</a>
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach
@else
<p>
    No Listings
</p>
@endunless