@if(count($errors)>0)
    <div class="ui negative message">
        <i class="close icon"></i>
        <div class="header">Opss.. Tivemos algum erro:</div>
        <ul class="list">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('message'))
    <div class="ui positive message">
        <i class="close icon"></i>
        <div class="header">:) Deu tudo certo:</div>
        <ul class="list">
            <li>{{Session::get('message')}}</li>
        </ul>
    </div>
@endif
