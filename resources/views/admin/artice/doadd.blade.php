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

    <layout name="layout" />
    <div class='layui-row' style="padding: 20px;">
        <form class="layui-form" method="post" action="{:url('admin/Banner/doAdd')}" enctype="multipart/form-data">
            <div class="layui-form-item">
                <label class="layui-form-label">名称：</label>
                <div class="layui-col-md3">
                    <input type="text" name="name" lay-verify="required" placeholder="请输入标题" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">电话：</label>
                <div class="layui-col-md3">
                    <input type="text" name="phone"  placeholder="请输入电话" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">官网：</label>
                <div class="layui-col-md3">
                    <input type="text" name="website" lay-verify="url" placeholder="请输入地址" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">邮箱：</label>
                <div class="layui-col-md3">
                    <input type="text" name="email"  placeholder="请输入地址" class="layui-input">
                </div><span class="optional-text">(选填)</span>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">联系人：</label>
                <div class="layui-col-md3">
                    <input type="text" name="contacts"  placeholder="请输入地址" class="layui-input">
                </div><span class="optional-text">(选填)</span>
            </div>
            <!--<div class="layui-form-item">-->
            <!--<label class="layui-form-label">国家</label>-->
            <!--<div class="layui-col-md3">-->
            <!--<input type="text" name="phone" lay-verify="required" placeholder="请输入地址" class="layui-input">-->
            <!--</div>-->
            <!--</div>-->
            <div class="layui-form-item">
                <label class="layui-form-label">所在地区：</label>
                <div class="layui-input-inline">
                    <select name="province" lay-verify="" lay-filter="province">
                        <option value="0">请选择</option>
                        <volist name="province" id="vo">
                            <option value="{$vo.province}">{$vo.province}</option>
                        </volist>
                    </select>
                </div>
                <div class="layui-input-inline ">
                    <select name="city" class="city" lay-verify="">
                        <option value="0">请选择</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">详细地址：</label>
                <div class="layui-col-md3">
                    <input type="text" name="address" lay-verify="required" placeholder="请输入详细地址" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">成立时间：</label>
                <div class="layui-col-md3">
                    <input type="text" name="establish" lay-verify="required" id="establish" placeholder="请输入成立时间" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">医院形象图：</label>
                <div class="layui-col-md3">
                    <div class="layui-upload">
                        <button type="button" class="layui-btn" id="logo">上传图片</button>
                        <div class="layui-upload-list">
                            <img class="layui-upload-img" id="logo_yl_img" width="100" height="100">
                            <p id="demoText"></p>
                        </div>
                    </div>
                    <input type="hidden" name="logo" id="logo_img">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">营业许可证：</label>
                <div class="layui-col-md3">
                    <div class="layui-upload">
                        <button type="button" class="layui-btn" id="yzzz">上传图片</button>
                        <div class="layui-upload-list">
                            <img class="layui-upload-img" id="yzzz_yl_img" width="100" height="100">
                            <p id="demoText1"></p>
                        </div>
                    </div>
                    <input type="hidden" name="yyzz" id="yzzz_img">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">执业许可证：</label>
                <div class="layui-col-md3">
                    <div class="layui-upload">
                        <button type="button" class="layui-btn" id="zyxkz">上传图片</button>
                        <div class="layui-upload-list">
                            <img class="layui-upload-img" id="zyxkz_yl_img" width="100" height="100">
                            <p id="demoText2"></p>
                        </div>
                    </div>
                    <input type="hidden" name="zyxkz" id="zyxkz_img">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">医疗审查证明：</label>
                <div class="layui-col-md3">
                    <div class="layui-upload">
                        <button type="button" class="layui-btn" id="ylsczm">上传图片</button>
                        <div class="layui-upload-list">
                            <img class="layui-upload-img" id="ylsczm_yl_img" width="100" height="100">
                            <p id="demoText3"></p>
                        </div>
                    </div>
                    <input type="hidden" name="ylsczm" id="ylsczm_img">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">原理图：</label>
                <div class="layui-input-block">
                    <div class="layui-upload">
                        <button type="button" class="layui-btn layui-btn-normal" id="yyhj-list">选择多文件</button>
                        <div class="layui-upload-list">
                            <table class="layui-table">
                                <thead>
                                <tr><th>文件名</th>
                                    <th>大小</th>
                                    <th>状态</th>
                                    <th>预览</th>
                                    <th>操作</th>
                                </tr></thead>
                                <tbody id="yyhj-detail"></tbody>
                            </table>
                        </div>
                        <button type="button" class="layui-btn" id="yyhj-start-btn">开始上传</button>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">服务类型：</label>
                <div class="layui-input-inline">
                    <select name="capital_type" lay-verify="" lay-filter="service">
                        <option value="">请选择</option>
                        <volist name="service" id="vo">
                            <option value="{$vo.type}">{$vo.type}</option>
                        </volist>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">医院类型：</label>
                <div class="layui-input-inline">
                    <select name="service_type" class="service_type" lay-verify="">
                        <option value="">请选择</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">擅长项目：</label>
                <div class="layui-col-md3">
                    <volist name="project" id="vo">
                        <input type="checkbox" name="project[]" title="{$vo.name}" value="{$vo.id}" lay-skin="primary">
                    </volist>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">医院介绍：</label>
                <div class="layui-col-md3">
                    <textarea name="message" required lay-verify="required" placeholder="请输入" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">上班时间：</label>
                <div class="layui-col-md3">
                    <input type="text" id="business_start_time" name="business_start_time"  lay-verify="required" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">下班时间：</label>
                <div class="layui-col-md3">
                    <input type="text" id="business_over_time" name="business_over_time"  lay-verify="required" class="layui-input">
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
                    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>
    @endsection

