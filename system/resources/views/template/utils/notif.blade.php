@foreach(['success', 'waring', 'danger'] as $status)
    @if (session($status))
        <div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
            <a href="#" class="close" data-dismis="alert" arial-label="close">&times;</a>
            <strong> {{ session($status) }} </strong>
        </div>
    @endif
@endforeach