<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 11:16
 */
?>

@extends('admin.layout.frame')
@section('content')

    <form class="layui-form layui-row layui-col-space10" action="" style="padding: 20px;">
        {{ csrf_field() }}
        <div class="layui-col-md9 layui-col-xs12">
            <div class="layui-form-item">
                <label class="layui-form-label">角色名称</label>
                <div class="layui-input-block">
                    <input type="text" name="name" required  lay-verify="required" 
                           @if( !empty($data) )
                                value="{{$data['rd_name']}}"
                           @endif
                           placeholder="请输入角色名称" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">角色描述</label>
                <div class="layui-input-block">
                    <textarea name="message" placeholder="请输入角色描述" class="layui-textarea">@if( !empty($data)){{ $data['rd_message'] }}@endif</textarea>
                </div>
            </div>
            {{--<div class="layui-form-item">--}}
                {{--<label class="layui-form-label">选择框</label>--}}
                {{--<div class="layui-input-block">--}}
                    {{--<select name="city" lay-verify="required">--}}
                        {{--<option value=""></option>--}}
                        {{--<option value="0">北京</option>--}}
                        {{--<option value="1">上海</option>--}}
                        {{--<option value="2">广州</option>--}}
                        {{--<option value="3">深圳</option>--}}
                        {{--<option value="4">杭州</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">对应权限</label>
                <div class="layui-input-block">
                    @foreach ( $actionPidList as $vo)

                        <fieldset class="layui-elem-field">
                            <legend>{{ $vo['ad_name'] }}</legend>
                            <div class="layui-field-box">
                                <input type="checkbox" value="{{ $vo['ad_id'] }}" name="actions[]" title="{{$vo['ad_name'] }}" lay-filter="check-all" class="check-all" lay-skin="primary"
                                        @if( !empty($data))
                                       @if( in_array( $vo['ad_id'], $data['actions'] ))
                                    checked
                                        @endif
                                        @endif
                                >
                                @foreach ( $vo['actions'] as $v)
                                    <input type="checkbox" value="{{ $v['ad_id'] }}" name="actions[]" lay-filter="check-one" title="{{$v['ad_name'] }}" class="check-one" lay-skin="primary"
                                        @if( !empty($data))
                                           @if( in_array($v['ad_id'], $data['actions'] ))
                                        checked
                                            @endif
                                            @endif
                                    >
                                @endforeach
                            </div>
                        </fieldset>
                   @endforeach

                </div>
            </div>

        </div>
        <div class="layui-col-md3 layui-col-xs12">
            <blockquote class="site-text layui-elem-quote">
                <i class="layui-icon"></i> 辅助选项
            </blockquote>
            <div class="border">
                {{--<div class="layui-form-item">--}}
                    {{--<label class="layui-form-label"><i class="layui-icon"></i> 状　态</label>--}}
                    {{--<div class="layui-input-block newsStatus">--}}
                        {{--<select name="status" lay-verify="required">--}}
                            {{--<option value="0">保存草稿</option>--}}
                            {{--<option value="1">等待审核</option>--}}
                        {{--</select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input placeholder="请选择" value="保存草稿" readonly="" class="layui-input layui-unselect" type="text"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="0" class="layui-this">保存草稿</dd><dd lay-value="1" class="">等待审核</dd></dl></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="layui-form-item">
                    <label class="layui-form-label"><i class="layui-icon"></i> 顺　序</label>
                    <div class="layui-input-block newsStatus">
                        <input type="number" name="order"
                               @if( !empty($data))
                                          value="{{ $data['order'] }}"
                               @else
                                       value="11"
                                       @endif
                               required  lay-verify="required" placeholder="请输入顺序" autocomplete="off" class="layui-input">

                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><i class="layui-icon"></i> 发　布</label>
                    <div class="layui-input-block">
                        <input name="status" title="立即启用" lay-skin="primary" value="1" lay-filter="release"
                               @if( !empty($data))
                                    @if( $data['status'] == 1 )
                                        checked
                                    @endif
                               @else
                                    checked
                               @endif
                               type="radio">
                        <input name="status" title="暂时停用" lay-skin="primary" value="2" lay-filter="release"
                               @if( !empty($data))
                                   @if( $data['status'] == 2 )
                                   checked
                                   @endif
                               @endif
                               type="radio">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                         @if( !empty($data))
                            <input type="hidden" name="id" value="{{ $data['rd_id'] }}">
                        @endif
                        <button class="layui-btn layui-btn-sm" lay-submit lay-filter="formDemo">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
                    </div>
                </div>
                <hr class="layui-bg-gray">

            </div>

        </div>
    </form>
    @endsection

