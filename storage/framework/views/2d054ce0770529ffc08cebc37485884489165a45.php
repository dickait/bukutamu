<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> <?php echo e(method_field('POST')); ?>

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Nama</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">Email</label>
                      <div class="col-md-6">
                          <input type="email" id="email" name="email" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="provinsi" class="col-md-3 control-label">Provinsi</label>
                      <div class="col-md-6">
                          <select id="provinsi" name="provinsi" class="form-control">
                              <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prov): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($prov->name); ?>"><?php echo e($prov->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="kota" class="col-md-3 control-label">Kota</label>
                      <div class="col-md-6">
                          <select id="kota" name="kota" class="form-control">
                              <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($kot->name); ?>"><?php echo e($kot->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="kecamatan" class="col-md-3 control-label">Kecamatan</label>
                      <div class="col-md-6">
                          <select id="kecamatan" name="kecamatan" class="form-control">
                              <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($kec->name); ?>"><?php echo e($kec->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="photo" class="col-md-3 control-label">Photo</label>
                      <div class="col-md-6">
                          <input type="file" id="photo" name="photo" class="form-control">
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal" id="modal-exim" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="<?php echo e(route('import.contact')); ?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title">Import/Export Contact</h3>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="export" class="col-md-3 control-label">Export</label>
                        <div class="col-md-6">
                            <a href="<?php echo e(route('export.contact')); ?>" class="btn btn-success">Export</a>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="file" class="col-md-3 control-label">Import</label>
                        <div class="col-md-6">
                            <input type="file" id="file" name="file" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>