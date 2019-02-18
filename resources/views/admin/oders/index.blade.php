@extends('admin.layout.master')
@section('title','Admin | Hóa đơn')
@section('oder_active','active')
@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <div class="col-md-12"><h4 class="col-md-6"><i class="fa fa-angle-right"></i> Danh sách hóa đơn </h4>
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã hóa đơn</th>
                    <th>Khách hàng</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
               
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      
                      <a href="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <form action="" method="POST" style="display:inline-block">
                        
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </form>
                      
                    </td>
                  </tr>
             
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