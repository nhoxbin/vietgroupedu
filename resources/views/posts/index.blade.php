@extends('layouts.web')

@section('section')
<div class="about-page-area section-padding" style="padding-top: 10px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title-wrapper">
          <div class="section-title">
            <h3>@lang('categories.'.$cate->slug)</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        @if($cate->children->count())
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              @foreach($cate->children as $child)
                <a class="nav-item nav-link {{ $loop->first ? 'active': null }}" data-toggle="tab" href="#{{ $child->slug }}" role="tab">@lang('page.'.$child->slug)</a>
              @endforeach
            </div>
          </nav>
          <div class="tab-content">
            @foreach($cate->children as $child)
              <div class="tab-pane fade show {{ $loop->first ? 'active': null }}" id="{{ $child->slug }}" role="tabpanel">
                  <div class="table-responsive">
                      <table id="table-{{ $child->slug }}" class="dataTable table table-bordered table-hover table-stripped">
                        <caption>Tất cả các đơn hàng {{ $child->title }}</caption>
                        <thead>
                          @if($cate->slug === 'xuat-khau-lao-dong')
                              <tr>
                                <th>@lang('page.tieu-de')</th>
                                <th>@lang('page.muc-luong')</th>
                                <th>@lang('page.ngay-phong-van')</th>
                              </tr>
                          @else
                              <tr>
                                  <th>@lang('page.tieu-de')</th>
                              </tr>
                          @endif
                        </thead>
                        <tbody>
                          @foreach($child->posts as $post)
                            @if($post->type == 1 && $post->field->title)
                              <tr>
                                <td>
                                  <a href="/don-hang/{{ $post->field->slug }}"><h6>{{ $post->field->title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
                                  <p style="margin: 15px 0px 5px;font-size: 12px;">
                                    <i class="fa fa-map-marker"></i> {{ $post->order->work_place }} | @lang('page.han-nop-ho-so'): <i class="fa fa-calendar"></i> {{ $post->order->expired }}
                                  </p>
                                </td>
                                <td>{{ number_format($post->order->income) }}đ</td>
                                <td>{{ $post->order->interview }}</td>
                              </tr>
                            @else
                              <tr>
                                <td><a href="{{ $child->slug . '/' . $post->field->slug }}"><h6>{{ $post->field->title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a></td>
                                <td></td>
                                <td></td>
                              </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
            @endforeach
          </div>
        @else
          <div class="table-responsive">
            <table :id="'table-' + child.slug" class="dataTable table table-bordered table-hover table-stripped">
              <caption>Tất cả các đơn hàng {{ $cate->title }}</caption>
              <thead>
                <tr>
                  <th>Tiêu đề</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cate->posts as $post)
                  <tr>
                    <td>
                      <a href="{{ $post->parents_tree . $post->fields[0]->slug }}"><h6>{{ $post->fields[0]->title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script>
    $('.dataTable').DataTable({
        order: []
    });
</script>
@endpush
