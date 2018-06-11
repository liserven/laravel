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

    <div class='layui-row' style="padding: 20px;">
        <form class="layui-form" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="layui-form-item">
                <label class="layui-form-label">姓名：</label>
                <div class="layui-col-md3">
                    <input type="text" name="name" placeholder="请输入管理员名称"
                           @if( !empty( $data))
                           value="{{$data['md_name']}}"
                           @endif
                           class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">手机：</label>
                <div class="layui-col-md3">
                    <input type="text" name="phone" placeholder="请输入管理员手机"
                           @if( !empty( $data))
                           value="{{$data['md_phone']}}"
                           @endif
                           class="layui-input">
                </div>
                <strong style="color:#f60; display: inline-block; height:45px; line-height:45px;">(做为登陆帐号使用)</strong>
            </div>
            @if( empty( $data) )
            <div class="layui-form-item">
                <label class="layui-form-label">密码：</label>
                <div class="layui-col-md3">
                    <input type="password" name="password" placeholder="请输入管理员密码"
                           @if( !empty( $data))
                           value="{{$data['ad_url']}}"
                           @endif
                           class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">确认密码：</label>
                <div class="layui-col-md3">
                    <input type="password" name="url" placeholder="请输入管理员密码"
                           @if( !empty( $data))
                           value="{{$data['ad_url']}}"
                           @endif
                           class="layui-input">
                </div>
            </div>
            @endif
            <div class="layui-form-item">
                <label class="layui-form-label">邮箱：</label>
                <div class="layui-col-md3">
                    <input type="text" name="email" placeholder="请输入管理员邮箱"
                           @if( !empty( $data))
                           value="{{$data['email']}}"
                           @endif
                           class="layui-input">
                </div>
            </div>

            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">角色：</label>
                <div class="layui-input-block">
                    @foreach ( $role_data as $v)
                        <input type="checkbox" value="{{ $v['rd_id'] }}" name="role[]" lay-filter="check-one"
                               title="{{$v['rd_name'] }}" class="check-one" lay-skin="primary"
                               @if( !empty($data))
                               @if( in_array($v['rd_id'], $role_ids ))
                               checked
                                @endif
                                @endif
                        >
                    @endforeach

                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">顺序：</label>
                <div class="layui-input-inline newsStatus">
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
                <label class="layui-form-label">状态：</label>
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
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" @if( !empty($data) ) value="{{$data['id']}}"@endif>
                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
        </form>
    </div>
@endsection

