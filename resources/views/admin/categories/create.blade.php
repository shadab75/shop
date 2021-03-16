@extends('admin.layout.master')

@section('content')

    <div class="box">
        <div class="box-header">
            <div class="box-title"><h2>ایجاد دسته بندی</h2></div>
        </div>
        <div class="box-body">
            <form action="{{route('categories.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="category_id">دسته والد</label>
                    <select name="category_id" id="category_id" class="custom-select col-6">
                        <option value="" disabled selected>دسته والد را انتخاب کنید</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="title">عنوان</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-primary">
                </div>
            </form>
        </div>

    </div>
    @include('admin.layout.error')
@endsection
