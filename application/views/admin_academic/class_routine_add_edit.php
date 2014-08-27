<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons">
                    <i class="fa fa-edit"></i>
                </div>
                <h5><?php echo $featuretitle; ?></h5>

                <!-- .toolbar -->
                <div class="toolbar">
                    <nav style="padding: 8px;">
                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                            <i class="fa fa-minus"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                            <i class="fa fa-expand"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                            <i class="fa fa-times"></i>
                        </a> 
                    </nav>
                </div><!-- /.toolbar -->
            </header>
            <div id="div-1" class="body">
                <form class="form-horizontal" method="post" action="#">
                    <table>
                        <tr>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Time</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Saturday</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Sunday</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Monday</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Tuesday</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Wednesday</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Thursday</label>  
                            </th>

                        </tr>
                        <tr>
                            <td width="140">
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Period" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="01">8:30 AM~9:50 AM</option>
                                        <option value="02">10:00 AM~11:20 AM</option>
                                        <option value="03">11:30 AM~12:50 PM</option>
                                        <option value="04">2:00 PM~3:20 PM</option>
                                        <option value="05">3:30 PM~4:50 PM</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="140">
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Period" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="01">8:30 AM~9:50 AM</option>
                                        <option value="02">10:00 AM~11:20 AM</option>
                                        <option value="03">11:30 AM~12:50 PM</option>
                                        <option value="04">2:00 PM~3:20 PM</option>
                                        <option value="05">3:30 PM~4:50 PM</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="140">
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Period" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="01">8:30 AM~9:50 AM</option>
                                        <option value="02">10:00 AM~11:20 AM</option>
                                        <option value="03">11:30 AM~12:50 PM</option>
                                        <option value="04">2:00 PM~3:20 PM</option>
                                        <option value="05">3:30 PM~4:50 PM</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="140">
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Period" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="01">8:30 AM~9:50 AM</option>
                                        <option value="02">10:00 AM~11:20 AM</option>
                                        <option value="03">11:30 AM~12:50 PM</option>
                                        <option value="04">2:00 PM~3:20 PM</option>
                                        <option value="05">3:30 PM~4:50 PM</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="teacher_name" id="teacher_name" data-placeholder="Select Room" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="EXT-101">EXT-101</option>
                                        <option value="EXT-102">EXT-102</option>
                                        <option value="EXT-101">EXT-103</option>
                                        <option value="ADM-101">ADM-101</option>
                                        <option value="ADM-102">ADM-102</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <div style="margin-top: 10px; margin-right: 20%;">
                        <a id="cp4" class="btn btn-danger" data-color="rgb(255, 255, 255)" data-color-format="hex" href="#">Add Row</a>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/list" ?>" class="btn btn-primary btn-rect pull-left" data-original-title="" title="">Back</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/list" ?>" class="btn btn-primary btn-rect pull-right" data-original-title="" title="">Save</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        formGeneral();
    });
</script>
<style>
    table{
        border:1px solid #428bca;
    } 
    td{
        border:1px solid #428bca;
        padding: 5px;
        width: 180px;
    }
    th{
        color: #428bca;
        border:1px solid #428bca;
    }
    .newWidth{
        width: 150px !important;
    }
    .addRow{
        /*margin-left: 200px !important;*/ 
    }
</style>