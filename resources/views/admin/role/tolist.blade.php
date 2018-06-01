<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 10:51
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 15:05
 */
?>
@extends('admin.layout.frame')

<fieldset class="layui-elem-field layui-field-title">
    <legend>角色管理
        <a href="javascript:;" class="layui-btn layui-btn-primary layui-btn-sm refresh"><i class="layui-icon">&#x1002;</i>刷新</a>
        <a href="javascript:;" class="layui-btn layui-btn-container layui-btn-sm add" data-id=""><i class="fa fa-plus"></i>添加</a>
    </legend>
</fieldset>
<div class="layui-form layui-border-box layui-table-view" lay-filter="content-box" style="padding: 20px;border: 0;">
    <form action="">
        <div class="layui-form-item">
            <label class="layui-form-label">地区：</label>
            <div class="layui-input-inline">
                <select name="province"  lay-filter="province">
                    <option value="">全部</option>
                    <volist name="province" id="vo">
                        <option value="{$vo.province}">{$vo.province}</option>
                    </volist>
                </select>
            </div>
            <div class="layui-input-inline">
                <select name="city" class="city">
                </select>
            </div>
            <label class="layui-form-label">标题：</label>
            <div class="layui-input-inline">
                <input type="text" name="seach" class="layui-input">
            </div>
            <button class="layui-btn layui-btn-small add" type="submit">搜索</button>
            <span class="" style="display: inline-block; float:right;font-size: 16px;" >共 <strong style="color:#f60">{{$page->total()}}</strong> 条数据 </span>
        </div>
    </form>
    <div class="layui-table-box" style="overflow: auto">
        <table class="layui-table" style="width: 100%; border: 1px solid #eee">
            <thead>
            <tr>

                <th data-field="1" data-unresize="true">
                    <div class="layui-table-cell laytable-cell-1-1 laytable-cell-checkbox">
                        <input name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose" type="checkbox">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary">
                            <i class="layui-icon"></i>
                        </div>
                    </div>
                </th>
                <th data-field="id">
                    <div class="layui-table-cell laytable-cell-1-0 laytable-cell-numbers">
                        <span>id</span>
                    </div>
                </th>
                <th data-field="name">
                    <div class="layui-table-cell">
                        <span>角色名称</span>
                    </div>
                </th>

                <th data-field="name">
                    <div class="layui-table-cell">
                        <span>所属管理员</span>
                    </div>
                </th>
                <th data-field="type">
                    <div class="layui-table-cell"><span>Banner排序</span></div>
                </th>
                <th data-field="createdTime">
                    <div class="layui-table-cell"><span>创建时间</span></div>
                </th>
                <th>
                    <div class="layui-table-cell"><span>状态</span></div>
                </th>
                <th data-field="11">
                    <div class="layui-table-cell" align="center"><span>操作</span></div>
                </th>
            </tr>
            </thead>
            <tbody class="">
            <input type="hidden" id="del_url" value="{{ route('action_delete') }}">
            @foreach($page as $key=> $vo)
                <tr data-index="0" class="tbody_content" data-id="{{$vo['rd_id']}}" module="{{ encrypt('action_data') }}" >
                    <input type="hidden" value="{{ csrf_token() }}" id="csrf_token">

                    <td>
                        <div class="layui-table-cell laytable-cell-1-1 laytable-cell-checkbox">
                            <input name="layTableCheckbox" lay-skin="primary" type="checkbox">
                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary">
                                <i class="layui-icon"></i>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="layui-table-cell laytable-cell-1-0 laytable-cell-numbers">
                            <span>{{$vo['rd_id']}}</span>
                        </div>
                    </td>
                    <td>
                        <div class="layui-table-cell">{{$vo['rd_name']}}</div>
                    </td>

                    <td>
                        <div class="layui-table-cell">{{$vo['rd_name']}}</div>
                    </td>
                    <td  style="width: 100px;">
                        <div class="layui-table-cell" ><input value='{{$vo['order']}}' class='layui-input edit-order layui-table-cell' /></div>
                    </td>

                    <td>
                        <div class="layui-table-cell">{{$vo['create_at']}}</div>
                    </td>
                    <td data-id="1">

                            @if( $vo['status'] == 1 )
                            <div class="layui-table-cell text-success">
                            <i class="fa fa-check"></i> 正常
                            </div>

                        @else
                            <div class="layui-table-cell text-danger">
                                <i class="fa fa-times"></i> 停用
                            </div>

                            @endif
                    </td>
                    <td>
                        <div class="layui-table-cell">
                            @if( $vo['status'] ==  1 )
                                <a class="layui-btn layui-btn-primary layui-btn-xs eidt_status" type-d="2"><i class="fa fa-edit"></i> 停用</a>

                            @else
                                <a class="layui-btn layui-btn-primary layui-btn-xs eidt_status" type-d="1"><i class="fa fa-edit"></i> 启用</a>

                            @endif
                            <a class="layui-btn layui-btn-primary layui-btn-xs add" data-id="{{$vo['rd_id']}}"><i class="fa fa-edit"></i> 编辑</a>
                            <a class="layui-btn layui-btn-danger layui-btn-xs do_del"><i class="fa fa-times-circle-o"></i> 删除</a>

                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="13">
                        {{$page->links()}}
                </td>
            </tr>
            </tfoot>
        </table>

    </div>
</div>
</div>
</div>
@section('footer')
    <script>
        var _token = '{{csrf_token()}}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': _token
            }
        });
    </script>
    @endsection