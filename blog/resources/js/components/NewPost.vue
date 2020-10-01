<template>
    <div>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">New Post</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <!--<div class="card-header">
                                    &lt;!&ndash; <h3 class="card-title"></h3> &ndash;&gt;
                                    &lt;!&ndash;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus mr-1"></i>Add Post</button>&ndash;&gt;
                                    &lt;!&ndash;<a href="posts/create" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Add Post</a>&ndash;&gt;
                                </div>-->
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label>ចំណងជើង</label>
                                                <input type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label>អត្ថបទ</label>
                                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <div>
                                                        <input type="file" id="file" style="display:none;" />
                                                        <button class="btn btn-primary btn-sm"  v-on:click="upload"><i class="fas fa-upload"></i>
                                                            Upload Image
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <div class="form-group clearfix">
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="checkboxPrimary1">
                                                                <label for="checkboxPrimary1">Keep as Private</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 bg-blue">Right</div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </div>
</template>
<script>
    export default {
        methods: {

        }
    }
</script>
