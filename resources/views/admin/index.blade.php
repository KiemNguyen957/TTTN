@extends('admin.layout.master')
@section('title','Admin | Trang chủ')
@section('home_active','active')
@section('content')
<section id="main-content">
        <section class="wrapper site-min-height">
          <div class="row mt">
            <div class="col-lg-12">
              <div class="row content-panel">
                  <div class="col-md-3"></div>
                    <div class="col-md-6 col-sm-6 mb">
                            <div class="stock card">
                              <div class="stock-chart">
                                <div id="chart"></div>
                              </div>
                              <div class="stock current-price">
                                <div class="row">
                                  <div class="info col-sm-6 col-xs-6"><abbr>Đã có</abbr>
                                  <time>{{count($orders)}} đơn đặt hàng</time>
                                  </div>
                                  <div class="changes col-sm-6 col-xs-6">
                                  <div class="value up">{{number_format($total)}} VND</i></div>
                                    <div class="change hidden-sm hidden-xs">từ các hóa đơn</div>
                                  </div>
                                </div>
                              </div>
                              <div class="summary">
                              <strong>{{count($products)}}</strong> <span>sản phẩm đang bán trên website</span>
                              </div>
                            </div>
                          </div>
              </div>
            </div>
          </div>
        </section>
      </section>
    
@endsection