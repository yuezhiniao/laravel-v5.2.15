@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">管理</div>

                <div class="panel-body">
                    欢迎 ! 你已登录! <hr/>
					<ul >
					<a href = "{{ url('new_account'  ) }}"> <li> 新建客户帐号</li> </a>
					
					<a href = "{{ url('edit_account'  ) }}"> <li> 编辑现有帐号</li> </a>
					</ul>
					
                </div>
            </div>
        </div>
    </div>
</div>

 
    <hr>
    <div id="content">
        <ul> 
		    
            @foreach ($users as $yy)
            <li style="margin: 50px 0;">
                <div class="title">
                    <a href="{{ url('article/'.$yy->id) }}">
                        <h4>{{ $yy->name }}</h4>
						
                    </a>
                </div>
                <div class="body">
                    <p>{{ $yy->email }}</p>
					
					
                </div>
            </li>
			
            @endforeach
        </ul>
    </div>
@endsection
