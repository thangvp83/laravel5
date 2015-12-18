@extends('admin.master')
@section('controller', 'Category')
@section('action', 'List')
@section('content')
<!-- Page Content -->
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category Parent</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr class="odd gradeX" align="center">
                    <td>{!! $item['id'] !!}</td>
                    <td>{!! $item['name'] !!}</td>
                    <td>
                        @if($item['parent_id'] == 0 || !isset($item['parent_id']))
                            {!! "None" !!}
                        @else
                            <?php
                                $parent_name = DB::table('cates')->where('id', $item['parent_id'])->first();
                                if($parent_name){
                                    echo $parent_name->name;
                                } else {
                                    echo "None";
                                }
                            ?>
                        @endif
                    </td>
                    <td>Hiện</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirmDelete('Do You Want Delete!')" href="{!! URL::route('admin.cate.getDelete', $item['id']) !!}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.cate.getEdit', $item['id']) !!}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
<!-- /#page-wrapper -->
@endsection