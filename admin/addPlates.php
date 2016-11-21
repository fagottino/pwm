<div class="page-content">
    <div class="page-header">
        <h1>
            Aggiungi un nuovo piatto
        </h1>
    </div><!-- /.page-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">

                </div><!-- /.span -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>
                    <form class="form-horizontal" id="validation-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Nome:</label>

                            <div class="col-xs-12 col-sm-9">
                                <div class="clearfix">
                                    <input type="name" name="name" id="name" class="col-xs-12 col-sm-3" />
                                </div>
                            </div>
                        </div>

                        <div class="space-2"></div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Descrizione:</label>
                            <label for="form-field-8"></label>
                            <div class="col-xs-12 col-sm-9">
                                <div class="clearfix">
                                    <textarea class="form-control" id="description" placeholder="Descrizione del piatto" style="width:500px;height:150px;"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="price">Prezzo:</label>

                            <div class="col-xs-12 col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="ace-icon fa fa-euro"></i>
                                    </span>

                                    <input type="number" min="0" id="price" name="price" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="id-input-file-2">Immagine:</label>

                            <div class="col-xs-12 col-sm-9">
                                <div class="clearfix">
                                    <label class="ace-file-input">
                                        <input type="file" id="image" style="width:500px;">
                                        <span class="ace-file-container" data-title="Choose">
                                            <span class="ace-file-name" data-title="No File ...">
                                                <i class=" ace-icon fa fa-upload"></i>
                                            </span>
                                        </span>
                                        <a class="remove" href="#">
                                            <i class=" ace-icon fa fa-times"></i>
                                        </a>
                                    </label>
                                </div>
                                <span class="help-block">Immagini consentite: jpeg, jpg, png. Max 2MB</span>
                            </div>
                        </div>

                        <div class="space-2"></div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="available">Disponibile:</label>

                            <div class="col-xs-12 col-sm-9">
                                <div class="clearfix">
                                    <label>
                                        <input id="available" class="ace ace-switch ace-switch-3" type="checkbox">
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <button type="button" id="insertPlate" class="btn btn-sm btn-success" style="margin-left:40%;">
                            Invia
                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-230"></i>
                        </button>
                        </div>
                    </form>
                    <div>
                    </div>
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->