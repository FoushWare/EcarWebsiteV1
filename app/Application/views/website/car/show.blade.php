@extends('layouts.app')
  @section('title')
    {{ trans('car.car') }} {{ trans('home.view') }}
@endsection
  @section('content')
<div class="container">
        <a href="{{ url('car') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
  <table class="table table-bordered table-responsive table-striped">
  @include("website.car.relation.region.show")
  @include("website.car.relation.country.show")
  @include("website.car.relation.accessories.show")
  @include("website.car.relation.maincat.show")
  @include("website.car.relation.brand.show")
  @include("website.car.relation.user.show")
   </tr>
    <tr><th>{{ trans("car.title") }}</th>
    @php $type =  getFileType("title" , $item->title) @endphp
    @if($type == "File")
     <td> <a href="{{ url(env("UPLOAD_PATH")."/".$item->title) }}">{{ $item->title }}</a></td>
    @elseif($type == "Image")
     <td> <img src="{{ url(env("UPLOAD_PATH")."/".$item->title) }}" /></td>
    @else
     <td>{{ nl2br($item->title) }}</td>
    @endif</tr>
       <tr><th>{{ trans("car.price") }}</th>
          @php $type =  getFileType("price" , $item->price) @endphp
          @if($type == "File")
              <td> <a href="{{ url(env("UPLOAD_PATH")."/".$item->price) }}">{{ $item->price }}</a></td>
          @elseif($type == "Image")
              <td> <img src="{{ url(env("UPLOAD_PATH")."/".$item->price) }}" /></td>
          @else
              <td>{{ nl2br($item->price) }}</td>
          @endif</tr>
       <tr><th>{{ trans("car.body") }}</th>
    @php $type =  getFileType("body" , $item->body) @endphp
    @if($type == "File")
     <td> <a href="{{ url(env("UPLOAD_PATH")."/".$item->body) }}">{{ $item->body }}</a></td>
    @elseif($type == "Image")
     <td> <img src="{{ url(env("UPLOAD_PATH")."/".$item->body) }}" /></td>
    @else
     <td>{{ nl2br($item->body) }}</td>
    @endif</tr>
    <tr><th>{{ trans("car.image") }}</th>
    @php $type =  getFileType("image" , $item->image) @endphp
    @if($type == "File")
     <td> <a href="{{ url(env("UPLOAD_PATH")."/".$item->image) }}">{{ $item->image }}</a></td>
    @elseif($type == "Image")
            <td> <img src="{{ url(env("UPLOAD_PATH")."/small"."/".$item->image) }}" /><span class=""><span style="margin-left: 20px;">original</span>@include("website.car.buttons.view", ["id" => $item->id ,"large"=>"large"])</span></td>


    @else
     <td>{{ nl2br($item->image) }}</td>
    @endif</tr>
    <tr><th>{{ trans("car.youtube") }}</th>
    @php $type =  getFileType("youtube" , $item->youtube) @endphp
    @if($type == "File")
     <td> <a href="{{ url(env("UPLOAD_PATH")."/".$item->youtube) }}">{{ $item->youtube }}</a></td>
    @elseif($type == "Image")
     <td> <img src="{{ url(env("UPLOAD_PATH")."/".$item->youtube) }}" /></td>
    @else
    @if(isset($item) && $item->youtube != "")
     <td>
    <iframe width="420" height="315" src="https://www.youtube.com/embed/{{ isset($item->youtube) ? getYouTubeId($item->youtube) : old("youtube")  }}"></iframe>
     </td>
    @endif
    @endif</tr>
   </tr>
  </table>
          {{--@include('website.car.buttons.delete' , ['id' => $item->id])--}}
        {{--@include('website.car.buttons.edit' , ['id' => $item->id])--}}
</div>
@endsection
