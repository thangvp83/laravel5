@extends('admin.master')
@section('controller', 'Category')
@section('action', 'Edit')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{!! route('admin.cate.postEdit') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control">
                    <option value="0">Please Choose Category</option>
                    <?php cate_patent($parent, 0, '--', $data['parent_id'])?>
                </select>
            </div>
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName', isset($data['name'])?$data['name']:'') !!}"/>
            </div>
            <div class="form-group">
                <label>Category Order</label>
                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder', isset($data['order'])?$data['order']:'') !!}"/>
            </div>
            <div class="form-group">
                <label>Category Keywords</label>
                <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords', isset($data['keywords'])?$data['keywords']:'') !!}"/>
            </div>
            <div class="form-group">
                <label>Category Description</label>
                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', isset($data['description'])?$data['description']:'aa') !!}</textarea>
            </div>
            <div class="form-group">
                <label>Category Status</label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="{!! VISIBLE !!}" <?php echo $checked = ($data['status'] == VISIBLE)? "checked='checked'":""; ?> type="radio">Visible
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="{!! INVISIBLE !!}" <?php echo $checked = ($data['status'] == INVISIBLE)?"checked='checked'":""; ?> type="radio">Invisible
                </label>
            </div>
            <button type="submit" class="btn btn-default">Category Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>
@endsection