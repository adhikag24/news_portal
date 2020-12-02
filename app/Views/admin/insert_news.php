<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Insert News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">News</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                       
                        <!-- /.card-header -->
                        <div class="card-body">
                          <?= form_open(base_url('admin/insert_news')) ?>
                                 <div class="form-group">
                                    <label for="title">News Title</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" onkeyup = "createSlug()" id="title" value="<?= old('title') ?>" name = "title"
                                        placeholder="Title goes here...">
                                    <div class="invalid-feedback"><?= $validation->getError('title') ?></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="content">News Content</label>
                                    <textarea id="content"  class="form-control <?= ($validation->hasError('content')) ? 'is-invalid' : '' ?>" name="content" rows="4" cols="50">
                                    <?= old('content') ?>
                                    </textarea>
                                    <div class="invalid-feedback"><?= $validation->getError('content') ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="content">News Slug</label>
                                    <input type="text" value=" <?= old('slug') ?>" class="form-control" id="slug" name="slug" placeholder="" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="content">News Image</label><br>
                                    <input type="file" id="image" name = "image"
                                        placeholder="" readonly>
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Insert</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>