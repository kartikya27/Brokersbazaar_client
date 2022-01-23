  
             
                        <!--  <div class="col-sm-9 col-md-9 col-lg-10 col-sm-offset-3 col-md-offset-3 col-lg-offset-2"><div>-->
                                                <div id="content-wrapper" class="d-flex flex-column container">

            <!-- Main Content -->
            <div id="content">
<h1> Home Page Slider</h1>
<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add Home Page Slider
    </a>
   
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr> 
                <th>Slider Image</th>
                <th>Slider Title</th>
              <th>Slider Status</th>
                <th>Status</th>
                <th></th><th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($row as $r){?>
                                <tr> 
                        <td><img src="<?php echo base_url()."img/banner/".$r->img2;?>" style="height:150px; width:350px;" /></td>
                        <td class="text-center">
                            <a href="">
                                <span class="label label-success"><?php echo $r->title;?></span></a>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo base_url();?>admin/slider?codeid=2&tostatus=0">
                                <span class="label label-success">Enabled</span>                            </a>
                        </td>
                        <td class="text-center">
                         <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit<?php echo $r->id;?>" >Edit</button>
</td><td class="text-center">
                            <button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'headerSlider')">Delete</button>
                        </td>
                    </tr> 
                    <div class="modal fade " id="edit<?php echo $r->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
            <div class="modal-content p-2">
                <form action="editData" method="POST" enctype='multipart/form-data'>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Slider</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    <div class="modal-body"> 
                  
                      <!--<input type="hidden" name="tablename" value="headerSlider">-->
                    <div class="form-group">
                        <label>Title</label>
                          <input type="hidden" name="id" value="<?php echo $r->id;?>">
                       <input name="title" type="text" class="form-control" value="<?php echo $r->title;?>" />
                    </div>
                    
                    <div class="form-group">
                        <label>Sub Title</label>
                       <input name="subTitle" type="text" class="form-control" value="<?php echo $r->subTitle;?>" />
                    </div
                    <div class="form-group">
                        <label>Text</label>
                       <input name="text" type="text" class="form-control" value="<?php echo $r->text;?>" />
                    </div>
                        <div class="form-group">
                        <label>Image (350 X 150)</label>
                       <input name="img2" type="file" class="form-control" value="<?php echo $r->img2;?>" />
                    </div>
                     
                    <!-- <div class="form-group">-->
                    <!--    <label>Status</label>-->
                       <!--<select name="sliderStatusedit"  class="form-control" id="<?php echo "editStatus".$r->id;?>">-->
                       <!--    <option value="Enabled" <?php if($r->status=="Enabled")echo "selected";?>>Enabled</option><option value="Disabled" <?php if($r->status!="Enabled") echo "selected";?>>Disabled</option>-->
                       <!--</select>-->
                       
                    <!--</div>-->
                    <!-- <div class="form-group">-->
                    <!--    <label>Slide Number</label>-->
                    <!--   <input name="slideNumberedit" type="number" class="form-control" value="<?php echo $r->slid_number?>" id="<?php echo "editNumber".$r->id;?>" required/>-->
                    <!--</div>   -->
                            <button type="submit" name="" class="btn btn-primary w-25" id="editSlidersave">Save</button>
                    </div>
                   
                                </form>
            </div>
        </div>
    </div>
                    <?php }?>

                            </tbody>
    </table>
</div>
<!-- add/edit discounts -->
<div class="modal fade" id="addDiscountCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo base_url();?>Admin_control/insert_slider/" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="update" value="0">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Home Page Slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                   
                    <div class="form-group">
                        <label>Image</label>
                       <input name="sliderImageAdd" type="file" class="form-control"/>
                        <input placeholder="Slide title" name="sliderImageName" type="text" class="form-control"/>
                         <input name="sliderImageSubtitle" type="text" class="form-control" placeholder="Slide Sub title"/>
                          <input name="sliderImagetext" type="text" class="form-control" placeholder="Slide Text"/>
                    </div>
                   
                    
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="location.href = '<?php echo base_url();?>slider';" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


</div>

<!-- change pass -->
<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="calculator">
                 <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title">Security</div>
                    </div>
                    <div class="panel-body">
                        <label>Change my password</label> <span class="bg-success" id="pass_result">Changed!</span>
                        <form class="form-inline"  action="<?php echo base_url();?>admin/changePass/" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control new-pass-field" placeholder="New password" name="new_pass">
                            </div>
                            <!-- <a href="javascript:void(0);"  class="btn btn-sm btn-primary">Update</a> -->
                            <button type="submit" class="btn btn-sm btn-primary">Update</button><hr>
                            <!-- onclick="changePass()"
                            <span>Password Strength:</span>
                            <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div></div>
                            <button type="button" class="btn btn-default generate-pwd">Generate Password</button> -->
                        </form>
                    </div>
                </div>   
            </div>           
        </div>
    </div>
</div>


<!-- Modal Calculator -->
<div class="modal fade" id="modalCalculator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Calculator</h4>
            </div>
            <div class="modal-body" id="calculator">
                <div class="hero-unit" id="calculator-wrapper">
                    <div class="row">
                        <div class="col-sm-8">
                            <div id="calculator-screen" class="form-control"></div>
                        </div>
                        <div class="col-sm-1">
                            <div class="visible-xs">
                                =
                            </div>
                            <div class="hidden-xs">
                                =
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="calculator-result"  class="form-control">0</div>
                        </div>
                    </div>
                </div>
                <div class="well">
                    <div id="calc-board">
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="SIN" data-key="115">sin</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="COS" data-key="99">cos</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="MOD" data-key="109">md</a>
                            <a href="javascript:void(0);" class="btn btn-danger" data-method="reset" data-key="8">C</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="55">7</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="56">8</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="57">9</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="BRO" data-key="40">(</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="BRC" data-key="41">)</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="52">4</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="53">5</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="54">6</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="MIN" data-key="45">-</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="SUM" data-key="43">+</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="49">1</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="50">2</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="51">3</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="DIV" data-key="47">/</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="MULT" data-key="42">*</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="46">.</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="48">0</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="PROC" data-key="37">%</a>
                            <a href="javascript:void(0);" class="btn btn-primary" data-method="calculate" data-key="61">=</a>
                        </div>
                    </div>
                </div>
                <div class="well">
                    <legend>History</legend>
                    <div id="calc-panel">
                        <div id="calc-history">
                            <ol id="calc-history-list"></ol>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function deleteSingle(id,tablename){
        
        $.ajax({
                url:"<?php echo base_url()?>Admin_control/deleteS",
                method:"POST",
                data:{id:id,tablename:tablename},
                success:function(data){
                    // alert(data);
                alert('deleted!');
           
            window.location.reload();
        }
    })
    }
</script>