@extends('admin.layout.master')
@section('title','Admin | Người dùng')
@section('users_active','active')
@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <div class="col-md-12"><h4 class="col-md-6"><i class="fa fa-angle-right"></i> Danh sách người dùng </h4>
                <a href="{{route('users.create')}}" class="btn btn-theme03 pull-right">+Thêm người dùng</a></div>
                <hr>
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Quyền</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $index =>$user)
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->email  }}</td>
                    <td>{{ $user->phone }}</span></td>
                    <td>{{ $user->level }}</td>
                    
                    <td>
                      
                      <a href="{{ route('users.edit',$user)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <form action="{{route('users.destroy',$user)}}" method="POST" style="display:inline-block">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </form>
                      
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection