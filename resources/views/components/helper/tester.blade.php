<div>

    <div {{$attributes->merge(['class'=>'alert alert-dismissible fade show '. $getMsg()])}} role="alert" data="what data">
        <strong>{{$title}}</strong>
        <h4>{{$sender}}</h4>
        <h6>{{$slot}}</h6>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


</div>
