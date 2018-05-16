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
                <label class="layui-form-label">名称：</label>
                <div class="layui-col-md3">
                    <input type="text" name="name" lay-verify="required" placeholder="行为名称" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">url：</label>
                <div class="layui-col-md3">
                    <input type="text" name="url" lay-verify="required" placeholder="行为链接" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">上级行为：</label>
                <div class="layui-input-inline">
                    <select name="pid" lay-verify="" lay-filter="province">
                        <option value="0">一级行为</option>
                        @foreach($action as $vo)
                            <option value="{{$vo['ad_id']}}">{{$vo['ad_name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">顺序：</label>
                <div class="layui-col-md1">
                    <input type="number" name="order" value="99"  lay-verify="required"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>
    @endsection

