@extends('backend.index')
@section('title', 'Brand')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 row">
                    <h1 class="d-inline col-md-10">Tất cả Brand</h1>
                    <div class="col-md-2 text-right">
                        <a href="#" class="text-danger"><i class="fa fa-trash"
                                aria-hidden="true"></i><sup>0</sup></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header text-right">
                <button class="btn btn-sm btn-success">
                    <i class="fa fa-save" aria-hidden="true"></i>
                    Lưu
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{ route('backend.brand.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Tên banner (*)</label>
                                <input type="text" name="name" id="name" placeholder="Nhập tên thuong hieu"
                                    class="form-control">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image">Hình ảnh</label>
                                <input type="file" name="image" id="image" placeholder="Nhập Image"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Link</label>
                                <textarea type="text" name="link" id="link" placeholder="Nhập link" class="form-control"> {{ old('Link') }}</textarea>
                            </div>
                           
                            <div class="mb-3">
                                <label for="description">Mô tả (*)</label>
                                <textarea type="text" id="description" name="description" id="description" placeholder="Nhập mô tả danh mục"
                                    class="form-control" onkeydown="handle_slug(this.value);">{{ old('description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Sắp xếp</label>
                                <select name="sort_order" class="form-control">
                                    <option value="0">Chọn vị trí</option>
                                    {!! $htmlsortOrder!!}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success">
                                Thêm thương hiệu
                            </button>
                        </form>

                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px;">
                                        <input type="checkbox">
                                    </th>
                                    <th>Id</th>
                                    <th class="text-center" style="width:130px;">Hình ảnh</th>
                                    <th>Tên thương hiệu</th>
                                    <th>Vị trí</th>
                                    <th>Mô tả</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                <tr class="datarow">
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        {{$row->id}}
                                    </td>
                                    <td>
                                        <img src="{{asset('images/category/'.$row->link)}}" alt="category.jpg">
                                    </td>
                                    <td>
                                        {{$row->name}}
                                    </td>
                                    <td>
                                        {{$row->sort_order}}
                                    </td>
                                    <td>
                                        {{$row->description}}
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" href="#">Hiện</a>
                                        <a class="btn btn-sm btn-success" href="#">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-sm btn-info" href="{{route('admin.category.show',['id', $row->id])}}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="#">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection