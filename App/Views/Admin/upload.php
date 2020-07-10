<div class="col-md-8">
    <?php if (isset($params['error'])) :?>
        <p><?= $params['error'] ;?></p>
    <?php endif ;?>
    <h3 class="mb-3 mt-3">Upload file</h3>
    <form enctype="multipart/form-data"  action="/upload" method="post">
        <div class="form-group">
            <label for="login">File</label>
            <input type="file" name="todolist">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
