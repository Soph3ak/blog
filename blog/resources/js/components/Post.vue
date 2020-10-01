<template>
    <div>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Posts List</h1>
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
                                <div class="card-header">
                                    <!-- <h3 class="card-title"></h3> -->
                                    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus mr-1"></i>Add Post</button>-->
                                    <a href="posts/create" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Add Post</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                    <thead class="table-success">
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="ចំណងជើង: activate to sort column ascending">ចំណងជើង</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">អ្នកនិពន្ធ</th>
                                                        <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="កាលបរិច្ឆេទ: activate to sort column ascending" aria-sort="descending">កាលបរិច្ឆេទ</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th>
                                                        <th class="action" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="" style=""><span class="text-dark">Actions</span></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>Published</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>12.7</td>
                                                        <td>Published</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">បច្ចេកវិទ្យាសម័យទំនើបគ្រប់គ្រងទំនិញដ៏ឆ្លាតវៃ</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>2.7</td>
                                                        <td>Private</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>16.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td tabindex="0" class="sorting_1">អ្នកនិយម ផឹកស្រាបៀ អង្គរ  សូមប្រុងប្រយត្ន័ផង  កាំកុងត្រូល រកឃើញ</td>
                                                        <!--<td>Firefox 1.0</td>-->
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye mr-1"></i>View</a>
                                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">ចំណងជើង</th>
                                                        <th rowspan="1" colspan="1">អ្នកនិពន្ធ</th>
                                                        <th rowspan="1" colspan="1">កាលបរិច្ឆេទ</th>
                                                        <th rowspan="1" colspan="1">Status</th>
                                                        <th rowspan="1" colspan="1"></th>
                                                    </tr>
                                                    </tfoot>
                                                </table></div>
                                        </div>
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
        <!-- /.content-wrapper -->
        <!--<div class="modal fade hide" id="modal-lg" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-yellow">
                        <h4 class="modal-title">Add Post</h4>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                &lt;!&ndash; /.modal-content &ndash;&gt;
            </div>
            &lt;!&ndash; /.modal-dialog &ndash;&gt;
        </div>-->
    </div>
</template>
<script>
    export default {
        methods: {
            upload: function () {
                $("#file").click();
            }
        }
    }
</script>
