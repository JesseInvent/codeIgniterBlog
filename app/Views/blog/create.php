<div class="container">

    <h1>Create new post</h1>
    <?php if($_POST): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <?= form_open('blog/create') ?>
    <div class="form-group">
        <label for="title"><strong>Title:</strong></label>
        <input id="title" class="form-control" type="text" name="title">
    </div>    

    <div class="form-group">
        <label for="title"><strong>Body</strong></label>
        <textarea name="body" class="form-control" id="body"></textarea>
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-primary">Create</button>
    </div>

    </form>

</div>