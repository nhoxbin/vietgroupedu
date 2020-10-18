@extends('layouts.web')

@section('section')
	<div class="about-page-area section-padding" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>{{ $cate->title }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                @if($cate->children->count() > 0)
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @foreach($cate->children as $child)
                            <a class="nav-item nav-link {{ $loop->first ? 'active': null }}" data-toggle="tab" href="#{{ $child->slug }}" role="tab">{{ $child->title }}</a>
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
                                              <th>Tiêu đề</th>
                                              <th>Mức lương</th>
                                              <th>Ngày phỏng vấn</th>
                                            </tr>
                                        @else
                                            <tr>
                                                <th>Tiêu đề</th>
                                            </tr>
                                        @endif
                                      </thead>
                                      <tbody>
                                        @foreach($child->posts as $post)
                                          @if($post->type == 1)
                                            <tr>
                                              <td>
                                                <a href="{{ $post->parents_tree }}"><h6>{{ $post->title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
                                                <p v-if="post.type == 1" style="margin: 15px 0px 5px;font-size: 12px;">
                                                    <i class="fa fa-map-marker"></i> {{ $post->field->work_place }} | Hạn nộp hồ sơ: <i class="fa fa-calendar"></i> {{ $post->field->expired }}
                                                </p>
                                              </td>
                                              <td>{{ number_format($post->field->income) }}đ</td>
                                              <td>{{ $post->field->interview }}</td>
                                            </tr>
                                          @else
                                            <tr>
                                              <td>{{ $post->title }}</td>
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
                            @if($post->slug != '')
                                <tr>
                                    <td>
                                        <a href="{{ $post->parents_tree }}"><h6>{{ $post->title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
                                    </td>
                                </tr>
                            @endif
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